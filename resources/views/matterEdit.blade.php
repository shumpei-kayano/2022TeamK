@extends('layouts.app')

@section('title','案件掲載(編集・削除)')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}
<div class="p-form">
  <h1 class="p-form">案件掲載を編集・削除</h1>
    <div class="p-acinfo__container">
      <div class="nes-container is-rounded is-dark p-anken">
        <form action='{{ route('matter_update',['id'=>$matters->id]) }}'method='post'>

    @csrf
    <div class="p-anken2__container"> 
      <div class="p-anken2__Arrangement">
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
              <label for="dark_select" style="color:#fff;">案件名</label><br>
                @if($errors->has('matter_name'))
                {{ $errors->first('matter_name') }}
              @endif
              
              <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" placeholder="案件名を入力してください" name="matter_name" value="{{ $matters->matter_name }}"><br>

    <label for="dark_select" style="color:#fff;">都道府県</label><br>
      <div class="nes-select is-dark p-anken2__prdn">
    <select name="prefectures_id" >
       @if($errors->has('prefectures_id'))
                  {{ $errors->first('prefectures_id') }}
                @endif
      <option value="{{ $matters->prefectures_id }}" selected>{{ $prefectures1->prefectures_name }}</p><br></option>
        @foreach ($prefectures as $prefecture)
            <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option>
        @endforeach
    </select>
    </div>

    <!--<input type="text" class="" placeholder="れんらくさき" 
     aria-describedby="basic-addon2" name="tel"> -->
     <label for="dark_select" style="color:#fff;">電話番号（ハイフンなし）</label><br>
      @if($errors->has('tel'))
        {{ $errors->first('tel') }}
      @endif
    <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" placeholder="連絡先を入力してください" name="tel" value="{{ $matters->tel }}"><br>  
      @php
        $occupation1 = DB::table('occupations')->find($matters->occupation_id);
      @endphp

<label for="dark_select" style="color:#fff;">職種</label><br>
<div class="nes-select is-dark p-anken2__prdn2">
    <select name="occupation_id">     
      <option value="{{ $matters->occupation_id }}" selected>{{ $occupation1->occupation_name }}</p><br></option>
        @foreach ($occupations as $occupation)
            <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
        @endforeach
    </select>
    </div>

        <!-- 期限 -->
        <label for="dark_select" style="color:#fff;" >期限</label><br>
        @if($errors->has('deadline'))
            {{ $errors->first('deadline') }}
          @endif
      <input type="date" class="nes-input is-dark p-anken2__deadline"
              aria-describedby="basic-addon2" name="deadline" value="{{ $matters->deadline }}">
      </label>

          <!-- 案件ランク -->
    <label>案件ランク
      <div class="nes-select is-dark p-anken2__prdn3">
    <select name="rank" id="rank">
      @if($errors->has('rank'))
            {{ $errors->first('rank') }}
          @endif
            @foreach ($ranks as $item)
                <option value="{{$item->id}}">{{$item->rank}}</option> 
            @endforeach
    </select>
    </div>
    </label><br>

  </div>

  <div class="p-anken2__Arrangement3">
