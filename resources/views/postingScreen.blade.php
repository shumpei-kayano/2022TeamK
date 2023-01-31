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

<div class="p-form">
    <h1 class="p-form" style="padding-top:45px;">掲載中案件</h1>
    <div class="p-acinfo__container" style="">
        <div class="nes-container is-rounded is-dark p-keisaianken" style="overflow: scroll; overflow-x:hidden; max-height: 550px; width:1000px; border: 5px solid #fff; border-radius: 10px;padding-top:0; padding-left:0; padding-right:0;">

            <table class="p-show"style="color:white">
                <tr style="padding-left: 0; padding-right:0;">
                    <th>案件名</th>
                    <th>職種</th>
                    <th>ランク</th>
                    <th style="width: 40px;">エリア</th>
                    <th>特記事項</th>
                    <th style="width: 30px; padding-left:1px;">詳細</th>
                </tr>

                @foreach($matters as $matter)
                <tr>
                    <td class="p-show__tokki" style="padding-left: 20px;">{{$matter->matter_name}}</td>
                    @php
                        $occupation1 = DB::table('occupations')->find($matter->occupation_id);
                        $engs = DB::table('ranks')->find($matter->rank);
                        $eng = $engs->rank;
                    @endphp
                    <td>{{ $occupation1->occupation_name }}</td>
                    <td>{{$eng}}</td>
                    @php
                        $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
                    @endphp
                    <td>{{ $prefectures1->prefectures_name }}</td>
                    <td class="p-show__tokki">{{$matter->remarks}}</td>
                    <td><a href="{{ route('matterEdit',['id'=>$matter->id]) }}" style="height:35px; width:60px; text-align:center; padding-top:0px; padding-right:10px; color:aqua;">詳細</a></td>
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
{{-- @foreach($matters as $matter)
    <form action='{{ route('matterEdit',['id'=>$matter->id]) }}'method='post'>
        @csrf
        <!-- 案件名 -->
        <label for="dark_field" style="color:#fff;" >案件名<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->matter_name }}</p><br>
    
        <!-- 都道府県 -->
        @php
          $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >都道府県<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $prefectures1->prefectures_name }}</p><br>
    
        <!-- 連絡先 -->
        <label for="dark_field" style="color:#fff;" >連絡先<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->tel }}</p><br>

        <!-- 職種 -->
        @php
            $occupation1 = DB::table('occupations')->find($matter->occupation_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >職種<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $occupation1->occupation_name }}</p><br>

        <!-- 求めるスキル -->
        <label for="dark_field" style="color:#fff;" >求めるスキル1<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                @php
                    $devLan1 = DB::table('development_languages')->find($matter->development_language_id1);
                    $devLan2 = DB::table('development_languages')->find($matter->development_language_id2);
                    $devLan3 = DB::table('development_languages')->find($matter->development_language_id3);
                    $devLan4 = DB::table('development_languages')->find($matter->development_language_id4);
                @endphp
                {{ $devLan1->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル2</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan2->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル3</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan3->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル4</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan4->language_name }}</p><br>
            {{-- {{ dd($matter->development_language) }} --}}
            {{-- <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->development_language2->language_name }}</p><br> --}}

        <!-- 期限 -->
        {{-- <label for="dark_field" style="color:#fff;" >期限<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->deadline }}</p><br>
            <!-- <p>期限：{{$matter->deadline}}</p> --> --}}

        <!-- 特記事項 -->
        {{-- <label for="dark_field" style="color:#fff;" >特記事項<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ old($matter->remarks) }}</p><br>
            <!-- <p>特記事項：{{$matter->remarks}}</p> -->

        <!-- 募集人数 -->
        <label for="dark_field" style="color:#fff;" >募集人数<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->number_of_person }}</p><br>
            <!-- <p>募集人数：{{$matter->number_of_person}}</p> -->

        <!-- 成功報酬 -->
        <label for="dark_field" style="color:#fff;" >成功報酬<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->success_fee }}</p><br>

        <!-- 案件ランク -->
        <label for="dark_field" style="color:#fff;" >案件ランク<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->rank }}</p> --}}
    
    {{-- <p>求めるスキル{{$matter->development_language->language_name}}</p> --}}
    {{-- <p>求めるスキル{{$matter->development_languages->language_name}}</p>
    <p>求めるスキル{{$matter->development_languages->language_name}}</p> --}}

{{-- </div>
</div>
    <input type="submit" class="nes-btn is-success" value=編集>
    </div>
</form>
@endforeach
{{ dd($development_languages) }} --}}
