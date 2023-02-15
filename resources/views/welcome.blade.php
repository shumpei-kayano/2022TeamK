<!DOCTYPE html>

@section('content')

@section('title')
マッチングRPG
@endsection

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />    
        {{--  ゲーム風cssのnes.css読み込み  --}}
        <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
        <title>@yield('title')</title>

          <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>

    <style>
        body {
            background: url("/images/8bit.jpg") top center/cover;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;

        }
    </style>

    <body>

<div class="p-wel">
    <div class="p-wel__midasi">
        <h2>マッチングRPG</h2>
        {{-- <i class="nes-pokeball"></i> --}}
    </div>

        <div class="flex-center position-ref full-height p-wel__home">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <button type="button" class="nes-btn p-wel__btn" onclick="location.href='{{ url('/home') }}'">ホーム</button>
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                    @else
                    <button type="button" class="nes-btn p-wel__btn" onclick="location.href='{{ route('login') }}'">サインイン</button>
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        @if (Route::has('register'))
                        <button type="button" class="nes-btn p-wel__btn" onclick="location.href='{{ route('register') }}'">新規登録</button>
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    <div class=>
        <h3 class="p-wel__pr1">実務未経験から、実践で活躍できるエンジニアへ！</h3>
        <h4 class="p-wel__pr2">「情報系の勉強はしたけど、就職する自信がない。」「一緒に働きたくなるような人材が欲しい。」<br>
                                そんな人たちを助け、IT業界を盛り上げていく新感覚RPG。
        </h4>
    </div>

</div>




            {{-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div id="app">
            <example-component></example-component>
        </div> --}}
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
