<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RemitaInvoiceController;
// use App\Http\Controllers\API\TaxpayerController;
use App\Http\Livewire\Taxpayer\TaxpayerComponent;
use App\Http\Livewire\Taxpayer\TaxpayerDetails;
use App\Http\Controllers\Taxpayer\TaxpayerController;
use App\Http\Controllers\Invoice\TaxpayerInvoiceController;

use App\Http\Controllers\invoice\Invoice2Controller;
use App\Http\Controllers\tcc\tccController;
use App\Http\Controllers\ReturnController;

use App\Http\Controllers\RevenueHeadController;
use App\Http\Controllers\UbaWebhookController;
use App\Http\Controllers\ubaController;
use App\Http\Controllers\SubheadDropDownController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiptMail;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/open-pdf', function () {
    $pdfPath = Storage::url('app/public/invoice.pdf'); // Assuming the PDF is stored in the storage folder

    // Open the PDF using appropriate headers
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="invoice.pdf"');
    readfile(storage_path('app/public/invoice.pdf'));
    exit;
    
})->name('open-pdf');


Route::get('dummy.json', function () {
    return response()->json([
        'data' => [
            ['id' => 1, 'taxpayer_name' => 'John Doe', 'agency_name' => 'ABC Corp', /* ... other fields ... */],
            // Add more dummy records as needed
        ],
    ]);
});


// Receipt 
Route::get('/download-pdf/{filename}', function ($filename) {
    $path = app_path('Http/Print/' . $filename);

    if (file_exists($path)) {
        return Response::download($path);
    } else {
        abort(404);
    }
})->name('download-pdf');


// Route::webhooks('/uba-webhook');
// Route::post('/uba-webhook', [UbaWebhookController::class, 'handleWebhook']);
Route::post('/uba/directpay', [ubaController::class, 'handleWebhook']);

Route::post('/squad-pay/webhook/gombe', [PaymentController::class, 'handle']);



//root route for Home / Landing page
    // i add it here to hide the home page which automatically redirect to /login before the finish working on the landing page
Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    } else {
        return redirect()->route('dashboard'); 
    }
});

Route::get('/', [LandingPageController::class, "index"])->name('home');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/faq', [LandingPageController::class, 'faq'])->name('faq');
Route::get('/pay-now', [LandingPageController::class, 'payNow'])->name('payNow');
Route::get('/invoicee/{id}', [LandingPageController::class, 'invoicee'])->name('invoicee');
Route::get('/taxCollection', [LandingPageController::class, 'taxCollection'])->name('taxCollection');
Route::get('/taxSystem', [LandingPageController::class, 'taxSystem'])->name('taxSystem');
Route::get('/taxDocument', [LandingPageController::class, 'taxDocument'])->name('taxDocument');
Route::post('/process-payment', [LandingPageController::class, 'processPayment'])->name('process.payment');
Route::post('/generate-rrr', [LandingPageController::class, 'generateRRR'])->name('generate-rrr');

 Route::post('/get-revenue-item', [TaxpayerController::class, 'getRevenueItems'])->name('get-revenue-item');
Route::get('/verify-payment/{rrr}', [TaxpayerController::class, 'verifyPayment'])->name('verifyPayment');

    Route::post('/update-rrr-payment-status/{invoiceId}', [Invoice2Controller::class, 'updateRRRPaymentStatus'])->name('update.rrr.payment.status');


// Route::post('/generate-rrr', 'LandingPageController@generateRRR');



Route::get('/tccss/{id}', [TccController::class, 'show']);



Route::get('/verify', [LandingPageController::class, "verify"])->name('verify');
Route::get('/receipt/{id}', [LandingPageController::class, 'getInvoiceDetails']);

Route::get('/verifyTcc', [LandingPageController::class, "verifyTcc"])->name('verifyTcc');
Route::get('/verifyTCC/{id}', [tccController::class, 'getTccDetails']);

 


// Route::middleware(['auth', 'verified' \Spatie\Permission\Middleware\RoleMiddleware::class . ':developer'])->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {

    
   
    
    
    // Route for the administrator dashboard

    Route::middleware('role:administrator')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        
         Route::get('/showTCC', [TCCController::class, 'showTccs'])->name('showTCC');
         
          Route::get('/invoices/report', [Invoice2Controller::class, 'generateReport'])->name('report');
          
           Route::get('/invoices/report_table', 'Invoice2Controller@generateReport');

          
           Route::get('/tcc-form', [tccController::class, 'create'])->name('tcc-form');
           
           Route::get('/invoices2', [Invoice2Controller::class, 'index'])->name('invoices2.list');

         Route::get('/verify-payment/{rrr}', [TaxpayerController::class, 'verifyPayment'])->name('verifyPayment');
         
         Route::get('/taxpayers/all', [TaxpayerController::class, 'index'])->name('taxpayers.all');
         
         Route::get('/TCCapprover', [TCCController::class, 'TCCapprover'])->name('TCCapprover');
         Route::post('/tcc/approve/{id}', [TccController::class, 'approve'])->name('tcc.approve');
         Route::post('/tcc/reject/{id}', [TccController::class, 'reject'])->name('tcc.reject');

         Route::get('/verifyTCC2', [tccController::class, "verifyTcc2"])->name('verifyTCC2');
        Route::get('/verifyTCC2/{id}', [tccController::class, 'getTccDetails']);
        
   
    });
    
    Route::get('/verify2', [LandingPageController::class, "verify2"])->name('verify2');
    
     


    // Route for the Developer dashboard
    Route::middleware('role:developer')->group(function () {
        Route::get('/adm/dashboard', [DashboardController::class, 'index'])->name('client.dashboard');
        
        Route::get('/showTCC', [TCCController::class, 'showTccs'])->name('showTCC');
        Route::get('/TCCreviewer', [TCCController::class, 'TCCreviewer'])->name('TCCreviewer');
       // Route::get('/TCCapprover', [TCCController::class, 'TCCapprover'])->name('TCCapprover');
        //Route::post('/tcc/approve/{id}', [TccController::class, 'approve'])->name('tcc.approve');
        

        Route::get('/verifyTCC2', [tccController::class, "verifyTcc2"])->name('verifyTCC2');
        Route::get('/verifyTCC2/{id}', [tccController::class, 'getTccDetails']);
        
        Route::get('/invoices/monthReport', [LandingPageController::class, 'genReport'])->name('monthReport');
Route::post('/invoices/getRevenueItems', [LandingPageController::class, 'getRevenueItems']);
Route::post('/invoices/getRevenueItemDetails', [LandingPageController::class, 'getRevenueItemDetails']);

        
        
        //  Route::get('/invoices/monthReport', [LandingPageController::class, 'genReport'])->name('monthReport');

        //  Route::get('/invoices/report', [Invoice2Controller::class, 'generateReport'])->name('report');
         
         
         
         
         
         Route::get('/invoices/testReport', [Invoice2Controller::class, 'testReport'])->name('testReport');
         
         
         
        Route::get('/invoices/gogisReport', [Invoice2Controller::class, 'gogisReport'])->name('gogisReport');
Route::get('/invoices/gogisReport2', [Invoice2Controller::class, 'gogisReport2'])->name('gogisReport2');
         
         
         Route::get('/invoices/report2', [Invoice2Controller::class, 'generateRReport'])->name('report2');
         Route::get('/invoices/bureauReport2', [Invoice2Controller::class, 'generateRReport2'])->name('bureauReport2');
         Route::get('/invoices/bureauReport', [Invoice2Controller::class, 'generateReport2'])->name('bureauReport');
         Route::get('/invoices/monthBureau', [LandingPageController::class, 'BureauMonReport'])->name('monthBureau');
         
         Route::get('/invoices/vendorReport2', [Invoice2Controller::class, 'generateVendorReport'])->name('vendorReport2');
         
         Route::get('/invoices/vendorReport', [Invoice2Controller::class, 'generateVendorReport2'])->name('vendorReport');
         
         Route::get('/invoices/WHTreport2', [Invoice2Controller::class, 'generateWHTReport'])->name('WHTreport2');
         
         Route::get('/invoices/WHTreport', [Invoice2Controller::class, 'generateWHTReport2'])->name('WHTreport');
         
         
         Route::get('/invoices/ConsumptionTaxReport2', [Invoice2Controller::class, 'generateTaxReport'])->name('ConsumptionTaxReport2');
         
         Route::get('/invoices/ConsumptionTaxReport', [Invoice2Controller::class, 'generateTaxReport2'])->name('ConsumptionTaxReport');
         
         
         Route::get('/invoices/fireServiceReport2', [Invoice2Controller::class, 'generateFireServiceReport2'])->name('fireServiceReport2');
         
         Route::get('/invoices/fireServiceReport', [Invoice2Controller::class, 'generateFireServiceReport'])->name('fireServiceReport');
         
          Route::get('/tcc-form', [tccController::class, 'create'])->name('tcc-form');
          
          Route::get('/watermark', [tccController::class, 'watermark'])->name('watermark');
        
        Route::get('/invoices2', [Invoice2Controller::class, 'index'])->name('invoices2.list');
        
         Route::get('/invoices/report_table', 'InvoiceController@generateReport');
    
     Route::get('/verify-payment/{rrr}', [TaxpayerController::class, 'verifyPayment'])->name('verifyPayment');
     
     Route::get('/taxpayers/all', [TaxpayerController::class, 'index'])->name('taxpayers.all');
   
        
    });
    
    Route::get('/tcc-form', [tccController::class, 'create'])->name('tcc-form');
    
    // Route for dueprocess report
     Route::get('/invoices/bureauReport', [Invoice2Controller::class, 'generateReport2'])->name('bureauReport');
     Route::get('/invoices/monthBureau', [LandingPageController::class, 'BureauMonReport'])->name('monthBureau');
     
     Route::get('/due/dashboard', [DashboardController::class, 'dueprocess'])->name('client.dueprocess');
    
     // Route for the Collection Dept dashboard
    Route::middleware('role:COLLECTION')->group(function () {
        Route::get('/collection/dashboard', [DashboardController::class, 'client'])->name('collection.dashboard');
        
        Route::get('/invoices/report', [Invoice2Controller::class, 'generateReport'])->name('report');
        
        Route::get('/invoices2', [Invoice2Controller::class, 'index'])->name('invoices2.list');
        
        Route::get('/invoices/report_table', [Invoice2Controller::class, 'generateReport'])->name('report_table');
        
        //  Route::get('/invoices/report_table', 'InvoiceController@generateReport');
     Route::get('/verify-payment/{rrr}', [TaxpayerController::class, 'verifyPayment'])->name('verifyPayment');
     
     Route::get('/taxpayers/all', [TaxpayerController::class, 'index'])->name('taxpayers.all');
     
     
     Route::get('/invoices/monthReport', [LandingPageController::class, 'genReport'])->name('monthReport');
Route::post('/invoices/getRevenueItems', [LandingPageController::class, 'getRevenueItems']);
Route::post('/invoices/getRevenueItemDetails', [LandingPageController::class, 'getRevenueItemDetails']);

   
    });
    
    Route::get('/invoices/monthReport', [LandingPageController::class, 'genReport'])->name('monthReport');
    
    
      Route::get('/invoices2', [Invoice2Controller::class, 'index'])->name('invoices2.list');
     Route::get('/invoices/report', [Invoice2Controller::class, 'generateReport'])->name('report');
          
    Route::get('/dashboard', [DashboardController::class, 'client'])->name('dashboard');
     Route::get('/verify-payment/{rrr}', [TaxpayerController::class, 'verifyPayment'])->name('verifyPayment');
   
    Route::post('/update-rrr-payment-status/{invoiceId}', [Invoice2Controller::class, 'updateRRRPaymentStatus'])->name('update.rrr.payment.status');
    
    
   
    Route::get('/get-daily-invoices', [Invoice2Controller::class, 'getDailyInvoices']);
    Route::get('/getAll', [DashboardController::class, 'index']);
    
    
    Route::get('/token', [TaxpayerController::class, 'getAccessToken'])->name('token');
    Route::get('/rrr', [TaxpayerController::class, 'store'])->name('rrr');
    Route::post('/storerrr', [TaxpayerController::class, 'storerrr'])->name('storerrr');
    Route::post('/store', [TaxpayerController::class, 'store'])->name('store');
    Route::get('/create', [TaxpayerController::class, 'create'])->name('create');

