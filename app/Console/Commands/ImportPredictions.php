<?php

namespace App\Console\Commands;
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;
use Phpml\Dataset\CsvDataset;
//require 'vendor/autoload.php';
use Exception;

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
        $this->output->title('Iniciando pre processamento da MLP');
        /*
        //(new ImportPredictions)->withOutput($this->output)->import(storage_path('csv/air.csv'));
        //$mlp = new MLPClassifier(4, [2], ['good', 'moderate', 'unhealthy for sensitive','unhealthy', 'very unhealthy','hazardous']);
        //$mlp = new MLPClassifier(4, [[2, new PReLU], [2, new Sigmoid]], ['good', 'moderate', 'unhealthy for sensitive','unhealthy', 'very unhealthy','hazardous']);
        $datasets = new CsvDataset(storage_path('csv/air.csv'), 2, false, ';');
        $this->output->success('Importação realizada com sucesso.');
        
        $this->output->title('Iniciando A MLP');
        //dd($datasets);
        $minLat = 41.34343606848294;
        $maxLat = 57.844750992891;
        $minLng = -16.040039062500004;
        $maxLng = 29.311523437500004;
        $samples = $labels = [];

        $step = 0.1;


        try {

            $estimator = new MLPClassifier(4, [2], ['good', 'moderate', 'unhealthy for sensitive','unhealthy', 'very unhealthy','hazardous']);
            $estimator->train($datasets->getSamples(), $datasets->getTargets());
            $estimator->setLearningRate(0.1);

            //$estimator->predict([$sample]);  
            //echo sprintf('Accuracy: %.02f%% correct: %s', ($estimator / count($datasets->getSamples())) * 100, $estimator) . PHP_EOL;

        } catch (Exception $e) {
            return [
                'status' => false,  
                'exception' => $e->getMessage(),
                'code' => 'danger'
            ];
        }*/

        
        /*$mlp = new MLPClassifier(4, [2], ['a', 'b', 'c']);
        $mlp->train(
            $samples = [[1, 0, 0, 0], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]],
            $targets = ['a', 'a', 'b', 'c']
        );
        $this->output->success('treino realizado com sucesso.');
        $mlp->setLearningRate(0.1);
        try {
            $b = $mlp->predict([[1, 1, 1, 1], [0, 0, 0, 0]]);
            echo 'Registros existentes: ' . count($b) . PHP_EOL;
            dd($b);    
            $this->output->title('Fim do processo com sucesso');

        } catch (Exception $e) {
            return [
                'status' => false,  
                'exception' => $e->getMessage(),
                'code' => 'danger'
            ];
        }
        */

        
        $samples =[];
        $targets =[];
        $datasets = new CsvDataset(storage_path('csv/air.csv'), 2, false, ';');// essa funcao separa as features das labels, i é, samples e targets
        //dd($datasets);
        //print_r($datasets);
        $samples = $datasets->getSamples();
        
        // dd([$samples[0], $samples[1]]);
        
        $targets = $datasets->getTargets();
        $this->output->title('Mostrando os samples');
        // print_r($samples);
        // print_r($targets);
        $aux = count($samples);
        printf("O número de registros é: %d \n", $aux);
        //echo $samples[710][1]; será que preciso criar laço dentro de laço para fazer isso: [[1, 0, 0, 0], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]]?

        $this->output->title('Mostrando os targets');
    //    print_r($targets);
    
        $this->output->title('Iniciando treinamento da  MLP');


        $newSamples = [];

        for ($i= 0; $i < count($samples); $i++) { 

            array_push($newSamples, [
                floatval($samples[$i][0]),
                floatval($samples[$i][1]),
            ]);

        }
        
        // dd(count($newSamples), count($targets));

        $auxSample = [floatval($samples[0][0]), floatval($samples[0][1])];
        $auxSample1 = [[1, 0], [0, 1]];
        $auxTarget = [$targets[0], $targets[1]];
        $auxTarget1 = ['a', 'b'];

        // dd(
        //     $auxSample, 
        //     $auxTarget,
        //     // [[1, 0, 0, 0], [0, 1, 1, 0]],
        //     // ['a', 'a', 'b', 'c']
        // );
        
        try {
            $this->output->title('Entrando try ');
            $correct =0;
            
            try{
                $estimator = new MLPClassifier(2, [2], ['good', 'moderate', 'unhealthy for sensitive','unhealthy', 'very unhealthy','hazardous']);
                $this->output->title('deu certo mlp');
                $this->output->title('Iniciando o treinamento mlp');
                $estimator->train($newSamples, $targets); // isso precisa ser algo como $mlp->train( $samples = [[lat, lng], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]], $targets = ['a', 'a', 'b', 'c']);
                $this->output->title('deu certo treinar mlp');
                $estimator->setLearningRate(0.1);
                $predicted = $estimator->predict([[51.403007, 7.208546]]);
               $this->output->title('saind try ');
                
            }catch (Exception $e){
                dd($e);

                $this->output->title('Nao deu certo mlp');
            }            

        } catch (Exception $e) {
            // return [
            //     'status' => false,  
            //     'exception' => $e->getMessage(),
            //     'code' => 'danger'
            // ];
            dd($e->getMessage());
            $this->output->title('Nao deu certo nada');
        }
    }
}
