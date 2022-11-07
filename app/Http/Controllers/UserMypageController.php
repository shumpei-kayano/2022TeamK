<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('./userMypage/mypage.index');
    }

    public function account(Request $request)
    {
        $user = Auth::user();
        return view('./userMypage/account', compact('user'));
    }

    public function accountUpdata(Request $request)
    {
        return view('./userMypage/accountUpdate');
    }

    public function accountDelete(Request $request)
    {
        return view('./userMypage/accountDelete');
    }

    public function accountEditComplete(Request $request)
    {
        return view('./userMypage/accountEditComplete');
    }

    public function dalateComplete(Request $request)
    {
        return view('./userMypage/dalateComplete');
    }

    public function favorite(Request $request)
    {
        return view('./userMypage/favorite');
    }

    public function favoriteDelete(Request $request)
    {
        return view('');
    }

    public function company(Request $request)
    {
        return view('./userMypage/company');
    }

}
