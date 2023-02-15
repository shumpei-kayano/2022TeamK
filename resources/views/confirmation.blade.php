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
        }
    </style>

    <body>
        <div class="p-mail">
            <h1>マッチングRPG</h1>
        </div>    
            <div class="p-mail__messe">
                <p>登録したメールアドレス宛に、仮登録メールを送信しました。<br>
                   記載されているURLから、本登録を行ってください。</p>
            </div>
    </body>
    {{-- <i class="nes-pokeball"></i> --}}