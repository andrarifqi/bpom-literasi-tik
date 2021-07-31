@extends('layout.main')

@section('title', 'Kelola Kuisioner Kepuasan TIK')

@section('content')

    <div class="container mt-3">
        <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
            <form action="{{ route('kuisioner_kepuasan_create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Kuisioner</label>
                    <input type="text" name="kuisioner_kepuasan" class="form-control" id="" aria-describedby="emailHelp"
                        required>
                </div>

                <div class="form-group text-right">
                    <a href="{{ route('kelola_akun') }}" class="btn btn-outline-theme">Kembali</a>
                    <button type="submit" class="btn btn-outline-theme mx-2" onclick="tambah()">Submit</button>

                </div>

            </form>

        </div>
    </div>
@endsection
