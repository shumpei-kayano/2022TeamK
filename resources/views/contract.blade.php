@extends('layouts.app')

@section('title','評価')

@section('content')

<h1 class="p-form">評価</h1>

<div class="p-acinfo__container2">
    <div class="nes-container is-dark with-title  p-form__container2" style="width:600px; height:200px; text-overflow: ellipsis;">
        {{-- <a href="https://www.instagram.com/miura_koutaro?ref=badge" class="insta_btn3">
            <i class="fab fa-instagram"></i><div style="text-align: center">それでも!!!</div>
        </a> --}}
        {{-- <table class="">
            <thead>
            <tr>
                <th>案件名</th>
                <th>ユーザー名</th>
                <th>エリア</th>
                <th>特記事項</th>
            </tr>
            </thead> --}}
        {{-- @foreach($favorites as $favorite)
        
                <tbody>
                <tr>
                    <td>{{ $favorite->matter_name }}</td>
                    <td>{{ $favorite->language_name }}</td>
                    <td>{{ $favorite->prefectures_name }}</td>
                    <td>{{ $favorite->remarks }}</td>
                    <td><a href="{{ route('matter.detail', ['id'=>$favorite->matter_id]) }}" class="">詳細</a></td>
                </tr>
                </tbody>
        @endforeach --}}
        <table class="p-show">
            <thead>
                <th>案件名</th>
                <th>応募ユーザー</th>
                <th>評価</th>
            </thead>
            <tbody>
                @foreach ($order_received_matters as $order_received_matter)
                    <tr>
                        <!-- 商品名 -->
                        <td class="p-show__tokki">
                           {{ $order_received_matter->matter->matter_name }}
                        </td>
                        <!-- 登録ユーザー -->
                        <td class="p-show__tokki">
                            {{ $order_received_matter->user->name }}
                        </td>
                        <td>
                        <form method="POST" action="{{ route('evaluation', ['id'=>$order_received_matter->user_id]) }}">
                            @csrf
                            <input type="hidden" name="rank" value="{{$order_received_matter->rank}}">
                            <input type="hidden" name="order_id" value="{{$order_received_matter->id}}">
                          <div style="float: left">
                            <label>
                                <input type="radio" name="form" class="nes-radio is-dark" value="1" checked>
                                <span>1</span>
                              </label>
                          
                              <label>
                                <input type="radio" name="form" class="nes-radio is-dark" value="2">
                                <span>2</span>
                              </label>
                          
                              <label>
                                <input type="radio" name="form" class="nes-radio is-dark" value="3">
                                <span>3</span>
                              </label>
                          
                              <label>
                                <input type="radio" name="form" class="nes-radio is-dark" value="4">
                                <span>4</span>
                              </label>
                          
                              <label>
                                <input type="radio" name="form" class="nes-radio is-dark" value="5">
                                <span>5</span>
                              </label>
                            </td>
                            <td>
                             </div>
                             <button type="submit" class="nes-btn is-primary" 
                             style="height:35px; width:60px; text-align:center; padding-top:0px;" onclick='return confirm("評価してもよろしいでしょうか？");'>評価</button>
                        </form>
                    </td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
            </table>


{{-- <table>
    <thead>
        <th>案件名</th>
        <th>応募ユーザー</th>
        <th></th>
    </thead>
    <tbody>
 
        @foreach ($order_received_matters as $order_received_matter)
            <tr>
                <!-- 商品名 -->
                <td class="table-text">
                    <div>{{ $order_received_matter->matter->matter_name }}</div>
                </td>
                <!-- 登録ユーザー -->
                <td class="table-text">
                    <div>{{ $order_received_matter->user->name }}</div>
                </td>
                @if ($order_received_matter->evaluation == 0)  
                <td>
                <form method="POST" action="{{ route('evaluation', ['id'=>$order_received_matter->user_id]) }}">
                    @csrf
                    <input type="hidden" name="rank" value="{{$order_received_matter->rank}}">
                    <input type="hidden" name="order_id" value="{{$order_received_matter->id}}">
                    <div>
                        <input type="radio" name="form" value="1" checked>
                        <label>1</label>
                      </div>
                  
                      <div>
                        <input type="radio" name="form" value="2">
                        <label>2</label>
                      </div>
                  
                      <div>
                        <input type="radio" name="form" value="3">
                        <label>3</label>
                      </div>
                  
                      <div>
                        <input type="radio" name="form" value="4">
                        <label>4</label>
                      </div>
                  
                      <div>
                        <input type="radio" name="form" value="5">
                        <label>5</label>
                      </div>
                    </td>
                    <td>  
                    <button type="submit">評価</button>
                </form>
            </td>
            @else 
            <td></td>
            <td>評価しました。</td>
            @endif
    </div>
</div>                
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection --}}