@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
<div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
    @if (session('store'))
        <div class="alert alert-success">
            {{ session('store') }}
        </div>
    @elseif(session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @elseif(session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }}
        </div>

    @endif

    <!--Datatable-->
    <div class="">
        <h6 class="my-2">Data Kuesioner Kepuasan TIK</h6>
        <a href="{{ route('export_excel_kepuasan') }}" class="btn btn-outline-theme btn-sm"><i
                class="fa fa-download mr-2" aria-hidden="true"></i><strong>Download</strong></a>
    </div>
    <div class="">
        <table id="table-kuisioner" class="table table-responsive table-bordered table-hover">
            <thead class="text-theme">
                <tr class=" text-center">
                    <th>Kuesioner</th>
                    <th>Tahun</th>
                    <th>Sangat Tidak Setuju</th>
                    <th>Tidak Setuju</th>
                    <th>Tidak Tahu</th>
                    <th>Setuju</th>
                    <th>Sangat Setuju</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($respon_kepuasan as $respon)
                    <tr>
                        <td>{{ $respon->kuisioner_kepuasan }}</td>
                        <td class="text-center">{{ $respon->tahun_kuisioner }}</td>
                        <td class="text-center">{{ $respon->sum_sts }}</td>
                        <td class="text-center">{{ $respon->sum_ts }}</td>
                        <td class="text-center">{{ $respon->sum_th }}</td>
                        <td class="text-center">{{ $respon->sum_s }}</td>
                        <td class="text-center">{{ $respon->sum_ss }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="text-center">
                <tr class="p-2">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!--/Datatable-->
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#table-kuisioner').DataTable({
            initComplete: function() {
                this.api().columns(1).every(function() {
                    var column = this;
                    var select = $(
                            '<select><option value="">Filter Tahun</option></select>'
                        )
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });
    });
</script>
@endsection
