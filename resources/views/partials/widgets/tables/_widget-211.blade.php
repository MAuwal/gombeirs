<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title fw-bold text-gray-800">MDA Statistics</h3>
        </div>
        <div class="card-body">
        <canvas id="pieChart" width="300" height="300"></canvas>
        </div>
    </div>
</div>

    <script>
        // Access the passed data from the PHP code
         var monthlyIRS = {{ str_replace(",", "", $monthlyIRS) }};
        var monthlyTrade = {{ str_replace(",", "", $monthlyTrade) }};
        var monthlyHighCourt = {{ str_replace(",", "", $monthlyHighCourt) }};
        var monthlyGOGIS = {{ str_replace(",", "", $monthlyGRI) }};


        // Create a pie chart using Chart.js
        var ctx = document.getElementById('pieChart');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['IRS', 'Trade', 'High Court', 'GOGIS - Ground Rent'],
                datasets: [{
                    data: [monthlyIRS, monthlyTrade, monthlyHighCourt, monthlyGOGIS],
                    backgroundColor: ['#5b4b6e', '#36A2EB', '#FFCE56', '#4CAF50'],
                }]
            },
        options: {
            scales: {
            y: {
                beginAtZero: true
          }
        }
      }
        });
    </script>

