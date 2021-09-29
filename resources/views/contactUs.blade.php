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
                Contact Us
            </h1>
            <h4 class=" text-white align-items-center my-3">
                Kami akan membalas kembali melalui email maksimal 2 x 24 jam
            </h4>
        </div>
    </div>
</div>

<div class="container py-4">
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input type="number" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Asal Sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" required>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Email</label>
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Pesan</label>
            <textarea type="text" class="form-control" name="pesan"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-info w-100 font-weight-bold">Kirim</button>
        </div>
    </form>
</div>

@include('inc.footerLandingPage')

@endsection
