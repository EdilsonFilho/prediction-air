<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step1Request extends FormRequest
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
            'fill_date' => 'required',
        ];

        for ($i = 1; $i <= 13; $i++) {
            $rules['step1_' . $i] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = [
            'fill_date' => 'Data de preenchimento',
        ];

        for ($i = 1; $i <= 13; $i++) {
            $attributes['step1_' . $i] = 'Pergunta ' . $i;
        }

        return $attributes;
    }
}
