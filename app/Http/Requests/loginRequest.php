<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'Email'=>'required|email',
            'Senha'=>'required|min:6|max:20'
        ];
    }
    public function messages()
    {
        return [
            'Email.required'=>'Digite um Email',
            'Email.email'=>'Digite um Email Válido',
            'Senha.required'=>'Digite Uma Senha',
            'Senha.min'=>'A senha tem que ter no minimo :min caracteres',
            'Senha.max'=>'A senha tem que ter no maximo :max caracteres'
        ];
    }
}