<table border="0" cellspacing="0" cellpadding="0">

  <label for="dark_select" style="color:#fff;">求めるスキル</label><br>

      <label class="mailform">
        <label class="puru">
          <label>
            <input type="radio" name="skill" class="nes-radio is-dark" value="hoge1" onclick="entryChange1();" checked="checked" />
            <span>1つ目</span>
          </label>
          <label>
            <input type="radio" name="skill" class="nes-radio is-dark" value="hoge2" onclick="entryChange1();" />
            <span>2つ目</span>
          </label>
          <label>
            <input type="radio" name="skill" class="nes-radio is-dark" value="hoge3" onclick="entryChange1();" />
            <span>3つ目</span>
          </label>
          <label>
            <input type="radio" name="skill" class="nes-radio is-dark" value="hoge4" onclick="entryChange1();" />
            <span>4つ目</span>
        </label>
      </label><br>
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
      <label for="dark_select" style="color:#fff;">スキル1</label><br>
      <dd>
        <div class="nes-select is-dark p-anken2__prdn4">
    <select name="development_language_id1">
        <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
        @foreach ($development_languages as $language)
        <option value="{{$language->id}}">{{$language->language_name}}</option> 
        @endforeach
    </select>
    </div>
     </dd>
    </dl>
  </dl>
  
  <!-- 表示切り替えsecondBox -->
  <dl id="secondBox">
    <dl class="mailform">
      <label for="dark_select" style="color:#fff;">スキル1</label><br>
      <dd>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id1">
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option>
            @endforeach
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル2</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
            @endforeach
        </select>
        </div>
      </dd>
    </dl>
  </dl>

  <!-- 表示切り替えthirdBox -->
  <dl id="thirdBox">
    <dl class="mailform">
      <label for="dark_select" style="color:#fff;">スキル1</label><br>
      <dd>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id1">
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル2</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
            @endforeach    
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル3</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id3">
          <option value="{{ $matters->development_language_id3 }}" selected>{{ $devLan3->language_name }}</p><br></option>
            @foreach ($development_language3s as $language3)
            <option value="{{$language3->id}}">{{$language3->language_name}}</option> 
            @endforeach    
        </select>
        </div>
      </dd>
    </dl>
  </dl>

  <!-- 表示切り替えfourthbox -->
  <dl id="fourthBox">
    <dl class="mailform">
      <label for="dark_select" style="color:#fff;">スキル1</label><br>
      <dd>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id1">
          <option value="{{ $matters->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
            @foreach ($development_languages as $language)
            <option value="{{$language->id}}">{{$language->language_name}}</option> 
            @endforeach    
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル2</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id2">
          <option value="{{ $matters->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
            @foreach ($development_language2s as $language2)
            <option value="{{$language2->id}}">{{$language2->language_name}}</option> 
            @endforeach    
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル3</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id3">
          <option value="{{ $matters->development_language_id3 }}" selected>{{ $devLan3->language_name }}</p><br></option>
          @foreach ($development_language3s as $language3)
          <option value="{{$language3->id}}">{{$language3->language_name}}</option> 
          @endforeach   
        </select>
        </div>

        <label for="dark_select" style="color:#fff;">スキル4</label><br>
        <div class="nes-select is-dark p-anken2__prdn5">
        <select name="development_language_id4">
          <option value="{{ $matters->development_language_id4 }}" selected>{{ $devLan4->language_name }}</p><br></option>
            @foreach ($development_language4s as $language4)
            <option value="{{$language4->id}}">{{$language4->language_name}}</option> 
            @endforeach    
        </select>
        </div>
      </dd>
    </dl>
  </dl>
</table>

</div>

<div class="p-anken2__Arrangement2">

    <!-- 特記事項 -->
    <label for="dark_select" style="color:#fff;">特記事項</label><br>
      @if($errors->has('remarks'))
        {{ $errors->first('remarks') }}
      @endif
      <textarea name="remarks" id="" class="nes-textarea is-dark p-anken2__textarea" aria-describedby="basic-addon2">
        {{ $matters->remarks }}
      </textarea><br>

      <!-- パーティ人数 -->
      <label for="dark_select" style="color:#fff;">パーティ人数</label><br>
      @if($errors->has('number_of_person'))
        {{ $errors->first('number_of_person') }}
      @endif
    <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" placeholder="人数を入力してください"
    name="number_of_person" value="{{ $matters->number_of_person }}"> 人
    <br>

    <!-- 成功報酬 -->
    <label for="dark_select" style="color:#fff;">成功報酬</label><br>
      @if($errors->has('success_fee'))
        {{ $errors->first('success_fee') }}
      @endif
    <!--     <input type="number" class="" placeholder="せいこうほしゅう"
            aria-describedby="basic-addon2" name="success_fee"> -->
    <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" placeholder="金額を入力してください"
    name="success_fee" value="{{ $matters->success_fee }}"> 円
    <br>


  </div>
  <!-- 編集 -->
  <div class="p-anken3__btn1">
    <input type="submit" class="nes-btn is-primary p-acinfo__btn" value="保存する" onclick='return confirm("編集完了してもよろしいでしょうか？");'>
    </form>
    </div>

    <div class="p-anken3__btn2">
    <form action="{{ route('matter_remove',['id'=>$matters->id]) }}" method="post">
    @csrf
    <!-- 削除 -->
    <input type="submit" class="nes-btn is-primary p-acinfo__btn" value='削除する' onclick='return confirm("本当に削除してもよろしいでしょうか？");'>
    </div>


  </div>
  </form>
    </div>
      </div>
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