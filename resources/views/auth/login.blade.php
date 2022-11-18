@extends('layouts.app')

@section('title','ログインページ')

@section('content')
<div class="p-loginpage">
<div class="nes-container is-dark with-title p-loginpage__container">
    <p class="title">サインイン</p>

    <div class="card-body p-loginpage__form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="nes-input is-dark @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>,
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="nes-input is-dark @error('password') is-invalid @enderror input" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="color: white">

                        <label class="form-check-label" for="remember">
                            {{ __('じょうほうを保存する') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="nes-btn is-primary">
                        {{ __('サインイン') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('パスワードをお忘れですか？') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
