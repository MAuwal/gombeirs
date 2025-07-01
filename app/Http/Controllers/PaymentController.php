<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;


class PaymentController extends Controller
{

    // PaymentController.php

    public function handle(Request $request)
    {
        // \Log::info('Webhook Data initialize:');
        
        // Extract data from the request
        $data = $request->json()->all();

        if ($this->isTransactionRefProcessed($data['TransactionRef'])) {
            return response()->json(['status' => 'skipped', 'message' => 'Transaction already processed']);
        }
        
        // Convert numeric values to strings if needed
        $data['Body']['amount'] = strval($data['Body']['amount'] ?? null);
        $data['Body']['merchant_amount'] = strval($data['Body']['merchant_amount'] ?? null);

        // \Log::info('Webhook Data:', $data);
        // \Log::error('Error accessing key:', ['data' => $data]);

        // Create a new payment record
        $payment = Payment::create([
            'Event' => $data['Event'] ?? null,
            'TransactionRef' => $data['TransactionRef'] ?? null,
            'Body' => json_encode($data['Body'] ?? null),
            'amount' => isset($data['Body']['amount']) ? (float) $data['Body']['amount'] : null, // Convert to float
            'gateway_ref' => $data['Body']['gateway_ref'] ?? null,
            'transaction_ref' => $data['Body']['transaction_ref'] ?? null,
            'transaction_status' => $data['Body']['transaction_status'] ?? null,
            'email' => $data['Body']['email'] ?? null,
            'merchant_id' => $data['Body']['merchant_id'] ?? null,
            'currency' => $data['Body']['currency'] ?? null,
            'transaction_type' => $data['Body']['transaction_type'] ?? null,
            'merchant_amount' => $data['Body']['merchant_amount'] ?? null,
            'customer_mobile' => $data['Body']['customer_mobile'] ?? null,
            'meta' => json_encode($data['Body']['meta'] ?? null),
            'payment_information' => json_encode($data['Body']['payment_information'] ?? null),
            'payment_type' => $data['Body']['payment_information']['payment_type'] ?? null,
            'customer_ref' => $data['Body']['payment_information']['customer_ref'] ?? null,
            'pan' => $data['Body']['payment_information']['pan'] ?? null,
            'plan' => $data['Body']['meta']['plan'] ?? null,
            'recurring_id' => $data['Body']['payment_information']['recurring_id'] ?? null,
            'card_type' => $data['Body']['payment_information']['card_type'] ?? null,
            'token_id' => $data['Body']['payment_information']['token_id'] ?? null,
            
            'is_recurring' => $data['Body']['is_recurring'] ?? null,
            //  'customer_ref' => $data['Body']['payment_information']['customer_ref'] ?? null,
        ]);

        // Additional actions based on the payment type
        // $this->handlePaymentType($data['Body'], $payment);

        // \Log::info('Success Webhook Data:', $data);

        return response()->json(['status' => 'success']);
    }

    private function isTransactionRefProcessed($transactionRef)
    {
        // Check if the transaction_ref already exists in the database
        return Payment::where('transaction_ref', $transactionRef)->exists();
    }

    public function index()
    {
        
        return view('payments.index'); // Assuming you have a view file in resources/views/invoices/index.blade.php
    }

    

}
