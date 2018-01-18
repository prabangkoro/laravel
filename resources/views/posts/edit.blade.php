@extends('layouts.container')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Blog Post') !!}
            {!! Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text', 'id' => 'txtEditor']) !!}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-sm']) !!}
        <a href="/posts/{{ $post->id }}" class="btn btn-danger btn-sm">Cancel</a>
        {!! Form::hidden('_method', 'PUT') !!}
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('txtEditor');
    </script>
@endsection
