<!-- resources/views/invoices/pdf_report.blade.php -->

<h1>Payment Report</h1>

<table>
    <thead>
        <tr>
            <th>Taxpayer Name</th>
            <th>Agency Name</th>
            <th>Subhead</th>
            <th>Rate</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
         @php
                    $totalRate = 0; // Initialize the sum variable
                @endphp
        @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->taxpayer_name }}</td>
                <td>{{ $invoice->agency_name }}</td>
                <td>{{ $invoice->revenue_item_name }}</td>
                <td>{{ $invoice->rate }}</td>
                <td>{{ $invoice->status }}</td>
                <td>{{ $invoice->created_at }}</td>
            </tr>
              @php
                        $totalRate += $invoice->rate; // Add the rate to the sum
                    @endphp
        @endforeach
    </tbody>
</table>

<p>Total AMOUNT: {{ $totalRate }}</p>
