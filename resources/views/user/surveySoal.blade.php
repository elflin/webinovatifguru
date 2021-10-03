@extends('layouts.app')

@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">Perilaku Inovatif Guru</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute" style="left: 1; bottom: 0">
    </div>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
    @foreach ($soals as $soal)
    <div class="my-5">
        <div class="d-flex">
            <h5 class=" font-weight-bold">
                1.
            </h5>
            <h5 class=" font-weight-bold ml-3">
                {{ $soal->soal }}
            </h5>
        </div>
        <div class=" mx-4">
            <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                <input type="radio" name="foo" value="1">
                <span class="mx-2">Sangat Setuju</span>
            </div>
            <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                <input type="radio" name="foo" value="1">
                <span class="mx-2">Setuju</span>
            </div>
            <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                <input type="radio" name="foo" value="1">
                <span class="mx-2">Tidak Setuju</span>
            </div>
        </div>
    </div>
    @endforeach
        <button type="button" data-toggle="modal" data-target="#nilaiModal" class=" w-100 btn btn-info text-white font-weight-bold py-3">
            Selesai
        </button>
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

@endsection
