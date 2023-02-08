@extends('layouts.app')

@section('title')
    確認
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


/* //////////////////// */


.tooltip { /* 補足説明するテキストのスタイル */
  position: relative;
  cursor: pointer;
  padding: 0 5px;
  font-size: 0.9em;
  color: #4682b4;
}
 
.description_right { /* ツールチップのスタイル */
  width: 150px; /* 横幅 */
  position: absolute;
  top: 50%;
  left: 80%; /* X軸の位置 */
  transform: translateY(-50%);
  padding: 8px;
  border-radius: 10px; /* 角の丸み */
  background-color: #666;
  font-size: 0.7em;
  color: #fff;
  text-align: center;
  visibility: hidden; /* ツールチップを非表示に */
  opacity: 0; /* 不透明度を0％に */
  z-index: 1;
  transition: 0.5s all; /* マウスオーバー時のアニメーション速度 */
}
 
.tooltip:hover .description_right { /* マウスオーバー時のスタイル */
  left: 100%; /* X軸の位置 */
  visibility: visible; /* ツールチップを表示 */
  opacity: 1; /* 不透明度を100％に */
}

</style>

<h1 class="p-form" style="padding-top:55px">確認</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-titlep-form__container2" style="width:600px; overflow: scroll; overflow-x:hidden; max-height: 400px; border: 5px solid #fff; border-radius: 10px;  padding-top:0; margin-top:-26px;  padding-left:0; padding-right:0;">
        <table class="p-show" style="color:#fff">
            <thead>
            <tr>
                <th>案件名</th>
                <th>企業名</th>
                <th style="padding-left:1px; width:150px;">合否</th>
            </tr>
            </thead>
        @foreach($order_received_matters as $item)
            @php
                $matter =  DB::table('matters')->find($item->matter_id );
                $com = DB::table('users')->find($item->create_user_id); 
                $ado = 0;
                if ($item->adoption_flg == 0) {
                    $ado = "待ち";
                    $color = "color:white;";
                }
                else if ($item->adoption_flg == 1) {
                    $ado = "採用";
                    $color = "color:#FF1493;";
                }
                else {
                    $ado = "不採用";
                    $color = "color:#87CEFA;";
                }
            @endphp
                <tbody>
                <tr style="text-align: center">
                    <td class="p-show__tokki" style="padding-left: 20px;">{{ $matter->matter_name }}</td>
                    <td>{{ $com->name }}</td>
                    <td style="{{$color}} height:35px; width:60px; text-align:center;  padding-right:10px; " >{{ $ado }}</td>
                    
                </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</div>


@endsection