<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function matters (){
        return $this->hasmany('App\Matters','occpation_id');
    }
}
