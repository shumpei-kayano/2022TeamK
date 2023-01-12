<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development_language2 extends Model
{

    protected $table = 'development_language2s';

    public function matters (){
        return $this->hasmany('App\Matter','development_language_id2');
    }

    public function portfolio (){
        return $this->hasmany('App\Portfolio','development_language_id2');
    }
}
