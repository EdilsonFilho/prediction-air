<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public static function getStep2($step)
    {
        $result = "";

        $step2 = new Step2;

        $attributes = $step2->getAllAttributes();

        foreach ($attributes as $key => $attribute) {
            if ($step[$key] == "Sim") {
                $result = "Baixa adesão a medicação.";
                break;
            }
        }

        return $result;
    }

    public static function getStep3($step)
    {
        if ($step->getTotal() <= 10) {
            return "Alto risco";
        }

        return "Baixo risco";
    }

    public static function getStep4($step)
    {
        $step4 = new Step4;

        $attributes = $step4->getAllAttributes();
        $countAttributes = count($step4->getAllAttributes()) - 1; // -1 representa o atributo survey_id;

        // Baixo suporte social
        $scale1 = ['Nunca', 'Raramente', 'Insatisfeito', 'Muito insatisfeito'];
        $countScale1 = 0;

        // Moderado suporte social
        $scale2 = ['Às vezes', 'Nem satisfeito nem insatisfeito', 'Insatisfeito', 'Muito insatisfeito'];
        $countScale2 = 0;

        // Alto suporte social
        $scale3 = ['Frequentemente', 'Sempre', 'Satisfeito', 'Muito Satisfeito'];
        $countScale3 = 0;

        // dd($scale1, in_array('Nunca', $scale1));

        foreach ($attributes as $key => $attribute) {

            if (in_array($step[$key], $scale1)) {
                $countScale1++;
            }

            if (in_array($step[$key], $scale2)) {
                $countScale2++;
            }

            if (in_array($step[$key], $scale3)) {
                $countScale3++;
            }
        }

        $partialResult = [
            self::getPercentage($countAttributes, $countScale1) => 'scale1',
            self::getPercentage($countAttributes, $countScale2) => 'scale2',
            self::getPercentage($countAttributes, $countScale3) => 'scale3'
        ];

        $max = max(
            self::getPercentage($countAttributes, $countScale1),
            self::getPercentage($countAttributes, $countScale2),
            self::getPercentage($countAttributes, $countScale3)
        );

        // return [
        //     'scale1' => self::getPercentage($countAttributes, $countScale1),
        //     'scale2' => self::getPercentage($countAttributes, $countScale2),
        //     'scale3' => self::getPercentage($countAttributes, $countScale3),
        //     'result' => self::getResultStep4($partialResult, $max)
        // ];

        return self::getResultStep4($partialResult, $max);
    }

    public static function getStep6($step)
    {

        $result = 0;

        $step6 = new Step6;

        $attributes = $step6->getAllAttributes();

        $index = 1;

        foreach ($attributes as $key => $attribute) {

            if ($key == 'survey_id') {
                continue;
            }

            $result = $result + Question::step6($key, true)[$step[$key]];

            $index++;
        }

        if ($result >= 90) {
            return "Independete";
        }

        if ($result >= 60 && $result < 90) {
            return "Ligeiramente dependente";
        }

        if ($result >= 40 && $result < 55) {
            return "Moderadamente dependente";
        }

        return "Severamente dependente";
    }

    private static function getResultStep4($partialResult, $max)
    {
        $scale = $partialResult[$max];

        if ($scale == 'scale1') {
            return "Baixo suporte social";
        }

        if ($scale == 'scale2') {
            return "Moderado suporte social";
        }

        return "Alto suporte social";
    }

    private static function getPercentage($total, $ref)
    {
        return number_format(($ref * 100) / $total, 2, ',', '');
    }
}
