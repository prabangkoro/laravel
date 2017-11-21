@extends('layouts.container')

@section('content')
    <div class="well">
        <h3>{{$post->title}}</h3>
        <small>Created at {{$post->created_at}}</small>
        <p>{{$post->body}}</p>
        <a href="/posts" class="btn btn-primary btn-lg">Return</a>
    </div>
@endsection
