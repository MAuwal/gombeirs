<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\UBA;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Taxpayer;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

         // Retrieve total paid amounts from the database
         $totalPay = Invoice::where('status', 'paid')->sum('rate');
         
         // Retrieve total paid amounts for the current month from the database
        $totalcurrent = Invoice::where('status', 'paid')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->sum('rate');
            
             
         
         $totalTaxpayers = Taxpayer::count();
         
         // Retrieve total unpaid amount from the database
        // $totalUnpaid = Invoice::where('status', '')->sum('rate');
        $totalUnpaid = Invoice::where(function ($query) {
            $query->where('status', 'unpaid')->orWhereNull('status');
        })->sum('rate');

        $dailyPayments = Invoice::selectRaw('DATE(created_at) as date, sum(rate) as total_amount')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

             $currentMonthStart = Carbon::now()->startOfMonth();
         $currentMonthEnd = Carbon::now()->endOfMonth();
         
       
       //Agency Monthly Totals
    
    $formattedMonthlyIRS = Invoice::where('agency_name', 'Gombe State Internal Revenue Service')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedMonthlyTrade = Invoice::where('agency_name', 'MINISTRY OF TRADE, INDUSTRY AND TOURISM')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
     $formattedCSC = Invoice::where('agency_name', 'CIVIL SERVICE COMMISSION')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedMonthlyGogis = Invoice::whereIn('agency_name', ['GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS', 'Gombe Geographic Information System GOGIS'])
       ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedMonthlyIRS = Invoice::where('agency_name', 'Gombe State Internal Revenue Service')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

       $monthlyIRS = number_format($formattedMonthlyIRS, 2);
       
       $monthlyTrade = number_format($formattedMonthlyTrade, 2);
       
       $monthlyHighCourt = number_format($formattedCSC, 2);
       
       $monthlyGOGIS = number_format($formattedMonthlyGogis, 2);
       
       
       
        // Subhead Table view summary
       $formattedMonthlyCofO = Invoice::where('revenue_item_name', 'Application for Certificate of Occupancy')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedSiteInspect = Invoice::where('revenue_item_name', 'Site Inspection Report for Conversion to Statutory Processing fees - Residential')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
     $formattedGRR = Invoice::where('revenue_item_name', 'Ground rent - Residential')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedEarning = Invoice::where('revenue_item_name', 'EARNINGS FROM PREMIUM ON LAND')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');

    $formattedAppR = Invoice::where('revenue_item_name', 'Application forms - Residential')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedDeed = Invoice::where('revenue_item_name', 'REGISTRATION OF INSTRUMENT/REGISTRATION FEE - DEED OF ASSIGNMENT')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
     $formattedSearch = Invoice::where('revenue_item_name', 'Search Fee')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedAppC = Invoice::where('revenue_item_name', 'Application forms - Change of purpose clause')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
     $formattedSIComm = Invoice::where('revenue_item_name', 'Site Inspection Report for Conversion to Statutory Processing fees - Commercial - Education')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
     $formattedGRI = Invoice::where('revenue_item_name', 'Ground rent - Industrial')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedAppW = Invoice::where('revenue_item_name', 'Application forms - Withdrawal')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedConsentA = Invoice::where('revenue_item_name', 'Consent processing fees - Assignment')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedLayoutR = Invoice::where('revenue_item_name', 'Layout Plan Design Processing fees - Residential')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedCTC = Invoice::where('revenue_item_name', 'Layout Plan Design Processing fees - Residential')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $formattedAttorney = Invoice::where('revenue_item_name', 'Registration of instrument/registration fee - Power of attorney')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart->format('Y-m-d H:i:s'), $currentMonthEnd->format('Y-m-d H:i:s')])
    ->sum('rate');
    
    $monthlyAttorney = number_format($formattedAttorney, 2);
    
    $monthlyCTC = number_format($formattedCTC, 2);
    
    $monthlyLayoutR = number_format($formattedLayoutR, 2);
    
    $monthlyConsentA = number_format($formattedConsentA, 2);
    
    $monthlyGRI = number_format($formattedGRI, 2);

       $monthlySIComm = number_format($formattedSIComm, 2);


       $monthlyAppC = number_format($formattedAppC, 2);

       $monthlySearch = number_format($formattedSearch, 2);

       $monthlyCofO = number_format($formattedMonthlyCofO, 2);
       
       $monthlySiteInspect = number_format($formattedSiteInspect, 2);
       
       $monthlyGRR = number_format($formattedGRR, 2);
       
       $monthlyEarning = number_format($formattedEarning, 2);
       
       $monthlyAppR = number_format($formattedAppR, 2);
       
       $monthlyAppW = number_format($formattedAppW, 2);
       
       $monthlyDeed = number_format($formattedDeed, 2);
       
       // Format the total payments with a thousand separator
        $totalCurrentMonth = number_format($totalcurrent);
        
        $totalPayments = number_format($totalPay, 3);
        
        
        
       // getting the percentage increase or decrease of the monthly collections and display it dynamically CSC
        // Get the exact date of the previous month corresponding to today's date
        $today = Carbon::now();
