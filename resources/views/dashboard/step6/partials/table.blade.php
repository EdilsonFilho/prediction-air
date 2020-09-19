@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">ATIVIDADES DIÁRIAS</th>
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
        @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>{{ key(\App\Models\Question::step6($i)) }}</td>
                <td>{{ $step6['step6_' . $i] }}</td>
            </tr>
        @endfor
        @if (\Auth::user()->profile != config('profile.patient'))
            <tr>
                <td><strong>Resultado</strong></td>
                <td><strong>{{ \App\Models\Result::getStep6($step6) }}</strong></td>
            </tr>
        @endif
    </tbody>
</table>
