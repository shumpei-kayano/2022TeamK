@extends('layouts.app')

@section('title', 'パスワードリセット')

@section('content')
<div class="reset">
    <div class="reset__container nes-container is-dark with-title">
        <p class="title">パスワードをリセットします</p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="nes-input is-dark @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                <div class="col-md-6">
                    <input placeholder="8ケタ以上" id="password" type="password" class="nes-input is-dark @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード（再度）') }}</label>

                <div class="col-md-6">
                    <input placeholder="もう一度" id="password-confirm" type="password" class="nes-input is-dark" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="reset__btn-container">
                <button type="submit" class="nes-btn is-warning reset__btn">
                    {{ __('パスワードをリセット') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
