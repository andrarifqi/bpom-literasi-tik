@extends('layout.main')

@section('title', 'Kelola Akun')

@section('content')
    <div class="container mt-3">
        <div class="mt-1 mb-3 px-3 button-container bg-white border shadow-sm">
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

            <a href="{{ route('akun_tambah') }}" class="btn btn-outline-theme btn-sm mx-3 my-3"><i class="fa fa-plus"
                    aria-hidden="true"></i>
                Tambah Akun</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center text-theme">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Hp</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $i)
                            {{-- @dd($i->identitas->alamat) --}}
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $i->nama }}</td>
                                <td>{{ $i->username }}</td>
                                <td>{{ $i->identitas->alamat }}</td>
                                <td>{{ $i->identitas->nomor_hp }}</td>
                                <td>{{ $i->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('akun_edit', $i->id) }}"
                                            class="btn btn-outline-theme btn-sm btn-edit mx-2"><i class="fa fa-pencil"
                                                aria-hidden="true"></i></a>
                                        <form action="{{ route('akun_delete', $i->id) }}" method="post">
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
@endsection
