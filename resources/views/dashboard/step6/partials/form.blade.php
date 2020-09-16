<div class="panel box box-primary">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#step6">
                        ATIVIDADES DIÁRIAS
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                @include('dashboard.survey.partials.navigation', ['survey' => $survey])
            </div>
        </div>
    </div>
    <div id="step6" class="panel-collapse collapse in">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <h4>Informações</h4>
                        <p>
                            O Índice de Barthel avalia um conjunto de Atividades Básicas de Vida Diária (ABVD). Este instrumento possibilita a realização de uma
                            avaliação global e uma avaliação, por cada dimensão do autocuidado. Assim, deve preencher cada item de acordo com a alínea que
                            traduz de forma mais fidedigna a sua situação.
                        </p>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="20%" class="border"><strong>Item</strong></td>
                            <td width="70%" class="border"><strong>Atividades Básicas de Vida Diária (ABVD)</strong></td>
                            <td width="10%" class="border"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @for ($i = 1; $i <= 10; $i++)
                @include('dashboard.step6.partials.question', [
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
        .border {
            text-align: center;
            border: 1px solid #333;
        }
        .middle {
            vertical-align: middle !important;
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
@endpush
