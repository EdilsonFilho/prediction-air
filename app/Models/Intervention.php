<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable = [
        'survey_id', 'step_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
