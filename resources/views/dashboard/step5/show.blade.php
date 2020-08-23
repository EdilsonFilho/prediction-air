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
                                @include('dashboard.survey.partials.navigation', ['patient' => $survey->patient])
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
                                                    1. Tem recebido apoio de alguém em situação concreta, facilitando a realização do seu tratamento? (Ex: tomar conta dos filhos quando tem consulta, cuidar da casa nos dias de consulta ou qualquer outra situação)
                                                </td>
                                                <td>{{ $step4->step4_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_1_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Tem recebido apoio de alguém em questões financeiras, como divisão das despesas da casa, dinheiro dado ou emprestado?
                                                </td>
                                                <td>{{ $step4->step4_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_2_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Tem recebido apoio de alguém em atividades práticas do seu dia-a-dia? (Ex: arrumação da casa, ajuda no cuidado dos filhos, preparação de refeições ou qualquer outra atividade quotidiana)
                                                </td>
                                                <td>{{ $step4->step4_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_3_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Tem recebido apoio de alguém em relação aos seus próprios cuidados de saúde? (Ex: lembrar a hora de tomar um medicamento ou o dia de fazer um exame, comprar um medicamento para si, acompanhalo numa consulta ou qualquer outra situação)
                                                </td>
                                                <td>{{ $step4->step4_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_4_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Tem recebido apoio de alguém com quem possa contar em caso de necessidade?
                                                </td>
                                                <td>{{ $step4->step4_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_5_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5.2 Com base nos tipos de apoio mencionado acima (questões 1 a 5), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio?
                                                </td>
                                                <td>{{ $step4->step4_5_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Tem recebido apoio de alguém que o/a faz você sentir valorizado(a) como pessoa?
                                                </td>
                                                <td>{{ $step4->step4_6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_6_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Tem recebido apoio de alguém com quem possa desabafar ou conversar sobre assuntos relacionados com a sua doença?
                                                </td>
                                                <td>{{ $step4->step4_7 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_7_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Tem recebido apoio de alguém que lhe oferece informações, melhorando o seu nível de conhecimento sobre o seu problema de saúde?
                                                </td>
                                                <td>{{ $step4->step4_8 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_8_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Tem recebido apoio de alguém que faz senti-lo/a integrado socialmente?
                                                </td>
                                                <td>{{ $step4->step4_9 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_9_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Tem recebido apoio de alguém que o/a ajuda a melhorar o seu humor e disposição?
                                                </td>
                                                <td>{{ $step4->step4_10 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_10_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Tem recebido apoio de alguém quando precisa de companhia para se divertir ou fazer atividades de lazer?
                                                </td>
                                                <td>{{ $step4->step4_11 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                                                </td>
                                                <td>{{ $step4->step4_11_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Com base nos tipos de apoio mencionado acima (questões 6 a 11), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio a você?
                                                </td>
                                                <td>{{ $step4->step4_12 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Tem recebido algum outro tipo de apoio?
                                                </td>
                                                <td>{{ $step4->step4_13 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Gostaria de fazer algum comentário sobre o apoio ou ajuda?
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
