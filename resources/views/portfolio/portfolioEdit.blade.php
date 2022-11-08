@extends('layouts.app')

@section('content')

<form action='{{ route('portfolio_create') }}'method='post'>
    @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        {{-- userId <input type="int" name="user_id"> --}}
        名前: <br><input type="text" name='name'><br>
        メールアドレス: <br><input type="text" name='email'><br>
        電話番号: <br><input type="text" name='tel'><br>
        最終学歴: <br><input type="text" name='educational_background'><br>
        学習言語1: <br><select name="development_language_id1">
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        学習期間1: <br><select type="number" name="development_year1">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
                 </select><br>
        学習言語2: <br><select type="number" name="development_language_id2"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        学習期間2: <br><select type="number" name="development_year2">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        学習言語3: <br><select type="number" name="development_language_id3"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
        学習期間3: <br><select type="number" name="development_year3">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        学習言語4: <br><select type="number" name="development_language_id4"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        学習期間4: <br><select type="number" name="development_year4">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        学習言語5: <br><select type="number" name="development_language_id5"> 
            @foreach ($items as $item)
            <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
            {{-- <p>{{  $item->language_name  }}</p> --}}
            @endforeach <br>
                </select><br>
        学習期間5: <br><select type="number" name="development_year5">
        <option value="0">3か月</option>
        <option value="1">6か月</option>
        <option value="2">9か月</option>
        <option value="3">12か月</option>
        </select><br>
        自己PR: <br><input type="text" name="self_pr"> <br>
        生年月日:<br> <input type="date" value="yyyy/mm/dd" name="birthday">

        <input type="submit" name="portfoliocreate" value="作成">
    </form>
    
@endsection