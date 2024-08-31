<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MateriaisRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            
        ];
    }

    public function messages():array
    {
        return[
            'unidade.required'=>'Campo nome é Obrigatório',
            // 'tipo.required'=>'Campo tipo é Obrigatório',
            // 'nivel.required'=>'Campo nivel é Obrigatório',
        ];
    }
}
