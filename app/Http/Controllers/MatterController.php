<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calorie;
use Illuminate\Support\Facades\Auth;

class MatterController extends Controller
{
    public function __construct()
    {
        $this->calorie = new Calorie();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('show');
    }

    public function create(Request $request)
    {
        $matter = new Matter;
        $form = $request->all();
        unset($form['_token']);
        $matter->fill($form)->save();
        return view('Matter.create');
    }
}
