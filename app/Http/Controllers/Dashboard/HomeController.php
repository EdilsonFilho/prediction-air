<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Phpml\ModelManager;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index');
    }

    public function prediction(Request $request)
    {
        $modelManager = new ModelManager();

        $filepath = public_path('pml');

        $restoredClassifier = $modelManager->restoreFromFile($filepath);

        $result = $restoredClassifier->predict([
            floatval($request['lat']),
            floatval($request['lon'])
        ]);

        $status = '';
        $color = '';

        switch ($result) {
            case 'good':
                $status = 'Bom';
                $color = '#55a75c';
                break;
            case 'moderate':
                $status = 'Moderado';
                $color = '#FFFF00';
                break;
            case 'unhealthy for sensitive':
                $status = 'Insalubre';
                $color = '#FFA500';
                break;
            case 'unhealthy':
                $status = 'Pouco saudável';
                $color = '#FF0000';
                break;
            case 'very unhealthy':
                $status = 'Muito prejudicial à saúde';
                $color = '#800000';
                break;

            // hazardous
            default:
                $status = 'Perigoso';
                $color = '#000000';
                break;
        }

        $acuracy = Information::latest('created_at')->first()->value;
        $acuracyColor = '';

        if ($acuracy >= 50) {
            $acuracyColor = '#55a75c';
        } elseif ($acuracy >= 40) {
            $acuracyColor = '#FFFF00';
        } elseif ($acuracy >= 30) {
            $acuracyColor = '#FFA500';
        } elseif ($acuracy >= 20) {
            $acuracyColor = '#FF0000';
        } elseif ($acuracy >= 10) {
            $acuracyColor = '#800000';
        } else {
            $acuracyColor = '#000000';
        }

        return view('dashboard.home.prediction', compact('status', 'color', 'acuracy', 'acuracyColor'));
    }
}
