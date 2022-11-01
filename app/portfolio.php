<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $guarded =array('id','user_id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'email',
        'age' => 'intrger|min:20|max:100'
    );

    pubric function getData(){
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }
}
