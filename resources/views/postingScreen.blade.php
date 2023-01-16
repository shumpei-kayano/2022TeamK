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
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->matter_name }}</p><br>
    
        <!-- 都道府県 -->
        @php
          $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >とどうふけん<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $prefectures1->prefectures_name }}</p><br>
    
        <!-- 連絡先 -->
        <label for="dark_field" style="color:#fff;" >れんらくさき<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->tel }}</p><br>

        <!-- 職種 -->
        @php
            $occupation1 = DB::table('occupations')->find($matter->occupation_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >しょくしゅ<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $occupation1->occupation_name }}</p><br>

        <!-- 求めるスキル -->
        <label for="dark_field" style="color:#fff;" >求めるスキル<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                @php
                    $devLan1 = DB::table('development_languages')->find($matter->development_language_id1);
                    $devLan2 = DB::table('development_languages')->find($matter->development_language_id2);
                    $devLan3 = DB::table('development_languages')->find($matter->development_language_id3);
                    $devLan4 = DB::table('development_languages')->find($matter->development_language_id4);
                @endphp
                {{ $devLan1->language_name }}</p><br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan2->language_name }}</p><br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan3->language_name }}</p><br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan4->language_name }}</p><br>
            {{-- {{ dd($matter->development_language) }} --}}
            {{-- <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->development_language2->language_name }}</p><br> --}}

        <!-- 期限 -->
        <label for="dark_field" style="color:#fff;" >きげん<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->deadline }}</p><br>
            <!-- <p>期限：{{$matter->deadline}}</p> -->

        <!-- 特記事項 -->
        <label for="dark_field" style="color:#fff;" >とっきじこう<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->remarks }}</p><br>
            <!-- <p>特記事項：{{$matter->remarks}}</p> -->

        <!-- 募集人数 -->
        <label for="dark_field" style="color:#fff;" >ぼしゅうにんずう<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->number_of_person }}</p><br>
            <!-- <p>募集人数：{{$matter->number_of_person}}</p> -->

        <!-- 成功報酬 -->
        <label for="dark_field" style="color:#fff;" >せいこうほうしゅう<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->success_fee }}</p><br>

        <!-- 案件ランク -->
        <label for="dark_field" style="color:#fff;" >あんけんランク<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->rank }}</p>
    
    {{-- <p>求めるスキル{{$matter->development_language->language_name}}</p> --}}
    {{-- <p>求めるスキル{{$matter->development_languages->language_name}}</p>
    <p>求めるスキル{{$matter->development_languages->language_name}}</p> --}}

</div>
</div>
    <input type="submit" class="nes-btn is-success" value=へんしゅう>
    </div>
</form>
@endforeach
{{-- {{ dd($development_languages) }} --}}


@endsection