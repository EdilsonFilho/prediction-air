<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Step1 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id', 'fill_date', 'step1_1', 'step1_2', 'step1_2_1', 'step1_3', 'step1_4',
        'step1_5', 'step1_6', 'step1_7', 'step1_8', 'step1_9',
        'step1_10', 'step1_11', 'step1_12', 'step1_13'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function getFillDateAttribute($value)
    {
        if (isset($value)) {
            return Carbon::parse($value)->format('d/m/Y');
        }
    }

    public function setFillDateAttribute($value)
    {
        $this->attributes['fill_date'] = isset($value) ? Carbon::createFromFormat('d/m/Y', $value) : null;
    }

    public function getAllAttributes()
    {
        $columns = $this->getFillable();
        // Another option is to get all columns for the table like so:
        // $columns = \Schema::getColumnListing($this->table);
        // but it's safer to just get the fillable fields

        $attributes = $this->getAttributes();

        foreach ($columns as $column) {
            if (!array_key_exists($column, $attributes)) {
                $attributes[$column] = null;
            }
        }
        return $attributes;
    }
}
