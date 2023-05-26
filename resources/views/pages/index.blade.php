@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>{{ $title }}</h1>
            <p>Join Milton Financial Today and become part of the country's biggest banking community.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
        </div>

        <div class="w-100 p-3" style="background-color: dark-gray;">
            @include('inc.carousel')
        </div>
    </div>

    <div>
        @include('inc.footer')
    </div>
@endsection