$exactPreviousMonthDate = $today->copy()->subMonth();

// Get the start and end of the current month
$currentMonthStart = $today->copy()->startOfMonth();
$currentMonthEnd = $today->copy()->endOfMonth();

// Get the start and end of the previous month
$previousMonthStart = $exactPreviousMonthDate->copy()->startOfDay();
$previousMonthEnd = $exactPreviousMonthDate->copy()->endOfDay();
        
        // Get the current month's total for Civil Service Commission
        $currentMonthCSC = Invoice::where('agency_name', 'CIVIL SERVICE COMMISSION')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
            ->sum('rate');
        
        // Get the previous month's total for Civil Service Commission
        $previousMonthCSC = Invoice::where('agency_name', 'CIVIL SERVICE COMMISSION')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])
            ->sum('rate');
        
        // Calculate the percentage change
        if ($previousMonthCSC > 0) {
            $percentageChange = (($currentMonthCSC - $previousMonthCSC) / $previousMonthCSC) * 100;
        } else {
            $percentageChange = $currentMonthCSC > 0 ? 100 : 0; // Handle the case where previous month's total is 0
        }
        
        // getting the percentage increase or decrease of the monthly collections and display it dynamically Min of Trade
        // Get the current month's start and end dates
        $currentMonthStart = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();
        
        // Get the previous month's start and end dates
        $previousMonthStart = Carbon::now()->subMonth()->startOfMonth();
        $previousMonthEnd = Carbon::now()->subMonth()->endOfMonth();
        
        // Get the current month's total for Civil Service Commission
        $currentMonthCSC = Invoice::where('agency_name', 'CIVIL SERVICE COMMISSION')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
            ->sum('rate');
        
        // Get the previous month's total for Civil Service Commission
        $previousMonthCSC = Invoice::where('agency_name', 'CIVIL SERVICE COMMISSION')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])
            ->sum('rate');
        
        // Calculate the percentage change for Civil Service Commission
        if ($previousMonthCSC > 0) {
            $percentageChangeCSC = (($currentMonthCSC - $previousMonthCSC) / $previousMonthCSC) * 100;
        } else {
            $percentageChangeCSC = $currentMonthCSC > 0 ? 100 : 0; // Handle the case where previous month's total is 0
        }
        
        // Ministry of Trade, Industry and Tourism
$currentMonthTrade = Invoice::where('agency_name', 'MINISTRY OF TRADE, INDUSTRY AND TOURISM')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
    ->sum('rate');

$previousMonthTrade = Invoice::where('agency_name', 'MINISTRY OF TRADE, INDUSTRY AND TOURISM')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])
    ->sum('rate');

