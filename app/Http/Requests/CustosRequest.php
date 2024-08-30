<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_emp1' => 'required',
            'descricao' => 'required',
            'percentual' => 'required' ,
            'id_emp2' => 'required',
            'id_users' => 'required',
        ];
    }
    public function messages():array
    {
        return[
            'id_emp1.required' => 'O Campo é Obrigatório',
            'descricao.required' => 'O Campo é Obrigatório',
            'percentual.required' => 'O Campo é Obrigatório' ,
            'id_emp2.required' => 'O Campo é Obrigatório',
            'id_users.required' => 'O Campo é Obrigatório',
        ];
    }
}
