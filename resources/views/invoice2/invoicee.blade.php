<!-- CSS only -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<!-- JavaScript Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-3ziFidFTgxJzQvKGAMJS6G6eWs8vWE8eYS4r6R1pDw4jOq4s/p+ZtmG2EuPjve5H" crossorigin="anonymous"></script>


 <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Invoice 2 main-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <div class="d-flex flex-stack pb-10" style="display: flex; gap: 20px">
                                <!--begin::Logo-->
                                <!-- <a href="#"> -->
                                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/Gombe-state.jpg'))) }}"  alt="girs Logo">
                                {!! QrCode::generate($invoice->taxpayer_name) !!}
                                 <!--<a> <span class="badge badge-light-warning" onclick="updatePaymentStatus({{ $invoice->id }})"> vi</span></a>-->
                                 <!--</a> -->
                                <!--end::Logo-->
                                <!--begin::Action-->
                                
                                <a href="https://www.quickteller.com/gombestatecollections" style="height: 40px;" class="btn btn-success" onclick="initiatePayment()">QUICKTELLER</a>
                                <a href="#" style="height: 40px;" class="btn btn-success" onclick="initiatePayment()">Pay Now</a>
                                
                                <a href="#" style="height: 40px;" class="btn btn-success" onclick="rrrPay()">Pay With Remita</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0" id="viewInvoice">
                                <!-- Your existing content goes here -->
                                <!-- Replace the following comments with your actual content -->
                                <!--begin::Label-->
                                <!--<div class="fw-bold fs-3 text-gray-800 mb-8" id="viewInvoiceId">{{ $invoice->id }}</div>-->
                                <div class="fw-bold fs-3 text-gray-800 mb-8" id="viewrefId">{{ $invoice->id }}</div>
                               
                                
                                <div style="display: flex; flex-direction: row; gap: 10px"> <div><b>RRR NO: </b></div><div class="fw-bold fs-3 text-gray-800 mb-8"   id="viewInvoiceId">{{ $invoice->transaction_ref }}</div> <br>
                                 </div>
                                 <div style="display: flex; flex-direction: row; gap: 10px"><div><b>Invoice ID: </b></div>
                                 <div class="fw-bold fs-3 text-gray-800 mb-8"   id="invoice_id">{{ $invoice->invoice_id }}</div>
                                 </div>
                                
                                <!--end::Label-->
                               
                                <!-- Your existing content goes here -->

                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-9">
                                <table class="table mb-3">
                                    <thead>
                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                            <th class="min-w-175px pb-2">Payer Name</th>
                                            <th class="min-w-70px text-end pb-2">Agency Name</th>
                                            <th class="min-w-80px text-end pb-2">Subhead</th>
                                            <th class="min-w-100px text-end pb-2">Amount</th>
                                            <th class="min-w-100px text-end pb-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fw-bold text-gray-700 fs-5 text-end">
                                            <td class="d-flex align-items-center pt-6">
                                                <!-- <i class="fa fa-genderless text-danger fs-2 me-2"></i> -->
                                                <span id="modalTaxpayerName">{{ $invoice->taxpayer_name }}</span>
                                            </td>
                                            <td class="pt-6" id="modalAgencyName">{{ $invoice->agency_name }}
        </td>
                                            <td class="pt-6" id="modalSubhead"> {{ $invoice->revenue_item_name }}</td>
                                            <td class="pt-6 text-dark fw-bolder" id="modalRate">{{ $invoice->rate }}</td>
                                            <td hidden class="pt-6 text-dark fw-bolder" id="ph_No">{{ $invoice->phone_number }}</td>
                                           
                                            <td class="pt-6 text-dark fw-bolder" id="status"><span class="badge badge-light-success me-2">{{ $invoice->status }}</span></td>
                                        </tr>
                                         <tr>
                                            <td colspan="5">
                                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/media/logos/PAY_WITH.png'))) }}"  alt="girs Logo">
                                            </td>
                                        </tr>
                                        <!-- More rows go here -->
                                    </tbody>
                                </table>
                                <!--begin::Action-->
