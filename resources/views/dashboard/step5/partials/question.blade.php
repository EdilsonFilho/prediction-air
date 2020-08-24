<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <td width="2%">{{ $number }}</td>
                <td width="38%">{{ $title }}</td>
                <td width="12%">
                    <div class="icheck-material-green">
                        {{ Form::radio('step5_' . $number, 'Nunca', null, ['id' => 'Nunca_step5_' . $number]) }}
                        <label for="Nunca_step5_{{ $number }}"></label>
                    </div>
                </td>
                <td width="12%">
                    <div class="icheck-material-green">
                        {{ Form::radio('step5_' . $number, 'Poucas Vezes', null, ['id' => 'Poucas_Vezes_step5_' . $number]) }}
                        <label for="Poucas_Vezes_step5_{{ $number }}"></label>
                    </div>
                </td>
                <td width="12%">
                    <div class="icheck-material-green">
                        {{ Form::radio('step5_' . $number, 'Algumas vezes', null, ['id' => 'Algumas_Vezes_step5_' . $number]) }}
                        <label for="Algumas_Vezes_step5_{{ $number }}"></label>
                    </div>
                </td>
                <td width="12%">
                    <div class="icheck-material-green">
                        {{ Form::radio('step5_' . $number, 'Muitas Vezes', null, ['id' => 'Muitas_Vezes_step5_' . $number]) }}
                        <label for="Muitas_Vezes_step5_{{ $number }}"></label>
                    </div>
                </td>
                <td width="12%">
                    <div class="icheck-material-green">
                        {{ Form::radio('step5_' . $number, 'Multíssimas Vezes', null, ['id' => 'Multissimas_Vezes_step5_' . $number]) }}
                        <label for="Multissimas_Vezes_step5_{{ $number }}"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
