@extends('layout.main')

@section('title', 'Kelola Kuesioner')

@section('content')

    <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
        <form action="{{ route('kuisioner_create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Kuesioner</label>
                <input type="text" name="kuisioner" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="">Tahun Kuesioner</label>
                <input type="text" name="tahun_kuisioner" class="form-control" id="" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group text-right">
                <a href="{{ route('kuisioner') }}" class="btn btn-outline-theme"><i
                        class="fa fa-arrow-left mr-2"></i>Kembali</a>
                <button type="submit" class="btn btn-outline-theme mx-2" onclick="tambah()"><i
                        class="fa fa-paper-plane mr-2"></i>Submit</button>
            </div>

        </form>
    </div>
@endsection