<button class="btn btn-sm btn-primary" onclick="printInvoice()">Print</button>
<!--end::Action-->
                            </div>
                                <!--end::Table-->

                                <!-- Your other content goes here -->

                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="m-0">
                        <!--begin::Invoice 2 sidebar-->
                        <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                            <!-- Your existing sidebar content goes here -->
                            <!-- Replace the following comments with your actual sidebar content -->
                            <!--begin::Labels-->
                           <div class="mb-8">
                                <!-- <span class="badge badge-light-success me-2">Approved</span> -->
                              <a id="downloadReceiptLink" href="#">
    <span class="badge badge-light-warning">Verify Card Payment</span>
    
</a>


<a id="verifyPaymentAndUpdateStatus" href="#" data-rrr="{{ $invoice->rate }}" data-invoice-id="{{ $invoice->invoice_id }}">
     
    <span class="badge badge-light-warning">Verify RRR Payment</span>
</a>

          
                            </div>
                            <!--end::Labels-->

                            <!--<a> <span class="badge badge-light-warning" onclick="updatePaymentStatus({{ $invoice->id }})">Paid via RRR</span></a>-->
                            <!--end::Invoice 2 sidebar-->
                        </div>
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
    <!--end::Content container-->

    <!-- Your existing modals and other components go here -->
    <!-- Replace the following comment with your actual modals and other components -->
    <script src="https://checkout.squadco.com/widget/squad.min.js"></script>
    <script type="text/javascript" src="https://login.remita.net/payment/v1/remita-pay-inline.bundle.js"></script>
<script>


document.addEventListener("DOMContentLoaded", function() {
    console.log("Document loaded");

    document.getElementById("verifyPaymentAndUpdateStatus").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default behavior of the anchor tag
        console.log("Button clicked");

        const transactionRef = this.getAttribute("data-rrr");
        const invoice_id = this.getAttribute("invoice_id");
        const invoiceIdElement = document.getElementById("viewInvoiceId");
        if (invoiceIdElement) {
            const invoiceId = invoiceIdElement.textContent.trim(); // Retrieve invoice ID from the span element
            console.log("Invoice ID:", invoiceId);
            // Call the verifyPaymentAndUpdateStatus function
            verifyPaymentAndUpdateStatus(transactionRef, invoiceId);
        } else {
            console.error("Invoice ID element not found");
        }
    });
});


