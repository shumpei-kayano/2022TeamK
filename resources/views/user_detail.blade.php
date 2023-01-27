@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

<h1 class="p-form">ポートフォリオ</h1>
<div class="p-port">
    <div class="nes-container is-rounded is-dark" style="height: 600px;">
        {{-- ポートフォリオがあった場合の処理 --}}

        <div class="p-port__container">
            <div class="p-port__left">
                    <!-- 名前 -->
                    <label for="name" style="color:#fff;" >名前<br>
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" disabled value='{{ $portfolio->name }}'><br>

                    <!-- メールアドレス -->
                    <label for="mail" style="color:#fff;" >メールアドレス<br>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                            <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" disabled value='{{ $portfolio->email }}'><br>

                    <!-- 電話番号 -->
                    <label for="tel" style="color:#fff;" >電話番号<br>
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" disabled value='{{ $portfolio->tel }}'><br>

                <!-- 最終学歴 -->
                <label for="gakureki" style="color:#fff;" >最終学歴<br>
                    @if($errors->has('educational_background'))
                        {{ $errors->first('educational_background') }}
                    @endif
                        <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" disabled value='{{ $portfolio->educational_background }}'><br>

                <!-- 生年月日 -->
                <label for="birthday" style="color:#fff;" >生年月日<br>
                    @if($errors->has('birthday'))
                        {{ $errors->first('birthday') }}
                    @endif
                        <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" disabled value="yyyy/mm/dd" name="birthday">
             </div>

            @php
                $devLan1 = DB::table('development_languages')->find($portfolio->development_language_id1);
                $devLan2 = DB::table('development_languages')->find($portfolio->development_language_id2);
                $devLan3 = DB::table('development_languages')->find($form->development_language_id3);
                $devLan4 = DB::table('development_languages')->find($form->development_language_id4);
            @endphp

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

            <!-- 自己PR -->
            <div class="p-port__PR">
                <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                    <textarea name="self_pr" id="" cols="27" rows="19" class="nes-textarea is-dark" readonly>{{ $portfolio->self_pr }}</textarea>
                </div>
                </div>
    </div>

    {{-- <a href="{{ route('approval', ['id'=>$order_received_matter->user_id]) }}" class="">承認</a>
    <a href="{{ route('rejected', ['id'=>$order_received_matter->user_id]) }}" class="">却下</a> --}}
    <form method="POST" action="{{ route('approval', ['id'=>$form]) }}">
        @csrf
        <button type="submit">承認</button>
    </form>
    <form method="POST" action="{{ route('rejected', ['id'=>$form]) }}">
        @csrf
        <button type="submit">却下</button>
    </form>
</div>
@endsection