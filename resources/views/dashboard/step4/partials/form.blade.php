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
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <h4>Informações</h4>
                        <p>
                            Esta escala é sobre o apoio ou ajuda que tem recebido de diferentes pessoas com quem se
                            relaciona.
                            Por favor, informe a frenquência dos diferentes tipos de apoio que tem recebido em relação à
                            soropositividade e a satisfação quanto a cada um deles. Pedimos que não deixe nenhuma
                            questão em branco.
                        </p>
                    </div>
                </div>
            </div>
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('1'),
                'title_2' => \App\Models\Question::step4('1_1'),
                'number' => '1'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('2'),
                'title_2' => \App\Models\Question::step4('2_1'),
                'number' => '2'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('3'),
                'title_2' => \App\Models\Question::step4('3_1'),
                'number' => '3'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('4'),
                'title_2' => \App\Models\Question::step4('4_1'),
                'number' => '4'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('5'),
                'title_2' => \App\Models\Question::step4('5_1'),
                'number' => '5'
            ])
            @include('dashboard.step4.partials.question_2', [
                'title' => \App\Models\Question::step4('5_2'),
                'number' => '5_2'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('6'),
                'title_2' => \App\Models\Question::step4('6_1'),
                'number' => '6'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('7'),
                'title_2' => \App\Models\Question::step4('7_1'),
                'number' => '7'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('8'),
                'title_2' => \App\Models\Question::step4('8_1'),
                'number' => '8'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('9'),
                'title_2' => \App\Models\Question::step4('9_1'),
                'number' => '9'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('10'),
                'title_2' => \App\Models\Question::step4('10_1'),
                'number' => '10'
            ])
            @include('dashboard.step4.partials.question', [
                'title_1' => \App\Models\Question::step4('11'),
                'title_2' => \App\Models\Question::step4('11_1'),
                'number' => '11'
            ])
            @include('dashboard.step4.partials.question_2', [
                'title' => \App\Models\Question::step4('12'),
                'number' => '12'
            ])
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                {{ \App\Models\Question::step4('13') }}
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
                                {{ \App\Models\Question::step4('14') }}
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
