@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

<h1 class="p-form">ポートフォリオ</h1>
<div class="p-port">
    <div class="nes-container is-rounded is-dark" style="height: 600px;">
        {{-- ポートフォリオがあった場合の処理 --}}

        <div class="p-port__container">
            <div class="p-port__left">
                    <!-- 名前 -->
                    <label for="name" style="color:#fff;" >名前<br>
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" disabled value='{{ $portfolio->name }}'><br>

                    <!-- メールアドレス -->
                    <label for="mail" style="color:#fff;" >メールアドレス<br>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                            <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" disabled value='{{ $portfolio->email }}'><br>

                    <!-- 電話番号 -->
                    <label for="tel" style="color:#fff;" >電話番号<br>
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" disabled value='{{ $portfolio->tel }}'><br>

                <!-- 最終学歴 -->
                <label for="gakureki" style="color:#fff;" >最終学歴<br>
                    @if($errors->has('educational_background'))
                        {{ $errors->first('educational_background') }}
                    @endif
                        <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" disabled value='{{ $portfolio->educational_background }}'><br>

                <!-- 生年月日 -->
                <label for="birthday" style="color:#fff;" >生年月日<br>
                    @if($errors->has('birthday'))
                        {{ $errors->first('birthday') }}
                    @endif
                        <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" disabled value="yyyy/mm/dd" name="birthday">
             </div>

            <!-- 自己PR -->
            <div class="p-port__PR">
                <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                    <textarea name="self_pr" id="" cols="27" rows="19" class="nes-textarea is-dark" readonly>{{ $portfolio->self_pr }}</textarea>
                </div>
                </div>
    </div>

    {{-- <a href="{{ route('approval', ['id'=>$order_received_matter->user_id]) }}" class="">承認</a>
    <a href="{{ route('rejected', ['id'=>$order_received_matter->user_id]) }}" class="">却下</a> --}}
    <form method="POST" action="{{ route('approval', ['id'=>$form]) }}">
        @csrf
        <button type="submit">承認</button>
    </form>
    <form method="POST" action="{{ route('rejected', ['id'=>$form]) }}">
        @csrf
        <button type="submit">却下</button>
    </form>
</div>
@endsection