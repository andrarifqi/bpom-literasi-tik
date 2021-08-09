@extends('layout.main')

@section('title', 'Kelola Kuesioner')

@section('content')
<div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
    @if (session('store'))
        <div class="alert alert-primary">
            {{ session('store') }}
        </div>

    @elseif(session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @elseif(session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
    @endif

    <div class="input-group-prepend">
        <button class="btn btn-sm btn-outline-theme dropdown-toggle my-3" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fa fa-edit"></i>Isi Kuesioner</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('response') }}">Tahun 2020</a>
            <a class="dropdown-item" href="{{ route('response2021') }}">Tahun 2021</a>
        </div>
    </div>

    <table id="table-kuisioner" class="table table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">Kuesioner</th>
                <th scope="col">Tahun</th>
                <th scope="col">Respon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($index as $i)
                <tr class="justify">
                    <td>{{ $i->kuisioner }}</td>
                    <td>{{ $i->tahun_kuisioner }}</td>
                    <td>{{ $i->response }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot class="text-center">
            <tr class="p-2">
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
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
                            '<select><option value="">Pilih Tahun</option></select>'
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
