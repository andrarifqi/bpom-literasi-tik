@extends('layout.main')

@section('title', 'Edit Akun')

@section('content')

    <div class="container mt-2">
        <div class="mt-1 mb-3 px-3 button-container bg-white border shadow-sm">
            <form action="{{ route('akun_edit', $edit->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}"
                        aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="nomor_hp" class="form-control" value="{{ $edit->identitas->nomor_hp }}" id=""
                        required>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" value="{{ $edit->identitas->alamat }}" class="form-control" id=""
                        required>
                </div>

                <div class="form-group text-right">
                    <a href="{{ route('kelola_akun') }}" class="btn btn-outline-theme">Kembali</a>
                    <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()">Ubah</button>
                </div>

            </form>

        </div>
    </div>

@endsection
