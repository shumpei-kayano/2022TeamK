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
  <h1 class="p-form">案件掲載</h1>
    <div class="p-acinfo__container">
      <div class="nes-container is-rounded is-dark p-anken">
        <form action="{{ route('matter.post')}}" method="post">

      @csrf
          <!-- 案件名 -->
          <label for="dark_select" style="color:#fff;">案件名</label><br>
              @if($errors->has('matter_name'))
                {{ $errors->first('matter_name') }}
              @endif
            <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" placeholder="案件名を入力してください" name="matter_name" value="{{ old('matter_name') }}"><br> 
            <!--     <input type="text" class="" placeholder="あんけんめい" aria-describedby="basic-addon2" name="matter_name"> -->

          <input type="hidden" name="user_id" value="{{$user->id}}">

          <!-- 都道府県 -->
          <label>都道府県
            <div class="nes-select is-dark p-anken2__prdn">
                @if($errors->has('prefectures_id'))
                  {{ $errors->first('prefectures_id') }}
                @endif
              <select name="prefectures_id" >
                <option value="" selected>エリア選択</option>
                  @foreach ($prefectures as $prefecture)
                      <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
                  @endforeach
              </select>
            </div>
          </label>
          <br>

          <!-- 電話番号 -->
          <label for="dark_select" style="color:#fff;">電話番号（ハイフンなし）</label><br>
            @if($errors->has('tel'))
              {{ $errors->first('tel') }}
            @endif
          <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" placeholder="連絡先を入力してください" name="tel" value="{{ old('tel') }}"><br>  
            <!--<input type="text" class="" placeholder="れんらくさき" aria-describedby="basic-addon2" name="tel"> -->

          <!-- 職業 -->
          <label for="dark_select" style="color:#fff;">職種<br>
            <div class="nes-select is-dark p-anken2__prdn2">
                <select name="occupation_id">
                    @foreach ($occupations as $occupation)
                        <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                    @endforeach
                </select><br>
            </div>
          </label>
        
        <!-- 求めるスキル -->
        <table border="0" cellspacing="0" cellpadding="0">
        <dl>
            <dt>求めるスキル</dt>
            <dd>
              <label>
                <input type="radio" name="skill" class="nes-radio is-dark" value="hoge1" onclick="entryChange1();" checked="checked" />
                <span>1つ目</span>
              </label>
                <!-- 1つ目</label> -->
              <label>
                <input type="radio" name="skill" class="nes-radio is-dark" value="hoge2" onclick="entryChange1();" />
                <span>2つ目</span>
                <!-- 2つ目</label> -->
              </label>
              <label>
                <input type="radio" name="skill" class="nes-radio is-dark" value="hoge3" onclick="entryChange1();" />
                <span>3つ目</span>
                <!-- 3つ目</label> -->
              </label>
              <label>
                <input type="radio" name="skill" class="nes-radio is-dark" value="hoge4" onclick="entryChange1();" />
                <span>4つ目</span>
                <!-- 4つ目</label> -->
              </label>
            </dd>
          </dl>

          <!-- 表示切り替えfirstBox -->
          <dl id="firstBox">
            <dl class="mailform">
              <dt>スキル1</dt>
              <dd>
                <div class="nes-select is-dark p-anken2__prdn4">
                  <select name="development_language_id1">
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
              <dt>スキル1</dt>
              <dd>
                <div class="nes-select is-dark p-anken2__prdn5">
                <select name="development_language_id1">
                  <!--<option value="" selected>選択</option>-->
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
                
                <dt>スキル2</dt>
                <div class="nes-select is-dark p-anken2__prdn5">
                <select name="development_language_id2">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
              </dd>
            </dl>
          </dl>

          <!-- 表示切り替えthirdBox -->
          <dl id="thirdBox">
            <dl class="mailform">
              <dt>スキル1</dt>
              <dd>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id1">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
                
                <dt>スキル2</dt>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id2">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>

                <dt>スキル3</dt>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id3">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
              </dd>
            </dl>
          </dl>

          <!-- 表示切り替えfourthbox -->
          <dl id="fourthBox">
            <dl class="mailform">
              <dt>スキル1</dt>
              <dd>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id1">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
                
                <dt>スキル2</dt>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id2">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>

                <dt>スキル3</dt>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id3">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>

                <dt>スキル4</dt>
                <div class="nes-select is-dark p-anken2__prdn4">
                <select name="development_language_id4">
                    @foreach ($development_languages as $language)
                    <option value="{{$language->id}}">{{$language->language_name}}</option> 
                    @endforeach    
                </select>
                </div>
              </dd>
            </dl>
          </dl>
        </table>

              <!-- 期限 -->
              <label for="dark_select" style="color:#fff;" >期限</label><br>
                  @if($errors->has('deadline'))
                    {{ $errors->first('deadline') }}
                  @endif
              <input type="date" class="nes-input is-dark p-anken2__deadline"
                      aria-describedby="basic-addon2" name="deadline" value="{{ old('deadline') }}">
              </label><br>
                  
              <!-- 特記事項 -->
              <label for="dark_select" style="color:#fff;">特記事項</label><br>
                @if($errors->has('remarks'))
                  {{ $errors->first('remarks') }}
                @endif
              <textarea name="remarks" id="" class="nes-textarea is-dark p-anken2__textarea" aria-describedby="basic-addon2" placeholder="特記事項があれば入力してください">{{ old('remarks') }}</textarea>
              <!-- <input type="text" class="nes-input is-dark p-form__portfolio" placeholder="とっきじこう" aria-describedby="basic-addon2" name="remarks"> -->
              {{-- <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" placeholder="れんらくさき"name="remarks"> --}}
              <br>

              <!-- 募集人数 -->
              <label for="dark_select" style="color:#fff;">募集人数</label><br>
                @if($errors->has('number_of_person'))
                  {{ $errors->first('number_of_person') }}
                @endif
              <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" placeholder="募集人数を入力してください" name="number_of_person" value="{{ old('number_of_person') }}"> 人
              <br>
              <!-- <input type="number" class="" placeholder="ぼしゅうにんずう"aria-describedby="basic-addon2" name="number_of_person"> -->

              <!-- 成功報酬 -->
              <label for="dark_select" style="color:#fff;">成功報酬</label><br>
                @if($errors->has('success_fee'))
                  {{ $errors->first('success_fee') }}
                @endif
              <input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" placeholder="金額を入力してください" name="success_fee" value="{{ old('success_fee') }}"> 円
              <br>
              <!-- <input type="number" class="" placeholder="せいこうほしゅう"aria-describedby="basic-addon2" name="success_fee"> --> 

              <!-- 案件ランク -->
              <label>案件ランク
                <div class="nes-select is-dark p-anken2__prdn3">
                @if($errors->has('rank'))
                  {{ $errors->first('rank') }}
                @endif
                <select name="rank" id="rank">
                        @foreach ($rank_of_difficulties as $item)
                            <option value="{{$item->id}}">{{$item->rank}}</option> 
                        @endforeach
                </select>
                </div>
              </label><br> 

              
              <!-- 確認ボタン -->
              <input type="submit" class="nes-btn is-primary p-acinfo__btn" value="確認">

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
    {{-- 頑張った --}}