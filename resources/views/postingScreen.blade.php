@extends('layouts.app')

@section('title','掲載中案件')

@section('content')

{{-- {{dd($matter)}} --}}
{{-- <p>案件名:{{$matter->matter_name}}</p>
{{-- <p>都道府県:{{$prefectures}}</p> --}}
{{-- <p>連絡先{{$matter->tel}}</p> --}}
{{-- <p>職種:{{$occupation->occupation_name}}</p>
<p>求めるスキル:{{$development_language1->language_name}}</p>
<p>求めるスキル:{{$development_language2->language_name}}</p>
<p>求めるスキル:{{$development_language3->language_name}}</p>
<p>求めるスキル:{{$development_language4->language_name}}</p> --}}
{{-- <p>期限:{{$matter->deadline}}</p>
<p>特記事項:{{$matter->remarks}}</p>
<p>募集人数:{{$matter->number_of_person}}</p>
<p>成功報酬:{{$matter->success_fee}}</p>
<p>案件ランク:{{$matter->rank}}</p> --}}
{{-- {{ dd($matters)}} --}}
@foreach($matters as $matter)
    <form action='{{ route('matterEdit',) }}'method='post'>
        @csrf
    <p>案件名:{{$matter->matter_name}}</p>
    <p>都道府県:{{$matter->prefecture->prefectures_name}}</p>
    <p>連絡先{{$matter->tel}}</p>
    <p>職種{{$matter->occupation->occupation_name}}</p>
    <p>求めるスキル{{$matter->development_language->language_name}}</p>
    {{-- <p>求めるスキル{{$matter->development_language->language_name}}</p> --}}
    {{-- <p>求めるスキル{{$matter->development_languages->language_name}}</p>
    <p>求めるスキル{{$matter->development_languages->language_name}}</p> --}}
    <p>期限:{{$matter->deadline}}</p>
    <p>特記事項:{{$matter->remarks}}</p>
    <p>募集人数:{{$matter->number_of_person}}</p>
    <p>成功報酬:{{$matter->success_fee}}</p>
    <p>案件ランク:{{$matter->rank}}</p>
    <input type="submit" value=編集>
@endforeach


@endsection