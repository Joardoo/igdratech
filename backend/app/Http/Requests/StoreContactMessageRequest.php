<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Validación del formulario de contacto.
 */
class StoreContactMessageRequest extends FormRequest
{
    /**
     * Cualquier visitante puede enviar el formulario (no hace falta iniciar sesión).
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas que tiene que cumplir cada campo.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ];
    }

    /**
     * Mensajes de error en castellano.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Escribe tu nombre.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',
            'email.required' => 'Escribe tu email.',
            'email.email' => 'El email no tiene un formato válido.',
            'email.max' => 'El email no puede tener más de :max caracteres.',
            'message.required' => 'Escribe tu mensaje.',
            'message.max' => 'El mensaje no puede tener más de :max caracteres.',
        ];
    }
}
