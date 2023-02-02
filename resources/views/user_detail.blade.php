@extends('layouts.app')

@section('title','ポートフォリオ詳細')

@section('content')

<div class="p-port">

    <h1 class="p-form">ポートフォリオの詳細</h1>
    @php
        $orm = DB::table('order_received_matters')->find($form);
    @endphp
    {{-- {{dd($orm)}} --}}
    @if ($portfolio != null)
    {{-- ポートフォリオがあった場合の処理 --}}
    <div class="nes-container is-rounded is-dark" style="height: 600px;">
        <div class="p-port__container">
            <div class="p-port__left">
                    <!-- 名前 -->
                    <label for="name" style="color:#fff;" >名前
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" disabled value='{{ $portfolio->name }}'>

                    <!-- メールアドレス -->
                    <label for="mail" style="color:#fff;" >メールアドレス
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                            <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" disabled value='{{ $portfolio->email }}'>

                    <!-- 電話番号 -->
                    <label for="tel" style="color:#fff;" >電話番号
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" disabled value='{{ $portfolio->tel }}'>

                <!-- 最終学歴 -->
                <label for="gakureki" style="color:#fff;" >最終学歴
                    @if($errors->has('educational_background'))
                        {{ $errors->first('educational_background') }}
                    @endif
                        <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" disabled value='{{ $portfolio->educational_background }}'>

                <!-- 生年月日 -->
                <label for="birthday" style="color:#fff;" >生年月日
                    @if($errors->has('birthday'))
                        {{ $errors->first('birthday') }}
                    @endif
                        <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" disabled value="yyyy/mm/dd" name="birthday">
             </div>

        <div class="p-port__right">

            <!-- 学習言語1 -->
             <div class="p-fort__aaa">
                <div class="p-port__prdn1">   
                    <label for="dark_select" style="color:#fff;">学習言語１</label><br>
                            <div class="nes-select is-dark p-port__prdn">
                                <select name="development_language_id1" required id="dark_select" disabled>
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
                            <select type="number" name="development_year1" required id="dark_select" class="p-port__prdn" disabled>
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
                        <select type="number" name="development_language_id2" required id="dark_select" disabled>
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
                            <select type="number" name="development_year2" required id="dark_select" class="p-port__prdn" disabled>
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
                            <select type="number" name="development_language_id3" required id="dark_select" disabled> 
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
                            <select type="number" name="development_year3" required id="dark_select" class="p-port__prdn" disabled>
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
                            <select type="number" name="development_language_id4" required id="dark_select" disabled> 
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
                            <select type="number" name="development_year4" required id="dark_select" class="p-port__prdn" disabled>
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
                    <textarea name="self_pr" class="nes-textarea is-dark p-form__Textarea" readonly>{{ $portfolio->self_pr }}</textarea>
                </div>
                </div>
                {{-- {{dd($portfolio)}} --}}
    @if($orm->adoption_flg == 0)      
    <form method="POST" action="{{ route('approval', ['id'=>$form]) }}">
        <div class="p-syounin__btn1">
        @csrf
        <button type="submit" class="nes-btn is-primary p-acinfo__btn" 
        onclick='return confirm("承認してもよろしいでしょうか？");'>承認する</button>
    </div>
    </form>
    <form method="POST" action="{{ route('rejected', ['id'=>$form]) }}">
        <div class="p-syounin__btn2">
        @csrf
        <button type="submit" class="nes-btn is-error p-acinfo__btn"
         onclick='return confirm("却下してもよろしいでしょうか？");'>却下する</button>
        </div>
    </form>
    @endif
    {{-- ポートフォリオがない場合 --}}
    @else
    @if($orm->adoption_flg == 0)  
    <div class="p-acinfo__container2">
        <div class="nes-container is-rounded is-dark p-acinfo">
            <p style="padding-top: 20px; font-weight:bolder;">ポートフォリオが作成されていませんが、よろしいですか？</p>  
    <div class="btn" style="float: left; display:flex; text-align:center; padding-left:145px;padding-bottom:20px;">

    <form method="POST" action="{{ route('approval', ['id'=>$form]) }}">
        <div class="p-syounin__btn3" style=" padding-right:20px;">
        @csrf
        <button type="submit" class="nes-btn is-primary p-acinfo__btn" 
        onclick='return confirm("承認してもよろしいでしょうか？");'>承認する</button>
    </div>
    </form>
    <form method="POST" action="{{ route('rejected', ['id'=>$form]) }}">
        <div class="p-syounin__btn4">
        @csrf
        <button type="submit" class="nes-btn is-error p-acinfo__btn"
         onclick='return confirm("却下してもよろしいでしょうか？");'>却下する</button>
        </div>
    </form>
    @endif
    </div>
    </div>
</div>
    @endif
</div>
</div>
@endsection