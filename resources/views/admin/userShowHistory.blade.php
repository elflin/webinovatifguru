@extends('layouts.app')
@section('title', 'User')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $user->name }}</h1>
        </div>

        <!-- Content Row -->
        <div class="card shadow p-4 mb-4">
            <div class="d-flex">
                <div class="col-lg-5">
                    <div class="d-flex">
                        <p class="col-3"><b>Nama</b></p>
                        <p>: {{ $user->name }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Email</b></p>
                        <p>: {{ $user->email }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Usia</b></p>
                        <p>: {{ $user->usia }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Jenis Kelamin</b></p>
                        <p>: {{ $user->jenis_kelamin }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Status</b></p>
                        <p>: {{ $user->status_pernikahan }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Jumlah anak</b></p>
                        <p>: {{ $user->jumlah_anak }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Asal Sekolah</b></p>
                        <p>: {{ $user->asal_sekolah }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex">
                        <p class="col-3"><b>Lama mengajar</b></p>
                        <p>: {{ $user->lama_mengajar }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Jenjang</b></p>
                        <p>: {{ $user->jenjang_mengajar }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Mata pelajaran</b></p>
                        <p>: {{ $user->mata_pelajaran }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Pendidikan</b></p>
                        <p>: {{ $user->pendidikan }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>isIlmuPendidikan</b></p>
                        <p>: {{ $user->isIlmuPendidikan }}</p>
                    </div>
                    <div class="d-flex">
                        <p class="col-3"><b>Role</b></p>
                        <p>: {{ $user->isAdmin }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card shadow p-4">
        <div class="d-sm-flex align-items-center mb-4">
            <h4 class="h4 mb-0 text-gray-800">Riwayat Jawaban</h4>
        </div>
        @foreach ($history->soal as $soal)
        <div class="d-flex">
            <h5 class="h5 mb-0 text-gray-800 mt-0 mr-3 ml-3"><b>{{ $loop->iteration }}</b></h5>
            <p>
                {{ $soal->soal }}
            </p>
        </div>
        <div class="ml-5 w-25">
            <div class="d-flex justify-content-lg-between">
                <label class="d-flex flex-column align-items-center">
                    1
                    <input type="radio" name="foo" value="1" disabled
                    @foreach ($jawabans as $jawaban)
                        @if ($jawaban->soalId == $soal->id)
                            @if ($jawaban->nilai == 1)
                                checked
                            @endif
                        @endif
                    @endforeach
                    >
                </label>
                <label class="d-flex flex-column align-items-center">
                    2
                    <input type="radio" name="foo" value="2" disabled
                    @foreach ($jawabans as $jawaban)
                        @if ($jawaban->soalId == $soal->id)
                            @if ($jawaban->nilai == 2)
                                checked
                            @endif
                        @endif
                    @endforeach
                    >
                </label>
                <label class="d-flex flex-column align-items-center">
                    3
                    <input type="radio" name="foo" value="3" disabled
                    @foreach ($jawabans as $jawaban)
                        @if ($jawaban->soalId == $soal->id)
                            @if ($jawaban->nilai == 3)
                                checked
                            @endif
                        @endif
                    @endforeach
                    >
                </label>
                <label class="d-flex flex-column align-items-center">
                    4
                    <input type="radio" name="foo" value="4" disabled
                    @foreach ($jawabans as $jawaban)
                        @if ($jawaban->soalId == $soal->id)
                            @if ($jawaban->nilai == 4)
                                checked
                            @endif
                        @endif
                    @endforeach
                    >
                </label>
                <label class="d-flex flex-column align-items-center">
                    5
                    <input type="radio" name="foo" value="5" disabled
                    @foreach ($jawabans as $jawaban)
                        @if ($jawaban->soalId == $soal->id)
                            @if ($jawaban->nilai == 5)
                                checked
                            @endif
                        @endif
                    @endforeach
                    >
                </label>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        @endforeach
    </div> --}}
        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-purple">Data Survey</h6>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Perilaku</th>
                            <th>Intensi</th>
                            <th>Sikap</th>
                            <th>Norma</th>
                            <th>Efikasi</th>
                            <th>Budaya</th>
                            <th>Determinasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historyList as $hl)
                            <tr>
                                <td>{{ $hl['historyId'] }}</td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyPerilaku-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyIntensi-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historySikap-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyNorma-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyEfikasi-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyBudaya-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#historyDetermination-{{ $hl['historyId'] }}">
                                        Cek Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-purple">Data Pelatihan</h6>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Jawaban</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($progresses as $progress)
                            @php
                                $skor = 0;
                                foreach ($progress->pelatihan->test_soal as $key => $test_soal) {
                                    foreach ($test_soal->test_jawaban as $test_jawaban) {
                                        if ($test_jawaban->progress) {
                                            if ($test_jawaban->progress->progress_histories->uid == $user->id) {
                                                if ($test_jawaban->jawaban == $test_soal->kunci) {
                                                    $skor += 1;
                                                }
                                            }
                                        }
                                    }
                                }
                            @endphp
                            <tr>
                                <td>{{ $progress->pelatihan->id }}</td>
                                <td><a
                                        href="{{ route('admin.pelatihan.show', $progress->pelatihan->id) }}">{{ $progress->pelatihan->judul }}</a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal"
                                        data-target="#jawabanPelatihan-{{ $progress->pelatihan->id }}">
                                        Cek Jawaban
                                    </a>
                                </td>
                                <td>{{ $skor }}/{{ $progress->pelatihan->test_soal->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-purple">Data Submission</h6>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pelatihan</th>
                            <th>Submission</th>
                        </tr>
                    </thead>
                    @if ($user->progress_history->count() > 0)
                        <tbody>
                            @foreach ($user->progress_history->first()->progress as $progress)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $progress->pelatihan->judul }}</td>
                                    <td>
                                        @if ($progress->path_submission)
                                            <a target="_blank"
                                                href="{{ asset('submission') . '/' . $progress->path_submission }}">File</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


    @foreach ($progresses as $progress)
        <div class="modal fade" id="jawabanPelatihan-{{ $progress->pelatihan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Jawaban Pelatihan
                            {{ $progress->pelatihan->no_item }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach ($progress->test_jawaban->sortBy('id_test_soal') as $test_jawaban)
                            <h5>{{ $loop->iteration }}. {{ $test_jawaban->test_soal->soal }}</h5>
                            Jawaban: {{ $test_jawaban->jawaban }}
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($historyList as $hl)
        <div class="modal fade" id="historyPerilaku-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Perilaku
                            Inovatif Guru</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Idea Generation</th>
                                <th>Idea Promotion</th>
                                <th>Idea Realization</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Perilaku Inovatif Guru'] }}</td>
                                <td>{{ $hl['value']['Perilaku Inovatif Guru'] }}</td>
                                <td>{{ $hl['dimensi']['Idea Generation'] }}</td>
                                <td>{{ $hl['dimensi']['Idea Promotion'] }}</td>
                                <td>{{ $hl['dimensi']['Idea Realization'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historyIntensi-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Perilaku
                            Inovatif Guru</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Intensi Berinovasi</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Intensi Berinovasi'] }}</td>
                                <td>{{ $hl['value']['Intensi Berinovasi'] }}</td>
                                <td>{{ $hl['dimensi']['Intensi Berinovasi'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historySikap-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Sikap
                            Terhadap Inovasi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Family Expectations For Creativity</th>
                                <th>Risk Of Tolerance</th>
                                <th>Openness To External Knowledge</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Sikap Terhadap Inovasi'] }}</td>
                                <td>{{ $hl['value']['Sikap Terhadap Inovasi'] }}</td>
                                <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
                                <td>{{ $hl['dimensi']['Risk Of Tolerance'] }}</td>
                                <td>{{ $hl['dimensi']['Openness To External Knowledge'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historyNorma-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Norma
                            Subyektif terhadap Kreativitas</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Family Expectations For Creativity</th>
                                <th>Leader Expectations For Creativity</th>
                                <th>Customer Expectations For Creativity</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Norma Subyektif terhadap Kreativitas'] }}</td>
                                <td>{{ $hl['value']['Norma Subyektif terhadap Kreativitas'] }}</td>
                                <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
                                <td>{{ $hl['dimensi']['Leader Expectations For Creativity'] }}</td>
                                <td>{{ $hl['dimensi']['Customer Expectations For Creativity'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historyEfikasi-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Efikasi
                            Berinovasi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Personal Assumptions/beliefs About Own Creativity</th>
                                <th>Evidence-based Assessment Of Creative Self-efficacy</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Efikasi Berinovasi'] }}</td>
                                <td>{{ $hl['value']['Efikasi Berinovasi'] }}</td>
                                <td>{{ $hl['dimensi']['Personal Assumptions/beliefs About Own Creativity'] }}</td>
                                <td>{{ $hl['dimensi']['Evidence-based Assessment Of Creative Self-efficacy'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historyBudaya-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} - Budaya
                            Organisasi Berorientasi Pembelajaran</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Commitment To Learning</th>
                                <th>Shared Vision</th>
                                <th>Open-mindedness</th>
                                <th>Intraorganizational Knowledge Sharing</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
                                <td>{{ $hl['value']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
                                <td>{{ $hl['dimensi']['Commitment To Learning'] }}</td>
                                <td>{{ $hl['dimensi']['Shared Vision'] }}</td>
                                <td>{{ $hl['dimensi']['Open-mindedness'] }}</td>
                                <td>{{ $hl['dimensi']['Intraorganizational Knowledge Sharing'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="historyDetermination-{{ $hl['historyId'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History ID: {{ $hl['historyId'] }} -
                            Self-Determination</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Variabel</th>
                                <th>Value</th>
                                <th>Intrinsic Motivation</th>
                                <th>Identified Regulation</th>
                            </tr>
                            <tr>
                                <td>{{ $hl['variabel']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
                                <td>{{ $hl['value']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
                                <td>{{ $hl['dimensi']['Intrinsic Motivation'] }}</td>
                                <td>{{ $hl['dimensi']['Identified Regulation'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End of Main Content -->

@endsection
