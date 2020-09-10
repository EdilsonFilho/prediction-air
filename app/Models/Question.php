<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public static function step1($index = '1')
    {
        $questions = [
            '1' => '1. Idade',
            '2' => '2. Gênero',
            '2_1' => '2.1. Orientação sexual',
            '3' => '3. Nacionalidade',
            '4' => '4. Estado civil',
            '5' => '5. Escolaridade',
            '6' => '6. Situação perante o trabalho',
            '7' => '7. Profissão',
            '8' => '8. Como adquiriu o VIH?',
            '9' => '9. Tipo de vírus (Se souber)',
            '10' => '10. Há quantos anos é portador da infecção por HIV?',
            '11' => '11. Tem conhecimento de estar infectado pelo vírus da Hepatite B?',
            '12' => '12. Tem conhecimento de estar infectado pelo vírus da Hepatite C?',
            '13' => '13. É portador de outra doença?'
        ];

        return $questions[$index];
    }

    public static function step2($index = '1')
    {
        $questions = [
            '1' => '1. Alguma vez se esqueceu de tomar os seus medicamentos?',
            '2' => '2. Por vezes descuida-se na tomada dos seus medicamentos?',
            '3' => '3. Alguma vez interrompeu a toma dos medicamentos por se sentir mal?',
            '4' => '4. Pense na semana passada. Quantas vezes não tomou os medicamentos?',
            '5' => '5. Não tomou algum dos seus medicamentos durante o fim de semana passado?',
            '6' => '6. Nos últimos três meses, quantos dias deixou de tomar todos os medicamentos?'
        ];

        return $questions[$index];
    }

    public static function step3($index = '1')
    {
        $questions = [
            '1' => '1. Atenção',
            '2' => '2. Velocidade psicomotora',
            '3' => '3. Recuperação da memória',
            '4' => '4. Construção',
        ];

        return $questions[$index];
    }

    public static function step4($index = '1')
    {
        $questions = [
            '1' => '1. Tem recebido apoio de alguém em situação concreta, facilitando a realização do seu tratamento? (Ex: tomar conta dos filhos quando tem consulta, cuidar da casa nos dias de consulta ou qualquer outra situação)',
            '1_1' => '1.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '2' => '2. Tem recebido apoio de alguém em questões financeiras, como divisão das despesas da casa, dinheiro dado ou emprestado?',
            '2_1' => '2.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '3' => '3. Tem recebido apoio de alguém em atividades práticas do seu dia-a-dia? (Ex: arrumação da casa, ajuda no cuidado dos filhos, preparação de refeições ou qualquer outra atividade cotidiana)',
            '3_1' => '3.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '4' => '4. Tem recebido apoio de alguém em relação aos seus próprios cuidados de saúde? (Ex: lembrar a hora de tomar um medicamento ou o dia de fazer um exame, comprar um medicamento para si, acompanhá-lo numa consulta ou qualquer outra situação)',
            '4_1' => '4.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '5' => '5. Tem recebido apoio de alguém com quem possa contar em caso de necessidade?',
            '5_1' => '5.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '5_2' => '5.2 Com base nos tipos de apoio mencionado acima (questões 1 a 5), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio?',
            '6' => '6. Tem recebido apoio de alguém que o/a faz você sentir valorizado(a) como pessoa?',
            '6_1' => '6.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '7' => '7. Tem recebido apoio de alguém com quem possa desabafar ou conversar sobre assuntos relacionados com a sua doença?',
            '7_1' => '7.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '8' => '8. Tem recebido apoio de alguém que lhe oferece informações, melhorando o seu nível de conhecimento sobre o seu problema de saúde?',
            '8_1' => '8.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '9' => '9. Tem recebido apoio de alguém que faz senti-lo/a integrado socialmente?',
            '9_1' => '9.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '10' => '10. Tem recebido apoio de alguém que o/a ajuda a melhorar o seu humor e disposição?',
            '10_1' => '10.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '11' => '11. Tem recebido apoio de alguém quando precisa de companhia para se divertir ou fazer atividades de lazer?',
            '11_1' => '11.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
            '12' => '12. Com base nos tipos de apoio mencionado acima (questões 6 a 11), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio a você?',
            '13' => '13. Tem recebido algum outro tipo de apoio?',
            '14' => '14. Gostaria de fazer algum comentário sobre o apoio ou ajuda?'
        ];

        return $questions[$index];
    }
}
