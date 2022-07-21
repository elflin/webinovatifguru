@extends('layouts.app')
@section('title', 'Evaluasi')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">{{ $pelatihan->judul }}</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute"
            style="left: 1; bottom: 0">
    </div>
</div>
<div class="my-3 rounded px-4 py-3 bg-green">
    <h5 class="font-weight-bold text-white m-0 text-center">Nilai: {{ $nilai }}</h5>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
    <form action="{{ route('user.training.evaluation_test_store') }}" method="post">
        {{ csrf_field() }}
        @foreach ($soal_eval as $eval)
        <div class="my-5">
            <div class="d-flex">
                <h5 class=" font-weight-bold">
                    {{ $loop->iteration }}
                </h5>
                <h5 class=" font-weight-bold ml-3">
                    {{ $eval }}
                </h5>
            </div>
            <div class="mx-4 rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                <div class="px-5 w-100">
                    <div class="d-flex justify-content-between px-5 w-100">
                        <div class="text-center">
                            @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'STS')
                            <div>
                                <input type="radio" disabled checked name="{{ $loop->iteration }}" value="STS" id="soalE{{ $loop->iteration }}1">
                            </div>
                            <label for="soalE{{ $loop->iteration }}1" class="font-weight-bold">STS</label>
                            @else
                            <div>
                                <input type="radio" disabled name="{{ $loop->iteration }}" value="STS" id="soalE{{ $loop->iteration }}1">
                            </div>
                            <label for="soalE{{ $loop->iteration }}1">STS</label>
                            @endif
                        </div>
                        <div class="text-center">
                            @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'TS')
                            <div>
                                <input type="radio" disabled checked name="{{ $loop->iteration }}" value="TS" id="soalE{{ $loop->iteration }}2">
                            </div>
                            <label for="soalE{{ $loop->iteration }}2" class="font-weight-bold">TS</label>
                            @else
                            <div>
                                <input type="radio" disabled name="{{ $loop->iteration }}" value="TS" id="soalE{{ $loop->iteration }}2">
                            </div>
                            <label for="soalE{{ $loop->iteration }}2">TS</label>
                            @endif
                        </div>
                        <div class="text-center">
                            @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'R')
                            <div>
                                <input type="radio" disabled checked name="{{ $loop->iteration }}" value="R" id="soalE{{ $loop->iteration }}3">
                            </div>
                            <label for="soalE{{ $loop->iteration }}3" class="font-weight-bold">R</label>
                            @else
                            <div>
                                <input type="radio" disabled name="{{ $loop->iteration }}" value="R" id="soalE{{ $loop->iteration }}3">
                            </div>
                            <label for="soalE{{ $loop->iteration }}3">R</label>
                            @endif
                        </div>
                        <div class="text-center">
                            @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'S')
                            <div>
                                <input type="radio" disabled checked name="{{ $loop->iteration }}" value="S" id="soalE{{ $loop->iteration }}4">
                            </div>
                            <label for="soalE{{ $loop->iteration }}4" class="font-weight-bold">S</label>
                            @else
                            <div>
                                <input type="radio" disabled name="{{ $loop->iteration }}" value="S" id="soalE{{ $loop->iteration }}4">
                            </div>
                            <label for="soalE{{ $loop->iteration }}4">S</label>
                            @endif
                        </div>
                        <div class="text-center">
                            @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'SS')
                            <div>
                                <input type="radio" disabled checked name="{{ $loop->iteration }}" value="SS" id="soalE{{ $loop->iteration }}5">
                            </div>
                            <label for="soalE{{ $loop->iteration }}5" class="font-weight-bold">SS</label>
                            @else
                            <div>
                                <input type="radio" disabled name="{{ $loop->iteration }}" value="SS" id="soalE{{ $loop->iteration }}5">
                            </div>
                            <label for="soalE{{ $loop->iteration }}5">SS</label>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="d-flex justify-content-center px-5 w-100"> --}}
                        {{-- <div class="text-center">
                            <div>
                                <input type="radio" disabled checked id="">
                            </div>
                            <label for="" class="font-weight-bold">
                                @if ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'STS')
                                Sangat Tidak Setuju
                                @elseif ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'TS')
                                Tidak Setuju
                                @elseif ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'R')
                                Ragu
                                @elseif ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'S')
                                Setuju
                                @elseif ($Evaluasi_Jawaban['jawaban'.$loop->iteration] == 'SS')
                                Sangat Setuju
                                @endif
                            </label>
                        </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        @endforeach

        <div class="">
            <h5 class=" font-weight-bold ml-4">
                Kesan dan Saran 
            </h5>
        </div>
        <p class="mx-4 my-3 mb-5">
            {{ $Evaluasi_Jawaban->pesan_kesan }}
        </p>
    </form>
</div>



@include('inc.footerLandingPage')

<script>
    $("input:radio").change(function () {
        $("#submitSoal").prop("disabled", false);
    });

</script>

@endsection
