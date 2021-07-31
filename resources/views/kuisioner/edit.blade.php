@extends('layout.main')

@section('title', 'Kelola Kuisioner')

@section('content')

    <div class="container mt-3">
<<<<<<< HEAD
        <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
            <form action="{{ route('kuisioner_edit', $edit->id_kuisioner) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label for="">Kuisioner</label>
                    <input type="text" name="kuisioner" class="form-control" value="{{ $edit->kuisioner }}" id=""
                        aria-describedby="emailHelp" required>
                </div>

                <div class="form-group text-right">
                    <a href="{{ route('kuisioner') }}" class="btn btn-outline-theme">Kembali</a>
                    <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()">Ubah</button>
                </div>
            </form>

        </div>
    </div>

    {{-- <script>
        function ubah() {
            if (confirm('Apakah anda yakin untuk mengubah data ini?')) {
                // Save it!
                alert("Data berhasil diubah!");
            } else {
                // Do nothing!
                alert("Data gagal diubah!");
            }
        }
    </script> --}}
=======
        <form action="{{ route('kuisioner_edit', $edit->id_kuisioner) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="">Kuisioner</label>
                <input type="text" name="kuisioner" class="form-control" value="{{ $edit->kuisioner }}" id=""
                    aria-describedby="emailHelp" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kuisioner') }}" class="btn btn-danger">Back</a>
        </form>

    </div>
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
@endsection
