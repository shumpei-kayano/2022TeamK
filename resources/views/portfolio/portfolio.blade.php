@extends('layouts.app')

@section('title','ポートフォリオ')

@section('content')
<h1 class="p-form">ポートフォリオ</h1>
    <div class="portfolio">
        <div class="nes-container is-dark with-title portfolio__container">
            <a href="portfolioAdd"><button type="button" class="nes-btn is-primary portfolio__btn">ポートフォリオを<br>つくる</button></a>
            <a href="portfolioEdit"><button type="button" class="nes-btn is-warning portfolio__btn">ポートフォリオを<br>へんしゅうする</button></a>
            <a href="portfolioDel"><button type="button" class="nes-btn is-error portfolio__btn">ポートフォリオを<br>さくじょする</button></a>
        </div>
    </div>
@endsection