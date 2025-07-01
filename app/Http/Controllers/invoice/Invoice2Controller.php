<?php

namespace App\Http\Controllers\invoice;

use App\Http\Controllers\Controller;
use App\DataTables\Invoice2DataTable;
use App\DataTables\UserInvoiceDataTable;
use App\DataTables\DueProcessInvoiceDataTable;
use App\DataTables\DueprocessVettingDataTables;
use App\DataTables\DueprocessTenderDataTable;
use App\DataTables\DueprocessRegDataTable;
use App\DataTables\GogisInvoiceDataTable;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DataTables;
use App\Models\Agency;

class Invoice2Controller extends Controller
{
    public function index(Invoice2DataTable $dataTable)
    {
        return $dataTable->render('invoice2.list');
    }

    public function UserInvoice(UserInvoiceDataTable $dataTable)
    {        
        $user = Auth::user();
        //  dd($user->invoices);
        $invoices = $user->invoices; // we have the relationship set up in the User model
        // dd($invoices);
        // return view('client.invoice.list', compact('invoices'));
         
            // return $dataTable->render('client.invoice.list', compact('invoices'));
        return $dataTable->with(['invoices' => $invoices])->render('client.invoice.list');
    }
    
    public function dueprocessInvoice(DueProcessInvoiceDataTable $dataTable)
    {
        $user = Auth::user();
        $invoices = $user->invoices()->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')->get();
        
        return $dataTable->with(['invoices' => $invoices])->render('client.invoice.list');
    }
    
