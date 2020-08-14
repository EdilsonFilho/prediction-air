<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class File extends Model 
{
    protected $fillable = [
        'type',
        'name',
        'extension',
        'size',
        'path',
        'highlight'
    ];
}