<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Solidariedade extends Controller
{
    public function mostraSolidariedade()
    {
        return view('layoutportal.solidariedade');
    }
}
