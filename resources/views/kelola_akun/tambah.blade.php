@extends('layout.main')

@section('title', 'Tambah Akun')

@section('content')

    <div class="my-2 mx-3 px-3 button-container bg-white border shadow-sm">
        <form action="{{ route('akun_tambah') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" id="" aria-describedby="" required>
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" id="" aria-describedby="" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="" required>
            </div>

            <div class="form-group">
                <label for="">E-Mail</label>
                <input type="email" name="email" class="form-control" id="" required>
            </div>

            <div class="form-group">
                <label for="" class="mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="custom-select" required>
                    <option hidden>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Jabatan Pegawai</label>
                <input type="text" name="jabatan_pegawai" class="form-control" id="" required>
            </div>

            <div class="form-group">
                <label for="">Unit Kerja</label>
                <input type="text" name="unit_kerja" class="form-control" id="" required>
            </div>

            <div class="form-group text-right">
                <a href="{{ route('kelola_akun') }}" class="btn btn-outline-theme"><i
                        class="fa fa-arrow-left mr-2"></i>Kembali</a>
                <button type="submit" class="btn btn-outline-theme mx-2" onclick="tambah()"><i
                        class="fa fa-paper-plane mr-2"></i>Submit</button>
            </div>

        </form>
    </div>

    <script>
        function tambah() {
            if (confirm('Apakah anda yakin untuk menambahkan data ini?')) {
                // Save it!
                alert("Data berhasil ditambahkan!");
            } else {
                // Do nothing!
                alert("Data gagal ditambahkan!");
            }
        }
    </script>
@endsection
