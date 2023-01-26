@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<h1 class="p-form">詳細</h1>
  <div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title p-mypage__container">

      <table class="">
          <thead>
            <tr>
              <th>案件名</th>
              <th>ランク</th>
              <th>特記事項</th>
              <th>職種</th>
              <th>勤務地</th>
              <th></th>
              <th></th>
            </tr>
          </thead>


          @php
            $occupation1 = DB::table('occupations')->find($matter->occupation_id);
            $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
          @endphp
          <tbody>
            <tr>
              <td>{{ $matter->matter_name }}</td>
              <td>{{ $matter->rank }}</td>
              <td>{{ $matter->remarks }}</td>
              <td>{{ $occupation1->occupation_name }}</td>
              <td>{{ $prefectures1->prefectures_name }}</td>
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
                @php
                $user_id = Auth::user()->id;
                $matters = DB::table('order_received_matters')->where('matter_id', $matter->id)->get();
                $e = $matters->where('user_id', $user_id)->first();
                // dd($e);

                @endphp
                @if (!isset($e))
                {{--  応募するボタン  --}}
                @if($user->total_experience < 100 && $matter->rank > 2)
                  応募できません
                @elseif($user->total_experience < 1000 && $matter->rank > 3)
                  応募できません
                @elseif($user->total_experience < 10000 && $matter->rank > 4)
                  応募できません
                @elseif($user->total_experience < 100000 && $matter->rank > 5)
                  応募できません
                @elseif($user->total_experience < 1000000 && $matter->rank > 6)
                  応募できません
                @elseif($user->total_experience < 10000000 && $matter->rank > 7)
                  応募できません
                @else
                  <form action="{{route('submission')}}" method="POST">
                    @csrf
                  <input type="hidden" name="matter_id" value="{{$matter->id}}">
                  <button type="submit">応募する</button>
              </form>
                @endif
              @else
              応募済み
              @endif
              </td>
            </tr>

          </tbody>
      </table>
      
    </div>
  </div>
@endsection
