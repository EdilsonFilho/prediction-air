<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention6 extends Model
{
    protected $fillable = [
        'survey_id', 'step6_id', 'text'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function step6()
    {
        return $this->belongsTo(Step6::class);
    }
}
