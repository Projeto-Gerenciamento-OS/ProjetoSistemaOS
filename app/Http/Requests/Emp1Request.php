<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Emp1Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            
            'descricao' => 'required',
        ];
    }

    public function messages():array
    {
        return[
            'descricao.required'=>'Campo descrição é Obrigatório',

        ];
    }
}
