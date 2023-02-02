<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Matter;
use App\User;
use App\Prefecture;
use App\Occupation;
use App\Development_language;
use App\Rank_of_difficulty;
use App\Favorite;
use App\Order_received_matter;

class RecievedMatterController extends Controller
{
    public function matterSubmission(Request $request)
    {
        $matter = Matter::find($request->matter_id);
        $recievedMatter = new Order_received_matter();
        $recievedMatter->matter_id = $request->matter_id;
        $recievedMatter->user_id = auth()->user()->id;
        $recievedMatter->create_user_id = $matter->user_id;
        $recievedMatter->occupation_id = $matter->occupation_id;
        // 後でモデルにcalcReward()を作成する
        $recievedMatter->reward = $matter->success_fee;
        $recievedMatter->deadline = $matter->deadline;
        $recievedMatter->rank = $matter->rank;
        // 後でモデルにcalcexperience()を作成する
        $recievedMatter->experience = 500;
        $recievedMatter->order_date = date('Y/m/d');
        // $recievedMatter->achievement_date = '';
        $recievedMatter->adoption_flg = 0;
        $recievedMatter->achievement_date = date('Y/m/d');
        $recievedMatter->save();

        return redirect('./show');
    }
}
