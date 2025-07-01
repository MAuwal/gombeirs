<?php

namespace App\Http\Controllers\invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\InvoiceDataTable;
use App\Models\Invoice;
use App\Models\Taxpayer;
// use App\Http\Controllers\Invoice\TaxpayerInvoiceController;


class TaxpayerInvoiceController extends Controller
{

    
    
    public function dataTable(InvoiceDataTable $dataTable)
    {
        return $dataTable->render('invoices.index');
    }

    public function index()
    {
        
        // return view('invoices.index'); // Assuming you have a view file in resources/views/invoices/index.blade.php
    }

    public function show($id)
    {

        return view('invoices.view', compact('taxpayer'));
        
        
        // $taxpayer = Taxpayer::find($id);
        
        // if (!$taxpayer) {
        //     abort(404); 
        // }
       
        // $agencies = $this->getAgencies();
        
        // $revenueItems = [];
        // $rates = [];

        // return view('taxpayers.view', compact('taxpayer','agencies', 'revenueItems', 'rates'));

        // return view('invoices.view');
        
        // return view('invoices.view', ['id' => $id]); // Assuming you have a view file in resources/views/invoices/show.blade.php
    }
    public function edit($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            abort(404);
        }

        // Add logic for editing here

        return view('invoices.edit', compact('invoice'));
    }

}
