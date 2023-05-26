@extends('layouts.app')

@section('content')
    <div class="container">
        <main class="container">
            @include('inc.messages')
        </main>
        <h1 class="p-5">Edit Article</h1>
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'post']) !!}
        <div class="form-group p-3">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group p-3">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body']) }}
        </div>

        {{-- SPOOF A PUT because laravel doesn't allow for a post route for update --}}
        {{ Form::hidden('_method', 'PUT') }}

        <div class="p-5">
            {{ Form::submit('Submit Article', ['class' => 'btn btn-primary']) }}
        </div>

        {!! Form::close() !!}
    </div>
    <div>
        @include('inc.footer')
    </div>
@endsection
