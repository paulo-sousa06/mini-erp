<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $clienteId = $this->route('cliente')?->id;

        return [
            'nome' => 'required|max:255',

            'cpf' => 'required|unique:clientes,cpf,' . $clienteId,

            'email' => 'required|email|unique:clientes,email,' . $clienteId,

            'telefone' => 'nullable|max:20',

            'endereco' => 'nullable|max:255',
        ];
    }
}
