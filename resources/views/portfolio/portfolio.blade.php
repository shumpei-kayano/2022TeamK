@extends('layouts.app')

@section('content')
    
    <form method="GET" action="portfolioAdd">
        @csrf
        <input type="submit" name="portfolioAdd" value="ポートフォリオ作成">
    </form>

    <form method="GET" action="update">
        @csrf
        <input type="submit" name="portfolioUpdate" value="ポートフォリオ編集">
    </form>
@endsection