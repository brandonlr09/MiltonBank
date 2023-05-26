@extends('layouts.app')

@section('content')
    <div class="container">
        <main class="container">
            @include('inc.messages')
        </main>
        <h1>Learning Center:</h1>
        <h2 class="text-center"> Article of the day</h2>
        <div class="container">
            @if (!is_null($post))
                <div class="justify-content-center border rounded bg-secondary">
                    <div class="p-5 m-5 justify-content-center text-center border rounded bg-light">
                        {{-- GENERATES A RANDOM IMAGE EACH TIME --}}
                        <img src="https://picsum.photos/600/100?random=1" class="card-img-top p-2 pb-4 rounded"
                            alt="A random image">
                        <h1 class="p-3">{{ $post->title ?? '' }}</h1>
                        <small>Written on {{ $post->created_at ?? '' }}</small>
                        <h3 class="card-text p-5 border border-info rounded">{{ $post->body ?? '' }}</h3>

                    </div>
                @else
                    <p class="text-center p-5 bg-light">No articles to show.</p>
            @endif
        </div>
    </div>
    </div>

    <div>
        @include('inc.footer')
    </div>
@endsection
