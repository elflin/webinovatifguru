@extends('layouts.app')
@section('title', 'Training')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>


{{-- content --}}
<div class="bg-white">
    <div class="w-100"
        style="height: 30vh !important; background-image: url({{ asset('img/dummy/daftar.jpg') }}); background-size: cover; background-position: center;">
        <div class="w-100 row align-items-center m-0 p-0" style="height: 30vh">
            <div class="col justify-content-center text-center">
                <h1 class=" text-white font-weight-bold">
                    Training
                </h1>
                {{-- <h4 class="text-white align-items-center my-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br> 
                Ipsum has been the industry’s standard dummy text ever since the 1500s
            </h4> --}}
            </div>
        </div>
    </div>

    {{-- PERKENALAN --}}
    <div class="container py-4">
        <div class="bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Perkenalan
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex mt-3">
                <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" style="" class="bg-gray-400 image-box">
                <p class="ml-3 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum asperiores explicabo minus.
                    Eius vel, vero ea velit laudantium odit earum harum itaque qui repudiandae minus ab. Magnam harum
                    aspernatur eius ullam officiis, non accusantium voluptate, vel similique labore dolores. Quibusdam
                    modi earum magni ipsum quos vero tempore. Doloremque accusamus corrupti inventore, laboriosam
                    reiciendis veritatis modi dolore doloribus in explicabo nisi quis possimus perferendis fuga eaque
                    repellat iusto culpa expedita dolorem, sequi quia ut, rem quae! Voluptatum, eum aliquid non minus
                    excepturi debitis adipisci, quis facilis, soluta numquam incidunt? Explicabo recusandae quis neque
                    atque! Repellendus officia laudantium minus cupiditate provident.
                </p>
            </div>

            <div class="d-flex mt-3">
                <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" style="" class="bg-gray-400 image-box">
                <p class="ml-3 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum asperiores explicabo minus.
                    Eius vel, vero ea velit laudantium odit earum harum itaque qui repudiandae minus ab. Magnam harum
                    aspernatur eius ullam officiis, non accusantium voluptate, vel similique labore dolores. Quibusdam
                    modi earum magni ipsum quos vero tempore. Doloremque accusamus corrupti inventore, laboriosam
                    reiciendis veritatis modi dolore doloribus in explicabo nisi quis possimus perferendis fuga eaque
                    repellat iusto culpa expedita dolorem, sequi quia ut, rem quae! Voluptatum, eum aliquid non minus
                    excepturi debitis adipisci, quis facilis, soluta numquam incidunt? Explicabo recusandae quis neque
                    atque! Repellendus officia laudantium minus cupiditate provident.
                </p>
            </div>

            <div class="d-flex mt-3">
                <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" style="" class="bg-gray-400 image-box">
                <p class="ml-3 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum asperiores explicabo minus.
                    Eius vel, vero ea velit laudantium odit earum harum itaque qui repudiandae minus ab. Magnam harum
                    aspernatur eius ullam officiis, non accusantium voluptate, vel similique labore dolores. Quibusdam
                    modi earum magni ipsum quos vero tempore. Doloremque accusamus corrupti inventore, laboriosam
                    reiciendis veritatis modi dolore doloribus in explicabo nisi quis possimus perferendis fuga eaque
                    repellat iusto culpa expedita dolorem, sequi quia ut, rem quae! Voluptatum, eum aliquid non minus
                    excepturi debitis adipisci, quis facilis, soluta numquam incidunt? Explicabo recusandae quis neque
                    atque! Repellendus officia laudantium minus cupiditate provident.
                </p>
            </div>

        </div>

        @foreach ($pelatihans as $pelatihan)
            
        {{-- INFORMED CONSENT --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        {{ $pelatihan->judul }}
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <p>
                {{ $pelatihan->deskripsi }}
            </p>
            {{-- consent --}}
            @if ($pelatihan->type == 'Consent')
            <div class="d-flex align-items-end">
                <h1 class="text-primary m-0">
                    <i class="fa fa-file-word"></i>
                </h1>
                <div class="ml-2">
                    {{-- <div class="m-0">
                        Sebuah template word yang bisa di download dan diupload ulang
                    </div> --}}
                    <a href="{{ $pelatihan->link }}" class="m-0 text-decoration-none text-purple">
                        Download template
                    </a>
                </div>
            </div>

            <a href="{{ route('user.training.show', $pelatihan->id) }}" class="mt-3 text-decoration-none d-flex align-items-end">
                <h1 class="text-info m-0">
                    <i class="fa fa-file-upload"></i>
                </h1>
                <div class="ml-2 text-dark">
                    Upload Submission
                </div>
            </a>
            {{-- test --}}
            @elseif ($pelatihan->type == 'Tes')
            <div class="d-flex justify-content-between align-items-center">
                <a href="" data-toggle="modal" data-target="#testModal{{ $pelatihan->id }}" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-signature"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Kerjakan {{ $pelatihan->judul }}
                    </div>
                </a>
                {{-- if udah selesai --}}
                @foreach ($progresss as $progress)
                @if ($progress->pelatihan->id == $pelatihan->id)
                @if ($progress->status == 1)
                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
                @endif
                @endif
                @endforeach
                
            </div>

            {{-- materi --}}
            @else
            <div class="d-flex align-items-end">
                <h1 class="text-danger m-0">
                    <i class="fa fa-file-pdf"></i>
                </h1>
                <div class="ml-2">
                    {{-- <div class="m-0">
                        Modul PDF Pelatihan MPIG Pertemuan 1
                    </div> --}}
                    <a href="{{ $pelatihan->link_ppt }}" class="m-0 text-decoration-none text-purple">
                        Download Modul
                    </a>
                </div>
            </div>

            <div class="mt-3">
                <div class="d-flex align-items-end">
                    <h1 class="text-indigo m-0">
                        <i class="fa fa-file-video"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Video Tutorial {{ $pelatihan->judul }}
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="ml-2"></div>
                    <div class="ml-4">
                        <iframe width="560" height="315" src="{{ $pelatihan->link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>

            @if ($pelatihan->judul != 'Pertemuan 1')
                
            <a href="{{ route('user.training.show', $pelatihan->id) }}" class="mt-3 text-decoration-none d-flex align-items-end">
                <h1 class="text-info m-0">
                    <i class="fa fa-file-upload"></i>
                </h1>
                <div class="ml-2 text-dark">
                    Upload Submission
                </div>
            </a>

            @endif

            @endif
            
        </div>

        @endforeach

        

        {{-- EVALUASI PELATIHAN --}}
        {{-- <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Evaluasi Pelatihan
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex justify-content-between align-items-center">
                <a href="" data-toggle="modal" data-target="#evaluasiModal" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-signature"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Evaluasi pelatihan
                    </div>
                </a>

                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
            </div>
        </div> --}}


    </div>
</div>


{{-- MODAL --}}

{{-- MODAL PRE & POST TEST --}}
@foreach ($pelatihans as $pelatihan)
@if ($pelatihan->type == 'Tes')
<div class="modal fade" id="testModal{{ $pelatihan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">{{ $pelatihan->judul }}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times text-dark" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body border-0">
                @foreach ($progresss as $progress)
                @if ($progress->pelatihan->id == $pelatihan->id)
                @if ($progress->status == 1)
                <h5 class=" font-weight-bold">
                    Riwayat
                </h5>
                
                <div class="rounded bg-light2 px-3 py-3 my-2">
                    <div class=" d-flex justify-content-lg-between align-items-center">
                        <div class="bg-green px-2 py-1 text-white rounded">
                            <i class="fa fa-check"></i>
                            Done
                        </div>
                        <div>
                            <div>
                                {{ $progress->updated_at }}
                                {{-- Sunday, 07-10-2022 --}}
                            </div>
                            @if (str_contains($pelatihan->judul, 'Evaluasi'))
                            <div>
                                Nilai: {{ $nilai }}
                            </div>
                            <a href="{{ route('user.training.evaluation_review', $pelatihan->id) }}" class="text-decoration-none text-purple">
                                Review
                            </a>
                            @endif
                            
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>
            <div class="modal-footer border-0">
                @foreach ($progresss as $progress)
                @if ($progress->pelatihan->id == $pelatihan->id)
                @if ($progress->status == 0)
                <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan {{ $pelatihan->judul }}
                </a>
                @endif
                @elseif($loop->iteration == count($progresss))
                <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan {{ $pelatihan->judul }}
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
@endforeach

{{-- MODAL EVALUASI PELATIHAN --}}
{{-- <div class="modal fade" id="evaluasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">Evaluasi Pelatihan</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times text-dark" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body border-0">
                <h5 class=" font-weight-bold">
                    Riwayat
                </h5>
                <div class="rounded bg-light2 px-3 py-3 my-2">
                    <div class=" d-flex justify-content-lg-between align-items-center">
                        <div class="bg-green px-2 py-1 text-white rounded">
                            <i class="fa fa-check"></i>
                            Done
                        </div>
                        <div>
                            <div>
                                Sunday, 07-10-2022
                            </div>
                            <a href="" class="text-decoration-none text-purple">
                                Review
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="{{ route('user.training.evaluation_test') }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan Evaluasi Pelatihan
                </a>
            </div>
        </div>
    </div>
</div> --}}


@include('inc.footerLandingPage')

@endsection