    public function dueprocessVetting(DueprocessVettingDataTables $dataTable)
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        
        // Pass parameters for filtering into the DataTable
        return $dataTable->with([
            'agency_name' => 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS',
            'revenue_item_name' => 'VETTING OF CONTRACT FEES',
            'month' => $currentMonth,
            'year' => $currentYear,
            'status' => 'paid',
        ])->render('client.invoice.list');
    }
    
    public function dueprocessReg(DueprocessRegDataTable $dataTable)
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        
        // Pass parameters for filtering into the DataTable
        return $dataTable->with([
            'agency_name' => 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS',
            'revenue_item_name' => 'CONTRACTORS VENDORS SERVICE PROVIDERS REG. FEES',
            'month' => $currentMonth,
            'year' => $currentYear,
            'status' => 'paid',
        ])->render('client.invoice.list');
    }
    
    public function dueprocessTender(DueprocessTenderDataTable $dataTable)
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        
        // Pass parameters for filtering into the DataTable
        return $dataTable->with([
            'agency_name' => 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS',
            'revenue_item_name' => 'TENDER FEES',
            'month' => $currentMonth,
            'year' => $currentYear,
            'status' => 'paid',
        ])->render('client.invoice.list');
    }
    
     public function gogisInvoice(GogisInvoiceDataTable $dataTable)
    {
//         $user = Auth::user();
//         $invoices = $user->invoices()->where('agency_name', 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS
// ')->get();

     $invoices = Invoice::where('agency_name', 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS ')->get();
   
        
        return $dataTable->with(['invoices' => $invoices])->render('client.invoice.list');
    }



    public function updatePaymentStatus($invoiceId)
    {
        
        $invoice = Invoice::find($invoiceId);
        if ($invoice) {
            $invoice->update(['status' => 'paid']);

            // Generate PDF receipt
        $pdf = PDF::loadView('pdf.receipt', ['invoice' => $invoice]);
        $pdfPath = 'receipts/' . $invoice->id . '_receipt.pdf';

        // Log::info('PDF Path: ' . $pdfPath);
        
        Storage::disk('public')->put($pdfPath, $pdf->output());
        //store the PDF path in the database for future reference
        $invoice->update(['receipt_path' => $pdfPath]);

            
            // return response()->json(['status' => 'paid']);
            return response()->json(['status' => 'paid', 'pdf_path' => $pdfPath]);
        } else {
            return response()->json(['error' => 'Invoice not found'], 404);
        }
    }
    
    
    // pos receipt print
    // public function printPOS($invoiceId)
    // {
        
    //     $invoice = Invoice::find($invoiceId);
    //     if ($invoice) {
    //         $invoice->update(['status' => 'paid']);

    //         // Generate PDF receipt
    //     $pdf = PDF::loadView('pdf.pos', ['invoice' => $invoice]);
    //     $pdfPath = 'receipts/' . $invoice->id . '_receipt.pdf';

    //     // Log::info('PDF Path: ' . $pdfPath);
        
    //     Storage::disk('public')->put($pdfPath, $pdf->output());
    //     //store the PDF path in the database for future reference
    //     $invoice->update(['receipt_path' => $pdfPath]);

            
    //         // return response()->json(['status' => 'paid']);
    //         return response()->json(['status' => 'paid', 'pdf_path' => $pdfPath]);
    //     } else {
    //         return response()->json(['error' => 'Invoice not found'], 404);
    //     }
    // }
    public function printPOS($invoiceId)
{
    $invoice = Invoice::find($invoiceId);

    if ($invoice) {
        // Check if the status is 'paid' or 'PAID'
        if (strtolower($invoice->status) === 'paid') {
            // Generate PDF receipt
            $pdf = PDF::loadView('pdf.pos', ['invoice' => $invoice]);
            $pdfPath = 'receipts/' . $invoice->id . '_receipt.pdf';

            // Log::info('PDF Path: ' . $pdfPath);

            Storage::disk('public')->put($pdfPath, $pdf->output());
            
            // Store the PDF path in the database for future reference
            $invoice->update(['receipt_path' => $pdfPath]);

            return response()->json(['status' => 'paid', 'pdf_path' => $pdfPath]);
        } else {
            return response()->json(['error' => 'Invoice not paid'], 400);
        }
    } else {
        return response()->json(['error' => 'Invoice not found'], 404);
    }
}

    
    
  
    
    public function getPaymentStatuss($invoiceId)
    {
        $invoice = Invoice::find($invoiceId);
    
        if ($invoice) {
            return response()->json(['status' => $invoice->status, 'pdf_path' => $invoice->receipt_path]);
        } else {
            return response()->json(['error' => 'Invoice not found'], 404);
        }
    }

    
    
    //update RRR Status 
    public function updateRRRPaymentStatus($transactionRef)
    {
        // Find the invoice based on the transaction_ref
        $invoice = Invoice::where('transaction_ref', $transactionRef)->first();

       if ($invoice) {
    // Update the status to 'paid'
    $invoice->update(['status' => 'paid']);

    // Generate PDF receipt
    $pdf = PDF::loadView('pdf.receipt', ['invoice' => $invoice]);

    // Set the paper orientation to landscape
    $pdf->setPaper('A4', 'landscape');

    $pdfPath = 'receipts/' . $invoice->id . '_receipt.pdf';

    // Log::info('PDF Path: ' . $pdfPath);

    Storage::disk('public')->put($pdfPath, $pdf->output());

    // Store the PDF path in the database for future reference
    $invoice->update(['receipt_path' => $pdfPath]);

    // Return the response with status 'paid' and PDF path
    return response()->json(['status' => 'paid', 'pdf_path' => $pdfPath]);
}
 else {
            // If invoice not found, return 404 error
            return response()->json(['error' => 'Invoice not found'], 404);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    public function testReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Get the list of unique agency names for the dropdown
        $agenciesList = $invoices->pluck('agency_name')->unique();

        // Group by agency name and calculate total amounts
        $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name') && $request->filled('month')) {
            $agencyName = $request->input('agency_name');
            $month = $request->input('month');

            // Filter the invoices for the given agency and month
            $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName, $month) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.testReport', compact('agencies', 'agenciesList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
    
public function generateReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Get the list of unique agency names for the dropdown
        $agenciesList = $invoices->pluck('agency_name')->unique();

        // Group by agency name and calculate total amounts
        $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name') && $request->filled('month')) {
            $agencyName = $request->input('agency_name');
            $month = $request->input('month');

            // Filter the invoices for the given agency and month
            $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName, $month) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.report', compact('agencies', 'agenciesList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}



