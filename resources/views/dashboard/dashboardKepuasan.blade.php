@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

    <div class="flex container mt-3 mx-auto">
        <div class="bg-white border shadow-sm">
            <h5 class="mx-3 my-3 text-center"><strong>Chart Kuesioner Kepuasan TIK</strong></h5>
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
                labels: [
                    'Sangat Tidak Setuju',
                    'Tidak Setuju',
                    'Tidak Tahu',
                    'Setuju',
                    'Sangat Setuju'
                ],
                datasets: [{
                    label: 'Total Responden',
                    data: <?php echo json_encode($TotalRespon); ?>,
                    backgroundColor: [
                        'rgba(0, 0, 61, 0.7)',
                        'rgba(0, 0, 61, 0.7)',
                        'rgba(0, 0, 61, 0.7)',
                        'rgba(0, 0, 61, 0.7)',
                        'rgba(0, 0, 61, 0.7)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 61, 1)',
                        'rgba(0, 0, 61, 1)',
                        'rgba(0, 0, 61, 1)',
                        'rgba(0, 0, 61, 1)',
                        'rgba(0, 0, 61, 1)'
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
