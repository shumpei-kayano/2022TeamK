@extends('layouts.app')

@section('title', "新規登録")

@section('content')
<div class="p-register">
        <div class="nes-container is-dark with-title p-register__container">
            <p class="title">しんきとうろく</p>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!--                             
                            <input type="radio" id="kojin" name="check" value="0" checked>
                            <label for="kojin">個人</label>
                            <input type="radio" id="hojin" name="check" value="1">
                            <label for="hojin">法人</label> -->
                <div class="ragio-group">
                    <label for="kojin">
                         <input type="radio" id="kojin" class="nes-radio is-dark" name="check" value="0" checked />
                         <span>個人</span>
                    </label>
                    <label for="hojin">
                         <input type="radio" id="hojin" class="nes-radio is-dark" name="check" value="1">
                         <span>法人</span>
                     </label>
                </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザ名') }}</label>

                            <div class="col-md-6">
                                <input placeholder="おおはら　たろう" id="name" type="text" class="input nes-input is-dark form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input placeholder="example@aaa.com" id="email" type="email" class="input nes-input is-dark form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input placeholder="8ケタ以上" id="password" type="password" class="input nes-input is-dark form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input placeholder="もう一度入力" id="password-confirm" type="password" class="input nes-input is-dark form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="p-register-btn">
                            <button type="submit" class="nes-btn is-primary">
                                {{ __('にんしょう') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
