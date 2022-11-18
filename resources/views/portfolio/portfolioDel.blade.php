@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

{{ $form->name }}
{{ $form->email }}
{{ $form->tel }}
{{ $form->educational_background }}
{{ $form->development_language->language_name }}
{{ $form->development_year1 }}
{{ $form->self_pr }}
{{ $form->birtday }}
<form action="{{ route('portfolio_remove') }}" method="post">
    <div class="p-form">
    @csrf
    <input type="submit" value='削除'>
    </div>
</form>

@endsection