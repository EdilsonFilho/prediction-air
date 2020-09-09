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
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="box-title">Paciente: {{ $survey->patient->name }}</h3>
                        </div>
                    </div>
                </div>
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
                        <div class="box-body no-padding">
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th width="40%">Perguntas</th>
                                                <th width="60%">Respostas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Data de preenchimento</td>
                                                <td>{{ $step1->fill_date }}</td>
                                            </tr>
                                            <tr>
                                                <td>1. Idade</td>
                                                <td>{{ $step1->step1_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>2. Gênero</td>
                                                <td>{{ $step1->step1_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>2.1. Orientação sexual</td>
                                                <td>{{ $step1->step1_2_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>3. Nacionalidade</td>
                                                <td>{{ $step1->step1_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>4. Estado civil</td>
                                                <td>{{ $step1->step1_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>5. Escolaridade</td>
                                                <td>{{ $step1->step1_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>6. Situação perante o trabalho</td>
                                                <td>{{ $step1->step1_6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>7. Profissão</td>
                                                <td>{{ $step1->step1_7 }}</td>
                                            </tr>
                                            <tr>
                                                <td>8. Como adquiriu o VIH?</td>
                                                <td>{{ $step1->step1_8 }}</td>
                                            </tr>
                                            <tr>
                                                <td>9. Tipo de vírus (Se souber)</td>
                                                <td>{{ $step1->step1_9 }}</td>
                                            </tr>
                                            <tr>
                                                <td>10. Há quantos anos é portador da infecção por HIV?</td>
                                                <td>{{ $step1->step1_10 }}</td>
                                            </tr>
                                            <tr>
                                                <td>11. Tem conhecimento de estar infectado pelo vírus da Hepatite B?</td>
                                                <td>{{ $step1->step1_11 }}</td>
                                            </tr>
                                            <tr>
                                                <td>12. Tem conhecimento de estar infectado pelo vírus da Hepatite C?</td>
                                                <td>{{ $step1->step1_12 }}</td>
                                            </tr>
                                            <tr>
                                                <td>13. É portador de outra doença?</td>
                                                <td>{{ $step1->step1_13 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
@stop
