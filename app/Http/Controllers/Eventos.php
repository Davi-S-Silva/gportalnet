<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eventos extends Categorias
{
    public function mostraEventos()
    {
        return $this->mostraCategorias();
    }
}
