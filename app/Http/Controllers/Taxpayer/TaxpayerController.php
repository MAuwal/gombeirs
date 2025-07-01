<?php

namespace App\Http\Controllers\Taxpayer;

use App\Http\Controllers\Controller;

use App\Models\Taxpayer;
use App\Models\{MDA,Subhead};
use App\Models\Agency;
use App\Models\Payment;
use App\Models\Receipt;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\RevenueItem;
use Illuminate\Http\Request;
use PDF;
use Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TaxpayerController extends Controller
{
    public function all()
    {
        $taxpayers = Taxpayer::all(); 
        return view('taxpayers.index', compact('taxpayers'));
    }
    public function index()
    {
        // Retrieve the authenticated user
        $userId = auth()->id();

        // Get the taxpayers associated with the current user
        $taxpayers = Taxpayer::where('user_id', $userId)->get();

        return view('taxpayers.index', compact('taxpayers'));
    }

    private function getAgencies()
    {
        return Agency::all();
    }
   

    public function showForm()
    {
        $agencies = $this->getAgencies();
        
        $revenueItems = [];
        $rates = [];

        return view('taxpayers.view', compact('agencies', 'revenueItems', 'rates'));
    }

    public function getRevenueItems(Request $request)
    {
        $agencies = $this->getAgencies(); // Fetch agencies
        $agency = Agency::findOrFail($request->agency_id);
        $revenueItems = $agency->revenueItems;
        $rates = [];

        foreach ($revenueItems as $revenueItem) {
            $rates[$revenueItem->id] = $revenueItem->pivot->rate;
        }
        return response()->json($revenueItems);
        
    }

    public function getRate(Request $request)
    {
        $selectedRevenueItem = RevenueItem::findOrFail($request->revenue_item_id);
        $rates = $selectedRevenueItem->agencies->pluck('pivot.rate', 'pivot.agency_id')->toArray();
        return response()->json($rates);
    }
    
 
    
    private function generateRRR($totalAmount, $orderId, $revenueItemId)
    {
        $revenueItem = RevenueItem::findOrFail($revenueItemId);
        
    
        // $merchantId = 2547916;
        // $apiKey = 1946;
        // $serviceTypeId = 4430731;
        
        
        //  $merchantId = 195287;
        // $apiKey = 5153581196;
        
         $merchantId = 5153581196;
        $apiKey = 141876;
          $serviceTypeId = $revenueItem->service_types_id;
        $user = Auth::user();
        
         // Retrieve user details from the invoice
         $invoice = Invoice::findOrFail($orderId); // Assuming $orderId represents the invoice ID
        
         $name = $invoice->taxpayer_name;
         $email = 'info@gombeirs.com';
         $phone = $invoice->phone_number;
         $description = $invoice->details;
    
        // Calculate individual amounts based on percentages
        $amount88Percent = $totalAmount * 0.88;
        $amount12Percent = $totalAmount * 0.12;
    
        // $inputData = $merchantId . $serviceTypeId . $orderId . $totalAmount . $apiKey;
        $inputData = $merchantId . $serviceTypeId . $orderId . number_format($totalAmount, 2, '.', '') . $apiKey;
    
        $apiHash = hash('sha512', $inputData);
        $curl = curl_init();
    
        echo ($serviceTypeId);
        echo ($name);
        echo ($email);
        echo ($description);
        // \Log::error('API Hash: ' . $apiHash);
        // \Log::error('cURL Error: ' . $error);
    
        $requestPayload = [
            'serviceTypeId' => $serviceTypeId,
            'amount' => number_format($totalAmount, 2, '.', ''),
            'orderId' => $orderId,
            'payerName' => $name,
            'payerEmail' => $email,
            'payerPhone' => $phone,
            'description' => $description,
        //     'lineItems' => [
        //         [
        // //             "lineItemsId":"itemid1",
        // //   "beneficiaryName":"Alozie Michael",
        // //   "beneficiaryAccount":"6020067886",
        // //   "bankCode":"058",
        // //   "beneficiaryAmount":"7000",
        // //   "deductFeeFrom":"1"
        //             'lineItemsId' => 'itemid1',
        //             'beneficiaryName' => 'Gombe State Lead IGR',
        //             'beneficiaryAccount' => '1023152372',
        //             'bankCode' => '033',
        //             'beneficiaryAmount' => number_format($amount88Percent, 2, '.', ''), // Updated to 88% of totalAmount
        //             'deductFeeFrom' => '1',
        //         ],
        //         [
        // //             "lineItemsId":"itemid2",
        // //   "beneficiaryName":"Folivi Joshua",
        // //   "beneficiaryAccount":"0360883515",
        // //   "bankCode":"058",
        // //   "beneficiaryAmount":"3000",
        // //   "deductFeeFrom":"0"
        //             'lineItemsId' => 'itemid2',
        //             'beneficiaryName' => 'JEWEL ICT HUB LIMITED',
        //             'beneficiaryAccount' => '0005865245',
        //             'bankCode' => '302',
        //             'beneficiaryAmount' => number_format($amount12Percent, 2, '.', ''), // Updated to 12% of totalAmount
        //             'deductFeeFrom' => '0',
        //         ],
        //     ],
        ];
    
        $requestPayloadJson = json_encode($requestPayload, JSON_PRETTY_PRINT);
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://login.remita.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $requestPayloadJson,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "Authorization: remitaConsumerKey=$merchantId,remitaConsumerToken=$apiHash"
            ),
            CURLOPT_CAINFO => public_path('cacert.pem'),
        ));
    
        $response = curl_exec($curl);
        $error = curl_error($curl);
    
        curl_close($curl);
    
        if ($error) {
            // Log the error
            // \Log::error('cURL Error: ' . $error);
    
            // Handle the error as needed
            return ['error' => 'cURL error occurred'];
        }
    
        // Log the request and response
        // \Log::info('GenerateRRR Request: ' . $requestPayloadJson);
        // \Log::info('GenerateRRR Response: ' . $response);
        echo ($response);
    
        // The response is always returned as jsonp, first convert it to json
        $jsonString = preg_replace('/^jsonp \((.*)\)$/', '$1', $response);
    
        // Parse the JSON string into a PHP array
        $dataArray = json_decode($jsonString, true);
    
        return $dataArray;
    }
    
    
        
    private function verifyWithRRR($transactionRef)
    {
         $merchantId = 5153581196;
        $apiKey = 141876;
    
        $inputData = $transactionRef . $apiKey . $merchantId;
        $apiHash = hash('sha512', $inputData);
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://login.remita.net/remita/ecomm/$merchantId/$transactionRef/$apiHash/status.reg",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "Authorization: remitaConsumerKey=$merchantId,remitaConsumerToken=$apiHash"
            ),
            CURLOPT_CAINFO => public_path('cacert.pem'),
        ));
    
        $response = curl_exec($curl);
    
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($response === false) {
            // \Log::error('cURL Error: ' . curl_error($curl));
            return ['error' => 'cURL error occurred'];
        }
        
        if ($httpCode !== 200) {
            // \Log::error('HTTP Error: ' . $httpCode);
            return ['error' => 'HTTP error occurred', 'http_code' => $httpCode];
        }
    
        curl_close($curl);
    
        // Log the request and response
        // \Log::info("VerifyWithRRR Request: ");
        // \Log::info('VerifyWithRRR Response: ' . $response);
    
        $responseData = json_decode($response);
    
        if (isset($responseData->status) && $responseData->status == "success") {
            // Check if the message is "Successful"
            if (isset($responseData->message) && $responseData->message == "Successful") {
                // Call updatePaymentStatus function with invoiceId
                $invoiceId = "response.amount"; // Replace this with your actual invoiceId
                $this->updatePaymentStatus($invoiceId);
            }
        }
    
        return $responseData;
    }
    
    
    
    public function verifyPayment($rrr)
        {
            // Call your verifyWithRRR method
            $verificationResult = $this->verifyWithRRR($rrr);
    
            // Return the verification result as JSON
            return response()->json($verificationResult);
        }
        

    
    // old working fine before i pull interswitch_id and save to invoice item code
    public function generateInvoice(Request $request)
    {
        $request->validate([
            'taxpayer_id' => 'required',
            'items' => 'required|array',
            'agency_id' => 'nullable|exists:agencies,id',
            'revenue_item_id' => 'nullable|exists:revenue_items,id',
        ]);
        
        // Start a database transaction
        DB::beginTransaction();
    
    
        // Fetch the corresponding taxpayer
        try {
            $taxpayer = Taxpayer::findOrFail($request->input('taxpayer_id'));
    
            $agencyId = $request->input('agency_id');
            $revenueItemId = $request->input('revenue_item_id');
    
            $agency = $agencyId ? Agency::findOrFail($agencyId) : null;
            $revenueItem = $revenueItemId ? RevenueItem::findOrFail($revenueItemId) : null;
            
            // Fetch the interswitch_id from the revenue_items table
        $interswitchId = $revenueItem ? $revenueItem->interswitch_id : null; // Added line

    
            // Create a new Invoice instance
            $invoice = new Invoice();
            $invoice->user_id = Auth::id();
            // $invoice->taxpayer_name = $taxpayer->name;
            // $invoice->address = $taxpayer->address;
            $invoice->phone_number = $taxpayer->phone_number;
            $invoice->agency_name = $agency ? $agency->agency_name : null;
            $invoice->revenue_item_name = $revenueItem ? $revenueItem->revenue_item : null;
            //  $invoice->details = $request->input('details');
            $invoice->invoice_id = Str::random(10);
            
            $invoice->taxpayer_name = strtoupper($taxpayer->name);
            $invoice->address = strtoupper($taxpayer->address);
            $invoice->details = strtoupper($request->input('details'));

            
            $invoice->item_code = $interswitchId;
        
            // Save the invoice
            $invoice->save();
    
            // Save invoice items for each Agency and Subhead
            $items = $request->input('items');
            $totalAmount = 0;
    
            if (!empty($items) && is_array($items)) {
                foreach ($items as $item) {
                    // Validate each item based on your requirements
                    $validator = Validator::make($item, [
                        'agency_id' => 'required',
                        'revenue_item_id' => 'required',
                        'rate' => 'required|numeric',
                    ]);
    
                    if ($validator->fails()) {
                        // Handle validation failure, return an error response if needed
                        return response()->json(['error' => $validator->errors()], 422);
                    }
    
                    $invoiceItem = new InvoiceItem();
                    // Use the saved invoice ID
                    $invoiceItem->invoice_id = $invoice->id;
                    $invoiceItem->agency_id = $item['agency_id'];
                    $invoiceItem->revenue_item_id = $item['revenue_item_id'];
                    $invoiceItem->user_id = Auth::id();
                    $invoiceItem->rate = $item['rate'];
                    $invoiceItem->save();
    
                    // Accumulate the rate to calculate the total amount
                    $totalAmount += $item['rate'];
                }
            } else {
                // Handle the case where items are null or not an array
                // \Log::error('Items array is null or not an array');
                return response()->json(['error' => 'Invalid items array'], 422);
            }
    
            // Set the total amount in the invoice
            $invoice->rate = $totalAmount;
            
            // Generating RRR
            // i commented below due to remita changed their key, now we generate invoice with no RRR, before it's resolved
        //      $rrrData = self::generateRRR($totalAmount, $invoice->id, $revenueItemId);
      
        //     // Check if RRR data is obtained successfully
        // if (isset($rrrData['RRR'])) {
        //     $invoice->transaction_ref = $rrrData['RRR'];
        // } else {
        //     // Handle the case where RRR is not present in the API response
        //     return response()->json(['error' => 'RRR not found in API response'], 422);
        // }

        $invoice->save();
    
            // Commit the transaction
            DB::commit();
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            
            // An error occurred, rollback the transaction
            DB::rollBack();
            // Handle the case where any of the required values is not found
            $debugInfo = [
                'taxpayer_id' => $request->input('taxpayer_id'),
                'agency_id' => $request->input('agency_id'),
                'revenue_item_id' => $request->input('revenue_item_id'),
                'items' => $request->input('items'),
            ];
            // \Log::error('Required values not found', $debugInfo);
    
            return response()->json(['error' => 'One or more required values not found'], 422);
        }
    }
    public function generateInvoice2(Request $request)
    {
        $request->validate([
            'taxpayer_id' => 'required',
            'items' => 'required|array',
            'agency_id' => 'nullable|exists:agencies,id',
            'revenue_item_id' => 'nullable|exists:revenue_items,id',
        ]);
        
        // Start a database transaction
        DB::beginTransaction();
    
    
        // Fetch the corresponding taxpayer
        try {
            $taxpayer = Taxpayer::findOrFail($request->input('taxpayer_id'));
    
            $agencyId = $request->input('agency_id');
            $revenueItemId = $request->input('revenue_item_id');
    
            $agency = $agencyId ? Agency::findOrFail($agencyId) : null;
            $revenueItem = $revenueItemId ? RevenueItem::findOrFail($revenueItemId) : null;
            
              $interswitchId = $revenueItem ? $revenueItem->interswitch_id : null; 
            
    
            // Create a new Invoice instance
            $invoice = new Invoice();
            $invoice->user_id = Auth::id();
            $invoice->taxpayer_name = $taxpayer->name;
            $invoice->address = $taxpayer->address;
            $invoice->phone_number = $taxpayer->phone_number;
            $invoice->agency_name = $agency ? $agency->agency_name : null;
            $invoice->revenue_item_name = $revenueItem ? $revenueItem->revenue_item : null;
             $invoice->details = $request->input('details');
             
            $invoice->invoice_id = Str::random(10);
            
            $invoice->taxpayer_name = strtoupper($taxpayer->name);
            $invoice->address = strtoupper($taxpayer->address);
            $invoice->details = strtoupper($request->input('details'));

            
            $invoice->item_code = $interswitchId;
            
            // Save the invoice
            $invoice->save();
    
            // Save invoice items for each Agency and Subhead
            $items = $request->input('items');
            $totalAmount = 0;
    
            if (!empty($items) && is_array($items)) {
                foreach ($items as $item) {
                    // Validate each item based on your requirements
                    $validator = Validator::make($item, [
                        'agency_id' => 'required',
                        'revenue_item_id' => 'required',
                        'rate' => 'required|numeric',
                    ]);
    
                    if ($validator->fails()) {
                        // Handle validation failure, return an error response if needed
                        return response()->json(['error' => $validator->errors()], 422);
                    }
    
                    $invoiceItem = new InvoiceItem();
                    // Use the saved invoice ID
                    $invoiceItem->invoice_id = $invoice->id;
                    $invoiceItem->agency_id = $item['agency_id'];
                    $invoiceItem->revenue_item_id = $item['revenue_item_id'];
                    $invoiceItem->user_id = Auth::id();
                    $invoiceItem->rate = $item['rate'];
                    $invoiceItem->save();
    
                    // Accumulate the rate to calculate the total amount
                    $totalAmount += $item['rate'];
                }
            } else {
                // Handle the case where items are null or not an array
                // \Log::error('Items array is null or not an array');
                return response()->json(['error' => 'Invalid items array'], 422);
            }
    
            // Set the total amount in the invoice
            $invoice->rate = $totalAmount;
            
            // Generating RRR
             $rrrData = self::generateRRR($totalAmount, $invoice->id, $revenueItemId);
      
            // Check if RRR data is obtained successfully
        if (isset($rrrData['RRR'])) {
            $invoice->transaction_ref = $rrrData['RRR'];
        } else {
            // Handle the case where RRR is not present in the API response
            return response()->json(['error' => 'RRR not found in API response'], 422);
        }

        $invoice->save();
    
            // Commit the transaction
            DB::commit();
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            
            // An error occurred, rollback the transaction
            DB::rollBack();
            // Handle the case where any of the required values is not found
            $debugInfo = [
                'taxpayer_id' => $request->input('taxpayer_id'),
                'agency_id' => $request->input('agency_id'),
                'revenue_item_id' => $request->input('revenue_item_id'),
                'items' => $request->input('items'),
            ];
            // \Log::error('Required values not found', $debugInfo);
    
            return response()->json(['error' => 'One or more required values not found'], 422);
        }
    }
    
    
    //REDIRECT USERS TO SHOW INVOICE AFTER GENERATING
    public function showIntermediate()
        {
            // Start a database transaction
            DB::beginTransaction();
        
            try {
                // Fetch the latest invoice ID from your database
                $latestInvoiceId = Invoice::latest()->value('id');
        
                // Commit the transaction
                DB::commit();
            } catch (\Exception $e) {
                // An error occurred, rollback the transaction
                DB::rollBack();
        
                // Log the error or handle it as needed
                // \Log::error('Error fetching latest invoice ID: ' . $e->getMessage());
        
                // Return a response or redirect as appropriate for your application
                return response()->json(['error' => 'Failed to fetch the latest invoice ID'], 500);
            }
        
            // Redirect to the final route with the correct invoice ID
            return redirect()->route('invoices2.show', ['id' => $latestInvoiceId]);
        }


    

     


    public function show($id)
    {
        
        $taxpayer = Taxpayer::find($id);
        
        if (!$taxpayer) {
            abort(404); 
        }
       
        $agencies = $this->getAgencies();
        
        $revenueItems = [];
        $rates = [];

        return view('taxpayers.view', compact('taxpayer','agencies', 'revenueItems', 'rates'));


    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:13|min:11',
            'email' => 'email|unique:taxpayers|nullable',
            'taxpayer_type' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'ward' => 'max:10',
            'address' => 'required', 
        ]);
        
        $userId = auth()->id();
        $user = auth()->user();
        // Get the username
        $username = $user->name;
        
         // Generate a taxpayer ID that starts with GME- followed by 7 random digits
    $taxpayerId = 'GME-' . mt_rand(1000000, 9999999);

        Taxpayer::create([
        'user_id' => $userId,
        'user_name' => $username,
        'name' => $request->name,
        'taxpayer_id' => $taxpayerId,
        'phone_number' => $request-> phone_number,
        'email' => $request-> email,
        'taxpayer_type' => $request-> taxpayer_type,
        'state' => $request-> state,
        'lga' => $request-> state,
        'ward' => $request-> ward,
        'address' => $request-> address,
        ]);

        return response()->json([
            'Success' => 'Proceed to generate Invoice by Clicking the taxpayer'
        ], 201);
    }

    
    public function generateReceipt(Request $request)
    {
        $taxpayerId = auth()->user()->id;

        // Retrieve all successful payments for the authenticated taxpayer
        $payments = Payment::where('taxpayer_id', $taxpayerId)
            ->where('transaction_status', 'success')
            ->get();

        if ($payments->isEmpty()) {
            return response()->json(['error' => 'No successful payments found for this taxpayer']);
        }

        // Loop through each payment to generate receipts
        foreach ($payments as $payment) {
            // Access additional information related to the payment
            $agency = $payment->agency; // Adjust this based on your actual relationships
            $revenueItem = $payment->revenueItem; // Adjust this based on your actual relationships
            $rate = $payment->rate; // Adjust this based on your actual database structure

            // Check if the payment status is 'success' before creating a receipt
            if ($payment->transaction_status === 'success') {
                Receipt::create([
                    'payment_id' => $payment->id,
                    'taxpayer_id' => $taxpayerId,
                    // 'name' => $taxpayer->name,
                    'amount' => $payment->amount,
                    'content' => '... generated receipt content ...',
                ]);
            } else {
                Invoice::create([
                    'payment_id' => $payment->id,
                    'taxpayer_id' => $taxpayerId,
                    // 'name' => $taxpayer->name,
                    'amount' => $payment->amount,
                    'content' => '... generated invoice content ...',
                ]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Receipts generated successfully']);
    }   

    public function viewReceipts()
    {
        $taxpayerId = auth()->user()->id;

        // Fetch all paid receipts for the authenticated taxpayer
        $paidReceipts = Receipt::where('taxpayer_id', $taxpayerId)->get();

        // Fetch all unpaid invoices for the authenticated taxpayer
        $unpaidInvoices = Invoice::where('taxpayer_id', $taxpayerId)->get();

        return view('pdf.receipt', compact('paidReceipts', 'unpaidInvoices'));
    }
            
}
