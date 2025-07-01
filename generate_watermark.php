<?php
// Fetch the watermark from the API
function getWatermark() {
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
    curl_close($curl);

    if ($response) {
        $data = json_decode($response, true);
        return $data['watermark'] ?? null;
    }

    return null;
}

$watermark = getWatermark();

if ($watermark) {
    $mimeType = 'image/jpeg';
    $base64ImageString = 'data:' . $mimeType . ';base64,' . $watermark;

    $htmlContent = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Watermark HTML Test</title>
        <style>
            .watermark {
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 0.1; /* Adjust opacity as needed */
                background-image: url(' . $base64ImageString . ');
                background-size: cover;
                z-index: -1; /* Ensure it is behind the text */
            }
            .content {
                position: relative;
                z-index: 1;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="watermark"></div>
        <div class="content">
            <h1>Test Watermark HTML</h1>
            <p>This HTML includes a watermark image fetched from an API.</p>
        </div>
    </body>
    </html>';

    // Save the HTML content to a file
    file_put_contents('watermark_test.html', $htmlContent);
    echo 'HTML file with watermark generated: <a href="watermark_test.html">watermark_test.html</a>';
} else {
    echo 'Failed to retrieve watermark.';
}
?>
