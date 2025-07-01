<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title fw-bold text-gray-800">Daily Paid Invoice</h3>
        </div>
        <div class="card-body">
            <canvas id="revenueChart" style="height: 350px;"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
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

                var ctx = document.getElementById('revenueChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: dailyInvoiceLabels,
                        datasets: [{
                            label: 'Paid Invoice',
                            data: dailyPaidInvoiceData,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)'
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function (value) {
                                        return 'NGN ' + value.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching data:', errorThrown);
                console.log(jqXHR.responseText);
            }
        });
    });
</script>