public function generateVendorReport2(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // List of specified revenue item names for the dropdown
        $revenueItemsList = ['Consumption Tax', 'WHT on Rent', 'HAULAGE', 'Fire Service Directorate'];

        // Group by revenue item name and calculate total amounts
        $agencies = $invoices->groupBy('revenue_item_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'payments' => $group
            ];
        });

        // Handle AJAX request for fetching revenue item details
        if ($request->ajax() && $request->filled('revenue_item_name') && $request->filled('month')) {
            $revenueItemName = $request->input('revenue_item_name');
            $month = $request->input('month');

            // Filter the invoices for the given revenue item and month
            $filteredInvoices = $invoices->filter(function ($invoice) use ($revenueItemName, $month) {
                return $invoice->revenue_item_name === $revenueItemName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.vendorsSubhead', compact('agencies', 'revenueItemsList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
public function generateTaxReport2(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // List of specified revenue item names for the dropdown
        $revenueItemsList = ['Consumption Tax'];

        // Group by revenue item name and calculate total amounts
        $agencies = $invoices->groupBy('revenue_item_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'payments' => $group
            ];
        });

        // Handle AJAX request for fetching revenue item details
        if ($request->ajax() && $request->filled('revenue_item_name') && $request->filled('month')) {
            $revenueItemName = $request->input('revenue_item_name');
            $month = $request->input('month');

            // Filter the invoices for the given revenue item and month
            $filteredInvoices = $invoices->filter(function ($invoice) use ($revenueItemName, $month) {
                return $invoice->revenue_item_name === $revenueItemName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.ConsumptionTax', compact('agencies', 'revenueItemsList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
public function generateWHTReport2(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // List of specified revenue item names for the dropdown
        $revenueItemsList = ['WHT on Rent'];

        // Group by revenue item name and calculate total amounts
        $agencies = $invoices->groupBy('revenue_item_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'payments' => $group
            ];
        });

        // Handle AJAX request for fetching revenue item details
        if ($request->ajax() && $request->filled('revenue_item_name') && $request->filled('month')) {
            $revenueItemName = $request->input('revenue_item_name');
            $month = $request->input('month');

            // Filter the invoices for the given revenue item and month
            $filteredInvoices = $invoices->filter(function ($invoice) use ($revenueItemName, $month) {
                return $invoice->revenue_item_name === $revenueItemName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.WHTonRent', compact('agencies', 'revenueItemsList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}










public function gogisReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        
        $filteredInvoices = $invoices->filter(function ($invoice) {
            return \Illuminate\Support\Str::slug($invoice->agency_name) === 'gombe-geographic-information-system-gogis';
        });

        // Get the list of unique agency names for the dropdown (will only contain one agency now)
        $agenciesList = $filteredInvoices->pluck('agency_name')->unique();

        // Group by agency name and calculate total amounts
        $agencies = $filteredInvoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name') && $request->filled('month')) {
            $agencyName = $request->input('agency_name');
            $month = $request->input('month');

            // Filter the invoices for the given agency and month
            $filteredMonthlyInvoices = $filteredInvoices->filter(function ($invoice) use ($agencyName, $month) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredMonthlyInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.gogisReport', compact('agencies', 'agenciesList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}



  public function gogisReport2(Request $request)
    {
        try {
            $invoices = Invoice::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween('created_at', [$start_date, $end_date]);
            }

            $invoices = $invoices->get();

            // Group by agency name and calculate total amounts
            $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                        return $subgroup->sum('rate');
                    })
                ];
            });

            // Handle AJAX request for fetching agency details
            if ($request->ajax() && $request->filled('agency_name')) {
                $agencyName = $request->input('agency_name');
                // Log::info('Agency Name:', ['agency_name' => $agencyName]);

                // Filter the invoices for the given agency
                $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                    return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
                })->values();

                // Log::info('Filtered Invoices:', ['invoices' => $filteredInvoices]);

                return response()->json($filteredInvoices);
            }


            // Handle AJAX request for fetching subhead payments
            if ($request->ajax() && $request->filled('subhead_name')) {
                $subheadName = $request->input('subhead_name');
                // Log::info('Subhead Name:', ['subhead_name' => $subheadName]);

                // Filter the invoices for the given subhead
                $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                    return $invoice->revenue_item_name === $subheadName;
                })->values();

                // Log::info('Subhead Payments:', ['payments' => $subheadPayments]);

                return response()->json($subheadPayments);
            }

            return view('invoices.gogisReport', compact('agencies'));
        } catch (QueryException $exception) {
            Log::error($exception);
            return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
        }
    }


















