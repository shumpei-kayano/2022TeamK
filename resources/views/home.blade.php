@extends('layouts.app')

@section('content')
<div class="c-full">
    <div class="p-mypage">
        <div class="nes-container is-dark with-title p-mypage__container">
            <p class="title">マイページ</p>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="p-mypage__btn-container">
                <a href="/account"><button type="button" class="nes-btn is-primary p-mypage__btn">アカウント</button></a> 
                <a href="/favorite"><button type="button" class="nes-btn is-primary p-mypage__btn">お気に入り</button></a> 
                <a href="/show"><button type="button" class="nes-btn is-primary p-mypage__btn">あんけんけんさく</button></a> 
                <a href="/portfolio"><button type="button" class="nes-btn is-primary p-mypage__btn">ポートフォリオ</button></a> 
                <a href="/company"><button type="button" class="nes-btn is-primary p-mypage__btn">きぎょう</button></a> 
            </div>
        </div>  
    </div>
</div>
@endsection
