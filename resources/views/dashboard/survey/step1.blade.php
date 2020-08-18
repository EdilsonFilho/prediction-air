@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if (session('message'))
                <div class="alert alert-{{ session('code') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Atenção!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(['route' => ['surveys.store_step1', 'user' => $user->id], 'role' => 'form', 'class' => 'areyousure']) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="box-title">Paciente: {{ $user->name }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-group" id="accordion">
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
                                        @include('dashboard.survey.partials.navigation', ['user' => $user])
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
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('age', '1. Idade') }}
                                                {{ Form::text('age', null, array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('gender', '2. Gênero') }}
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('gender', 'Masculino', null, ['id' => 'Masculino']) }}
                                                    <label for="Masculino">Masculino</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('gender', 'Femino', null, ['id' => 'Femino']) }}
                                                    <label for="Femino">Femino</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('nationality', '3. Nacionalidade') }}
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('nationality', 'Brasileira', null, ['id' => 'Brasileira']) }}
                                                    <label for="Brasileira">Brasileira</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('nationality', 'Portuguesa', null, ['id' => 'Portuguesa']) }}
                                                    <label for="Portuguesa">Portuguesa</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('nationality', 'Outra', null, ['id' => 'Outra']) }}
                                                    <label for="Outra">Outra</label>
                                                </div>
                                                {{ Form::text('nationality', null,
                                                    array(
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Informa a nacionalidade',
                                                        'style' => 'display: none'
                                                    ))
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('marital_status', '4. Estado civil') }}
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('marital_status', 'Solteiro', null, ['id' => 'Solteiro']) }}
                                                    <label for="Solteiro">Solteiro</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('marital_status', 'Casado', null, ['id' => 'Casado']) }}
                                                    <label for="Casado">Casado</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('marital_status', 'Viúvo', null, ['id' => 'Viúvo']) }}
                                                    <label for="Viúvo">Viúvo</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('marital_status', 'Separado judicialmente', null, ['id' => 'Separado judicialmente']) }}
                                                    <label for="Separado judicialmente">Separado judicialmente</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('marital_status', 'Divorciado', null, ['id' => 'Divorciado']) }}
                                                    <label for="Divorciado">Divorciado</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{ Form::label('education', '5. Escolaridade') }}
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('education', '4º ano ou equivalente/ensino fundamental incompleto', null, ['id' => '4º ano ou equivalente/ensino fundamental incompleto']) }}
                                                    <label for="4º ano ou equivalente/ensino fundamental incompleto">4º ano ou equivalente/ensino fundamental incompleto</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('education', '9º ano ou equivalente/ensino fundamenta', null, ['id' => '9º ano ou equivalente/ensino fundamenta']) }}
                                                    <label for="9º ano ou equivalente/ensino fundamenta">9º ano ou equivalente/ensino fundamenta</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('education', '12º ano ou equivalente/ensino médio', null, ['id' => '12º ano ou equivalente/ensino médio']) }}
                                                    <label for="12º ano ou equivalente/ensino médio">12º ano ou equivalente/ensino médio</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('education', 'Ensino superior', null, ['id' => 'Ensino superior']) }}
                                                    <label for="Ensino superior">Ensino superior</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('education', 'Outra', null, ['id' => 'Outra_education']) }}
                                                    <label for="Outra_education">Outra</label>
                                                </div>
                                                {{ Form::text('education', null,
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
                                                {{ Form::label('work_situation', '6. Situação perante o trabalho') }}
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('work_situation', 'Empregado', null, ['id' => 'Empregado']) }}
                                                    <label for="Empregado">Empregado</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('work_situation', 'Desempregado', null, ['id' => 'Desempregado']) }}
                                                    <label for="Desempregado">Desempregado</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('work_situation', 'Reformado', null, ['id' => 'Reformado']) }}
                                                    <label for="Reformado">Reformado</label>
                                                </div>
                                                <div class="icheck-material-green">
                                                    {{ Form::radio('work_situation', 'Outra', null, ['id' => 'Outra_work_situation']) }}
                                                    <label for="Outra_work_situation">Outra</label>
                                                </div>
                                                {{ Form::text('work_situation', null,
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
                                                {{ Form::label('work_situation', '7. Profissão') }}
                                                {{ Form::text('work_situation', null, array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            {{ Form::close() }}
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
@stop
@push('js')
    <script>
        $(function () {

            $('input:radio[name="nationality"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="nationality"]').show();
                } else {
                    $('input:text[name="nationality"]').hide()
                }
            });

            $('input:radio[name="education"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="education"]').show();
                } else {
                    $('input:text[name="education"]').hide()
                }
            });

            $('input:radio[name="work_situation"]').click(function () {
                if ($(this).val() == "Outra") {
                    $('input:text[name="work_situation"]').show();
                } else {
                    $('input:text[name="work_situation"]').hide()
                }
            });

        });
    </script>
@endpush
