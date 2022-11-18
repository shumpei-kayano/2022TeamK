@extends('layouts.app')

@section('title','ポートフォリオ作成')

@section('content')

<div class="p-form">
<h1 class="p-form">ポートフォリオ作成</h1>
<div class="p-acinfo__container">
    <div class="nes-container is-rounded is-dark p-acinfo">
    <form action='{{ route('portfolio_create') }}'method='post'>

        @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            {{-- userId <input type="int" name="user_id"> --}}

            <!-- 名前 <br><input type="text" name='name'><br> -->        
            <label for="dark_field" style="color:#fff;" >名前<br>
            <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" name="name"><br>

            <!-- メールアドレス <br><input type="text" name='email'><br> -->
            <label for="dark_field" style="color:#fff;" >メールアドレス<br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" name="email"><br>

            <!-- でんわばんごう <br><input type="text" name='tel'><br> -->
            <label for="dark_field" style="color:#fff;" >でんわばんごう<br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" name="tel"><br>
            
            <!-- さいしゅうがくれき <br><input type="text" name='educational_background'><br> -->
             <label for="dark_field" style="color:#fff;" >さいしゅうがくれき<br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__portfolio" name="educational_background"><br>

 
                


        <!-- ここの下の部分は１つずつdivで囲んで横並びにさせる！！！ -->
    <div class="p-port">
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


{{----------------------------------------------------------------------------------------------------}}


        <div class="p-fort__aaa">
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


{{----------------------------------------------------------------------------------------------------}}


        <div class="p-fort__aaa">
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


{{----------------------------------------------------------------------------------------------------}}

        
        <div class="p-fort__aaa">
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


{{----------------------------------------------------------------------------------------------------}}


        <div class="p-fort__bbb">
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


{{----------------------------------------------------------------------------------------------------}}
            


            <!-- 自己PR <br><input type="text" name="self_pr"> <br> -->
        <div class="p-port__PR">
            <label for="dark_field" style="color:#fff; margin-top: 20px;" >自己PR</label><br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__PR" name="self_pr"><br>
        </div>


            生年月日<br> <input type="date" value="yyyy/mm/dd" name="birthday"><br>
        </div>
        </div>
    </div>




        <br><input type="submit" class="nes-btn is-success" value="作成">

        </form>
        </div> 
@endsection
