<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserMypageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->user = new User;
    }

    public function index(Request $request)
    {
        return view('./userMypage/mypage.index');
    }

    public function account(Request $request)
    {
        $user = Auth::user();
        return view('./userMypage/account', compact('user'));
    }

    // ログアウト
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('./userMypage/accountEdit',['form' => $user]);
    }

    public function update(Request $request)
    {
        $user_form = $request->all();
        $user = Auth::user();
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($user_form)->save();
        // $user = User::find($request -> id);
        // $form = $request->all();
        // // dd($request);
        // unset($form['_token']);
        // $user->fill($form)->save();
        return view('./userMypage/account',compact('user'));
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
