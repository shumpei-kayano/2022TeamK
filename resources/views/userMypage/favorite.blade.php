@extends('layouts.app')

@section('title','お気に入りリスト')

@section('content')

<h1 class="p-form" style="padding-top: 45px;">お気に入りリスト</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title p-form__container2" style="overflow: scroll; max-height: 350px; border: 5px solid #fff; border-radius: 10px;">
        {{-- <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a> --}}
        <table class="p-show" style="color:white">
            <thead>
            <tr>
                <th>案件名</th>
                <th>言語</th>
                <th>エリア</th>
                <th>特記事項</th>
            </tr>
            </thead>
        @foreach($favorites as $favorite)
        
                <tbody>
                <tr>
                    <td class="p-show__tokki">{{ $favorite->matter_name }}</td>
                    <td>{{ $favorite->language_name }}</td>
                    <td>{{ $favorite->prefectures_name }}</td>
                    <td class="p-show__tokki">{{ $favorite->remarks }}</td>
                    <td><a href="{{ route('matter.detail', ['id'=>$favorite->matter_id]) }}" class="nes-btn is-primary" style="height:35px; width:60px; text-align:center; padding-top:0px;">詳細</a></td>
                </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</div>

@endsection