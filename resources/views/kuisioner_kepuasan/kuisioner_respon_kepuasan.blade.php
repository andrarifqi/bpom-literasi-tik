@extends('layout.main')

@section('title', 'Kelola Kuisioner Kepuasan TIK')

@section('content')

    <h5 class="mb-0"><strong>Kuesioner Kepuasan TIK</strong></h5>
    <span class="text-secondary"><a href="{{ route('kuisioner_kepuasan') }}">Kuesioner</a> <i
            class="fa fa-angle-right"></i>
        Kepuasan TIK</span>
    <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-3"><strong>Petunjuk Pengisian.</strong></h6>
        <p class="mb-3">Berilah jawaban atas pertanyaan berikut dengan memilih pilihan jawaban. Pertanyaan berikut ini
            mengenai Kepuasan
            TIK .</p>
        <p>Ada 5 pilihan penilaian yaitu : </p>
        <p>1 = Sangat Tidak Setuju</p>
        <p>2 = Tidak Setuju</p>
        <p>3 = Tidak Tahu</p>
        <p>4 = Setuju</p>
        <p>5 = Sangat Setuju</p><br>

        <form action="{{ route('respon_kepuasan') }}" method="POST">
            @csrf
            @php
                $no = 0;
            @endphp
            <div class="form-group row">
                @foreach ($respon_kepuasan as $r)

                    <div class="col-sm-9">
                        <p class="mt-2 mb-2"><input type="text" class="form-control" name="kuisioner_kepuasan[]"
                                value="{{ $loop->iteration }}. {{ $r->kuisioner_kepuasan }}" readonly></p>
                    </div>
                    <div class="literasiform col-sm-3 justify-content-right">
                        <div class="form-check-inline">
                            <label for="1">
                                <input type="radio" class="form-check input" value="Sangat Tidak Setuju"
                                    name="respon_kepuasan[<?php echo $no; ?>]"
                                    id="pilihan1">1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="2">
                                <input type="radio" class="form-check input" value="Tidak Setuju"
                                    name="respon_kepuasan[<?php echo $no; ?>]"
                                    id="pilihan2">2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="3">
                                <input type="radio" class="form-check input"
                                    name="respon_kepuasan[<?php echo $no; ?>]"
                                    value="Tidak Tahu" id="pilihan3">3
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="4">
                                <input type="radio" class="form-check input"
                                    name="respon_kepuasan[<?php echo $no; ?>]" value="Setuju"
                                    id="pilihan4">4
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="5">
                                <input type="radio" class="form-check input"
                                    name="respon_kepuasan[<?php echo $no; ?>]"
                                    value="Sangat Setuju" id="pilihan5">5
                            </label>
                        </div>
                    </div>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <button type="submit" class="d-flex btn btn-outline-primary mx-1 my-4 float-right submit-btn"><i
                            class="fa fa-send-o align-middle"></i>Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        let pilihan1 = Array.from(document.querySelectorAll("#pilihan1"))
        let pilihan2 = Array.from(document.querySelectorAll("#pilihan2"))
        let pilihan3 = Array.from(document.querySelectorAll("#pilihan3"))
        let pilihan4 = Array.from(document.querySelectorAll("#pilihan4"))
        let pilihan5 = Array.from(document.querySelectorAll("#pilihan5"))
        pilihan1.forEach(p1 => {
            p1.addEventListener("click", (e) => {
                console.log(e.target.value);
            })
        })
    </script>

@endsection