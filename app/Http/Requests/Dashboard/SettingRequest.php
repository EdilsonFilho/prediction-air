<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class SettingRequest extends FormRequest
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
            'name' => 'required|max:191',
            'date_birth' => 'nullable|date_format:d/m/Y',
            'password' => 'confirmed|nullable|min:6',
            'password_confirmation' => 'nullable|min:6|same:password',
        ];

        if (config('seed.username') == 'email') {
            $rules['email'] = 'required|email|unique:users,email,' . Auth::id();
            $rules['phone'] = 'nullable|regex:/\(\d{2,}\) \d{4,}\-\d{4}/|unique:users,phone,' . Auth::id();
        } else {
            $rules['email'] = 'nullable|email|unique:users,email,' . Auth::id();
            $rules['phone'] = 'required|max:191|unique:users,phone,' . Auth::id();
        }

        return $rules;
    }
}