public function generateReport2(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Filter invoices to only include the "PUBLIC PROCUREMENT BUREAU- DUE PROCESS" agency
        $filteredInvoices = $invoices->filter(function ($invoice) {
            return \Illuminate\Support\Str::slug($invoice->agency_name) === 'public-procurement-bureau-due-process';
        });

        // Get the list of unique agency names for the dropdown (will only contain one agency now)
        $agenciesList = $filteredInvoices->pluck('agency_name')->unique();

        // Group by agency name and calculate total amounts
        $agencies = $filteredInvoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name') && $request->filled('month')) {
            $agencyName = $request->input('agency_name');
            $month = $request->input('month');

            // Filter the invoices for the given agency and month
            $filteredMonthlyInvoices = $filteredInvoices->filter(function ($invoice) use ($agencyName, $month) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredMonthlyInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.bureauReport', compact('agencies', 'agenciesList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
public function generateFireServiceReport2(Request $request)
{
    try {
        $invoices = Invoice::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Filter invoices to only include the "PUBLIC PROCUREMENT BUREAU- DUE PROCESS" agency
        $filteredInvoices = $invoices->filter(function ($invoice) {
            return \Illuminate\Support\Str::slug($invoice->agency_name) === 'fire-service-directorate';
        });

        // Get the list of unique agency names for the dropdown (will only contain one agency now)
        $agenciesList = $filteredInvoices->pluck('agency_name')->unique();

        // Group by agency name and calculate total amounts
        $agencies = $filteredInvoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name') && $request->filled('month')) {
            $agencyName = $request->input('agency_name');
            $month = $request->input('month');

            // Filter the invoices for the given agency and month
            $filteredMonthlyInvoices = $filteredInvoices->filter(function ($invoice) use ($agencyName, $month) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName 
                    && $invoice->created_at 
                    && $invoice->created_at->format('Y-m') === $month;
            })->values();

            // Group by subhead and calculate total amounts
            $monthlyData = $filteredMonthlyInvoices->groupBy('revenue_item_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'payments' => $group
                ];
            });

            return response()->json($monthlyData);
        }

        return view('invoices.fireService', compact('agencies', 'agenciesList'));
    } catch (QueryException $exception) {
        // Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}




    
    public function generateRReport(Request $request)
    {
        try {
            $invoices = Invoice::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween('created_at', [$start_date, $end_date]);
            }

            $invoices = $invoices->get();

            // Group by agency name and calculate total amounts
            $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                        return $subgroup->sum('rate');
                    })
                ];
            });

            // Handle AJAX request for fetching agency details
            if ($request->ajax() && $request->filled('agency_name')) {
                $agencyName = $request->input('agency_name');
                // Log::info('Agency Name:', ['agency_name' => $agencyName]);

                // Filter the invoices for the given agency
                $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                    return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
                })->values();

                Log::info('Filtered Invoices:', ['invoices' => $filteredInvoices]);

                return response()->json($filteredInvoices);
            }


            // Handle AJAX request for fetching subhead payments
            if ($request->ajax() && $request->filled('subhead_name')) {
                $subheadName = $request->input('subhead_name');
                // Log::info('Subhead Name:', ['subhead_name' => $subheadName]);

                // Filter the invoices for the given subhead
                $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                    return $invoice->revenue_item_name === $subheadName;
                })->values();

                // Log::info('Subhead Payments:', ['payments' => $subheadPayments]);

                return response()->json($subheadPayments);
            }

            return view('invoices.report', compact('agencies'));
        } catch (QueryException $exception) {
            Log::error($exception);
            return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
        }
    }
    public function generateRReport2(Request $request)
    {
        try {
            $invoices = Invoice::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween('created_at', [$start_date, $end_date]);
            }

            $invoices = $invoices->get();

            // Group by agency name and calculate total amounts
            $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                        return $subgroup->sum('rate');
                    })
                ];
            });

            // Handle AJAX request for fetching agency details
            if ($request->ajax() && $request->filled('agency_name')) {
                $agencyName = $request->input('agency_name');
                // Log::info('Agency Name:', ['agency_name' => $agencyName]);

                // Filter the invoices for the given agency
                $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                    return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
                })->values();

                // Log::info('Filtered Invoices:', ['invoices' => $filteredInvoices]);

                return response()->json($filteredInvoices);
            }


            // Handle AJAX request for fetching subhead payments
            if ($request->ajax() && $request->filled('subhead_name')) {
                $subheadName = $request->input('subhead_name');
                // Log::info('Subhead Name:', ['subhead_name' => $subheadName]);

                // Filter the invoices for the given subhead
                $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                    return $invoice->revenue_item_name === $subheadName;
                })->values();

                // Log::info('Subhead Payments:', ['payments' => $subheadPayments]);

                return response()->json($subheadPayments);
            }

            return view('invoices.bureauReport', compact('agencies'));
        } catch (QueryException $exception) {
            Log::error($exception);
            return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
        }
    }
    public function generateFireServiceReport(Request $request)
    {
        try {
            $invoices = Invoice::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween('created_at', [$start_date, $end_date]);
            }

            $invoices = $invoices->get();

            // Group by agency name and calculate total amounts
            $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
                return [
                    'total_amount' => $group->sum('rate'),
                    'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                        return $subgroup->sum('rate');
                    })
                ];
            });

            // Handle AJAX request for fetching agency details
            if ($request->ajax() && $request->filled('agency_name')) {
                $agencyName = $request->input('agency_name');
                // Log::info('Agency Name:', ['agency_name' => $agencyName]);

                // Filter the invoices for the given agency
                $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                    return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
                })->values();

                // Log::info('Filtered Invoices:', ['invoices' => $filteredInvoices]);

                return response()->json($filteredInvoices);
            }


            // Handle AJAX request for fetching subhead payments
            if ($request->ajax() && $request->filled('subhead_name')) {
                $subheadName = $request->input('subhead_name');
                // Log::info('Subhead Name:', ['subhead_name' => $subheadName]);

                // Filter the invoices for the given subhead
                $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                    return $invoice->revenue_item_name === $subheadName;
                })->values();

                // Log::info('Subhead Payments:', ['payments' => $subheadPayments]);

                return response()->json($subheadPayments);
            }

            return view('invoices.fireService', compact('agencies'));
        } catch (QueryException $exception) {
            Log::error($exception);
            return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
        }
    }
    
    public function generateVendorReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        // Define the revenue item names to filter
        $selectedRevenueItems = ['Consumption Tax', 'WHT on Rent', 'HAULAGE', 'Fire Service Directorate'];

        // Add the filter to the query
        $invoices->whereIn('revenue_item_name', $selectedRevenueItems);

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Group by agency name and calculate total amounts
        $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name')) {
            $agencyName = $request->input('agency_name');

            // Filter the invoices for the given agency
            $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
            })->values();

            return response()->json($filteredInvoices);
        }

        // Handle AJAX request for fetching subhead payments
        if ($request->ajax() && $request->filled('subhead_name')) {
            $subheadName = $request->input('subhead_name');

            // Filter the invoices for the given subhead
            $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                return $invoice->revenue_item_name === $subheadName;
            })->values();

            return response()->json($subheadPayments);
        }

        return view('invoices.vendorsSubhead', compact('agencies'));
    } catch (QueryException $exception) {
        Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
    public function generateTaxReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        // Define the revenue item names to filter
        $selectedRevenueItems = ['Consumption Tax'];

        // Add the filter to the query
        $invoices->whereIn('revenue_item_name', $selectedRevenueItems);

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Group by agency name and calculate total amounts
        $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name')) {
            $agencyName = $request->input('agency_name');

            // Filter the invoices for the given agency
            $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
            })->values();

            return response()->json($filteredInvoices);
        }

        // Handle AJAX request for fetching subhead payments
        if ($request->ajax() && $request->filled('subhead_name')) {
            $subheadName = $request->input('subhead_name');

            // Filter the invoices for the given subhead
            $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                return $invoice->revenue_item_name === $subheadName;
            })->values();

            return response()->json($subheadPayments);
        }

        return view('invoices.ConsumptionTax', compact('agencies'));
    } catch (QueryException $exception) {
        Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}
    public function generateWHTReport(Request $request)
{
    try {
        $invoices = Invoice::query();

        // Define the revenue item names to filter
        $selectedRevenueItems = ['WHT on Rent'];

        // Add the filter to the query
        $invoices->whereIn('revenue_item_name', $selectedRevenueItems);

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $invoices->whereBetween('created_at', [$start_date, $end_date]);
        }

        $invoices = $invoices->get();

        // Group by agency name and calculate total amounts
        $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
            return [
                'total_amount' => $group->sum('rate'),
                'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
                    return $subgroup->sum('rate');
                })
            ];
        });

        // Handle AJAX request for fetching agency details
        if ($request->ajax() && $request->filled('agency_name')) {
            $agencyName = $request->input('agency_name');

            // Filter the invoices for the given agency
            $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
                return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
            })->values();

            return response()->json($filteredInvoices);
        }

        // Handle AJAX request for fetching subhead payments
        if ($request->ajax() && $request->filled('subhead_name')) {
            $subheadName = $request->input('subhead_name');

            // Filter the invoices for the given subhead
            $subheadPayments = $invoices->filter(function ($invoice) use ($subheadName) {
                return $invoice->revenue_item_name === $subheadName;
            })->values();

            return response()->json($subheadPayments);
        }

        return view('invoices.WHTonRent2', compact('agencies'));
    } catch (QueryException $exception) {
        Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}

    
    
    
    

