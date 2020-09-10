<?php

namespace App\Exports;

use Auth;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithProperties;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PatientsExport implements WithProperties, FromView
{
    public function properties(): array
    {
        return [
            'creator' => Auth::user()->name,
            'title' => 'HADDS - Exportação',
            'description' => 'Lista de pacientes',
            'keywords' => 'hadds,exportação,paciente,pacientes',
            // 'lastModifiedBy' => 'Patrick Brouwers',
            // 'subject' => 'Invoices',
            // 'category' => 'Invoices',
            // 'manager' => 'Patrick Brouwers',
            // 'company' => 'Maatwebsite',
        ];
    }

    public function view(): View
    {
        return view('dashboard.export.patients', [
            'surveys' => Auth::user()->surveys
        ]);
    }
}
