<?php

namespace App\Http\Controllers;

// use App\Models\Usuario;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(Request $request){
        //echo '<pre>';print_r($request->session()->all());echo '</pre>';
        return view('layoutportal.portal');
    }

    // public function temp()
    // {
    //     $usuario = new Usuario();
    //     $usuario->usuario = 'daviedeus43@gmail.com';
    //     $usuario->senha = Hash::make('32843826');
    //     $usuario->save();
    //     echo 'ok';
    // }
}
