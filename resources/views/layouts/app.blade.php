<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />    
    {{--  ゲーム風cssのnes.css読み込み  --}}
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="c-nav">
            <div class="c-nav__container">
                <h1 class="c-nav__sitetitle">
                    <a class="nav__text" href="{{ url('/home') }}">
                        {{ config('app.name', 'マッチングRPG') }}
                    </a>
                </h1>
                {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>  --}}

                <div class="c-nav__container" id="navbarSupportedContent">
                    @auth
                        <!-- グローバルナビゲーション -->
                        <ul class="c-nav__ul">
                            <li class="c-nav__list"><a href="/account">アカウント</a></li>
                            {{-- <li class="c-nav__list"><a href="/favorite">お気に入り</a></li> --}}
                            <li class="c-nav__list"><a href="{{ route('favorite_list')}}">お気に入り</a></li>
                            <li class="c-nav__list"><a href="/show">案件検索</a></li>
                            <li class="c-nav__list"><a href="/portfolio">ポートフォリオ</a></li>
                            <li class="c-nav__list"><a href="/company">企業</a></li>
                            <li class="c-nav__list"><a href="/kakunin">確認</a></li>
                        </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto user-info">
                        <!-- Authentication Links -->
                        @guest
                            {{--  <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('サインイン') }}</a>
                            </li>  --}}
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('サインアップ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}さん
                                    <span class="level">
                                        @php
                                            $id = Auth::user()->id;
                                            $users = DB::table('users')->find($id);
                                            $total_exe = $users->total_experience;
                                            $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
                                            $rank = $ranks->rank;
                                        @endphp
                                        ランク{{$rank}}
                                    </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('サインアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="c-full">
        @yield('content')
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
