@extends('layout.main')

@section('title', 'Kelola Kuisioner')

@section('content')
    <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
        <form action="{{ route('kuisioner_edit', $edit->id_kuisioner) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Kuesioner</label>
                <input type="text" name="kuisioner" class="form-control" value="{{ $edit->kuisioner }}"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="">Kuisioner</label>
                <input type="text" name="tahun_kuisioner" class="form-control" value="{{ $edit->tahun_kuisioner }}" id=""
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group text-right">
                <a href="{{ route('kuisioner') }}" class="btn btn-outline-theme"><i
                        class="fa fa-arrow-left mr-2"></i>Kembali</a>
                <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()"><i
                        class="fa fa-edit mr-2"></i>Ubah</button>
            </div>
        </form>
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
@endsection
