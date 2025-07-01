<x-default-layout>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>







<style>




.select2.select2-container {
  width: 100% !important;
}

.select2.select2-container .select2-selection {
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 20px;
  height: 34px;
  margin-bottom: 15px;
  outline: none !important;
  transition: all .15s ease-in-out;
}

.select2.select2-container .select2-selection .select2-selection__rendered {
  color: #333;
  line-height: 32px;
  padding-right: 33px;
}

.select2.select2-container .select2-selection .select2-selection__arrow {
  background: #f8f8f8;
  border-left: 1px solid #ccc;
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
  height: 32px;
  width: 33px;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
  background: #f8f8f8;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
  -webkit-border-radius: 0 3px 0 0;
  -moz-border-radius: 0 3px 0 0;
  border-radius: 0 3px 0 0;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
  border: 1px solid #34495e;
}

.select2.select2-container .select2-selection--multiple {
  height: auto;
  min-height: 34px;
}

.select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
  margin-top: 0;
  height: 32px;
}

.select2.select2-container .select2-selection--multiple .select2-selection__rendered {
  display: block;
  padding: 0 4px;
  line-height: 29px;
}

.select2.select2-container .select2-selection--multiple .select2-selection__choice {
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  margin: 4px 4px 0 0;
  padding: 0 6px 0 22px;
  height: 24px;
  line-height: 24px;
  font-size: 12px;
  position: relative;
}


.select2-container .select2-dropdown {
  background: transparent;
  border: none;
  margin-top: -5px;
}

.select2-container .select2-dropdown .select2-search {
  padding: 0;
}

.select2-container .select2-dropdown .select2-search input {
  outline: none !important;
  border: 1px solid #34495e !important;
  border-bottom: none !important;
  padding: 4px 6px !important;
}

.select2-container .select2-dropdown .select2-results {
  padding: 0;
}

.select2-container .select2-dropdown .select2-results ul {
  background: #fff;
  border: 1px solid #34495e;
}

.select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
  background-color: #3498db;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

form {
	margin:auto;
	padding:30px;
	width:400px;
	height:auto;
	overflow:hidden;
	background:white;
	box-shadow: 0 0 10px 0;
	border-radius:10px;
}

form label {
	font-size:14px;
	color:darkgray;
	cursor:pointer;
}

form label,
form input {
	float:left;
	clear:both;
}

