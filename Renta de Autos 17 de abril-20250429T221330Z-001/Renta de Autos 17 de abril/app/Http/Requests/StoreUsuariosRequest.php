<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuariosRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required'],
            'correo' => ['required', 'email', 'unique:usuarios,correo'],
            'licencia' => ['required', 'size:10', 'unique:usuarios,licencia'],
            'telefono' => ['required', 'numeric', 'unique:usuarios,telefono']
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'correo.required' => 'El correo es requerido',
            'correo.email' => 'El correo debe ser válido',
            'correo.unique' => 'Este correo ya está registrado',
            'licencia.required' => 'La licencia es requerida',
            'licencia.size' => 'La licencia debe tener exactamente 10 caracteres',
            'licencia.unique' => 'Esta licencia ya está registrada',
            'telefono.required' => 'El teléfono es requerido',
            'telefono.numeric' => 'El teléfono debe ser numérico',
            'telefono.unique' => 'Este teléfono ya está registrado',
        ];
    }
}
