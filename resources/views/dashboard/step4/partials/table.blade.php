@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">ESCALA DE SUPORTE SOCIAL</th>
            </tr>
        </thead>
    </table>
@endisset
<table class="table">
    <thead class="thead-light">
        <tr>
            <th width="40%">Perguntas</th>
            <th width="60%">Respostas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ \App\Models\Question::step4('1') }}
            </td>
            <td>{{ $step4->step4_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('1_1') }}
            </td>
            <td>{{ $step4->step4_1_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('2') }}
            </td>
            <td>{{ $step4->step4_2 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('2_1') }}
            </td>
            <td>{{ $step4->step4_2_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('3') }}
            </td>
            <td>{{ $step4->step4_3 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('3_1') }}
            </td>
            <td>{{ $step4->step4_3_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('4') }}
            </td>
            <td>{{ $step4->step4_4 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('4_1') }}
            </td>
            <td>{{ $step4->step4_4_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('5') }}
            </td>
            <td>{{ $step4->step4_5 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('5_1') }}
            </td>
            <td>{{ $step4->step4_5_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('5_2') }}
            </td>
            <td>{{ $step4->step4_5_2 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('6') }}
            </td>
            <td>{{ $step4->step4_6 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('6_1') }}
            </td>
            <td>{{ $step4->step4_6_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('7') }}
            </td>
            <td>{{ $step4->step4_7 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('7_1') }}
            </td>
            <td>{{ $step4->step4_7_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('8') }}
            </td>
            <td>{{ $step4->step4_8 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('8_1') }}
            </td>
            <td>{{ $step4->step4_8_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('9') }}
            </td>
            <td>{{ $step4->step4_9 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('9_1') }}
            </td>
            <td>{{ $step4->step4_9_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('10') }}
            </td>
            <td>{{ $step4->step4_10 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('10_1') }}
            </td>
            <td>{{ $step4->step4_10_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('11') }}
            </td>
            <td>{{ $step4->step4_11 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('11_1') }}
            </td>
            <td>{{ $step4->step4_11_1 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('12') }}
            </td>
            <td>{{ $step4->step4_12 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('13') }}
            </td>
            <td>{{ $step4->step4_13 }}</td>
        </tr>
        <tr>
            <td>
                {{ \App\Models\Question::step4('14') }}
            </td>
            <td>{{ $step4->step4_14 }}</td>
        </tr>
        @if (\Auth::user()->profile != config('profile.patient'))
            <tr>
                <td><strong>Resultado</strong></td>
                <td><strong>{{ \App\Models\Result::getStep4($step4) }}</strong></td>
            </tr>
        @endif
    </tbody>
</table>
