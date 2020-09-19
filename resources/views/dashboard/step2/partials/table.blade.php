@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">ADESÃO À MEDICAÇÃO</th>
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
        @for ($i = 1; $i <= 6; $i++)
            <tr>
                <td>{{ \App\Models\Question::step2($i) }}</td>
                <td>{{ $step2['step2_' . $i] }}</td>
            </tr>
        @endfor
        @if (\Auth::user()->profile != config('profile.patient'))
            <tr>
                <td><strong>Resultado</strong></td>
                <td><strong>{{ \App\Models\Result::getStep2($step2) }}</strong></td>
            </tr>
        @endif
    </tbody>
</table>
