<?php

namespace App\Http\Controllers\Servicos;

use App\Http\Controllers\Categorias;
use Illuminate\Http\Request;

class Servico extends Categorias
{
    public function mostraServicos()
    {
        return $this->mostraCategorias();
    }
}
