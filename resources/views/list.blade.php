@extends('layouts.app')

@section('title','お気に入りリスト')

@section('content')

<h1 class="p-form">承認待ちリスト</h1>

<div class="favorite">
    <div class="nes-container is-dark with-title favorite__container">
        {{-- <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a> --}}
        <table class="">
            <thead>
            <tr>
                <th>案件名</th>
                <th>ユーザー名</th>
                <th>エリア</th>
                <th>特記事項</th>
            </tr>
            </thead>
        {{-- @foreach($favorites as $favorite)
        
                <tbody>
                <tr>
                    <td>{{ $favorite->matter_name }}</td>
                    <td>{{ $favorite->language_name }}</td>
                    <td>{{ $favorite->prefectures_name }}</td>
                    <td>{{ $favorite->remarks }}</td>
                    <td><a href="{{ route('matter.detail', ['id'=>$favorite->matter_id]) }}" class="">詳細</a></td>
                </tr>
                </tbody>
        @endforeach --}}
            </table>
    </div>
</div>

<table>
    <thead>
        <th>案件名</th>
        <th>登録ユーザー</th>
    </thead>
    <tbody>
        @foreach ($order_received_matters as $order_received_matter)
            <tr>
                <!-- 商品名 -->
                <td class="table-text">
                    <div>{{ $order_received_matter->matter->matter_name }}</div>
                </td>
                <!-- 登録ユーザー -->
                <td class="table-text">
                    <div>{{ $order_received_matter->user->name }}</div>
                </td>

                <td>
                    <form method="POST" action="{{ route('user.detail', ['id'=>$order_received_matter->user_id]) }}">
                        @csrf
                        <input type="hidden" name="form" value="{{ $order_received_matter->id }}">
                        <button type="submit">詳細</button>
                    </form>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection