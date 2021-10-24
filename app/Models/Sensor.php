<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Phpml\ModelManager;

class Sensor extends Model
{
    protected $fillable = [
        'lat',
        'lon',
        'uid',
        'aqi',
        'station_name',
        'station_time',
    ];

    public static function getColor($aqi)
    {
        $color = '';

        switch ($aqi) {
            case 'good':
                $color = '#55a75c';
                break;
            case 'moderate':
                $color = '#FFFF00';
                break;
            case 'unhealthy for sensitive':
                $color = '#FFA500';
                break;
            case 'unhealthy':
                $color = '#FF0000';
                break;
            case 'very unhealthy':
                $color = '#800000';
                break;

                // hazardous
            default:
                $color = '#000000';
                break;
        }

        return $color;
    }
}
