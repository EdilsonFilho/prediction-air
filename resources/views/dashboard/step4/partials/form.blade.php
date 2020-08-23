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
            @include('dashboard.step4.partials.question', [
                'title_1' => '1. Tem recebido apoio de alguém em situação concreta, facilitando a realização do seu tratamento?
                    (Ex: tomar conta dos filhos quando tem consulta, cuidar da casa nos dias de consulta ou qualquer
                    outra situação)' ,
                'title_2' => '1.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '1'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '2. Tem recebido apoio de alguém em questões financeiras, como divisão das despesas da casa, dinheiro dado ou emprestado?' ,
                'title_2' => '2.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '2'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '3. Tem recebido apoio de alguém em atividades práticas do seu dia-a-dia? (Ex: arrumação da casa, ajuda no cuidado dos filhos, preparação de refeições ou qualquer outra atividade quotidiana)' ,
                'title_2' => '3.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '3'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '4. Tem recebido apoio de alguém em relação aos seus próprios cuidados de saúde? (Ex: lembrar a hora de tomar um medicamento ou o dia de fazer um exame, comprar um medicamento para si, acompanhalo numa consulta ou qualquer outra situação)',
                'title_2' => '4.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '4'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '5. Tem recebido apoio de alguém com quem possa contar em caso de necessidade?',
                'title_2' => '5.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '5'
            ])
            @include('dashboard.step4.partials.question_2', [
                'title' => '5.2 Com base nos tipos de apoio mencionado acima (questões 1 a 5), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio?',
                'number' => '5_2'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '6. Tem recebido apoio de alguém que o/a faz você sentir valorizado(a) como pessoa?',
                'title_2' => '6.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '6'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '7. Tem recebido apoio de alguém com quem possa desabafar ou conversar sobre assuntos relacionados com a sua doença?',
                'title_2' => '7.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '7'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '8. Tem recebido apoio de alguém que lhe oferece informações, melhorando o seu nível de conhecimento sobre o seu problema de saúde?',
                'title_2' => '8.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '8'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '9. Tem recebido apoio de alguém que faz senti-lo/a integrado socialmente?' ,
                'title_2' => '9.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '9'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '10. Tem recebido apoio de alguém que o/a ajuda a melhorar o seu humor e disposição?' ,
                'title_2' => '10.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '10'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => '11. Tem recebido apoio de alguém quando precisa de companhia para se divertir ou fazer atividades de lazer?' ,
                'title_2' => '11.1. Em que medida está satisfeito(a) em relação a esse apoio que tem recebido?',
                'number' => '11'
            ])
            @include('dashboard.step4.partials.question_2', [
                'title' => '12. Com base nos tipos de apoio mencionado acima (questões 6 a 11), preencha a opção ou opções da(as) pessoa(s) que tem dado esse tipo de apoio a você?',
                'number' => '12'
            ])
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                13. Tem recebido algum outro tipo de apoio?
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ Form::text('step4_13', null,
                                    array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Quem?',
                                    ))
                                }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br>

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                14. Gostaria de fazer algum comentário sobre o apoio ou ajuda?
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ Form::text('step4_14', null,
                                    array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Qual?',
                                    ))
                                }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
