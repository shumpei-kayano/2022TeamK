@extends('layouts.ap')

@section('content')
@endsection


@section('main')

<h1>詳細</h1>
<table class="">
    <thead>
      <tr>
        <th>案件名</th>
        <th>ランク</th>
        <th>特記事項</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $matter->matter_name }}</td>
        <td>{{ $matter->rank }}</td>
        <td>{{ $matter->remarks }}</td>
      </tr>
    </tbody>
  </table>

@endsection
