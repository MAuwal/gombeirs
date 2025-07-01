 <?php 
 $data = array(
    "paymentdate" => $invoice->created_at, 
    "phone" => $invoice->phone_number, 
    "gtin" => $invoice->id 
);

$jsonData = json_encode($data);

 
$curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://getproict.com.ng/watermark/api',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_POSTFIELDS => $jsonData,
          CURLOPT_HTTPHEADER => array(
            'authkey: ^LnWuuMz',
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response,true);

        // Example: A base64-encoded string of a simple image (this is a placeholder, use your own base64 string)
        $base64String = $response['watermark'];

        // Define the MIME type (e.g., image/png, image/jpeg, etc.)
        $mimeType = 'image/jpeg'; // Replace with the correct MIME type if necessary

        // Create the base64 image string
        $base64ImageString = 'data:' . $mimeType . ';base64,' . $base64String;
        
    ?>



<html>

<head>
    <title>GIRS</title>
    
    

    <style>
     .watermark {
                 background-image: url('<?php echo $base64ImageString; ?>');
                background-size: cover;
                /* Adjust the background size as needed */
            }
        .body {
            border: 20px solid green;
            border-radius: 20px;
            background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='110' height='30'><text x='0' y='20' fill='black' fill-opacity='0.15' font-size='16' font-family='Arial'>Jewel ICT Hub</text></svg>");
            background-repeat: repeat;
            /* Repeat the watermark across the page */
            background-size: auto;
            /* overflow: hidden; */
            position: relative;
        }
        
        .logo{
            position: absolute;
            top: 2px;
            right: 2px;
        }

        .img {
            /* position: absolute; */
            width: 50%;
            top: 150px;
            /* left: 50%; Aligns the image to the center */
            /* transform: translateX(-50%); Moves the image horizontally to center it */
            z-index: -1;
            opacity: 0.1;
        }

        .img2 {
            width: 100px;
            display: block;
            margin: 0 auto;
            position: absolute;
            left: 50%;
            top: 2px;
            transform: translateX(-50%);
        }

        .leftImage h1 {
            font-size: 40px;
            font-weight: 1000;
            color: rgba(0, 0, 0, 0.25);
            text-align: center;
        }

        .leftImage {
            display: flex;
            margin: 0 auto;
            width: 50%;
            justify-content: space-between;
            height: 50%;
            left: 50%;
            /* Aligns the image to the center */
            transform: translateX(-50%);
            align-items: center;
            position: absolute;
            z-index: -1;
        }

        #reciept {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table.total {
            width: auto;
            margin-right: 0px;
            margin-left: auto;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #c7b363;
            border: 1px solid red;
            color: white;
        }

        .row p {
            margin-left: 35px;
        }

        h3 {
            margin-top: 35px;
        }
        img{
            max-width: 100%;
            height: auto;
            display: inline-block;

        }

        .receiptId,.coatofarmImg{
            width: 30%;
            height: auto;
            position: absolute;
            right: 50%;
            top: 40%; 
            transform: translate(50%,-50%);
        }

        .receiptId{
            right: 60%;
            top: 50%;
            
        }
        .coatOfArms{
            opacity: 0.15;
          top: 0;
          left: 0;
            position: absolute;
            z-index: -1;
        }
    </style>

</head>

<body>
     <div class="watermark">
    <div class="body">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg" class="img2" alt="">
        <div>
            <!-- <div class="leftImage">

                <h1>{{ $invoice->id }}</h1>

                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg" class="img"
                    alt="">
            </div> -->

            <div class="coatOfArms">

<!--<h1 class="receiptId">{{ $invoice->id }}</h1>-->
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Coat_of_arms_of_Nigeria.svg" class="coatofarmImg"
                    alt="">

                <!--    <img src="assets/media/logos/ncoa.png" alt="Logo" width="150" class="logo"/>-->
                <!--    <img align="right" src="assets/media/logos/states.png" alt="state logo" width="150" class="logo"/>-->
            </div>

            <h5 align="center" style="margin-top: 130px;"><strong>GOMBE STATE IGR PLATFORM E-REVENUE RECEIPT</strong></h5>


            <img align="right"
                src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->generate('Name: ' . $invoice->taxpayer_name . ' | Phone Number: ' . $invoice->phone_number . ' | Amount: ' . $invoice->rate . ' | Revenue Item: ' . $invoice->revenue_item_name . ' | Agency Name: ' . $invoice->agency_name)) }}"
                alt="QR" width="150" class="logo" />




            <div class="row">
                <p><strong>DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->created_at }} </strong></p>
                <p><strong>TAXPAYER NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->taxpayer_name }}</strong></p>
                <p><strong>TAXPAYER'S PHONE NUMBER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $invoice->phone_number
                        }}</strong></p>
                <p><strong>RECEIPT FOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->agency_name }}</strong></p>
                <p><strong>SUBHEAD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->revenue_item_name }}</strong></p>

                <p><strong>ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->address }}</strong></p>
                <p><strong>DETAILS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $invoice->details }}</strong></p>

                <p><strong>PRINTED BY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{auth()->user()->name }}</strong></p>
                <p><strong>TRANSACTION REFERENCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  {{ $invoice->invoice_id }} / {{ $invoice->transaction_ref }}</strong></p>
                <!--<p><strong>{{$invoice->id}}</strong></p>-->
            </div>

            <table id="reciept">
                <tr>
                    <th>SN</th>
                    <th>AGENCY</th>
                    <th>SUBHEAD</th>
                    <th>AMOUNT</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>{{ $invoice->agency_name }}</td>
                    <td>{{ $invoice->revenue_item_name}}</td>
                    <td align="right" class="gray"> N {{ number_format($invoice->rate, 2, '.', ',') }}</td>
                </tr>
            </table>

            <table class="total">
                <tr>
                    <th>TOTAL:
                    <th>N {{ number_format($invoice->rate, 2, '.', ',') }}</th>
                    </th>
                </tr>
            </table>

            <div class="col-sm-12 mb-10">
                <!--<span> <strong><h3>Receipt No: {{ $invoice->id }}</h3></strong></span>-->
            </div>
        </div>
    </div>
    </div>

</body>

</html>