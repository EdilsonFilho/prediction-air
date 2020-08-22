<div class="panel box box-primary">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#step1">
                        ESCALA DE DEMÊNCIA
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                @include('dashboard.survey.partials.navigation', ['patient' => $survey->patient])
            </div>
        </div>
    </div>
    <div id="step1" class="panel-collapse collapse in">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <h4>Informações</h4>
                        <p>
                            Leia ao utente as seguintes palavras, demorando apenas um segundo para cada uma delas: <strong>cão,
                            chapéu, verde e pêssego</strong>. Solicite ao utente que as reproduza.
                            Repita as palavras se necessário. Informe o utente que deverá lembrar-se delas
                            mais tarde.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>1. ATENÇÃO</strong>
                        <p>
                            Movimentos oculares anti-sacádicos: 20 movimentos (estímulos)
                            <br>
                            Ocorrerem _____ erros em 20 tentativas
                            <br>
                            <strong>< 3 erros = 4; 4 erros = 3; 5 erros = 2; 6 erros = 1; > 6 erros = 0</strong>
                        </p>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_1', '0', null, ['id' => '0_step3_1']) }}
                            <label for="0_step3_1">0</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_1', '1', null, ['id' => '1_step3_1']) }}
                            <label for="1_step3_1">1</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_1', '2', null, ['id' => '2_step3_1']) }}
                            <label for="2_step3_1">2</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_1', '3', null, ['id' => '3_step3_1']) }}
                            <label for="3_step3_1">3</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_1', '4', null, ['id' => '4_step3_1']) }}
                            <label for="4_step3_1">4</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>2. VELOCIDADE PSICOMOTORA</strong>
                        <p>
                            Peça ao utente para escrever o alfabeto em letras maiúsculas horizontalmente numa folha (uma linha).
                            <br>
                            Registe o tempo despendido em segundos.
                            <br>
                            <strong>
                                < 21 seg = 6; 21,1 a 24 seg = 5; 24,1 a 27 seg = 4; 27,1 a 30 segundos = 3; 30,1 a 33 seg = 2; 33,1 a 36 seg = 1; > 36 seg = 0
                            </strong>
                        </p>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '0', null, ['id' => '0_step3_2']) }}
                            <label for="0_step3_2">0</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '1', null, ['id' => '1_step3_2']) }}
                            <label for="1_step3_2">1</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '2', null, ['id' => '2_step3_2']) }}
                            <label for="2_step3_2">2</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '3', null, ['id' => '3_step3_2']) }}
                            <label for="3_step3_2">3</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '4', null, ['id' => '4_step3_2']) }}
                            <label for="4_step3_2">4</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '5', null, ['id' => '5_step3_2']) }}
                            <label for="5_step3_2">5</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_2', '6', null, ['id' => '6_step3_2']) }}
                            <label for="6_step3_2">6</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>3. RECUPERAÇÃO DA MEMÓRIA</strong>
                        <p>
                            Solicite ao utente que repita as quatro palavras enunciadas inicialmente. Atribua um
                            ponto por cada resposta correta. Utilize "pistas semânticas" sempre que o utente
                            demonstre dificuldade em recordar as palavras: animal (cão), peça de roupa
                            (chapéu), cor (verde), fruta (pêssego).
                            <br>
                            <strong>Atribua 1/2 ponto por cada resposta correta após a ajuda fornecida</strong>
                        </p>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_3', '0', null, ['id' => '0_step3_3']) }}
                            <label for="0_step3_3">0</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_3', '1', null, ['id' => '1_step3_3']) }}
                            <label for="1_step3_3">1</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_3', '2', null, ['id' => '2_step3_3']) }}
                            <label for="2_step3_3">2</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_3', '3', null, ['id' => '3_step3_3']) }}
                            <label for="3_step3_3">3</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_3', '4', null, ['id' => '4_step3_3']) }}
                            <label for="4_step3_3">4</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>4. CONSTRUÇÃO</strong>
                        <p>
                            Solicite ao utente que copie o cubo abaixo. Registar o tempo despendido:
                            _______segundos
                            <br>
                            <strong>< 25 seg = 2; 25 a 35 seg = 1; > 35 seg = 0</strong>
                        </p>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_4', '0', null, ['id' => '0_step3_4']) }}
                            <label for="0_step3_4">0</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_4', '1', null, ['id' => '1_step3_4']) }}
                            <label for="1_step3_4">1</label>
                        </div>
                        <div class="icheck-material-green">
                            {{ Form::radio('step3_4', '2', null, ['id' => '2_step3_4']) }}
                            <label for="2_step3_4">2</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <img src="{{ asset('images/cubo.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
