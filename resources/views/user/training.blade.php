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

        {{-- INFORMED CONSENT --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Informed Consent
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex align-items-center">
                <h1 class="text-primary m-0">
                    <i class="fa fa-file-word"></i>
                </h1>
                <div class="ml-2">
                    <div class="m-0">
                        Sebuah template word yang bisa di download dan diupload ulang
                    </div>
                    <a href="" class="m-0 text-decoration-none text-purple">
                        Download template
                    </a>
                </div>
            </div>

            <a href="{{ route('user.training.show', 1) }}" class="mt-3 text-decoration-none d-flex align-items-end">
                <h1 class="text-info m-0">
                    <i class="fa fa-file-upload"></i>
                </h1>
                <div class="ml-2 text-dark">
                    Upload Submission
                </div>
            </a>
        </div>

        {{-- PRE TEST --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Pre-test Learning
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex justify-content-between align-items-center">
                <a href="" data-toggle="modal" data-target="#pretestModal" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-signature"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Kerjakan pre-test
                    </div>
                </a>

                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
            </div>
        </div>

        {{-- PERTEMUAN 1 --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Pertemuan 1
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex align-items-center">
                <h1 class="text-danger m-0">
                    <i class="fa fa-file-pdf"></i>
                </h1>
                <div class="ml-2">
                    <div class="m-0">
                        Modul PDF Pelatihan MPIG Pertemuan 1
                    </div>
                    <a href="" class="m-0 text-decoration-none text-purple">
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
                        Video Tutorial Pertemuan 1 (dari youtube unlisted)
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="ml-2"></div>
                    <div class="ml-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/30MQJIg1R7g"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
        </div>

        {{-- PERTEMUAN 2 --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Pertemuan 2
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex align-items-center">
                <h1 class="text-danger m-0">
                    <i class="fa fa-file-pdf"></i>
                </h1>
                <div class="ml-2">
                    <div class="m-0">
                        Modul PDF Pelatihan MPIG Pertemuan 2
                    </div>
                    <a href="" class="m-0 text-decoration-none text-purple">
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
                        Video Tutorial Pertemuan 2 (dari youtube unlisted)
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="ml-2"></div>
                    <div class="ml-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/30MQJIg1R7g"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('user.training.show', 1) }}" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-upload"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Upload Submission
                    </div>
                </a>

                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
            </div>
        </div>

        {{-- PERTEMUAN 3 --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Pertemuan 3
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex align-items-center">
                <h1 class="text-danger m-0">
                    <i class="fa fa-file-pdf"></i>
                </h1>
                <div class="ml-2">
                    <div class="m-0">
                        Modul PDF Pelatihan MPIG Pertemuan 3
                    </div>
                    <a href="" class="m-0 text-decoration-none text-purple">
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
                        Video Tutorial Pertemuan 3 (dari youtube unlisted)
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="ml-2"></div>
                    <div class="ml-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/30MQJIg1R7g"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('user.training.show', 1) }}" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-upload"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Upload Submission
                    </div>
                </a>

                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
            </div>
        </div>

        {{-- POST TEST --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
            <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                <div class="w-100 h-100 d-flex align-items-center">
                    <h2 class="ml-2 mt-2 font-weight-bold text-info">
                        Post-test Learning
                    </h2>
                </div>
            </div>
        </div>

        <div class=" mt-lg-3 mb-lg-5">
            <div class="d-flex justify-content-between align-items-center">
                <a href="" data-toggle="modal" data-target="#posttestModal" class="text-decoration-none d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file-signature"></i>
                    </h1>
                    <div class="ml-2 text-dark">
                        Kerjakan post-test
                    </div>
                </a>

                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
            </div>
        </div>

        {{-- EVALUASI PELATIHAN --}}
        <div class="mt-4 bg-info w-100 py-4 position-relative">
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
        </div>


    </div>
</div>


{{-- MODAL --}}
{{-- MODAL PRE TEST --}}
<div class="modal fade" id="pretestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">Pre-test</h4>
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
                <a href="" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan Pre-test
                </a>
            </div>
        </div>
    </div>
</div>

{{-- MODAL POST TEST --}}
<div class="modal fade" id="posttestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">Post-test</h4>
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
                <a href="" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan Post-test
                </a>
            </div>
        </div>
    </div>
</div>

{{-- MODAL EVALUASI PELATIHAN --}}
<div class="modal fade" id="evaluasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a href="{{ route('user.training.evalutaion_test', 1) }}" class=" w-100 btn btn-info text-white font-weight-bold py-3">
                    Mulai Mengerjakan Evaluasi Pelatihan
                </a>
            </div>
        </div>
    </div>
</div>


@include('inc.footerLandingPage')

@endsection