if ($previousMonthTrade > 0) {
    $percentageChangeTrade = (($currentMonthTrade - $previousMonthTrade) / $previousMonthTrade) * 100;
} else {
    $percentageChangeTrade = $currentMonthTrade > 0 ? 100 : 0;
}


// Gombe State Internal Revenue Service
        
        $currentMonthIRS = Invoice::where('agency_name', 'Gombe State Internal Revenue Service')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
    ->sum('rate');

$previousMonthIRS = Invoice::where('agency_name', 'Gombe State Internal Revenue Service')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])
    ->sum('rate');

if ($previousMonthIRS > 0) {
    $percentageChangeIRS = (($currentMonthIRS - $previousMonthIRS) / $previousMonthIRS) * 100;
} else {
    $percentageChangeIRS = $currentMonthIRS > 0 ? 100 : 0;
}
        
        // Get the current month's total for GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS
        $currentMonthGogis = Invoice::where('agency_name', 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
            ->sum('rate');
        
        // Get the previous month's total for GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS
        $previousMonthGogis = Invoice::where('agency_name', 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS')
            ->where('status', 'paid')
            ->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])
            ->sum('rate');
        
        // Calculate the percentage change for GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS
        if ($previousMonthGogis > 0) {
            $percentageChangeGogis = (($currentMonthGogis - $previousMonthGogis) / $previousMonthGogis) * 100;
        } else {
            $percentageChangeGogis = $currentMonthGogis > 0 ? 100 : 0; // Handle the case where previous month's total is 0
        }
        
       // UBA CURRENT MONTH
$ubaCurrentMonth = UBA::where('amount', '>', 0)
    ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
    ->sum('amount');




        
        // Format the amounts for display
        $monthlyHighCourt = number_format($currentMonthCSC, 2);
        $monthlyTrade = number_format($currentMonthTrade, 2);
        $monthlyIRS = number_format($currentMonthIRS, 2);
       $monthlyGogis = number_format($currentMonthGogis, 2);
       
        $ubapayments = number_format($ubaCurrentMonth, 2);
        
         
       
        // Pass the totalPayments variable to the view
        return view('pages.dashboards.index', ['totalPayments' => $totalPay, 'totalTaxpayers' => $totalTaxpayers, 'monthlyCofO' => $monthlyCofO  ,'monthlyIRS' => $monthlyIRS  , 'monthlyGOGIS' => $monthlyGOGIS, 'monthlyTrade' => $monthlyTrade,  'totalUnpaid' => $totalUnpaid,'dailyPayments' => $dailyPayments,'monthlyHighCourt' => $monthlyHighCourt ,'monthlySiteInspect' => $monthlySiteInspect,'monthlyGRR' => $monthlyGRR,'monthlyEarning' => $monthlyEarning ,'monthlyAppR' => $monthlyAppR ,'monthlyDeed' => $monthlyDeed ,'monthlySearch' => $monthlySearch ,'monthlyAppC' => $monthlyAppC ,'monthlySIComm' => $monthlySIComm ,'monthlyGRI' => $monthlyGRI ,'monthlyAppW' => $monthlyAppW ,'monthlyConsentA' => $monthlyConsentA ,'monthlyLayoutR' => $monthlyLayoutR,'monthlyCTC' => $monthlyCTC ,'monthlyAttorney' => $monthlyAttorney, 'totalCurrentMonth' => $totalCurrentMonth, 'percentageChange' => $percentageChange, 'percentageChangeTrade' => $percentageChangeTrade, 'percentageChangeIRS' => $percentageChangeIRS, 'percentageChangeGogis' => $percentageChangeGogis, 'ubapayments' => $ubapayments]);
        
        
       
    }
    
    
    // Inside your controller method
