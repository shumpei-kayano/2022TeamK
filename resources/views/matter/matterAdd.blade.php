@extends('layouts.app')

@section('title','案件掲載')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>
<a href="/register">登録</a>)</p>
@endif --}}
<div class="p-form">
  <h1 class="p-form">あんけんけいさい</h1>
    <div class="p-acinfo__container">
      <div class="nes-container is-rounded is-dark p-acinfo">
        <form action="{{ route('matter.post')}}" method="post">

      @csrf
          <div class="p-acinfo__left">
          <!-- 案件名 -->
          <label for="dark_select" style="color:#fff;">あんけんめい</label><br>
              @if($errors->has('matter_name'))
                {{ $errors->first('matter_name') }}
              @endif
            <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="あんけんめい" name="matter_name"><br> 
            <!--     <input type="text" class="" placeholder="あんけんめい" aria-describedby="basic-addon2" name="matter_name"> -->

          <input type="hidden" name="user_id" value="{{$user->id}}">

          <!-- 都道府県 -->
          <label>とどうふけん
          <select name="prefectures_id" >
            @if($errors->has('matter_name'))
                {{ $errors->first('matter_name') }}
              @endif
            <option value="" selected>エリア選択</option>

              @foreach ($prefectures as $prefecture)
                  <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
              @endforeach
          </select>
          </label>
          <br>

          <!-- 連絡先 -->
          <label for="dark_select" style="color:#fff;">れんらくさき</label><br>
            <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="tel"><br>  
            <!--<input type="text" class="" placeholder="れんらくさき" aria-describedby="basic-addon2" name="tel"> -->

          <!-- 職業 -->
          <label for="dark_select" style="color:#fff;">しょくぎょう</label><br>
            <select name="occupation_id">
                @foreach ($occupations as $occupation)
                    <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                @endforeach
            </select><br><br>
        
        <!-- 求めるスキル -->
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
          <option value="" selected>選択</option>
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

    <!-- 期限 -->
    <label for="dark_select" style="color:#fff;">きげん</label><br>
    <input type="date" class=""
            aria-describedby="basic-addon2" name="deadline">
    </label><br><br>
          </div>


          <div class="p-acinfo__right">
    <!-- 特記事項 -->
    <label for="dark_select" style="color:#fff;">とっきじこう</label><br>
    <textarea name="remarks" id="" class="nes-textarea is-dark p-posting__textarea" aria-describedby="basic-addon2" placeholder="とっきじこう"></textarea>
    <!-- <input type="text" class="nes-input is-dark p-form__portfolio" placeholder="とっきじこう" aria-describedby="basic-addon2" name="remarks"> -->
    {{-- <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="remarks"> --}}
    <br>

    <!-- 募集人数 -->
    <label for="dark_select" style="color:#fff;">ぼしゅうにんずう</label><br>
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="ぼしゅうにんずう"name="number_of_person">
    <br>
    <!-- <input type="number" class="" placeholder="ぼしゅうにんずう"aria-describedby="basic-addon2" name="number_of_person"> -->

    <!-- 成功報酬 -->
    <label for="dark_select" style="color:#fff;">せいこうほうしゅう</label><br>
    <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="せいこうほうしゅう"name="success_fee">
    <br>
    <!-- <input type="number" class="" placeholder="せいこうほしゅう"aria-describedby="basic-addon2" name="success_fee"> --> 

    <!-- 案件ランク -->
    <label>あんけんランク
      <select name="rank" id="rank">
              @foreach ($rank_of_difficulties as $item)
                  <option value="{{$item->id}}">{{$item->rank}}</option> 
              @endforeach
      </select>
    </label><br> 
          </div>
    
    <!-- 確認ボタン -->
    <input type="submit" class="nes-btn is-success p-acinfo__btn" value="かくにん">
    
</div>
    </div>

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
    {{-- 頑張った --}}