<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'professional_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
