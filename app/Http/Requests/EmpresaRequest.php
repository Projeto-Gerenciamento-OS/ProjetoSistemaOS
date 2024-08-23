<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class EmpresaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [   
            // 'empresa1_id' => 'required',
            'cnpj' => 'required',
            'razao' => 'required',
            'fantasia' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',         
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'fone1' => 'required',
            'fone2' => 'required',
            'plano' => 'required',
            'qtdadm' => 'required',
            'qtdoper' => 'required',       
        ];
    }


    public function messages():array
    {
        return[
            // 'empresa1_id'=>'Campo empresa1_id é Obrigatório',
            'cnpj.required'=>'Campo CPF/CNPJ é Obrigatório',
            'razao.required' => 'Campo Razão é Obrigatório',
            'fantasia.required' => 'Campo fantasia é Obrigatório',
            'cep.required'=>'Campo cep é Obrigatório',
            'logradouro.required'=>'Campo logradouro é Obrigatório',
            'numero.required'=>'Campo numero é Obrigatório',
            'bairro.required'=>'Campo bairro é Obrigatório',
            'cidade.required'=>'Campo cidade é Obrigatório',
            'fone1.required'=>'Campo Telefone 1 é Obrigatório',
            'fone2.required'=>'Campo Telefone 2 é Obrigatório',
            'qtdadm.required'=>'Campo qtdadm é Obrigatório',
            'qtdoper.required'=>'Campo qtdoper é Obrigatório',
            
        ];
    }
}
