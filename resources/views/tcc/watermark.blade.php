<?php 
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
          CURLOPT_POSTFIELDS =>'{"paymentdate":"2024-06-25","phone":"07066101434","gtin":"6101434333"}',
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
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Base64 CSS Example</title>
        </head>
        <style>
            .watermark {
                width: 500px;
                height: 500px;
                background-image: url('<?php echo $base64ImageString; ?>');
                background-size: cover;
                /* Adjust the background size as needed */
            }

        </style>

        <body>
            <div class="watermark"></div>
        </body>