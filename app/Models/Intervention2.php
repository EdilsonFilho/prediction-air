<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention2 extends Model
{
    protected $fillable = [
        'survey_id', 'step2_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step2()
    {
        return $this->belongsTo(Step2::class);
    }
}
