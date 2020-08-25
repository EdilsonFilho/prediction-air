<div class="panel box box-primary">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#step5">
                        INVENTÁRIO BREVE DE SINTOMAS (BSI)
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
            </div>
        </div>
    </div>
    <div id="step5" class="panel-collapse collapse in">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <h4>Informações</h4>
                        <p>
                            A seguir encontra-se uma Iista de problemas ou sintomas que por vezes as pessoas apresentam. Assinale num dos espaços à direita
                            de cada sintoma, aquele que melhor descreve O GRAU EM QUE CADA PROBLEMA O AFECTOU DURANTE A ULTIMA SEMANA.
                            Para cada problema ou sintoma marque apenas um espaço com uma cruz. Não deixe nenhuma pergunta por responder. Em que
                            medida foi afectado nos seguintes sintomas?
                        </p>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="2%"></td>
                            <td width="38%"></td>
                            <td width="12%">
                                <strong>Nunca</strong>
                            </td>
                            <td width="12%">
                                <strong>Poucas <br> vezes</strong>
                            </td>
                            <td width="12%">
                                <strong>Algumas <br> vezes</strong>
                            </td>
                            <td width="12%">
                                <strong>Muitas <br> vezes</strong>
                            </td>
                            <td width="12%">
                                <strong>Muitíssimas <br> vezes</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @include('dashboard.step5.partials.question', [
                'title' => 'Nervosismo ou tensão interior',
                'number' => '1'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Desmaios ou tonturas',
                'number' => '2'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a impressão de que as outras pessoas controlam os seus pensamentos',
                'number' => '3'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a ideia de que as outras pessoas são culpadas pela maior parte dos seus problemas',
                'number' => '4'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Dificuldades em se lembrar de coisas passadas ou recentes',
                'number' => '5'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Aborrecer-se e irritar-se com facilidade',
                'number' => '6'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Dores sobre o coração ou no peito',
                'number' => '7'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir medo na rua ou nos espaços abertos',
                'number' => '8'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Pensamentos de acabar com a vida',
                'number' => '9'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Vê a sua saúde ser afetada por ter de cuidar do seu familiar?',
                'number' => '10'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Perder o apetite',
                'number' => '11'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter medo subitamente sem ter motivo para isso',
                'number' => '12'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter impulsos que não consegue controlar',
                'number' => '13'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se sozinho mesmo quando está com mais pessoas',
                'number' => '14'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Dificuldade em fazer qualquer trabalho',
                'number' => '15'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Dificuldade em fazer qualquer trabalho',
                'number' => '16'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se triste',
                'number' => '17'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Não ter interesse por nada',
                'number' => '18'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se atemorizado',
                'number' => '19'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se facilmente ofendido nos seus sentimentos',
                'number' => '20'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir que as pessoas não são amigas ou não gostam de si',
                'number' => '21'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se inferior aos outros',
                'number' => '22'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Vontade de vomitar ou mal estar',
                'number' => '23'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a impressão de que os outros o costumam observar e falar de si',
                'number' => '24'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter dificuldade em adormecer',
                'number' => '25'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir necessidade de verificar várias vezes o que faz',
                'number' => '26'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Dificuldade em tomar decisões',
                'number' => '27'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Medo de viajar de comboio, eléctrico ou autocarro',
                'number' => '28'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sensação de que lhe falta o ar',
                'number' => '29'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Calafrios ou afrontamentos',
                'number' => '30'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter que evitar certas coisas, lugares ou actividades por lhe causar medo',
                'number' => '31'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sensação de vazio na cabeça',
                'number' => '32'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sensação de anestesia ou de formigueiro no corpo',
                'number' => '33'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a ideia de que deveria ser castigado',
                'number' => '34'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se sem esperança em relação ao futuro',
                'number' => '35'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter dificuldade em se concentrar',
                'number' => '36'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir falta de forças em partes do corpo',
                'number' => '37'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir em estado de tensão ou aflição',
                'number' => '38'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter pensamentos sobre a morte ou que vai morrer',
                'number' => '39'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter impulsos de bater, ofender ou fazer mal a alguém',
                'number' => '40'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter vontade de destruir ou partir coisas',
                'number' => '41'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se embaraçado junto de outras pessoas',
                'number' => '42'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Não se sentir à vontade nas multidões, por exemplo, nas lojas, cinemas, mercados, etc.',
                'number' => '43'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Grande dificuldade em sentir-se próximo de outra pessoa',
                'number' => '44'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter ataques de terror ou pânico',
                'number' => '45'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Envolver-se facilmente em discussões',
                'number' => '46'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se nervoso quando tem de ficar sozinho',
                'number' => '47'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir que as outras pessoas não dão o devido valor ao seu trabalho ou às suas capacidades',
                'number' => '48'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir-se tão inquieto que não se pode sentar ou estar parado',
                'number' => '49'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Sentir que não tem valor',
                'number' => '50'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a impressão de que, se deixasse, as outras pessoas se aproveitariam de si',
                'number' => '51'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter sentimentos de culpa',
                'number' => '52'
            ])
            @include('dashboard.step5.partials.question', [
                'title' => 'Ter a impressão de que alguma coisa está mal na sua cabeça ou no seu espírito',
                'number' => '53'
            ])
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
