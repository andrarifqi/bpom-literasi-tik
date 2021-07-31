@extends('layout.main')

@section('title', 'Kuesioner Literasi TIK |')

@section('content')
    <h5 class="mb-0"><strong>Kuesioner Literasi TIK</strong></h5>
    <span class="text-secondary">Kuesioner <i class="fa fa-angle-right"></i> Literasi TIK</span>
    <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-3"><strong>Petunjuk Pengisian.</strong></h6>
        <p class="mb-3">Berilah jawaban atas pertanyaan berikut dengan memilih pilihan jawaban. Pertanyaan berikut ini
            mengenai Literasi
            TI .</p>
        <p>Ada 5 pilihan penilaian yaitu : </p>
        <p>1 = Sangat Tidak Setuju</p>
        <p>2 = Tidak Setuju</p>
        <p>3 = Tidak Tahu</p>
        <p>4 = Setuju</p>
        <p>5 = Sangat Setuju</p><br>

        <form action="literasi">
            @csrf
            <div class="form-group row">
                {{-- @foreach ($users as $user) --}}
                <div class="col-sm-9">
                    {{-- <p class="mt-2 mb-2">{{ $loop->iteration }}. {{ $user->literasi_tik }}</p> --}}
                </div>
                <div class="literasiform col-sm-3 justify-content-right">
                    <div class="form-check-inline">
                        <label for="1">
                            <input type="radio" class="form-check input" name="radio1" id="pilihan1">1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="2">
                            <input type="radio" class="form-check input" name="radio1" id="pilihan2">2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="3">
                            <input type="radio" class="form-check input" name="radio1" id="pilihan3">3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="4">
                            <input type="radio" class="form-check input" name="radio1" id="pilihan4">4
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="5">
                            <input type="radio" class="form-check input" name="radio1" id="pilihan5">5
                        </label>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <button type="submit" class="d-flex btn btn-outline-primary mx-1 my-4 float-right submit-btn"><i
                            class="fa fa-send-o align-middle"></i>Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
