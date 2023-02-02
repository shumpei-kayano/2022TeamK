
@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<style>
    table {
            border-collapse: collapse;
            width: 100%;
            }
 th,td {
  padding: 1rem 2rem;
  text-align: center;
  border-bottom: 1px solid rgb(217, 206, 206);
  border-color: rgb(217, 206, 206);
 }

 th {
  position: sticky;
  top: 0;
  font-weight: normal;
  font-size: .875rem;
  color:black;
  background-color: rgb(217, 206, 206);
}

</style>

<h1 class="p-form" style="padding-top: 30px; padding-bottom:20px;">案件検索</h1>

<div class="p-form__show">

<div class="p-form__container" style="margin-left:20px; width:350px; text-align:center; padding-bottom:20px; ">
     <div class="nes-container is-dark with-title p-form__box" style="margin-right:40px;  border: 5px solid #fff; border-radius: 10px;">
    <form action="{{route('show')}}" method="GET">

            {{--キーワード検索--}}

            
                <label for="dark_field" style="color:#fff;" >キーワード</label><br>
                <input type="search" id="dark_field" class="nes-input is-dark " name="keyword" placeholder="キーワードを入力" value="{{$keyword}}" style="" >
            

            {{-- エリア検索 --}}

                    <!--<label for="dark_select" style="color:#fff">エリア</label>-->
                        <div class="nes-select is-dark" style="padding-bottom: 20px; padding-top: 20px;">
                            <select class="p-form__eriaselect" style="" aria-label="Default select example"name="prefectures_id" id="dark_select">
                                <option value="prefectures_id" selected>エリアを選択してください</option>
                                {{-- <option hidden>エリアを選択してください</option> --}}
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
                                @endforeach
                            </select>
                        </div>


            {{-- 職種検索 --}}
        
                    <!-- <label for="dark_select" style="color:#fff">しょくしゅ</label>-->
                        <div class=" nes-select is-dark ">
                            <select class="p-form__ocselect" aria-label="Default select example" name="occupation_id" id="dark_select">
                                <option value="" selected>職種を選択してください</option>
                                {{-- <option hidden>職種を選択してください</option> --}}
                                @foreach ($occupations as $occupation)
                                    <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                                @endforeach
                            </select>
                        </div>

            {{-- レベル検索 --}}
            
                    <!--<label for="dark_select" style="color:#fff">レベル</label>-->
                        <div class=" nes-select is-dark " style="padding-bottom: 20px; padding-top: 20px;">
                            <select class="p-form__levelselect" aria-label="Default select example" name="level_id" id="dark_select">
                                <option value="" selected>ランクを選択してください</option>
                                {{-- <option hidden>ランクを選択してください</option> --}}
                                @foreach ($rank_of_difficulties as $level)
                                    @php
                                    $levels = DB::table('ranks')->find($level->rank);
                                    $lev = $levels->rank;
                                    @endphp
                                    <option value="{{$level->id}}">{{$lev}}</option> 
                                @endforeach
                            </select>
                        </div>
        <div class="p-form__btn-container">
            {{-- <form action="{{route('show')}}" method="GET"> --}}
                <button type="submit" class="nes-btn is-success p-form__btn">検索</button>
            </form>
            </div>
          
    </div>
  
</div>
    {{-- <div class="p-form__btn-container"> --}}
    {{-- <form action="{{route('show')}}" method="GET"> --}}
        {{-- <button type="submit" class="nes-btn is-success p-form__btn">検索</button>
    </form>
    </div> --}}

{{-- <div class="p-show"> --}}
    <div class="p-acinfo__container2">
        <div class="nes-container is-dark with-title p-form__container2" style="display:flex; overflow: scroll; overflow-x:hidden; max-height: 525px; border: 5px solid #fff; border-radius: 10px; padding-top:0; margin-top:-26px;  padding-left:0; padding-right:0;">
    <table class="p-show"style="color:white height:40; display:flex;">
        <tr style="padding-left: 0; padding-right:0; height: 45px;">
            <th style="height: 45px;">案件名</th>
            <th style="height: 45px;">職種</th>
            <th style="height: 45px;">ランク</th>
            <th style="width: 40px; height:45px;">エリア</th>
            <th style="height: 45px;">特記事項</th>
            <th style="width: 30px; padding-left:1px; height:45px;">詳細</th>
        </tr>

        @foreach($items as $item)

        <tr style="height: 40;">
                @php
                $engs = DB::table('ranks')->find($item->rank);
                $eng = $engs->rank;
                @endphp
            <td class="p-show__tokki" style="padding-left: 20px; height:40px;">{{$item->matter_name}}</td>
            <td style="height: 40px;">{{$item->occupation_name}}</td>
            <td style="height: 40px;">{{ $eng }}</td>
            <td style="height: 40px;">{{$item->prefectures_name}}</td>
            {{-- <td>{{$item->deadline}}</td> --}}
            <td class="p-show__tokki" style="height: 40px;">{{$item->remarks}}</td>
            <td style="height: 40px;"><a href="{{ route('matter.detail', ['id'=>$item->id]) }}" style="height:35px; width:60px; text-align:center; padding-top:0px; padding-right:10px; color:aqua;">詳細</a></td>
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
   

