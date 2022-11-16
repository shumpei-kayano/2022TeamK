@extends('layouts.app')

@section('title', 'パスワード確認')

@section('content')
<div class="comfirm">
    <div class="nes-container is-dark with-title confirm__container">
        <p class="title">パスワードのかくにん</p>
        <div class="card-body">
            {{ __('パスワードをかくにんの上、進んでください') }}

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="confirm__btn-container">
                    <button type="submit" class="nes-btn is-warning confirm__btn">
                        {{ __('パスワードのかくにん') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('パスワードを忘れた方はこちら') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
