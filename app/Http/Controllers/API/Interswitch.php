<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\{MDA,Subhead};
use App\Models\Agency;
use App\Models\Invoice;
use App\Models\PaydirectPaymentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use SimpleXMLElement;


class Interswitch extends Controller
{

    // public function handleRequest(Request $request)
    // {
    //     $this->validateWebhookSignature($request);

    //     // Parse the XML payload
    //     // $xmlPayload = $request->getContent();
    //     $xmlPayload = $this->trimRequestPayload($request);
    //     Log::info('Received XML Payload: ' . $xmlPayload);
    //     $payload = simplexml_load_string($xmlPayload);
        

    //     if (!$payload) {
    //         // Log::error('Invalid XML payload.');
    //         // return response()->json(['error' => 'Invalid XML payload.'], 400);
            
    //         $payload = $this->parseRequestPayload($payload);
    //     }

    //     // Convert SimpleXMLElement to JSON and then to array
    //     $payloadArray = json_decode(json_encode($payload), true);
    //     Log::info('Parsed XML Payload: ', $payloadArray);

    //     // Determine the request type based on the presence of CustReference or Payments elements
    //     if (isset($payload->CustReference)) {
    //         // // OLD
    //         // Handle Customer Validation
    //         // return $this->getInvoiceDetails((string)$payload->CustReference);
            
            
    //         // // NEW
    //         // Handle Customer Validation
    //         return $this->getInvoiceDetails($payload);
            
    //     } elseif (isset($payload->Payments)) {
    //         // Handle Payment Notification
    //         return $this->handlePaymentNotification($payload->Payments);
    //     } else {
    //         Log::error('Unknown request type.');
    //         return response()->json(['error' => 'Unknown request type.'], 400);
    //     }
    // }
   public function handleRequest(Request $request)
    {
        $this->validateWebhookSignature($request);

        // Parse the XML payload
        // $xmlPayload = $request->getContent();
        $xmlPayload = $this->trimRequestPayload($request);
        Log::info('Received XML Payload: ' . $xmlPayload);
        $payload = simplexml_load_string($xmlPayload);
        

        if (!$payload) {
            // Log::error('Invalid XML payload.');
            // return response()->json(['error' => 'Invalid XML payload.'], 400);
            
            $payload = $this->parseRequestPayload($payload);
        }

        // Convert SimpleXMLElement to JSON and then to array
        $payloadArray = json_decode(json_encode($payload), true);
        Log::info('Parsed XML Payload: ', $payloadArray);

        // Determine the request type based on the presence of CustReference or Payments elements
        if (isset($payload->CustReference)) {
            // // OLD
            // Handle Customer Validation
            // return $this->getInvoiceDetails((string)$payload->CustReference);
            
            
            // // NEW
            // Handle Customer Validation
            return $this->getInvoiceDetails($payload);
            
        } elseif (isset($payload->Payments)) {
            // Handle Payment Notification
            return $this->handlePaymentNotification($payload->Payments);
        } else {
            Log::error('Unknown request type.');
            return response()->json(['error' => 'Unknown request type.'], 400);
        }
    }
    


    
    // // Uzochi Dimkpa
    // // NEW
    // getInvoiceDetails function override
    /**/
    public function getInvoiceDetails($payload)
{
    try {
        $invoiceId = (string) $payload->CustReference;
        $merchantRef = (string) $payload->MerchantReference;
        $ProductCode = (string) $payload->PaymentItemCode;
        
        Log::info('Request received for invoice ID: ' . $invoiceId);

        $invoice = Invoice::where('invoice_id', $invoiceId)
            ->where('item_code', $ProductCode)
            ->where(function($query) {
                $query->where('status', '')
                    ->orWhereNull('status');
            })
            ->first();

        $taxpayerFirstName = null;

        if ($invoice && $merchantRef != '') {
            $status = ($merchantRef == '8311' || $merchantRef == 8311) ? '0' : '1';
            $custRefStatus = ($invoice->invoice_id == $payload->CustReference) ? '0' : '1';
            $taxpayerFirstName = ($status == '0' && $custRefStatus == '0') ? $invoice->taxpayer_name : '';
        } else {
            $status = '1';
            $invoice = new \stdClass();
            $invoice->invoice_id = $invoiceId;
            $invoice->id = '';
            $invoice->taxpayer_name = '';
            $invoice->email = '';
            $invoice->phone_number = '';
            $invoice->rate = '0';
            $invoice->agency_name = '';

            $payload->PaymentItemCode = '';
        }

        $responseArray = [
            'MerchantReference' => $merchantRef,
            'Customers' => [
                'Customer' => [
                    'Status' => $status,
                    'CustReference' => $invoice->invoice_id,
                    'CustomerReferenceAlternate' => $invoice->id,
                    'FirstName' => $taxpayerFirstName,
                    'LastName' => '',
                    'Email' => $invoice->email,
                    'Phone' => $invoice->phone_number,
                    'ThirdPartyCode' => '',
                    'Amount' => $invoice->rate,
                    'PaymentItems' => [
                        'Item' => [
                            'ProductName' => trim($invoice->revenue_item_name),
                            'ProductCode' => $payload->PaymentItemCode,
                            'Quantity' => '1',
                            'Price' => $invoice->rate,
                            'Subtotal' => $invoice->rate,
                            'Tax' => '0',
                            'Total' => $invoice->rate,
                        ]
                    ]
                ]
            ]
        ];

        $xmlData = new \SimpleXMLElement('<CustomerInformationResponse/>');
        $this->arrayToXml($responseArray, $xmlData);
        $xmlResponse = $xmlData->asXML();

        // Remove the XML version declaration
        $xmlResponse = preg_replace('/<\?xml.*?\?>/', '', $xmlResponse);

        // Trim any leading whitespace
        $xmlResponse = trim($xmlResponse);

        return response($xmlResponse, 200)->header('Content-Type', 'text/xml');
    } catch (\Exception $e) {
        Log::error('Error retrieving invoice details', ['error' => $e->getMessage()]);

        $errorResponseArray = [
            'error' => 'Invoice not found.'
        ];

        $xmlData = new \SimpleXMLElement('<response></response>');
        $this->arrayToXml($errorResponseArray, $xmlData);
        $xmlResponse = $xmlData->asXML();

        // Remove the XML version declaration
        $xmlResponse = preg_replace('/<\?xml.*?\?>/', '', $xmlResponse);

        // Trim any leading whitespace
        $xmlResponse = trim($xmlResponse);

        return response($xmlResponse, 200)->header('Content-Type', 'text/xml');
    }
}

