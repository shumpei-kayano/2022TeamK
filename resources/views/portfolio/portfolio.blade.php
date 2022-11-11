@extends('layouts.ap')

@section('content')
    
    <form method="GET" action="portfolioAdd">
        @csrf
        <input type="submit" name="portfolioAdd" value="ポートフォリオ作成">
    </form>

    <form method="GET" action="portfolioEdit">
        @csrf
        <input type="submit" name="portfolioUpdate" value="ポートフォリオ編集">
    </form>

    <form method="GET" action="{{ route('portfolioDel') }}">
        @csrf
        <input type="submit" name="portfolioDelete" value="ポートフォリオ削除">
    </form>
@endsection