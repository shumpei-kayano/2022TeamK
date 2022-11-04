<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        $portfolio = new Portfolio;
    }

     public function portfolio(Request $request)
    {
        return view('portfolio');
    }

    public function add(Request $request)
    {
        $items = \DB::table('development_languages') -> get();
        // dd($items);
        return view('portfolioAdd',compact('items'));
    }

    public function create(Request $request)
    {
        // $languages = \DB::table('development_languages') -> get();
        $portfolio->user_id = $request->user_id;
        $portfolio->name = $request->name;
        $portfolio->email = $request->email;
        $portfolio->tel = $request->tel;
        $portfolio->educational_background = $request->educational_background;
        $portfolio->development_language_id1 = $request->development_language_id1;
        $portfolio->development_year1 = $request->development_year1;
        $portfolio->development_language_id2 = $request->development_language_id2;
        $portfolio->development_year2 = $request->development_year2;
        $portfolio->development_language_id3 = $request->development_language_id3;
        $portfolio->development_year3 = $request->development_year3;
        $portfolio->development_language_id4 = $request->development_language_id4;
        $portfolio->development_year4 = $request->development_year4;
        $portfolio->development_language_id5 = $request->development_language_id5;
        $portfolio->development_year5 = $request->development_year5;
        $portfolio->self_pr = $request->self_pr;
        $portfolio->birthday = $request->birthday;
        $portfolio->save();
        // return redirect('portfolio',compact('languages'));
        return redirect('portfolio',);
    }

    public function update(Request $request)
    {
        return view('portfolioUpdate');
    }
}
