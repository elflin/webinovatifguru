@extends('layouts.app')
@section('title', 'Evaluasi')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="row justify-content-center py-4">
    <div class=" d-flex align-items-center rounded py-4 px-4 bg-softPurple position-relative">
        <h4 class="text-info font-weight-bold m-0 ml-5 pl-5 float-right">Evaluasi Pelatihan</h4>
        <img src="{{ asset('img/assets/ilustrasi guru 2.png') }}" alt="" width="100" class=" position-absolute" style="left: 1; bottom: 0">
    </div>
</div>

<div class="container mt-2">
    {{-- LOOP --}}
    <form action="{{ route('user.survey.store') }}" method="post">
        {{ csrf_field() }}
        <div class="my-5">
            <div class="d-flex">
                <h5 class=" font-weight-bold">
                    1
                </h5>
                <h5 class=" font-weight-bold ml-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum excepturi minima molestiae, debitis dolores nisi numquam itaque alias aut eveniet ut consectetur quasi at mollitia quod velit similique consequatur culpa, sed sapiente. Suscipit a cum fuga commodi est magnam tenetur dignissimos voluptates perferendis magni nihil, quis molestiae temporibus accusamus ducimus.
                </h5>
            </div>
            <div class="mx-4 rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                <div class="px-5 w-100">
                    <div class="d-flex justify-content-between px-5 w-100">
                        <div class="text-center">
                            <div>
                            <input type="radio" name="" id="">
                            </div>
                            STS
                        </div>
                        <div class="text-center">
                            <div>
                            <input type="radio" name="" id="">
                            </div>
                            TS
                        </div>
                        <div class="text-center">
                            <div>
                            <input type="radio" name="" id="">
                            </div>
                            R
                        </div>
                        <div class="text-center">
                            <div>
                            <input type="radio" name="" id="">
                            </div>
                            S
                        </div>
                        <div class="text-center">
                            <div>
                            <input type="radio" name="" id="">
                            </div>
                            SS
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class=" mx-4">
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="" value="1" required>
                    <span class="mx-2">Sangat jarang</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="" value="2" required>
                    <span class="mx-2">Jarang</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="" value="3" required>
                    <span class="mx-2">Cukup</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="" value="4" required>
                    <span class="mx-2">Sering</span>
                </label>
                <label class="rounded my-3 p-3 bg-light3 d-flex align-items-center cursor-pointer">
                    <input type="radio" name="" value="5" required>
                    <span class="mx-2">Sangat sering</span>
                </label>
            </div> --}}
        </div>
        {{-- <input type="hidden" value="{{ $loop->iteration }}" name="jumlahSoal"> --}}
        {{-- <input type="hidden" value="{{ $soal->id }}" name="soalId{{ $loop->iteration }}"> --}}
        <button type="submit" class=" w-100 btn btn-info text-white font-weight-bold py-3" id="submitSoal" disabled="disabled">
            Selesai
        </button>
    </form>
</div>



@include('inc.footerLandingPage')

<script>
    $("input:radio").change(function () {$("#submitSoal").prop("disabled", false);});
</script>

@endsection
