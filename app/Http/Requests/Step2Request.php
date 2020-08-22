<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step2Request extends FormRequest
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

        for ($i = 1; $i <= 6; $i++) {
            $rules['step2_' . $i] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = [];

        for ($i = 1; $i <= 6; $i++) {
            $attributes['step2_' . $i] = 'Pergunta ' . $i;
        }

        return $attributes;
    }
}
