<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Matter;
use App\Prefecture;
use App\Occupation;
use App\Development_language;
use App\Rank_of_difficulty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->favorite = new Favorite();
    }

    public function store(Request $request)
    {

        $favorite = new Favorite;
        $favorite->matter_id = $request->matter_id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        return back();
    }

    public function delete(Request $request) {
        $id = $request->id;
        $favorite=Favorite::where('matter_id', '=', $id);
        // dd($favorite);
        $favorite->delete();
        return back();
    }

    public function show(Request $request) {
        $user = Auth::user()->id;
        $favorites = DB::table('favorites')->where('user_id' , $user)->get();
        $matters = DB::table('matters')->get();
        

        //無理やりjoin実行して、でかいテーブル作成
        // $favorites = DB::table('matters')->select('id','prefectures_id', 'matter_name', 'occupation_id','remarks','success_fee','deadline', 'rank', 'number_of_person','created_at','updated_at')
        // ->join('favorites', 'matters.id', '=', 'favorites.matter_id')
        // // ->join('prefectures', 'matters.prefectures_id', '=', 'prefectures.id')
        // // ->join('occupations', 'matters.occupation_id', '=', 'occupations.id')
        // // ->join('development_languages', 'matters.development_language_id1', '=', 'development_languages.id')
        // // ->join('development_languages', 'matters.development_language_id2', '=', 'development_languages.id')
        // // ->join('development_languages', 'matters.development_language_id3', '=', 'development_languages.id')
        // // ->join('development_languages', 'matters.development_language_id4', '=', 'development_languages.id')
        // ->get();
        // dd($favorites);
        return view('./userMypage/favorite', compact('favorites', 'matters'));
    }
}