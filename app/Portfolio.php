<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'tel',
        'educational_background',
        'development_language_id1',
        'development_year1',
        'development_language_id2',
        'development_year2',
        'development_language_id3',
        'development_year3',
        'development_language_id4',
        'development_year4',
        'development_language_id5',
        'development_year5',
        'self_pr',
        'birthday'
    ];
}
