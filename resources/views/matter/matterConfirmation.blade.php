@extends('layouts.app')

@section('title','案件掲載（確認）')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}
    
<div class="p-form">
<div class="p-acinfo__container">
    <div class="nes-container is-rounded is-dark p-acinfo">
<form action="{{route('matter.registar')}}" method="post">
{{-- <form action="" method="post"> --}}
    @csrf     

<p>案件名:{{$input["matter_name"]}}</p>
<p>都道府県:{{$prefecture->prefectures_name}}</p>
<p>連絡先:{{$input["tel"]}}</p>
<p>職種:{{$occupation->occupation_name}}</p>
<p>求めるスキル:{{$development_language1->language_name}}</p>
<p>求めるスキル:{{$development_language2->language_name}}</p>
<p>求めるスキル:{{$development_language3->language_name}}</p>
<p>求めるスキル:{{$development_language4->language_name}}</p>
<p>期限:{{$input["deadline"]}}</p>
<p>特記事項:{{$input["remarks"]}}</p>
<p>募集人数:{{$input["number_of_person"]}}</p>
<p>成功報酬:{{$input["success_fee"]}}</p>
<p>案件ランク:{{$input["rank"]}}</p>
</div>
</div>

<input type="submit" class="nes-btn is-success" value="登録">

</form>
</div>
@endsection