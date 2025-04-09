<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required'],
            'licencia' => ['required','size:10'],
            'telefono'=>['required','size:10','numeric']
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'licencia.required' => 'La licencia  es requerida',
            'telefono.required' => 'El telefono es requerido'
        ];
    }
}

