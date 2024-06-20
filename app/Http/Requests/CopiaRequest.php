<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CopiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'mes'=> 'required',
            'descricao'=> 'required',
            'quantidade'=> 'required',
            'dtasolicitacao'=> 'required',
            'tipo'=> 'required'
        ];
    }

    public function messages(): array
    {
        return[
            'nome.required' => 'o nome é obrigatorio',
            'descricao.required' => 'a descrição é obrigatoria',
            'quantidade.required' => 'a quantidade é obrigatoria',
            'dtasolicitacao.required' => 'a data é obrigatoria',
            'tipo.required' => 'o tipo é obrigatorio'
        ];
    }
}


