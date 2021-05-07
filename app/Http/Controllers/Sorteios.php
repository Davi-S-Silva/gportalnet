<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sorteios extends Controller
{
    public function mostraSorteios()
    {
        return view('layoutportal.sorteios');
    }
}
