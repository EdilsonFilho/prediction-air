<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        $rules = ['password' => 'required|string'];

        if (config('seed.username') == 'email') {
            $rules['email'] = 'required|email';
        } else {
            $rules['phone'] = 'required|regex:/\(\d{2,}\) \d{4,}\-\d{4}/';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'email' => 'e-mail',
            'phone' => 'telefone',
            'password' => 'senha',
        ];
    }
}
