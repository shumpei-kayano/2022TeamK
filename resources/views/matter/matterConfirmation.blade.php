@extends('layouts.app')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}
<form action="">
<p>案件名:{{$input["matter_name"]}}</p>
<p>都道府県:{{$input["prefectures_id"]}}</p>
{{-- <p>連絡先</p> --}}
<p>職種:{{($input["occupation_id"])}}</p>
<p>求めるスキル:{{$input["development_language_id1"]}}</p>
<p>求めるスキル:{{$input["development_language_id2"]}}</p>
<p>求めるスキル:{{$input["development_language_id3"]}}</p>
<p>求めるスキル:{{$input["development_language_id4"]}}</p>
<p>期限:{{$input["deadline"]}}</p>
<p>特記事項:{{$input["remarks"]}}</p>
<p>募集人数:{{$input["number_of_person"]}}</p>
<p>成功報酬:{{$input["success_fee"]}}</p>
<p>案件ランク:{{$input["rank"]}}</p>

<input type="submit" value="登録">
</form>
@endsection