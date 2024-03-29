@extends('layouts.app')
@section('title', 'Guru Inovatif')
@section('content')

@include('inc.navbarLandingPage')

{{-- CAROUSEL --}}
<div id="carouselExampleIndicators" class="carousel slide vh-100 bg-white" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style=" width:100%; height: 100vh !important;">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/foto/meet1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/foto/meet4.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/foto/foto1.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid pt-4 bg-white ">
    {{-- SECTION 1 --}}
    <div class="row align-items-center vh-100" id="assessment">
        <div class="col d-flex justify-content-center">
            <img src="{{ asset('img/dummy/sec1.PNG') }}" class="w-75" alt="">
        </div>
        <div class="col">
            <h1 class="text-info font-weight-bold">
                Yuk, Lengkapi Variabel <br>
                Perilaku Inovatif Guru!
            </h1>
            {{-- <h4 class="w-75 text-gray-900">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry’s standard dummy text
                ever since the 1500s.
                <br> <br>
                when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting.
            </h4> --}}
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="py-5 row justify-content-center bg-light">
        <div class=" col-10">
            <div class="">
                <h1 class="text-info font-weight-bold">
                    Features
                </h1>
                <h4 class="w-75 text-gray-900">
                    Anda dapat memilih variabel atau aktivitas tersedia
                </h4>
            </div>
            <div class=" d-inline-block py-3">
                <a href="{{ route('user.survey.index') }}" class="btn btn-light col mx-3 bg-white py-5 rounded w-25">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/assets/survey.png') }}" alt="" class="w-50">
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2 class="text-info font-weight-bold">Survey</h2>
                    </div>
                </a>
                <a href="{{ route('user.training.index') }}" class="btn btn-light col mx-3 bg-white py-5 rounded w-25">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/assets/training.png') }}" alt="" class="w-50">
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2 class="text-info font-weight-bold">Training</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@include('inc.footerLandingPage')

@endsection
