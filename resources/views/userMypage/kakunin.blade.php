@extends('layouts.app')

@section('title')
    かくにん
@endsection

@section('content')

<h1>かくにん</h1>

<div class="favorite">
    <div class="nes-container is-dark with-title favorite__container">
        <table class="">
            <thead>
            <tr>
                <th>案件名</th>
                <th>企業名</th>
                <th>合否</th>
            </tr>
            </thead>
        {{-- @foreach($favorites as $favorite) --}}
        
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{}}" class="">詳細</a></td>
                </tr>
                </tbody>
        {{-- @endforeach --}}
            </table>
    </div>
</div>

@endsection