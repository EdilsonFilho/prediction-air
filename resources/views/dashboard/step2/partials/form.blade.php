<div class="panel box box-primary">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#step2">
                        ADESÃO À MEDICAÇÃO
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
            </div>
        </div>
    </div>
    <div id="step2" class="panel-collapse collapse in">
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_1', '1. Alguma vez se esqueceu de tomar os seus medicamentos?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_1', 'Sim', null, ['id' => 'Sim_step2_1']) }}
                            <label for="Sim_step2_1">Sim</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_1', 'Não', null, ['id' => 'Não_step2_1']) }}
                            <label for="Não_step2_1">Não</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_2', '2. Por vezes descuida-se na tomada dos seus medicamentos?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_2', 'Sim', null, ['id' => 'Sim_step2_2']) }}
                            <label for="Sim_step2_2">Sim</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_2', 'Não', null, ['id' => 'Não_step2_2']) }}
                            <label for="Não_step2_2">Não</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_3', '3. Alguma vez interrompeu a toma dos medicamentos por se sentir mal?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_3', 'Sim', null, ['id' => 'Sim_step2_3']) }}
                            <label for="Sim_step2_3">Sim</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_3', 'Não', null, ['id' => 'Não_step2_3']) }}
                            <label for="Não_step2_3">Não</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_4', '4. Pense na semana passada. Quantas vezes não tomou os medicamentos?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_4', 'Nunca', null, ['id' => 'Nunca_step2_4']) }}
                            <label for="Nunca_step2_4">Nunca</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_4', '1-2 vezes', null, ['id' => '1-2_vezes_step2_4']) }}
                            <label for="1-2_vezes_step2_4">1-2 vezes</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_4', '3-5 vezes', null, ['id' => '3-5_vezes_step2_4']) }}
                            <label for="3-5_vezes_step2_4">3-5 vezes</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_4', '6-10 vezes', null, ['id' => '6-10_vezes_step2_4']) }}
                            <label for="6-10_vezes_step2_4">6-10 vezes</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_4', '> 10 vezes (mais de 10 vezes)', null, ['id' => '>10_vezes_step2_4']) }}
                            <label for=">10_vezes_step2_4">> 10 vezes (mais de 10 vezes)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_5', '5. Não tomou algum dos seus medicamentos durante o fim de semana passado?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_5', 'Sim', null, ['id' => 'Sim_step2_5']) }}
                            <label for="Sim_step2_5">Sim</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_5', 'Não', null, ['id' => 'Não_step2_5']) }}
                            <label for="Não_step2_5">Não</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('step2_6', '6. Nos últimos três meses, quantos dias deixou de tomar todos os medicamentos?') }}
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_6', '0-2 vezes', null, ['id' => '0-2_vezes_step2_6']) }}
                            <label for="0-2_vezes_step2_6">0-2 vezes</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step2_6', '3 dias ou mais', null, ['id' => '3_dias_step2_6']) }}
                            <label for="3_dias_step2_6">3 dias ou mais</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
