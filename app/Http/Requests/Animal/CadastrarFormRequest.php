<?php

namespace App\Http\Requests\Animal;

use Illuminate\Foundation\Http\FormRequest;

class CadastrarFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string',
            'dataNascimento' => 'required|date',
            'idade' => 'required|integer',
            'especie' => 'required|string',
            'raca' => 'required|string',
            'peso' => 'required',
            'idTutor' => 'required|integer'
        ];
    }
}
