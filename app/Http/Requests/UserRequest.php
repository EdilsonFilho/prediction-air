<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'adress' => 'max:191',
            'phone' => 'max:191',
            'name' => 'required|max:191',
            'profile' => 'required',
            'date_birth' => 'nullable|date_format:d/m/Y'
        ];

        if (isset($this->user->id)) { // se tem id é edição
            $rules['email'] = 'required|email|max:255|unique:users,email,'.$this->user->id;
            $rules['password'] = 'confirmed|nullable|min:6';
            $rules['password_confirmation'] = 'nullable|min:6|same:password';
        } else {
            $rules['email'] = 'required|email|max:255|unique:users';
            $rules['password'] = 'confirmed|required|min:6';
            $rules['password_confirmation'] = 'required|min:6|same:password';
        }

        return $rules;
    }
}
