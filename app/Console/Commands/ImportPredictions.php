<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportPredictions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:predictions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Predictions';

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
        $this->output->title('Starting import');
        (new ImportPredictions)->withOutput($this->output)->import(storage_path('csv/predictions.csv'));

        $this->output->success('Import successful');
    }
}
