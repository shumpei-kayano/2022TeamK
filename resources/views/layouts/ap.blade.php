<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/toggle-menu.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <header class="p-header">
        <div class="p-header__inner">
            <h1 class="p-header__logo">
                <a class="" href="./index.html">
                    <img src="https://3.bp.blogspot.com/-la0WXIEj3Og/VA7mbmBn1UI/AAAAAAAAmQY/FlJynwAD9ro/s800/yuusya_game.png"
                        alt="ロゴ" width="100" height="100">
                </a>
            </h1>
            <div class="p-header__menu">
                <nav class="p-header__nav">
                    <ul class="p-header__ul">
                        <li><a href="./account">アカウント情報</a></li>
                        <li><a href="./favorite">お気に入りリスト</a></li>
                        <li><a href="">応募中案件</a></li>
                        <li><a href="./portfolio">ポートフォリオ</a></li>
                    </ul>
                </nav>
                <div class="p-header__btn"><a href="./show" class="btn"><button class="c-button">案件検索</button></a></div>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('main')
    </main>
    
    <footer class="p-footer">
        <ul class="p-footer__ul">
            <li><a href="./account">アカウント情報</a></li>
            <li><a href="/favorite">お気に入りリスト</a></li>
            <li><a href="">応募中案件</a></li>
            <li><a href="./portfolio">ポートフォリオ</a></li>
        </ul>
    </footer>
</body>

</html>