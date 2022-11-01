<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMypageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('mypage.index');
    }
    public function account(Request $request)
    {
        return view('account');
    }
    public function accountUpdata(Request $request)
    {
        return view('accountUpdate');
    }
    public function accountDelete(Request $request)
    {
        return view('accountDelete');
    }
    public function accountEditComplete(Request $request)
    {
        return view('accountEditComplete');
    }
    public function dalateComplete(Request $request)
    {
        return view('dalateComplete');
    }
    public function favorite(Request $request)
    {
        return view('favorite');
    }
    public function favoriteDelete(Request $request)
    {
        return view('');
    }
}
