@extends('layouts.app')
@section('title', 'Survey')
@section('content')

<div class="row justify-content-center align-items-center vh-100">
    <div>
        <h1 class=" font-weight-bold text-dark">
            Mulai buat survey pertamamu
        </h1>
        <form action="{{ route('user.survey.createHistory', Auth::id()) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <button type="submit" class="btn btn-info px-5 py-2">
                <h4 class="m-0 font-weight-bold text-white ">
                    Next
                </h4>
            </button>
        </form>
    </div>
</div>

@endsection