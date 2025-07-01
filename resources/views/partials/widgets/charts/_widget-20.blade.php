<!--begin::Chart widget 20-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-5">
        <!--begin::Title-->
        <h3 class="card-title fw-bold text-gray-800">Collections</h3>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
        <!--begin::Chart-->
        <div class="card card-bordered">
            <div class="card-body">
                <div id="kt_apexcharts_1" style="height: 350px;"></div>
            </div>
        </div>
        <!--end::Chart-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Chart widget 20-->

<!-- Script to create ApexCharts -->
<!-- Script to create ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var element = document.getElementById('kt_apexcharts_1');

        if (!element) {
            console.error('Element with ID "kt_apexcharts_1" not found.');
            return;
        }

        // Fetch daily paid and unpaid invoice data from the server
        $.ajax({
            url: '/get-daily-invoices',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                console.log('Response from server:', response);

                var dailyInvoiceLabels = response.labels || [];
                var dailyPaidInvoiceData = response.paidData || [];
                var dailyUnpaidInvoiceData = response.unpaidData || [];

                if (dailyInvoiceLabels.length === 0 || dailyPaidInvoiceData.length === 0 || dailyUnpaidInvoiceData.length === 0) {
                    console.error('Invalid data received:', response);
                    return;
                }

                // Convert string values to numbers
                dailyPaidInvoiceData = dailyPaidInvoiceData.map(Number);
                dailyUnpaidInvoiceData = dailyUnpaidInvoiceData.map(Number);

                var options = {
                    series: [{
                        name: 'Paid Invoice',
                        data: dailyPaidInvoiceData
                    }, {
                        // name: 'Unpaid Invoice',
                        // data: dailyUnpaidInvoiceData
                    }],
                    chart: {
                        fontFamily: 'inherit',
                        type: 'bar',
                        height: 350, // Set a fixed height
                        toolbar: {
                            show: false
                        }
                    },
                    xaxis: {
                        categories: dailyInvoiceLabels
                    },
                    // ... (rest of the options remain the same)
                };

                var chart = new ApexCharts(element, options);
                chart.render();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching data:', errorThrown);
                console.log(jqXHR.responseText);
            }
        });
    });
</script>


</script>

