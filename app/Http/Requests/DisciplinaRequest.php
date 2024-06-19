<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaRequest extends FormRequest
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
            'nome'=> 'required'
        ];
    }

    public function messages(): array
    {
        return[
            'nome.required' => 'campo de preenchimento obrigatorio'
        ];
    }
}


