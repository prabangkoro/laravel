@extends('layouts.container')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Create Post</a>
                    <h2>Post</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
