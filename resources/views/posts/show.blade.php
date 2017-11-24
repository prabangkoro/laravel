@extends('layouts.container')

@section('content')
    <div class="well">
        <h3>{{$post->title}}</h3>
        <small>Created at {{$post->created_at}}</small>
        <p>{!! $post->body !!}</p>
        <a href="/posts" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-menu-left"></span> All Posts</a>
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success btn-sm">Edit</a>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'class' => 'pull-right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    </div>
@endsection
