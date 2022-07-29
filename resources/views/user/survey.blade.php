@extends('layouts.app')
@section('title', 'Survey')
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
            {{-- <h4 class="text-white align-items-center my-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br> 
                Ipsum has been the industry’s standard dummy text ever since the 1500s
            </h4> --}}
        </div>
    </div>
</div>

<div class="container py-4">
    @foreach ($variabels as $variabel)
    <a href="" alt="" data-toggle="modal" data-target="#surveyModal-{{ $loop->iteration }}" class=" text-decoration-none d-flex justify-content-between align-items-center bg-secondary p-4 rounded my-3">
        <h4 class="font-weight-bold text-dark m-0">
            {{ $variabel }}
        </h4>
        <i class="fa fa-chevron-circle-right fa-2x text-info" aria-hidden="true"></i>
    </a>
    @endforeach
</div>

{{-- MODAL --}}
@foreach ($variabels as $variabel)
<div class="modal fade" id="surveyModal-{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">{{ $variabel }}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times text-dark" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body border-0">
                <h5 class=" font-weight-bold">
                    Riwayat
                </h5>
                <div>
                    @foreach ($historyList as $history)
                    @if ( $history['variabel'][$variabel] != 0)
                    <div class="rounded bg-light2 px-3 py-3 my-2">
                        <div class=" d-flex justify-content-lg-between align-items-center">
                            <div class="d-flex align-items-center">
                                @if ($history['value'][$variabel] == "Sangat Tinggi")
                                <div class=" mx-2 p-1" style="background-image: url({{ asset('img/assets/sangat-tinggi.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">{{ $history['variabel'][$variabel] }}</h3>
                                </div>
                                <h6 class="text-success font-weight-bold m-0">{{ $history['value'][$variabel] }}</h6>
                                @elseif ($history['value'][$variabel] == "Tinggi")
                                <div class=" mx-2 p-1" style="background-image: url({{ asset('img/assets/tinggi.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">{{ $history['variabel'][$variabel] }}</h3>
                                </div>
                                <h6 class="text-orangeBadge font-weight-bold m-0">{{ $history['value'][$variabel] }}</h6>
                                @elseif ($history['value'][$variabel] == "Cukup")
                                <div class=" mx-2 p-1" style="background-image: url({{ asset('img/assets/sedang.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">{{ $history['variabel'][$variabel] }}</h3>
                                </div>
                                <h6 class="text-warning font-weight-bold m-0">{{ $history['value'][$variabel] }}</h6>
                                @elseif ($history['value'][$variabel] == "Rendah")
                                <div class=" mx-2 p-1" style="background-image: url({{ asset('img/assets/sangat-rendah.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">{{ $history['variabel'][$variabel] }}</h3>
                                </div>
                                <h6 class="text-grayBadge font-weight-bold m-0">{{ $history['value'][$variabel] }}</h6>
                                @elseif ($history['value'][$variabel] == "Sangat Rendah")
                                <div class=" mx-2 px-2 p-1" style="background-image: url({{ asset('img/assets/sangat-rendah.png') }}); background-size: cover; background-position: center;">
                                    <h3 class=" font-weight-bold text-white m-0 p-2">{{ $history['variabel'][$variabel] }}</h3>
                                </div>
                                <h6 class="text-grayBadge font-weight-bold m-0">{{ $history['value'][$variabel] }}</h6>
                                @endif
                            </div>
                            <a class="d-flex text-decoration-none text-gray-700 align-items-center triggerRotate" id="muter-" data-toggle="collapse" href="#detailRiwayat-{{ $loop->iteration }}" role="button">
                                <p class=" m-0">{{ $history['updated_at'] }}</p>
                                <i class="fa fa-chevron-down mx-2 rotateIcon" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="detailRiwayat-{{ $loop->iteration }}" class="collapse container ml-5">
                            <ul class="list-unstyled m-0">
                                @if ($variabel == 'Perilaku Inovatif Guru')
                                <li>Idea generation : {{ $history['dimensi']['Idea Generation'] }}</li>
                                <li>Idea Promotion : {{ $history['dimensi']['Idea Promotion'] }}</li>
                                <li>Idea realization : {{ $history['dimensi']['Idea Realization'] }}</li>
                                @elseif ($variabel == 'Intensi Berinovasi')
                                <li>Intensi Berinovasi : {{ $history['dimensi']['Intensi Berinovasi'] }}</li>
                                @elseif ($variabel == 'Sikap Terhadap Inovasi')
                                <li>Support for Innovation : {{ $history['dimensi']['Support For Innovation'] }}</li>
                                <li>Risk of Tolerace : {{ $history['dimensi']['Risk Of Tolerance'] }}</li>
                                <li>Openness to External Knowledge : {{ $history['dimensi']['Openness To External Knowledge'] }}</li>
                                @elseif ($variabel == 'Norma Subyektif terhadap Kreativitas')
                                <li>Family expectations for creativity : {{ $history['dimensi']['Family Expectations For Creativity'] }}</li>
                                <li>Leader expectations for creativity : {{ $history['dimensi']['Leader Expectations For Creativity'] }}</li>
                                <li>Customer expectations for creativity : {{ $history['dimensi']['Customer Expectations For Creativity'] }}</li>
                                @elseif ($variabel == 'Efikasi Berinovasi')
                                <li>Personal assumptions / beliefs about own creativity : {{ $history['dimensi']['Personal Assumptions/beliefs About Own Creativity'] }}</li>
                                <li>Evidence-based assessment of creative self-efficacy : {{ $history['dimensi']['Evidence-based Assessment Of Creative Self-efficacy'] }}</li>
                                @elseif ($variabel == 'Budaya Organisasi Berorientasi Pembelajaran')
                                <li>Commitment to learning : {{ $history['dimensi']['Commitment To Learning'] }}</li>
                                <li>Shared vision : {{ $history['dimensi']['Shared Vision'] }}</li>
                                <li>Open-mindedness : {{ $history['dimensi']['Open-mindedness'] }}</li>
                                <li>Intraorganizational knowledge sharing : {{ $history['dimensi']['Intraorganizational Knowledge Sharing'] }}</li>
                                @elseif ($variabel == 'Self-Determination')
                                <li>Intrinsic Motivation : {{ $history['dimensi']['Intrinsic Motivation'] }}</li>
                                <li>Identified Regulation : {{ $history['dimensi']['Identified Regulation'] }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                
                <h5 class="font-weight-bold mt-3">
                    Jurnal Survey
                </h5>

                {{-- ini gatau buat apaan --}}
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
                @if ($historyList[0]['variabel'][$variabel] == 0)
                <a href="{{ route('user.survey.show', $variabel) }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengisi
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach

@if (isset($historyList[0]['updated_at']))
    <div class="row justify-content-center mb-5">
        <form action="{{ route('user.survey.createHistory', Auth::id()) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <button type="submit" class="btn btn-info px-5 py-2">
                <h4 class="m-0 font-weight-bold text-white ">
                    Reset
                </h4>
            </button>
        </form>
    </div>
@endif

@include('inc.footerLandingPage')

<script>
$(".triggerRotate").click(function(){
    $(".rotateIcon").toggleClass("flipDown"); 
});
</script>

@endsection
