<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_received_matter extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matter()
    {
        //Userモデルのデータを取得する
        return $this->belongsTo('App\Matter');
    }
}
