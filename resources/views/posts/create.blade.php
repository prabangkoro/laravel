@extends('layouts.container')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Blog Post') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text', 'id' => 'txtEditor']) !!}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-sm']) !!}
        <a href="/posts" class="btn btn-danger btn-sm">Cancel</a>
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('txtEditor');
    </script>
@endsection
