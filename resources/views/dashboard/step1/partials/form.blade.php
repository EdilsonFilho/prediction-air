<div class="panel box box-primary">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#step1">
                        DADOS SOCIODEMOGRÁFICOS
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
            </div>
        </div>
    </div>
    <div id="step1" class="panel-collapse collapse in">
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('fill_date', 'Data de preenchimento') }}
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            {{ Form::text('fill_date', null, array('class' => 'form-control pull-right datepicker')) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-group" id="step1-group">
                <div class="panel box box-danger border-radius-zero">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="step1-group" href="#step1-group-1">
                                Informações básicas
                            </a>
                        </h4>
                    </div>
                    <div id="step1-group-1" class="panel-collapse collapse">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_1', '1. Idade') }}
                                        {{ Form::text('step1_1', null, array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_2', '2. Gênero') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_2', 'Masculino', null, ['id' => 'Masculino']) }}
                                            <label for="Masculino">Masculino</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_2', 'Femino', null, ['id' => 'Femino']) }}
                                            <label for="Femino">Femino</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_2_1', '2.1. Orientação sexual') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_2_1', 'Heterossexual', null, ['id' => 'Heterossexual']) }}
                                            <label for="Heterossexual">Heterossexual</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_2_1', 'Homossexual', null, ['id' => 'Homossexual']) }}
                                            <label for="Homossexual">Homossexual</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_2_1', 'Bissexual', null, ['id' => 'Bissexual']) }}
                                            <label for="Bissexual">Bissexual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_3', '3. Nacionalidade') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_3', 'Brasileira', null, ['id' => 'Brasileira']) }}
                                            <label for="Brasileira">Brasileira</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_3', 'Portuguesa', null, ['id' => 'Portuguesa']) }}
                                            <label for="Portuguesa">Portuguesa</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_3', 'Outra', null, ['id' => 'Outra']) }}
                                            <label for="Outra">Outra</label>
                                        </div>
                                        {{ Form::text('step1_3', null,
                                            array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Informa a nacionalidade',
                                                'style' => 'display: none',
                                                'disabled' => true
                                            ))
                                        }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_4', '4. Estado civil') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_4', 'Solteiro', null, ['id' => 'Solteiro']) }}
                                            <label for="Solteiro">Solteiro</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_4', 'Casado', null, ['id' => 'Casado']) }}
                                            <label for="Casado">Casado</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_4', 'Viúvo', null, ['id' => 'Viúvo']) }}
                                            <label for="Viúvo">Viúvo</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_4', 'Separado judicialmente', null, ['id' => 'Separado judicialmente']) }}
                                            <label for="Separado judicialmente">Separado judicialmente</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_4', 'Divorciado', null, ['id' => 'Divorciado']) }}
                                            <label for="Divorciado">Divorciado</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_5', '5. Escolaridade') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_5', '4º ano ou equivalente/ensino fundamental incompleto', null, ['id' => '4º ano ou equivalente/ensino fundamental incompleto']) }}
                                            <label for="4º ano ou equivalente/ensino fundamental incompleto">4º ano ou equivalente/ensino fundamental incompleto</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_5', '9º ano ou equivalente/ensino fundamenta', null, ['id' => '9º ano ou equivalente/ensino fundamenta']) }}
                                            <label for="9º ano ou equivalente/ensino fundamenta">9º ano ou equivalente/ensino fundamenta</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_5', '12º ano ou equivalente/ensino médio', null, ['id' => '12º ano ou equivalente/ensino médio']) }}
                                            <label for="12º ano ou equivalente/ensino médio">12º ano ou equivalente/ensino médio</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_5', 'Ensino superior', null, ['id' => 'Ensino superior']) }}
                                            <label for="Ensino superior">Ensino superior</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_5', 'Outra', null, ['id' => 'Outra_step1_5']) }}
                                            <label for="Outra_step1_5">Outra</label>
                                        </div>
                                        {{ Form::text('step1_5', null,
                                            array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Especifique o tipo de formação',
                                                'style' => 'display: none'
                                            ))
                                        }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_6', '6. Situação perante o trabalho') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_6', 'Empregado', null, ['id' => 'Empregado']) }}
                                            <label for="Empregado">Empregado</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_6', 'Desempregado', null, ['id' => 'Desempregado']) }}
                                            <label for="Desempregado">Desempregado</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_6', 'Aposentado', null, ['id' => 'Aposentado']) }}
                                            <label for="Aposentado">Aposentado</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_6', 'Outra', null, ['id' => 'Outra_step1_6']) }}
                                            <label for="Outra_step1_6">Outra</label>
                                        </div>
                                        {{ Form::text('step1_6', null,
                                            array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Especifique',
                                                'style' => 'display: none'
                                            ))
                                        }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_7', '7. Profissão') }}
                                        {{ Form::text('step1_7', null, array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-group" id="step1-group">
                <div class="panel box box-danger border-radius-zero">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="step2-group" href="#step2-group-2">
                                Informações clínicas
                            </a>
                        </h4>
                    </div>
                    <div id="step2-group-2" class="panel-collapse collapse">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_8', '8. Como adquiriu o VIH?') }}
                                        {{ Form::text('step1_8', null, array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_9', '9. Tipo de vírus (Se souber)') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_9', 'HIV-1', null, ['id' => 'HIV-1']) }}
                                            <label for="HIV-1">HIV-1</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_9', 'HIV-2', null, ['id' => 'HIV-2']) }}
                                            <label for="HIV-2">HIV-2</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_9', 'HIV-1 e HIV-2', null, ['id' => 'HIV-1 e HIV-2']) }}
                                            <label for="HIV-1 e HIV-2">HIV-1 e HIV-2</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_10', '10. Há quantos anos é portador da infecção por HIV?') }}
                                        {{ Form::text('step1_10', null, array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_11', '11. Tem conhecimento de estar infectado pelo vírus da Hepatite B?') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_11', 'Sim', null, ['id' => 'Sim_step1_11']) }}
                                            <label for="Sim_step1_11">Sim</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_11', 'Não', null, ['id' => 'Não_step1_11']) }}
                                            <label for="Não_step1_11">Não</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_11', 'Desconheço', null, ['id' => 'Desconheço_step1_11']) }}
                                            <label for="Desconheço_step1_11">Desconheço</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_12', '12. Tem conhecimento de estar infectado pelo vírus da Hepatite C?') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_12', 'Sim', null, ['id' => 'Sim_step1_12']) }}
                                            <label for="Sim_step1_12">Sim</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_12', 'Não', null, ['id' => 'Não_step1_12']) }}
                                            <label for="Não_step1_12">Não</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_12', 'Desconheço', null, ['id' => 'Desconheço_step1_12']) }}
                                            <label for="Desconheço_step1_12">Desconheço</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('step1_13', '13. É portador de outra doença?') }}
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_13', 'Não', null, ['id' => 'Não_step1_13']) }}
                                            <label for="Não_step1_13">Não</label>
                                        </div>
                                        <div class="icheck-material-green">
                                            {{ Form::radio('step1_13', 'Sim', null, ['id' => 'Sim_step1_13']) }}
                                            <label for="Sim_step1_13">Sim</label>
                                        </div>
                                        {{ Form::text('step1_13', null,
                                            array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Qual?',
                                                'style' => 'display: none'
                                            ))
                                        }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        $(function () {

            // TODO: Transformar valores em variáveis

            @if(
                old('step1_3') &&
                old('step1_3') != "Brasileira" &&
                old('step1_3') != "Portuguesa"
            )
                $('#Outra').attr('checked', true);
                $('input:text[name="step1_3"]')
                    .removeAttr('disabled')
                    .show();
            @endif

            $('input:radio[name="step1_3"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="step1_3"]')
                        .removeAttr('disabled')
                        .val('')
                        .show();
                } else {
                    $('input:text[name="step1_3"]')
                        .hide()
                        .attr('disabled', true)
                        .val('');
                }
            });

            // -------------------

            @if(
                old('step1_5') &&
                old('step1_5') != "4º ano ou equivalente/ensino fundamental incompleto" &&
                old('step1_5') != "9º ano ou equivalente/ensino fundamenta" &&
                old('step1_5') != "12º ano ou equivalente/ensino médio" &&
                old('step1_5') != "Ensino superior"
            )
                $('#Outra_step1_5').attr('checked', true);
                $('input:text[name="step1_5"]')
                    .removeAttr('disabled')
                    .show();
            @endif

            $('input:radio[name="step1_5"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="step1_5"]')
                        .removeAttr('disabled')
                        .val('')
                        .show();
                } else {
                    $('input:text[name="step1_5"]')
                        .hide()
                        .attr('disabled', true)
                        .val('');
                }
            });

            // -------------------

            @if(
                old('step1_6') &&
                old('step1_6') != "Empregado" &&
                old('step1_6') != "Desempregado" &&
                old('step1_6') != "Aposentado"
            )
                $('#Outra_step1_6').attr('checked', true);
                $('input:text[name="step1_6"]')
                    .removeAttr('disabled')
                    .show();
            @endif

            $('input:radio[name="step1_6"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="step1_6"]')
                        .removeAttr('disabled')
                        .val('')
                        .show();
                } else {
                    $('input:text[name="step1_6"]')
                        .hide()
                        .attr('disabled', true)
                        .val('');
                }
            });

            // -------------------

            @if(
                old('step1_13') &&
                old('step1_13') != "Não"
            )
                $('#Sim_step1_13').attr('checked', true);
                $('input:text[name="step1_13"]')
                    .removeAttr('disabled')
                    .show();
            @endif

            $('input:radio[name="step1_13"]').click(function () {
                if ($(this).val() == "Sim") {
                    $('input:text[name="step1_13"]')
                        .removeAttr('disabled')
                        .val('')
                        .show();
                } else {
                    $('input:text[name="step1_13"]')
                        .hide()
                        .attr('disabled', true)
                        .val('');
                }
            });

        });
    </script>
@endpush