public function getAgencies()
{
    $agencies = Agency::all();
    return view('_widget-211', compact('agencies'));
}


    

    public function client()
    {
        
        // Retrieve total  paid amounts for the current month of the current User
             $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;
            
            $TotalUser = Invoice::where('status', 'paid')
                    ->where('user_id', Auth::id())
                    ->whereMonth('created_at', $currentMonth)
                    ->whereYear('created_at', $currentYear)
                    ->sum('rate');
            
        
        $TotalUserMonthly = number_format($TotalUser, 2);
       
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

         // Retrieve total payments from the database
         $totalPayments = Invoice::sum('rate');

         // Pass the totalPayments variable to the view
         return view('client.dashboards.index', ['totalPayments' => $totalPayments, 'TotalUserMonthly' => $TotalUserMonthly]);
        // return view('client.dashboards.index');
    }
    
    public function dueprocess()
    {
        
        // Retrieve total  paid amounts for the current month of the current User
             $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;
            
            // $TotalUser = Invoice::where('status', 'paid')
            //         ->where('user_id', Auth::id())
            //         ->whereMonth('created_at', $currentMonth)
            //         ->whereYear('created_at', $currentYear)
            //         ->sum('rate');
                    
                    
                      // Retrieve total paid amounts for the current month from the database
        $TotalUser = Invoice::where('status', 'paid')
        ->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->sum('rate');
            
             $TotalFee = Invoice::where('status', 'paid')
        ->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')
        ->where('revenue_item_name', 'TENDER FEES')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->sum('rate');
            
            $TotalVet = Invoice::where('status', 'paid')
        ->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')
        ->where('revenue_item_name', 'VETTING OF CONTRACT FEES')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->sum('rate');
            
             $TotalReg = Invoice::where('status', 'paid')
        ->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')
        ->where('revenue_item_name', 'CONTRACTORS VENDORS SERVICE PROVIDERS REG. FEES')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->sum('rate');
                    
                    
                    
            
        
        $TotalUserMonthly = number_format($TotalUser, 2);
        $TotalTenderMonthly = number_format($TotalFee, 2);
        $TotalRegMonthly = number_format($TotalReg, 2);
        $TotalVetMonthly = number_format($TotalVet, 2);
       
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

         // Retrieve total payments from the database
         $totalPayments = Invoice::sum('rate');

         // Pass the totalPayments variable to the view
         return view('client.dashboards.dueprocess', ['totalPayments' => $totalPayments, 'TotalUserMonthly' => $TotalUserMonthly, 'TotalTenderMonthly' => $TotalTenderMonthly, 'TotalRegMonthly' => $TotalRegMonthly, 'TotalVetMonthly' => $TotalVetMonthly]);
        // return view('client.dashboards.index');
    }
    
     public function Gogis()
    {
        
        // Retrieve total  paid amounts for the current month of GOGIS
            $currentMonthStart = Carbon::now()->startOfMonth()->setTimezone('UTC');  
$currentMonthEnd = Carbon::now()->endOfMonth()->setTimezone('UTC'); 
            
            $invoices = Invoice::where(DB::raw('TRIM(agency_name)'), 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS')
    ->where('status', 'paid')
    ->whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
    ->get();
            
            // $TotalUser = Invoice::where('agency_name', 'GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS ')
            //         ->where('status', 'paid')
                    
            //         ->whereMonth('created_at', $currentMonth)
            //         ->whereYear('created_at', $currentYear)
            //         ->sum('rate');
                    $TotalUser = $invoices->sum('rate');
                    // dd($TotalUser);
                    
            //         $gogisMonthly = Invoice::where('agency_name','GOMBE GEOGRAPHIC INFORMATION SYSTEM GOGIS ')
            //         ->where('status', 'paid')
            // ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            // ->sum('rate');
            
        
        $TotalUserMonthly = number_format($TotalUser, 2);
       
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

         // Retrieve total payments from the database
         $totalPayments = Invoice::sum('rate');

         // Pass the totalPayments variable to the view
         return view('client.dashboards.gogis', ['totalPayments' => $totalPayments, 'TotalUserMonthly' => $TotalUserMonthly]);
        // return view('client.dashboards.index');
    }
}
