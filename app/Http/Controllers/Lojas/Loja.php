<?php

namespace App\Http\Controllers\Lojas;

use App\Http\Controllers\Categorias;
use Illuminate\Http\Request;

class Loja extends Categorias
{

    public function admin($loja)
    {
        //fazer login e senha. na hora que fizer o login o sitema redireciona para a pagina da sua loja
        if($this->getLoja($loja))
        {
            return view('layoutportal.adminloja');
        }
        else
        {
            return 'loja nao encontrada';
        }
    }

    public function mostraLojas()
    {
        return $this->mostraCategorias();
    }
    //verificar qual é a loja
    private function getLoja($loja)
    {
        //encontrar a loja e abrir
        //buscar no banco se loja existe
        $lojaAtual = ['nome'=>$loja];
        if($loja!=null)
        {
            return $lojaAtual;
        }else{
            return false;
        }

    }
    public function abrirLoja($loja){
        if($this->getLoja($loja))
        {
            //echo 'loja: '.$loja.' encontrada! loja LPR sendo carregada...';
            //echo $loja;
            //redirect()->route('/'.$loja.'/');
            echo view('lojas/lpr/loja',['loja'=>$this->getLoja($loja)]);
        }
        else
        {
            return 'loja nao encontrada';
        }
    }
    public function pdv($loja)
    {
        //mostrar a tela de login e abrir o pdv da loja correspondente
        if($this->getLoja($loja))
        {
            return view('layoutportal.pdv.pdv');
        }
        else
        {
            return 'loja nao encontrada';
        }
    }

    public function carrinhoLoja($loja)
    {
        return view('lojas/lpr/carrinho');
    }
}
