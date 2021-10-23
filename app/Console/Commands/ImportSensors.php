<?php

namespace App\Console\Commands;

use App\Models\Sensor;
use Illuminate\Console\Command;

class ImportSensors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:sensors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sensor import';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Sensor::truncate();

        $url = "http://api.waqi.info/map/bounds/?token=5c5be2c79e99b92c935134b0f4dad014692e7cd5&latlng=44.74673324024681,4.921875000000001,56.389583525613055,25.664062500000004";

        $json = file_get_contents($url);

        $data = json_decode($json);

        foreach ($data->data as $sensor) {
            Sensor::create([
                'lat' => $sensor->lat,
                'lon' => $sensor->lon,
                'aqi' => $sensor->aqi,
                'uid' => $sensor->uid,
                'station_name' => $sensor->station->name,
                'station_time' => $sensor->station->time
            ]);
        }
    }
}
