@extends('layouts.ap')

@section('content')
    
@endsection

@section('main')
<form action="{{ route('account_update') }}" method="post">
    @csrf
    名前: <br><input type="text" name='name' value='{{ $form->name }}'><br>
    メールアドレス: <br><input type="text" name='email'value='{{ $form->email }}'><br>
    {{-- パスワード: <br><input type="text" name='password'value='{{ $form->password }}'><br> --}}
    <input type="submit" value="作成">
</form>
@endsection