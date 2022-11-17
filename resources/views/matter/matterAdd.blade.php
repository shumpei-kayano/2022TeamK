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
<form action="{{ route('matter.post')}}" method="post">

    @csrf     


    <input type="text" class="" placeholder="あんけんめい" 
            aria-describedby="basic-addon2" name="matter_name">
<br>    

    <label>とどうふけん
    <select name="prefectures_id" >
        @foreach ($prefectures as $prefecture)
            <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
        @endforeach
    </select>
</label>
<br>

    <input type="text" class="" placeholder="れんらくさき" 
            aria-describedby="basic-addon2" name="tel">
<br>

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
        一つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge2" onclick="entryChange1();" />
        二つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge3" onclick="entryChange1();" />
        三つ目</label>
      <label>
        <input type="radio" name="skill" value="hoge4" onclick="entryChange1();" />
        四つ目</label>
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
            aria-describedby="basic-addon2" name="deadline">
    </label>
<br>

    <input type="text" class="" placeholder="とっきじこう"
            aria-describedby="basic-addon2" name="remarks">
<br>

    <input type="number" class="" placeholder="ぼしゅうにんずう"
            aria-describedby="basic-addon2" name="number_of_person">
<br>

    <input type="number" class="" placeholder="せいこうほしゅう"
            aria-describedby="basic-addon2" name="success_fee">
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

<script type="text/javascript">
    function entryChange1(){
    radio = document.getElementsByName('skill') 
    if(radio[0].checked) {
    document.getElementById('firstBox').style.display = "";
    document.getElementById('secondBox').style.display = "none";
    document.getElementById('thirdBox').style.display = "none";
    document.getElementById('fourthBox').style.display = "none";
    }else if(radio[1].checked) {
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "";
    document.getElementById('thirdBox').style.display = "none";
    document.getElementById('fourthBox').style.display = "none";
    }else if(radio[2].checked) {
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "none";
    document.getElementById('thirdBox').style.display = "";
    document.getElementById('fourthBox').style.display = "none";
    }else if(radio[3].checked) {
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "none";
    document.getElementById('thirdBox').style.display = "none";
    document.getElementById('fourthBox').style.display = "";
    }
    }
    window.onload = entryChange1;
    </script>