@extends('layouts.app')

@section('content')

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active p-4">
                <a class="nav-link font-weight-bold" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item p-4">
                <a class="nav-link font-weight-bold text-dark" href="#assessment">Assessment</a>
            </li>
            <li class="nav-item p-4">
                <a class="nav-link font-weight-bold text-dark" href="#">About Us</a>
            </li>
            <li class="p-4">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('img/logo/main-logo.png') }}" alt="" width="75">
                </div>
            </li>
            <li class="nav-item p-4">
                <a class="nav-link font-weight-bold text-dark" href="#">Contact Us</a>
            </li>
            <li class="nav-item pt-4 pl-4 pr-1">
                <a class="nav-link btn btn-info px-3 text-white font-weight-bold" href="{{ route('login') }}">Masuk</a>
            </li>
            <li class="nav-item pt-4">
                <a class="nav-link btn btn-outline-info text-info px-3 font-weight-bold" href="#">Daftar</a>
            </li>
        </ul>
    </div>
</nav>

{{-- CAROUSEL --}}
<div id="carouselExampleIndicators" class="carousel slide vh-100 bg-white" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style=" width:100%; height: 100vh !important;">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/dummy/car1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/dummy/car2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/dummy/car3.jpg') }}" alt="Third slide">
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
            <h4 class="w-75 text-gray-900">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry’s standard dummy text
                ever since the 1500s.
                <br> <br>
                when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting.
            </h4>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="py-5 row justify-content-center bg-light">
        <div class=" col-10">
            <div class="">
                <h1 class="text-info font-weight-bold">
                    Assessment
                </h1>
                <h4 class="w-75 text-gray-900">
                    Anda dapat memilih variabel atau aktivitas tersedia
                </h4>
            </div>
            <div class="row align-items-center py-3">
                <a href="" class="btn btn-light col mx-3 bg-white p-5 rounded">
                    <div class="row justify-content-center">
                        <img src="{{ asset('img/assets/survey.png') }}" alt="" class="w-25">
                    </div>
                    <div class="row justify-content-center">
                        <h3 class="text-info font-weight-bold">Survey</h3>
                    </div>
                </a>
                <a href="" class="btn btn-light col mx-3 bg-white p-5 rounded">
                    <div class="row justify-content-center">
                        <img src="{{ asset('img/assets/training.png') }}" alt="" class="w-25">
                    </div>
                    <div class="row justify-content-center">
                        <h3 class="text-info font-weight-bold">Training</h3>
                    </div>
                </a>
                <a href="" class="btn btn-light col mx-3 bg-white p-5 rounded">
                    <div class="row justify-content-center">
                        <img src="{{ asset('img/assets/survey.png') }}" alt="" class="w-25">
                    </div>
                    <div class="row justify-content-center">
                        <h3 class="text-info font-weight-bold">Lorem</h3>
                    </div>
                </a>
                <a href="" class="btn btn-light col mx-3 bg-white p-5 rounded">
                    <div class="row justify-content-center">
                        <img src="{{ asset('img/assets/survey.png') }}" alt="" class="w-25">
                    </div>
                    <div class="row justify-content-center">
                        <h3 class="text-info font-weight-bold">Lorem</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="w-100"
    style="height: 30vh !important; background-image: url({{ asset('img/dummy/daftar.jpg') }}); background-size: cover; background-position: center;">
    <div class="w-100 row align-items-center m-0 p-0" style="background-color: rgba(90, 47, 112, 0.5); height: 30vh">
        <div class="col justify-content-center text-center">
            <h1 class=" text-white font-weight-bold">
                Yuk Tingkatkan Kinerja Kita!
            </h1>
            <h4 class=" text-white align-items-center my-3">
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                It has survived not only five centuries, but also the leap into electronic typesetting.
            </h4>
            <a href="" class="btn btn-info py-3 px-5">
                <h4 class=" font-weight-bold m-0">
                    Daftar
                </h4>
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-lg-start bg-light text-muted position-relative">
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="border-bottom w-75 m-auto">
        <div class="container text-left text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="{{ asset('img/logo/main-logo.png') }}" alt="" width="225">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h4 class="font-weight-bold text-info mb-4">
                        Guru Inovatif
                    </h4>
                    <p>
                        <a href="#!" class="text-reset">About Us</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Assessment</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Article</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">FAQ</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h4 class="font-weight-bold text-info mb-4">
                        Assessment
                    </h4>
                    <p>
                        <a href="#!" class="text-reset">Survey</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Training</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h4 class="font-weight-bold text-info mb-4">
                        Contact Us
                    </h4>
                    {{-- <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> --}}
                    <p>
                        <a href="#!" class="text-reset">Lorem</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Lorem</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Lorem</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Lorem</a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4">
        Copyright © 2021. 
        <a class="text-reset fw-bold" href="">Perilaku Inovatif All rights reserved</a>
    </div>
    <!-- Copyright -->
    <img src="{{ asset('img/assets/ilustrasi guru.png') }}" alt="" class="position-absolute" width="225" style="right: 0; top: 0;">
</footer>
<!-- Footer -->



@endsection
