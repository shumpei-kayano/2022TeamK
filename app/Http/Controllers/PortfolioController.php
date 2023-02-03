<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Portfolio;
use App\Development_language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Order_received_matter;
use App\Matter;
use App\User;
use App\Rank_of_difficulty;
class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->portfolio = new Portfolio;
    }

     public function portfolio(Request $request)
    {
        return view('./portfolio/portfolio');
    }

    public function add(Request $request)
    {
        $items = \DB::table('development_languages') -> get();
        $user = Auth::user();
        // ポートフォリオが存在するかどうかのために取ってる
        $portfolio = Portfolio::whereUser_id($user->id)->first();
        // dd($items);
        return view('./portfolio/portfolioAdd',['form' => $portfolio],compact('items','user'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'tel' => 'numeric',
            'educational_background' => 'required',
            'self_pr' => 'required',
            'birthday' => 'required',
            'development_language_id1' => 'required',
            'development_language_id2' => 'required',
            'development_language_id3' => 'required',
            'development_language_id4' => 'required',
            'development_year1' => 'required',
            'development_year2' => 'required',
            'development_year3' => 'required',
            'development_year4' => 'required'
        ]);
        $portfolio = new Portfolio;
        $form = $request->all();

        // dd($form);
        unset($form['_token']);
        $portfolio->fill($form)->save();
        return view('./portfolio/portfolio');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $portfolio = Portfolio::whereUser_id($user->id)->first();
        $items = \DB::table('development_languages') -> get();
        $order_received_matters = Order_received_matter::where('user_id', auth()->user()->id)->with('user:id,name', 'matter:id,matter_name')->orderBy('id', 'asc')->paginate(20);
        // dd($order_received_matters);
        return view('./portfolio/portfolioEdit',['form' => $portfolio] ,compact('items','user','order_received_matters'));
    }

    public function update(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'tel' => 'numeric',
            'educational_background' => 'required',
            'self_pr' => 'required',
            'birthday' => 'required',
            'development_language_id1' => 'required',
            'development_language_id2' => 'required',
            'development_language_id3' => 'required',
            'development_language_id4' => 'required',
            'development_year1' => 'required',
            'development_year2' => 'required',
            'development_year3' => 'required',
            'development_year4' => 'required'
        ]);
        // dd($request);
        $portfolio = Portfolio::find($request -> id);
        $form = $request->all();
        // dd($portfolio,$form);
        unset($form['_token']);
        $portfolio->fill($form)->save();
       
        return view('./portfolio/portfolio');
    }
    public function delete(Request $request)
    {
        $user = Auth::user();
        $portfolio = Portfolio::whereUser_id($user->id)->first();
        $development_languages = \DB::table('development_languages') -> get();
        $items = \DB::table('development_languages') -> get();
        // $items = \DB::table('development_languages') -> get();
        return view('./portfolio/portfolioDel',['form' => $portfolio] ,compact('user','development_languages','items'));
    }
    public function remove(Request $request)
    {
        $user = Auth::user();
        // $portfolio = Portfolio::find($request -> user_id)->delete();
        $portfolio = Portfolio::whereUser_id($user->id)->first();

        $portfolio->delete();

        // $items = \DB::table('development_languages') -> get();

        return view('./portfolio/portfolio');
    }
}



// $form = $request->all();
        // dd($form);
        // $portfolio = Portfolio::find($id);
        // dd($portfolio);

        // $portfolio = Portfolio::find($request -> id);
        // $portfolio->name = $request->name;
        // $portfolio->email = $request->email;
        // $portfolio->tel = $request->tel;
        // $portfolio->educational_background = $request->educational_background;
        // $portfolio->development_language_id1 = $request->development_language_id1;
        // $portfolio->development_year1 = $request->development_year1;
        // $portfolio->development_language_id2 = $request->development_language_id2;
        // $portfolio->development_year2 = $request->development_year2;
        // $portfolio->development_language_id3 = $request->development_language_id3;
        // $portfolio->development_year3 = $request->development_year3;
        // $portfolio->development_language_id4 = $request->development_language_id4;
        // $portfolio->development_year4 = $request->development_year4;
        // $portfolio->development_language_id5 = $request->development_language_id5;
        // $portfolio->development_year5 = $request->development_year5;
        // $portfolio->self_pr = $request->self_pr;
        // $portfolio->birthday = $request->birthday;
        // $portfolio->save();
        // $languages = \DB::table('development_languages') -> get();



        // $portfolio = new Portfolio;
        // // $languages = \DB::table('development_languages') -> get();
        // $portfolio->user_id = $request->user_id;
        // $portfolio->name = $request->name;
        // $portfolio->email = $request->email;
        // $portfolio->tel = $request->tel;
        // $portfolio->educational_background = $request->educational_background;
        // $portfolio->development_language_id1 = $request->development_language_id1;
        // $portfolio->development_year1 = $request->development_year1;
        // $portfolio->development_language_id2 = $request->development_language_id2;
        // $portfolio->development_year2 = $request->development_year2;
        // $portfolio->development_language_id3 = $request->development_language_id3;
        // $portfolio->development_year3 = $request->development_year3;
        // $portfolio->development_language_id4 = $request->development_language_id4;
        // $portfolio->development_year4 = $request->development_year4;
        // $portfolio->development_language_id5 = $request->development_language_id5;
        // $portfolio->development_year5 = $request->development_year5;
        // $portfolio->self_pr = $request->self_pr;
        // $portfolio->birthday = $request->birthday;
        // $portfolio->save();
        // // return redirect('portfolio',compact('languages'));
        // return view('./portfolio/portfolio', );
        // $this->middleware('auth', ['except' => ['user_id', 'update_at', 'created_at']]);

        // 気合