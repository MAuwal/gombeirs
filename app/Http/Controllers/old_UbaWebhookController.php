<?php

namespace App\Http\Controllers;


use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use App\Models\UBA;
use Illuminate\Support\Facades\Log;

class UbaWebhookController extends ProcessWebhookJob
{
   
    
    //  public function processWebhookConfig(WebhookConfig $config): void
    // {
    //     // Define your webhook configuration if needed
    // }

    // public function webhookShouldProcess(Request $request): bool
    // {
    //     // Implement any logic to determine if the webhook should be processed
    //     return true;
    // }

    public function handleWebhook(Request $request)
    {
        try {
            // Manually validate the webhook signature
            $this->validateWebhookSignature($request);

            // Your existing logic to handle webhook data
            $data = $request->only([
                'payer_name', 'agency_name', 'subhead', 'amount',
                'transaction_ref', 'date', 'account_no', 'account_name', 'description',
            ]);

            // Validate and save to database
            UBA::create($data);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error processing webhook: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Internal Server Error'], 500);
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
   
}

