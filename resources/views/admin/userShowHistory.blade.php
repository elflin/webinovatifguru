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
    <div class="card shadow p-4">
        <div class="d-sm-flex align-items-center mb-4">
            <h4 class="h4 mb-0 text-gray-800">Riwayat Jawaban</h4>
        </div>
        {{-- dummy --}}
        <div class="d-flex">
            <h5 class="h5 mb-0 text-gray-800 mt-0 mr-3 ml-3"><b>1</b></h5>
            <p>
                Lorem Ipsum adalah contoh teks atau dummy dalam industri 
                percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah 
                menjadi standar contoh teks sejak tahun 1500an, saat seorang 
                tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan
                mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak 
                hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan
                huruf elektronik, tanpa ada perubahan apapun. Ia mulai 
                dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-
                lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem 
                Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing
                seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
            </p>
        </div>
        <div class="ml-5 w-25">
            <div class="d-flex justify-content-lg-between">
                <label class="d-flex flex-column align-items-center">
                    1
                    <input type="radio" name="foo" value="1" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    2
                    <input type="radio" name="foo" value="2" disabled checked>
                </label>
                <label class="d-flex flex-column align-items-center">
                    3
                    <input type="radio" name="foo" value="3" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    4
                    <input type="radio" name="foo" value="4" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    5
                    <input type="radio" name="foo" value="5" disabled>
                </label>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        {{-- end dummy --}}
        @foreach ($historyList as $history)
        <div class="d-flex">
            <h5 class="h5 mb-0 text-gray-800 mt-0 mr-3 ml-3"><b>{{ $loop->iteration }}</b></h5>
            <p>
                {{ $history->soal }}
            </p>
        </div>
        <div class="ml-5 w-25">
            <div class="d-flex justify-content-lg-between">
                <label class="d-flex flex-column align-items-center">
                    1
                    <input type="radio" name="foo" value="1" disabled
                    @if ($history->soal)
                        
                    @endif
                    >
                </label>
                <label class="d-flex flex-column align-items-center">
                    2
                    <input type="radio" name="foo" value="2" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    3
                    <input type="radio" name="foo" value="3" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    4
                    <input type="radio" name="foo" value="4" disabled>
                </label>
                <label class="d-flex flex-column align-items-center">
                    5
                    <input type="radio" name="foo" value="5" disabled>
                </label>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        @endforeach
    </div>
</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

@endsection