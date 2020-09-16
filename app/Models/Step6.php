<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step6 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id',
        'step6_1',
        'step6_2',
        'step6_3',
        'step6_4',
        'step6_5',
        'step6_6',
        'step6_7',
        'step6_8',
        'step6_9',
        'step6_10'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
