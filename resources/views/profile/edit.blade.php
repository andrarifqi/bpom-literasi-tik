@extends('layout.main')

<<<<<<< HEAD
@section('title', 'Edit Profile')
=======
@section('title', 'Profile')
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37

@section('content')

    <div class="container mt-3">
<<<<<<< HEAD
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
=======
        <form action="{{ route('edit_profile', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" name="password" class="form-control" value="{{ $edit->password }}"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
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

            <div class="form-group">
                <label for="">Photo</label>
                <input type="file" name="photo" id="imgInp" onchange="previewImage();"><br>
                <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" />
                <p>
                    <img src="{{ url('gambar/', $edit->photo) }}" alt="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kelola_akun') }}" class="btn btn-danger">Back</a>
        </form>

    </div>


    <script>
        function previewImage() {
            document.getElementById("img-upload").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("img-upload").src = oFREvent.target.result;
            };
        };
    </script>
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
@endsection
