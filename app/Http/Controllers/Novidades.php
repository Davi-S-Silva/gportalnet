<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Novidades extends Categorias
{
    public function mostraNovidades()
    {
        return $this->mostraCategorias();
    }
}
