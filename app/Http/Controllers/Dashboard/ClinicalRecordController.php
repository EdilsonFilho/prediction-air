<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicalRecordRequest;
use App\Models\ClinicalRecord;
use App\Models\User;
use Auth;

class ClinicalRecordController extends Controller
{
    public function store(User $user)
    {
        if (!canAccess($user)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        $clinicalRecord = ClinicalRecord::create([
            'professional_id' => Auth::id(),
            'patient_id' => $user->id
        ]);

        if ($clinicalRecord) {
            return redirect()->route('clinical-records.edit', ['id' => $clinicalRecord['id']])
                ->with([
                    'message' => 'Registro Clínico iniciado com sucesso.',
                    'code' => 'success'
                ]);
        } else {
            return redirect()->back()
                ->with([
                    'message' => 'Erro ao iniciar registro clínico. Por favor, tente novamente.',
                    'code' => 'danger'
                ]);
        }
    }

    public function edit(ClinicalRecord $clinicalRecord)
    {
        $user = User::find($clinicalRecord->patient_id);

        if (!canAccess($user)) {
            return redirect()->route('home.index')
                ->with([
                    'message' => 'Você tentou acessar uma área não permitida.',
                    'code' => 'danger'
                ]);
        }

        return view('dashboard.clinical_record.edit', ['clinicalRecord' => $clinicalRecord, 'user' => $user]);
    }

    public function update(ClinicalRecordRequest $request, ClinicalRecord $clinicalRecord)
    {
        $clinicalRecord->fill($request->all())->update();

        if ($clinicalRecord) {
            return redirect()->route('clinical-records.edit', ['id' => $clinicalRecord['id']])
                ->with(['message' => 'Edição realizada com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->back()
                ->with(['message' => 'Erro ao editar. Tente novamente!', 'code' => 'danger']);
        }
    }
}
