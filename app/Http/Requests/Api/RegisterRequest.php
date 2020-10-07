<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6'
        ];

        if (config('seed.username') == 'email') {
            $rules['email'] = 'required|email|unique:users';
            $rules['phone'] = 'nullable|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users';
        } else {
            $rules['email'] = 'nullable|email|unique:users';
            $rules['phone'] = 'required|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'phone' => 'telefone',
            'password' => 'senha',
        ];
    }
}
