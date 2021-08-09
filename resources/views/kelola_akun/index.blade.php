@extends('layout.main')

@section('title', 'Kelola Akun')

@section('content')
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

        <div>
            <a href="{{ route('akun_tambah') }}" class="btn btn-outline-theme mx-3 my-3"><i class="fa fa-plus-circle mr-1"
                    aria-hidden="true"></i>
                <strong>Akun</strong></a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="text-center text-theme">
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jabatan Pegawai</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Unit Kerja</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($index as $i)
                        {{-- @dd($i->identitas->alamat) --}}
                        <tr class="text-center">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $i->username }}</td>
                            <td>{{ $i->nama }}</td>
                            <td>{{ $i->identitas->jenis_kelamin }}</td>
                            <td>{{ $i->identitas->jabatan_pegawai }}</td>
                            <td>{{ $i->email }}</td>
                            <td>{{ $i->identitas->unit_kerja }}</td>
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
@endsection
