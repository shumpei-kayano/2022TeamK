@extends('layouts.app')

@section('title','過去契約一覧')

@section('content')

<h1 class="p-info">マンチェスターシティ</h1>

<form action='{{ route('matter_update',) }}'method='post'>

    @csrf

@endsection