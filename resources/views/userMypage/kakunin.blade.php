@extends('layouts.app')

@section('title')
    かくにん
@endsection

@section('content')

<h1 class="p-form" style="padding-top:55px">かくにん</h1>

<div class="favorite">
    <div class="nes-container is-dark with-title favorite__container">
        <table class="">
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
                }
                else if ($item->adoption_flg == 1) {
                    $ado = "採用";
                }
                else {
                    $ado = "不採用";
                }
            @endphp
                <tbody>
                <tr>
                    <td>{{ $matter->matter_name }}</td>
                    <td>{{ $com->name }}</td>
                    <td>{{ $ado }}</td>
                    <td><a href="{{}}" class="">詳細</a></td>
                </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</div>

@endsection