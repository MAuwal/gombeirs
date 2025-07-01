<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Taxpayer;
use App\Models\Invoice;
use Illuminate\Support\Str;
use App\Models\Agency;
use App\Models\InvoiceItem;
use App\Models\RevenueItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class TaxpayerController extends Controller
{
    //
    public function createTaxpayer(Request $request)
    {
        
        \Log::info('Reached createTaxpayer method');

        // return $request->all();
        $request->validate([
            'taxpayer_name' => 'required',
            'phone_number' => 'unique:taxpayers|required|max:13|min:11',
            'email' => 'email|unique:taxpayers|nullable',
            'taxpayer_type' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'ward' => 'max:10',
            'address' => 'required', 
        ]);
        
        \Log::info('Headers:', $request->headers->all());
\Log::info('Bearer Token:', $request->bearerToken());

        
        // Get the authenticated user's ID
        $userId = auth()->id();
        $user = auth()->user();

        if (!$userId || !$user) {
            \Log::info('Headers:', $request->headers->all());
\Log::info('Bearer Token:', $request->bearerToken());

            \Log::info('Unauthorized access attempt.1 info' . $userId);
            \Log::warning('Unauthorized access attempt.', [
            'userId' => $userId,
            'user' => $user,
            'headers' => $request->headers->all(),
            'token' => $request->bearerToken(),
        ]);
        
        
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
         // Generate a taxpayer ID that starts with GME- followed by 7 random digits
    $taxpayerId = 'GME-' . mt_rand(1000000, 9999999);


        Taxpayer::create([
        'user_id' => $userId,
        // 'user_name' => $username,
         'taxpayer_id' => $taxpayerId,
        'name' => $request->taxpayer_name,
        'phone_number' => $request-> phone_number,
        'email' => $request-> email,
        'taxpayer_type' => $request-> taxpayer_type,
        'state' => $request-> state,
        'lga' => $request-> state,
        'ward' => $request-> ward,
        'address' => $request-> address,
        ]);

        return response()->json([
            'Success' => 'true',
            'taxpayer_id' => $taxpayerId
        ], 200);
    }

    public function GenerateInv(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:13|min:11',
            'agency_name' => 'required',
            'subhead' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'address' => 'required', 
        ]);
        
        $userId = auth()->id();
        $user = auth()->user();
        // Get the username
        $username = $user->name;

        $invoice = new Invoice();
       
         // Generate a random invoice_id
         $invoiceId = Str::random(10);



        // Create and save a new Invoice instance
        $invoice = new Invoice();
        $invoice->user_id = $userId;
        $invoice->taxpayer_name = $request->name;
        $invoice->phone_number = $request->phone_number;
        $invoice->agency_name = $request->agency_name;
        $invoice->revenue_item_name = $request->subhead;
        $invoice->rate = $request->amount;
        $invoice->details = $request->description;
        $invoice->invoice_id = $invoiceId;
        $invoice->address = $request->address;
        $invoice->status = 'pending';
        $invoice->save();                                                                       
            

        return response()->json([
            'Success' => 'true',
            'invoice_id' => $invoiceId
        ], 200);
    }
    
    public function updatePaymentStatus(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,invoice_id',
            'status' => 'required|in:PAID'
        ]);
    
        $invoice = Invoice::where('invoice_id', $request->invoice_id)->first();
    
        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }
    
        $invoice->status = $request->status;
        $invoice->save();
    
        return response()->json([
            'Success' => 'true',
            'message' => 'Invoice status updated successfully'
        ], 200);
    }


    
    
    public function getTaxpayer($taxpayer_id)
    {
        // $taxpayer = Taxpayer::find($id);
        $taxpayer = Taxpayer::where('taxpayer_id', $taxpayer_id)->first();
    
        if (!$taxpayer) {
            return response()->json(['error' => 'Taxpayer not found'], 404);
        }
    
        return response()->json([
            'taxpayer_name' => $taxpayer->name,
            'phone_number' => $taxpayer->phone_number,
            'email' => $taxpayer->email,
            'taxpayer_type' => $taxpayer->taxpayer_type,
            'state' => $taxpayer->state,
            'lga' => $taxpayer->lga,
            'ward' => $taxpayer->ward,
            'address' => $taxpayer->address,
        ], 200);
    }
    
    // Fetch agencies
    public function getAgencies()
    {
        // Fetch all agencies
        $agencies = DB::table('agencies')
            ->select('id', 'agency_code', 'agency_name')
            ->get();
    
        // Check if agencies were found
        if ($agencies->isEmpty()) {
            return response()->json(['message' => 'No agencies found.'], 404);
        }
    
        // Format the response
        $formattedAgencies = $agencies->map(function ($agency) {
            return [
                'agency_id' => $agency->id,
                'agency_code' => $agency->agency_code,
                'agency_name' => $agency->agency_name,
            ];
        });
    
        // Return the agencies as a JSON response
        return response()->json($formattedAgencies, 200);
    }
    
    // Fetch revenueItems
    public function getRevenueItems(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'agency_id' => 'required|exists:agencies,id',
        ]);
    
        // Fetch revenue items based on the agency_id
        $revenueItems = DB::table('agency_revenue_item')
            ->join('revenue_items', 'agency_revenue_item.revenue_item_id', '=', 'revenue_items.id')
            ->join('agencies', 'agency_revenue_item.agency_id', '=', 'agencies.id')
            ->where('agencies.id', $request->agency_id)
            ->select('revenue_items.id as revenue_item_id', 'revenue_items.revenue_item', 'agency_revenue_item.rate', 'agencies.agency_name')
            ->get();
    
        $agencyName = $revenueItems->first()->agency_name;
        // Check if revenue items were found
        $formattedRevenueItems = $revenueItems->map(function ($item) {
            return [
                'subhead_id' => $item->revenue_item_id,
                'subhead_name' => $item->revenue_item,
                'rate' => $item->rate,
            ];
        });
    
        // Return the revenue items as a JSON response
        // return response()->json($formattedRevenueItems, 200);
        return response()->json([
        'agency_name' => $agencyName,
        'subheads' => $formattedRevenueItems,
    ], 200);
    }


     // Fetch details of a Invoice by ID
     public function getInvoice($invoice_id)
     {
        $invoice = Invoice::where('invoice_id', $invoice_id)->first();

        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }
 
        return response()->json([
            'id' => $invoice->id,
            'invoice_id' => $invoice->invoice_id,
            'taxpayer_name' => $invoice->taxpayer_name,
            'phone_number' => $invoice->phone_number,
            'agency_name' => $invoice->agency_name,
            'subhead' => $invoice->revenue_item_name,
            'amount' => $invoice->rate,
            'description' => $invoice->details,
            'address' => $invoice->address,
            'status' => $invoice->status,
        ], 200);
     }
 

    
}
