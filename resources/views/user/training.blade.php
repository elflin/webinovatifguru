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
            style="height: 30vh !important; background-image: url({{ asset('img/assets/zoom-pic.jpg') }}); background-size: cover; background-position: center;">
            <div class="w-100 row align-items-center m-0 p-0"
                style="height: 30vh; background: rgba(0, 0, 0, 0.3) !important;">
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
                    <img src="{{ asset('img/assets/photo_jimmy.jpg') }}" alt="" style=""
                        class="bg-gray-400 image-box">
                    <p class="ml-3 mt-3">
                        Dr. Jimmy Ellya Kurniawan, S.Psi., M.Si., Psikolog
                        adalah Ketua Peneliti Hibah "Model Perilaku Inovatif Guru" & Dosen Fakultas Psikologi Universitas
                        Ciputra Surabaya. Pengalamannya menjadi dosen sejak 1999 sampai dengan sekarang dengan jabatan
                        fungsional akademik Lektor Kepala. Bidang utama pengajaran dan penelitiannya adalah Psikologi Kerja
                        dan Entrepreneurship.
                        Email: jimmy.ellya@ciputra.ac.id
                    </p>
                </div>

                <div class="d-flex mt-3">
                    <img src="{{ asset('img/assets/photo_fang.jpg') }}" alt="" style=""
                        class="bg-gray-400 image-box">
                    <p class="ml-3 mt-3">
                        Kuncoro Dewi Rahmawati, S.Psi., M.Psi., Psikolog
                        adalah Anggota Peneliti Hibah "Model Perilaku Inovatif Guru" & Dosen Fakultas Psikologi Universitas
                        Ciputra Surabaya. Selain menjadi dosen, ia merupakan praktisi psikolog yang banyak berkecimpung
                        dalam dunia industri dan organisasi.
                        Email: kuncoro.dewi@ciputra.ac.id
                    </p>
                </div>

                <div class="d-flex mt-3">
                    <img src="{{ asset('img/assets/photo_evan.jpg') }}" alt="" style=""
                        class="bg-gray-400 image-box">
                    <p class="ml-3 mt-3">
                        Evan Tanuwijaya,S.Kom., M.Kom. adalah anggota Peneliti Hibah &quot;Model Perilaku Inovatif
                        Guru&quot; dan Dosen Fakultas Teknologi Informasi Universitas Ciputra Surabaya. Saya menjadi dosen
                        sejak tahun 2020 dan sebelum nya telah membantu dosen di Informatika UC sejak tahun 2015. Bidan
                        pengajaran dan penelitian saya adalah pembuatan aplikasi Android dan pemrosesan citra digital
                        menggunakan Deep Learning Email: evan.tanuwijaya@ciputra.ac.id
                    </p>
                </div>

            </div>

            {{-- INFORMED CONSENT --}}
            {{-- <div class="mt-4 bg-info w-100 py-4 position-relative">
                <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                    <div class="w-100 h-100 d-flex align-items-center">
                        <h2 class="ml-2 mt-2 font-weight-bold text-info">
                            Informed Consent
                        </h2>
                    </div>
                </div>
            </div>

            <div class=" mt-lg-3 mb-lg-5"> --}}
            {{-- <p>
                Ini adalah deskripsi dari informed consent.
            </p> --}}
            {{-- consent --}}
            {{-- <div class="d-flex align-items-end">
                    <h1 class="text-info m-0">
                        <i class="fa fa-file"></i>
                    </h1>
                    <div class="ml-2"> --}}
            {{-- <div class="m-0">
                        Sebuah template word yang bisa di download dan diupload ulang
                    </div> --}}
            {{-- <a href="https://zfrmz.com/g29AUq970kdTjiQHBdzu" target="_blank"
                            class="m-0 text-decoration-none text-purple">
                            Informed Consent Peserta Training Inovatif Guru
                        </a>
                    </div>
                </div>
            </div> --}}

            {{-- YEL-YEL --}}
            <div class="mt-4 bg-info w-100 py-4 position-relative">
                <div class="w-100 h-100 position-absolute bg-light" style="left: 8px; top: 0px;">
                    <div class="w-100 h-100 d-flex align-items-center">
                        <h2 class="ml-2 mt-2 font-weight-bold text-info">
                            Yel
                        </h2>
                    </div>
                </div>
            </div>

            <div class=" mt-lg-3 mb-lg-5">
                <p>
                    Ini adalah deskripsi dari yel.
                </p>
                {{-- consent --}}
                <div class="">
                    <div class="d-flex align-items-end">
                        <h1 class="text-indigo m-0">
                            <i class="fa fa-file-video"></i>
                        </h1>
                        <div class="ml-2 text-dark">
                            Video Yel Pelatihan Model Perilaku Inovatif Guru (versi awal)
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="ml-2"></div>
                        <div class="ml-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/fK6W5iUz5pc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>

            @foreach ($pelatihans as $pelatihan)
                @if ($pelatihan->type != 'tes' && $pelatihan->judul != 'Pertemuan 3: Memperkuat Intensi Berinovasi')
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
                        @if ($pelatihan->judul != 'Latihan Individu (Homework)')
                            <p>
                                {{ $pelatihan->deskripsi }}
                            </p>
                            {{-- test --}}
                            {{-- @if ($pelatihan->type == 'tes') --}}
                            {{-- <div class="d-flex justify-content-between align-items-center">
                    <a href="" data-toggle="modal" data-target="#testModal{{ $pelatihan->id }}" class="text-decoration-none d-flex align-items-end">
                        <h1 class="text-info m-0">
                            <i class="fa fa-file-signature"></i>
                        </h1>
                        <div class="ml-2 text-dark">
                            Kerjakan {{ $pelatihan->judul }}
                        </div>
                    </a> --}}
                            {{-- if udah selesai --}}
                            {{-- @foreach ($progresss as $progress)
                    @if ($progress->pelatihan->id == $pelatihan->id)
                    @if ($progress->status == 1)
                    <div class="bg-green px-2 py-1 text-white rounded">
                        <i class="fa fa-check"></i>
                        Done
                    </div>
                    @break
                    @endif
                    @endif
                    @endforeach
                    
                </div> --}}

                            {{-- materi --}}

                            <div class="d-flex align-items-end">
                                <h1 class="text-danger m-0">
                                    <i class="fa fa-file-pdf"></i>
                                </h1>
                                <div class="ml-2">
                                    {{-- <div class="m-0">
                            Modul PDF Pelatihan MPIG Pertemuan 1
                        </div> --}}
                                    <a href="https://guru-inovatif.com/modul/{{ $pelatihan->link_ppt }}"
                                        class="m-0 text-decoration-none text-purple">
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
                                        Video {{ $pelatihan->judul }}
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <div class="ml-2"></div>
                                    <div class="ml-4">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/{{ substr($pelatihan->link, -11) }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                        @endif


                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('user.training.show', $pelatihan->id) }}"
                                class="mt-3 text-decoration-none d-flex align-items-end">
                                <h1 class="text-info m-0">
                                    <i class="fa fa-file-upload"></i>
                                </h1>
                                <div class="ml-2 text-dark">
                                    Upload Submission
                                </div>
                            </a>

                            @foreach ($progresss as $progress)
                                @if ($progress->pelatihan->id == $pelatihan->id)
                                    @if ($progress->status == 1)
                                        <div class="bg-green px-2 py-1 text-white rounded">
                                            <i class="fa fa-check"></i>
                                            Done
                                        </div>
                                    @break
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
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
    {{-- @if ($pelatihan->type == 'tes')
            @php
                $tesAttempt = 0;
            @endphp
            <div class="modal fade" id="testModal{{ $pelatihan->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h4 class="modal-title text-info font-weight-bold" id="exampleModalLabel">
                                {{ $pelatihan->judul }}</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times text-dark" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body border-0">
                            @foreach ($progresss as $progress)
                                @if ($progress->pelatihan->id == $pelatihan->id)
                                    @if ($progress->status == 1)
                                        @if ($tesAttempt == 0)
                                            <h5 class=" font-weight-bold">
                                                Riwayat
                                            </h5>
                                        @endif
                                        @php
                                            $tesAttempt += 1;
                                        @endphp

                                        <div class="rounded bg-light2 px-3 py-3 my-2">
                                            <div class=" d-flex justify-content-lg-between align-items-center">
                                                <div class="bg-green px-2 py-1 text-white rounded">
                                                    <i class="fa fa-check"></i>
                                                    Done
                                                </div>
                                                <div>
                                                    <div>
                                                        {{ $progress->updated_at }} --}}
    {{-- Sunday, 07-10-2022 --}}
    {{-- </div>
                                                    @if (str_contains($pelatihan->judul, 'Evaluasi'))
                                                        <div>
                                                            Nilai: {{ $nilais[$tesAttempt - 1] }}
                                                        </div>
                                                        <a href="{{ route('user.training.evaluation_review', $progress->id) }}"
                                                            class="text-decoration-none text-purple">
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
                                        <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}"
                                            class=" w-100 btn btn-info text-white font-weight-bold py-3">
                                            Mulai Mengerjakan {{ $pelatihan->judul }}
                                        </a>
                                    @break

                                @elseif($progress->status == 1)
                                    @if ($tesAttempt == 2)
                                    @break

                                @elseif($tesAttempt == 1)
                                    <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}"
                                        class=" w-100 btn btn-info text-white font-weight-bold py-3">
                                        Mulai Mengerjakan {{ $pelatihan->judul }}
                                    </a>
                                @break
                            @endif


                        @endif
                    @elseif($loop->iteration == count($progresss))
                        <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}"
                            class=" w-100 btn btn-info text-white font-weight-bold py-3">
                            Mulai Mengerjakan {{ $pelatihan->judul }}
                        </a>
                    @endif
                @endforeach

                @if (empty($progresss[0]->id))
                    <a href="{{ str_contains($pelatihan->judul, 'Evaluasi') ? route('user.training.evaluation_test', $pelatihan->id) : route('user.training.test', $pelatihan->id) }}"
                        class=" w-100 btn btn-info text-white font-weight-bold py-3">
                        Mulai Mengerjakan {{ $pelatihan->judul }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endif --}}
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
