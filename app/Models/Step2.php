<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step2 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id', 'step2_1', 'step2_2', 'step2_3', 'step2_4',
        'step2_5', 'step2_6'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
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
