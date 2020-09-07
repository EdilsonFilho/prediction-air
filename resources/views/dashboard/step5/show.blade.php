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
                                            <tr>
                                                <td>
                                                    1. Nervosismo ou tensão interior
                                                </td>
                                                <td>{{ $step5->step5_1 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Desmaios ou tonturas
                                                </td>
                                                <td>{{ $step5->step5_2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Ter a impressão de que as outras pessoas controlam os seuspensamentos
                                                </td>
                                                <td>{{ $step5->step5_3 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Ter a ideia de que as outras pessoas são culpadas pela maior parte dos seus problemas
                                                </td>
                                                <td>{{ $step5->step5_4 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Dificuldades em se lembrar de coisas passadas ou recentes
                                                </td>
                                                <td>{{ $step5->step5_5 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Aborrecer-se e irritar-se com facilidade
                                                </td>
                                                <td>{{ $step5->step5_6 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Dores sobre o coração ou no peito
                                                </td>
                                                <td>{{ $step5->step5_7 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Sentir medo na rua ou nos espaços abertos
                                                </td>
                                                <td>{{ $step5->step5_8 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Pensamentos de acabar com a vida
                                                </td>
                                                <td>{{ $step5->step5_9 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Vê a sua saúde ser afetada por ter de cuidar do seu familiar?
                                                </td>
                                                <td>{{ $step5->step5_10 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Perder o apetite
                                                </td>
                                                <td>{{ $step5->step5_11 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Ter medo subitamente sem ter motivo para isso
                                                </td>
                                                <td>{{ $step5->step5_12 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Ter impulsos que não consegue controlar
                                                </td>
                                                <td>{{ $step5->step5_13 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Sentir-se sozinho mesmo quando está com mais pessoas
                                                </td>
                                                <td>{{ $step5->step5_14 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15. Dificuldade em fazer qualquer trabalho
                                                </td>
                                                <td>{{ $step5->step5_15 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16. Sentir-se sozinho
                                                </td>
                                                <td>{{ $step5->step5_16 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17. Sentir-se triste
                                                </td>
                                                <td>{{ $step5->step5_17 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18. Não ter interesse por nada
                                                </td>
                                                <td>{{ $step5->step5_18 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    19. Sentir-se atemorizado
                                                </td>
                                                <td>{{ $step5->step5_19 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20. Sentir-se facilmente ofendido nos seus sentimentos
                                                </td>
                                                <td>{{ $step5->step5_20 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21. Sentir que as pessoas não são amigas ou não gostam de si
                                                </td>
                                                <td>{{ $step5->step5_21 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22. Sentir-se inferior aos outros
                                                </td>
                                                <td>{{ $step5->step5_22 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    23. Vontade de vomitar ou mal estar
                                                </td>
                                                <td>{{ $step5->step5_23 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24. Ter a impressão de que os outros o costumam observar e falar de si
                                                </td>
                                                <td>{{ $step5->step5_24 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    25. Ter dificuldade em adormecer
                                                </td>
                                                <td>{{ $step5->step5_25 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    26. Sentir necessidade de verificar várias vezes o que faz
                                                </td>
                                                <td>{{ $step5->step5_26 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    27. Dificuldade em tomar decisões
                                                </td>
                                                <td>{{ $step5->step5_27 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    28. Medo de viajar de automóvel, trem ou ônibus
                                                </td>
                                                <td>{{ $step5->step5_28 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    29. Sensação de que lhe falta o ar
                                                </td>
                                                <td>{{ $step5->step5_29 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    30. Calafrios ou afrontamentos
                                                </td>
                                                <td>{{ $step5->step5_30 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    31. Ter que evitar certas coisas, lugares ou atividades por lhe causar medo
                                                </td>
                                                <td>{{ $step5->step5_31 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    32. Sensação de vazio na cabeça
                                                </td>
                                                <td>{{ $step5->step5_32 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    33. Sensação de anestesia ou de formigamento no corpo
                                                </td>
                                                <td>{{ $step5->step5_33 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    34. Ter a ideia de que deveria ser castigado
                                                </td>
                                                <td>{{ $step5->step5_34 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    35. Sentir-se sem esperança em relação ao futuro
                                                </td>
                                                <td>{{ $step5->step5_35 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    36. Ter dificuldade em se concentrar
                                                </td>
                                                <td>{{ $step5->step5_36 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    37. Sentir falta de forças em partes do corpo
                                                </td>
                                                <td>{{ $step5->step5_37 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    38. Sentir em estado de tensão ou aflição
                                                </td>
                                                <td>{{ $step5->step5_38 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    39. Ter pensamentos sobre a morte ou que vai morrer
                                                </td>
                                                <td>{{ $step5->step5_39 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    40. Ter impulsos de bater, ofender ou fazer mal a alguém
                                                </td>
                                                <td>{{ $step5->step5_40 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    41. Ter vontade de destruir ou partir coisas
                                                </td>
                                                <td>{{ $step5->step5_41 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    42. Sentir-se envergonhado junto de outras pessoas
                                                </td>
                                                <td>{{ $step5->step5_42 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    43. Não se sentir à vontade nas multidões, por exemplo, nas lojas, cinemas, mercados, etc.
                                                </td>
                                                <td>{{ $step5->step5_43 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    44. Grande dificuldade em sentir-se próximo de outra pessoa
                                                </td>
                                                <td>{{ $step5->step5_44 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    45. Ter ataques de terror ou pânico
                                                </td>
                                                <td>{{ $step5->step5_45 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    46. Envolver-se facilmente em discussões
                                                </td>
                                                <td>{{ $step5->step5_46 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    47. Sentir-se nervoso quando tem de ficar sozinho
                                                </td>
                                                <td>{{ $step5->step5_47 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    48. Sentir que as outras pessoas não dão o devido valor ao seu trabalho ou às suas capacidades
                                                </td>
                                                <td>{{ $step5->step5_48 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    49. Sentir-se tão inquieto que não se pode sentar ou estar parado
                                                </td>
                                                <td>{{ $step5->step5_49 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    50. Sentir que não tem valor
                                                </td>
                                                <td>{{ $step5->step5_50 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    51. Ter a impressão de que, se deixasse, as outras pessoas se aproveitariam de si
                                                </td>
                                                <td>{{ $step5->step5_51 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    52. Ter sentimentos de culpa
                                                </td>
                                                <td>{{ $step5->step5_52 }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    53. Ter a impressão de que alguma coisa está mal na sua cabeça ou no seu espírito
                                                </td>
                                                <td>{{ $step5->step5_53 }}</td>
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
