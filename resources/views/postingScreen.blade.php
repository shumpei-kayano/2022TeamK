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

<div class="p-form">
    <h1 class="p-form" style="">掲載中案件</h1>
    <div class="p-acinfo__container">
        <div class="nes-container is-rounded is-dark p-keisaianken" style="">

            <table class="p-show"style="color:red">
                <tr>
                    <th>案件名</th>
                    <th>職種</th>
                    <th>レベル</th>
                    <th>エリア</th>
                    <th>特記事項</th>
                </tr>

                @foreach($matters as $matter)
                <tr>
                    <td class="p-show__tokki">{{$matter->matter_name}}</td>
                    @php
                        $occupation1 = DB::table('occupations')->find($matter->occupation_id);
                    @endphp
                    <td>{{ $occupation1->occupation_name }}</td>
                    <td>{{$matter->rank}}</td>
                    @php
                        $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
                    @endphp
                    <td>{{ $prefectures1->prefectures_name }}</td>
                    <td class="p-show__tokki">{{$matter->remarks}}</td>
                    <td><a href="{{ route('matterEdit',['id'=>$matter->id]) }}" class="nes-btn is-primary" style="height:35px; width:60px; text-align:center; padding-top:0px;">詳細</a></td>
                </tr>
                @endforeach
        </div>
    </div>
</div>

@endsection
{{-- 
<div class="p-form">
    <h1 class="p-form" style="margin-top: 200px;">掲載中案件</h1>
    <div class="p-acinfo__container">
        <div class="nes-container is-rounded is-dark p-keisaianken">

            {{-- {{ dd($matters)}} --}}
