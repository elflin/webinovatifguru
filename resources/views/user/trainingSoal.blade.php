@extends('layouts.app')
@section('title', 'Survey')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">{{ $pelatihan->judul }}</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute" style="left: 1; bottom: 0">
    </div>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
    <form action="{{ route('user.training.test_store') }}" method="post">
        {{ csrf_field() }}
        @foreach ($soal_tes as $soal)
        @if ($loop->iteration == 1)
        <div class="my-3">
            <h3 class="font-weight-bold">Membangun Sikap dan Efikasi terhadap Inovasi</h3>
        </div>
        @elseif($loop->iteration == 7)
        <div class="my-3">
            <h3 class="font-weight-bold">Memperkuat Intensi Berinovasi</h3>
        </div>
        @endif
        
        <div class="my-5">
            <div class="d-flex">
                <h5 class=" font-weight-bold">
                    {{ $loop->iteration }}.
                </h5>
                <h5 class=" font-weight-bold ml-3">
                    {{ $soal->soal }}
                </h5>
            </div>
            <div class=" mx-4">
                @foreach ($choices[$loop->iteration] as $choice)
                    
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="{{ $soal->id }}" value="{{ $choice }}" required>
                    <span class="mx-2">{{ $choice }}</span>
                </label>

                @endforeach
            </div>
        </div>
        @endforeach
        {{-- <input type="hidden" value="{{ $pelatihan->id }}" name="pelatihanId"> --}}
        <input type="hidden" value="{{ $progress->id }}" name="progressId">
        <button type="submit" class=" w-100 btn btn-info text-white font-weight-bold py-3" id="submitSoal" disabled="disabled">
            Selesai
        </button>
    </form>
</div>



@include('inc.footerLandingPage')

<script>
    $("input:radio").change(function () {$("#submitSoal").prop("disabled", false);});
</script>

@endsection
