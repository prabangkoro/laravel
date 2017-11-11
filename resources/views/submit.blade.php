@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Submit Link</h1>
        <form class="" action="/submit" method="post">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Please fix these errors.
                </div>
            @endif

            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                @if($errors->has('url'))
                    <span class="help-block">{{ $errors->first('url') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" placeholder="desc">{{ old('desc') }}</textarea>
                @if($errors->has('desc'))
                    <span class="help-block">{{ $errors->first('desc') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection
