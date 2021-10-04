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
                {{-- <i class="fa fa-id-badge fa-lg" aria-hidden="true"></i> --}}
                <img src="{{ asset('img/assets/akun.png') }}"  alt="" width="25">
                <h5 class="m-0 ml-3 font-weight-bold">Akun Saya</h5>
            </a>
            <a data-toggle="collapse" href="#dataSaya" role="button" class="d-flex align-items-center border-bottom p-3 text-decoration-none text-dark">
                {{-- <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> --}}
                <img src="{{ asset('img/assets/data.png') }}" alt="" width="25">
                <h5 class="m-0 ml-3 font-weight-bold">Data saya</h5>
            </a>
            <a data-toggle="modal" data-target="#logoutModal" role="button" class="d-flex align-items-center text-dark p-3 text-decoration-none">
                {{-- <i class="fa fa-sign-out-alt fa-lg text-danger" aria-hidden="true"></i> --}}
                <img src="{{ asset('img/assets/logout.png') }}"  alt="" width="25">
                <h5 class="m-0 ml-3 font-weight-bold text-danger">Logout</h5>
            </a>
        </div>
        <div class="col-8 justify-content-center" id="cardProfile">
            {{-- AKUN SAYA --}}
            <div class="collapse show" id="akunSaya" data-parent="#cardProfile">
                <div class="d-flex">
                    <div class=" pl-2 pr-4 mr-4 position-relative">
                        <img class="img-profile rounded-circle" src="{{ asset('img/profilepic.png') }}" width="120">
                        <img src="{{ asset('img/assets/edit.png') }}" alt="" width="40" class="position-absolute" style="right: 10%; top: 11%;">
                        {{-- <i class="fas fa-pencil-alt text-white p-3 rounded-circle bg-info position-absolute" style="right: 10%; top: 11%;" aria-hidden="true"></i> --}}
                    </div>
                    <div class="w-100">
                        <h4 class="font-weight-bold">
                            Akun Saya
                        </h4>
                        <div class="py-4">
                            <form action="" method="post">
                                {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label class="font-weight-bold">Username</label>
                                    <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" required>
                                </div> --}}
                                <div class="form-group">
                                    <label class="font-weight-bold">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required disabled>
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
                    <form action="{{ route('user.profile.update', Auth::user()->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Usia</label>
                            <input type="number" class="form-control" name="usia" placeholder="Masukkan Usia" value="{{ Auth::user()->usia }}" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="custom-select">
                                @if (Auth::user()->jenis_kelamin != null)
                                <option hidden value="{{ Auth::user()->jenis_kelamin }}">{{ Auth::user()->jenis_kelamin }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->jenis_kelamin }}">Pilih</option>
                                @endif
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Status Pernikahan</label>
                            <select name="status_pernikahan" class="custom-select">
                                @if (Auth::user()->status_pernikahan != null)
                                <option hidden value="{{ Auth::user()->status_pernikahan }}">{{ Auth::user()->status_pernikahan }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->status_pernikahan }}">Pilih</option>
                                @endif
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                        {{-- INI BELUM ADA DI DB --}}
                        {{-- <div class="form-group">
                            <label class="font-weight-bold">Status Pasangan Anda <span class="text-gray-700 font-weight-normal"> (Khusus yang sudah menikah)</span></label>
                            <select name="status_pasangan" class="custom-select">
                                <option hidden value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Anak</label>
                            <input type="number" class="form-control" name="jumlah_anak" placeholder="Masukkan jumlah anak" value="{{ Auth::user()->jumlah_anak }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Asal Sekolah <span class="text-gray-700 font-weight-normal"> (Tempat Bekerja)</span></label>
                            {{-- <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukkan nama sekolah"> --}}
                            <select name="asal_sekolah" class="custom-select">
                                @if (Auth::user()->asal_sekolah != null)
                                <option hidden value="{{ Auth::user()->asal_sekolah }}">{{ Auth::user()->asal_sekolah }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->asal_sekolah }}">Pilih</option>
                                @endif
                                <option value="Sekolah Kristen Kalam Kudus Solo">Sekolah Kristen Kalam Kudus Solo</option>
                                <option value="Sekolah Bopkri Yogyakarta">Sekolah Bopkri Yogyakarta</option>
                                <option value="Sekolah Citra Berkat Surabaya">Sekolah Citra Berkat Surabaya</option>
                                <option value="Sekolah Kristen Tri Tunggal Semarang">Sekolah Kristen Tri Tunggal Semarang</option>
                                <option value="Sekolah Kristen Kalam Kudus Malang">Sekolah Kristen Kalam Kudus Malang</option>
                                <option value="Sekolah Lab Kristen Satya Wacana Salatiga">Sekolah Lab Kristen Satya Wacana Salatiga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Lama Mengajar di Sekolah Tersebut</label>
                            <input type="number" class="form-control" name="lama_mengajar" placeholder="Masukkan lama mengajar" value="{{ Auth::user()->lama_mengajar }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jenjang Mengajar <span class="text-gray-700 font-weight-normal"> (Pilih 1 yang paling utama)</span></label>
                            <select name="jenjang_mengajar" class="custom-select">
                                @if (Auth::user()->jenjang_mengajar != null)
                                <option hidden value="{{ Auth::user()->jenjang_mengajar }}">{{ Auth::user()->jenjang_mengajar }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->jenjang_mengajar }}">Pilih</option>
                                @endif
                                <option value="PG/TK">PG/TK</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                            </select>
                        </div>
                        {{-- INI PAKE YANG MANA --}}
                        <div class="form-group">
                            <label class="font-weight-bold">Mengajar di Kelas <span class="text-gray-700 font-weight-normal"> (Boleh lebih dari 1)</span></label>
                            <input type="text" class="form-control" name="mata_pelajaran" placeholder="E.g Playgroup, SD kelas 5, SMP kelas 2...">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mata Pelajaran yang Diampu <span class="text-gray-700 font-weight-normal"> (Boleh lebih dari 1)</span></label>
                            <input type="text" class="form-control" name="mata_pelajaran" placeholder="E.g Matematika, Sains, IPS..." value="{{ Auth::user()->mata_pelajaran }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pendidikan Tertinggi</label>
                            <select name="pendidikan" class="custom-select">
                                @if (Auth::user()->pendidikan != null)
                                <option hidden value="{{ Auth::user()->pendidikan }}">{{ Auth::user()->pendidikan }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->pendidikan }}">Pilih</option>
                                @endif
                                <option value="SLTA">SLTA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Latar Belakang Pendidikan di Perguruan Tinggi</label>
                            <select name="isIlmuPendidikan" class="custom-select">
                                @if (Auth::user()->isIlmuPendidikan != null)
                                <option hidden value="{{ Auth::user()->isIlmuPendidikan }}">{{ Auth::user()->isIlmuPendidikan }}</option>
                                @else
                                <option hidden value="{{ Auth::user()->isIlmuPendidikan }}">Pilih</option>
                                @endif
                                <option value="1">Ilmu Kependidikan (FKIP/PGSD/PGTK)</option>
                                <option value="0">Non Kependidikan</option>
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