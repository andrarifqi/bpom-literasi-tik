@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

    <div class="flex container mt-3 mx-auto">
        <h5 class="mb-3"><strong>Chart Kuesioner Kepuasan TIK</strong></h5>

        <div class="bg-white border shadow-sm">
            <canvas id="myChart"></canvas>
        </div>
    </div>

@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($Respon); ?>,
                datasets: [{
                    label: 'Total Responden',
                    data: <?php echo json_encode($TotalRespon); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    pointRadius: 1,
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                layout: {
                    padding: 20
                },
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 10
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>

@endsection
