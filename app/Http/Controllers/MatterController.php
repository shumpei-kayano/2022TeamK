<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Matter;
use App\Prefecture;
use App\Occupation;
use App\Development_language;
use App\Rank_of_difficulty;
use App\Favorite;

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

    public function postingScreen(Request $request)
    {
        $user = Auth::user();
        // $matter = Matter::all();
        $matters = Matter::with('prefecture','occupation','development_language')->where('user_id',$user->id)->get();
        $prefectures = \DB::table('prefectures') -> get();
        $occupations = \DB::table('occupations') -> get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties') -> get();
        $development_languages = \DB::table('development_languages') -> get();
        return view('postingScreen',['matters'=>$matters],compact('user','prefectures','occupations','rank_of_difficulties','development_languages'));
    }

    public function matterEdit(Request $request)
    {
        $matters = Matter::with('prefecture','occupation','development_language')->where('matter_id',$matter->id)->get();
        return view('matterEdit',['matters'=>$matters],compact('user','prefectures','occupations','rank_of_difficulties','development_languages'));
    }

    public function matterUpdate(Request $request)
    {
        $matter = Matter::find($request -> matter_id);
        $form = $request->all();
        
        unset($form['_token']);
        $matter->fill($form)->save();
        return view('postingScreen');
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

    public function show(Request $request)
    {
        $keyword = $request->input('keyword');
        $prefectures_id = $request->input('prefectures_id');
        $occupation_id = $request->input('occupation_id');
        $level_id = $request->input('level_id');
        // dd($keyword,$prefectures_id,$occupation_id,$level_id);

        $query = Matter::query();

        //テーブルの結合
        $query->join('prefectures', function ($query) use ($request) {
        $query->on('matters.prefectures_id', '=', 'prefectures.id');
        })->join('occupations', function ($query) use ($request) {
        $query->on('matters.occupation_id', '=', 'occupations.id');
        });

        if(!empty($prefectures_id)) {
            $query->where('prefectures_id', 'LIKE', $prefectures_id);
        }

        if(!empty($occupation_id)) {
            $query->where('occupation_id', 'LIKE', $occupation_id);
        }
        
        if(!empty($level_id)) {
            $query->where('rank', 'LIKE', $level_id);
        }

        if(!empty($keyword)) {
            $query->where('matter_name', 'LIKE', "%{$keyword}%");
        }

        $items = $query->select('Matters.id','Matters.matter_name','Occupations.occupation_name',
        'Matters.rank','Prefectures.prefectures_name','Matters.remarks')->get();
        // $items = $query->get();
        
        $prefectures = Prefecture::all();
        $occupations  = Occupation::all();
        $rank_of_difficulties = Rank_of_difficulty::all();
        $favorite = Favorite::where('user_id', auth()->user()->id)->orderBy('matter_id','asc')->get();
        // $favorite = \DB::table('favorites') -> get();
        return view('./show',compact('items', 'keyword', 'prefectures_id', 'occupation_id',
    'level_id', 'prefectures', 'occupations', 'rank_of_difficulties', 'favorite'));
    }

    public function detail($id)
    {
        $matter = Matter::find($id);
        $favorite = Favorite::where('user_id', auth()->user()->id)->where('matter_id', $id)->first();
        return view('./matter_detail', compact('matter', 'favorite'));
    }
}
