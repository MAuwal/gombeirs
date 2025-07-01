@section('table')
<table>
    <thead>
        <tr>
            <th>Taxpayer Name</th>
            <th>Agency Name</th>
            <th>Revenue Item Name</th>
            <th>Rate</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->taxpayer_name }}</td>
                <td>{{ $invoice->agency_name }}</td>
                <td>{{ $invoice->revenue_item_name }}</td>
                <td>₦{{ number_format($invoice->rate) }}</td>
                <td>{{ $invoice->status }}</td>
                <td>{{ $invoice->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection