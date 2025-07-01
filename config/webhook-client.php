<?php

return [
    'configs' => [
        [
            'name' => 'uba',
            'signing_secret' => env('UBA_WEBHOOK_SECRET'),
            'signature_header_name' => 'Signature',
            'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'store_headers' => [],
            'process_webhook_job' => App\Http\Controllers\UbaWebhookController::class,
        ],
    ],

    /*
     * The integer amount of days after which models should be deleted.
     *
     * It deletes all records after 1 week. Set to null if no models should be deleted.
     */
    // 'delete_after_days' => 30,
];
