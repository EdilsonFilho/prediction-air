<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HADDS - {{ $survey->patient->name }}</title>
	<link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ public_path('css/grey-grid-table.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <header>
        <table class="table-header">
            <tbody>
                <tr>
                    <td class="logo" width="30%">
                        <strong>HADDS</strong>
                    </td>
                    <td class="report-title" width="70%">{{ $survey->patient->name }}</td>
                </tr>
            </tbody>
        </table>
    </header>
    <footer>
        <table cellpadding="2px" cellspacing="0px" style="width: 100%">
            <tbody>
                <tr>
                    <td width="20%">
                        <strong>HADDS</strong> - {{ $survey->patient->name }} <br>
                        <small>
                            <em>
                                Gerado por {{ \Auth::user()->name }} em {{ \Carbon\Carbon::now()->format('d/m/Y \à\s H:i') }}
                            </em>
                        </small>
                    </td>
                    <td width="20%">
                        <div class="pagenum-container"><span class="pagenum"></span></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </footer>
    <main>
        <div class="content">
            @isset($user->clinicalRecord)
                @include('dashboard.clinical_record.partials.table', [
                    'clinicalRecord' => $user->clinicalRecord
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'REGISTRO CLÍNICO'])
            @endisset

            <br>

            @isset($survey->step1)
                @include('dashboard.step1.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step1' => $survey->step1
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention1) ? $survey->intervention1->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'DADOS SOCIODEMOGRÁFICOS'])
            @endisset

            <br>

            @isset($survey->step2)
                @include('dashboard.step2.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step2' => $survey->step2
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention2) ? $survey->intervention2->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'ADESÃO À MEDICAÇÃO'])
            @endisset

            <br>

            @isset($survey->step3)
                @include('dashboard.step3.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step3' => $survey->step3
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention3) ? $survey->intervention3->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'ESCALA DE DEMÊNCIA'])
            @endisset

            <br>

            @isset($survey->step4)
                @include('dashboard.step4.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step4' => $survey->step4
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention4) ? $survey->intervention4->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'ESCALA DE SUPORTE SOCIAL'])
            @endisset

            <br>

            @isset($survey->step5)
                @include('dashboard.step5.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step5' => $survey->step5
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention5) ? $survey->intervention5->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'INVENTÁRIO BREVE DE SINTOMAS (BSI)'])
            @endisset

            <br>

            @isset($survey->step6)
                @include('dashboard.step6.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step6' => $survey->step6
                ])
                <br>
                @include('dashboard.survey.partials.intervention', [
                    'intervention' => isset($survey->intervention6) ? $survey->intervention6->text : null
                ])
            @else
                @include('dashboard.survey.partials.no_data', ['title' => 'ATIVIDADES DIÁRIAS'])
            @endisset
        </div>
    </main>
</body>
</html>
