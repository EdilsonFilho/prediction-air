@isset($showHeader)
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th width="100%">ESCALA DE DEMÊNCIA</th>
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
        @for ($i = 1; $i <= 4; $i++)
            <tr>
                <td>{{ \App\Models\Question::step3($i) }}</td>
                <td>{{ $step3['step3_' . $i] }}</td>
            </tr>
        @endfor
        {{-- <tr>
            <td style="background: #f6f9fc;"></td>
            <td style="background: #f6f9fc;"></td>
        </tr> --}}
        <tr>
            <td><strong>Total</strong></td>
            <td>{{ $step3->getTotal() }}</td>
        </tr>
        @if (\Auth::user()->profile != config('profile.patient'))
            <tr>
                <td><strong>Resultado</strong></td>
                <td><strong>{{ \App\Models\Result::getStep3($step3) }}</strong></td>
            </tr>
        @endif
    </tbody>
</table>
