@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<div class="favorite">
<h1 class="p-form">詳細</h1>

<div class="nes-container is-dark with-title favorite__container">
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
        </tr>
      </tbody>
    </table>
</div>
</div>

@endsection
