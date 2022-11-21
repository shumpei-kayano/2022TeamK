<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $fillable = ["prefectures_id", "matter_name", "tel", "development_language_id1", "development_language_id2", "development_language_id3", "development_language_id4",
    "occupation_id", "remarks", "success_fee", "deadline", "rank", "number_of_person", "user_id"];

    // 案件検索
    // public function SearchMatter($request)
    // {
    //     // リクエストから
    //     return $this->create([
    //         'protein' => $request->protein,
    //         'carbohydrate' => $request->carbohydrate,
    //         'fat' => $request->fat,
    //     ]);
    // }

    public function prefecture (){
        return $this->belongsTo('App\Prefecture','id');
    }

    public function occupation (){
        return $this->belongsTo('App\Occupation','id');
    }

    public function favorites (){
        return $this->hasmany('App\Favorites','id');
    }

    public function development_language (){
        return $this->belongsTo('App\Development_language','id');
    }
}
