<x-default-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<style>

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
	margin: 0 auto;
	padding:10px;
	width:100%;
	height:auto;
	overflow:hidden;
	background:white;
	border-radius:10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: #03223e24;
}

form label {
	font-size:14px;
	color:darkgray;
	cursor:pointer;
    text-align: center;
}

form label,
form input {
	float:left;
	clear:both;
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
input[type=date] {
	border-radius: 20px;
	width: 50%;
	height: 30px;
	border: 0;
	padding: 10px;
}
select {
	border-radius: 20px;
	width: 50%;
	height: 35px;
	border: 0;
	padding: 5px;
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

    .label{
        width: 20%;
    }

    .filter{
        position: static;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .body{
         position: relative;
    }
    
     #invoice table {
            display: table;
        }
</style>


<div class="filter">

<!-- Filter Selection Form -->
@if(empty(request()->all()) || (empty(request('start_date')) && empty(request('end_date'))))
<form id="filterForm" method="GET" action="{{ url('/invoices/WHTreport2') }}">
    <div class="label">
        <label for="start_date">Start Date:</label>
    </div>
    <input type="date" name="start_date" value="{{ request('start_date') }}">
    <div class="label">
        <label for="end_date">End Date:</label>
    </div>
    <input type="date" name="end_date" value="{{ request('end_date') }}">
    <button type="submit" id="applyFilter" class="btn btn-sm btn-light-primary" onclick="toggleInvoiceDisplay()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Apply Filter
    </button>
</form>
@endif

<script>
function toggleInvoiceDisplay() {
    document.querySelector(".body").style.display = "block";
}
</script>

<form id="monthlyReportForm" method="GET" action="{{ url('/invoices/WHTreport') }}">
    <div class="label">
        <label for="revenue_item">Select Revenue Item:</label>
    </div>
    <select id="revenue_item" name="revenue_item_name">
        <option value="">--Select Revenue Item--</option>
        @foreach ($revenueItemsList as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
    <div class="label">
        <label for="month">Select Month:</label>
    </div>
    <select id="month" name="month">
        <option value="">--Select Month--</option>
        @for ($m = 1; $m <= 12; $m++)
            <option value="2024-{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $m, 10)) }}</option>
        @endfor
    </select>
    <button type="button" id="generateMonthlyReport" class="btn btn-sm btn-light-primary">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Generate Report
    </button>
</form>





 
</div>

<!-- Section to display the monthly report details -->
<div id="monthly-report-section" style="display: none;">
    
    
</div>


<!-- Your main view -->
<div class="body" style="display: none;">
    <!-- Display Agencies and Total Amounts -->
    <table id="invoice">
        <thead>
            <tr>
                <th>Agency Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agencies as $agencyName => $data)
            @php
                $agencySlug = \Illuminate\Support\Str::slug($agencyName);
            @endphp
            <tr>
                <td><a href="#" class="agency-link" data-agency="{{ $agencySlug }}">{{ $agencyName }}</a></td>
                <td>N{{ number_format($data['total_amount']) }}</td>
            </tr>
            <tr id="details-{{ $agencySlug }}" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div style="margin-top: 20px; display: flex; gap: 20px;">
    <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadAgency()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download Agency Table
    </button>
    <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadSubhead()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download Subhead Table
    </button>
    <!--<button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="download()">-->
    <!--    <i class="ki-duotone ki-cloud-download fs-3">-->
    <!--        <span class="path1"></span>-->
    <!--        <span class="path2"></span>-->
    <!--    </i>Download as PDF-->
    <!--</button>-->
</div>


<script>

  document.getElementById("filterForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        var formData = new FormData(this);
        var queryString = new URLSearchParams(formData).toString(); // Serialize form data

        // Send an AJAX request with the serialized data appended to the URL
        fetch(`${this.getAttribute("action")}?${queryString}`, {
            method: 'GET',
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Handle the response data as needed
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
    
    




document.getElementById('generateMonthlyReport').addEventListener('click', function () {
    const revenueItemName = document.getElementById('revenue_item').value;
    const month = document.getElementById('month').value;

    if (!revenueItemName || !month) {
        alert('Please select both a revenue item and a month.');
        return;
    }

    fetchMonthlyData(revenueItemName, month);
});

function fetchMonthlyData(revenueItemName, month) {
    fetch(`{{ url('/invoices/WHTreport') }}?revenue_item_name=${revenueItemName}&month=${month}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (!data || typeof data !== 'object') {
            console.error('Unexpected data format:', data);
            document.querySelector('#monthly-report-section').innerHTML = '<p>Error: Unexpected data format received.</p>';
            return;
        }

        let overallTotalPaidRate = 0;
        const monthlyDetails = Object.entries(data).map(([revenueItemName, details]) => {
            if (!details || !Array.isArray(details.payments)) {
                console.error('Unexpected data format for', revenueItemName, ':', details);
                return '';
            }

            const totalPaidRate = details.payments
                .filter(invoice => invoice.status === 'paid')
                .reduce((total, invoice) => total + parseFloat(invoice.rate), 0);

            overallTotalPaidRate += totalPaidRate;

            return totalPaidRate > 0 ? `
                <tr>
                    <td>${revenueItemName}</td>
                    <td>N${totalPaidRate.toLocaleString()}</td>
                </tr>
            ` : '';
        }).join('');

        if (!monthlyDetails.trim()) {
            document.querySelector('#monthly-report-section').innerHTML = '<p>No valid data available for the selected month.</p>';
            return;
        }

        const formattedMonthYear = new Date(`${month} 1`).toLocaleString('en-US', { month: 'long', year: 'numeric' });

        const reportTable = `
            <table id="monthlyReportTable">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center;">${revenueItemName.toUpperCase()}:  ${formattedMonthYear} Report</th>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>N${overallTotalPaidRate.toLocaleString()}</th>
                    </tr>
                    <tr>
                        <th>Subhead</th>
                        <th>Total Paid Rate</th>
                    </tr>
                </thead>
                <tbody>${monthlyDetails}</tbody>
            </table>
            
             <div style="padding: 20px">
            <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadMonth()">
                <i class="ki-duotone ki-cloud-download fs-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Download as PDF
            </button>
        </div>
        `;

        const reportSection = document.querySelector('#monthly-report-section');
        reportSection.innerHTML = reportTable;
        reportSection.style.display = 'block';
    })
    .catch(error => console.error('Error fetching monthly data:', error));
}

document.addEventListener('DOMContentLoaded', (event) => {
    let fixed = document.getElementById('applyFilter');
    fixed.addEventListener('click', function () {
        console.log("removed");
        let form = document.getElementById('monthlyReportForm');
        form.remove();
    });
});









document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.agency-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const agencyName = this.dataset.agency;
            const detailsRow = document.querySelector(`#details-${agencyName}`);

            // Hide the outer invoice table
            document.querySelector('#invoice thead').style.display = 'none';
            document.querySelectorAll('#invoice > tbody > tr:not([id^="details-"])').forEach(row => row.style.display = 'none');

            if (detailsRow && detailsRow.style.display === 'none') {
                fetchSubheads(agencyName, detailsRow);
            } else if (detailsRow) {
                detailsRow.style.display = 'none';
            }
        });
    });
});

function fetchSubheads(agencyName, detailsRow) {
    fetch(`{{ url('/invoices/WHTreport2') }}?agency_name=${agencyName}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        const subheadDetails = detailsRow.querySelector('.subhead-details');
        subheadDetails.innerHTML = '';

        // Filter subheads to include only specified revenue items
        const paidSubheads = data.filter(invoice => 
            invoice.status === 'paid' && 
            ['Consumption Tax', 'WHT on Rent', 'HAULAGE', 'Fire Service Directorate'].includes(invoice.revenue_item_name)
        );

        if (paidSubheads.length > 0) {
            paidSubheads.forEach(invoice => {
                const subheadSlug = encodeURIComponent(invoice.revenue_item_name);
                const row = document.createElement('tr');
                row.innerHTML = `<td><a href="#" class="subhead-link" data-subhead="${subheadSlug}">${invoice.revenue_item_name}</a></td><td>N${invoice.rate}</td>`;
                subheadDetails.appendChild(row);
            });
            detailsRow.style.display = 'table-row';

            // Add event listeners to the subhead links
            document.querySelectorAll('.subhead-link').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const subheadName = decodeURIComponent(this.dataset.subhead);
                    const paymentsRowId = `payments-${subheadName}`;
                    let paymentsRow = document.querySelector(`[id="${paymentsRowId}"]`);

                    if (!paymentsRow) {
                        paymentsRow = document.createElement('tr');
                        paymentsRow.id = paymentsRowId;
                        paymentsRow.innerHTML = `
                            <td colspan="2">
                                <table id="payment">
                                    <thead>
                                        <tr>
                                            <th>Taxpayer Name</th>
                                            <th>Agency Name</th>
                                            <th>Subhead</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Phone Number</th>
                                            <th>Details</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="payment-details">
                                        <!-- Payment details will be appended here -->
                                    </tbody>
                                </table>
                                <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="download()">
                                    <i class="ki-duotone ki-cloud-download fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Download as PDF
                                </button>
                            </td>
                        `;
                        this.closest('tr').after(paymentsRow);
                    }

                    if (paymentsRow.style.display === 'none' || !paymentsRow.style.display) {
                        fetchPayments(subheadName, paymentsRow);
                    } else {
                        paymentsRow.style.display = 'none';
                    }
                });
            });
        } else {
            subheadDetails.innerHTML = '<tr><td colspan="2">No data available</td></tr>';
            detailsRow.style.display = 'table-row';
        }
    })
    .catch(error => console.error('Error fetching subheads:', error));
}

function fetchPayments(subheadName, paymentsRow) {
    fetch(`{{ url('/invoices/WHTreport2') }}?subhead_name=${subheadName}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        const paymentDetails = paymentsRow.querySelector('.payment-details');
        paymentDetails.innerHTML = '';
        const paidInvoices = data.filter(invoice => invoice.status === 'paid');
        
        if (paidInvoices.length > 0) {
            paidInvoices.forEach(invoice => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${invoice.taxpayer_name}</td>
                    <td>${invoice.agency_name}</td>
                    <td>${invoice.revenue_item_name}</td>
                    <td>N${invoice.rate}</td>
                    <td>${invoice.status}</td>
                    <td>${invoice.phone_number}</td>
                    <td>${invoice.details}</td>
                    <td>${invoice.created_at}</td>
                `;
                paymentDetails.appendChild(row);
            });
            paymentsRow.style.display = 'table-row';
        } else {
            paymentDetails.innerHTML = '<tr><td colspan="8">No data available</td></tr>';
            paymentsRow.style.display = 'table-row';
        }
    })
    .catch(error => console.error('Error fetching payments:', error));
}




// function getCurrentMonth() {
//     const now = new Date();
//     const options = { month: 'long' };
//     return now.toLocaleDateString('en-US', options);
// }


// const currentMonth = getCurrentMonth();
// console.log(currentMonth);



    
    
function downloadMonth() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('monthlyReportTable');
  let monthName = document.getElementById('month').value;

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
  doc.save(`${monthName}Report.pdf`);
}

function downloadAgency() {

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
  doc.save('AgencyReport.pdf');
}

function downloadSubhead() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('subHeadinvoice');

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
function download() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('payment');

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
  doc.save('SubheadReport2.pdf');
}











//     document.addEventListener('DOMContentLoaded', function () {
//         document.querySelectorAll('.agency-link').forEach(function (link) {
//             link.addEventListener('click', function (e) {
//                 e.preventDefault();
//                 const agencyName = this.dataset.agency;
//                 const detailsRow = document.querySelector(`#details-${agencyName}`);

//                 if (detailsRow && detailsRow.style.display === 'none') {
//                     fetchSubheads(agencyName, detailsRow);
//                 } else if (detailsRow) {
//                     detailsRow.style.display = 'none';
//                 }
//             });
//         });
//     });

//     function fetchSubheads(agencyName, detailsRow) {
//         fetch(`{{ url('/invoices/report') }}?agency_name=${agencyName}`, {
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest'
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             const subheadDetails = detailsRow.querySelector('.subhead-details');
//             subheadDetails.innerHTML = '';
//             if (data.length > 0) {
//                 data.forEach(invoice => {
//                     const subheadSlug = encodeURIComponent(invoice.revenue_item_name);
//                     const row = document.createElement('tr');
//                     row.innerHTML = `<td><a href="#" class="subhead-link" data-subhead="${subheadSlug}">${invoice.revenue_item_name}</a></td><td>N${invoice.rate}</td>`;
//                     subheadDetails.appendChild(row);
//                 });
//                 detailsRow.style.display = 'table-row';

//                 // Add event listeners to the subhead links
//                 document.querySelectorAll('.subhead-link').forEach(function (link) {
//                     link.addEventListener('click', function (e) {
//                         e.preventDefault();
//                         const subheadName = decodeURIComponent(this.dataset.subhead);
//                         const paymentsRowId = `payments-${subheadName}`;
// let paymentsRow = document.querySelector(`[id="${paymentsRowId}"]`);


//                         if (!paymentsRow) {
//                             paymentsRow = document.createElement('tr');
//                             paymentsRow.id = paymentsRowId;
//                             paymentsRow.innerHTML = `
//                                 <td colspan="2">
//                                     <table>
//                                         <thead>
//                                             <tr>
//                                                 <th>Taxpayer Name</th>
//                                                 <th>Agency Name</th>
//                                                 <th>Amount</th>
//                                                 <th>Status</th>
//                                                 <th>Date</th>
//                                             </tr>
//                                         </thead>
//                                         <tbody class="payment-details">
//                                             <!-- Payment details will be appended here -->
//                                         </tbody>
//                                     </table>
//                                 </td>
//                             `;
//                             this.closest('tr').after(paymentsRow);
//                         }

//                         if (paymentsRow.style.display === 'none' || !paymentsRow.style.display) {
//                             fetchPayments(subheadName, paymentsRow);
//                         } else {
//                             paymentsRow.style.display = 'none';
//                         }
//                     });
//                 });
//             } else {
//                 subheadDetails.innerHTML = '<tr><td colspan="2">No data available</td></tr>';
//                 detailsRow.style.display = 'table-row';
//             }
//         })
//         .catch(error => console.error('Error fetching subheads:', error));
//     }

//     function fetchPayments(subheadName, paymentsRow) {
//         fetch(`{{ url('/invoices/report') }}?subhead_name=${subheadName}`, {
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest'
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             const paymentDetails = paymentsRow.querySelector('.payment-details');
//             paymentDetails.innerHTML = '';
//             if (data.length > 0) {
//                 data.forEach(invoice => {
//                     const row = document.createElement('tr');
//                     row.innerHTML = `
//                         <td>${invoice.taxpayer_name}</td>
//                         <td>${invoice.agency_name}</td>
//                         <td>N${invoice.rate}</td>
//                         <td>${invoice.status}</td>
//                         <td>${invoice.created_at}</td>
//                     `;
//                     paymentDetails.appendChild(row);
//                 });
//                 paymentsRow.style.display = 'table-row';
//             } else {
//                 paymentDetails.innerHTML = '<tr><td colspan="5">No data available</td></tr>';
//                 paymentsRow.style.display = 'table-row';
//             }
//         })
//         .catch(error => console.error('Error fetching payments:', error));
//     }





function downloadPDF() {
            window.jsPDF = window.jspdf.jsPDF;
            // Create a new jsPDF object
            var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

            // Get the .body div element
            var bodyDiv = document.querySelector('.body');

            // Get the HTML content of the .body div
            var bodyContent = bodyDiv.innerHTML;

            // Add the content to the PDF document
            doc.html(bodyContent, {
                callback: function (doc) {
                    // Save the PDF document with a given name
                    doc.save('report.pdf');
                },
                margin: 10 // Set a uniform margin of 10 points
            });
        }





//   function downloadPDF() {

//     window.jsPDF = window.jspdf.jsPDF;
//   // Create a new jsPDF object
//   var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

//   // Get the table element by its id
//   var table = document.getElementById('invoice');

//   // Use the autoTable plugin to add the table to the PDF document
//   // Your original CSS styles
// const tableStyles = {
//     width: '100%',
//     borderCollapse: 'collapse',
//     marginTop: 20,
// };

// const cellStyles = {
//     border: '1px solid #dddddd',
//     textAlign: 'left',
//     padding: 8,
// };

// const headerStyles = {
//     backgroundColor: '#f2f2f2',
// };

// const hoverStyles = {
//     backgroundColor: '#f5f5f5',
// };

// // Applying styles to autoTable
// doc.autoTable({
//     html: table, // HTML element
//     margin: { top: 60 }, // Margin from the top
//     styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
//     headStyles: headerStyles, // Background color for the table header
//     bodyStyles: cellStyles, // Styles for table body cells
//     alternateRowStyles: [null, hoverStyles], // Alternate row hover style
// });

//   // Save the PDF document with a given name
//   doc.save('report.pdf');
// }

function downloadSUBHEAD() {

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

