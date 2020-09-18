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

    public static function step5($index = '1')
    {
        $questions = [
            '1' => '1. Nervosismo ou tensão interior',
            '2' => '2. Desmaios ou tonturas',
            '3' => '3. Ter a impressão de que as outras pessoas controlam os seus pensamentos',
            '4' => '4. Ter a ideia de que as outras pessoas são culpadas pela maior parte dos seus problemas',
            '5' => '5. Dificuldades em se lembrar de coisas passadas ou recentes',
            '6' => '6. Aborrecer-se e irritar-se com facilidade',
            '7' => '7. Dores sobre o coração ou no peito',
            '8' => '8. Sentir medo na rua ou nos espaços abertos',
            '9' => '9. Pensamentos de acabar com a vida',
            '10' => '10. Vê a sua saúde ser afetada por ter de cuidar do seu familiar?',
            '11' => '11. Perder o apetite',
            '12' => '12. Ter medo subitamente sem ter motivo para isso',
            '13' => '13. Ter impulsos que não consegue controlar',
            '14' => '14. Sentir-se sozinho mesmo quando está com mais pessoas',
            '15' => '15. Dificuldade em fazer qualquer trabalho',
            '16' => '16. Sentir-se sozinho',
            '17' => '17. Sentir-se triste',
            '18' => '18. Não ter interesse por nada',
            '19' => '19. Sentir-se atemorizado',
            '20' => '20. Sentir-se facilmente ofendido nos seus sentimentos',
            '21' => '21. Sentir que as pessoas não são amigas ou não gostam de você',
            '22' => '22. Sentir-se inferior aos outros',
            '23' => '23. Vontade de vomitar ou mal estar',
            '24' => '24. Ter a impressão de que os outros o costumam observar e falar de você',
            '25' => '25. Ter dificuldade em adormecer',
            '26' => '26. Sentir necessidade de verificar várias vezes o que faz',
            '27' => '27. Dificuldade em tomar decisões',
            '28' => '28. Medo de viajar de automóvel, trem ou ônibus',
            '29' => '29. Sensação de que lhe falta o ar',
            '30' => '30. Calafrios ou mal-estar',
            '31' => '31. Ter que evitar certas coisas, lugares ou atividades por lhe causar medo',
            '32' => '32. Sensação de vazio na cabeça',
            '33' => '33. Sensação de anestesia ou de formigamento no corpo',
            '34' => '34. Ter a ideia de que deveria ser castigado',
            '35' => '35. Sentir-se sem esperança em relação ao futuro',
            '36' => '36. Ter dificuldade em se concentrar',
            '37' => '37. Sentir falta de forças em partes do corpo',
            '38' => '38. Sentir em estado de tensão ou aflição',
            '39' => '39. Ter pensamentos sobre a morte ou que vai morrer',
            '40' => '40. Ter impulsos de bater, ofender ou fazer mal a alguém',
            '41' => '41. Ter vontade de destruir ou partir coisas',
            '42' => '42. Sentir-se envergonhado junto de outras pessoas',
            '43' => '43. Não se sentir à vontade nas multidões, por exemplo, nas lojas, cinemas, mercados, etc.',
            '44' => '44. Grande dificuldade em sentir-se próximo de outra pessoa',
            '45' => '45. Ter ataques de terror ou pânico',
            '46' => '46. Envolver-se facilmente em discussões',
            '47' => '47. Sentir-se nervoso quando tem de ficar sozinho',
            '48' => '48. Sentir que as outras pessoas não dão o devido valor ao seu trabalho ou às suas capacidades',
            '49' => '49. Sentir-se tão inquieto que não se pode sentar ou estar parado',
            '50' => '50. Sentir que não tem valor',
            '51' => '51. Ter a impressão de que, se deixasse, as outras pessoas se aproveitariam de você',
            '52' => '52. Ter sentimentos de culpa',
            '53' => '53. Ter a impressão de que alguma coisa está mal na sua cabeça ou no seu espírito',
        ];

        return $questions[$index];
    }

    public static function step6($index = '1', $isScale = false)
    {
        $questions = [
            '1' => [
                'Alimentação' => [
                    'Independente (capaz de usar qualquer instrumento. Come num tempo razoável)',
                    'Necessita de ajuda (necessita de ajuda para cortar, levar à boca, etc.)',
                    'Dependente'
                ]
            ],
            '2' => [
                'Vestir' => [
                    'Independente (veste-se, despe-se e ajusta a roupa. Aperta os sapatos, etc.)',
                    'Necessita de ajuda (pelo menos em ½ das tarefas, mas realiza-as num bom tempo)',
                    'Dependente'
                ]
            ],
            '3' => [
                'Banho' => [
                    'Independente (toma banho geral no duche ou banheira. Entra e sai do banho sem ajuda de terceiro)',
                    'Dependente'
                ]
            ],
            '4' => [
                'Higiene corporal' => [
                    'Independente (lava a face, mãos e dentes. Faz a barba)',
                    'Dependente'
                ]
            ],
            '5' => [
                'Uso do sanitário' => [
                    'Independente (usa-a sem ajuda, senta-se, levanta-se e arranja-se sozinho)',
                    'Necessita de ajuda (para manter o equilíbrio, limpar-se e ajustar a roupa)',
                    'Dependente'
                ]
            ],
            '6' => [
                'Evacuar' => [
                    'Independente (não apresenta episódios de incontinência. Se necessita de enemas ou microlax, fá-lo sozinho)',
                    'Incontinência ocasional (episódios ocasionais de incontinência e necessita de ajuda para enemas ou microlax)',
                    'Incontinência fecal'
                ]
            ],
            '7' => [
                'Urinar' => [
                    'Independente (não apresenta episódios de incontinência. Se necessita de enemas ou microlax, fá-lo sozinho)',
                    'Incontinência ocasional (episódios ocasionais de incontinência e necessita de ajuda para uso de sonda ou colector)',
                    'Incontinência ou algaliado'
                ]
            ],
            '8' => [
                'Subir Escadas' => [
                    'Independente (sobe e desce escadas. Pode usar um instrumento de apoio)',
                    'Necessita de ajuda (necessita de ajuda física ou supervisão para subir/descer escadas)',
                    'Dependente'
                ]
            ],
            '9' => [
                'Transferência Cadeira/ Cama' => [
                    'Independente (não necessita de qualquer ajuda. Se usa a cadeira de rodas, transfere se sozinho',
                    'Necessita de ajuda mínima (ajuda mínima e supervisão)',
                    'Necessita de grande ajuda (é capaz de se sentar, mas necessita de muita ajuda para a transferência)',
                    'Dependente'
                ]
            ],
            '10' => [
                'Andar' => [
                    'Independente (caminha pelo menos 50 metros sozinho ou com ajuda de andarilho, canadianas, ...)',
                    'Necessita de ajuda (caminha 50 metros com ajuda ou supervisão)',
                    'Independente com cadeira de rodas (anda pelo menos 50 metros)',
                    'Dependente'
                ]
            ],
        ];

        $punctuation = [
            // Alimentação
            'step6_1' => [
                'Independente (capaz de usar qualquer instrumento. Come num tempo razoável)' => 10,
                'Necessita de ajuda (necessita de ajuda para cortar, levar à boca, etc.)' => 5,
                'Dependente' => 0
            ],
            // Vestir
            'step6_2' => [
                'Independente (veste-se, despe-se e ajusta a roupa. Aperta os sapatos, etc.)' => 10,
                'Necessita de ajuda (pelo menos em ½ das tarefas, mas realiza-as num bom tempo)' => 5,
                'Dependente' => 0
            ],
            // Banho
            'step6_3' => [
                'Independente (toma banho geral no duche ou banheira. Entra e sai do banho sem ajuda de terceiro)' => 5,
                'Dependente' => 0
            ],
            // Higiene corporal
            'step6_4' => [
                'Independente (lava a face, mãos e dentes. Faz a barba)' => 5,
                'Dependente' => 0
            ],
            // Uso do sanitário
            'step6_5' => [
                'Independente (usa-a sem ajuda, senta-se, levanta-se e arranja-se sozinho)' => 10,
                'Necessita de ajuda (para manter o equilíbrio, limpar-se e ajustar a roupa)' => 5,
                'Dependente' => 0
            ],
            // Evacuar
            'step6_6' => [
                'Independente (não apresenta episódios de incontinência. Se necessita de enemas ou microlax, fá-lo sozinho)' => 10,
                'Incontinência ocasional (episódios ocasionais de incontinência e necessita de ajuda para enemas ou microlax)' => 5,
                'Incontinência fecal' => 0
            ],
            // Urinar
            'step6_7' => [
                'Independente (não apresenta episódios de incontinência. Se necessita de enemas ou microlax, fá-lo sozinho)' => 10,
                'Incontinência ocasional (episódios ocasionais de incontinência e necessita de ajuda para uso de sonda ou colector)' => 5,
                'Incontinência ou algaliado' => 0
            ],
            // Subir Escadas
            'step6_8' => [
                'Independente (sobe e desce escadas. Pode usar um instrumento de apoio)' => 10,
                'Necessita de ajuda (necessita de ajuda física ou supervisão para subir/descer escadas)' => 5,
                'Dependente' => 0
            ],
            // Transferência Cadeira/ Cama
            'step6_9' => [
                'Independente (não necessita de qualquer ajuda. Se usa a cadeira de rodas, transfere se sozinho' => 15,
                'Necessita de ajuda mínima (ajuda mínima e supervisão)' => 10,
                'Necessita de grande ajuda (é capaz de se sentar, mas necessita de muita ajuda para a transferência)' => 5,
                'Dependente' => 0
            ],
            // Andar
            'step6_10' => [
                'Independente (caminha pelo menos 50 metros sozinho ou com ajuda de andarilho, canadianas, ...)' => 15,
                'Necessita de ajuda (caminha 50 metros com ajuda ou supervisão)' => 10,
                'Independente com cadeira de rodas (anda pelo menos 50 metros)' => 5,
                'Dependente' => 0
            ],
        ];

        return $isScale ? $punctuation[$index] : $questions[$index];
    }
}
