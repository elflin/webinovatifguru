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
    <a href="" alt="" data-toggle="modal" data-target="#surveyModal1" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Perilaku Inovatif Guru
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Intensi Berinovasi
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Sikap Terhadap Inovasi
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Norma Subyektif Terhadap Kreativitas
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Etika Berinovasi
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Budaya Organisasi Berorientasi Pembelajaran
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    <a href="" alt="" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            Self-Determination
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
</div>

{{-- MODAL --}}
<div class="modal fade" id="surveyModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">Perilaku Inovatif Guru</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times text-dark" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body border-0">
                    <h5 class=" font-weight-bold">
                        Riwayat
                    </h5>
                    <div class="rounded bg-light2 px-3 py-3">
                        <div class=" d-flex justify-content-lg-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class=" mx-2" style="background-image: url({{ asset('img/assets/sangat-tinggi.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">90</h3>
                                </div>
                                <h6 class="text-success font-weight-bold m-0">Sangat Tinggi</h6>
                            </div>
                            <a class="d-flex text-decoration-none text-gray-700 align-items-center " id="muter-" data-toggle="collapse" href="#detailRiwayat-" role="button">
                                <p class=" m-0">Senin, 30-08-2021</p>
                                <i class="fa fa-chevron-down mx-2" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="detailRiwayat-" class="collapse container ml-5">
                            <ul class="list-unstyled m-0">
                                <li>Dimensi 1 : 90</li>
                                <li>Dimensi 1 : 90</li>
                                <li>Dimensi 1 : 90</li>    
                            </ul>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mt-3">
                        Jurnal Survey
                    </h5>
                    <ul class="text-gray-700">
                        <li>
                            Diambil dari jurnal Intensi Berinovasi oleh Jane Rose pada tahun 2018
                        </li>
                        <li>
                            Diambil dari jurnal Intensi Berinovasi oleh Jane Rose pada tahun 2018
                        </li>
                    </ul>
                </div>
                <div class="modal-footer border-0">
                    <a href="{{ route('user.survey.show', 1) }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                        Mulai Mengisi
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('inc.footerLandingPage')

<script>
$(".fa-chevron-down").click(function(){
    $(this i).toggleClass("fa-rotate-180down")  ; 
})
</script>

@endsection
