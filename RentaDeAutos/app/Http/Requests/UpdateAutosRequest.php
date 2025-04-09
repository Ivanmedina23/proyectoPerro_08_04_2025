<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAutosRequest extends FormRequest
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
             'matricula' => ['required','size:11'],
             'Costo_dia'=> ['required','numeric','gt:0'],
         ];
     }
     
     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'Costo_dia.required' => 'El nombre es requerido',
            'Costo_dia.numeric'=> 'El costo no debe ser menor a cero',
        ];
    }
}
