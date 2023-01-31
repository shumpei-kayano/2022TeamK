@extends('layouts.app')

@section('title','お気に入りリスト')

@section('content')

<h1 class="p-form" style="padding-top: 45px;">お気に入りリスト</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title p-form__container2" style="overflow: scroll; max-height: 350px; border: 5px solid #fff; border-radius: 10px; padding-top:0; padding-left:0; padding-right:0;">
        {{-- <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a> --}}
        <table class="p-show" style="color:white">
            <thead style="">
            <tr style="padding-left: 0; padding-right:0;">
                <th>案件名</th>
                <th>言語</th>
                <th style="width: 40px;">エリア</th>
                <th>特記事項</th>
                <th style="width: 30px;"></th>
                {{-- <th class="nes-btn is-primary" style="height:35px; width:60px; text-align:center; padding-top:0px; ">詳細</th> --}}
            </tr>
            </thead>
        @foreach($favorites as $favorite)
        
                <tbody>
                <tr>
                    <td class="p-show__tokki" style="padding-left: 20px;">{{ $favorite->matter_name }}</td>
                    <td>{{ $favorite->language_name }}</td>
                    <td>{{ $favorite->prefectures_name }}</td>
                    <td class="p-show__tokki">{{ $favorite->remarks }}</td>
                    <td><a href="{{ route('matter.detail', ['id'=>$favorite->matter_id]) }}" style="height:35px; width:60px; text-align:center; padding-top:0px; padding-right:10px; color:aqua;">詳細</a></td>
                </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</div>

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

@endsection