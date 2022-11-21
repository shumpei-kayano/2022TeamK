@extends('layouts.app')

@section('title','案件掲載')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}
<div class="p-form">
<h1 class="p-form">あんけんけいさい</h1>
<div class="p-acinfo__container">
  <div class="nes-container is-rounded is-dark p-acinfo">
    <form action='{{ route('matter_update',['id'=>$matters->id]) }}'method='post'>

    @csrf     
            <!--     <input type="text" class="" placeholder="あんけんめい" 
            aria-describedby="basic-addon2" name="matter_name"> -->
            <!-- <label for="dark_field" style="color:#fff;" >あんけんめい<br> -->
              <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="あんけんめい"name="matter_name" value="{{ $matters->matter_name }}"><br>  

    <label>とどうふけん
    <select name="prefectures_id" >
        @foreach ($prefectures as $prefecture)
            <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
        @endforeach
    </select>
    </label>
    <br>

    <!--<input type="text" class="" placeholder="れんらくさき" 
     aria-describedby="basic-addon2" name="tel"> -->
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="tel" value="{{ $matters->tel }}"><br>  

    <select name="occupation_id">
        @foreach ($occupations as $occupation)
            <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
        @endforeach
    </select>
<br>

<table border="0" cellspacing="0" cellpadding="0">
<dl>
    <dt>求めるスキル</dt>
    <dd>
      <label>
        <input type="radio" name="skill" value="hoge1" onclick="entryChange1();" checked="checked" />
        1つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge2" onclick="entryChange1();" />
        2つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge3" onclick="entryChange1();" />
        3つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge4" onclick="entryChange1();" />
        4つ目</label>
    </dd>
  </dl>

  <!-- 表示切り替えfirstBox -->
  <dl id="firstBox">
    <dl class="mailform">
      <dt>スキル</dt>
      <dd>
    <select name="development_language_id1">
        @foreach ($development_languages as $language)
        <option value="{{$language->id}}">{{$language->language_name}}</option> 
        @endforeach    
    </select>
     </dd>
    </dl>
  </dl>
  
  <!-- 表示切り替えsecondBox -->
  <dl id="secondBox">
    <dl class="mailform">
      <dt>スキル</dt>
      <dd>
        <select name="development_language_id1">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id2">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
      </dd>
    </dl>
  </dl>

  <!-- 表示切り替えthirdBox -->
  <dl id="thirdBox">
    <dl class="mailform">
      <dt>スキル</dt>
      <dd>
        <select name="development_language_id1">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id2">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id3">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
      </dd>
    </dl>
  </dl>

  <!-- 表示切り替えfourthbox -->
  <dl id="fourthBox">
    <dl class="mailform">
      <dt>スキル</dt>
      <dd>
        <select name="development_language_id1">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id2">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id3">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id4">
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
      </dd>
    </dl>
  </dl>
</table>

<br>
    <label>期限
    <input type="date" class=""
            aria-describedby="basic-addon2" name="deadline" value="{{ $matters->deadline }}">
    </label>
<br>


    <input type="text" class="" placeholder="とっきじこう" aria-describedby="basic-addon2" name="remarks" value="{{ $matters->remarks }}">
    {{-- <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="remarks"> --}}
<br>


    <!--     <input type="number" class="" placeholder="ぼしゅうにんずう"
            aria-describedby="basic-addon2" name="number_of_person"> -->
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="ぼしゅうにんずう"name="number_of_person" value="{{ $matters->number_of_person }}">
<br>

    <!--     <input type="number" class="" placeholder="せいこうほしゅう"
            aria-describedby="basic-addon2" name="success_fee"> -->
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="せいこうほうしゅう"name="success_fee" value="{{ $matters->success_fee }}">
<br>

<label>あんけんランク
<select name="rank" id="rank">
        @foreach ($rank_of_difficulties as $item)
            <option value="{{$item->id}}">{{$item->rank}}</option> 
        @endforeach
</select>
</label>
</div>
</div>

 <br> <input type="submit" class="nes-btn is-success" value="かくにん">

</form>
</div>

@endsection