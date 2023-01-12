<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development_language3 extends Model
{
    public function matters (){
        return $this->hasmany('App\Matter','development_language_id3');
    }

    public function portfolio (){
        return $this->hasmany('App\Portfolio','development_language_id3');
    }
}
