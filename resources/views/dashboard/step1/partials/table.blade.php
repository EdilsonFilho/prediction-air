@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">DADOS SOCIODEMOGRÁFICOS</th>
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
            <td>Data de preenchimento</td>
            <td>{{ $step1->fill_date }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('1') }}</td>
            <td>{{ $step1->step1_1 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('2') }}</td>
            <td>{{ $step1->step1_2 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('2_1') }}</td>
            <td>{{ $step1->step1_2_1 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('3') }}</td>
            <td>{{ $step1->step1_3 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('4') }}</td>
            <td>{{ $step1->step1_4 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('5') }}</td>
            <td>{{ $step1->step1_5 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('6') }}</td>
            <td>{{ $step1->step1_6 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('7') }}</td>
            <td>{{ $step1->step1_7 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('8') }}</td>
            <td>{{ $step1->step1_8 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('9') }}</td>
            <td>{{ $step1->step1_9 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('10') }}</td>
            <td>{{ $step1->step1_10 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('11') }}</td>
            <td>{{ $step1->step1_11 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('12') }}</td>
            <td>{{ $step1->step1_12 }}</td>
        </tr>
        <tr>
            <td>{{ \App\Models\Question::step1('13') }}</td>
            <td>{{ $step1->step1_13 }}</td>
        </tr>
    </tbody>
</table>
