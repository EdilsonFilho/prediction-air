<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HADDS</title>
	<link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" />

    {{-- @hasSection('simple-table') --}}
        {{-- <link href="{{ public_path('css/simple-table.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- @else --}}
        <link href="{{ public_path('css/grey-grid-table.css') }}" rel="stylesheet" type="text/css" />
    {{-- @endif --}}

</head>
<body>
    <header>
        <table class="table-header">
            <tbody>
                <tr>
                    <td class="logo" width="30%">
                        <strong>HADDS</strong>
                    </td>
                    <td class="report-title" width="70%">Pesquisa</td>
                </tr>
            </tbody>
        </table>
    </header>
    <footer>
        <table cellpadding="2px" cellspacing="0px" style="width: 100%">
            <tbody>
                <tr>
                    <td width="20%">
                        <strong>HADDS</strong> - Pesquisa <br>
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
            @isset($survey->step1)
                @include('dashboard.step1.partials.table', [
                    'showHeader' => true,
                    'survey' => $survey,
                    'step1' => $survey->step1
                ])
            @else
                {{-- @include('dashboard.survey.partials.table') --}}
            @endisset
        </div>
    </main>
</body>
</html>
