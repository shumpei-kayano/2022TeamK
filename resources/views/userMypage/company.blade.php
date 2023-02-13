@extends('layouts.appp')

@section('title','マイページ（企業）')

@section('content')

{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}

<style>
    table {
            border-collapse: collapse;
            width: 100%;
            }
 th,td {
  padding: 1rem 2rem;
  text-align: center;
  border-bottom: 1px solid rgb(217, 206, 206);
  border-color: rgb(217, 206, 206);
 }

 th {
  position: sticky;
  top: 0;
  font-weight: normal;
  font-size: .875rem;
  color:black;
  background-color: rgb(217, 206, 206);
}

</style>

<h1 class="p-form">マイページ（企業）</h1>
<div class="p-myp">
    <div class="nes-container is-dark with-title p-myp__container" style="border: 5px solid #fff; border-radius: 10px;">
        <div>
            <a href="./matter/add"><button type="button" class="nes-btn is-error p-myp__btn">案件を<br>掲載する</button></a>

            <a href="/list"><button type="button" style="margin-top: 20px" class="nes-btn is-primary p-myp__btn">承認待ちリストを<br>確認する</button></a>
        </div>
        
        <div>
            <a href="/postingScreen"><button type="button" class="nes-btn is-warning p-myp__btn">掲載中案件を<br>確認する</button></a>
            
            <a href="/contract"><button type="button" style="margin-top: 20px" class="nes-btn is-success p-myp__btn">過去契約一覧を<br>確認する</button></a>
    </div>

    </div>
</div>
        </form>
@endsection