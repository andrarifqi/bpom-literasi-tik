@extends('layout.main')

<<<<<<< HEAD
@section('title', 'Profile |')

@section('content')
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-sm-12">
                <!--User profile header-->
                <div class="mt-1 mb-3 button-container bg-white border shadow-sm">
                    <div class="profile-bg p-5">
                        <img src="{{ url('gambar/', Auth::user()->photo) }}" height="125px" width="125px"
                            class="rounded-circle shadow profile-img" />
                    </div>
                    <div class="profile-bio-main container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-3 col-sm-12 offset-sm-0 col-12 bio-header">
                                <h3 class="mt-4">{{ Auth::user()->nama }}</h3>
                                <span class="text-muted mt-0 bio-request">Pegawai</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/User profile header-->

            </div>
        </div>

        <div class="row mt-3">
            <!--User profile content-->
            <div class="col-sm-12">
                <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                    <!--Personal info tab-->
                    <div class="table-responsive mb-4">
                        <table class="table table-borderless table-striped m-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td>{{ Auth::user()->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Telepon</th>
                                    <td>{{ $index->identitas->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>{{ $index->identitas->alamat }}</td>
                                </tr>
                                {{-- <tr>
                                    <th scope="row">Nomor Telepon</th>
                                    <td>{{ $index->identitas->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>{{ $index->identitas->alamat }}</td>
                                </tr> --}}
                            </tbody>
                        </table>
                        <a href="{{ route('edit_profile', Auth::user()->id) }}"
                            class="btn btn-outline-theme btn-edit float-right mt-4"><i class="fa fa-pencil"
                                aria-hidden="true"></i> Edit Profile</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!--/Personal info tab-->
                </div>
            </div>
        </div>
        <!--/User profile content-->
=======
@section('title', 'Profile')

@section('content')

    <div class="container mt-3">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="{{ $index->nama }}" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>

        <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input type="text" name="nomor_hp" class="form-control" value="{{ $index->identitas->nomor_hp }}" id=""
                required>
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" value="{{ $index->identitas->alamat }}" class="form-control" id="" required>
        </div>

        <div class="form-group">
            <label for="">Photo</label>
            <p>
                <img src="{{ url('gambar/', $index->photo) }}" alt="">
        </div>

        <a href="{{ route('edit_profile', $index->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('kelola_akun') }}" class="btn btn-danger">Back</a>

>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
    </div>
@endsection
