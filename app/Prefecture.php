<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public function matters (){
        return $this->hasmany('App\Matter','prefectures_id');
    }
}
