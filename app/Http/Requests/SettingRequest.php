<?php

namespace App\Http\Requests;

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
        return [
            'name' => 'required|max:191',
            'date_birth' => 'nullable|date_format:d/m/Y',
            'email' => 'email',
            'phone' => 'required|max:191|unique:users,phone,' . Auth::user()->id,
            'password' => 'confirmed|nullable|min:6',
            'password_confirmation' => 'nullable|min:6|same:password',
        ];
    }
}
