@extends('layouts.app')

@section('title','ポートフォリオ確認・編集')

@section('content')

<div class="p-form">
<h1 class="p-form">ポートフォリオ確認・編集</h1>
<div class="p-acinfo__container">
    <div class="nes-container is-rounded is-dark p-acinfo">
<form action='{{ route('portfolio_update',) }}'method='post'>

    @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        {{-- userId <input type="int" name="user_id"> --}}
        名前: <br><input type="text" name='name' value='{{ $form->name }}'><br>
        メールアドレス: <br><input type="text" name='email'value='{{ $form->email }}'><br>
        でんわばんごう: <br><input type="text" name='tel'value='{{ $form->tel }}'><br>
        さいしゅうがくれき: <br><input type="text" name='educational_background'value='{{ $form->educational_background }}'><br>
        がくしゅうげんご1: <br><select name="development_language_id1">
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        がくしゅうきかん1: <br><select type="number" name="development_year1">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
                 </select><br>
        がくしゅうげんご2: <br><select type="number" name="development_language_id2"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        がくしゅうきかん2: <br><select type="number" name="development_year2">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        がくしゅうげんご3: <br><select type="number" name="development_language_id3"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
        がくしゅうきかん3: <br><select type="number" name="development_year3">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        がくしゅうげんご4: <br><select type="number" name="development_language_id4"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        がくしゅうきかん4: <br><select type="number" name="development_year4">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        がくしゅうげんご5: <br><select type="number" name="development_language_id5"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        がくしゅうきかん5: <br><select type="number" name="development_year5">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        自己PR: <br><input type="text" name="self_pr"value='{{ $form->self_pr }}'> <br>
        生年月日:<br> <input type="date" value="yyyy/mm/dd" name="birthday"value='{{ $form->birtday }}'>    
    </div>
    </div>

<br><input type="submit" class="nes-btn is-success" value="作成">

    </form>
</div>

@endsection