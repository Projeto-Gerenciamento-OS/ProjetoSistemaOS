<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CliRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [   
            'tipo' => 'required',
            'cpf_cnpj' => 'required',
            'razao' => 'required',
            'fantasia' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'email' => 'required',
            'cep' => 'required',
            'fone1' => 'required',
            'fone2' => 'required',
            'obs' => 'required',
        ];
    }


    public function messages():array
    {
        return[
            'tipo.required'=>'Campo tipo é Obrigatório',
            'cpf_cnpj.required'=>'Campo cpf_cnpj é Obrigatório',
            'razao.required'=> 'Campo razao é Obrigatório',
            'fantasia.required'=> 'Campo fantasia é Obrigatório',
            'endereco.required'=> 'Campo endereco é Obrigatório',
            'numero.required'=> 'Campo numero é Obrigatório',
            'complemento.required'=> 'Campo complemento é Obrigatório',
            'bairro.required'=> 'Campo BAIRRO é Obrigatório',
            'cidade.required'=> 'Campo CIDADE é Obrigatório',
            'uf.required'=> 'Campo UF é Obrigatório',
            'email.required'=> 'Campo email é Obrigatório',
            'cep.required'=> 'Campo cep é Obrigatório',
            'fone1.required'=> 'Campo fone1 é Obrigatório',
            'fone2.required'=> 'Campo fone2 é Obrigatório',
            'obs.required'=> 'Campo obs é Obrigatório',
            
        ];
    }
}

