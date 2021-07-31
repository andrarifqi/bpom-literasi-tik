@extends('layout.main')

@section('title', 'Kelola Kuisioner')

@section('content')

    <h5 class="mb-0"><strong>Kuesioner Literasi TIK</strong></h5>
    <span class="text-secondary"><a href="{{ route('kuisioner') }}">Kuesioner</a> <i class="fa fa-angle-right"></i>
        Literasi
        TIK</span>
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
<<<<<<< HEAD
        <p>5 = Sangat Setuju</p>
        <div class="dropdown-divider"></div>
=======
        <p>5 = Sangat Setuju</p><br>

>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
        <form action="{{ route('response') }}" method="POST">
            @csrf
            @php
                $no = 0;
            @endphp
            <div class="form-group row">
                @foreach ($response as $r)

<<<<<<< HEAD
                    <div class="col-sm-9 mt-2">
                        <p class="mt-2 mb-2"><input type="text" class="form-control" name="kuisioner[]"
                                value="{{ $r->kuisioner }}" readonly></p>
                    </div>
                    <div class="literasiform col-sm-3 justify-content-right mt-3">
=======
                    <div class="col-sm-9">
                        <p class="mt-2 mb-2"><input type="text" class="form-control" name="kuisioner[]"
                                value="{{ $r->kuisioner }}" readonly></p>
                    </div>
                    <div class="literasiform col-sm-3 justify-content-right">
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                        <div class="form-check-inline">
                            <label for="1">
                                <input type="radio" class="form-check input" value="Sangat Tidak Setuju"
                                    name="response[<?php echo $no; ?>]" id="pilihan1">1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="2">
                                <input type="radio" class="form-check input" value="Tidak Setuju"
                                    name="response[<?php echo $no; ?>]" id="pilihan2">2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="3">
<<<<<<< HEAD
                                <input type="radio" class="form-check input" name="response[<?php echo $no; ?>]"
                                    value="Tidak Tahu" id="pilihan3">3
=======
                                <input type="radio" class="form-check input"
                                    name="response[<?php echo $no; ?>]" value="Tidak Tahu"
                                    id="pilihan3">3
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="4">
<<<<<<< HEAD
                                <input type="radio" class="form-check input" name="response[<?php echo $no; ?>]"
                                    value="Setuju" id="pilihan4">4
=======
                                <input type="radio" class="form-check input"
                                    name="response[<?php echo $no; ?>]" value="Setuju"
                                    id="pilihan4">4
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="5">
<<<<<<< HEAD
                                <input type="radio" class="form-check input" name="response[<?php echo $no; ?>]"
                                    value="Sangat Setuju" id="pilihan5">5
=======
                                <input type="radio" class="form-check input"
                                    name="response[<?php echo $no; ?>]" value="Sangat Setuju"
                                    id="pilihan5">5
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
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
<<<<<<< HEAD
                    <button type="submit" class="d-flex btn btn-outline-theme mx-1 my-4 float-right submit-btn"><i
                            class="fa fa-send-o"></i>Submit</button>
=======
                    <button type="submit" class="d-flex btn btn-outline-primary mx-1 my-4 float-right submit-btn"><i
                            class="fa fa-send-o align-middle"></i>Submit</button>
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
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
<<<<<<< HEAD
=======

>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
        pilihan1.forEach(p1 => {
            p1.addEventListener("click", (e) => {
                console.log(e.target.value);
            })
        })
    </script>

@endsection
