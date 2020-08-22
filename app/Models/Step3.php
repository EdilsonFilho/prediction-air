<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step3 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id', 'step3_1', 'step3_2', 'step3_3', 'step3_4'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
