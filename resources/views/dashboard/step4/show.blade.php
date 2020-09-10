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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#step4">
                                        ESCALA DE SUPORTE SOCIAL
                                    </a>
                                </h4>
                            </div>
                            <div class="col-md-4 text-right">
                                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
                            </div>
                        </div>
                    </div>
                    <div id="step4" class="panel-collapse collapse in">
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
                                                <td>
                                                    {{ \App\Models\Question::step4('1') }}
                                                </td>
                                                <td>{{ $step4->step4_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('1_1') }}
                                                </td>
                                                <td>{{ $step4->step4_1_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('2') }}
                                                </td>
                                                <td>{{ $step4->step4_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('2_1') }}
                                                </td>
                                                <td>{{ $step4->step4_2_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('3') }}
                                                </td>
                                                <td>{{ $step4->step4_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('3_1') }}
                                                </td>
                                                <td>{{ $step4->step4_3_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('4') }}
                                                </td>
                                                <td>{{ $step4->step4_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('4_1') }}
                                                </td>
                                                <td>{{ $step4->step4_4_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('5') }}
                                                </td>
                                                <td>{{ $step4->step4_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('5_1') }}
                                                </td>
                                                <td>{{ $step4->step4_5_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('5_2') }}
                                                </td>
                                                <td>{{ $step4->step4_5_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('6') }}
                                                </td>
                                                <td>{{ $step4->step4_6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('6_1') }}
                                                </td>
                                                <td>{{ $step4->step4_6_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('7') }}
                                                </td>
                                                <td>{{ $step4->step4_7 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('7_1') }}
                                                </td>
                                                <td>{{ $step4->step4_7_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('8') }}
                                                </td>
                                                <td>{{ $step4->step4_8 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('8_1') }}
                                                </td>
                                                <td>{{ $step4->step4_8_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('9') }}
                                                </td>
                                                <td>{{ $step4->step4_9 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('9_1') }}
                                                </td>
                                                <td>{{ $step4->step4_9_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('10') }}
                                                </td>
                                                <td>{{ $step4->step4_10 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('10_1') }}
                                                </td>
                                                <td>{{ $step4->step4_10_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('11') }}
                                                </td>
                                                <td>{{ $step4->step4_11 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('11_1') }}
                                                </td>
                                                <td>{{ $step4->step4_11_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('12') }}
                                                </td>
                                                <td>{{ $step4->step4_12 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('13') }}
                                                </td>
                                                <td>{{ $step4->step4_13 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ \App\Models\Question::step4('14') }}
                                                </td>
                                                <td>{{ $step4->step4_14 }}</td>
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
