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
        $prefectures = \DB::table('prefectures') -> get();
        $occupations = \DB::table('occupations') -> get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties') -> get();
        $development_languages = \DB::table('development_languages') -> get();
        // dd($items);
        return view('./matter/matterAdd',compact('occupations','rank_of_difficulties','development_languages','prefectures'));
    }

    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->all();

        // dd($input);
        $prefectures = Prefectures::find($input->prefectures_id);
        $matter = new Matter;
        unset($input['_token']);
        // $matter->fill($form)->save();
        dd($input, $prefectures);
        return view('./matter/matterConfirmation', ['input'=>$input],compact('prefectures'));
        // return redirect()->route('matter.matterConfirmation');
    }

    public function matterConfirmation(Request $request)
    {
       $input = $request->all();
        $user = Auth::user();
        return view('./matter/matterConfirmation', compact('matters'), compact('users'));
    }
}
