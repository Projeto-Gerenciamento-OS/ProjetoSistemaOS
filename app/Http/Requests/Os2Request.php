<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Os2Request extends FormRequest
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

    // public function messages():array
    // {
    //     return[
    //         'id_status.required'=>'Campo nome é Obrigatório',
    //         // 'tipo.required'=>'Campo tipo é Obrigatório',
    //         // 'nivel.required'=>'Campo nivel é Obrigatório',
    //     ];
    // }
}
