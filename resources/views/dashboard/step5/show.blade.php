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

                    @if (\Auth::user()->profile != config('profile.patient'))
                        @include('dashboard.intervention.index', [
                            'type' => 'STEP_5',
                            'survey' => $survey,
                            'stepId' => $step5->id,
                            'text' => $survey->intervention5()->first() ?
                                        $survey->intervention5()->first()->text :
                                        null
                        ])
                    @endif

                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#step5">
                                        ESCALA DE SUPORTE SOCIAL
                                    </a>
                                </h4>
                            </div>
                            <div class="col-md-4 text-right">
                                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
                            </div>
                        </div>
                    </div>
                    <div id="step5" class="panel-collapse collapse in">
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
                                            @for ($i = 1; $i <= 53; $i++)
                                                <tr>
                                                    <td>{{ \App\Models\Question::step5($i) }}</td>
                                                    <td>{{ $step5['step5_' . $i] }}</td>
                                                </tr>
                                            @endfor
                                            @if (\Auth::user()->profile != config('profile.patient'))
                                                <tr>
                                                    <td><strong>Resultado</strong></td>
                                                    <td><strong>{{ \App\Models\Result::getStep5($step5) }}</strong></td>
                                                </tr>
                                            @endif
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
