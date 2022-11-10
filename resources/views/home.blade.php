@extends('layouts.ap')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="/account">
                    @csrf
                    <input type="submit" name="account" value="アカウント">
                    </form>

                    <form method="GET" action="/favorite">
                        @csrf
                        <input type="submit" name="favorite" value="お気に入り">
                        </form>

                    <form method="GET" action="/show">
                            @csrf
                            <input type="submit" name="show" value="案件検索">
                        </form>

                    <form method="GET" action="/portfolio">
                            @csrf
                            <input type="submit" name="portfolio" value="ポートフォリオ">
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
