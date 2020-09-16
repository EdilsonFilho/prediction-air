<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ClinicalRecord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'professional_id', 'patient_id', 'text'
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y \à\s H:i');
    }

    public function getUpdatedAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y \à\s H:i');
    }
}
