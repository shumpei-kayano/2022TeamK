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
        <p>ユーザーID：{{ $user->name }}</p>
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

<div class="p-acinfo__container3">
<div class="nes-container is-rounded is-dark p-acinfo__win3">
    <p style="font-weight: 900; color:yellow">クリアした案件の記録（ランク）</p>
    <table>
        <tr>
            <th>SS</th>
            <th>S</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
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