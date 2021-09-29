@extends('layouts.app')

@section('content')

<div class="row align-items-center">
    <div class="col-4">
        <img src="{{ asset('img/dummy/loginpic.PNG') }}" alt="" class="vh-100">
    </div>
    <div class="col-8 justify-content-center">
        <div class="w-50 m-auto">
            <div class="d-flex justify-content-lg-center">
                <img src="{{ asset('img/logo/logogram.png') }}" alt="" width="100" class="">
            </div>
            <div class="py-4 text-center">
                <h1 class="font-weight-bold">
                    Login
                </h1>
                <p>
                    Anda perlu masuk untuk mendapatkan akses lengkap
                </p>
            </div>
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="font-weight-bold">Username/Email</label>
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
                <div class="text-right">
                    <a href="" class="text-info font-weight-bold">
                        Lupa Kata Sandi?
                    </a>
                </div>
                <div class="text-center py-4">
                    <button type="submit" class="btn btn-info w-100 font-weight-bold">Masuk</button>
                </div>
                <p class="text-center">
                    Belum memiliki akun?
                    <a href="" class="text-info font-weight-bold">Register sekarang</a>
                </p>
            </form>                
        </div>
    </div>
</div>

{{-- DUMMY LARAVEL LOGIN --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
