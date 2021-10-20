<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhoController extends Controller
{
    public function index()
    {
        return view('dashboard.who.index');
       

    }
    public function theory()
    {
        return view('dashboard.who.theory');
    }

    public function show(Request $request)
    {
        $url = "http://api.waqi.info/map/bounds/?token=5c5be2c79e99b92c935134b0f4dad014692e7cd5&latlng=44.74673324024681,4.921875000000001,56.389583525613055,25.664062500000004";
        $json = file_get_contents($url);
        $data = json_decode($json);
        //dd($data);

        // $arr = array();

        // foreach($data->data as $data){
        //     array_push($arr, $data->station->name);
        // }
        // return $arr;
        
    }
}