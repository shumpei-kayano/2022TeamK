
@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<h1 class="p-form">案件検索</h1>

<div class="p-form__container">

     <div class="nes-container is-dark with-title p-form__box">
    <form action="{{route('show')}}" method="GET">

            {{--キーワード検索--}}

            <div>
                <label for="dark_field" style="color:#fff;" >キーワード</label><br>
                <input type="search" id="dark_field" class="nes-input is-dark p-form__key" name="keyword" placeholder="キーワードを入力" value="{{$keyword}}">
            </div>

            {{-- エリア検索 --}}

                    <!--<label for="dark_select" style="color:#fff">エリア</label>-->
                        <div class="nes-select is-dark p-form__eria">
                            <select class="p-form__eriaselect" aria-label="Default select example"name="prefectures_id" required id="dark_select">
                                <option value="" selected>エリアを選択してください</option>
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
                                @endforeach
                            </select>
                        </div>


            {{-- 職種検索 --}}
        
                    <!-- <label for="dark_select" style="color:#fff">しょくしゅ</label>-->
                        <div class=" nes-select is-dark p-form__oc">
                            <select class="p-form__ocselect" aria-label="Default select example" name="occupation_id" required id="dark_select">
                                <option value="" selected>職種を選択してください</option>
                                @foreach ($occupations as $occupation)
                                    <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                                @endforeach
                            </select>
                        </div>

            {{-- レベル検索 --}}
            
                    <!--<label for="dark_select" style="color:#fff">レベル</label>-->
                        <div class=" nes-select is-dark p-form__level">
                            <select class="p-form__levelselect" aria-label="Default select example" name="level_id" required id="dark_select">
                                <option value="" selected>レベルを選択してください</option>
                                @foreach ($rank_of_difficulties as $level)
                                    <option value="{{$level->id}}">{{$level->rank}}</option> 
                                @endforeach
                            </select>
                        </div>
    </div>
</div>
    <div class="p-form__btn-container">
    {{-- <form action="{{route('show')}}" method="GET"> --}}
        <button type="submit" class="nes-btn is-success p-form__btn">検索</button>
    </form>
    </div>

<div class="p-show">
    <div class="p-acinfo__container2">
        <div class="nes-container is-dark with-title p-mypage__container" style=" width: 1200px;">
    <table style="color:white">
        <tr>
            <th>案件名</th>
            <th>職種</th>
            <th>レベル</th>
            <th>エリア</th>
            <th>特記事項</th>
        </tr>

        @foreach($items as $item)
        <tr>
            <td>{{$item->matter_name}}</td>
            <td>{{$item->occupation_name}}</td>
            <td>{{$item->rank}}</td>
            <td>{{$item->prefectures_name}}</td>
            <td style="width:15px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$item->remarks}}</td>
            <td><a href="{{ route('matter.detail', ['id'=>$item->id]) }}" class="nes-btn is-primary">詳細</a></td>
            {{-- <td>@if (Auth::check())
                @if (count($favorite) == 0) --}}
                    {{-- favoliteがなかったらお気に入り登録ボタン表示 --}}
                    {{-- <form action="{{route('favorite', ['id'=>$item->id])}}" method="POST">
                        @csrf
                        <input type="hidden" name="matter_id" value="{{$item->id}}">
                        <button type="submit">お気に入り登録</button>
                    </form>
                @else
                    @for ($i = 0; $i < count($favorite); $i++)

                        @if ($favorite[$i]['matter_id'] == $item->id)
                         --}}
                            {{-- favoriteがあったら削除ボタン表示 --}}
                            {{-- <form action="{{route('favorite.del', ['id'=>$item->id])}}" method="POST">
                                <input type="hidden" name="matter_id" value="{{$item->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">お気に入り解除{{$favorite[$i]['matter_id']}}</button>
                            </form>
                            @break
                        @else --}}
                            {{-- favoliteがなかったらお気に入り登録ボタン表示 --}}
                            {{-- <form action="{{route('favorite', ['id'=>$item->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="matter_id" value="{{$item->id}}">
                                <button type="submit">お気に入り登録{{$favorite[$i]['matter_id']}}</button>
                            </form>
                            @break
                        @endif
                                                    
                    @endfor 
                @endif      
              @endif</td> --}}
        </tr>
        @endforeach
    </table>

</div>
    </div>
        </div>
@endsection


   {{-- 下の入れてくれてたやつ見た目のいじり方わからんくて、そのまま残してます。 --}}
        {{-- <form action="" method="GET" class="p-form__key">
            <div class="p-form__key"> --}}
                {{-- キーワード：<input type="text" class="p-form__word"name="keyword" id="key" placeholder="キーワードを入力">
                    <input type="submit" class="p-form__btn" name="kensaku" id="kensaku" value="検索">   --}}
                    {{-- <label for="exampleDataList" class="form-label">キーワード</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="キーワードを入力してください">
                    <button type="submit" class="btn btn-secondary">検索</button>     
            </div>  
        </form>

        <div class="pldwn">
        <form action="" method="GET" class="p-form__eria">
            <div class="p-form__eria">
                <select class="form-select" aria-label="Default select example">

                    <option selected>エリアを選択してください</option>
                    <option value="1">北海道</option>
                    <option value="2">青森</option>
                    <option value="3">岩手</option>
                  </select>
            </div>

            <div class="p-form__oc">
                <select class="form-select" aria-label="Default select example">

                    <option selected>職種を選択してください</option>
                    <option value="1">SE</option>
                    <option value="2"> PG</option>
                    <option value="3">OP</option>
                  </select>
            </div>
        </form>
        </div> --}}
   

