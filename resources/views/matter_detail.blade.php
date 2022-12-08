@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<h1>詳細</h1>
<table class="">
    <thead>
      <tr>
        <th>案件名</th>
        <th>ランク</th>
        <th>特記事項</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $matter->matter_name }}</td>
        <td>{{ $matter->rank }}</td>
        <td>{{ $matter->remarks }}</td>
        {{-- <td>{{ dd($favorite) }}</td> --}}
        <td>@if (Auth::check())
                  @if (isset($favorite))
                  
                      {{-- favoriteがあったら削除ボタン表示 --}}
                      <form action="{{route('favorite.del2', ['id'=>$matter->id])}}" method="POST">
                          <input type="hidden" name="matter_id" value="{{$matter->id}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit">お気に入り解除</button>
                      </form>
                  @else
                      {{-- favoliteがなかったらお気に入り登録ボタン表示 --}}
                      <form action="{{route('favorite2', ['id'=>$matter->id])}}" method="POST">
                          @csrf
                          <input type="hidden" name="matter_id" value="{{$matter->id}}">
                          <button type="submit">お気に入り登録</button>
                      </form>
                  @endif
          @endif
        </td>
        <td>
          {{--  応募するボタン  --}}
          <form action="{{route('submission')}}" method="POST">
            @csrf
            <input type="hidden" name="matter_id" value="{{$matter->id}}">
            <button type="submit">おうぼする</button>
        </form>
        </td>
      </tr>
    </tbody>
  </table>

@endsection
