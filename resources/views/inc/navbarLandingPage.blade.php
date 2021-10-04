{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active p-4 d-flex align-items-center">
                <a class="nav-link font-weight-bold" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item p-4 d-flex align-items-center">
                <a class="nav-link font-weight-bold text-dark" href="#assessment">Assessment</a>
            </li>
            <li class="nav-item p-4 d-flex align-items-center">
                <a class="nav-link font-weight-bold text-dark" href="#">About Us</a>
            </li>
            <li class="p-4">
                <a href="/" class="sidebar-brand-icon">
                    <img src="{{ asset('img/logo/main-logo.png') }}" alt="" width="75">
                </a>
            </li>
            <li class="nav-item p-4 d-flex align-items-center">
                <a class="nav-link font-weight-bold text-dark" href="{{ route('contactUs') }}">Contact Us</a>
            </li>
            @if (Auth::check())
            <li class="nav-item pt-4 pl-4 pr-1 pb-4 d-flex align-items-center">
                <a href="{{ route('user.profile.index') }}">
                    <img class="img-profile rounded-circle"
                            src="{{ asset('img/profilepic.png') }}" width="50">
                </a>
            </li>
            <li class="nav-item pt-4 pb-4 d-flex align-items-center">
                <a class="nav-link text-info px-3 font-weight-bold" href="{{ route('user.profile.index') }}">Halo, {{ Auth::user()->name }}!</a>
            </li>
            @else
            <li class="nav-item pt-4 pb-4 pl-4 pr-1 d-flex align-items-center">
                <a class="nav-link btn btn-info px-3 text-white font-weight-bold" href="{{ route('login') }}">Masuk</a>
            </li>
            <li class="nav-item pt-4 pb-4 d-flex align-items-center">
                <a class="nav-link btn btn-outline-info text-info px-3 font-weight-bold" href="#">Daftar</a>
            </li>
            @endif
        </ul>
    </div>
</nav>