<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention5 extends Model
{
    protected $fillable = [
        'survey_id', 'step5_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step5()
    {
        return $this->belongsTo(Step5::class);
    }
}
