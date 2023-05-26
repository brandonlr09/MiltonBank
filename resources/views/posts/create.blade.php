@extends('layouts.app')

@section('content')
    <div class="container">
        <main class="container">
            @include('inc.messages')
        </main>
        <h1 class="p-5">Create Article</h1>
        {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'post']) !!}
        <div class="form-group p-3">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group p-3">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body']) }}
        </div>

        <div class="p-5">
            {{ Form::submit('Submit Article', ['class' => 'btn btn-primary']) }}
        </div>

        {!! Form::close() !!}

        <div>
            @include('inc.footer')
        </div>
    @endsection
