<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step1 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id', 'step1_1', 'step1_2', 'step1_3', 'step1_4',
        'step1_5', 'step1_6', 'step1_7', 'step1_8', 'step1_9',
        'step1_10', 'step1_11', 'step1_12', 'step1_13'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
