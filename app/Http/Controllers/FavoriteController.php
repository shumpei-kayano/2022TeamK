<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Matter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
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
}