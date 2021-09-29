@extends('layouts.app')

@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="w-100"
    style="height: 30vh !important; background-image: url({{ asset('img/dummy/daftar.jpg') }}); background-size: cover; background-position: center;">
    <div class="w-100 row align-items-center m-0 p-0" style="height: 30vh">
        <div class="col justify-content-center text-center">
            <h1 class=" text-white font-weight-bold">
                Survey
            </h1>
            <h4 class="text-white align-items-center my-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br> 
                Ipsum has been the industry’s standard dummy text ever since the 1500s
            </h4>
        </div>
    </div>
</div>

<div class="container py-4">
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Perilaku Inovatif Guru
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Intensi Berinovasi
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Sikap Terhadap Inovasi
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Norma Subyektif Terhadap Kreativitas
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Etika Berinovasi
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Budaya Organisasi Berorientasi Pembelajaran
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Self-Determination
        </h4>
        <i class="fa fa-arrow-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
</div>

@include('inc.footerLandingPage')

@endsection
