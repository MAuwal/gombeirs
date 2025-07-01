<?php

namespace App\handler;

use App\Models\UBA;
use Illuminate\Http\Request;
use Spatie\WebhookClient\ProcessWebhookJob;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ubaHandler extends ProcessWebhookJob
{
    public function handle()
    {
        // Access webhook payload data
        $payload = $this->webhookCall->payload;

        // Handle the values as needed
        $data = [
            'payer_name' => $payload['PayerName'],
            'agency_name' => $payload['AgencyName'],
            'subhead' => $payload['Subhead'],
            'amount' => $payload['Amount'],
            'transaction_ref' => $payload['TransactionRef'],
            'date' => $payload['Date'],
            'account_no' => $payload['AccountNo'],
            'account_name' => $payload['AccountName'],
            'description' => $payload['Description'],
        ];

        // Validate and save to database or perform other actions
        \App\Models\UBA::create($data);

        // Log the processed payload
        Log::info('Webhook payload processed:', $data);
    }
}