// public function generateReport(Request $request)
// {
//     try {
//         $filterOptions = ['taxpayer_name', 'agency_name', 'revenue_item_name', 'status', 'created_at'];
//         $invoices = Invoice::query();

//         foreach ($filterOptions as $option) {
//             $keywords = (array)$request->input($option);

//             if ($option === 'created_at' && $request->filled('start_date') && $request->filled('end_date')) {
//                 $start_date = $request->input('start_date');
//                 $end_date = $request->input('end_date');
//                 $invoices->whereBetween($option, [$start_date, $end_date]);
//             } elseif ($option === 'agency_name' && !empty($keywords)) {
//                 // Use LIKE for partial match
//                 $invoices->where(function ($query) use ($keywords) {
//                     foreach ($keywords as $keyword) {
//                         $query->orWhere('agency_name', 'LIKE', "%{$keyword}%");
//                     }
//                 });
//             } elseif (!empty($keywords)) {
//                 $invoices->whereIn($option, $keywords);
//             }
//         }

//           $invoices = $invoices->get();
          
//              \Log::info('Generated report data', ['invoices' => $invoices, 'filterOptions' => $filterOptions]);

//         return view('invoices.report', compact('invoices', 'filterOptions'));
//     } catch (QueryException $exception) {
//         \Log::error($exception);
//         return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
//     }
// }
    


    

   
//   public function generateReport(Request $request)
//     {
//         try {
//             $invoices = Invoice::query();

