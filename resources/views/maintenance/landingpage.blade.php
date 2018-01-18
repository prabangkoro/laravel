<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name', 'BabangCreator') }}</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">{{ config('app.name', 'BabangCreator') }}</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavbarMenu" aria-controls="NavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="glyphicon glyphicon-th-list"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="NavbarMenu">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron text-center">
                <h1>Welcome to babangcreator.com!</h1>
                <p>We are so sorry for the inconvinient, unfortunately, our website is under maintenance.</p>
                <p>We hope to see you soon with our fresh website!</p>
                <p>
                    <a href="http://babangcreator.tumblr.com/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-log-in"></span>      Go to My Tumblr</a>
                </p>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>