Route::get('/invoices2/show/intermediate', [Invoice2Controller::class, 'showIntermediate'])->name('invoices2.show.intermediate');


    
    Route::match(['get', 'post'], '/invoices/generate-pdf', [Invoice2Controller::class, 'generatePdf']);

Route::get('/Dashboard', [DashboardController::class, 'taxpayerCount'])->name('Dashboard');

Route::get('/taxpayers/all', [TaxpayerController::class, 'all'])->name('taxpayers.all');
    
    // LIVEWIRE TAXPAYER ROUTE
        
    // Route::get('/taxpayers', TaxpayerComponent::class)->name('taxpayers.list');
    // sRoute::get('/taxpayers/{taxpayerId}', TaxpayerDetails::class)->name('taxpayer.details');

    // datatable route
    
    Route::get('/taxpayers', [TaxpayerController::class, 'index'])->name('taxpayers.index');
   
    Route::get('/taxpayers/{id}', [TaxpayerController::class, 'show'])->name('taxpayers.show');
    Route::post('/get-revenue-items', [TaxpayerController::class, 'getRevenueItems'])->name('get-revenue-items');
    Route::post('/get-rate', [TaxpayerController::class, 'getRate'])->name('get-rate');
    Route::post('/generate-invoice', [TaxpayerController::class, 'generateInvoice'])->name('generate-invoice');
    Route::post('/taxpayers/store', [TaxpayerController::class, 'store'])->name('taxpayer.store');
    
    Route::get('/receipts', [TaxpayerController::class, 'viewReceipts'])->name('view-receipts');
    
    
    // Route::get('/invoices/report_table', 'InvoiceController@generateReport');

    
    //TCC
   
    Route::get('/returns', [ReturnController::class, 'index'])->name('returns');


    Route::post('/tcc', [tccController::class, 'store'])->name('tcc.store');
    Route::post('/generate-pdf', [tccController::class, 'index'])->name('generate-pdf');
    Route::get('/tcc/index', [tccController::class, 'index'])->name('tcc.index');
    // routes/web.php

