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
                            'survey' => $survey,
                            'stepId' => $survey->step1->id,
                            'text' => $survey->intervention($survey->step1->id)->first() ?
                                        $survey->intervention($survey->step1->id)->first()->text :
                                        null
                        ])
                    @endif

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
                                                <td>{{ \App\Models\Question::step1('1') }}</td>
                                                <td>{{ $step1->step1_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('2') }}</td>
                                                <td>{{ $step1->step1_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('2_1') }}</td>
                                                <td>{{ $step1->step1_2_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('3') }}</td>
                                                <td>{{ $step1->step1_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('4') }}</td>
                                                <td>{{ $step1->step1_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('5') }}</td>
                                                <td>{{ $step1->step1_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('6') }}</td>
                                                <td>{{ $step1->step1_6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('7') }}</td>
                                                <td>{{ $step1->step1_7 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('8') }}</td>
                                                <td>{{ $step1->step1_8 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('9') }}</td>
                                                <td>{{ $step1->step1_9 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('10') }}</td>
                                                <td>{{ $step1->step1_10 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('11') }}</td>
                                                <td>{{ $step1->step1_11 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('12') }}</td>
                                                <td>{{ $step1->step1_12 }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ \App\Models\Question::step1('13') }}</td>
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
