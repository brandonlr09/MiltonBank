@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        @if (count($services) > 0)
            <ul>
                @foreach ($services as $service)
                    <li class="list-group-item">{{ $service }}</li>
                @endforeach
            </ul>
        @endif
        <div class="p-3 rounded border border-info">
            <h2 class="p-3 text-center">{{ $calltag }}</h2>
            <h2 class="p-3 text-center">{{ $callnum }}</h2>
        </div>

        <img src="{{ asset('img/services1.jpg') }}" href="/randomArticle" class="d-block w-100 p-4"
            alt="save more for retirement">
    </div>
    <div>
        @include('inc.footer')
    </div>
@endsection
