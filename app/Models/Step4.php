<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step4 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id',
        'step4_1',
        'step4_1_1',
        'step4_2',
        'step4_2_1',
        'step4_3',
        'step4_3_1',
        'step4_4',
        'step4_4_1',
        'step4_5',
        'step4_5_1',
        'step4_5_2',
        'step4_6',
        'step4_6_1',
        'step4_7',
        'step4_7_1',
        'step4_8',
        'step4_8_1',
        'step4_9',
        'step4_9_1',
        'step4_10',
        'step4_10_1',
        'step4_11',
        'step4_11_1',
        'step4_12',
        'step4_13',
        'step4_14',
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
