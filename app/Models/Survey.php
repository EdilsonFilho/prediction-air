<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'professional_id', 'patient_id'
    ];

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y \à\s H:i');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function intervention($stepId)
    {
        return $this->hasOne(Intervention::class)->where('step_id', '=', $stepId);
    }

    public function step1()
    {
        return $this->hasOne(Step1::class);
    }

    public function step2()
    {
        return $this->hasOne(Step2::class);
    }

    public function step3()
    {
        return $this->hasOne(Step3::class);
    }

    public function step4()
    {
        return $this->hasOne(Step4::class);
    }

    public function step5()
    {
        return $this->hasOne(Step5::class);
    }

    public function step6()
    {
        return $this->hasOne(Step6::class);
    }

    public function getStatuStep1()
    {
        return isset($this->step1) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }

    public function getStatuStep2()
    {
        return isset($this->step2) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }

    public function getStatuStep3()
    {
        return isset($this->step3) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }

    public function getStatuStep4()
    {
        return isset($this->step4) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }

    public function getStatuStep5()
    {
        return isset($this->step5) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }

    public function getStatuStep6()
    {
        return isset($this->step6) ? '<span class="label label-success">Completo</span>'
            : '<span class="label label-warning">Pendente</span>';
    }
}
