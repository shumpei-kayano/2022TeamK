<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function matter(){
        return $this->belongsTo('App\Matter');
    }
    
    public function prefecture(){
    return $this->hasManyThrough('App\Prefecture', 'App\Matter');
    }

    public function occupation(){
    return $this->hasManyThrough('App\Occupation', 'App\Matter');
    }

    public function development_language(){
    return $this->hasManyThrough('App\Development_language', 'App\Matter');
    }
}
