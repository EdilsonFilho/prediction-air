<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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

        dd($result);

        return view('dashboard.home.prediction');
    }
}
