<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Matter;
use App\Prefecture;
use App\Occupation;
use App\Development_language;
use App\Development_language2;
use App\Development_language3;
use App\Development_language4;
use App\Development_language5;
use App\Rank_of_difficulty;
use App\Portfolio;
use App\Favorite;
use App\User;   //Userモデルを使用
use App\Order_received_matter;

class MatterController extends Controller
{

    private $formItems = [
        "prefectures_id", "matter_name", "tel", "development_language_id1", "development_language_id2", "development_language_id3", "development_language_id4",
        "occupation_id", "remarks", "success_fee", "deadline", "rank", "number_of_person", "user_id"
    ];

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
        $matters = Matter::with('prefecture', 'occupation', 'development_language', 'development_language2', 'development_language3', 'development_language2')->where('user_id', $user->id)->get();
        $prefectures = \DB::table('prefectures')->get();
        $occupations = \DB::table('occupations')->get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties')->get();
        $development_languages = \DB::table('development_languages')->get();
        $development_language2s = \DB::table('development_language2s')->get();
        $development_language3s = \DB::table('development_language3s')->get();
        $development_language4s = \DB::table('development_language4s')->get();
        return view('postingScreen', ['matters' => $matters], compact('user', 'prefectures', 'occupations', 'rank_of_difficulties', 'development_languages', 'development_language2s', 'development_language3s', 'development_language4s',));
    }

    public function matterEdit(Request $request, $id)
    {

        $user = Auth::user();
        $matters = Matter::with('prefecture', 'occupation', 'development_language', 'development_language2', 'development_language3', 'development_language4', 'development_language5')
            ->where('id', $id)->first();
        // dd($matters, $id);
        $prefectures = \DB::table('prefectures')->get();
        $occupations = \DB::table('occupations')->get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties')->get();
        $development_languages = \DB::table('development_languages')->get();
        $development_language2s = \DB::table('development_language2s')->get();
        $development_language3s = \DB::table('development_language3s')->get();
        $development_language4s = \DB::table('development_language4s')->get();
        $development_language5s = \DB::table('development_language5s')->get();
        return view('matterEdit', ['matters' => $matters], compact('user', 'prefectures', 'occupations', 'rank_of_difficulties', 'development_languages', 'development_language2s', 'development_language3s', 'development_language4s', 'development_language5s'));
    }

    public function matterUpdate(Request $request, $id)
    {
        $request->validate([
            'matter_name' => 'required',
            'remarks' => 'required',
            'tel' => 'numeric',
            'success_fee' => 'numeric',
            'rank' => 'numeric',
            'number_of_person' => 'numeric',
            'deadline' => 'required',
            'prefectures_id' => 'required'
        ]);
        $user = Auth::user();
        $matters = Matter::where('id', $id)->first();
        $form = $request->all();

        unset($form['_token']);
        $matters->fill($form)->save();
        return redirect()->action('MatterController@postingScreen');
    }
    public function remove(Request $request, $id)
    {
        $user = Auth::user();
        // $portfolio = Portfolio::find($request -> user_id)->delete();
        $matters = Matter::where('id', $id)->first();

        $matters->delete();

        // $items = \DB::table('development_languages') -> get();

        return redirect()->action('MatterController@postingScreen');
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

        $user = Auth::user();
        $prefectures = \DB::table('prefectures')->get();
        $occupations = \DB::table('occupations')->get();
        $rank_of_difficulties = \DB::table('rank_of_difficulties')->get();
        $development_languages = \DB::table('development_languages')->get();
        // dd($items);
        return view('./matter/matterAdd', compact('user', 'occupations', 'rank_of_difficulties', 'development_languages', 'prefectures'));
    }

    function post(Request $request)
    {
        $request->validate([
            'matter_name' => 'required',
            'remarks' => 'required',
            'tel' => 'numeric',
            'success_fee' => 'numeric',
            'rank' => 'numeric',
            'number_of_person' => 'numeric',
            'deadline' => 'required',
            'prefectures_id' => 'required'
        ]);
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

        return view('./matter/matterConfirmation', ["input" => $input], compact(
            'prefecture',
            'occupation',
            'development_language1',
            'development_language2',
            'development_language3',
            'development_language4'
        ));
    }

    public function matterRegistar(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("matter_post");
        //    dd($input);
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

        if (!empty($prefectures_id)) {
            $query->where('prefectures_id', 'LIKE', $prefectures_id);
        }

        if (!empty($occupation_id)) {
            $query->where('occupation_id', 'LIKE', $occupation_id);
        }

        if (!empty($level_id)) {
            $query->where('rank', 'LIKE', $level_id);
        }

        if (!empty($keyword)) {
            $query->where('matter_name', 'LIKE', "%{$keyword}%");
        }

        $items = $query->select(
            'Matters.id',
            'Matters.matter_name',
            'Occupations.occupation_name',
            'Matters.rank',
            'Prefectures.prefectures_name',
            'Matters.remarks',
            'Matters.deadline'
        )->get();
        // $items = $query->get();

        // dd($items);
        $prefectures = Prefecture::all();
        $occupations  = Occupation::all();
        $rank_of_difficulties = Rank_of_difficulty::all();
        $favorite = Favorite::where('user_id', auth()->user()->id)->orderBy('matter_id', 'asc')->get();
        // $favorite = \DB::table('favorites') -> get();
        return view('./show', compact(
            'items',
            'keyword',
            'prefectures_id',
            'occupation_id',
            'level_id',
            'prefectures',
            'occupations',
            'rank_of_difficulties',
            'favorite'
        ));
    }

    public function detail($id)
    {
        $user = Auth::user();
        $matter = Matter::find($id);
        $favorite = Favorite::where('user_id', auth()->user()->id)->where('matter_id', $id)->first();
        return view('./matter_detail', compact('matter', 'favorite', 'user'));
    }
    public function list()
    {
        $order_received_matters = Order_received_matter::where('create_user_id', auth()->user()->id)->with('user:id,name', 'matter:id,matter_name')->orderBy('id', 'asc')->paginate(20);
        return view('./list', ['order_received_matters' => $order_received_matters,]);
    }

    public function userdetail(Request $request, $id)
    {
        $form = $request->input('form');
        $portfolio = Portfolio::whereUser_id($id)->first();
        $items = \DB::table('development_languages') -> get();
        return view('./user_detail', compact('portfolio', 'form','items'));
    }

    public function approval(Request $request, $id)
    {
        $order_received_matter = Order_received_matter::find($id);
        $order_received_matter->adoption_flg = 1;
        $order_received_matter->save();
        return view('./userMypage/company');
    }

    public function rejected(Request $request, $id)
    {
        $order_received_matter = Order_received_matter::find($id);
        $order_received_matter->adoption_flg = 2;
        $order_received_matter->save();
        return view('./userMypage/company');
    }

    public function contract()
    {
        $order_received_matters = Order_received_matter::where('create_user_id', auth()->user()->id)->where('adoption_flg', '=', '1')->with('user:id,name', 'matter:id,matter_name')->orderBy('id', 'asc')->paginate(20);
        return view('./contract', ['order_received_matters' => $order_received_matters,]);
    }

    public function evaluation(Request $request, $id)
    {
        $order_received_matter = Order_received_matter::find($request->input('order_id'));
        // dd($order_received_matter);
        $form = $request->input('form');
        $order_received_matter->assessment = $form;
        $order_received_matter->save();
        $rank = $request->input('rank');
        $order_id = $request->input('order_id');
        $max_exe = DB::table('rank_of_difficulties')->where('rank', $rank)->first();
        $exe = 0;
        $user_db = User::find($id);
        $matter = Order_received_matter::find($order_id);
        


        if ($form == 1) {
            $exe = $max_exe->max_experience * 0.5;
        } else if ($form == 2) {
            $exe = $max_exe->max_experience * 0.7;
        } else if ($form == 3) {
            $exe = $max_exe->max_experience * 0.8;
        } else if ($form == 4) {
            $exe = $max_exe->max_experience * 0.9;
        } else {
            $exe = $max_exe->max_experience;
        }

        $user_db->total_experience = $user_db->total_experience + $exe;
        // dd($user_db->total_experience);
        $user_db->save();
        // dd($matter);
        $matter->evaluation = 1;
        $matter->save();
        // dd($matter->evaluation);

        return view('./evaluation', compact('form', 'id'));
    }
}