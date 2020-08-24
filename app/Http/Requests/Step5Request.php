<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step5Request extends FormRequest
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
        $rules = [];

        for ($i = 1; $i <= 53; $i++) {
            $rules['step5_' . $i] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = [];

        for ($i = 1; $i <= 53; $i++) {
            $attributes['step5_' . $i] = 'Pergunta ' . $i;
        }

        return $attributes;
    }
}
