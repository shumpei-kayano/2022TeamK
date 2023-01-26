@extends('layouts.app')

@section('title','ポートフォリオ作成')

@section('content')


 <div class="p-port">
            @if ($form === null)
            {{-- ポートフォリオがなかった場合の処理 --}}
    <h1 class="p-form">ポートフォリオ作成</h1>
        <div class="nes-container is-rounded is-dark" style="height: 600px;">
            <form action='{{ route('portfolio_create') }}'method='post' class="p-form__form">
                @csrf
                <div class="p-port__container">
                    <div class="p-port__left">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            {{-- userId <input type="int" name="user_id"> --}}

                            <!-- 名前 -->        
                            <label for="name" style="color:#fff;" >名前
                            {{-- @if($errors->has('name'))
                                {{ $errors->first('name') }}
                            @endif --}}
                            <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" value="{{ old('name') }}" placeholder="@if($errors->has('name')){{ $errors->first('name') }}
                            @endif">
                            

                            <!-- メールアドレス -->
                            <label for="mail" style="color:#fff;" >メールアドレス
                            {{-- @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif --}}
                                <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" value="{{ old('email') }}" placeholder="@if($errors->has('email')){{ $errors->first('email') }}
                            @endif">
                                

                            <!-- 電話番号 -->
                            <label for="tel" style="color:#fff;" >電話番号
                            {{-- @if($errors->has('tel'))
                                {{ $errors->first('tel') }}
                            @endif --}}
                                <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" value="{{ old('tel') }}" placeholder=" @if($errors->has('tel')){{ $errors->first('tel') }}
                            @endif">
                                
                            
                            <!-- 最終学歴 -->
                            <label for="gakureki" style="color:#fff;" >最終学歴
                            {{-- @if($errors->has('educational_background'))
                                {{ $errors->first('educational_background') }}
                            @endif --}}
                                <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" value="{{ old('educational_background') }}" placeholder="@if($errors->has('educational_background')){{ $errors->first('educational_background') }}
                            @endif">
                                
                            
                            <!-- 生年月日 -->
                            <label for="birthday" style="color:#fff;" >生年月日 <br>
                            @if($errors->has('birthday'))
                                {{ $errors->first('birthday') }}
                            @endif
                                <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" value="yyyy/mm/dd" name="birthday" value="{{ old('birthday') }}">

                            </div>

                    <!-- ここの下の部分は１つずつdivで囲んで横並びにさせる！！！ -->
                    {{-- <div class="p-port__right"> --}}
                    <div class="p-port__right">

                        <!-- 学習言語1 -->
                        <div class="p-fort__aaa">
                            <div class="p-port__prdn1">
                                <label for="dark_select" style="color:#fff;">学習言語１</label><br>
                                        <div class="nes-select is-dark p-port__prdn">
                                            <select name="development_language_id1" required id="dark_select" placeholder="@if($errors->has('development_language_id1')){{ $errors->first('development_language_id1') }}@endif">
                                                <option value="" selected>選択してください</option>
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
                                            <option value="" selected>選択してください</option>
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
                                <label for="dark_select" style="color:#fff;">学習言語２</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                    <select type="number" name="development_language_id2" required id="dark_select">
                                        <option value="" selected>選択してください</option>
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
                                            <option value="" selected>選択してください</option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 学習言語3 -->
                        <div class="p-fort__ccc">
                            <div class="p-port__prdn1"> 
                                <label for="dark_select" style="color:#fff;">学習言語３</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id3" required id="dark_select"> 
                                            <option value="" selected>選択してください</option>
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
                                            <option value="" selected>選択してください</option>
                                            <option value="0">3か月</option>
                                            <option value="1">6か月</option>
                                            <option value="2">9か月</option>
                                            <option value="3">12か月</option>
                                        </select><br>
                                    </div>
                            </div>
                        </div>

                        <!-- 学習言語4 -->
                        <div class="p-fort__ddd">
                            <div class="p-port__prdn1">              
                                <label for="dark_select" style="color:#fff;">学習言語４</label><br>
                                    <div class="nes-select is-dark p-port__prdn">
                                        <select type="number" name="development_language_id4" required id="dark_select">
                                            <option value="" selected>選択してください</option>
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
                                            <option value="" selected>選択してください</option>
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
                        {{-- @if($errors->has('self_pr'))
                                {{ $errors->first('self_pr') }}
                        @endif --}}
                            <textarea name="self_pr" id="" class="nes-textarea is-dark p-form__Textarea" placeholder="自分をアピールしまくろう！"  @if($errors->has('self_pr'))
                                {{ $errors->first('self_pr') }}
                        @endif>{{ old('self_pr') }}</textarea>
                    </div>
                </div>
                {{-- 作成ボタン --}}
                <div class="p-acinfo__btn-container p-port__btn">
                    <button type="submit" class="nes-btn is-success p-acinfo__btn">作成</button>
                <div>
            </form>

        </div>
    </div>
            @else
            {{-- ポートフォリオがあった場合の処理 --}}
            <div class="p-acinfo__container">
                <div class="nes-container is-rounded is-dark p-portEdit__win">
                    <p>もう既に作成されてます。</p>
                    <a href="/portfolio">戻る</a>
                </div>
            </div>
            @endif

<style>
    input::placeholder {
        color: #FFFF00;
    }
</style>
@endsection