form input {
	margin:15px 0;
	padding:15px 10px;
	width:100%;
	outline:none;
	border:1px solid #bbb;
	border-radius:20px;
	display:inline-block;
	-webkit-box-sizing:border-box;
	   -moz-box-sizing:border-box;
	        box-sizing:border-box;
    -webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

form input[type=date]:focus,
form input[type="date"]:focus {
	border-color:cornflowerblue;
}

button[type=submit] {
	padding:15px 50px;
	width:auto;
	background:#1abc9c;
	border:none;
	color:white;
	cursor:pointer;
	display:inline-block;
	float:right;
	clear:right;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

input[type=submit]:hover {
	opacity:0.8;
}

input[type="submit"]:active {
	opacity:0.4;
}
 table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Adjust margin as needed */
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>


<!-- Filter Selection Form -->
@if(empty(request()->all()) || (empty(request('start_date')) && empty(request('end_date'))))

<form id="filterForm" method="GET" action="{{ url('/invoices/monthReport') }}">
@foreach($filterOptions as $option)
        <label for="{{ $option }}">{{ ucfirst($option) }}:</label>
        @if($option === 'created_at')
            <!-- Start Date -->
            <input type="date" name="start_date" value="{{ request('start_date') }}">
            <!-- End Date -->
            <input type="date" name="end_date" value="{{ request('end_date') }}">
        @else
            <select name="{{ $option }}[]" multiple="multiple" class="js-select2-multi">
                <option value="">Select {{ ucfirst($option) }}</option>
                @foreach($invoices->pluck($option)->unique() as $value)
                    <option value="{{ $value }}" @if(in_array($value, (array)request($option))) selected @endif>{{ $value }}</option>
                @endforeach
            </select>
        @endif
    @endforeach
    <button type="submit"  id="applyFilter" class="btn btn-sm btn-light-primary">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Apply Filter</button>

        <script>
        // Add jQuery code to enable multi-select behavior
        $(document).ready(function() {
  $(".js-select2").select2({
    closeOnSelect: false
  });
  $(".js-select2-multi").select2({
    closeOnSelect: false
  });
  
});




    </script>
</form>

<!-- Your main view -->



@endif

<!-- Display Report Table after filters are applied -->
@if(request()->filled('taxpayer_name') || request()->filled('agency_name') || request()->filled('revenue_item_name') || request()->filled('status') || (request()->filled('start_date') && request()->filled('end_date')))
    @if(count($invoices) > 0)

     @php
       $totalRate = 0;
    @endphp
    @foreach($invoices as $invoice)

    @php
        $totalRate += $invoice->rate; // Add the rate to the sum
    @endphp
    @endforeach

        
       

        <table id="invoice">
            <thead>
                <tr>
            <th colspan="6">
                @if(request()->filled('start_date') && request()->filled('end_date'))
                    Date Range: {{ request('start_date') }} to {{ request('end_date') }}
                @endif
            </th>
        </tr>
                <tr>
                    <th colspan="6">Total Amount:  ₦{{ number_format($totalRate) }}</th>
                </tr>
                <tr>
                    <th>Taxpayer Name</th>
                    <th>Agency Name</th>
                    <th>Subhead</th>
                    <th>Amount (₦)</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->taxpayer_name }}</td>
                <td>{{ $invoice->agency_name }}</td>
                <td>{{ $invoice->revenue_item_name }}</td>
                <td>{{ number_format($invoice->rate, 2) }}</td>
                <td>{{ $invoice->status }}</td>
                <td>{{ $invoice->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
        </table>
<br/>
       <button onclick="downloadTableAsExcel('invoice', 'InvoiceReport')" class="btn btn-success">Download as Excel</button>
                <button onclick="downloadTableAsPDF('invoice', 'InvoiceReport')" class="btn btn-danger">Download as PDF</button>

    @else
        <p>No records found.</p>
    @endif
@endif




        <!-- Display Agency Names with Total Amount -->
        @if(isset($agencies))
            <div class="mt-4" id="agencies-section">
                <h3>Agencies</h3>
                <table class="table table-bordered" id="agencies-table">
                    <thead>
                        <tr>
                            <th>Agency Name</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agencies as $agency)
                            <tr>
                                <td><a href="#" class="agency-name" data-agency="{{ $agency->agency_name }}">{{ $agency->agency_name }}</a></td>
                                <td>₦{{ number_format($agency->total_amount, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="downloadTableAsExcel('agencies-table', 'AgenciesReport')" class="btn btn-success">Download as Excel</button>
                <button onclick="downloadTableAsPDF('agencies-table', 'AgenciesReport')" class="btn btn-danger">Download as PDF</button>
            </div>
        @endif

        <!-- Section for Revenue Items -->
        <div class="mt-4" id="revenue-items-section" style="display: none;">
            <h3>Revenue Items</h3>
            <button class="btn btn-secondary mb-3" id="back-to-agencies">Back to Agencies</button>
            <table class="table table-bordered" id="revenue-items-table">
                <thead>
                    <tr>
                        <th>Revenue Item Name</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Revenue items will be populated here by AJAX -->
                </tbody>
            </table>
            <button onclick="downloadTableAsExcel('revenue-items-table', 'RevenueItemsReport')" class="btn btn-success">Download as Excel</button>
            <button onclick="downloadTableAsPDF('revenue-items-table', 'RevenueItemsReport')" class="btn btn-danger">Download as PDF</button>
        </div>

        <!-- Section for Details -->
        <div class="mt-4" id="details-section" style="display: none;">
            <h3>Details</h3>
            <button class="btn btn-secondary mb-3" id="back-to-revenue-items">Back to Revenue Items</button>
            <table class="table table-bordered" id="details-table">
                <thead>
                    <tr>
                        <th>Taxpayer Name</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Details will be populated here by AJAX -->
                </tbody>
            </table>
            <button onclick="downloadTableAsExcel('details-table', 'DetailsReport')" class="btn btn-success">Download as Excel</button>
            <button onclick="downloadTableAsPDF('details-table', 'DetailsReport')" class="btn btn-danger">Download as PDF</button>
        </div>
    </div>





 <script>

         $(document).ready(function() {

                // Handle agency name click
                $(document).on('click', '.agency-name', function() {
                    var agencyName = $(this).data('agency');
                    fetchRevenueItems(agencyName);
                    $('#agencies-section').hide();
                    $('#revenue-items-section').show();
                });

                // Handle revenue item name click
                $(document).on('click', '.revenue-item-name', function() {
                    var revenueItemName = $(this).data('revenue-item');
                    fetchRevenueItemDetails(revenueItemName);
                    $('#revenue-items-section').hide();
                    $('#details-section').show();
                });

                // Handle back button click
                $('#back-to-agencies').click(function() {
                    $('#revenue-items-section').hide();
                    $('#agencies-section').show();
                });

                $('#back-to-revenue-items').click(function() {
                    $('#details-section').hide();
                    $('#revenue-items-section').show();
                });
            });

            function fetchRevenueItems(agencyName) {
                $.ajax({
                    url: "{{ url('/invoices/getRevenueItems') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        agency_name: agencyName
                    },
                    success: function(response) {
                        var revenueItemsTable = $('#revenue-items-table tbody');
                        revenueItemsTable.empty();
                        response.forEach(function(item) {
                            revenueItemsTable.append('<tr><td><a href="#" class="revenue-item-name" data-revenue-item="' + item.revenue_item_name + '">' + item.revenue_item_name + '</a></td><td>₦' + number_format(item.total_amount) + '</td></tr>');
                        });
                    }
                });
            }

            function fetchRevenueItemDetails(revenueItemName) {
                $.ajax({
                    url: "{{ url('/invoices/getRevenueItemDetails') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        revenue_item_name: revenueItemName
                    },
                    success: function(response) {
                        var detailsTable = $('#details-table tbody');
                        detailsTable.empty();
                        response.forEach(function(item) {
                            detailsTable.append('<tr><td>' + item.taxpayer_name + '</td><td>₦' + number_format(item.rate) + '</td></tr>');
                        });
                    }
                });
            }

            function number_format(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            function downloadTableAsExcel(tableId, filename) {
                var table = document.getElementById(tableId);
                var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });
                XLSX.writeFile(wb, filename + '.xlsx');
            }

            function downloadTableAsPDF(tableId, filename) {
                var table = document.getElementById(tableId);
                window.jsPDF = window.jspdf.jsPDF;
                var doc = new jsPDF('p', 'pt', 'a4');
                doc.autoTable({
                    html: table,
                    margin: { top: 60 },
                    styles: { fontSize: 10, cellPadding: 5, overflow: 'linebreak' },
                    headStyles: { fillColor: [22, 160, 133], textColor: [255, 255, 255], fontStyle: 'bold' },
                    bodyStyles: { fillColor: [245, 245, 245], textColor: [0, 0, 0] },
                    alternateRowStyles: { fillColor: [255, 255, 255] },
                    tableLineColor: [189, 195, 199],
                    tableLineWidth: 0.1
                });
                doc.save(filename + '.pdf');
            }
        </script>





<!-- Add this script after including html2pdf -->
<script>
   function downloadPDF() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('invoice');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('report.pdf');
}

function downloadSUBHEAD() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('subhead');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('SubheadReport.pdf');
}

function downloadAGENCY() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('agency');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('Agencyreport.pdf');
}


</script>



</x-default-layout>

