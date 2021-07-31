@extends('layout.main')

@section('title', 'Edit Profile')

@section('content')

    <div class="container mt-3">
        <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
            <form action="{{ route('edit_profile', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Foto</label><br>
                    <input type="file" name="photo" id="imgInp" onchange="previewImage();"><br><br>
                    <img id="img-upload" src="{{ url('gambar/', $edit->photo) }}" style="width: 150px; height: 150px;"
                        alt="Gambar" />
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" id="exampleInputEmail1"
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
                    <a href="{{ route('profile') }}" class="btn btn-outline-theme">Kembali</a>
                    <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()">Ubah</button>
                </div>
            </form>

        </div>
    </div>
@endsection
