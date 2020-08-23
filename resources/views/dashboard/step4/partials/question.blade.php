<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="5">
                    {{ $title_1 }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nunca</td>
                <td>Raramente</td>
                <td>Às vezes</td>
                <td>Frequentemente</td>
                <td>Sempre</td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number, 'Nunca', null, ['id' => 'Nunca_step4_' . $number]) }}
                        <label for="Nunca_step4_{{ $number }}"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number, 'Raramente', null, ['id' => 'Raramente_step4_' . $number]) }}
                        <label for="Raramente_step4_{{ $number }}"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number, 'Às vezes', null, ['id' => 'As_Vezes_step4_' . $number]) }}
                        <label for="As_Vezes_step4_{{ $number }}"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number, 'Frequentemente', null, ['id' => 'Frequentemente_step4_' . $number]) }}
                        <label for="Frequentemente_step4_{{ $number }}"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number, 'Sempre', null, ['id' => 'Sempre_step4_' . $number]) }}
                        <label for="Sempre_step4_{{ $number }}"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="5">
                    {{ $title_2 }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Muito <br> insatisfeito</td>
                <td>Insatisfeito</td>
                <td>Nem satisfeito <br> nem insatisfeito</td>
                <td>Satisfeito</td>
                <td>Muito <br> Satisfeito</td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number . '_1', 'Muito insatisfeito', null, ['id' => 'Muito_insatisfeito_step4_' . $number . '_1']) }}
                        <label for="Muito_insatisfeito_step4_{{ $number }}_1"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number . '_1', 'Insatisfeito', null, ['id' => 'Insatisfeito_step4_' . $number . '_1']) }}
                        <label for="Insatisfeito_step4_{{ $number }}_1"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number . '_1', 'Nem satisfeito nem insatisfeito', null, ['id' => 'Nem_satisfeito_nem_insatisfeito_step4_' . $number . '_1']) }}
                        <label for="Nem_satisfeito_nem_insatisfeito_step4_{{ $number }}_1"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number . '_1', 'Satisfeito', null, ['id' => 'Satisfeito_step4_' . $number . '_1']) }}
                        <label for="Satisfeito_step4_{{ $number }}_1"></label>
                    </div>
                </td>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::radio('step4_' . $number . '_1', 'Muito Satisfeito', null, ['id' => 'Muito_Satisfeito_step4_' . $number . '_1']) }}
                        <label for="Muito_Satisfeito_step4_{{ $number }}_1"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
@push('css')
<style>
    .table {
        border: 1px solid #333;
    }

    .table>thead>tr>th {
        color: #333;
        border-color: #333;
    }

    .table>tbody>tr>td {
        border-color: #333;
    }

</style>
@endpush
