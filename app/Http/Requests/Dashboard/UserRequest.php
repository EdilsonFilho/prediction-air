<?php

namespace App\Http\Requests\Dashboard;

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
            'address' => 'max:191',
            'name' => 'required|max:191',
            'date_birth' => 'nullable|date_format:d/m/Y'
        ];

        if (isset($this->user->id)) { // se tem id é edição

            if (config('seed.username') == 'email') {
                $rules['email'] = 'required|email|max:255|unique:users,email,' . $this->user->id;
                $rules['phone'] = 'nullable|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users,phone,' . $this->user->id;
            } else {
                $rules['email'] = 'nullable|email|max:255|unique:users,email,' . $this->user->id;
                $rules['phone'] = 'required|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users,phone,' . $this->user->id;
            }

            $rules['password'] = 'confirmed|nullable|min:6';
            $rules['password_confirmation'] = 'nullable|min:6|same:password';
        } else {

            if (config('seed.username') == 'email') {
                $rules['email'] = 'required|email|unique:users';
                $rules['phone'] = 'nullable|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users';
            } else {
                $rules['email'] = 'nullable|email|unique:users';
                $rules['phone'] = 'required|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users';
            }

            $rules['password'] = 'confirmed|required|min:6';
            $rules['password_confirmation'] = 'required|min:6|same:password';
        }

        return $rules;
    }
}
