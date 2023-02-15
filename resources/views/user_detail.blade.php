@extends('layouts.appp')

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
                    @php
                        $devLan1 = DB::table('development_languages')->find($portfolio->development_language_id1);
                        $devLan2 = DB::table('development_languages')->find($portfolio->development_language_id2);
                        $devLan3 = DB::table('development_languages')->find($portfolio->development_language_id3);
                        $devLan4 = DB::table('development_languages')->find($portfolio->development_language_id4);
                    @endphp

                    @if($portfolio->development_year1 == 0)
                        <option hidden>{{ $year1 = "3か月未満" }}</option>
                    @elseif ($portfolio->development_year1 == 1)
                        <option hidden>{{ $year1 = "6か月未満" }}</option>
                    @elseif ($portfolio->development_year1 == 2)
                        <option hidden>{{ $year1 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year1 = "12か月以上" }}</option>
                    @endif

                    @if($portfolio->development_year2 == 0)
                        <option hidden>{{ $year2 = "3か月未満" }}</option>
                    @elseif ($portfolio->development_year2 == 1)
                        <option hidden>{{ $year2 = "6か月未満" }}</option>
                    @elseif ($portfolio->development_year2 == 2)
                        <option hidden>{{ $year2 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year2 = "12か月以上" }}</option>
                    @endif

                    @if($portfolio->development_year3 == 0)
                        <option hidden>{{ $year3 = "3か月未満" }}</option>
                    @elseif ($portfolio->development_year3 == 1)
                        <option hidden>{{ $year3 = "6か月未満" }}</option>
                    @elseif ($portfolio->development_year3 == 2)
                        <option hidden>{{ $year3 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year3 = "12か月以上" }}</option>
                    @endif

                    @if($portfolio->development_year4 == 0)
                        <option hidden>{{ $year4 = "3か月未満" }}</option>
                    @elseif ($portfolio->development_year4 == 1)
                        <option hidden>{{ $year4 = "6か月未満" }}</option>
                    @elseif ($portfolio->development_year4 == 2)
                        <option hidden>{{ $year4 = "9か月未満" }}</option>
                    @else
                        <option hidden>{{ $year4 = "12か月以上" }}</option>
                    @endif

        <div class="p-port__right">

            <!-- 学習言語1 -->
             <div class="p-fort__aaa">
                <div class="p-port__prdn3">   
                    <label for="dark_select" style="color:#fff;">学習言語１</label><br>
                            <div class="nes-select is-dark p-port__prdn">
                                <select name="development_language_id1" required id="dark_select" disabled>
                                    <option value="" selected>{{ $devLan1->language_name }}</p><br></option>
                                </select><br>
                            </div>
                </div>


                 <!-- 学習期間1 -->
                <div class="p-port__prdn4">
                    <label for="dark_select" style="color:#fff;">学習期間1 </label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="development_year1" required id="dark_select"  class="p-port__prdn" disabled>
                            <option value="" selected>{{ $year1 }}</p><br></option>
                            </select><br>
                        </div>
                </div>
            </div>


             <!-- 学習言語2 -->
            <div class="p-fort__bbb">
                <div class="p-port__prdn3"> 
                    <label for="dark_select" style="color:#fff;">学習言語２</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                        <select type="number" name="" required id="dark_select" disabled>
                            <option value="" selected>{{ $devLan2->language_name }}</p><br></option>
                            </select><br>
                        </div>
                </div>

                 <!-- 学習期間2 -->
                <div class="p-port__prdn4">
                    <label for="dark_select" style="color:#fff;">学習期間2</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="" required id="dark_select"  class="p-port__prdn" disabled>
                            <option value="" selected>{{ $year2 }}</p><br></option>
                            </select><br>
                        </div>
                </div>
            </div>


             <!-- 学習言語3 -->
            <div class="p-fort__ccc">
                <div class="p-port__prdn3"> 
                    <label for="dark_select" style="color:#fff;">学習言語３</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="development_language_id3" required id="dark_select" disabled> 
                                <option value="" selected>{{ $devLan3->language_name }}</p><br></option>
                            </select><br>
                        </div>
                </div>

                 <!-- 学習期間3 -->
                <div class="p-port__prdn4">
                    <label for="dark_select" style="color:#fff;">学習期間3</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="" required id="dark_select"  class="p-port__prdn" disabled>
                            <option value="" selected>{{ $year3 }}</p><br></option>
                            </select><br>
                        </div>
                </div>
            </div>


             <!-- 学習言語4 -->
            <div class="p-fort__ddd">
                <div class="p-port__prdn3">              
                    <label for="dark_select" style="color:#fff;">学習言語４</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="development_language_id4" required id="dark_select" disabled> 
                                <option value="" selected>{{ $devLan4->language_name }}</p><br></option>
                            </select><br>
                        </div>
                </div>

                 <!-- 学習期間4 -->
                <div class="p-port__prdn4">
                    <label for="dark_select" style="color:#fff;">学習期間４</label><br>
                        <div class="nes-select is-dark p-port__prdn">
                            <select type="number" name="" required id="dark_select"  class="p-port__prdn" disabled>
                            <option value="" selected>{{ $year4 }}</p><br></option>
                            </select><br>
                        </div>
                </div>
            </div>
        </div>

            <!-- 自己PR -->
            <div class="p-port__PR">
                <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                    <textarea name="self_pr" id="" class="nes-textarea is-dark nes-textarea is-dark p-form__Textarea" style="width:480px; height:250px; overflow-y: scroll; overflow-x:hidden; max-height:250px; min-height: 250px;" readonly>{{ $portfolio->self_pr }}</textarea>
            {{-- ランク別案件クリア数 --}}

            {{-- {{ $E = 0 }}
            {{ $D = 0 }}
            {{ $C = 0 }}
            {{ $B = 0 }}
            {{ $A = 0 }}
            {{ $S = 0 }}
            {{ $SS = 0 }} --}}
            @php
            $E = 0;
            $D = 0;
            $C = 0;
            $B = 0;
            $A = 0;
            $S = 0;
            $SS = 0;
            @endphp

            @foreach ($order_received_matters as $order_received_matter)
            {{-- {{dd($order_received_matter->rank)}} --}}
            {{-- ランクがEの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "1")
            <!-- ランク -->
                {{ $E += 1 }}
            @endif
            {{-- ランクがDの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "2")
            <!-- ランク -->
            {{ $D += 1 }}
            @endif
            {{-- ランクがCの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "3")
            <!-- ランク -->
            {{ $C += 1 }}
            @endif
            {{-- ランクがBの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "4")
            <!-- ランク -->
            {{ $B += 1 }}
            @endif
            {{-- ランクがAの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "5")
            <!-- ランク -->
            {{ $A += 1 }}
            @endif
            {{-- ランクがSの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "6")
            <!-- 案件名 -->
                {{ $order_received_matter->matter->matter_name }}
            <!-- ランク -->
            {{ $S += 1 }}
            @endif
            {{-- ランクがSSの時 --}}
            @if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "7")
            <!-- ランク -->
            {{ $SS += 1 }}
            @endif
            @endforeach
            
            <div class="p-acinfo__container3" style="width: 500px; height:150px; margin-top:0; display: flex; justify-content:center; ">
            <div class="nes-container is-rounded is-dark p-acinfo__win3" style="margin: auto; text-align:center; ">
                <p style="font-weight: 900; color:yellow">クリアした案件の記録（ランク）</p>

                <table style="table-layout:fixed;" width="400">
                    <tr>
                        <th>E</th>
                        <th>D</th>
                        <th>C</th>
                        <th>B</th>
                        <th>A</th>
                        <th>S</th>
                        <th>SS</th>
                    </tr>
                    <tr>
                        <td>{{$E}}</td>
                        <td>{{$D}}</td>
                        <td>{{$C}}</td>
                        <td>{{$B}}</td>
                        <td>{{$A}}</td>
                        <td>{{$S}}</td>
                        <td>{{$SS}}</td>
                </table>

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

</div>
</div>
@endsection