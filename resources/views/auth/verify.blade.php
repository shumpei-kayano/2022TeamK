@extends('layouts.app')

@section('title','アドレス認証エラー')
    

@section('content')
<div class="verify">
    <div class="nes-container is-dark with-title verify__container">
        <p class="title">{{ __('メールアドレスのにんしょうが完了していません') }}</p>

        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('あなたのメールアドレスにあたしいリンクを送信しました') }}
                </div>
            @endif

            {{ __('次に進む前に、リンクが書かれたメールをかくにんしてください。') }}<br>
            {{ __('メールがとどいていない場合') }}
            <form class="verify-btn" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="nes-btn is-warning">{{ __('再送信はコチラ') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
