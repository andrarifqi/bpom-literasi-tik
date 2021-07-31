@extends('layout.main')

@section('title', 'Dashboard |')

@section('content')
    Welcome to dashboard

    <div class="container my-3">
        <div id="kuisioner"></div>
    </div>
@endsection
@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        Highcharts.chart('kuisioner', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Aplikasi Kuisioner'
            },
            // subtitle: {
            //     text: 'Source: WorldClimate.com'
            // },
            xAxis: {
                categories: [
                    'Sangat Tidak Setuju',
                    'Tidak Setuju',
                    'Tidak Tahu',
                    'Setuju',
                    'Sangat Setuju'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Kuisioner'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Rekapitlasi Kuisioner',
                data: {!! json_encode($data) !!}
            }]
        });
    </script>
@endsection
