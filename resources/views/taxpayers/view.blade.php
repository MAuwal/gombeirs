<x-default-layout>

    @section('title')
    Taxpayer
    @endsection


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Permissions-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                                href="#kt_user_view_details" role="button" aria-expanded="false"
                                aria-controls="kt_user_view_details">Details
                                <span class="ms-2 rotate-180">
                                    <i class="ki-duotone ki-down fs-3"></i>
                                </span>
                            </div>
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_update_details">Edit</a>
                            </span>
                        </div>
                        <!--end::Details toggle-->
                        <div class="separator"></div>
                        <!--begin::Details content-->
                        <div id="kt_user_view_details" class="collapse show">
                            <div class="pb-5 fs-6">
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Taxpayer ID</div>
                                <div class="text-gray-600">{{ $taxpayer->id }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Email</div>
                                <div class="text-gray-600">
                                    <a href="#" id="email" class="text-gray-600 text-hover-primary">{{ $taxpayer->email
                                        }}</a>
                                </div>
                                <div class="fw-bold mt-5">Phone Number</div>
                                <div class="text-gray-600">
                                    <a href="#" id="ph_no" class="text-gray-600 text-hover-primary">{{
                                        $taxpayer->phone_number }}</a>
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->


                                <div class="fw-bold mt-5">Address</div>

                                <div class="text-gray-600">{{ $taxpayer->address }}

                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->

                                <div class="fw-bold mt-5">Taxpayer Type</div>
                                <div class="text-gray-600">{{ $taxpayer->taxpayer_type }}</div>
                                <!--begin::Details item-->
                            </div>
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->

                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-10">
                <!--begin::Card-->
                <div class="card card-flush mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header pt-5">
                        <!--begin::Card title-->
                        <div class="card-title">

                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                                    href="#kt_user_view_details" role="button" aria-expanded="false"
                                    aria-controls="kt_user_view_details">Select Agency & Revenue Head
                                    <span class="ms-2 rotate-180">
                                        <i class="ki-duotone ki-down fs-3"></i>
                                    </span>
                                </div>

                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>



                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                {!! QrCode::generate("Name: {$taxpayer->name}, Email: {$taxpayer->email}, Address: {$taxpayer->address}") !!}

                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Taxpayer ID</div>
                                    <div class="text-gray-600">{{ $taxpayer->id }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Name</div>
                                    <div class="text-gray-600">
                                        <a href="#" id="name" class="text-gray-600 text-hover-primary">{{
                                            $taxpayer->name }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">{{ $taxpayer->email }}</a>
                                    </div>
                                    <!--begin::Details item-->


                                    <div class="fw-bold mt-5">Address</div>

                                    <div class="text-gray-600">{{ $taxpayer->address }}

                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->

                                    <div class="fw-bold mt-5">Taxpayer Type</div>
                                    <div class="text-gray-600">{{ $taxpayer->taxpayer_type }}</div>
                                    <!--begin::Details item-->
                                </div>
                            </div>

                             <!--begin::Repeater for Agency and Subhead-->
                             <div id="agencySubheadTemplate" style="display: none;">
                                <div data-repeater-item>
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5" >Select Agency</div>
                                    <div class="text-gray-600">
                                        <select name="agency_id" id="agency_id" class="form-select" style="text-transform: uppercase;">
                                            <option> Select </option>
                                            @foreach ($agencies as $agency)
                                                <option value="{{ $agency->id }}">{{ $agency->agency_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Details item-->

                                    <div class="fw-bold mt-5">Select Subhead</div>
                                    <div class="text-gray-600">
                                        <select name="revenue_item_id" id="revenue_item" class="form-select">
                                            <option> Select </option>
                                        </select>
                                    </div>
                                    <!-- You can add more dropdown items as needed -->

                                    <div class="fw-bold mt-5">Amount</div>
                                   <div class="text-gray-600">
    <input type="number" name="rate" id="rate" class="form-control" placeholder="Enter Amount" maxlength="9">
</div>

                                    <a href="javascript:;" data-repeater-delete class="btn btn-flex btn-sm btn-light-danger mt-3">
                                        <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        Delete
                                    </a>
                                </div>
                            </div>
                            <!--end::Repeater for Agency and Subhead-->
                            <!-- Repeater for Agency and Subhead -->
                            <div id="kt_agency_repeater" data-repeater-list="agencies"></div>
                             <!--begin::Form group-->
                                <!-- Add Agency & Subhead button -->
                                <div class="form-group">
                                    <a href="javascript:;" data-repeater-create class="btn btn-flex btn-light-primary" id="addAgencySubheadBtn">
                                        <i class="ki-duotone ki-plus fs-3"></i>
                                        Add Agency & Subhead
                                    </a>
                                </div>
                                <!--end::Form group-->
                                 <div class="form-group">
                                    <div class="fw-bold mt-5">Details</div>
                                    <input type="text" class="form-control" name="details" id="details" placeholder="" maxlength="69">
    
                                    <span id="details" class="text-danger error-messages"></span>
                                </div>

                            <button type="button" data-email="{{ $taxpayer->email }}" class="btn btn-primary"
                                id="generateInvoiceButton">
                                {!! getIcon('plus', 'fs-2', '', 'i') !!}
                                Generate Invoice

                            </button>
                            <!-- <button type="button" class="btn btn-danger" onclick="SquadPay()">
                                {!! getIcon('plus', 'fs-2', '', 'i') !!}
                                Make Payment
                            </button> -->
                            <!--end::Details content-->
                            <!--<a href="{{ route('view-receipts') }}">View Receipts</a>-->



                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Content container-->
    <!--begin::Modal-->
    <livewire:permission.role-modal></livewire:permission.role-modal>
    <!--end::Modal-->

    @push('scripts')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="https://checkout.squadco.com/widget/squad.min.js"></script>
    <script>



        function SquadPay() {
            // Use a fixed email address
            const fixedEmail = 'payments@gombeirs.com';

            const rateSelect = document.getElementById("rate");

            const invoiceNo = document.getElementById("rate");

            const taxpayername = document.getElementById("rate");

            console.log("Fixed Email:", fixedEmail);
            console.log("Rate Select Element:", rateSelect);

            if (fixedEmail && rateSelect) {
                // Use the fixed email address
                const emailValue = fixedEmail;

                const selectedRate = rateSelect.value;

                if (selectedRate) {
                    const squadInstance = new squad({
                        onClose: () => console.log("Widget closed"),
                        onLoad: () => console.log("Widget loaded successfully"),
                        onSuccess: (response) => {
                            console.log("Payment successful");
                            console.log("Payment Reference:", response.transaction_ref);

                            // Open PDF in a new tab
                            window.open('{{ route("open-pdf") }}', '_blank');

                            // Send SMS with payment reference
                            sendSMS(selectedRate, response.transaction_ref);
                        },
                        key: "sandbox_pk_65cef7cc8fe184345a505213e4afd56d374d67e45b98",

                        email: emailValue,
                        amount: selectedRate * 100, // Adjust if necessary based on your use case
                        currency_code: "NGN"
                    });

                    squadInstance.setup();
                    squadInstance.open();
                } else {
                    console.error("Selected rate is undefined or empty.");
                }
            } else {
                console.error("Fixed email or rate element not found.");
            }
        }





        function sendSMS(selectedRate, paymentReference) {
            const apiUrl = "https://my.kudisms.net/api/sms";
            const token = "iC4HrtdX0zlSMRJmIkNu9ZfL61pYVFTvQgs7GhOEjnAWPe3UDbxwycB2q8oaK5";
            const senderID = "GOMBE IRS";
            const recipients = $("#ph_no").text().trim();
            const message = `Payment successful to Gombe State IGR, . Reference: ${paymentReference} Thank you for your patronage.`;

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

       
        $(document).on('change', '[name="agency_id"]', function () {
        var agencyId = $(this).val();
        var $revenueItemDropdown = $(this).closest('[data-repeater-item]').find('[name="revenue_item_id"]');

        // Make an AJAX request to fetch revenue items based on the selected agency
        $.ajax({
            url: '/get-revenue-items', // Change this URL to your actual route
            method: 'POST',
            data: { agency_id: agencyId, _token: '{{ csrf_token() }}' },
            success: function (data) {
                // Clear existing options
                $revenueItemDropdown.empty();

                // Populate revenue items
                data.forEach(function (revenueItem) {
                    $revenueItemDropdown.append('<option value="' + revenueItem.id + '">' + revenueItem.revenue_item + '</option>');
                });
            },
        });
    });

    // $(document).on('change', '[name="revenue_item_id"]', function () {
    //     var revenueItemId = $(this).val();
    //     var $rateDropdown = $(this).closest('[data-repeater-item]').find('[name="rate"]');

    //     // Make an AJAX request to fetch rates based on the selected revenue item
    //     $.ajax({
    //         url: '{{ route("get-rate") }}', // Use the named route
    //         method: 'POST',
    //         data: { revenue_item_id: revenueItemId, _token: '{{ csrf_token() }}' },
    //         success: function (data) {
    //             // Clear existing options
    //             $rateDropdown.empty();

    //             // Populate rates
    //             $.each(data, function (agencyId, rate) {
    //                 $rateDropdown.append('<option value="' + rate + '">' + rate + '</option>');
    //             });

    //             // Check if the rate is 0.00 and prompt the user to input a value
    //             if (data[rate] == 0.00) {
    //                 var customRate = prompt('Enter custom rate:');
    //                 if (customRate !== null) {
    //                     $rateDropdown.append('<option value="' + customRate + '" selected>' + customRate + '</option>');
    //                 }
    //             }
    //         },
    //     });
    // });
    
    $(document).on('change', '[name="revenue_item_id"]', function () {
    var revenueItemId = $(this).val();
    var $rateInput = $(this).closest('[data-repeater-item]').find('[name="rate"]');

    // Make an AJAX request to fetch rates based on the selected revenue item
    $.ajax({
        url: '{{ route("get-rate") }}', // Use the named route
        method: 'POST',
        data: { revenue_item_id: revenueItemId, _token: '{{ csrf_token() }}' },
        success: function (data) {
            // Clear existing value
            $rateInput.val('');

            // Check if the rate is 0.00 and prompt the user to input a value
            if (data[rate] == 0.00) {
                var customRate = prompt('Enter custom rate:');
                if (customRate !== null) {
                    $rateInput.val(customRate);
                }
            }
        },
    });
});


       
        
        document.getElementById('generateInvoiceButton').addEventListener('click', function () {
    var taxpayerId = "{{ $taxpayer->id }}";
    var items = [];
    var details = $('#details').val();

    // Iterate through each repeated Agency and Subhead section
    $('[data-repeater-list="agencies"] [data-repeater-item]').each(function () {
        var agencyId = $(this).find('[name="agency_id"]').val();
        var revenueItemId = $(this).find('[name="revenue_item_id"]').val();
        var rateSelect = $(this).find('[name="rate"]');
        var selectedRate = $(this).find('[name="rate"]').val();

        // If rate is 0.00, prompt for custom rate
        if (selectedRate == 0.00) {
            var customRate = prompt('Enter custom rate:');
            if (customRate !== null) {
                rateSelect.empty().append('<option value="' + customRate + '" selected>' + customRate + '</option>');
                selectedRate = customRate;
            } else {
                // Handle case where user cancels input
                return;
            }
        }

        // Add the item to the items array
        items.push({
            agency_id: agencyId,
            revenue_item_id: revenueItemId,
            rate: selectedRate
        });
    });

    // Log the constructed 'items' array to the console for debugging
    console.log(items);

    // Make an AJAX request to generate the invoice for all items
    $.ajax({
        url: '{{ route("generate-invoice") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            taxpayer_id: taxpayerId,
            items: items,
            agency_id: items.length > 0 ? items[0].agency_id : null, // You can adjust this based on your structure
            revenue_item_id: items.length > 0 ? items[0].revenue_item_id : null, details: details,
            
        },
        success: function (response) {
    // Handle success, e.g., show a success message
    Swal.fire({
        text: "Invoice generated successfully! Redirecting...",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        // Redirect to the intermediate route after the Swal modal is closed
        if (result.isConfirmed || result.isDismissed) {
            window.location.href = '{{ route("invoices2.show.intermediate") }}';
        }
    });
},

        error: function (xhr, status, error) {
            // Handle error, e.g., show an error message
            alert('Remita is unavailable, Try again. ' + error);
        }
    });
});


        function generateAndDownloadPDF() {
            // Make an AJAX request to open the generated PDF
            $.ajax({
                url: '{{ route("open-pdf") }}', // Replace with your server endpoint to open PDF
                method: 'GET',

                success: function () {
                    // Handle success, e.g., show a success message
                    // alert('PDF opened successfully!');
                    window.open('{{ route("open-pdf") }}', '_blank');
                },
                error: function (xhr, status, error) {
                    // Handle error, e.g., show an error message
                    alert('Error opening PDF: ' + error);
                }
            });
        }
   // Add click event to create a new instance of Agency & Subhead
   $('#addAgencySubheadBtn').on('click', function () {
        // Clone the template
        var $newItem = $('#agencySubheadTemplate').children().clone();

        // Clear input values in the new item (optional)
        $newItem.find('input, select').val('');

        // Append the new item to the repeater container
        $('#kt_agency_repeater').append($newItem);

        // Initialize the select2 for the new Agency & Subhead
        $newItem.find('[name="agency_id"]').select2();
        $newItem.find('[name="revenue_item_id"]').select2();
    });


    </script>
    @endpush

</x-default-layout>