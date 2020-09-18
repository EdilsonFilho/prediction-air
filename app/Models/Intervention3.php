<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention3 extends Model
{
    protected $fillable = [
        'survey_id', 'step3_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step3()
    {
        return $this->belongsTo(Step3::class);
    }
}
