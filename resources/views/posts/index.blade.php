@extends('layouts.container')

@section('content')
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New Post</a>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Created at {{$post->created_at}}</small>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection
