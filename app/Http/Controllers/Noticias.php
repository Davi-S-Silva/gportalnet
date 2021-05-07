<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Noticias extends Categorias
{
    public function mostraNoticias()
    {
        return $this->mostraCategorias();
    }
}
