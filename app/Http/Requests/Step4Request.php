<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step4Request extends FormRequest
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
            'step4_1' => 'required',
            'step4_1_1' => 'required',
            'step4_2' => 'required',
            'step4_2_1' => 'required',
            'step4_3' => 'required',
            'step4_3_1' => 'required',
            'step4_4' => 'required',
            'step4_4_1' => 'required',
            'step4_5' => 'required',
            'step4_5_1' => 'required',
            'step4_5_2' => 'required',
            'step4_6' => 'required',
            'step4_6_1' => 'required',
            'step4_7' => 'required',
            'step4_7_1' => 'required',
            'step4_8' => 'required',
            'step4_8_1' => 'required',
            'step4_9' => 'required',
            'step4_9_1' => 'required',
            'step4_10' => 'required',
            'step4_10_1' => 'required',
            'step4_11' => 'required',
            'step4_11_1' => 'required',
            'step4_12' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'step4_1' => 'Pergunta 1',
            'step4_1_1' => 'Pergunta 1.1',
            'step4_2' => 'Pergunta 2',
            'step4_2_1' => 'Pergunta 2.1',
            'step4_3' => 'Pergunta 3',
            'step4_3_1' => 'Pergunta 3.1',
            'step4_4' => 'Pergunta 4',
            'step4_4_1' => 'Pergunta 4.1',
            'step4_5' => 'Pergunta 5',
            'step4_5_1' => 'Pergunta 5.1',
            'step4_5_2' => 'Pergunta 5.2',
            'step4_6' => 'Pergunta 6',
            'step4_6_1' => 'Pergunta 6.1',
            'step4_7' => 'Pergunta 7',
            'step4_7_1' => 'Pergunta 7.1',
            'step4_8' => 'Pergunta 8',
            'step4_8_1' => 'Pergunta 8.1',
            'step4_9' => 'Pergunta 9',
            'step4_9_1' => 'Pergunta 9.1',
            'step4_10' => 'Pergunta 10',
            'step4_10_1' => 'Pergunta 10.1',
            'step4_11' => 'Pergunta 11',
            'step4_11_1' => 'Pergunta 11.1',
            'step4_12' => 'Pergunta 12',
        ];
    }
}
