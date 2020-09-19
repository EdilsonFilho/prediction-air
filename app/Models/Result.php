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

    public static function getStep5($step)
    {
        // Somatização
        $scale1 = ['2', '7', '23', '29', '30', '33', '37'];
        $countScale1 = ['tag' => 'scale1', 'value' => self::getCountScaleStep5($scale1, $step)];

        // Obsessões-Compulsões
        $scale2 = ['5', '15', '26', '27', '32', '36'];
        $countScale2 = ['tag' => 'scale2', 'value' => self::getCountScaleStep5($scale2, $step)];

        // Sensibilidade Interpessoal
        $scale3 = ['20', '21', '22', '42'];
        $countScale3 = ['tag' => 'scale3', 'value' => self::getCountScaleStep5($scale3, $step)];

        // Depressão
        $scale4 = ['9', '16', '17', '18', '35', '50'];
        $countScale4 = ['tag' => 'scale4', 'value' => self::getCountScaleStep5($scale4, $step)];

        // Ansiedade
        $scale5 = ['1', '12', '19', '38', '45', '49'];
        $countScale5 = ['tag' => 'scale5', 'value' => self::getCountScaleStep5($scale5, $step)];

        // Hostilidade
        $scale6 = ['6', '13', '40', '41', '46'];
        $countScale6 = ['tag' => 'scale6', 'value' => self::getCountScaleStep5($scale6, $step)];

        // Ansiedade Fóbica
        $scale7 = ['8', '28', '31', '43', '47'];
        $countScale7 = ['tag' => 'scale7', 'value' => self::getCountScaleStep5($scale7, $step)];

        // Ideação Paranóide
        $scale8 = ['4', '10', '24', '48', '51'];
        $countScale8 = ['tag' => 'scale8', 'value' => self::getCountScaleStep5($scale8, $step)];

        // Psicoticismo
        $scale9 = ['3', '14', '34', '44', '53'];
        $countScale9 = ['tag' => 'scale9', 'value' => self::getCountScaleStep5($scale9, $step)];

        $scales = [
            $countScale1,
            $countScale2,
            $countScale3,
            $countScale4,
            $countScale5,
            $countScale6,
            $countScale7,
            $countScale8,
            $countScale9
        ];

        usort($scales, function ($a, $b) {
            return $b['value'] <=> $a['value'];
        });

        // dd(
        //     // $test
        //     self::getNameScaleFromStep5($scales[0]['tag'])
        // );

        // Baby steps
        // - Para cada escala obter somatório, ou seja, ir na variável $step e verificar
        //      se o valor é: Nunca 0 pontos; Poucas Vezes 1 ponto; Algumas Vezes 2 pontos;
        //      Muitas Vezes 3 pontos; e Muitíssimas Vezes 4 pontos
        // - De posse desse valor, guardar as duas maiores escalas

        return self::getNameScaleFromStep5($scales[0]['tag']) . " e " . self::getNameScaleFromStep5($scales[1]['tag']);
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

    private static function getNameScaleFromStep5($scale)
    {
        $name = "";

        switch ($scale) {
            case "scale1":
                $name = "Somatização";
                break;

            case "scale2":
                $name = "Obsessões-Compulsões";
                break;

            case "scale3":
                $name = "Sensibilidade Interpessoal";
                break;

            case "scale4":
                $name = "Depressão";
                break;

            case "scale5":
                $name = "Ansiedade";
                break;

            case "scale6":
                $name = "Hostilidade";
                break;

            case "scale7":
                $name = "Ansiedade Fóbica";
                break;

            case "scale8":
                $name = "Ideação Paranóide";
                break;

            default:
                $name = "Psicoticismo";
                break;
        }

        return $name;
    }

    private static function getCountScaleStep5($scale, $step)
    {
        $count = 0;

        foreach ($scale as $key => $value) {
            $count = $count + self::getValueFromStep5($step['step5_' . $value]);
        }

        return $count;
    }

    private static function getValueFromStep5($value)
    {
        $result = 0;

        switch (strtolower($value)) {
            case "nunca":
                $result = 0;
                break;

            case "poucas vezes":
                $result = 1;
                break;

            case "algumas vezes":
                $result = 2;
                break;

            case "muitas vezes":
                $result = 2;
                break;

            default:
                $result = 3;
                break;
        }

        return $result;
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