//             if ($request->filled('start_date') && $request->filled('end_date')) {
//                 $start_date = $request->input('start_date');
//                 $end_date = $request->input('end_date');
//                 $invoices->whereBetween('created_at', [$start_date, $end_date]);
//             }

//             $invoices = $invoices->get();

//             // Group by agency name and calculate total amounts
//             $agencies = $invoices->groupBy('agency_name')->map(function ($group) {
//                 return [
//                     'total_amount' => $group->sum('rate'),
//                     'subheads' => $group->groupBy('revenue_item_name')->map(function ($subgroup) {
//                         return $subgroup->sum('rate');
//                     })
//                 ];
//             });

//             // Handle AJAX request for fetching agency details
//             if ($request->ajax()) {
//                 $agencyName = $request->input('agency_name');
//                 Log::info('Agency Name:', ['agency_name' => $agencyName]);

//                 // Filter the invoices for the given agency
//                 $filteredInvoices = $invoices->filter(function ($invoice) use ($agencyName) {
//                     return \Illuminate\Support\Str::slug($invoice->agency_name) === $agencyName;
//                 })->values();

//                 Log::info('Filtered Invoices:', ['invoices' => $filteredInvoices]);

//                 return response()->json($filteredInvoices);
//             }

//             return view('invoices.report', compact('agencies'));
//         } catch (QueryException $exception) {
//             Log::error($exception);
//             return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
//         }
//     }

    
    