function initiatePayment() {
    const transactionRefElement = document.getElementById("viewrefId");
    const sanitizedTransactionRef = transactionRefElement.innerText.replace(/[^a-zA-Z0-9]/g, '');
    console.log("modalRate value:", document.getElementById("modalRate").innerText);
    
    console.log(sanitizedTransactionRef);


    const squadInstance = new squad({
        onClose: () => console.log("Widget closed"),
        onLoad: () => console.log("Widget Sq loaded successfully"),
        
        onSuccess: (response) => {
            // console.log("Payment successful:", response);
            // console.log("Payment Reference:", response.transaction_ref);

           

            // Update payment status using AJAX or other method
            // updatePaymentStatus(response.transaction_ref);
            updatePaymentStatus(sanitizedTransactionRef);
            
            sendSMS(response.amount, response.transaction_ref);
            
        },
        // key: "sandbox_pk_65cef7cc8fe184345a505213e4afd56d374d67e45b98",
        
          key: "pk_1b4d7652d5d7f4f2db2c2920093b42a78dd79e4d",
        email: "info@gombeirs.com",
        amount: document.getElementById("modalRate").innerText * 100,
        transaction_ref: sanitizedTransactionRef,
        customer_name: document.getElementById("modalTaxpayerName").innerText,
        currency_code: "NGN",
    });
    squadInstance.setup();
    squadInstance.open();
}

    function sendSMS(amount, paymentReference) {
        const apiUrl = "https://my.kudisms.net/api/sms";
        const token = "iC4HrtdX0zlSMRJmIkNu9ZfL61pYVFTvQgs7GhOEjnAWPe3UDbxwycB2q8oaK5";
        const senderID = "GOMBE IRS";
        const recipients = $("#ph_No").text().trim();
        const invoice_id = $("invoice_id");
        
        const message = `Payment of ${amount} was successful, ID ${paymentReference} to GIRS. Thank you for your patronage. https://gombeirs.com/verify`;
    
        axios.post(apiUrl, {
            token,
            senderID,
            recipients,
            message
        })
        .then(response => {
            console.log("SMS sent successfully:", response.data);
        })
        .catch(error => {
            console.error("Error sending SMS:", error);
        });
    }
    
      function updatePaymentStatus(invoiceId) {
    fetch(`/update-payment-status/${invoiceId}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Add CSRF token
        },
        body: JSON.stringify({
            status: "paid",
        }),
    })
    .then((response) => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then((data) => {
        console.log("Payment status updated:", data);
        // Handle success or error accordingly
        const statusElement = document.getElementById("status");
        if (statusElement) {
            statusElement.innerText = data.status;

            // Always create a button for downloading the PDF
            const downloadButton = document.createElement('button');
            downloadButton.innerText = 'Download Receipt';
            
            if (data.pdf_path) {
                // If a PDF was generated, add click event to open the download link
                downloadButton.addEventListener('click', function () {
                    window.open(`/storage/${data.pdf_path}`, '_blank');
                });
                console.log('PDF Path:', `/storage/${data.pdf_path}`);
            } else {
                // If no PDF was generated, disable the button or handle accordingly
                downloadButton.disabled = true;
                console.log('No PDF Path available');
            }

            // Append the download button to the status element
            statusElement.appendChild(downloadButton);
        } else {
            console.error("Status element not found");
        }
    })
    .catch((error) => {
        console.error("Error updating payment status:", error);
        // Handle error
    });
}



function rrrPay() {
    const transactionRefElement = document.getElementById("viewInvoiceId");

    const transactionRefId = document.getElementById("viewrefId");
     console.log("RRR:", transactionRefElement);
    const sanitizedTransactionRef = transactionRefElement.innerText.replace(/[^a-zA-Z0-9]/g, '');

    const sanitizedID = transactionRefId.innerText.replace(/[^a-zA-Z0-9]/g, '');

    const paymentEngine = RmPaymentEngine.init({
        key: "R01CT0lSfDUxNTM1ODExOTZ8Mzg3OGYwZTViOWM2NDk2ZWFkMjU1MDNmYmU0YTExYzUwZDJjMWEzYjk2YTA5YmM1NzA1ZjZiMjI4YzZiZDBlZmE5ZjBkNzYzZmE5YzEwNDUwYzlmNWM1ZDdjYTM4ZWY4NWJkMTQxNDdiMDczZWM0NzA4NjY0NzgzMGU0ZWNjZmE=", 
        processRrr: true,
        transactionId: sanitizedTransactionRef,
        channel: "CARD,USSD,QR,IBANK,PHONENUMBER,WALLET,ENAIRA,BRANCH",
        extendedData: {
            customFields: [{
                name: "rrr",
                value: sanitizedTransactionRef
            }]
        },
        onSuccess: function (response) {
            console.log('Remita callback Successful Response', response);
            updateRRRPaymentStatus(sanitizedID);

            sendSMS(response.amount, response.RRR);
        },
        onError: function (response) {
            console.log('Remita callback Error Response', response);

            // Add additional error handling if needed
        },
        onClose: function () {
            console.log("Remita payment closed");
        }
    });

    paymentEngine.showPaymentWidget();
}

function getSqInvoiceId() {
    // Retrieve the invoiceId from the HTML content
    const viewInvoiceIdElement = document.getElementById('viewrefId');
    return viewInvoiceIdElement ? viewInvoiceIdElement.innerText : null;
}



document.getElementById('downloadReceiptLink').addEventListener('click', async function (event) {
    event.preventDefault(); // Prevent the default link behavior
    
    // Make an asynchronous request to the API
    //   const invoiceId = getInvoiceId();
    const invoiceId = getSqInvoiceId();
      console.log(invoiceId);
    const apiUrl = `https://api-d.squadco.com/transaction/verify/${invoiceId}`;

    try {
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer sk_1b4d7652d5d7f4f2cc38583a6b2f34b08dc6f14a',
                    
            },
        });
        const responseData = await response.json();

        // Check for a successful response
        if (response.ok && responseData.success && responseData.data && responseData.data.transaction_status === 'success') {
            // Status is 200 and transaction status is Success, execute the updatePaymentStatus function
            updatePaymentStatus(invoiceId);
            // sendSMS(response.amount, response.transaction_ref);
        } else {
            // Handle other conditions if needed
            console.error(`API request failed with status: ${response.status}`);
        }
    } catch (error) {
        console.error('Error making API request:', error);
    }
});



