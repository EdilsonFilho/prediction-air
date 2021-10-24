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

    public static function getColor($lat, $lon)
    {
        $modelManager = new ModelManager();

        $filepath = public_path('pml');

        $restoredClassifier = $modelManager->restoreFromFile($filepath);

        $result = $restoredClassifier->predict([
            floatval($lat),
            floatval($lon)
        ]);

        $color = '';

        switch ($result) {
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

    public static function getStatus($result)
    {
        $status = '';

        switch ($result) {
            case 'good':
                $status = 'Bom';
                break;
            case 'moderate':
                $status = 'Moderado';
                break;
            case 'unhealthy for sensitive':
                $status = 'Insalubre';
                break;
            case 'unhealthy':
                $status = 'Pouco saudável';
                break;
            case 'very unhealthy':
                $status = 'Muito prejudicial à saúde';
                break;

                // hazardous
            default:
                $status = 'Perigoso';
                break;

                return $status;
        }
    }
}
