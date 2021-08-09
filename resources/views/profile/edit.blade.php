@extends('layout.main')

@section('title', 'Edit Profile')

@section('content')


    <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
        <form action="{{ route('edit_profile', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Foto Profil</label><br>
                <input type="file" name="photo" id="imgInp" onchange="previewImage();"><br><br>
                <img id="img-upload" src="{{ url('gambar/', $edit->photo) }}" style="width: 150px; height: 150px;"
                    alt="Gambar" />
            </div>

            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="">E-Mail</label>
                <input type="email" name="email" class="form-control" value="{{ $edit->email }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="">Jabatan Pegawai</label>
                <input type="text" name="jabatan_pegawai" class="form-control"
                    value="{{ $edit->identitas->jabatan_pegawai }}" id="" required>
            </div>

            <div class="form-group">
                <label for="">Unit Kerja</label>
                <input type="text" name="unit_kerja" value="{{ $edit->identitas->unit_kerja }}" class="form-control" id=""
                    required>
            </div>
            <div class="form-group text-right">
                <a href="{{ route('profile') }}" class="btn btn-outline-theme">Kembali</a>
                <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()">Ubah</button>
            </div>
        </form>

    </div>

@endsection
