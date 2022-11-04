<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='{{ route('portfolio_create') }}'method='post'>
        @csrf
            名前: <br><input type="text" name='name'><br>
            メールアドレス: <br><input type="text" name='email'><br>
            電話番号: <br><input type="text" name='tel'><br>
            最終学歴: <br><input type="text" name='educational_background'><br>
            学習言語1: <br><select name="language"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            学習期間1: <br><select name="a">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
                     </select><br>
            学習言語2: <br><select name="language"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            学習期間2: <br><select name="a">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            学習言語3: <br><select name="language"> 
                    @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                    {{-- <p>{{  $item->language_name  }}</p> --}}
                    @endforeach <br>
                        </select><br>
            学習期間3: <br><select name="a">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            学習言語4: <br><select name="language"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            学習期間4: <br><select name="a">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            学習言語5: <br><select name="language"> 
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{  $item->language_name  }}</option>
                {{-- <p>{{  $item->language_name  }}</p> --}}
                @endforeach <br>
                    </select><br>
            学習期間5: <br><select name="a">
            <option value="0">3か月</option>
            <option value="1">6か月</option>
            <option value="2">9か月</option>
            <option value="3">12か月</option>
            </select><br>
            自己PR: <br><input type="text" name="self_pr"> <br>
            生年月日:<br> <input type="date" value="yyyy/mm/dd" name="birthday">
        </form>
        
</body>
</html>
