@extends('layouts.app')

@section('title','承認待ちリスト')

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

<h1 class="p-form" style="padding-top: 30px;">承認待ちリスト</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title p-form__container2" style="overflow-x:hidden; max-height: 600px; width:600px; text-overflow: ellipsis; overflow: scroll;  border: 5px solid #fff; border-radius: 10px; padding-top:0; margin-top:-26px;  padding-left:0; padding-right:0;">
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

<table class="p-show" style="color:white">
    <thead>
        <tr>
            <th>案件名</th>
            <th>登録ユーザー</th>
            <th>ランク</th>
            <th style="width: 30px; padding-left:1px;">詳細</th>
        </tr>
    </thead>

        @foreach ($order_received_matters as $order_received_matter)
        @if ($order_received_matter->adoption_flg == 0)
        <tbody>
            <tr>
                <!-- 案件名 -->
                <td class="p-show__tokki" style="padding-left: 20px;">
                    {{ $order_received_matter->matter->matter_name }}
                </td>
                <!-- 登録ユーザー -->
                <td class="p-show__tokki">
                    {{ $order_received_matter->user->name }}
                </td>

                </td>
                <!-- ランク -->
                <td class="p-show__tokki">
                    @php
                        $users = DB::table('users')->find($order_received_matter->user_id);
                        $total_exe = $users->total_experience;
                        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
                        $rank = $ranks->rank;
                    @endphp
                    {{ $rank }}
                </td>

                <td>
                    
                    <form method="POST" action="{{ route('user.detail', ['id'=>$order_received_matter->user_id]) }}">
                        @csrf
                        <input type="hidden" name="form" value="{{ $order_received_matter->id }}">
                        <button type="submit" style="height:35px; width:60px; text-align:center; padding-top:0px; padding-right:10px; color:green;">詳細</button>
                    </form>
                    @endif
            </tr>
        @endforeach
    </tbody>
</table>
        </div>
</div>
</div>

@endsection