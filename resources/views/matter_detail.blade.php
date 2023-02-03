@extends('layouts.app')

@section('title')
案件検索
@endsection

@section('content')

<h1 class="p-form">詳細</h1>
  <div class="p-acinfo__container2">
    <div class="nes-container is-rounded is-dark p-anken" style="width:800px; overflow: scroll; overflow-x:hidden; max-height: 600px; border: 5px solid #fff; border-radius: 10px; padding-top:0; margin-top:-26px;  padding-left:0; padding-right:0;">


<!--  <table class="">
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
            
          </thead>-->
          @php
            $occupation1 = DB::table('occupations')->find($matter->occupation_id);
            $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
          @endphp
      <div class="p-detail__anken" style="text-align:center;" >
        <br>
          <!-- 案件名 -->
          <label for="dark_select" style="color:#fff;">案件名</label><br>
          <p>{{ $matter->matter_name }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" name="matter_name" value="{{ $matter->matter_name }}" disabled><br>--> 
      </div>


      <div class="p-detail__up" style="display:flex;  justify-content: space-around;  flex-direction: row;   margin:10px 0px;">
          <!-- 勤務地 -->
        <div>
          <label for="dark_select" style="color:#fff;">勤務地</label><br>
          <p>{{ $prefectures1->prefectures_name }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" name="prefectures_id" value="{{ $prefectures1->prefectures_name }}" disabled><br>--> 
        </div>

          <!-- 職種 -->
        <div>
          <label for="dark_select" style="color:#fff;">職種</label><br>
          <p>{{ $occupation1->occupation_name }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs" name="occupation_id" value="{{ $occupation1->occupation_name }}" disabled><br>-->
        </div>

          <!-- ランク -->
        <div>
          <label for="dark_select" style="color:#fff;">案件ランク</label><br>
            @php
            $engs = DB::table('ranks')->find($matter->rank);
            $eng = $engs->rank;
            @endphp
          <p>{{ $eng }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-show__search" name="rank" value="{{ $matter->rank }}" disabled> ランク<br>--> 
        </div>

          <!-- パーティ人数 --> <!-- <P>要素にカラム値を入れて欲しいです -->
        <div>
          <label for="dark_select" style="color:#fff;">パーティ人数</label><br>
          <p>{{ $matter->number_of_person }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" name="rank" value="" disabled> 人<br>--> 
        </div>

          {{-- 期限 --}}
        <div>
          <label for="dark_select" style="color:#fff;">期限</label><br>
          <p>{{ $matter->deadline }}</p><br>
        </div>

          <!-- 報酬金額 --> <!-- <P>要素にカラム値を入れて欲しいです -->
        <div>
          <label for="dark_select" style="color:#fff;">報酬金額</label><br>
          <p>{{ $matter->success_fee }}</p><br>
          <!--<input type="search" id="dark_field" class="nes-input is-dark p-anken2__Inputs2" name="rank" value="" disabled> 円<br>--> 
        </div>
      </div>


      <div class="p-detail__tokki">
          <!-- 特記事項 -->
          <label for="dark_select" style="color:#fff; padding-left: 5px; padding-right:5px;">特記事項</label><br>
          <p>{{ $matter->remarks }}</p><br>
          <!--<textarea name="remarks" id="" class="nes-textarea is-dark p-anken2__textarea" aria-describedby="basic-addon2" disabled>{{ $matter->remarks }}</textarea><br>-->
      </div>

              {{-- <td>{{ dd($favorite) }}</td> --}}
              <td>@if (Auth::check())
                        @if (isset($favorite))
                        
                            {{-- favoriteがあったら削除ボタン表示 --}}
                            <form action="{{route('favorite.del2', ['id'=>$matter->id])}}" method="POST">
                                <input type="hidden" name="matter_id" value="{{$matter->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="btn1" class="nes-btn is-primary">お気に入り解除</button>
                                <!--<script> //ダイアログの表示
                                  const btn1 = document.getElementById('btn1');
            
                                  btn1.addEventListener('click', () => {
                                  alert('お気に入り解除しました。');
                                  });
                              </script>-->
                            </form>
                        @else
                            {{-- favoliteがなかったらお気に入り登録ボタン表示 --}}
                            <form action="{{route('favorite2', ['id'=>$matter->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="matter_id" value="{{$matter->id}}">
                                <button type="submit" id="btn2" class="nes-btn is-primary">お気に入り登録</button>
                                <!--<script> //ダイアログの表示
                                  const btn2 = document.getElementById('btn2');
            
                                  btn2.addEventListener('click', () => {
                                  alert('お気に入り登録しました。');
                                  });
                              </script>-->
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
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @elseif($user->total_experience < 1000 && $matter->rank > 3)
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @elseif($user->total_experience < 10000 && $matter->rank > 4)
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @elseif($user->total_experience < 100000 && $matter->rank > 5)
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @elseif($user->total_experience < 1000000 && $matter->rank > 6)
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @elseif($user->total_experience < 10000000 && $matter->rank > 7)
                  <label for="" style="color: #ff0000">※ランクが足りない為、応募できません</label>
                @else
                  <form action="{{route('submission')}}" method="POST" onclick='return confirm("本当に応募してもよろしいでしょうか？");'>
                    @csrf
                      <input type="hidden" name="matter_id" value="{{$matter->id}}">
                      <button type="submit" class="nes-btn is-primary">応募する</button>
                  </form>
                @endif
              @else
              <button type="button" class="nes-btn is-disabled">応募済み</button>
              @endif
              </td>
            </tr>

          </tbody>
      </table>
        </div>
      </div>
     
@endsection
