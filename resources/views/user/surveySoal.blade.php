@extends('layouts.app')
@section('title', 'Survey')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">{{ $soals[0]->variabel }}</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute" style="left: 1; bottom: 0">
    </div>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
    <form action="{{ route('user.survey.store') }}" method="post">
        {{ csrf_field() }}
        @foreach ($soals as $soal)
        <div class="my-5">
            <div class="d-flex">
                <h5 class=" font-weight-bold">
                    {{ $loop->iteration }}.
                </h5>
                <h5 class=" font-weight-bold ml-3">
                    {{ $soal->soal }}
                </h5>
            </div>
            @if ($soal->variabel == 'Perilaku Inovatif Guru')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Sangat jarang</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Jarang</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Sering</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Sangat sering</span>
                </label>
            </div>
            @elseif ($soal->variabel == 'Intensi Berinovasi' || $soal->variabel == 'Sikap Terhadap Inovasi' || $soal->variabel == 'Budaya Organisasi Berorientasi Pembelajaran')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Sangat tidak setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Tidak setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Sangat setuju</span>
                </label>
            </div>
            @elseif ($soal->variabel == 'Norma Subyektif terhadap Kreativitas')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Hampir tidak ada</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Beberapa tidak ada</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Beberapa semua</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Hampir semua</span>
                </label>
            </div>
            @elseif ($soal->variabel == 'Efikasi Berinovasi')
            @if ($soal->ukuran == 'Setuju')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Sangat tidak setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Tidak setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Setuju</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Sangat setuju</span>
                </label>
            </div>
            @elseif ($soal->ukuran == 'Terbukti')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Sangat jarang terbukti</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Jarang terbukti</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Sering terbukti</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Sangat sering terbukti</span>
                </label>
            </div>
            @endif
            @elseif ($soal->variabel == 'Self-Determination')
            <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="1" required>
                    <span class="mx-2">Sangat tidak sesuai</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="2" required>
                    <span class="mx-2">Tidak sesuai</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="4" required>
                    <span class="mx-2">Sesuai</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $loop->iteration }}" value="5" required>
                    <span class="mx-2">Sangat sesuai</span>
                </label>
            </div>
            @endif
        </div>
        <input type="hidden" value="{{ $loop->iteration }}" name="jumlahSoal">
        <input type="hidden" value="{{ $soal->id }}" name="soalId{{ $loop->iteration }}">
        @endforeach
        <input type="hidden" value="{{ $history[0]->id }}" name="historyId">
        <button type="submit" class=" w-100 btn btn-info text-white font-weight-bold py-3" id="submitSoal" disabled="disabled">
            Selesai
        </button>
        {{-- <button type="button" data-toggle="modal" data-target="#nilaiModal" class=" w-100 btn btn-info text-white font-weight-bold py-3">
            Selesai
        </button> --}}
    </form>
</div>

{{-- MODAL --}}
<div class="modal fade" id="nilaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-info">
            <div class="modal-header border-0">
                <h4 class="modal-title font-weight-bold text-white" id="exampleModalLabel">Perilaku Inovatif Guru</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times text-white" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body border-0">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class=" position-relative">
                        <img src="{{ asset('img/assets/badge-st.png') }}" alt="" width="250">
                        <h1 class=" font-weight-bold text-center text-white position-absolute display-1" style="bottom: 30%; right: 29%">
                            90
                        </h1>
                        <h4 class=" font-weight-bold text-center text-info position-absolute" style="bottom: 12%; right: 22%;">
                            Sangat Tinggi
                        </h4>
                    </div>
                    <div class=" py-3">
                        <h4 class=" font-weight-bold text-center text-white">
                            Terima kasih <span class="font-weight-normal"> atas partisipasi Anda!</span>
                        </h4>
                        <p class="text-center text-white">
                            Anda telah menyelesaikan Survey Perilaku Inovatif Guru
                        </p>
                    </div>
                    <a href="{{ route('user.survey.index') }}" class="btn btn-warning w-50 mb-2 font-weight-bold text-info">Kembali ke Beranda</a>
                    <a href="" class="btn btn-light w-50 m-auto font-weight-bold text-info">Isi Lagi</a>
                </div>
                <div class="modal-footer border-0">
                    
                </div>
            </div>
        </div>
    </div>
</div>



@include('inc.footerLandingPage')

<script>
    $("input:radio").change(function () {$("#submitSoal").prop("disabled", false);});
</script>

@endsection
