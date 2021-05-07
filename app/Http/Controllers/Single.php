<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Compartilhar;

class Single extends Controller
{
    public function mostraSingle($cat=null, $subcat=null, $slug=null)
    {
        return view('layoutportal.single',['cat'=>$cat,'subcat'=>$subcat,'slug'=>$slug]);
    }
}
