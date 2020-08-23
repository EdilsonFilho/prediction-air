<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>
                    {{ $title }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Marido, esposa(a), companheiro(a) ou namorado(a)", false, ['id' => 'a_step4_' . $number]) }}
                        <label for="a_step4_{{ $number }}">
                            Marido, esposa(a), companheiro(a) ou namorado(a)
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Pessoa(s) da família que mora(m) comigo", false, ['id' => 'b_step4_' . $number]) }}
                        <label for="b_step4_{{ $number }}">
                            Pessoa(s) da família que mora(m) comigo
                        </label>
                    </div>
                    {{ Form::text('step4_' . $number . '[]', null,
                        array(
                            'id' => 'b_step4_' . $number . '_input',
                            'class' => 'form-control',
                            'placeholder' => 'Quem?',
                            'style' => 'display: none'
                        ))
                    }}
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Pessoa(s) da família que não mora(m) comigo", false, ['id' => 'c_step4_' . $number]) }}
                        <label for="c_step4_{{ $number }}">
                            Pessoa(s) da família que não mora(m) comigo
                        </label>
                    </div>
                    {{ Form::text('step4_' . $number . '[]', null,
                        array(
                            'id' => 'c_step4_' . $number . '_input',
                            'class' => 'form-control',
                            'placeholder' => 'Quem?',
                            'style' => 'display: none'
                        ))
                    }}
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Amigo(s)", false, ['id' => 'd_step4_' . $number]) }}
                        <label for="d_step4_{{ $number }}">
                            Amigo(s)
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Chefe ou colega(s) de trabalho", false, ['id' => 'e_step4_' . $number]) }}
                        <label for="e_step4_{{ $number }}">
                            Chefe ou colega(s) de trabalho
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Vizinho(s)", false, ['id' => 'f_step4_' . $number]) }}
                        <label for="f_step4_{{ $number }}">
                            Vizinho(s)
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Profissionais de saúde", false, ['id' => 'g_step4_' . $number]) }}
                        <label for="g_step4_{{ $number }}">
                            Profissionais de saúde
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="icheck-material-green">
                        {{ Form::checkbox('step4_' . $number . '[]', "Outra(s) pessoa(s)", false, ['id' => 'h_step4_' . $number]) }}
                        <label for="h_step4_{{ $number }}">
                            Outra(s) pessoa(s)
                        </label>
                    </div>
                    {{ Form::text('step4_' . $number . '[]', null,
                        array(
                            'id' => 'h_step4_' . $number . '_input',
                            'class' => 'form-control',
                            'placeholder' => 'Quem?',
                            'style' => 'display: none'
                        ))
                    }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
@push('js')
<script>
    $(function () {

        $('#b_step4_{{ $number }}').click(function () {
            if ($(this).is(':checked')) {
                $('#b_step4_{{ $number }}_input')
                    .removeAttr('disabled')
                    .val('')
                    .show();
            } else {
                $('#b_step4_{{ $number }}_input')
                    .hide()
                    .attr('disabled', true)
                    .val('');
            }
        });

        $('#c_step4_{{ $number }}').click(function () {
            if ($(this).is(':checked')) {
                $('#c_step4_{{ $number }}_input')
                    .removeAttr('disabled')
                    .val('')
                    .show();
            } else {
                $('#c_step4_{{ $number }}_input')
                    .hide()
                    .attr('disabled', true)
                    .val('');
            }
        });

        $('#h_step4_{{ $number }}').click(function () {
            if ($(this).is(':checked')) {
                $('#h_step4_{{ $number }}_input')
                    .removeAttr('disabled')
                    .val('')
                    .show();
            } else {
                $('#h_step4_{{ $number }}_input')
                    .hide()
                    .attr('disabled', true)
                    .val('');
            }
        });

    });
</script>
@endpush
