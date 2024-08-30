<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_emp1' => 'required',
            'nome' => 'required',
            'fone' => 'required' ,
            'id_emp2' => 'required',
            'id_users' => 'required',
            'id_turno' => 'required',
            'id_setor' => 'required',
        ];
    }
    
    public function messages():array
        {
            return[
                'id_emp1.required' => 'O Campo é Obrigatório',
                'nome.required' => 'O Campo é Obrigatório',
                'fone.required' => 'O Campo é Obrigatório' ,
                'id_emp2.required' => 'O Campo é Obrigatório',
                'id_users.required' => 'O Campo é Obrigatório',
                'id_turno.required' => 'O Campo é Obrigatório',
                'id_setor.required' => 'O Campo é Obrigatório',
        ];
        }
}