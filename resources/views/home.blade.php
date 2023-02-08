@extends('layouts.app')

@section('title','ポートフォリオ')
    

@section('content')

<style>
    table {
            border-collapse: collapse;
            width: 100%;
            }
 th,td {
  padding: 1rem 2rem;
  text-align: center;
  border-bottom: 1px solid rgb(217, 206, 206);
  border-color: rgb(217, 206, 206);
 }

 th {
  position: sticky;
  top: 0;
  font-weight: normal;
  font-size: .875rem;
  color:black;
  background-color: rgb(217, 206, 206);
}

</style>

<div class="p-mypage" style="padding-top: 75px;">
    <div class="nes-container is-dark with-title p-mypage__container" style="border: 5px solid #fff; border-radius: 10px;">
        <p class="title">マイページ</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="p-mypage__btn-container">
            <a href="/account"><button type="button" class="nes-btn is-primary p-mypage__btn">アカウント</button></a> 
            <a href="{{ route('favorite_list')}}"><button type="button" class="nes-btn is-primary p-mypage__btn">お気に入り</button></a> 
            <a href="/show"><button type="button" class="nes-btn is-primary p-mypage__btn">案件検索</button></a>
        </div>
        <div class="p-mypage__btn-container">
            <a href="/portfolio"><button type="button" class="nes-btn is-primary p-mypage__btn">ポートフォリオ</button></a> 
            <a href="/kakunin"><button type="button" class="nes-btn is-primary p-mypage__btn">採用状況を確認</button></a> 
            {{-- <a href="/company"><button type="button" class="nes-btn is-primary p-mypage__btn">企業</button></a>  --}}
        </div>  
</div>
@endsection
