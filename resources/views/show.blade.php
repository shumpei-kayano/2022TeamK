
@extends('layouts.ap')
@section('title')
@endsection

@section('main')

    <div class="p-form">
    <div class="p-form__midasi">
        <h1>案件検索</h1>
    </div>


    <form action="{{route('show')}}" method="GET">
        <div class="">
            <label>キーワード
            <input type="search" name="keyword" placeholder="キーワードを入力" value="{{$keyword}}">
            </label>
        </div>

        <div class="pldwn">
                <div class="p-form__eria">
                    <select class="form-select" aria-label="Default select example"name="prefectures_id" >
                        <option value="" selected>エリアを選択してください</option>
                        @foreach ($prefectures as $prefecture)
                            <option value="{{$prefecture->id}}">{{$prefecture->prefectures_name}}</option> 
                        @endforeach
                    </select>
                </div>
    
                <div class="p-form__oc">
                    <label for="">職種
                    <select class="form-select" aria-label="Default select example" name="occupation_id">
                        <option value="" selected>全て</option>
                        @foreach ($occupations as $occupation)
                            <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                        @endforeach
                    </select>
                </label>
                </div>

                <div class="p-form__oc">
                    <label for="">レベル
                    <select class="form-select" aria-label="Default select example" name="level_id">
                        <option value="" selected>全て</option>
                        @foreach ($rank_of_difficulties as $level)
                            <option value="{{$level->id}}">{{$level->rank}}</option> 
                        @endforeach
                    </select>
                </label>
                </div>
            </div>

                <button type="submit" class="btn btn-secondary">検索</button>
            </form>

<div>
    <table>
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
            <td>{{$item->remarks}}</td>
            <td><a href="{{ route('matter.detail', ['id'=>$item->id]) }}" class="">詳細</a></td>
        </tr>
        @endforeach
    </table>
</div>

</div>


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
   

@endsection