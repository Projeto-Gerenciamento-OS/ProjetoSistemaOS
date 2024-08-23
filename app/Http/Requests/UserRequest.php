<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        //colocar true
        return true;
    }

    public function rules(): array{

        $userId = $this->route('user');

        return [

            //criando as regras de validação 
            'nome' => 'required',
            'email' => 'required|email|unique:users,email,' . ($userId ? $userId->id : null),
            'password' => 'required_if:password,!=,null|min:6',
            'tipo'=>'required',
            'roles'=>'required',
            
        ];
    }
    //criando um metodo para as mensagens

    public function messages():array
    {
        return[
            'nome.required'=>'Campo nome é Obrigatório',
            'email.required'=>'Campo email é Obrigatório',
            'email.email' => 'Necessário enviar e-mail válido!',
            'email.unique' => 'O e-mail já está cadastrado!',
            'password.required'=>'Campo senha é Obrigatório',
            'tipo.required'=>'Campo tipo é Obrigatório',
            'roles.required'=>'Campo nivel é Obrigatório',
        ];
    }
}
