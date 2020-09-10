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
                <th>{{ \App\Models\Question::step1('1') }}</th>
                <th>{{ \App\Models\Question::step1('2') }}</th>
                <th>{{ \App\Models\Question::step1('2_1') }}</th>
                <th>{{ \App\Models\Question::step1('3') }}</th>
                <th>{{ \App\Models\Question::step1('4') }}</th>
                <th>{{ \App\Models\Question::step1('5') }}</th>
                <th>{{ \App\Models\Question::step1('6') }}</th>
                <th>{{ \App\Models\Question::step1('7') }}</th>
                <th>{{ \App\Models\Question::step1('8') }}</th>
                <th>{{ \App\Models\Question::step1('9') }}</th>
                <th>{{ \App\Models\Question::step1('10') }}</th>
                <th>{{ \App\Models\Question::step1('11') }}</th>
                <th>{{ \App\Models\Question::step1('12') }}</th>
                <th>{{ \App\Models\Question::step1('13') }}</th>

                {{-- Step2 --}}
                @for ($i = 1; $i <= 6; $i++)
                    <th>{{ \App\Models\Question::step2($i) }}</th>
                @endfor

                {{-- Step3 --}}
                @for ($i = 1; $i <= 3; $i++)
                    <th>{{ \App\Models\Question::step3($i) }}</th>
                @endfor

                {{-- Step4 --}}
                <th>{{ \App\Models\Question::step4('1') }}</th>
                <th>{{ \App\Models\Question::step4('1_1') }}</th>
                <th>{{ \App\Models\Question::step4('2') }}</th>
                <th>{{ \App\Models\Question::step4('2_1') }}</th>
                <th>{{ \App\Models\Question::step4('3') }}</th>
                <th>{{ \App\Models\Question::step4('3_1') }}</th>
                <th>{{ \App\Models\Question::step4('4') }}</th>
                <th>{{ \App\Models\Question::step4('4_1') }}</th>
                <th>{{ \App\Models\Question::step4('5') }}</th>
                <th>{{ \App\Models\Question::step4('5_1') }}</th>
                <th>{{ \App\Models\Question::step4('5_2') }}</th>
                <th>{{ \App\Models\Question::step4('6') }}</th>
                <th>{{ \App\Models\Question::step4('6_1') }}</th>
                <th>{{ \App\Models\Question::step4('7') }}</th>
                <th>{{ \App\Models\Question::step4('7_1') }}</th>
                <th>{{ \App\Models\Question::step4('8') }}</th>
                <th>{{ \App\Models\Question::step4('8_1') }}</th>
                <th>{{ \App\Models\Question::step4('9') }}</th>
                <th>{{ \App\Models\Question::step4('9_1') }}</th>
                <th>{{ \App\Models\Question::step4('10') }}</th>
                <th>{{ \App\Models\Question::step4('10_1') }}</th>
                <th>{{ \App\Models\Question::step4('11') }}</th>
                <th>{{ \App\Models\Question::step4('11_1') }}</th>
                <th>{{ \App\Models\Question::step4('12') }}</th>
                <th>{{ \App\Models\Question::step4('13') }}</th>
                <th>{{ \App\Models\Question::step4('14') }}</th>

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
