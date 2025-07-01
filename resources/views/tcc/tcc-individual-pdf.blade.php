 <?php 
 $data = array(
    "paymentdate" => date('Y-m-d'), 
    "phone" => $tcc->tin, 
    "gtin" => $tcc->gtin 
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



<!DOCTYPE html>
<html>
  <head>
    <title>Gombe State Tax Clearance Certificate</title>
    <style>
    
    .watermark {
                background-image: url('<?php echo $base64ImageString; ?>');
                background-size: cover;
                /* Adjust the background size as needed */
            }
      body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 0.7rem;
        border: 4px solid rgb(17, 153, 5);
      }
      h1 {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin-top: 0;
        text-align: left;
      }
      .container {
        margin: 20px;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        padding: 1px;
        /* margin-top: 20px; */
      }

      /*table tr td:first-child {*/
      /*  color: rgb(10, 97, 2);*/
      /*  font-weight: 700;*/
      /*  font-size: 14px;*/
      /*}*/
      th,
      td {
        padding: 1px;
        text-align: left;
      }
      th {
        background-color: rgba(17, 153, 5, 0.774);
      }
      .qr-code {
        float: left;
        margin-right: 20px;
      }
      .approving-officer {
        float: right;
        margin-top: 20px;
        text-align: center;
      }
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
      .logo {
        position: relative;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 50px;
      }
      .img {
        width: 120px;
        height: 120px;
      }
      .img2 {
        width: 180px;
        height: 130px;
      }
      .qrcode img {
        height: 150px;
        width: 150px;
      }
    </style>
  </head>
  <body>
      <div class="watermark">
    <div class="container">
      <div class="clearfix">
        <table>
          <tr style="color: #fff">
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>
              <div class="logo">
                <img
                  src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/gombe.png'))) }}"
                  class="img"
                  alt="girs Logo"
                />
                <!--<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/Gombe-state.jpg'))) }}" class="img"  alt="girs Logo">-->
                <!--     <img-->
                <!--    src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/landingPage/img/logo.jpg'))) }}"-->
                <!--    class="img"-->
                <!--    alt=""-->
                <!--/>-->

                <!--<img-->
                <!--  src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/Coat_of_arms_of_Nigeria.svg'))) }}"-->
                <!--  class="img2"-->
                <!--  alt=""-->
                <!--/>-->
              </div>
            </td>
            <td></td>
          </tr>
        </table>

        <h1 style="text-align: center">Gombe State Internal Revenue Service</h1>
        <h4 style="text-align: center">
          ADDRESS: Opposite Custodian Hotel, Along Gombe - Bauchi Road, Gombe,
          Gombe State
        </h4>
        <h4 style="text-align: center">
          PHONE: 08024945888, 09130064676, 09091363075, 09054356142
        </h4>
        <!--<h3 style="text-align:center; ">EMAIL: irsgombe@gmail.com </h3>-->
        <h3
          style="
            text-align: center;
            font-weight: bold;
            background-color: rgb(17, 153, 5);
            color: #fff;
            padding: 5px;
          "
        >
          GOMBE STATE TAX CLEARANCE CERTIFICATE
        </h3>
        <table>
          <tr>
            <td></td>
            <td></td>
            <td><b>TCC No:</b></td>
            <td>:{{ isset($tcc['id']) ? $tcc['id'] : '' }}</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><b>Date Of Issue:</b></td>
           <td>:{{ isset($tcc['updated_at']) ? \Carbon\Carbon::parse($tcc['updated_at'])->format('Y-m-d') : '' }}</td>

          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><b>Expiry Date:</b></td>
            <td>:{{ isset($tcc['certificateExpires']) ? $tcc['certificateExpires'] : '' }}</td>
          </tr>
          <tr>
            <td><b>Name Of Taxpayer</b></td>
            <td>:{{ isset($tcc['name']) ? $tcc['name'] : '' }}</td>
          </tr>
          <!--<tr>-->
          <!--	<td><b>BN / RC No.</b></td>-->
          <!--	<td>: {{ isset($data['rc']) ? $data['rc'] : '' }}</td>-->
          <!--</tr>-->
          <!--<tr>-->
          <!--	<td><b>Date Of Incorporation</b></td>-->
          <!--	<td>: {{ isset($data['date_of_incorporation']) ? $data['date_of_incorporation']  : '' }}</td>-->
          <!--</tr>-->
          <tr>
            <td><b>GTIN</b></td>
            <td>: {{ isset($tcc['gtin']) ? $tcc['gtin'] : '' }}</td>
          </tr>
          <tr>
            <td><b>TIN</b></td>
            <td>: {{ isset($tcc['tin']) ? $tcc['tin'] : '' }}</td>
          </tr>
          <tr>
            <td><b>Address</b></td>
            <td>
              : {{ isset($tcc['business_address']) ? $tcc['business_address'] :
              '' }}
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <!--         <tr>-->
          <!--	<td><b>Business Status</b></td>-->
          <!--	<td>: {{ isset($data['business_status']) ? $data['business_status'] : '' }}</td>-->
          <!--</tr>-->
        </table>
        <p>
          has settled his/her income tax assessments for the past three years,
          i.e 2022, 2023, 2024
        </p>
      </div>
      <table>
        <tr>
          <th></th>
          <th>Assessment Year 2022</th>
          <th>Assessment Year 2023</th>
          <th>Assessment Year 2024</th>
        </tr>
        <tr>
          <td><b>Total Chargeble Income</b></td>
          <td>
            NGN {{ isset($tcc['Chargeableyr1']) ? $tcc['Chargeableyr1'] : '' }}
          </td>
          <td>
            NGN {{ isset($tcc['Chargeableyr2']) ? $tcc['Chargeableyr2'] : '' }}
          </td>
          <td>
            NGN {{ isset($tcc['Chargeableyr3']) ? $tcc['Chargeableyr3'] : '' }}
          </td>
        </tr>
        <tr>
          <td><b>Tax Payed</b></td>
          <td>NGN {{ isset($tcc['taxpaidyr1']) ? $tcc['taxpaidyr1'] : '' }}</td>
          <td>NGN {{ isset($tcc['taxpaidyr2']) ? $tcc['taxpaidyr2'] : '' }}</td>
          <td>NGN {{ isset($tcc['taxpaidyr3']) ? $tcc['taxpaidyr3'] : '' }}</td>
        </tr>
        <tr>
          <td><b>Total Receipt ID</b></td>
          <td>{{ isset($tcc['receiptidyr1']) ? $tcc['receiptidyr1'] : '' }}</td>
          <td>{{ isset($tcc['issuedateyr2']) ? $tcc['issuedateyr2'] : '' }}</td>
          <td>{{ isset($tcc['receiptidyr3']) ? $tcc['receiptidyr3'] : '' }}</td>
        </tr>
        <tr>
          <td><b>Date Of Issue</b></td>
          <td>{{ isset($tcc['issuedateyr1']) ? $tcc['issuedateyr1'] : '' }}</td>
          <td>{{ isset($tcc['receiptidyr2']) ? $tcc['receiptidyr2'] : '' }}</td>
          <td>{{ isset($tcc['issuedateyr3']) ? $tcc['issuedateyr3'] : '' }}</td>
        </tr>
        <!--      <tr>-->
        <!--	<td><b>Tax Outstanding (If Any)</b></td>-->
        <!--	<td>NGN {{ isset($tcc['taxoutstandingyr1']) ? $data['taxoutstandingyr1'] : '' }}</td>-->
        <!--	<td>NGN {{ isset($tcc['taxoutstandingyr2']) ? $data['taxoutstandingyr2'] : '' }}</td>-->
        <!--	<td>NGN {{ isset($tcc['tccType']) ? $tcc['tccType'] : '' }}</td>-->
        <!--</tr>-->
        <tr>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b>Source of Income</b></td>
          <td colspan="2">
            : {{ isset($tcc['sourcrOfInc']) ? $tcc['sourcrOfInc'] : '' }}
          </td>
        </tr>
        <tr>
          <td><b>Other Comments</b></td>
          <td colspan="2">
            : {{ isset($tcc['othercomment']) ? $tcc['othercomment'] : '' }}
          </td>
        </tr>
        <tr>
          <td><b>This Certificate Expires on</b></td>
          <td colspan="2">:{{ isset($tcc['certificateExpires']) ? $tcc['certificateExpires'] : '' }}</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        	<tr>
          <td></td>
          <td></td>
          <td><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/signature.png'))) }}" alt="" width="70" /></td>
        </tr>
        <tr>
          <!--<td>-------------------------------------</td>-->
          <td></td>
          <td></td>
          <td>-----------------------------------------------</td>
        </tr>
        <tr>
          <!--<td><b>AUTHORIZED SIGNATURE</b></td>-->
          <td></td>
          <td></td>
          <td><b>EXECUTIVE CHAIRMAN</b></td>
        </tr>
        <tr>
          <td>
            <b
              >Please Note: Any Alteration on this document, render it invalid,
              Visit https://gombeirs.com to validate the Certificate</b
            >
          </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
      </table>
      <img
        align="right"
        src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->generate('Name: ' . $tcc->name . ' | GTIN: ' . $tcc->gtin . ' | Tax paid 2024 (NGN): ' . $tcc->taxpaidyr3 . ' | Tax Outstanding 2024 (NGN): ' . $tcc->tccType . ' | Business Status: ' . $tcc->business_status)) }}"
        alt="QR"
        width="100"
        class="logo"
      />
    </div>
    </div>
  </body>
</html>
