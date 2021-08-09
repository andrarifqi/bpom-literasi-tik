@extends('layout.main')

@section('title', 'Kelola Kuesioner')

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
        <h6 class="my-2">Data Kuesioner Literasi TIK</h6>
        <a href="{{ route('kuisioner_create') }}" class="btn btn-outline-theme btn-sm mb-2"><i
                class="fa fa-plus-circle mr-2" aria-hidden="true"></i><strong>Kuesioner</strong>
        </a>
    </div>
    <div class="table-responsive">
        <table id="table-kuisioner" class="table table-bordered table-hover text-center">
            <thead class="text-theme">
                <tr>
                    <th>Kuesioner</th>
                    <th>Tahun</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($index as $i)
                    <tr>
                        <td>{{ $i->kuisioner }}</td>
                        <td>{{ $i->tahun_kuisioner }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('kuisioner_edit', $i->id_kuisioner) }}"
                                    class="btn btn-outline-theme btn-sm btn-edit mx-2"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></a>
                                <form action="{{ route('kuisioner_delete', $i->id_kuisioner) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-theme btn-delete btn-sm" onclick="hapus()"> <i
                                            class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="text-center">
                <tr class="p-2">
                    <th></th>
                    <th>Tahun Kuesioner</th>
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
    function myFunction() {
        alert("Apakah Data Ini Mau Diubah?");
    }

    function hapus() {
        alert("Apakah Data Ini Mau Dihapus?")
    }

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
