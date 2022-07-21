@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="row align-items-center">
    <div class="col-4">
        <img src="{{ asset('img/foto/fototes.jpg') }}" alt="" class="vh-100">
    </div>
    <div class="col-8 justify-content-center vh-100 overflow-auto">
        <div class="w-50 m-auto">
            <div class="py-4 text-center">
                <h1 class="font-weight-bold">
                    Register
                </h1>
                <p>
                    Lengkapi data-data di bawah ini untuk mendaftar
                </p>
            </div>
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" name="email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Kata Sandi</label>
                    <input type="password" class="form-control" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Ulang Kata Sandi</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                    {{-- @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                </div>
                
                {{-- melengkapi data diri --}}
                <div class="form-group">
                    <label class="font-weight-bold">Username</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Usia</label>
                    <input type="number" class="form-control" name="usia" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Jumlah Anak</label>
                    <input type="number" class="form-control" name="jumlah_anak" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Lama Mengajar (Tahun)</label>
                    <input type="number" class="form-control" name="lama_mengajar" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Jenjang Mengajar</label>
                    <input type="text" class="form-control" name="jenjang_mengajar" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" required>
                </div>
                
                <input type="hidden" value="1" name="isIlmuPendidikan">
                <input type="hidden" value="0" name="isAdmin">

                <div class="text-center py-4">
                    <button type="submit" class="btn btn-info w-100 font-weight-bold">Daftar</button>
                </div>
                <p class="text-center">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}" class="text-info font-weight-bold">Log in disini</a>
                </p>
            </form>                
        </div>
    </div>
</div>

<script>
var firebaseConfig = {
    apiKey: "AIzaSyCb-NMtQxV9KQ-jJaHqwPUTW9tD1YHWVCA",
    authDomain: "inovatif-guru.firebaseapp.com",
    projectId: "inovatif-guru",
    storageBucket: "inovatif-guru.appspot.com",
    messagingSenderId: "504283108606",
    appId: "1:504283108606:web:94195aac661ad2463bc1af",
    measurementId: "G-VF4R7MR80N"
};
</script>

@endsection 


{{-- DUMMY LARAVEL REGISTER --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
