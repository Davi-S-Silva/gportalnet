<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Categorias;

class Dicas extends Categorias
{
    public function mostraDicas()
    {
        return $this->mostraCategorias();
    }
}