public function getAgency()
{
    $agencies = Agency::pluck('agency_name', 'id'); // Assuming 'agency_name' is the column containing agency names

    return view('homepage.directory.html.payNow', compact('agencies'));
}




public function generatePdf(Request $request)
{
    try {
        $filterOptions = ['taxpayer_name', 'agency_name', 'revenue_item_name', 'status', 'created_at'];
        $filteredOptions = [];

        $invoices = Invoice::query();

        foreach ($filterOptions as $option) {
            $keyword = $request->input($option);

            if ($option === 'created_at' && $request->filled('start_date') && $request->filled('end_date')) {
                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $invoices->whereBetween($option, [$start_date, $end_date]);
                $filteredOptions[$option] = compact('start_date', 'end_date');
            } elseif ($keyword) {
                $invoices->where($option, 'like', "%$keyword%");
                $filteredOptions[$option] = $keyword;
            }
        }

        $status = $request->input('status');

        if ($status !== null && $status !== '') {
            $invoices->where('status', 'like', "%$status%");
            $filteredOptions['status'] = $status;
        }

        $invoices = $invoices->get();

        $pdf = PDF::loadView('invoices.pdf_report', compact('invoices', 'filteredOptions'));

        return $pdf->download('report.pdf');
    } catch (QueryException $exception) {
        \Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}


public function genReport(Request $request)
{
    try {
        $filterOptions = ['taxpayer_name', 'agency_name', 'revenue_item_name', 'status', 'created_at'];
        $invoices = Invoice::query();

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


        return view('invoices.report', compact('invoices', 'filterOptions'));
    } catch (QueryException $exception) {
        \Log::error($exception);
        return response()->view('errors.custom', ['error' => $exception->getMessage()], 500);
    }
}









    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
       

         return view('invoice2.show', compact('invoice'));
        
    }
     //REDIRECT USERS TO SHOW INVOICE AFTER GENERATING
    public function showIntermediate()
        {
            // Fetch the latest invoice ID from your database
            $latestInvoiceId = Invoice::latest()->value('id');
        
            // Redirect to the final route with the correct invoice ID
            return redirect()->route('invoices2.show', ['id' => $latestInvoiceId]);
        }
        
    
    public function getDailyInvoices()
    {
        $endDate = now(); // Assuming you're using Laravel's Carbon for the current date

        // Modify this query based on your actual database schema
        $paidInvoices = Invoice::where('status', 'paid')
            ->whereBetween('created_at', [$endDate->copy()->subDays(7), $endDate])
            ->selectRaw('DATE(created_at) as date, SUM(rate) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $unpaidInvoices = Invoice::whereNull('status') // Consider null status as unpaid
            ->whereBetween('created_at', [$endDate->copy()->subDays(5), $endDate])
            ->selectRaw('DATE(created_at) as date, SUM(rate) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Prepare the response
        $response = [
            'labels' => [],
            'paidData' => [],
            'unpaidData' => [],
        ];

        foreach ($paidInvoices as $invoice) {
            $response['labels'][] = $invoice->date;
            $response['paidData'][] = $invoice->total;
        }

        foreach ($unpaidInvoices as $invoice) {
            // If the total is null, treat it as unpaid
            $response['labels'][] = $invoice->date;
            $response['unpaidData'][] = $invoice->total ?? 0; // Set to 0 if null
        }

        return response()->json($response);
    }
}