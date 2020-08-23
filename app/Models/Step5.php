<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step5 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id',
        'step5_1',
        'step5_2',
        'step5_3',
        'step5_4',
        'step5_5',
        'step5_6',
        'step5_7',
        'step5_8',
        'step5_9',
        'step5_10',
        'step5_11',
        'step5_12',
        'step5_13',
        'step5_14',
        'step5_15',
        'step5_16',
        'step5_17',
        'step5_18',
        'step5_19',
        'step5_20',
        'step5_21',
        'step5_22',
        'step5_23',
        'step5_24',
        'step5_25',
        'step5_26',
        'step5_27',
        'step5_28',
        'step5_29',
        'step5_30',
        'step5_31',
        'step5_32',
        'step5_33',
        'step5_34',
        'step5_35',
        'step5_36',
        'step5_37',
        'step5_38',
        'step5_39',
        'step5_40',
        'step5_41',
        'step5_42',
        'step5_43',
        'step5_44',
        'step5_45',
        'step5_46',
        'step5_47',
        'step5_48',
        'step5_49',
        'step5_50',
        'step5_51',
        'step5_52',
        'step5_53'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
