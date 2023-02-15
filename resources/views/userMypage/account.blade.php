@extends('layouts.app')

@section('title')
    アカウント情報
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


<h1 class="p-form" style="padding-top:45px;">アカウント情報</h1>

{{-- < style="float: left; display:flex; margin-left:310px;"> --}}

<div class="p-acinfo__container2">
    <div class="nes-container is-rounded is-dark p-acinfo p-acinfo__win">
        {{-- style="padding-bottom: 10px; border: 5px solid #fff; border-radius: 10px;" --}}
        <p>ユーザー名：{{ $user->name }}</p>
        <p>メールアドレス：{{ $user->email }}</p>
        <p>獲得経験値：{{ $user->total_experience }}</p>
        @php
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $user->total_experience)->first();
        $rank = $ranks->requirement_experience;
        $next = $ranks->requirement_experience - $user->total_experience;
        @endphp
        <p style="padding-bottom: 0px;">次のランクまで：{{ $next }}</p>
        <div class="p-acinfo__btn-container" style="margin-top:-10px;">
            <form action='{{ route('account_edit') }}' method="get" style="margin-top: -10px;">
                @csrf
                <button type="submit" class="nes-btn is-primary p-acinfo__btn" style="">編集</button>
            </form>
        </div>
    </div>

{{-- 装備（言語の追加） --}}

    <div class="nes-container is-rounded is-dark p-acinfo p-acinfo__win2">
        {{-- style=" width:200px;text-align:left; text-indent: 18px; padding-bottom:30px; border: 5px solid #fff; border-radius: 10px;" --}}
    @php
    $equipments = DB::table('portfolios')->where('user_id', $user->id)->first();
    if ($equipments != null) {
    $equipment1 = DB::table('development_languages')->find($equipments->development_language_id1); 
    $equipment2 = DB::table('development_language2s')->find($equipments->development_language_id2); 
    $equipment3 = DB::table('development_language3s')->find($equipments->development_language_id3); 
    $equipment4 = DB::table('development_language4s')->find($equipments->development_language_id4); 
    }
    @endphp
    
    <p style="font-weight: 900; color:yellow">使用可能言語</p>
    <div style="text-indent:left; padding-left:10px; text-align:left;">
    @if ($equipments != null)
    <p>E　{{$equipment1->language_name}}</p>
    <p>E　{{$equipment2->language_name}}</p>
    <p>E　{{$equipment3->language_name}}</p>
    <p>E　{{$equipment4->language_name}}</p>
    @else
    <p>学習なし</p>
    @endif
    </div>
    </div>
</div>
{{-- ランク別案件クリア数 --}}
@php
    $E = 0;
    $D = 0;
    $C = 0;
    $B = 0;
    $A = 0;
    $S = 0;
    $SS = 0;
@endphp
 
@foreach ($order_received_matters as $order_received_matter)
{{-- {{dd($order_received_matter->rank)}} --}}
{{-- ランクがEの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "1")
<!-- ランク -->
    @php
        $E += 1
    @endphp
@endif
{{-- ランクがDの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "2")
<!-- ランク -->
    @php
        $D += 1
    @endphp
@endif
{{-- ランクがCの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "3")
<!-- ランク -->
    @php
        $C += 1
    @endphp
@endif
{{-- ランクがBの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "4")
<!-- ランク -->
    @php
        $B += 1
    @endphp
@endif
{{-- ランクがAの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "5")
<!-- ランク -->
    @php
        $A += 1
    @endphp
@endif
{{-- ランクがSの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "6")
<!-- 案件名 -->
    {{ $order_received_matter->matter->matter_name }}
<!-- ランク -->
    @php
        $S += 1
    @endphp
@endif
{{-- ランクがSSの時 --}}
@if ($order_received_matter->evaluation == 1 && $order_received_matter->rank == "7")
<!-- ランク -->
    @php
        $SS += 1
    @endphp
@endif
@endforeach

<div class="p-acinfo__container3">  {{--style="width: 500px; height:150px; margin-top:0; display: flex; justify-content:center; " --}}
<div class="nes-container is-rounded is-dark p-acinfo__win4" style="margin: auto; text-align:center; ">
    <p style="font-weight: 900; color:yellow">クリアした案件の記録（ランク）</p>
    <table style="table-layout:fixed;">
        <tr>
            <th>E</th>
            <th>D</th>
            <th>C</th>
            <th>B</th>
            <th>A</th>
            <th>S</th>
            <th>SS</th>
        </tr>
        <tr>
            <td>{{$E}}</td>
            <td>{{$D}}</td>
            <td>{{$C}}</td>
            <td>{{$B}}</td>
            <td>{{$A}}</td>
            <td>{{$S}}</td>
            <td>{{$SS}}</td>
        </table>
</div>
</div>

    {{-- <div class="p-acinfo__btn-container">
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">編集</button>
        </form>
    </div> --}}
{{-- <div class="p-acinfo">
    <p class="p-acinfo__id">ユーザーID：{{ $user->name }}<br></p>
    メールアドレス：{{ $user->email }}
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">へんしゅう</button>
        </form>
</div> --}}

@endsection