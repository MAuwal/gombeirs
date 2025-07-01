<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="UTF-8">
    <title>GIRS</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #c7b363;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #c7b363;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>
</head>
<body>
    
<div class="information">
<img src="assets/media/logos/ncoa.png" alt="Logo" width="150" class="logo"/>

<img align="right" src="assets/media/logos/states.png" alt="state logo" width="150" class="logo"/>
             <h3 align="center">GOMBE STATE IGR PLATFORM E-REVENUE RECEIPT</h3>
    <table width="100%">
        <tr>
            
    <td>
                <pre>
Date: {{ date('Y-m-d H:i:s') }}                  
Taxpayer Name: {{ $taxpayer->name }}
Taxpayer's Phone Number:  {{ $taxpayer->phone_number }}
Taxpayer Address:  {{ $taxpayer->address }}
Invoice for:  {{ $invoice->agency_name }}
Printed by: {{auth()->user()->name }}
<p>Transaction Reference: <span id="transactionRef"></span></p>

</pre>

            </td>
          
           
        </tr>

    </table>
         
</div>
<div class="invoice">
    <h3>Receipt No: {{ $taxpayer->id }}</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>SN</th>
            <th>Agency</th>
            <th>Subhead</th>
            <th align="right">Rate (N)</th>
            <br />
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>{{ $invoice->agency_name }}</td>
            <td>{{ $invoice->revenue_item_name}}
                <td>
                <td align="right" class="gray"> ₦ {{ number_format($invoice->rate, 2, '.', ',') }}</td>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <br />
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
           <td align="right" class="gray"> ₦ {{ number_format($invoice->rate, 2, '.', ',') }}</td>
        </tr>
        </tfoot>
    </table>
    <!-- {!! QrCode::generate($taxpayer->name) !!}    -->
</div>

<!-- <div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
             
            </td>
        </tr>

    </table>
</div> -->

  <script>

    function updateTransactionReference(transactionRef) {
        document.getElementById('transactionRef').innerText = transactionRef;
    }

    // Use the passed 'response' data from the Blade view
   
    console.log('actualPaymentResponse:', actualPaymentResponse);
    // Call the function with the actual transaction reference
    updateTransactionReference(actualPaymentResponse.transaction_ref);
   
// function updateTransactionReference(transactionRef) {
//         document.getElementById('transactionRef').innerText = transactionRef;
//     }

//     // Assuming 'response' is available in the global scope or passed to the view
//     var actualPaymentResponse = response;

//     // Call the function with the actual transaction reference
//     updateTransactionReference(actualPaymentResponse.transaction_ref);

        
        // Handle dynamic population of revenue items based on the selected agency
        $('#agency').on('change', function () {
            var agencyId = $(this).val();

            // Make an AJAX request to fetch revenue items based on the selected agency
            $.ajax({
                url: '/get-revenue-items', // Change this URL to your actual route
                method: 'POST',
                data: { agency_id: agencyId, _token: '{{ csrf_token() }}' },
                success: function (data) {
                    // Clear existing options
                    $('#revenue_item').empty();
                    $('#rate').empty();
                    // Populate revenue items
                    data.forEach(function (revenueItem) {
                        $('#revenue_item').append('<option value="' + revenueItem.id + '">' + revenueItem.revenue_item + '</option>');
                    });
                },
            });
        });

        // Handle dynamic population of rates based on the selected revenue item
        $('#revenue_item').on('change', function () {
            var revenueItemId = $(this).val();

            // Make an AJAX request to fetch rates based on the selected revenue item
            $.ajax({
                url: '{{ route("get-rate") }}', // Use the named route
                method: 'POST',
                data: { revenue_item_id: revenueItemId, _token: '{{ csrf_token() }}' },
                success: function (data) {
                    // Clear existing options
                    $('#rate').empty();

                    // Populate rates
                    $.each(data, function (agencyId, rate) {
                        $('#rate').append('<option value="' + rate + '">' + rate + '</option>');
                    });
                },
            });
        });
        $('#generateInvoiceButton').on('click', function () {
    var agencyId = $('#agency').val();
    var revenueItemId = $('#revenue_item').val();
    var rate = $('#rate').val();

    // Make an AJAX request to generate the invoice
    $.ajax({
        url: '{{ route("generate-invoice") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            agency: agencyId,
            revenueItem: revenueItemId,
            rate: rate,
           
        },
        success: function (data) {
            // Handle success, e.g., display a success message or redirect
        },
    });
});
document.getElementById('generateInvoiceButton').addEventListener('click', function () {
        var taxpayerId = "{{ $taxpayer->id }}";
        var agencyId = document.getElementById('agency').value;
        var revenueItemId = document.getElementById('revenue_item').value;
        var rate = document.getElementById('rate').value;

        // Make an AJAX request to generate the invoice
        $.ajax({
            url: '{{ route("generate-invoice") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                taxpayer_id: taxpayerId,
                agency_id: agencyId,
                revenue_item_id: revenueItemId,
                rate: rate,
            },
            success: function () {
                // Handle success, e.g., show a success message
                alert('Invoice generated successfully!');
            },
            error: function (xhr, status, error) {
                // Handle error, e.g., show an error message
                alert('Error generating invoice: ' + error);
            }
        });
    });

    
    
    </script>
</body>
</html>





