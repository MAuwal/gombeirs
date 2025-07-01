<!-- filter-component.blade.php -->

<div>
    <form wire:submit.prevent="generateReport">
        <!-- Add your filter inputs here -->
        <input type="date" wire:model="start_date">
        <input type="date" wire:model="end_date">
        <input type="text" wire:model="taxpayer_name">
        <input type="text" wire:model="agency_name">
        <!-- Add other filter inputs similarly -->

        <button type="submit">Apply Filter</button>
    </form>

    <!-- Display filtered results here -->
    @if($invoices)
        <table id="invoices-table" class="table">
            <thead>
                <tr>
                    <th>Revenue Item Name</th>
                    <th>Total Amount</th>
                    <th>Number of Invoices</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalAmountsByItem = [];
                    $invoiceCountsByItem = [];
                @endphp

                @foreach ($invoices as $invoice)
                    @php
                        $itemName = $invoice->revenue_item_name;
                        $totalAmountsByItem[$itemName] = isset($totalAmountsByItem[$itemName]) ? $totalAmountsByItem[$itemName] + $invoice->rate : $invoice->rate;
                        $invoiceCountsByItem[$itemName] = isset($invoiceCountsByItem[$itemName]) ? $invoiceCountsByItem[$itemName] + 1 : 1;
                    @endphp
                @endforeach

                @foreach ($totalAmountsByItem as $itemName => $totalAmount)
                    <tr>
                        <td>{{ $itemName }}</td>
                        <td>N{{ number_format($totalAmount) }}</td>
                        <td>{{ $invoiceCountsByItem[$itemName] }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="6">Subhead Grand Total:  ₦{{ number_format($totalRate) }}</th>
                    <tr/>
            </tbody>
        </table>
        
         <!-- Download PDF Button -->
        <button id="downloadSubhead" class="btn btn-sm btn-light-primary" onclick="downloadSUBHEAD()">
            <i class="ki-duotone ki-cloud-download fs-3">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>Download as PDF
        </button>
    @endif
</div>
