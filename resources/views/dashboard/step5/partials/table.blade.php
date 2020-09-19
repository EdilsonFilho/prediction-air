@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">INVENTÁRIO BREVE DE SINTOMAS (BSI)</th>
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
        @for ($i = 1; $i <= 53; $i++)
            <tr>
                <td>{{ \App\Models\Question::step5($i) }}</td>
                <td>{{ $step5['step5_' . $i] }}</td>
            </tr>
        @endfor
        @if (\Auth::user()->profile != config('profile.patient'))
            <tr>
                <td><strong>Resultado</strong></td>
                <td><strong>{{ \App\Models\Result::getStep5($step5) }}</strong></td>
            </tr>
        @endif
    </tbody>
</table>
