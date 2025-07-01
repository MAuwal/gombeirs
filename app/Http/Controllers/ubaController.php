<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UBA;
use App\Services\EncryptionService;
use Exception;
use Illuminate\Support\Facades\Log;

class ubaController extends Controller
{
    protected $encryptionService;

    public function __construct(EncryptionService $encryptionService)
    {
        $this->encryptionService = $encryptionService;
    }

    public function handleWebhook(Request $request)
    {
        Log::info('Webhook received', ['request' => $request->all()]);

        $records = $request->all();

        foreach ($records as $index => $record) {
            Log::info('Processing record', ['index' => $index, 'record' => $record]);

            $ciphertextBase64 = $record['transactionCypherText'];
            $checksumCypherText = $record['checksumCypherText'];

            try {
                // Decrypt the message
                $decryptedData = $this->encryptionService->decryptMessage($ciphertextBase64);
                Log::info('Decrypted data', ['index' => $index, 'decryptedData' => $decryptedData]);

                // Verify the checksum
                $this->encryptionService->verifyChecksum($decryptedData, $checksumCypherText);
                Log::info('Checksum verified', ['index' => $index]);

                // Decode JSON data
                $decryptedArray = json_decode($decryptedData, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    throw new Exception('JSON decode error: ' . json_last_error_msg());
                }
                Log::info('Decrypted array', ['index' => $index, 'decryptedArray' => $decryptedArray]);

                // Save the record to the database
                $uba = new UBA();
               $uba->payer_name = $decryptedArray['payer_name'] ?? null;
                $uba->agency_name = $decryptedArray['agency_name'] ?? null;
                $uba->subhead = $decryptedArray['subhead'] ?? null;
                $uba->amount = $decryptedArray['amount'] ?? null;
                $uba->transaction_ref = $decryptedArray['transaction_ref'] ?? null;
                $uba->date = $decryptedArray['date'] ?? null;
                $uba->account_no = $decryptedArray['account_no'] ?? null;
                $uba->account_name = $decryptedArray['account_name'] ?? null;
                $uba->description = $decryptedArray['description'] ?? null;
                $uba->save();
                Log::info('Record saved successfully', ['index' => $index]);

            } catch (Exception $e) {
                // Log the error
                Log::error('Error processing record', ['index' => $index, 'error' => $e->getMessage(), 'record' => $record]);

                // Handle exceptions
                return response()->json(['error' => 'Error processing record at index ' . $index . ': ' . $e->getMessage()], 400);
            }
        }

        return response()->json(['message' => 'All records processed successfully'], 200);
    }
}
