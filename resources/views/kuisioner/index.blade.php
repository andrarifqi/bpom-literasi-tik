@extends('layout.main')

@section('title', 'Kelola Kuesioner')

@section('content')
    <div class="container mt-3">
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

            <a href="{{ route('kuisioner_create') }}" class="btn btn-outline-theme btn-sm mb-3"><i class="fa fa-plus"
                    aria-hidden="true"></i>
                Tambah Data</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center text-theme">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Kuesioner</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $i)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $i->nama }}</td>
                                <td>{{ $i->kuisioner }}</td>
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
                </table>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Apakah Data Ini Mau Diedit");
        }

        function hapus() {
            alert("Apakah Data Ini Mau Dihapus")
        }
    </script>
@endsection
