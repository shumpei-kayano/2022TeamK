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
    <h1 class="p-form">けいさいちゅうあんけん</h1>
    <div class="p-acinfo__container">
        <div class="nes-container is-rounded is-dark p-acinfo">

            {{-- {{ dd($matters)}} --}}
@foreach($matters as $matter)
    <form action='{{ route('matterEdit',['id'=>$matter->id]) }}'method='post'>
        @csrf
        <!-- 案件名 -->
        <label for="dark_field" style="color:#fff;" >あんけんめい<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->matter_name }}</p><br>
            <!-- <p>案件名：{{$matter->matter_name}}</p> -->
    
        <!-- 都道府県 -->
        <label for="dark_field" style="color:#fff;" >とどうふけん<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->prefecture->prefectures_name }}</p><br>
            <!-- <p>都道府県：{{$matter->prefecture->prefectures_name}}</p> -->
    
        <!-- 連絡先 -->
        <label for="dark_field" style="color:#fff;" >れんらくさき<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->tel }}</p><br>
            <!-- <p>連絡先：{{$matter->tel}}</p> -->

        <!-- 職種 -->
        <label for="dark_field" style="color:#fff;" >しょくしゅ<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->occupation->occupation_name }}</p><br>
            <!-- <p>職種：{{$matter->occupation->occupation_name}}</p> -->

        <!-- 求めるスキル -->
        <label for="dark_field" style="color:#fff;" >求めるスキル<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->development_language->language_name }}</p><br>
            <!-- <p>求めるスキル：{{$matter->development_language->language_name}}</p> -->

        <!-- 期限 -->
        <label for="dark_field" style="color:#fff;" >きげん<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->deadline }}</p><br>
            <!-- <p>期限：{{$matter->deadline}}</p> -->

        <!-- 特記事項 -->
        <label for="dark_field" style="color:#fff;" >とっきじこう<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->remarks }}</p><br>
            <!-- <p>特記事項：{{$matter->remarks}}</p> -->

        <!-- 募集人数 -->
        <label for="dark_field" style="color:#fff;" >ぼしゅうにんずう<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->number_of_person }}</p><br>
            <!-- <p>募集人数：{{$matter->number_of_person}}</p> -->

        <!-- 成功報酬 -->
        <label for="dark_field" style="color:#fff;" >せいこうほうしゅう<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->success_fee }}</p><br>
            <!-- <p>成功報酬：{{$matter->success_fee}}</p> -->

        <!-- 案件ランク -->
        <label for="dark_field" style="color:#fff;" >あんけんランク<br>
            <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $matter->rank }}</p>
            <!-- <p>案件ランク：{{$matter->rank}}</p> -->
    
    {{-- <p>求めるスキル{{$matter->development_language->language_name}}</p> --}}
    {{-- <p>求めるスキル{{$matter->development_languages->language_name}}</p>
    <p>求めるスキル{{$matter->development_languages->language_name}}</p> --}}

</div>
</div>
    <input type="submit" class="nes-btn is-success" value=へんしゅう>
    </div>
</form>
@endforeach


@endsection