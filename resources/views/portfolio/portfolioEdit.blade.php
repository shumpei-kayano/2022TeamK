@extends('layouts.app')

@section('title','ポートフォリオ確認・編集')

@section('content')

<h1 class="p-form">ポートフォリオかくにん・へんしゅう</h1>
<div class="p-port">
    <div class="nes-container is-rounded is-dark" style="height: 600px;">
        @if ($form != null)
        {{-- ポートフォリオがあった場合の処理 --}}
        <form action='{{ route('portfolio_update',) }}'method='post'>
            @csrf
            <div class="p-port__container">
                <div class="p-port__left">
                    <input type="hidden" name="id" value="{{ $form->id }}">
                    {{-- userId <input type="int" name="user_id"> --}}
                    
                    <!-- 名前 -->
                    <label for="name" style="color:#fff;" >名前
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" value='{{ $form->name }}'>
                    <!--  
                    <label for="name" style="color:#fff;" >名前<br>
                        <input type="search" id="name" class="nes-input is-dark p-form__portfolio" name="name" value='{{ $form->name }}'><br>
                    -->
                        

                    <!-- メールアドレス -->
                    <label for="mail" style="color:#fff;" >メールアドレス
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                            <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" value='{{ $form->email }}'>
                    <!--  
                    <label for="mail" style="color:#fff;" >メールアドレス<br>
                        <input type="search" id="mail" class="nes-input is-dark p-form__portfolio" name="email" value='{{ $form->email }}'><br>
                        -->

                    <!-- 電話番号 -->
                    <label for="tel" style="color:#fff;" >でんわばんごう
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" value='{{ $form->tel }}'>
                    <!--  
                    <label for="tel" style="color:#fff;" >でんわばんごう<br>
                        <input type="tel" id="dark_field" class="nes-input is-dark p-form__portfolio" name="tel" value='{{ $form->tel }}'><br>
                           -->

                    <!-- 最終学歴 -->
                    <label for="gakureki" style="color:#fff;" >さいしゅうがくれき
                        @if($errors->has('educational_background'))
                            {{ $errors->first('educational_background') }}
                        @endif
                            <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" value='{{ $form->educational_background }}'>
                    <!--  
                    <label for="gakureki" style="color:#fff;" >さいしゅうがくれき<br>
                        <input type="search" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" value='{{ $form->educational_background }}'><br>
                        -->
                        
                    <!--生年月日 -->
                    <label for="birthday" style="color:#fff;" >生年月日
                        @if($errors->has('birthday'))
                            {{ $errors->first('birthday') }}
                        @endif
                            <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" value="{{ $form->birtday }}" name="birthday">
                    </div>
                    

                    
                    <div class="p-port__right">

                    @php
                        $devLan1 = DB::table('development_languages')->find($form->development_language_id1);
                        $devLan2 = DB::table('development_languages')->find($form->development_language_id2);
                        $devLan3 = DB::table('development_languages')->find($form->development_language_id3);
                        $devLan4 = DB::table('development_languages')->find($form->development_language_id4);
                    @endphp

                    @if($form->development_year1 == 0)
                        <option hidden>{{ $year1 = "3か月" }}</option>
                    @elseif ($form->development_year1 == 1)
                        <option hidden>{{ $year1 = "6か月" }}</option>
                    @elseif ($form->development_year1 == 2)
                        <option hidden>{{ $year1 = "9か月" }}</option>
                    @else
                        <option hidden>{{ $year1 = "12か月" }}</option>
                    @endif

                    @if($form->development_year2 == 0)
                        <option hidden>{{ $year2 = "3か月" }}</option>
                    @elseif ($form->development_year2 == 1)
                        <option hidden>{{ $year2 = "6か月" }}</option>
                    @elseif ($form->development_year2 == 2)
                        <option hidden>{{ $year2 = "9か月" }}</option>
                    @else
                        <option hidden>{{ $year2 = "12か月" }}</option>
                    @endif

                    @if($form->development_year3 == 0)
                        <option hidden>{{ $year3 = "3か月" }}</option>
                    @elseif ($form->development_year3 == 1)
                        <option hidden>{{ $year3 = "6か月" }}</option>
                    @elseif ($form->development_year3 == 2)
                        <option hidden>{{ $year3 = "9か月" }}</option>
                    @else
                        <option hidden>{{ $year3 = "12か月" }}</option>
                    @endif

                    @if($form->development_year4 == 0)
                        <option hidden>{{ $year4 = "3か月" }}</option>
                    @elseif ($form->development_year4 == 1)
                        <option hidden>{{ $year4 = "6か月" }}</option>
                    @elseif ($form->development_year4 == 2)
                        <option hidden>{{ $year4 = "9か月" }}</option>
                    @else
                        <option hidden>{{ $year4 = "12か月" }}</option>
                    @endif

                        <!-- 学習言語1 -->
                        <div class="p-fort__aaa">
                            <div class="p-port__prdn1">   
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご１</label><br>
                                        <div class="nes-select is-dark p-port__prdn">
                                            <select name="development_language_id1" required id="dark_select">
                                                <option value="{{ $form->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
                                                <option hidden>{{ $form->language_name }}</option>
                                                @foreach ($items as $item)
                                                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                                {{-- <p>{{  $item->language_name  }}</p> --}}
                                                @endforeach <br>
                                            </select><br>
                                        </div>
                            </div>

                             <!-- 学習期間1 -->
                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん1 </label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year1" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year1 }}" selected>{{ $year1 }}</p><br></option>
                                            {{-- <option hidden>{{ $year1 }}</option> --}}
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                         <!-- 学習言語2 -->
                        <div class="p-fort__bbb">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご２</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                    <select type="number" name="development_language_id2" required id="dark_select">
                                        <option value="{{ $form->development_language_id2 }}" selected>{{ $devLan2->language_name }}</p><br></option>
                                        {{-- <option hidden>選択してください</option> --}}
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                             <!-- 学習期間2 -->
                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん2</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year2" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year2 }}" selected>{{ $year2 }}</p><br></option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            がくしゅうきかん2: <br><select type="number" name="development_year2">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->

                         <!-- 学習言語3 -->
                        <div class="p-fort__ccc">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご３</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id3" required id="dark_select">
                                            <option value="{{ $form->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
                                            {{-- <option hidden>選択してください</option> --}}
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                             <!-- 学習期間3 -->
                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん3</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year3" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year3 }}" selected>{{ $year3 }}</p><br></option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            がくしゅうきかん3: <br><select type="number" name="development_year3">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->
                        
                         <!-- 学習言語4 -->
                        <div class="p-fort__ddd">
                            <div class="p-port__prdn1">              
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id4" required id="dark_select">
                                            <option value="{{ $form->development_language_id1 }}" selected>{{ $devLan1->language_name }}</p><br></option>
                                            {{-- <option hidden>選択してください</option> --}}
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                             <!-- 学習期間4 -->
                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year4" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year4 }}" selected>{{ $year4 }}</p><br></option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            がくしゅうきかん4: <br><select type="number" name="development_year4">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->

                         <!-- 学習言語5 -->
                        {{-- <div class="p-fort__eee">
                            <div class="p-port__prdn1">  
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご５</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id5" required id="dark_select">
                                            <option hidden>選択してください</option> 
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div> --}}


                             <!-- 学習期間5 -->
                            {{-- <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん５</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year5" required id="dark_select"  class="p-port__prdn">
                                            <option hidden>選択してください</option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div> --}}

                        <!-- 
                            がくしゅうきかん5: <br><select type="number" name="development_year5">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->

                    </div>
                    

                    <!-- 自己PR -->
                    <div class="p-port__PR">
                        <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                            <textarea name="self_pr" id="" cols="27" rows="19" class="nes-textarea is-dark">{{ $form->self_pr }}</textarea>
                    </div>
                </div>
                <!-- <label for="dark_field" style="color:#fff;" >自己PR<br> 
                    <input type="search" id="dark_field" class="nes-input is-dark p-form__PR" name="self_pr" value='{{ $form->self_pr }}'><br> -->

                <!-- 編集ボタン -->
                <div class="p-acinfo__btn-container p-port__btn">
                    <button type="submit" class="nes-btn is-success p-acinfo__btn">へんしゅう</button>
            <div>
                <!-- <br><input type="submit" class="nes-btn is-success" value="編集"> -->
        </form>
    </div>
</div>
            @else
            {{-- ポートフォリオがなかった場合の処理 --}}
                    {{-- <div class="nes-container is-rounded is-dark" style="height: 100px!important;"> --}}
                    
            @endif


@endsection

{{-- aiueo --}}