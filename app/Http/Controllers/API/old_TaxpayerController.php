<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request as IlluminateRequest;



class TaxpayerController extends Controller
{
    //
    public function index()
    {
        // return $this->getAccessToken();
        return view('Api.Auth.taxpayer.index');
    }

    public function getAccessToken()
    {
        // $client = new TaxpayerController();
        // $clientUsername = '6UWNMTRJPB4T0KJE';
        // $clientPassword = "KLW5PXOIVH8XYX0W0Y01O711IP13G1Z4";

        $merchantId = 2547916;
        $apiKey =  1946;
        $serviceTypeId = 4430731;
        $clientUsername = '6UWNMTRJPB4T0KJE';
        $clientPassword = "KLW5PXOIVH8XYX0W0Y01O711IP13G1Z4";

        
        $response = Http::post('https://remitademo.net/remita/exapp/api/v1/send/api/uaasvc/uaa/token', [


            'merchantId'=> $merchantId,
            'apiKey'=> $apiKey,
            'serviceTypeId'=> $serviceTypeId,
            'username' => $clientUsername,
            'password' => $clientPassword
        ]);
        return  $response;
    }

    public function generateRRR()
    {
        return view('Api.Auth.taxpayer.create');

        // $accessToken = $this->getAccessToken();
        // $headers = Http::withHeaders(['Authorization'=> 'remitaConsumerKey=2547916,remitaConsumerToken='.$accessToken]) -> post('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit');
        // // return $headers;

        // $apiKey = 'your_api_key';
        // $merchantId = 'your_merchant_id';
        // $constantString = 'rrr';

        // $concatenatedString = $constantString . $apiKey . $merchantId;



        // $serviceTypeId = 4430731;
        // $amount =  '1000';
        // $orderId = '010201';
        // $payerName = 'Mustapha Muhammad Auwal';
        // $payerEmail = 'clr@gmail.com';
        // $payerPhone = '08064247753';
        // $description = 'Testing for Gusau Tax';


        // $response = Http::post('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit', $headers,[


        //     'serviceTypeId'=> $serviceTypeId,
        //     'amount'=> $amount,
        //     'orderId'=> $orderId,
        //     'payerName' => $payerName,
        //     'payerEmail' => $payerEmail,
        //     'payerPhone' => $payerPhone,
        //     'payerEmail' => $payerEmail
        // ]);
        // return  $response;

    } 

    public function storerrr(Request $request)
    {
            return $request->all();
    }

    public function  create()
    {
        return view('Api.Auth.taxpayer.index');
    }

    public function  store(Request $request)
    {
        


        $accessToken = $this->getAccessToken();

        $merchantId = '2547916';
        $apiKey =  '1946';
        $serviceTypeId = '4430731';
        $orderId = '000021212';
        $totalAmount = '1000';

        $concatenatedString  =$merchantId . $serviceTypeId. $orderId . $totalAmount. $apiKey;

        $apiHash = hash('sha512', $concatenatedString);

        // $client = new Client();
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

        // $response = Http::withHeaders([
        //     'Authorization' => 'remitaConsumerKey=2547916,remitaConsumerToken=' . $apiHash,
        // ])->post('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit', $body);
        
        $uri = new Uri('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit');
        $httpMethod = 'POST';
        $headers = [
            'Authorization' => 'remitaConsumerKey=2547916,remitaConsumerToken=' . $apiHash,
            'Content-Type' => 'application/json', // Adjust as needed
        ];
        
        $bodyData = [
            "serviceTypeId" => "4430731",
            "amount" => "1200",
            "orderId" => "902992",
            "payerName" => "John Doe",
            "payerEmail" => "doe@gmail.com",
            "payerPhone" => "09062067384",
            "description" => "Payment for September Fees"
        ];
        
        $body = json_encode($bodyData);
        
       
        $client = new Client(); // Create a Guzzle HTTP client
        
        // Use Guzzle's Request class to create a request object
        $request = new GuzzleRequest($httpMethod, $uri, $headers, $body);

        
        $res = $client->sendAsync($request)->wait();

        // Process the response
         echo $res->getBody();













        // $serviceTypeId = 4430731;
        // $amount= $request->amount;
        // $orderId= $request->orderId;
        // $payerName = $request->payerName;
        // $payerEmail = $request->payerEmail;
        // $payerPhone = $request->payerPhone;
        // $description = $request->description;


        // Http::withHeaders(['Authorization'=> 'remitaConsumerKey=2547916,remitaConsumerToken='.$apiHash])->post('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit', [
          
        // ]);

        // $response = Http::get('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit', $headers,[


        //         // 'serviceTypeId'=> $serviceTypeId,
        //         // 'amount'=> $amount,
        //         // 'orderId'=> $orderId,
        //         // 'payerName' => $payerName,
        //         // 'payerEmail' => $payerEmail,
        //         // 'payerPhone' => $payerPhone,
        //         // 'description' => $payerEmail,
                
        //     ]);

        //     $res = $client->sendAsync($request)->wait();
        //     return getBody();
        
    }
}
