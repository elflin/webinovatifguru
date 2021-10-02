@extends('layouts.app')

@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">Perilaku Inovatif Guru</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute" style="left: 1; bottom: 0">
    </div>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
        <div class="my-5">
            <div class="d-flex">
                <h5 class=" font-weight-bold">
                    1.
                </h5>
                <h5 class=" font-weight-bold ml-3">
                    Lorem ipsum is a simply and simple text?
                </h5>
            </div>
            <div class=" mx-4">
                <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                    <input type="radio" name="foo" value="1">
                    <span class="mx-2">Sangat Setuju</span>
                </div>
                <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                    <input type="radio" name="foo" value="1">
                    <span class="mx-2">Setuju</span>
                </div>
                <div class="rounded my-3 p-3 bg-light2 d-flex align-items-center">
                    <input type="radio" name="foo" value="1">
                    <span class="mx-2">Tidak Setuju</span>
                </div>
            </div>
        </div>
        <button type="submit" class=" w-100 btn btn-info text-white font-weight-bold py-3">
            Selesai
        </button>
    </form>
</div>

@include('inc.footerLandingPage')

@endsection
