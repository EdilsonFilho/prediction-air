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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#step3">
                                        ESCALA DE DEMÊNCIA
                                    </a>
                                </h4>
                            </div>
                            <div class="col-md-4 text-right">
                                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
                            </div>
                        </div>
                    </div>
                    <div id="step3" class="panel-collapse collapse in">
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
                                                <td>1. ATENÇÃO</td>
                                                <td>{{ $step3->step3_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>2. VELOCIDADE PSICOMOTORA</td>
                                                <td>{{ $step3->step3_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>3. RECUPERAÇÃO DA MEMÓRIA</td>
                                                <td>{{ $step3->step3_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>4. CONSTRUÇÃO</td>
                                                <td>{{ $step3->step3_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td style="background: #f6f9fc;"></td>
                                                <td style="background: #f6f9fc;"></td>
                                            </tr>
                                            <tr>
                                                <td><strong>TOTAL</strong></td>
                                                <td>{{ $step3->getTotal() }}</td>
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
