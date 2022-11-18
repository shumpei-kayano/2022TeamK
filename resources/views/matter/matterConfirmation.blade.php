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

<p>あんけんめい:{{$input["matter_name"]}}</p>
<p>とどうふけん:{{$prefecture->prefectures_name}}</p>
<p>れんらくさき:{{$input["tel"]}}</p>
<p>職種:{{$occupation->occupation_name}}</p>
<p>求めるスキル:{{$development_language1->language_name}}</p>
<p>求めるスキル:{{$development_language2->language_name}}</p>
<p>求めるスキル:{{$development_language3->language_name}}</p>
<p>求めるスキル:{{$development_language4->language_name}}</p>
<p>期限:{{$input["deadline"]}}</p>
<p>とっきじこう:{{$input["remarks"]}}</p>
<p>ぼしゅうにんずう:{{$input["number_of_person"]}}</p>
<p>せいこうほしゅう:{{$input["success_fee"]}}</p>
<p>あんけんランク:{{$input["rank"]}}</p>
</div>
</div>

<input type="submit" class="nes-btn is-success" value="とうろく">

</form>
</div>
@endsection