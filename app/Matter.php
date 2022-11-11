<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $fillable = ["prefectures_id", "matter_name", "tel", "development_language_id1", "development_language_id2", "development_language_id3", "development_language_id4",
    "occupation_id", "remarks", "success_fee", "deadline", "rank", "number_of_person"];

    // 案件登録
    // public function InsertMatter($request)
    // {
    //     // リクエストから
    //     return $this->create([
    //         'protein' => $request->protein,
    //         'carbohydrate' => $request->carbohydrate,
    //         'fat' => $request->fat,
    //     ]);
    // }
}
