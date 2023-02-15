<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order_received_matter;
use App\Matter;


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
        $order_received_matters = Order_received_matter::where('user_id', auth()->user()->id)->with('user:id,name', 'matter:id,matter_name')->orderBy('id', 'asc')->paginate(20);
        return view('./userMypage/account', compact('user','order_received_matters'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);
        
        $order_received_matters = Order_received_matter::where('user_id', auth()->user()->id)->with('user:id,name', 'matter:id,matter_name')->orderBy('id', 'asc')->paginate(20);
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
        return view('./userMypage/account',compact('user','order_received_matters'));
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

    public function kakunin(Request $request)
    {
        $user = Auth::user();
        // dd($user->id);
        $order_received_matters = Order_received_matter::where('user_id', $user->id)->get();
        // dd($order_received_matter);
        return view('./userMypage/kakunin', compact('order_received_matters'));
    }

    public function company(Request $request)
    {
        return view('./userMypage/company');
    }

    // メール確認
    public function confirmation(Request $request)
    {
        return view('/confirmation');
    }

}
