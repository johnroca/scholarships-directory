<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 90%;    
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            input[name="search"] {
                height: 25px;
                width: 90%;
                font-size: .3em;
                padding: 1em;
                text-transform: uppercase;
                font-weight: 1;
            }

            .result {
                text-align: left;
            }

            .scholarship {
                padding: 0px 2em;
                border-bottom : 1px solid #8BA576;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <form action="/search" method="GET">
                        <input class="" type="text" name="search" value="{{ $search }}" placeholder="Search Scholarship">
                    </form>
                </div>
                <div class="result">
                    @foreach($scholarships as $scholarship)
                        <div class="scholarship">
                            <h1>{{ $scholarship->title }}</h1>
                            <h2>{{ $scholarship->provider }}</h2>
                            <p>{{ $scholarship->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
