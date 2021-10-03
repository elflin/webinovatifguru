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
                Halo, {{ Auth::user()->name }}!
            </h1>
            <h4 class="text-white align-items-center my-3">
                Selamat datang di beranda Anda.
            </h4>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-4">
            <a data-toggle="collapse" href="#akunSaya" role="button" class=" active d-flex align-items-center border-bottom p-3 text-decoration-none text-dark">
                <i class="fa fa-id-badge fa-lg" aria-hidden="true"></i>
                <h5 class="m-0 ml-3 font-weight-bold">Akun Saya</h5>
            </a>
            <a data-toggle="collapse" href="#dataSaya" role="button" class="d-flex align-items-center border-bottom p-3 text-decoration-none text-dark">
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                <h5 class="m-0 ml-3 font-weight-bold">Data saya</h5>
            </a>
            <a data-toggle="modal" data-target="#logoutModal" role="button" class="d-flex align-items-center text-dark p-3">
                <i class="fa fa-sign-out-alt fa-lg text-danger" aria-hidden="true"></i>
                <h5 class="m-0 ml-3 font-weight-bold text-danger">Logout</h5>
            </a>
        </div>
        <div class="col-8 justify-content-center" id="cardProfile">
            {{-- AKUN SAYA --}}
            <div class="collapse show" id="akunSaya" data-parent="#cardProfile">
                <div class="d-flex">
                    <div class=" pl-2 pr-4 mr-4 position-relative">
                        <img class="img-profile rounded-circle" src="{{ asset('img/profilepic.png') }}" width="120">
                        <i class="fas fa-pencil-alt text-white p-3 rounded-circle bg-info position-absolute" style="right: 10%; top: 11%;" aria-hidden="true"></i>
                    </div>
                    <div class="w-100">
                        <h4 class="font-weight-bold">
                            Akun Saya
                        </h4>
                        <div class="py-4">
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="font-weight-bold">Username</label>
                                    <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-info px-4 font-weight-bold">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <h4 class="mt-5 font-weight-bold">
                            Ganti Kata Sandi
                        </h4>
                        <div class="py-4">
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="font-weight-bold">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Kata Sandi Baru</label>
                                    <input type="password" class="form-control" name="new-password" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Konfirmasi Kata Sandi Baru</label>
                                    <input type="password" class="form-control" name="confirm-new-password" required>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-info px-4 font-weight-bold">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA SAYA --}}
            <div class="collapse" id="dataSaya" data-parent="#cardProfile">
                <h4 class="font-weight-bold">
                    Data Saya
                </h4>
                <div class="py-4">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Usia</label>
                            <input type="email" class="form-control" name="usia" placeholder="Masukkan Usia" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Status Pernikahan</label>
                            <select name="status_pernikahan" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        {{-- INI BELUM ADA DI DB --}}
                        <div class="form-group">
                            <label class="font-weight-bold">Status Pasangan Anda <span class="text-gray-700 font-weight-normal"> (Khusus yang sudah menikah)</span></label>
                            <select name="status_pasangan" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Anak</label>
                            <input type="number" class="form-control" name="jumlah_anak" placeholder="Masukkan jumlah anak">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Asal Sekolah <span class="text-gray-700 font-weight-normal"> (Tempat Bekerja)</span></label>
                            <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukkan nama sekolah">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Lama Mengajar di Sekolah Tersebut</label>
                            <input type="text" class="form-control" name="lama_mengajar" placeholder="Masukkan lama mengajar">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jenjang Mengajar <span class="text-gray-700 font-weight-normal"> (Pilih 1 yang paling utama)</span></label>
                            <select name="jenjang_mengajar" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mengajar di Kelas <span class="text-gray-700 font-weight-normal"> (Boleh lebih dari 1)</span></label>
                            <input type="text" class="form-control" name="mata_pelajaran" placeholder="E.g Playgroup, SD kelas 5, SMP kelas 2...">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mata Pelajaran yang Diampu <span class="text-gray-700 font-weight-normal"> (Boleh lebih dari 1)</span></label>
                            <input type="text" class="form-control" name="mata_pelajaran" placeholder="E.g Matematika, Sains, IPS...">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pendidikan Tertinggi</label>
                            <select name="pendidikan" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Latar Belakang Pendidikan di Perguruan Tinggi</label>
                            <select name="isIlmuPendidikan" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-info px-4 font-weight-bold">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footerLandingPage')

@endsection