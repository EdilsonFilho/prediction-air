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
                                                <td>1. Alguma vez se esqueceu de tomar os seus medicamentos?</td>
                                                <td>{{ $step2->step2_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>2. Por vezes descuida-se na tomada dos seus medicamentos?</td>
                                                <td>{{ $step2->step2_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>3. Alguma vez interrompeu a toma dos medicamentos por se sentir mal?</td>
                                                <td>{{ $step2->step2_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>4. Pense na semana passada. Quantas vezes não tomou os medicamentos?</td>
                                                <td>{{ $step2->step2_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>5. Não tomou algum dos seus medicamentos durante o fim de semana passado?</td>
                                                <td>{{ $step2->step2_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>6. Nos últimos três meses, quantos dias deixou de tomar todos os medicamentos?</td>
                                                <td>{{ $step2->step2_6 }}</td>
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
