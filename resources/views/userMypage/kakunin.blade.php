@extends('layouts.app')

@section('title')
    確認
@endsection

@section('content')

<h1 class="p-form" style="padding-top:55px">確認</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-titlep-form__container2" style="width:600px; overflow: scroll; max-height: 400px; border: 5px solid #fff; border-radius: 10px;">
        <table class="p-show" style="">
            <thead>
            <tr>
                <th>案件名</th>
                <th>企業名</th>
                <th>合否</th>
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
                    $color = "color:blue;";
                }
                else {
                    $ado = "不採用";
                    $color = "color:red;";
                }
            @endphp
                <tbody>
                <tr style="text-align: center">
                    <td class="p-show__tokki">{{ $matter->matter_name }}</td>
                    <td>{{ $com->name }}</td>
                    <td style="{{$color}}">{{ $ado }}</td>
                    
                </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</div>

@endsection