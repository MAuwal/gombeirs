<?php

use App\Http\Controllers\API\TaxpayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Interswitch;
use App\Http\Controllers\API\USerApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('taxpayers') -> as ('taxpayer')-> controller(TaxpayerController::class)->group(function() {
    Route::get('index', 'index')->name('index');
});

// Route::post('/interswitch', [Interswitch::class, 'handleRequest'])->name('handleRequest')->middleware('whitelist.ip');
Route::post('/interswitch', [Interswitch::class, 'handleRequest'])->name('handleRequest');

Route::get('/paydirect-cust-val/{invoice_id}', [Interswitch::class, 'getInvoiceDetails'])->name('getInvoiceDetails')->middleware('validate.interswitch.signature');



// Api create new user/vendor
Route::post("regisssttter", [USerApiController::class, "register"]);
Route::post("authenticate", [USerApiController::class, "login"]);
// Route::post("UsercreateTaxpayer", [USerApiController::class, "UsercreateTaxpayer"]);


Route::prefix('taxpayers') -> as ('taxpayer')-> controller(TaxpayerController::class)->group(function() {
    Route::get('index', 'index')->name('index');
});

Route::group([
    "middleware" => ["auth:api"]
], function(){

    Route::get("profile", [USerApiController::class, "profile"]);
    Route::get("refresh", [USerApiController::class, "refreshToken"]);
    Route::get("logout", [USerApiController::class, "logout"]);
    Route::post("taxpayer", [TaxpayerController::class, "createTaxpayer"]);
    Route::post("invoice", [TaxpayerController::class, "GenerateInv"]);
    Route::get('taxpayer/{id}', [TaxpayerController::class, 'getTaxpayer']);
    Route::get('invoice/{invoice_id}', [TaxpayerController::class, 'getInvoice']);
    Route::post('invoice/update-status', [TaxpayerController::class, 'updatePaymentStatus']);
    Route::post('/get-subhead', [TaxpayerController::class, 'getRevenueItems']);
    Route::get('/get-agencies', [TaxpayerController::class, 'getAgencies']);
    
    Route::post("UsercreateTaxpayer", [USerApiController::class, "UsercreateTaxpayer"]);
});

   
 