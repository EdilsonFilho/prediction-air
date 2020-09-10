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
                            medida foi afetado nos seguintes sintomas?
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
            @for ($i = 1; $i <= 53; $i++)
                @include('dashboard.step5.partials.question', [
                    'title' => \App\Models\Question::step5($i),
                    'number' => $i
                ])
            @endfor
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
