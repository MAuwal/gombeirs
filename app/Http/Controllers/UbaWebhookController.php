<?php

namespace App\Http\Controllers;


use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use App\Models\UBA;
use App\Services\EncryptionService;
use Illuminate\Support\Facades\Log;

class UbaWebhookController extends ProcessWebhookJob
{
   public function handleWebhook(Request $request)
    {
        try {
            // Manually validate the webhook signature
            $this->validateWebhookSignature($request);

            // Decode the request body as an array of transactions
            $transactions = json_decode($request->getContent(), true);

            if (!is_array($transactions)) {
                throw new \Exception('Invalid JSON payload');
            }

            // Process each transaction
            foreach ($transactions as $transaction) {
                // Ensure that the transaction is an array
                if (!is_array($transaction)) {
                    throw new \Exception('Each transaction must be an object');
                }

                // Check for required keys
                if (!isset($transaction['transactionCypherText']) || !isset($transaction['checksumCypherText'])) {
                    throw new \Exception('Missing required transaction fields');
                }

                // Decrypt the transaction data
                $transactionData = $this->decryptData($transaction['transactionCypherText']);

                // Verify the checksum
                $this->verifyChecksum($transactionData, $transaction['checksumCypherText']);

                // Parse the transaction data
                $data = json_decode($transactionData, true);

                if (!is_array($data)) {
                    throw new \Exception('Decryption did not result in a valid JSON array');
                }

                // Your existing logic to handle webhook data
                $fields = [
                    'payer_name', 'agency_name', 'subhead', 'amount',
                    'transaction_ref', 'date', 'account_no', 'account_name', 'description',
                ];

                $filteredData = array_intersect_key($data, array_flip($fields));

                // Validate and save to database
                UBA::create($filteredData);
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error processing webhook: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function validateWebhookSignature(Request $request)
    {
        // Retrieve the secret key from your environment or configuration
        $expectedSecretKey = env('WEBHOOK_CLIENT_SECRET');

        // Retrieve the signature from the request headers
        $incomingSignature = $request->header('Signature');

        // Manually compare the signatures
        if ($incomingSignature !== $expectedSecretKey) {
            throw new \Exception('Invalid webhook signature');
        }
    }

    private function decryptData($encryptedData)
    {
        // Load your private key from storage
        $privateKeyPath = storage_path('keys/uba/private_key.pem');
        $privateKey = file_get_contents($privateKeyPath);

        if (!$privateKey) {
            throw new \Exception('Failed to read the private key.');
        }

        $privateKeyResource = openssl_pkey_get_private($privateKey);

        if (!$privateKeyResource) {
            throw new \Exception('Invalid private key.');
        }

        // Initialize the decryption process using openssl
        $decryptedData = '';
        openssl_private_decrypt(base64_decode($encryptedData), $decryptedData, $privateKeyResource);

        if (!$decryptedData) {
            throw new \Exception('Decryption failed');
        }

        return $decryptedData;
    }

    private function verifyChecksum($data, $checksumCypherText)
    {
        // Calculate the SHA-256 checksum of the decrypted data
        $calculatedChecksum = hash('sha256', $data, true); // Ensure binary output

        // Log for debugging
        Log::debug('Decrypted Data: ' . $data);
        Log::debug('Calculated Checksum: ' . base64_encode($calculatedChecksum));
        Log::debug('Provided Checksum: ' . $checksumCypherText);

        // Compare the calculated checksum with the provided checksum
        if ($calculatedChecksum !== base64_decode($checksumCypherText)) {
            throw new \Exception('Checksum verification failed');
        }
    }

}

