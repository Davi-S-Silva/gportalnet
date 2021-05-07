<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Entretenimento extends Categorias
{
    public function mostraEntretenimento()
    {
        return $this->mostraCategorias();   
    }
}
