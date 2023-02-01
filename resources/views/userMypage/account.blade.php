@extends('layouts.app')

@section('title')
    アカウント情報編集
@endsection

@section('content')

<h1 class="p-form">アカウント情報</h1>
<div class="p-acinfo__container2">
    <div class="nes-container is-rounded is-dark p-acinfo">
        <p>ユーザーID：{{ $user->name }}</p>
        <p>メールアドレス：{{ $user->email }}</p>
        <p>獲得経験値：{{ $user->total_experience }}</p>
        @php
        $ranks = DB::table('ranks')->where('requirement_experience', '>=', $user->total_experience)->first();
        $rank = $ranks->requirement_experience;
        $next = $ranks->requirement_experience - $user->total_experience;
        @endphp
        <p>次のランクまで：{{ $next }}</p>
    </div>
</div>

{{-- 装備（言語の追加） --}}
    @php
    $equipments = DB::table('portfolios')->where('user_id', $user->id)->first();
    $equipment1 = DB::table('development_languages')->find($equipments->development_language_id1); 
    $equipment2 = DB::table('development_language2s')->find($equipments->development_language_id2); 
    $equipment3 = DB::table('development_language3s')->find($equipments->development_language_id3); 
    $equipment4 = DB::table('development_language4s')->find($equipments->development_language_id4); 
    
    @endphp
    E　{{$equipment1->language_name}}
    E　{{$equipment2->language_name}}
    E　{{$equipment3->language_name}}
    E　{{$equipment4->language_name}}
    

    <div class="p-acinfo__btn-container">
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">編集</button>
        </form>
    </div>
{{-- <div class="p-acinfo">
    <p class="p-acinfo__id">ユーザーID：{{ $user->name }}<br></p>
    メールアドレス：{{ $user->email }}
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">へんしゅう</button>
        </form>
</div> --}}

@endsection