function getInvoiceId() {
    // Retrieve the invoiceId from the HTML content
    const viewInvoiceIdElement = document.getElementById('viewInvoiceId');
    return viewInvoiceIdElement ? viewInvoiceIdElement.innerText : null;
}

function updatePaymentStatus(invoiceId) {
    fetch(`/update-payment-status/${invoiceId}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Add CSRF token
        },
        body: JSON.stringify({
            status: "paid",
        }),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            console.log("Payment status updated:", data);
            // Handle success or error accordingly
            const statusElement = document.getElementById("status");
            if (statusElement) {
                statusElement.innerText = data.status;

                
                // Check if a PDF was generated
                if (data.pdf_path) {
                    // Provide a link to the PDF
                    const pdfLink = document.createElement('a');
                    pdfLink.href = `/storage/${data.pdf_path}`;
                    pdfLink.target = '_blank';
                    pdfLink.innerText = 'Download Receipt';
                    statusElement.appendChild(pdfLink);
                    sendSMS(response.amount, response.transaction_ref);
                    console.log('PDF Path:', `/storage/${data.pdf_path}`);
                    
                }
            } else {
                console.error("Status element not found");
            }
        })
        .catch((error) => {
            console.error("Error updating payment status:", error);
            // Handle error
        });
}
    
    function printInvoice() {
            // Hide the "Pay Now" button
            var payNowButton = document.querySelector('.btn-success');
            if (payNowButton) {
                payNowButton.style.display = 'none';
            }
    
            // Trigger the print action
            window.print();
    
            // Show the "Pay Now" button after printing
            if (payNowButton) {
                payNowButton.style.display = 'inline-block';
            }
        }
        
        
        
    // rrr verify 
    function verifyPaymentAndUpdateStatus(transactionRef, invoiceId) {
        console.log("verifyPaymentAndUpdateStatus called with:", invoiceId);
    
        // Call the verifyWithRRR function
        fetch(`/verify-payment/${invoiceId}`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Add CSRF token
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then((data) => {
                console.log("Payment verification result:", data);
                // Check if the message is "Successful"
                if (data.message === "Successful" || data.message === "Approved") {
                    // Call updatePaymentStatus function
                    updateRRRPaymentStatus(invoiceId);
                    sendSMS( transactionRef, invoiceId);
                }
            })
            .catch((error) => {
                console.error("Error verifying payment:", error);
                // Handle error
            });
    }
    
    
    function updateRRRPaymentStatus(transactionRef) {
        console.log("updateRRRPaymentStatus called with:", transactionRef);
        
        fetch(`/update-rrr-payment-status/${transactionRef}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Add CSRF token
            },
            body: JSON.stringify({
                status: "paid",
            }),
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then((data) => {
                console.log("Payment status updated:", data);
                // Handle success or error accordingly
                const statusElement = document.getElementById("status");
                if (statusElement) {
                    statusElement.innerText = data.status;
    
                    // Check if a PDF was generated
                    if (data.pdf_path) {
                        // Provide a link to the PDF
                        const pdfLink = document.createElement('a');
                        pdfLink.href = `/storage/${data.pdf_path}`;
                        pdfLink.target = '_blank';
                        pdfLink.innerText = 'Download Receipt';
                        statusElement.appendChild(pdfLink);
                        sendSMS(response.amount, response.transaction_ref);
                        console.log('PDF Path:', `/storage/${data.pdf_path}`);
                        
                    }
                } else {
                    console.error("Status element not found");
                }
            })
            .catch((error) => {
                console.error("Error updating payment status:", error);
                // Handle error
            });
    }
    
    
</script>
