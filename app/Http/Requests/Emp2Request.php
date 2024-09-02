<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class Emp2Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [   
            'razao' => 'required',
            'fantasia' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'uf' => 'required',
            'fone1' => 'required',
            'fone2' => 'required',
            'plano' => 'required',
            'qtdeadm' => 'required',
            'qtdeoper' => 'required',
            'id_emp1'=>'required',
      
        ];
    }


    public function messages():array
    {
        return[
          
            'razao.required'=>'Campo RAZÃO é Obrigatório',
            'fantasia.required'=>'Campo FANTASIA é Obrigatório',
            'cnpj.required'=> 'Campo CNPJ é Obrigatório',
            'endereco.required'=> 'Campo ENDEREÇO é Obrigatório',
            'numero.required'=> 'Campo NÚMERO é Obrigatório',
            'complemento.required'=> 'Campo COMPLEMENTO é Obrigatório',
            'bairro.required'=> 'Campo BAIRRO é Obrigatório',
            'cidade.required'=> 'Campo CIDADE é Obrigatório',
            'cep.required'=> 'Campo CEP é Obrigatório',
            'uf.required'=> 'Campo UF é Obrigatório',
            'fone1.required'=> 'Campo TELEFONE1 é Obrigatório',
            'fone2.required'=> 'Campo TELEFONE2 é Obrigatório',
            'plano.required'=> 'Campo PLANO é Obrigatório',
            'qtdeadm.required'=> 'Campo QTDEAADM é Obrigatório',
            'qtdeoper.required'=> 'Campo QTDEOPER é Obrigatório',
            'id_emp1.required'=>'Campo ID_EMP1 é Obrigatório',
            
        ];
    }
}
