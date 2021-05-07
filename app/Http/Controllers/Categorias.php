<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorias extends Controller
{
    public function mostraCategorias()
    {
        return view('layoutportal.lista_categorias');
    }
}
