<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Matter;
use App\Prefecture;
use App\Occupation;
use App\Development_language;

class MatterController extends Controller
{

    private $formItems = ["prefectures_id", "matter_name", "tel", "development_language_id1", "development_language_id2", "development_language_id3", "development_language_id4",
        "occupation_id", "remarks", "success_fee", "deadline", "rank", "number_of_person"];

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

    function post(Request $request)
    {
        $input = $request->only($this->formItems);
        //セッションに書き込む
        $request->session()->put("matter_post", $input);
        // dd($input);
        return redirect()->route('matter.store');
    }


    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        // $prefecture = Prefecture::find($input["prefectures_id"]);
        // $occupation = Occupation::find($input["occupation_id"]);
        // $development_language1 = Development_language::find($input["development_language_id1"]);
        // $development_language2 = Development_language::find($input["development_language_id2"]);
        // $development_language3 = Development_language::find($input["development_language_id3"]);
        // $development_language4 = Development_language::find($input["development_language_id4"]);
        // $matter = new Matter;
        // unset($input['_token']);
        // $matter->fill($form)->save();
        // dd($occupation);
        // return view('./matter/matterConfirmation', ['input'=>$input],compact('prefecture','occupation','development_language1',
        // 'development_language2','development_language3','development_language4'));
        
        $input = $request->session()->get("matter_post");
        // dd($input);
        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->route('matter.add');
        }
        $prefecture = Prefecture::find($input["prefectures_id"]);
        $occupation = Occupation::find($input["occupation_id"]);
        $development_language1 = Development_language::find($input["development_language_id1"]);
        $development_language2 = Development_language::find($input["development_language_id2"]);
        $development_language3 = Development_language::find($input["development_language_id3"]);
        $development_language4 = Development_language::find($input["development_language_id4"]);

        return view('./matter/matterConfirmation', ["input" => $input],compact('prefecture','occupation','development_language1',
        'development_language2','development_language3','development_language4'));
    }

    public function matterRegistar(Request $request)
    {
       //セッションから値を取り出す
       $input = $request->session()->get("matter_post");
       $matter = new Matter;
        unset($input['_token']);
        $matter->fill($input)->save();

        return view('./matter/matterRegistar');
    }
}
