@extends('layout.main')

@section('title', 'Kelola Kuisioner')

@section('content')
    <div class="container mt-3">
        <div class="mt-1 mb-3 px-3 py-2 button-container bg-white border shadow-sm">
            @if (session('store'))
                <div class="alert alert-primary">
                    {{ session('store') }}
                </div>

            @elseif(session('update'))
                <div class="alert alert-success">
                    {{ session('update') }}
                </div>
            @elseif(session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif

            <a href="{{ route('response') }}" class="btn btn-outline-theme btn-sm mb-2"><i class="fa fa-edit"
                    aria-hidden="true"></i>
                Isi Kuesioner</a>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Kuesioner</th>
                        <th scope="col">Respon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($index as $i)
                        <tr class="text-center">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $i->kuisioner }}</td>
                            <td>{{ $i->response }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
