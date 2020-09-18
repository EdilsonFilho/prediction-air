<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention1 extends Model
{
    protected $fillable = [
        'survey_id', 'step1_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step1()
    {
        return $this->belongsTo(Step1::class);
    }
}
