@extends('layouts.app')

@section('title','ポートフォリオ確認・編集')

@section('content')

<div class="p-port">
        @if ($form != null)

        {{-- ポートフォリオがあった場合の処理 --}}
        <h1 class="p-form">ポートフォリオ確認・編集</h1>
            <div class="nes-container is-rounded is-dark" style="height: 600px;">
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
                    <label for="tel" style="color:#fff;" >電話番号（ハイフンなし）
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" value='{{ $form->tel }}'>
                    <!--  
                    <label for="tel" style="color:#fff;" >でんわばんごう<br>
                        <input type="tel" id="dark_field" class="nes-input is-dark p-form__portfolio" name="tel" value='{{ $form->tel }}'><br>
                           -->

                    <!-- 最終学歴 -->
                    <label for="gakureki" style="color:#fff;" >最終学歴
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
                            <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" value="{{ $form->birthday }}" name="birthday">
                    </div>
                    

                    
                    <div class="p-port__right">

                    @php
                        $devLan1 = DB::table('development_languages')->find($form->development_language_id1);
                        $devLan2 = DB::table('development_languages')->find($form->development_language_id2);
                        $devLan3 = DB::table('development_languages')->find($form->development_language_id3);
                        $devLan4 = DB::table('development_languages')->find($form->development_language_id4);
                    @endphp

                    @if($form->development_year1 == 0)
                        <option hidden>{{ $year1 = "3か月未満" }}</option>
                    @elseif ($form->development_year1 == 1)
                        <option hidden>{{ $year1 = "6か月未満" }}</option>
                    @elseif ($form->development_year1 == 2)
                        <option hidden>{{ $year1 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year1 = "12か月以上" }}</option>
                    @endif

                    @if($form->development_year2 == 0)
                        <option hidden>{{ $year2 = "3か月未満" }}</option>
                    @elseif ($form->development_year2 == 1)
                        <option hidden>{{ $year2 = "6か月未満" }}</option>
                    @elseif ($form->development_year2 == 2)
                        <option hidden>{{ $year2 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year2 = "12か月以上" }}</option>
                    @endif

                    @if($form->development_year3 == 0)
                        <option hidden>{{ $year3 = "3か月未満" }}</option>
                    @elseif ($form->development_year3 == 1)
                        <option hidden>{{ $year3 = "6か月未満" }}</option>
                    @elseif ($form->development_year3 == 2)
                        <option hidden>{{ $year3 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year3 = "12か月以上" }}</option>
                    @endif

                    @if($form->development_year4 == 0)
                        <option hidden>{{ $year4 = "3か月未満" }}</option>
                    @elseif ($form->development_year4 == 1)
                        <option hidden>{{ $year4 = "6か月未満" }}</option>
                    @elseif ($form->development_year4 == 2)
                        <option hidden>{{ $year4 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year4 = "12か月以上" }}</option>
                    @endif

                        <!-- 学習言語1 -->
                        <div class="p-fort__aaa">
                            <div class="p-port__prdn1">   
                                <label for="dark_select" style="color:#fff;">学習言語１</label><br>
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
                                <label for="dark_select" style="color:#fff;">学習期間1 </label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year1" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year1 }}" selected>{{ $year1 }}</p><br></option>
                                            {{-- <option hidden>{{ $year1 }}</option> --}}
                                            <option value="0">3か月未満</option>
                                            <option value="1">6か月未満</option>
                                            <option value="2">9か月未満</option>
                                            <option value="3">12か月以上</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                         <!-- 学習言語2 -->
                        <div class="p-fort__bbb">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">学習言語２</label><br>
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
                                <label for="dark_select" style="color:#fff;">学習期間2</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year2" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year2 }}" selected>{{ $year2 }}</p><br></option>
                                            <option value="0">3か月未満</option>
                                            <option value="1">6か月未満</option>
                                            <option value="2">9か月未満</option>
                                            <option value="3">12か月以上</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            学習期間2: <br><select type="number" name="development_year2">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->

                         <!-- 学習言語3 -->
                        <div class="p-fort__ccc">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">学習言語３</label><br>
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
                                <label for="dark_select" style="color:#fff;">学習期間3</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year3" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year3 }}" selected>{{ $year3 }}</p><br></option>
                                            <option value="0">3か月未満</option>
                                            <option value="1">6か月未満</option>
                                            <option value="2">9か月未満</option>
                                            <option value="3">12か月以上</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            学習期間3: <br><select type="number" name="development_year3">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->
                        
                         <!-- 学習言語4 -->
                        <div class="p-fort__ddd">
                            <div class="p-port__prdn1">              
                                <label for="dark_select" style="color:#fff;">学習言語４</label><br>
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
                                <label for="dark_select" style="color:#fff;">学習期間４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year4" required id="dark_select"  class="p-port__prdn">
                                            <option value="{{ $form->development_year4 }}" selected>{{ $year4 }}</p><br></option>
                                            <option value="0">3か月未満</option>
                                            <option value="1">6か月未満</option>
                                            <option value="2">9か月未満</option>
                                            <option value="3">12か月以上</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 
                            学習期間4: <br><select type="number" name="development_year4">
                            <option value="0">3か月</option>
                            <option value="1">6か月</option>
                            <option value="2">9か月</option>
                            <option value="3">12か月</option>
                            </select><br>
                         -->

                         <!-- 学習言語5 -->
                        {{-- <div class="p-fort__eee">
                            <div class="p-port__prdn1">  
                                <label for="dark_select" style="color:#fff;">学習言語５</label><br>
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
                                <label for="dark_select" style="color:#fff;">学習期間５</label><br>
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
                            学習期間5: <br><select type="number" name="development_year5">
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
                            <textarea name="self_pr" id="" class="nes-textarea is-dark nes-textarea is-dark p-form__Textarea">{{ $form->self_pr }}</textarea>
                    </div>
                </div>

                <!-- 編集ボタン -->
                <div class="p-acinfo__btn-container p-port__btn">
                    <button type="submit" class="nes-btn is-primary p-acinfo__btn" onclick='return confirm("編集完了してもよろしいでしょうか？");'>編集する</button>
            <div>
                <!-- <br><input type="submit" class="nes-btn is-success" value="編集"> -->
        </form>

            @foreach ($order_received_matters as $order_received_matter)
                @if ($order_received_matter->evaluation == 1)
                    <!-- 案件名 -->
                        {{ $order_received_matter->matter->matter_name }}
                    <!-- ランク -->
                    @php
                        $users = DB::table('users')->find($order_received_matter->user_id);
                        $total_exe = $users->total_experience;
                        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
                        $rank = $ranks->rank;
                    @endphp
                    {{ $rank }}
                @endif
            @endforeach
            @else
            {{-- ポートフォリオがなかった場合の処理 --}}
            <div class="p-acinfo__container">
                    <div class="nes-container is-rounded is-dark p-portEdit__win" style="margin-top: 70px; text-align:center; padding-top:20px;">
                        <p>まだポートフォリオが<br>作成されてません。</p>
                        <a href="/portfolioAdd">作成画面へ</a>
                    </div>
                </div>
            @endif


@endsection

@foreach ($order_received_matters as $order_received_matter)
@if ($order_received_matter->evaluation == 1)
    {{-- ランクがEの時 --}}
    @if ($order_received_matter->matter->rank == 1)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがDの時 --}}
    @if ($order_received_matter->matter->rank == 2)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがCの時 --}}
    @if ($order_received_matter->matter->rank == 3)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがBの時 --}}
    @if ($order_received_matter->matter->rank == 4)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがAの時 --}}
    @if ($order_received_matter->matter->rank == 5)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがSの時 --}}
    @if ($order_received_matter->matter->rank == 6)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
    {{-- ランクがSSの時 --}}
    @if ($order_received_matter->matter->rank == 7)
    <!-- 案件名 -->
        {{ $order_received_matter->matter->matter_name }}
    <!-- ランク -->
    @php
        $users = DB::table('users')->find($order_received_matter->user_id);
        $total_exe = $users->total_experience;
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $total_exe)->first();
        $rank = $ranks->rank;
    @endphp
    {{ $rank }}
    @endif
@endif
@endforeach