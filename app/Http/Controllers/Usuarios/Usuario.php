<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\Usuario as ModelsUsuario;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function loginUserPortal()
    {
        $erro = session('erro');
        $data = [];
        if(!empty($erro)){
            $data = [
                'erro_autenticacao' => $erro
            ];
        }
        if($this->checkSession())
        {
            //$msg = 'usuario conectado';
            if($_SERVER['REQUEST_URI']=='/login'){
                return redirect()->route('meuperfil');
            }
            return view('layoutportal.usuario.meuperfil',$data);
        }else{
            //$msg = 'faça login';
            return view('layoutportal.usuario.usuarios',$data);
        }
    }
    public function loginSubmit(loginRequest $request)
    {
        //checar se foi feito uma submissao no formulario
        if(!$request->isMethod('post'))
        {
            return redirect()->route('login');
        }

        //checar se sessao ja existe
        if($this->checkSession())
        {
            return redirect()->route('meuperfil');
        }
        //validacao dos dados
        $request->validated();

        //verificar dados do login
        $email = trim($request->input('Email'));
        $senha = trim($request->input('Senha'));

        //buscando usuario
        $usuario = ModelsUsuario::where('usuario',$email)->first();

        if(!$usuario){
            session()->flash('erro','Esse usuário não existe!');
            return redirect()->route('login');
        }

        //echo '<pre>';print_r($usuario); echo '</pre>';

        //verificando a senha
        if(!Hash::check($senha,$usuario->senha)){
            session()->flash('erro','Esse usuário não existe!');
            return redirect()->route('login');
        }



        //criar sessao
        echo 'criar sessao';
        session()->put('idUserPortal',$usuario->id);
        return redirect()->route('meuperfil');

        //print_r($request->Email);
    }

    public function logout()
    {
        session()->forget('idUserPortal');
        return redirect()->route('home');
    }
    private function checkSession()
    {
        return session()->has('idUserPortal');
    }
}
