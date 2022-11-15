<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function Matters (){
        return this->hasmany('App\Matters');
    }
}
