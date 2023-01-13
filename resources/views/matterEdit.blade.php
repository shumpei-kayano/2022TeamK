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
<h1 class="p-form">あんけんへんしゅう</h1>
<div class="p-acinfo__container">
  <div class="nes-container is-rounded is-dark p-acinfo">
    <form action='{{ route('matter_update',['id'=>$matters->id]) }}'method='post'>

    @csrf
            <!--     <input type="text" class="" placeholder="あんけんめい" 
            aria-describedby="basic-addon2" name="matter_name"> -->
            <!-- <label for="dark_field" style="color:#fff;" >あんけんめい<br> -->

              {{-- バリデーション --}}
            {{-- @if($errors->has('matter_name'))
              {{ $errors->first('matter_name') }}
            @endif --}}

        @php
          $prefectures1 = DB::table('prefectures')->find($matters->prefectures_id);
        @endphp
              <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="あんけんめい"name="matter_name" value="{{ $matters->matter_name }}"><br>  

    <label>とどうふけん
    <select name="prefectures_id" >
      <option value="{{ $matters->prefectures_id }}" selected>{{ $prefectures1->prefectures_name }}</p><br></option>
        @foreach ($prefectures as $prefecture)
            <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option>
        @endforeach
    </select>
    </label>
    <br>

    <!--<input type="text" class="" placeholder="れんらくさき" 
     aria-describedby="basic-addon2" name="tel"> -->
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="tel" value="{{ $matters->tel }}"><br>  
      @php
        $occupation1 = DB::table('occupations')->find($matters->occupation_id);
      @endphp

    <select name="occupation_id">
      <option value="{{ $matters->occupation_id }}" selected>{{ $occupation1->occupation_name }}</p><br></option>
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
{{-- {{ $id1 = $matters->development_language->language_name }} --}}
{{-- {{ dd($id1) }} --}}


                @php
                    $devLan1 = DB::table('development_languages')->find($matters->development_language_id1);
                    $devLan2 = DB::table('development_languages')->find($matters->development_language_id2);
                    $devLan3 = DB::table('development_languages')->find($matters->development_language_id3);
                    $devLan4 = DB::table('development_languages')->find($matters->development_language_id4);
                @endphp
  <!-- 表示切り替えfirstBox -->
  <dl id="firstBox">
    <dl class="mailform">
      <dt>スキル</dt>
      <dd>
    <select name="development_language_id1">
        <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
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
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option>
            @endforeach
        </select>
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
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
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id3">
          <option value="{{ $matters->development_language_id3 }}" selected>{{ $devLan3->language_name }}</p><br></option>
            @foreach ($development_language3s as $language3)
            <option value="{{$language3->id}}">{{$language3->language_name}}</option> 
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
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
            @endforeach    
        </select>
        <select name="development_language_id3">
          <option value="{{ $matters->development_language_id3 }}" selected>{{ $devLan3->language_name }}</p><br></option>
          @foreach ($development_language3s as $language3)
          <option value="{{$language3->id}}">{{$language3->language_name}}</option> 
          @endforeach   
        </select>
        <select name="development_language_id4">
          <option value="{{ $matters->development_language_id4 }}" selected>{{ $devLan4->language_name }}</p><br></option>
            @foreach ($development_language4s as $language4)
            <option value="{{$language4->id}}">{{$language4->language_name}}</option> 
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
<form action="{{ route('matter_remove',['id'=>$matters->id]) }}" method="post">
    <div class="p-form">
@csrf
<input type="submit" class="nes-btn is-success" value='削除'>
</div>

</form>

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