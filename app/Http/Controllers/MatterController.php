<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Matter;

class MatterController extends Controller
{
    public function __construct()
    {
        $this->matter = new Matter();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('show');
    }

    public function postingScreen(Request $request)
    {
        return view('postingScreen');
    }

    public function approvalIndex(Request $request)
    {
        return view('approvalIndex');
    }

    public function listingConfirmation(Request $request)
    {
        return view('listingConfirmation');
    }

    public function index(Request $request)
    {
        return view('./matter/matter');
    }

    public function add(Request $request)
    {
        $occupations = \DB::table('occupations') -> get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties') -> get();
        // dd($items);
        return view('./matter/matterAdd',compact('occupations','rank_of_difficulties'));
    }

    public function create(Request $request)
    {
        $matter = new Matter;
        $occupations = \DB::table('occupations') -> get();
        
        $form = $request->all();
        unset($form['_token']);
        $matter->fill($form)->save();
       return redirect('matter');
    }
}
