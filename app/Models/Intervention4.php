<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention4 extends Model
{
    protected $fillable = [
        'survey_id', 'step4_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step4()
    {
        return $this->belongsTo(Step4::class);
    }
}
