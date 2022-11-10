<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function portfolio(Request $request)
    {
        return view('portfolio');
    }

    public function update(Request $request)
    {
        return view('portfolioUpdate');
    }
}
