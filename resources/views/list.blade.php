@extends('layouts.app')

@section('title','お気に入りリスト')

@section('content')

<h1 class="p-form">承認待ちリスト</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title p-form__container2" style="width:600px; height:150px; text-overflow: ellipsis;">
        {{-- <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a> --}}
        {{-- <div>
        <table class="">
            <thead>
            <tr>
                <th>案件名</th>
                <th>ユーザー名</th>
                <th>エリア</th>
                <th>特記事項</th>
            </tr>
            </thead> --}}
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
            {{-- </table> --}}

<table class="p-show">
    <thead>
        <tr>
            <th>案件名</th>
            <th>登録ユーザー</th>
        </tr>
    </thead>

        @foreach ($order_received_matters as $order_received_matter)
        <tbody>
            <tr>
                <!-- 案件名 -->
                <td class="p-show__tokki">
                    {{ $order_received_matter->matter->matter_name }}
                </td>
                <!-- 登録ユーザー -->
                <td class="p-show__tokki">
                    {{ $order_received_matter->user->name }}
                </td>

                <td>
                    <form method="POST" action="{{ route('user.detail', ['id'=>$order_received_matter->user_id]) }}">
                        @csrf
                        <input type="hidden" name="form" value="{{ $order_received_matter->id }}">
                        <button type="submit" class="nes-btn is-primary" style="height:35px; width:60px; text-align:center; padding-top:0px;">詳細</button>
                    </form>
            </tr>
        @endforeach
    </tbody>
</table>
        </div>
</div>
</div>

@endsection