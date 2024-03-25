<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeneficiosEntregadosRequest extends FormRequest
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
            //
            'id_beneficio' => 'required|integer|exists:beneficios,id',
            'run' => 'required|string|max:255',
            'dv' => 'required|string|max:1',
            'total' => 'required|numeric|min:0',
            'estado' => 'required|string|in:activo,inactivo',
            'fecha' => 'required|date',
        ];
    }
}
