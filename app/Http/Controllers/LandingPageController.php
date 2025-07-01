<?php

namespace App\Http\Controllers;


use App\Models\Invoice;
use App\Models\Agency;
use App\Models\RevenueItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        // Your landing page logic and view return here
        return view('homepage/directory/html/landing'); // Adjust 'landing' to your actual filename
    }
    
    
    
  public function genReport(Request $request)
{
    try {
        $filterOptions = ['agency_name', 'revenue_item_name', 'taxpayer_name', 'created_at'];
        
        // Fetch invoices based on filters
        $invoices = Invoice::where(function ($query) {
            $query->where('status', 'paid')->orWhere('status', 'PAID');
        });

        foreach ($filterOptions as $option) {
            $keywords = (array)$request->input($option);

            if ($option === 'created_at' && $request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween($option, [$start_date, $end_date]);
            } elseif ($option === 'agency_name' && !empty($keywords)) {
                $invoices->where(function ($query) use ($keywords) {
                    foreach ($keywords as $keyword) {
                        $query->orWhere('agency_name', 'LIKE', "%{$keyword}%");
                    }
                });
            } elseif (!empty($keywords)) {
                $invoices->whereIn($option, $keywords);
            }
        }

        $invoices = $invoices->get();

        // Fetch all agency names with total amount where status is paid or PAID
        $agencies = Invoice::select('agency_name', DB::raw('SUM(rate) as total_amount'))
            ->where('status', 'paid')
            ->orWhere('status', 'PAID')
            ->groupBy('agency_name')
            ->get();

        return view('invoices.generateReport', compact('invoices', 'filterOptions', 'agencies'));
    } catch (QueryException $exception) {
        \Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}


public function BureauMonReport(Request $request)
{
    try {
        $filterOptions = ['agency_name', 'revenue_item_name', 'created_at'];
        
        // Fetch invoices based on filters
        $invoices = Invoice::where(function ($query) {
            $query->where('status', 'paid')->orWhere('status', 'PAID');
        })->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS');

        foreach ($filterOptions as $option) {
            $keywords = (array)$request->input($option);

            if ($option === 'created_at' && $request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween($option, [$start_date, $end_date]);
            } elseif ($option === 'agency_name' && !empty($keywords)) {
                $invoices->where(function ($query) use ($keywords) {
                    foreach ($keywords as $keyword) {
                        $query->orWhere('agency_name', 'LIKE', "%{$keyword}%");
                    }
                });
            } elseif (!empty($keywords)) {
                $invoices->whereIn($option, $keywords);
            }
        }

        $invoices = $invoices->get();

        // Fetch all agency names with total amount where status is paid or PAID
        $agencies = Invoice::select('agency_name', DB::raw('SUM(rate) as total_amount'))
            ->where('status', 'paid')
            ->orWhere('status', 'PAID')
            ->groupBy('agency_name')
            ->get();

        return view('invoices.BureauDue', compact('invoices', 'filterOptions', 'agencies'));
    } catch (QueryException $exception) {
        \Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}


    // Method to fetch revenue items for a specific agency
    public function getRevenueItems(Request $request)
    {
        try {
            $agency_name = $request->input('agency_name');
            
            $revenueItems = Invoice::select('revenue_item_name', DB::raw('SUM(rate) as total_amount'))
                ->where('agency_name', $agency_name)
                ->where(function ($query) {
                    $query->where('status', 'paid')->orWhere('status', 'PAID');
                })
                ->groupBy('revenue_item_name')
                ->get();

            return response()->json($revenueItems);
        } catch (QueryException $exception) {
            \Log::error($exception);
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    // Method to fetch details for a specific revenue item
    public function getRevenueItemDetails(Request $request)
    {
        try {
            $revenue_item_name = $request->input('revenue_item_name');
            
            $details = Invoice::select('taxpayer_name', 'rate')
                ->where('revenue_item_name', $revenue_item_name)
                ->where(function ($query) {
                    $query->where('status', 'paid')->orWhere('status', 'PAID');
                })
                ->get();

            return response()->json($details);
        } catch (QueryException $exception) {
            \Log::error($exception);
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 public function genReportFilter(Request $request)
{
    try {
        $filterOptions = ['taxpayer_name', 'agency_name', 'revenue_item_name', 'created_at'];
        $invoices = Invoice::where(function ($query) {
            $query->where('status', 'paid')->where('status', 'PAID');
        });

        foreach ($filterOptions as $option) {
            $keywords = (array)$request->input($option);

            if ($option === 'created_at' && $request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween($option, [$start_date, $end_date]);
            } elseif ($option === 'agency_name' && !empty($keywords)) {
                // Use LIKE for partial match
                $invoices->where(function ($query) use ($keywords) {
                    foreach ($keywords as $keyword) {
                        $query->orWhere('agency_name', 'LIKE', "%{$keyword}%");
                    }
                });
            } elseif (!empty($keywords)) {
                $invoices->whereIn($option, $keywords);
            }
        }

        $invoices = $invoices->get();

        return view('invoices.generateReport', compact('invoices', 'filterOptions'));
    } catch (QueryException $exception) {
        \Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}

    
     public function about()
    {
        return view('homepage/directory/html/about');
    }

    public function contact()
    {
        return view('homepage/directory/html/contact');
    }
    public function faq()
    {
        return view('homepage/directory/html/faq');
    }
    public function payNow()
    {
          $agencies = Agency::pluck('agency_name', 'id');
          $RevenueItems = RevenueItem::pluck('revenue_item', 'id');
    return view('homepage.directory.html.payNow', ['agencies' => $agencies, 'RevenueItems' => $RevenueItems]);
    }
    
    public function taxCollection()
    {
        return view('homepage/directory/html/tax-collection');
    }
    public function invoicee($id)
    {
        $invoice = Invoice::findOrFail($id);

    return view('invoice2.invoicee', ['invoice' => $invoice]);
    }
    public function taxSystem()
    {
        return view('homepage/directory/html/tax-system');
    }
    public function taxDocument()
    {
        return view('homepage/directory/html/tax-document');
    }
   
    
    public function verify()
    {
       
        return view('homepage/proj/verify'); 
    }
    public function verifyTcc()
    {
       
        return view('tcc/verifyTCC'); 
    }
    public function verify2()
    {
       
        return view('homepage/proj/verify2'); 
    }
    
    public function processPayment(Request $request)
    {
        
        $taxpayerName = $request->input('taxpayerName');
        $agencyId = $request->input('agencyId');
        $revenueItemId = $request->input('revenueItemId');
        $phoneNumber = $request->input('phoneNumber');
        $address = $request->input('address');
        $amount = $request->input('amount');

        
        $invoice = new Invoice();
        $invoice->taxpayer_name = $taxpayerName;
        $invoice->agency_name = $agencyId;
        $invoice->revenue_item_name = $revenueItemId;
        $invoice->phone_number = $phoneNumber;
        $invoice->address = $address;
        $invoice->rate = $amount;
        $invoice->save();

       
        $invoiceId = $invoice->id;

        
        $sanitizedTransactionRef = $this->generateTransactionRef($invoiceId);

        
        return response()->json(['transactionRef' => $sanitizedTransactionRef]);
    }
    
    public function generateRRR(Request $request)
{
    $totalAmount = $request->input('amount');
    $orderId = $request->input('gtin');
    $revenueItemId = $request->input('revenueItemId');
    $agencyId = $request->input('agencyId');
    $taxpayerName = $request->input('taxpayerName');
    $phoneNumber = $request->input('phoneNumber');
    $email = $request->input('email');
    $address = $request->input('address');
    $details = $request->input('details');

    // Fetch revenue item details
    $revenueItem = RevenueItem::findOrFail($revenueItemId);
    $revenue = $revenueItem->revenue_item;
    
    // Extract required data from the revenue item
    $serviceTypeId = $revenueItem->service_types_id;
// Fetch the interswitch_id from the revenue_items table
        $interswitchId = $revenueItem ? $revenueItem->interswitch_id : null;
    // Your merchant ID and API key
    $merchantId = "5153581196";
    $apiKey = "141876";

    // Prepare data for API call
    $inputData = $merchantId . $serviceTypeId . $orderId . number_format($totalAmount, 2, '.', '') . $apiKey;
    $apiHash = hash('sha512', $inputData);
// Generate a unique reference
$uniqueReference = uniqid('RRR_', true); // Example: RRR_609dab67411e1

// Include the unique reference in the payload
$requestPayload = [
    'serviceTypeId' => $serviceTypeId,
    'amount' => number_format($totalAmount, 2, '.', ''),
    'orderId' => $orderId,
    'payerName' => $taxpayerName,
    'payerEmail' => $email,
    'payerPhone' => $phoneNumber,
    'description' => $address,
    'uniqueReference' => $uniqueReference, // Include the unique reference here
    // 'lineItems' => [
    //     [
    //         'lineItemsId' => 'itemid1',
    //         'beneficiaryName' => 'Gombe State Lead IGR',
    //         'beneficiaryAccount' => '1023152372',
    //         'bankCode' => '033',
    //         'beneficiaryAmount' => number_format($totalAmount * 0.88, 2, '.', ''),
    //         'deductFeeFrom' => '1',
    //     ],
    //     [
    //         'lineItemsId' => 'itemid2',
    //         'beneficiaryName' => 'JEWEL ICT HUB LIMITED',
    //         'beneficiaryAccount' => '0005865245',
    //         'bankCode' => '302',
    //         'beneficiaryAmount' => number_format($totalAmount * 0.12, 2, '.', ''),
    //         'deductFeeFrom' => '0',
    //     ],
    // ],
];


    // Convert payload to JSON
    $requestPayloadJson = json_encode($requestPayload, JSON_PRETTY_PRINT);

    // Initialize cURL handle
    $curl = curl_init();

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
        \Log::error('cURL Error: ' . $error);

        // Handle the error as needed
        return ['error' => 'cURL error occurred'];
    }

    // Log the request and response
    \Log::info('GenerateRRR Request: ' . $requestPayloadJson);
    \Log::info('GenerateRRR Response: ' . $response);
           // Extract the JSON data from JSONP response
    $jsonStart = strpos($response, '(') + 1;
    $jsonEnd = strrpos($response, ')');
    $jsonLength = $jsonEnd - $jsonStart;
    $json = substr($response, $jsonStart, $jsonLength);
    
    // Decode the JSON data
    $responseData = json_decode($json, true);

    // Log the extracted JSON data
    \Log::info('GenerateRRR Extracted JSON: ' . $json);
    \Log::info('GenerateRRR Response Data: ' . print_r($responseData, true));

    // Save the RRR to your database
    $rrr = $responseData['RRR'] ?? null;

    $invoice = new Invoice();
    $invoice->taxpayer_name = $taxpayerName;
    $invoice->agency_name = $agencyId;
    $invoice->revenue_item_name = $revenue;
    $invoice->phone_number = $phoneNumber;
    $invoice->address = $address;
    $invoice->details = $details;
    $invoice->rate = $totalAmount;
    $invoice->item_code =$interswitchId;
    $invoice->transaction_ref = $rrr;
    $invoice->invoice_id = Str::random(10);
    $invoice->save();
    
    // return response()->json($response);
    $invoiceUrl = route('invoicee', ['id' => $invoice->id]);

    // Return JSON response with invoice URL
    return response()->json(['invoice_url' => $invoiceUrl]);
}

    




    private function generateTransactionRef($invoiceId)
    {
        
        return 'INV-' . str_pad($invoiceId, 6, '0', STR_PAD_LEFT); // Example: INV-000001
    }
    
    public function getInvoiceDetails($id)
    {
        
        $columnName = 'invoice_id';
        $columnValue = $id;
        // $invoice = Invoice::find($id);
        
        $invoice = Invoice::where($columnName, $columnValue)->first();


        // if ($invoice) {
        //     return response()->json(['success' => true, 'invoice' => $invoice]);
        // } else {
        //     return response()->json(['success' => false, 'message' => 'Invoice not found'], 404);
        // }
       if ($invoice) {
        \Log::info('Invoice found for ID:', ['id' => $id, 'status' => $invoice->status]);

        // Check if the status is null or an empty string
        if (is_null($invoice->status) || strtolower($invoice->status) === '') {
            return response()->json(['success' => false, 'message' => 'NOT PAID']);
        }
        // Check if the status is 'paid' or 'PAID'
        if (strtolower($invoice->status) === 'paid') {
            return response()->json(['success' => true, 'invoice' => $invoice]);
        } else {
            return response()->json(['success' => false, 'message' => 'NOT PAID']);
        }
    } else {
        // \Log::warning('Invoice not found for ID:', ['id' => $id]);
        return response()->json(['success' => false, 'message' => 'Invoice not found'], 404);
    }
    }
}
