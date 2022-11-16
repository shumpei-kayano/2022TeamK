@extends('layouts.app')

@section('title', 'パスワード再発行')
    
@section('content')
<div class="p-email">
    <div class="p-email__container nes-container is-dark with-title">
        <p class="title">パスワードを再発行</p>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="nes-input is-dark form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="p-email__btn-container">
                    <button type="submit" class="nes-btn is-warning p-email__btn">
                        {{ __('送信') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
