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

    @if($errors->has('matter_name'))
    {{ $errors->first('matter_name') }}
  @endif
<p>案件名：{{$input["matter_name"]}}</p>
@if($errors->has('prefectures_id'))
                  {{ $errors->first('prefectures_id') }}
                @endif
<p>都道府県：{{$prefecture->prefectures_name}}</p>
@if($errors->has('tel'))
                {{ $errors->first('tel') }}
              @endif
<p>連絡先：{{$input["tel"]}}</p>

<p>案件名：{{$input["matter_name"]}}</p>
<p>都道府県：{{$prefecture->prefectures_name}}</p>
<p>連絡先：{{$input["tel"]}}</p>
<p>職種：{{$occupation->occupation_name}}</p>
<p>求めるスキル：{{$development_language1->language_name}}</p>
<p>求めるスキル：{{$development_language2->language_name}}</p>
<p>求めるスキル：{{$development_language3->language_name}}</p>
<p>求めるスキル：{{$development_language4->language_name}}</p>
@if($errors->has('deadline'))
          {{ $errors->first('deadline') }}
        @endif
<p>期限：{{$input["deadline"]}}</p>
@if($errors->has('remarks'))
        {{ $errors->first('remarks') }}
      @endif
<p>特記事項：{{$input["remarks"]}}</p>
@if($errors->has('number_of_person'))
        {{ $errors->first('number_of_person') }}
      @endif
<p>募集人数：{{$input["number_of_person"]}}</p>
@if($errors->has('success_fee'))
        {{ $errors->first('success_fee') }}
      @endif
<p>成功報酬：{{$input["success_fee"]}}</p>
@if($errors->has('rank'))
{{ $errors->first('rank') }}
@endif
<p>案件ランク：{{$input["rank"]}}</p>

<p>特記事項：{{$input["remarks"]}}</p>
<p>パーティ人数：{{$input["number_of_person"]}}</p>
<p>成功報酬：{{$input["success_fee"]}}</p>
<p>案件ランク：{{$input["rank"]}}</p>
</div>
</div>

<input type="submit" class="nes-btn is-success" value="登録">

</form>
</div>
@endsection