@extends('layouts.app')

@section('title','お気に入りリスト')

@section('content')

<h1 class="p-form">お気に入りリスト</h1>

<div class="favorite">
    <div class="nes-container is-dark with-title favorite__container">
        <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a>
    </div>
</div>
  
<table class="">
    <thead>
    <tr>
        <th>案件名</th>
        <th>案件名</th>
        <th>案件名</th>
        <th>案件名</th>
    </tr>
    </thead>
@foreach($favorites as $favorite)

        <tbody>
        <tr>
            <td>{{ $favorite->matter_name }}</td>
            <td>{{ $favorite->language_name }}</td>
            <td>{{ $favorite->prefectures_name }}</td>
            <td>{{ $favorite->remarks }}</td>
            <td><a href="{{ route('matter.detail', ['id'=>$favorite->matter_id]) }}" class="">詳細</a></td>
        </tr>
        </tbody>
@endforeach
    </table>

@endsection