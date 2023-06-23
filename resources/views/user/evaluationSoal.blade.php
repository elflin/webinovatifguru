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
                            <div>
                                <input type="radio" required name="{{ $loop->iteration }}" value="STS" id="soalE{{ $loop->iteration }}1">
                            </div>
                            <label for="soalE{{ $loop->iteration }}1">STS</label>
                        </div>
                        <div class="text-center">
                            <div>
                                <input type="radio" required name="{{ $loop->iteration }}" value="TS" id="soalE{{ $loop->iteration }}2">
                            </div>
                            <label for="soalE{{ $loop->iteration }}2">TS</label>
                        </div>
                        <div class="text-center">
                            <div>
                                <input type="radio" required name="{{ $loop->iteration }}" value="R" id="soalE{{ $loop->iteration }}3">
                            </div>
                            <label for="soalE{{ $loop->iteration }}3">
                                R</label>
                        </div>
                        <div class="text-center">
                            <div>
                                <input type="radio" required name="{{ $loop->iteration }}" value="S" id="soalE{{ $loop->iteration }}4">
                            </div>
                            <label for="soalE{{ $loop->iteration }}4">S</label>
                        </div>
                        <div class="text-center">
                            <div>
                                <input type="radio" required name="{{ $loop->iteration }}" value="SS" id="soalE{{ $loop->iteration }}5">
                            </div>
                            <label for="soalE{{ $loop->iteration }}5">SS</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="total" value="{{ $loop->iteration }}" id="">
        @endforeach

        <div class="">
            <h5 class=" font-weight-bold ml-4">
                Kesan dan Saran (jika ada):
            </h5>
        </div>
        <div class="form-group mx-4 my-3 mb-5">
            <textarea name="pesan_kesan" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="hidden" value="{{ $progress->id }}" name="progressId">
        {{-- <input type="hidden" value="{{ $soal->id }}" name="soalId{{ $loop->iteration }}"> --}}
        <button type="submit" class=" w-100 btn btn-info text-white font-weight-bold py-3" id="submitSoal"
            disabled="disabled">
            Selesai
        </button>
    </form>
</div>



@include('inc.footerLandingPage')

<script>
    $("input:radio").change(function () {
        $("#submitSoal").prop("disabled", false);
    });

</script>

@endsection
