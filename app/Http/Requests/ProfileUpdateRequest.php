<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // Obtém o ID do usuário que está sendo editado
        $userId = $this->route('id') ?? $this->user()->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                // Ignora o e-mail do usuário atual na verificação de unicidade
                Rule::unique('users')->ignore($userId),
            ],
            'password' => ['nullable', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'O e-mail já foi utilizado por outro usuário.',
        ];
    }
}
