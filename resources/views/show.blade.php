<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/toggle-menu.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @extends('layouts.ap')
@section('title')
@endsection

@section('main')

    <div class="p-form">
    <div class="p-form__midasi">
        <h1>案件検索</h1>
    </div>


    <form action="{{ route(matter.search)}}" method="POST">
        <div class="">
            <label>キーワード</label>
            <input type="text" name="keyword" id="key" placeholder="キーワードを入力">
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
                    <select class="form-select" aria-label="Default select example" name="occupation_id">
                        <option value="" selected>職種を選択してください</option>
                        @foreach ($occupations as $occupation)
                            <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>

                <button type="submit" class="btn btn-secondary">検索</button>
            </form>

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