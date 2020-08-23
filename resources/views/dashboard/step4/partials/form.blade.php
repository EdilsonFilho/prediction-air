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
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <h4>Informações</h4>
                        <p>
                            Esta escala é sobre o apoio ou ajuda que tem recebido de diferentes pessoas com quem se relaciona.
                            Por favor, informe a frenquência dos diferentes tipos de apoio que tem recebido em relação à
                            soropositividade e a satisfação quanto a cada um deles. Pedimos que não deixe nenhuma questão em branco.
                        </p>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="5">
                                1. Tem recebido apoio de alguém em situação concreta, facilitando a realização do seu tratamento?
                                (Ex: tomar conta dos filhos quando tem consulta, cuidar da casa nos dias de consulta ou qualquer outra situação)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nunca</td>
                            <td>Raramente</td>
                            <td>Às vezes</td>
                            <td>Frequentemente</td>
                            <td>Sempre</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1', 'Nunca', null, ['id' => 'Nunca_step4_1']) }}
                                    <label for="Nunca_step4_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1', 'Raramente', null, ['id' => 'Raramente_step4_1']) }}
                                    <label for="Raramente_step4_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1', 'Às vezes', null, ['id' => 'As_Vezes_step4_1']) }}
                                    <label for="As_Vezes_step4_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1', 'Frequentemente', null, ['id' => 'Frequentemente_step4_1']) }}
                                    <label for="Frequentemente_step4_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1', 'Sempre', null, ['id' => 'Sempre_step4_1']) }}
                                    <label for="Sempre_step4_1"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="5">
                                1.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Muito <br> insatisfeito</td>
                            <td>Insatisfeito</td>
                            <td>Nem satisfeito <br> nem insatisfeito</td>
                            <td>Satisfeito</td>
                            <td>Muito <br> Satisfeito</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1_1', 'Muito insatisfeito', null, ['id' => 'Muito_insatisfeito_step4_1_1']) }}
                                    <label for="Muito_insatisfeito_step4_1_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1_1', 'Insatisfeito', null, ['id' => 'Insatisfeito_step4_1_1']) }}
                                    <label for="Insatisfeito_step4_1_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1_1', 'Nem satisfeito nem insatisfeito', null, ['id' => 'Nem_satisfeito_nem_insatisfeito_step4_1_1']) }}
                                    <label for="Nem_satisfeito_nem_insatisfeito_step4_1_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1_1', 'Satisfeito', null, ['id' => 'Satisfeito_step4_1_1']) }}
                                    <label for="Satisfeito_step4_1_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-material-green">
                                    {{ Form::radio('step4_1_1', 'Muito Satisfeito', null, ['id' => 'Muito_Satisfeito_step4_1_1']) }}
                                    <label for="Muito_Satisfeito_step4_1_1"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('css')
    <style>
        .table {
            border: 1px solid #333;
        }

        .table>thead>tr>th {
            color: #333;
            border-color: #333;
        }

        .table>tbody>tr>td {
            border-color: #333;
        }
    </style>
@endpush
