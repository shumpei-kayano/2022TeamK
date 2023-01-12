<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development_language5 extends Model
{
    public function matters (){
        return $this->hasmany('App\Matter','development_language_id5');
    }

    public function portfolio (){
        return $this->hasmany('App\Portfolio','development_language_id5');
    }
}
