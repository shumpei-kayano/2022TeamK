@extends('layouts.app')

@section('title','ポートフォリオ作成')

@section('content')


    <h1 class="p-form">ポートフォリオ作成</h1>
    <div class="p-port">
        <div class="nes-container is-rounded is-dark" style="height: 600px;">
            <form action='{{ route('portfolio_create') }}'method='post' class="p-form__form">
                @csrf
                <div class="p-port__container">
                    <div class="p-port__left">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            {{-- userId <input type="int" name="user_id"> --}}

                            <!-- 名前 <br><input type="text" name='name'><br> -->        
                            <label for="name" style="color:#fff;" >名前<br>
                            @if($errors->has('name'))
                                {{ $errors->first('name') }}
                            @endif
                            <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name"><br>
                            
                            <!-- メールアドレス <br><input type="text" name='email'><br> -->
                            <label for="mail" style="color:#fff;" >メールアドレス<br>
                            @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                                <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email"><br>

                            <!-- でんわばんごう <br><input type="text" name='tel'><br> -->
                            <label for="tel" style="color:#fff;" >でんわばんごう<br>
                            @if($errors->has('tel'))
                                {{ $errors->first('tel') }}
                            @endif
                                <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel"><br>
                            
                            <!-- さいしゅうがくれき <br><input type="text" name='educational_background'><br> -->
                            <label for="gakureki" style="color:#fff;" >さいしゅうがくれき<br>
                            @if($errors->has('educational_background'))
                                {{ $errors->first('educational_background') }}
                            @endif
                                <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background"><br>
                            
                            <label for="birthday" style="color:#fff;" >生年月日<br>
                            @if($errors->has('birthday'))
                                {{ $errors->first('birthday') }}
                            @endif
                                <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" value="yyyy/mm/dd" name="birthday">

                    </div>

                    <!-- ここの下の部分は１つずつdivで囲んで横並びにさせる！！！ -->
                    {{-- <div class="p-port__right"> --}}
                    <div class="p-port__right">

                        <div class="p-fort__aaa">
                            <div class="p-port__prdn1">   
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご１</label><br>
                                        <div class="nes-select is-dark p-port__prdn">
                                            <select name="development_language_id1" required id="dark_select">
                                                @foreach ($items as $item)
                                                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                                {{-- <p>{{  $item->language_name  }}</p> --}}
                                                @endforeach <br>
                                            </select><br>
                                        </div>
                            </div>

                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん1 </label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year1" required id="dark_select"  class="p-port__prdn">
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <div class="p-fort__bbb">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご２</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                    <select type="number" name="development_language_id2" required id="dark_select">
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん2</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year2" required id="dark_select"  class="p-port__prdn">
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <div class="p-fort__ccc">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご３</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id3" required id="dark_select"> 
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん3</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year3" required id="dark_select"  class="p-port__prdn">
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        
                        <div class="p-fort__ddd">
                            <div class="p-port__prdn1">              
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id4" required id="dark_select"> 
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year4" required id="dark_select"  class="p-port__prdn">
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <div class="p-fort__eee">
                            <div class="p-port__prdn1">  
                                <label for="dark_select" style="color:#fff;">がくしゅうげんご５</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id5" required id="dark_select"> 
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                                            {{-- <p>{{  $item->language_name  }}</p> --}}
                                            @endforeach <br>
                                        </select><br>
                                    </div>
                            </div>

                            <div class="p-port__prdn2">
                                <label for="dark_select" style="color:#fff;">がくしゅうきかん５</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_year5" required id="dark_select"  class="p-port__prdn">
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- 自己PR -->
                    <div class="p-port__PR">
                        <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                        @if($errors->has('self_pr'))
                                {{ $errors->first('self_pr') }}
                        @endif
                            <textarea name="self_pr" id="" cols="27" rows="19" class="nes-textarea is-dark"></textarea>
                    </div>
                </div>
                {{-- 作成ボタン --}}
                <div class="p-acinfo__btn-container p-port__btn">
                    <button type="submit" class="nes-btn is-success p-acinfo__btn">さくせい</button>
                <div>
            </form>
        </div>
    </div>
@endsection
