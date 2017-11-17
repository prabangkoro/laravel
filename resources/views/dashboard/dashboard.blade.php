@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <ul>
                            <li><a href="{{ Config::get('constants.URLLink') }}">Submit a link</a></li>
                            <li><a href="{{ Config::get('constants.URLArticle') }}">Article</a></li>
                            <li><a href="{{ Config::get('constants.URLGallery') }}">Gallery</a></li>
                            <li><a href="{{ Config::get('constants.URLQuote') }}">Quote</a></li>
                            <li><a href="{{ Config::get('constants.URLAbout') }}">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
