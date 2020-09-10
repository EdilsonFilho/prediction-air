<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HADDS - Exportação dos pacientes</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de cadastro</th>

                {{-- Step 1 --}}
                <th>Data de preenchimento</th>
                <th>1. Idade</th>
                <th>2. Gênero</th>
                <th>2.1 Orientação sexual</th>
                <th>3. Nacionalidade</th>
                <th>4. Estado civil</th>
                <th>5. Escolaridade</th>
                <th>6. Situação perante o trabalho</th>
                <th>7. Profissão</th>
                <th>8. Como adquiriu o VIH?</th>
                <th>9. Tipo de vírus (Se souber)</th>
                <th>10. Há quantos anos é portador da infecção por HIV?</th>
                <th>11. Tem conhecimento de estar infectado pelo vírus da Hepatite B?</th>
                <th>12. Tem conhecimento de estar infectado pelo vírus da Hepatite C?</th>
                <th>13. É portador de outra doença?</th>

                {{-- Step2 --}}
                <th>1. Alguma vez se esqueceu de tomar os seus medicamentos?</th>
                <th>2. Por vezes descuida-se na tomada dos seus medicamentos?</th>
                <th>3. Alguma vez interrompeu a toma dos medicamentos por se sentir mal?</th>
                <th>4. Pense na semana passada. Quantas vezes não tomou os medicamentos?</th>
                <th>5. Não tomou algum dos seus medicamentos durante o fim de semana passado?</th>
                <th>6. Nos últimos três meses, quantos dias deixou de tomar todos os medicamentos?</th>

                {{-- Step3 --}}
                <th>1. Atenção</th>
                <th>2. Velocidade psicomotora</th>
                <th>3. Recuperação da memória</th>
                <th>4. Construção</th>

                {{-- Step4 --}}
                <th>1. Tem recebido apoio de alguém em situação concreta, facilitando a realização do seu tratamento?</th>
                <th>1.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>2. Tem recebido apoio de alguém em questões financeiras, como divisão das despesas da casa, dinheiro dado ou emprestado?</th>
                <th>2.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>3. Tem recebido apoio de alguém em atividades práticas do seu dia-a-dia?</th>
                <th>3.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>4. Tem recebido apoio de alguém em relação aos seus próprios cuidados de saúde?</th>
                <th>4.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>5. Tem recebido apoio de alguém com quem possa contar em caso de necessidade?</th>
                <th>5.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>5.2 Com base nos tipos de apoio mencionado acima (questões 1 a 5), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio?</th>
                <th>6. Tem recebido apoio de alguém que o/a faz você sentir valorizado(a) como pessoa?</th>
                <th>6.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>7. Tem recebido apoio de alguém com quem possa desabafar ou conversar sobre assuntos relacionados com a sua doença?</th>
                <th>7.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>8. Tem recebido apoio de alguém que lhe oferece informações, melhorando o seu nível de conhecimento sobre o seu problema de saúde?</th>
                <th>8.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>9. Tem recebido apoio de alguém que faz senti-lo/a integrado socialmente?</th>
                <th>9.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?</th>
                <th>10. Tem recebido apoio de alguém que o/a ajuda a melhorar o seu humor e disposição?</th>
                <th>10.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?	</th>
                <th>11. Tem recebido apoio de alguém quando precisa de companhia para se divertir ou fazer atividades de lazer?	</th>
                <th>11.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?	</th>
                <th>12. Com base nos tipos de apoio mencionado acima (questões 6 a 11), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio a você?</th>
                <th>13. Tem recebido algum outro tipo de apoio?</th>
                <th>14. Gostaria de fazer algum comentário sobre o apoio ou ajuda?</th>

                {{-- <th></th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($surveys as $survey)
                <tr>
                    <td>{{ $survey->patient->name }}</td>
                    <td>{{ $survey->patient->phone }}</td>
                    <td>{{ $survey->patient->created }}</td>

                    {{-- Step 1 --}}
                    <td>{{ $survey->step1['fill_date'] }}</td>
                    <td>{{ $survey->step1['step1_1'] }}</td>
                    <td>{{ $survey->step1['step1_2'] }}</td>
                    <td>{{ $survey->step1['step1_2_1'] }}</td>
                    <td>{{ $survey->step1['step1_3'] }}</td>
                    <td>{{ $survey->step1['step1_4'] }}</td>
                    <td>{{ $survey->step1['step1_5'] }}</td>
                    <td>{{ $survey->step1['step1_6'] }}</td>
                    <td>{{ $survey->step1['step1_7'] }}</td>
                    <td>{{ $survey->step1['step1_8'] }}</td>
                    <td>{{ $survey->step1['step1_9'] }}</td>
                    <td>{{ $survey->step1['step1_10'] }}</td>
                    <td>{{ $survey->step1['step1_11'] }}</td>
                    <td>{{ $survey->step1['step1_12'] }}</td>
                    <td>{{ $survey->step1['step1_13'] }}</td>

                    {{-- Step 2 --}}
                    @for ($i = 1; $i <= 6; $i++)
                        <td>{{ $survey->step2['step2_' . $i] }}</td>
                    @endfor

                    {{-- Step 3 --}}
                    @for ($i = 1; $i <= 4; $i++)
                        <td>{{ $survey->step3['step3_' . $i] }}</td>
                    @endfor

                    {{-- Step 4 --}}
                    <td>{{ $survey->step4['step4_1'] }}</td>
                    <td>{{ $survey->step4['step4_1_1'] }}</td>
                    <td>{{ $survey->step4['step4_2'] }}</td>
                    <td>{{ $survey->step4['step4_2_1'] }}</td>
                    <td>{{ $survey->step4['step4_3'] }}</td>
                    <td>{{ $survey->step4['step4_3_1'] }}</td>
                    <td>{{ $survey->step4['step4_4'] }}</td>
                    <td>{{ $survey->step4['step4_4_1'] }}</td>
                    <td>{{ $survey->step4['step4_5'] }}</td>
                    <td>{{ $survey->step4['step4_5_1'] }}</td>
                    <td>{{ $survey->step4['step4_5_2'] }}</td>
                    <td>{{ $survey->step4['step4_6'] }}</td>
                    <td>{{ $survey->step4['step4_6_1'] }}</td>
                    <td>{{ $survey->step4['step4_7'] }}</td>
                    <td>{{ $survey->step4['step4_7_1'] }}</td>
                    <td>{{ $survey->step4['step4_8'] }}</td>
                    <td>{{ $survey->step4['step4_8_1'] }}</td>
                    <td>{{ $survey->step4['step4_9'] }}</td>
                    <td>{{ $survey->step4['step4_9_1'] }}</td>
                    <td>{{ $survey->step4['step4_10'] }}</td>
                    <td>{{ $survey->step4['step4_10_1'] }}</td>
                    <td>{{ $survey->step4['step4_11'] }}</td>
                    <td>{{ $survey->step4['step4_11_1'] }}</td>
                    <td>{{ $survey->step4['step4_12'] }}</td>
                    <td>{{ $survey->step4['step4_13'] }}</td>
                    <td>{{ $survey->step4['step4_14'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