Route::get('/download-tcc/{tccId}', [TccController::class, 'downloadPdf'])->name('downloadPdf');
Route::get('/download-tcc2/{tccId}', [TccController::class, 'downloadPdf2'])->name('downloadPdf2');



Route::get('/get-payment-statuss/{invoiceId}', [Invoice2Controller::class, 'getPaymentStatuss'])->name('getPaymentStatuss');

// routes/web.php
Route::get('/edit/{id}', [TccController::class, 'edit'])->name('tcc.edit');
Route::patch('/update/{id}', [TccController::class, 'update'])->name('tcc.update');

// Route::get('/showTCC', [TccController::class, 'update'])->name('tcc.showTCC');



    // Route::get('/tccs', 'TccController@showTccs')->name('tccs.showTCC');
   

    


    

    // Route::get('/tcc-form', function () {
    //     return view('tcc-form');
    // });
    
    
    // single routes to pull invoices based on customized user, subheads,
    Route::get('/Userinvoices', [Invoice2Controller::class, 'UserInvoice'])->name('Userinvoices.list');
    
     Route::get('/DueProcessInvoices', [Invoice2Controller::class, 'dueprocessInvoice'])->name('dueprocessInvoice.list');
    
    Route::get('/dueprocessVetting', [Invoice2Controller::class, 'dueprocessVetting'])->name('dueprocessVetting.list');
    
    Route::get('/dueprocessReg', [Invoice2Controller::class, 'dueprocessReg'])->name('dueprocessReg.list');
    
    Route::get('/dueprocessTender', [Invoice2Controller::class, 'dueprocessTender'])->name('dueprocessTender.list');
    
    
    
    
    Route::get('/invoices2/{id}', [Invoice2Controller::class, 'show'])->name('invoices2.show');
    Route::post('/update-payment-status/{invoiceId}', [Invoice2Controller::class, 'updatePaymentStatus'])->name('update.payment.status');
    
    
    //Pos receipt route
    Route::post('/posrct/{invoiceId}', [Invoice2Controller::class, 'printPOS'])->name('pos.receipt');
    // Route::post('/update-payment-status/{invoiceId}', 'Invoice2Controller@updatePaymentStatus')->name('update.payment.status');


    // Route::get('/invoices', [TaxpayerInvoiceController::class, 'dataTable'])->name('invoices.index');
    // Route::get('/invoices/{id}', [TaxpayerInvoiceController::class, 'show'])->name('invoices.show');

    Route::get('/payments', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment.show');


    Route::get('/email', function() {
        $email = 'clrmuhammad@gmail.com'; 
        Mail::to($email)->send(new ReceiptMail());
    });

    // subhea routes
    // Route::get('/show-form', [RevenueHeadController::class, 'showForm'])->name('taxpayers.showForm');
    // Route::post('/get-revenue-items', [RevenueHeadController::class, 'getRevenueItems'])->name('taxpayers.getRevenueItems');
    // Route::post('/get-rate', [RevenueHeadController::class, 'getRate'])->name('taxpayers.getRate');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    

// closing of developer middleware
});

// route for TCC duplicate check
Route::post('/check-duplicate', [tccController::class, 'checkDuplicate'])->name('tcc.checkDuplicate');

// Route for the GOGIS dashboard
    Route::middleware('role:GOGIS')->group(function () {
        Route::get('/gogis/dashboard', [DashboardController::class, 'Gogis'])->name('gogis.dashboard');
        
Route::get('/gogisInvoices', [Invoice2Controller::class, 'gogisInvoice'])->name('gogisInvoice.list');


        Route::get('/invoices/gogisReport', [Invoice2Controller::class, 'gogisReport'])->name('gogisReport');
Route::get('/invoices/gogisReport2', [Invoice2Controller::class, 'gogisReport2'])->name('gogisReport2');
         

 });


    Route::get('/error', function () {
        abort(500);
    });

    Route::get('/post', [RemitaInvoiceController::class ,'index']);

    // Route::post($uri, $callback);

    Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
