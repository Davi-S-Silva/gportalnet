<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    public function mostraContato()
    {
        return view('layoutportal.contato');
    }
}
