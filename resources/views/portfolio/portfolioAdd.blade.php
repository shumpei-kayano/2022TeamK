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
            がくしゅうげんご1 <br><select name="development_language_id1">
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            がくしゅうきかん1 <br><select type="number" name="development_year1">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
                     </select><br>
            がくしゅうげんご2 <br><select type="number" name="development_language_id2"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            がくしゅうきかん2 <br><select type="number" name="development_year2">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            がくしゅうげんご3 <br><select type="number" name="development_language_id3"> 
                    @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                    {{-- <p>{{  $item->language_name  }}</p> --}}
                    @endforeach <br>
                        </select><br>
            がくしゅうきかん3 <br><select type="number" name="development_year3">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            がくしゅうげんご4 <br><select type="number" name="development_language_id4"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            がくしゅうきかん4 <br><select type="number" name="development_year4">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            がくしゅうげんご5 <br><select type="number" name="development_language_id5"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            がくしゅうきかん5 <br><select type="number" name="development_year5">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            
            <!-- 自己PR <br><input type="text" name="self_pr"> <br> -->
            <label for="dark_field" style="color:#fff;" >自己PR<br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__PR" name="self_pr"><br>
            生年月日<br> <input type="date" value="yyyy/mm/dd" name="birthday"><br>
        </div>
        </div>

        <br><input type="submit" class="nes-btn is-success" value="作成">

        </form>
        </div> 
@endsection
