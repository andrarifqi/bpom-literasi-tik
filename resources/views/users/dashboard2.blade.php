@extends('layout.main')

@section('title', 'Dashboard |')

@section('content')
    Welcome to dashboard
    <div class="container my-4">
        <div id="kuisioner"></div>
    </div>
@endsection

@section('footer')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    @foreach ($result as $key => $d)
        @foreach ($d as $e)
            <div id="chart{{ $key }}"></div>
            <script>
                $('#chart' + parseInt("{{ $key }}")).highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Jumlah Response'
                    },
                    // subtitle: {
                    //     text: 'Source: WorldClimate.com'
                    // },
                    xAxis: {
                        categories: [
                            'Sangat Tidak Setuju',
                            'Tidak Setuju',
                            'Tidak tidak Tahu',
                            'Setuju',
                            'Sangat Setuju',
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: '{{ $d[0] }}'
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
                        name: 'Proyeksi Nilai',
                        data: {{ json_encode($e) }}

                    }]
                });
            </script>
        @endforeach

        {{-- <x-grafik :data="$d" /> --}}
    @endforeach
    {{-- @include('users.grafik') --}}



@endsection
