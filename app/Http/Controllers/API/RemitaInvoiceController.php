<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RemitaInvoiceController extends Controller
{
    //
    public function index()
    {
            
        // $client = new RemitaInvoiceController();
        // $headers = [
        // 'Content-Type' => 'application/json',
        // 'Authorization' => 'remitaConsumerKey=2547916,remitaConsumerToken={{apiHash}}'
        // ];
        // $body = '{
        // "serviceTypeId": "4430731",
        // "amount": "{{totalAmount}}",
        // "orderId": "{{orderId}}",
        // "payerName": "John Doe",
        // "payerEmail": "doe@gmail.com",
        // "payerPhone": "09062067384",
        // "description": "Payment for Septmeber Fees"
        // }';
        // $request = new Request('POST', 'https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit', $headers, $body);
        // $res = $client->sendAsync($request)->wait();
        // return $res->getBody();

    }
}
