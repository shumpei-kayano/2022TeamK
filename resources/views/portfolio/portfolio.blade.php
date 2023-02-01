@extends('layouts.app')

@section('title','ポートフォリオ')

@section('content')

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

<h1 class="p-form" style="padding-top: 30px; border: 5px ">ポートフォリオ</h1>
    <div class="portfolio">
        <div class="nes-container is-dark with-title portfolio__container" style="solid #fff; border-radius: 10px; margin-top:-40px;">
            <a href="portfolioAdd"><button type="button" class="nes-btn is-primary portfolio__btn">ポートフォリオを<br>作成する</button></a>
            <a href="portfolioEdit"><button type="button" class="nes-btn is-warning portfolio__btn">ポートフォリオを<br>編集する</button></a>
            <a href="portfolioDel"><button type="button" class="nes-btn is-error portfolio__btn">ポートフォリオを<br>削除する</button></a>
        </div>
    </div>
@endsection