    /**/
    
    
    
    // // Uzochi Dimkpa
    // // NEW
    // Remove special characters from beginning and end of request payload
    private function trimRequestPayload($request) : string
    {
        $str = trim(
                    $request->getContent(),
                    ' <>!@#$%^&*(){}[]:;*-+~\',".?/|\\'
                );
        $str = '<' . $str . '>';
        
        return $str;
    }
    



    private function arrayToXml($data, &$xmlData)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (is_numeric($key)) {
                    $key = 'item' . $key; // dealing with <0/>..<n/> issues
                }
                $subnode = $xmlData->addChild($key);
                $this->arrayToXml($value, $subnode);
            } else {
                // echo "$key\n";
                // echo htmlspecialchars("$value") . "\n";
                $xmlData->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }

   

    public function handlePaymentNotification($paymentsElement)
    {
        try {
            // Ensure $paymentsElement contains Payment elements
            if (!isset($paymentsElement->Payment)) {
                return $this->sendNotificationResponse(null, 1);
            }

            $lastPaymentLogId = null;

            // Extract payments from $paymentsElement
            $payments = $paymentsElement->Payment;

            // Ensure $payments is an array
            if (!is_array($payments)) {
                $payments = [$payments];
            }
            
            // // Uzochi Dimkpa
            // Increase scope of $invoice variable to work with later in function
            $invoice = NULL;

            // Iterate over payments
            foreach ($payments as $payment) {
                // Debug logging for $payment array
                Log::info('Processing payment', ['payment' => json_decode(json_encode($payment), true)]);

                // Check if the necessary keys exist in $payment
                if (!isset($payment->CustReference)) {
                    Log::error('Missing CustReference key in payment', ['payment' => json_decode(json_encode($payment), true)]);
                    return $this->sendNotificationResponse('nullcust', 1); // Return with status 1 for invalid payment notification
                }
                if (!isset($payment->Amount)) {
                    Log::error('Missing Amount key in payment', ['payment' => json_decode(json_encode($payment), true)]);
                    return $this->sendNotificationResponse('nullamount', 1); // Return with status 1 for invalid payment notification
                }
                if (!isset($payment->IsReversal)) {
                    Log::error('Missing IsReversal key in payment', ['payment' => json_decode(json_encode($payment), true)]);
                    return $this->sendNotificationResponse('nullreversal', 1); // Return with status 1 for invalid payment notification
                }

                $custReference = (string) $payment->CustReference;
                $amount = (float) $payment->Amount;
                $isReversal = filter_var((string) $payment->IsReversal, FILTER_VALIDATE_BOOLEAN);

                Log::info('After the 3 checks');

                // Find the invoice
                // $invoice = Invoice::where('invoice_id', $custReference)->firstOrFail();
                $invoice = Invoice::where('invoice_id', $custReference)->first();
                
                
                // Update invoice based on payment if invoice is found
                if ($invoice) {
                    // invoice found, check for IsReversal
                    if ($isReversal) {
                        $invoice->status = 'REVERSED';
                        // $invoice->rate -= $amount;
                    } else {
                        $invoice->status = 'PAID';
                        // $invoice->rate += $amount;
                    }

                    // Update and save invoice to DB
                    $invoice->save();
                } else {
                    // Unable to find invoice, return status of '1'
                    return $this->sendNotificationResponse(
                        $payment->PaymentLogId,
                        1
                    );
                }
                
                
                // // Uzochi Dimkpa
                // Check for invalid amount in request payload
                if ($amount != $invoice->rate) {
                    // echo $amount . "\n";
                    // echo $invoice->rate . "\n";
                    // Amount in request payload and invoice rate do not match,
                    // return with status of '1'
                    return $this->sendNotificationResponse(
                        $payment->PaymentLogId,
                        1
                    );
                }
                
                
                // Update last payment log id
                $lastPaymentLogId = (string) $payment->PaymentLogId;
                
                
                // // Uzochi Dimkpa
                // // NEW
                // If condition to check for duplicate payment notification.
                // If duplicate
                // Return status of 0
                // Else
                // Create record
                $paydirectRecord = DB::table('paydirect_payment_notifications')
                    ->where('payment_log_id', '=', (string) $payment->PaymentLogId)
                    ->where('cust_reference', '=', (string) $payment->CustReference)
                    ->get();
                
                if ($paydirectRecord != "[]") {
                    // Found duplicate, return with status 0
                    return $this->sendNotificationResponse(
                        $lastPaymentLogId,
                        0
                    );
                } else {
                    // Create payment notification record
                    $this->createPaydirectRecord(
                        $payment, $custReference, $amount, $isReversal
                    );
                }

                Log::info('Payment notification processed successfully.', ['invoice_id' => $invoice->id]);
            }

            // // OLD
            // Return success response with last payment log id
            // return $this->sendNotificationResponse($lastPaymentLogId, 0);
            
            
            // // Uzochi Dimkpa
            // // NEW
            // Expired customer reference id check
            // Return status of 2 response with last payment log id
            // and determines status of response message based on whether
            // customer invoice is paid or not
            return $this->sendNotificationResponse(
                $lastPaymentLogId,
                ($invoice->status == 'PAID') ? 0 : 2
            );
            
        } catch (\Exception $e) {
            // Log error and return failure response
            Log::error('Error processing payment notification', [
                'error' => $e->getMessage(),
            ]);
            return $this->sendNotificationResponse(null, 1);
        }
    }
    
    
    
    // Create record in `paydirect_payment_notifications` table
    private function createPaydirectRecord($payment, $custReference, $amount, $isReversal)
    {
        PaydirectPaymentNotification::create([
            'product_group_code' => (string) $payment->ProductGroupCode,
            'payment_log_id' => (int) $payment->PaymentLogId,
            'cust_reference' => $custReference,
            'alternate_cust_reference' => (string) $payment->AlternateCustReference,
            'amount' => $amount,
            'currency' => 'Naira',
            'payment_status' => (int) $payment->PaymentStatus,
            'payment_method' => (string) $payment->PaymentMethod,
            'payment_reference' => (string) $payment->PaymentReference,
            'terminal_id' => (string) $payment->TerminalId,
            'channel_name' => (string) $payment->ChannelName,
            'location' => (string) $payment->Location,
            'is_reversal' => $isReversal,
            'payment_date' => (string) $payment->PaymentDate,
            'settlement_date' => (string) $payment->SettlementDate,
            'institution_id' => (string) $payment->InstitutionId,
            'institution_name' => (string) $payment->InstitutionName,
            'branch_name' => (string) $payment->BranchName,
            'bank_name' => (string) $payment->BankName,
            'fee_name' => (string) $payment->FeeName,
            'customer_name' => (string) $payment->CustomerName,
            'other_customer_info' => (string) $payment->OtherCustomerInfo,
            'receipt_no' => (string) $payment->ReceiptNo,
            'collections_account' => (string) $payment->CollectionsAccount,
            'third_party_code' => (string) $payment->ThirdPartyCode,
            'payment_items' => json_encode($payment->PaymentItems),
            'bank_code' => (string) $payment->BankCode,
            'customer_address' => (string) $payment->CustomerAddress,
            'customer_phone_number' => (string) $payment->CustomerPhoneNumber,
            'depositor_name' => (string) $payment->DepositorName,
            'deposit_slip_number' => (string) $payment->DepositSlipNumber,
            'payment_currency' => (string) $payment->PaymentCurrency,
            'original_payment_log_id' => (int) $payment->OriginalPaymentLogId,
            'original_payment_reference' => (string) $payment->OriginalPaymentReference,
            'teller' => (string) $payment->Teller,
        ]);
    }                   
    
    

    // private function sendNotificationResponse($paymentLogId, $status)
    // {
    //     $responseArray = [
    //         'Payments' => [
    //             'Payment' => [
    //                 'PaymentLogId' => $paymentLogId,
    //                 'Status' => $status
    //             ]
    //         ]
    //     ];

    //     $xmlData = new \SimpleXMLElement('<PaymentNotificationresponse></PaymentNotificationresponse>');
    //     $this->arrayToXml($responseArray, $xmlData);
    //     $xmlResponse = $xmlData->asXML();

    //     return response($xmlResponse, 200)->header('Content-Type', 'text/xml');
    // }
    
    
   private function sendNotificationResponse($paymentLogId, $status)
{
    $responseArray = [
        'Payments' => [
            'Payment' => [
                'PaymentLogId' => $paymentLogId,
                'Status' => $status
            ]
        ]
    ];

    // Create the XML element without the XML declaration
    $xmlData = new \SimpleXMLElement('<PaymentNotificationResponse></PaymentNotificationResponse>');
    $this->arrayToXml($responseArray, $xmlData);

    // Manually convert the SimpleXMLElement to string to avoid XML declaration
    $dom = dom_import_simplexml($xmlData)->ownerDocument;
    $dom->formatOutput = true; // This ensures proper indentation
    $xmlResponse = $dom->saveXML($dom->documentElement);

    return response($xmlResponse, 200)->header('Content-Type', 'text/xml');
}


    
    
    // Mustapha
    // Signature is passed as a request <ServicePassword>Interswitch@123</ServicePassword>
    // private function validateWebhookSignature(Request $request)
    // {
    //     $expectedSecretKey = env('INTERSWITCH_API_SIGNATURE');
    
    //     // Parse the XML payload to get the ServicePassword
    //     // $xmlPayload = $request->getContent();
    //     $xmlPayload = $this->trimRequestPayload($request);
        
    //     // // DEBUG
    //     // $result = new SimpleXMLElement($xmlPayload);
    //     // echo $result;
    //     // echo $xmlPayload->asXML();
    //     // $test = new SimpleXMLElement($xmlPayload);
    //     // print_r($test->asXML());
        
    //     $payload = simplexml_load_string($xmlPayload);
        
        
    //     if (!$payload) {
    //         $payload = $this->parseRequestPayload($payload);
            
    //         // throw new \Exception('Invalid XML payload.');
    //     }
        
    //     // Extract the ServicePassword from the payload
    //     $servicePassword = (string) $payload->ServicePassword;
        
    //     if ($servicePassword !== $expectedSecretKey) {
    //         throw new \Exception('Invalid webhook signature');
            
    //     }
    // }
    private function validateWebhookSignature(Request $request)
    {
        $expectedSecretKey = env('INTERSWITCH_API_SIGNATURE');
    
        // Parse the XML payload to get the ServicePassword
        // $xmlPayload = $request->getContent();
        $xmlPayload = $this->trimRequestPayload($request);
        
        // // DEBUG
        // $result = new SimpleXMLElement($xmlPayload);
        // echo $result;
        // echo $xmlPayload->asXML();
        // $test = new SimpleXMLElement($xmlPayload);
        // print_r($test->asXML());
        
        $payload = simplexml_load_string($xmlPayload);
        
        
        if (!$payload) {
            $payload = $this->parseRequestPayload($payload);
            
            // throw new \Exception('Invalid XML payload.');
        }
        
        // Extract the ServicePassword from the payload
        $servicePassword = (string) $payload->ServicePassword;
        
        if ($servicePassword !== $expectedSecretKey) {
            throw new \Exception('Invalid webhook signature');
            
        }
    }
    
    

   

    
    
    // // Uzochi Dimkpa
    // // NEW
    // Parses XML payload with soap envelope
       private function parseRequestPayload($payload) {
        $sxe = new SimpleXMLElement($payload->asXML());
        $sxe->registerXPathNamespace('xmlns', 'http://schemas.xmlsoap.org/soap/envelope/');
        
        $result = $sxe->xpath('//ns3:Body');
        $xmlName = $result[0]->children()->getName();
        
        // return simplexml_load_string($result[0]->asXML());
        return simplexml_load_string($result[0]->$xmlName->asXML());
    }
    
}