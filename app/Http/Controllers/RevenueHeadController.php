<?php

namespace App\Http\Controllers;


use App\Models\RevenueItem;
use Illuminate\Http\Request;
use App\Models\Agency;

      
class RevenueHeadController extends Controller
{
    public function getAgenciesDropdown()
    {
        $agencies = Agency::all(); 
        return $agencies;

        return view('taxpayers.view', compact('agencies', 'revenueItems', 'rates'));
    }

    private function getAgencies()
    {
        return Agency::all();
    }
   

    public function showForm()
    {
        $agencies = $this->getAgencies();
        dd($agencies);
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

        return view('taxpayers.view', compact('agencies', 'revenueItems', 'rates'));
    }

    public function getRate(Request $request)
    {
        $agencies = $this->getAgencies(); 
        $selectedRevenueItem = RevenueItem::findOrFail($request->revenue_item_id);
        $rates = $selectedRevenueItem->agencies->pluck('pivot.rate', 'pivot.agency_id');

        return view('taxpayers.view', compact('agencies', 'selectedRevenueItem', 'rates'));
    }
}


