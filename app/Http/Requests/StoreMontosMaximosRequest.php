<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMontosMaximosRequest extends FormRequest
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
            'monto_minimo' => 'required|numeric|min:0',
            'monto_maximo' => 'required|numeric|min:0',
        ];
    }
}
