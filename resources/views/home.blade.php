@extends('layouts.app')

@section('title','ポートフォリオ')
    

@section('content')
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
            <a href="/show"><button type="button" class="nes-btn is-primary p-mypage__btn">あんけん</button></a>
        </div>
        <div class="p-mypage__btn-container">
            <a href="/portfolio"><button type="button" class="nes-btn is-primary p-mypage__btn">ポートフォリオ</button></a> 
            <a href="/kakunin"><button type="button" class="nes-btn is-primary p-mypage__btn">かくにん</button></a> 
            <a href="/company"><button type="button" class="nes-btn is-primary p-mypage__btn">きぎょう</button></a> 
        </div>  
</div>
@endsection
