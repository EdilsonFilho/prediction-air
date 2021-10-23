<?php

namespace App\Console\Commands;
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;
use Phpml\Dataset\CsvDataset;
use Phpml\ModelManager;
use Phpml\Metric\ConfusionMatrix;
use Phpml\Metric\Accuracy;
use Phpml\CrossValidation\RandomSplit;
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

        // $auxSample = [floatval($samples[0][0]), floatval($samples[0][1])];
        // $auxSample1 = [[1, 0], [0, 1]];
        // $auxTarget = [$targets[0], $targets[1]];
        // $auxTarget1 = ['a', 'b'];

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
                $estimator = new MLPClassifier(2, [[2, new PReLU], [2, new Sigmoid]], ['good', 'moderate', 'unhealthy for sensitive','unhealthy', 'very unhealthy','hazardous']);
                $this->output->title('deu certo mlp');
                $this->output->title('Dividindo em conjunto de treino e teste');
                $estimator->setLearningRate(0.1);
                 
                //Usado cross validation
                $dataset = new RandomSplit($datasets, 0.2);

                // train group
                $trainSamples = $dataset->getTrainSamples();
                $trainLabels = $dataset->getTrainLabels();

                // test group
                $testSamples = $dataset->getTestSamples();
                $testLabes = $dataset->getTestLabels();
                //fim de validacao cruzada

                
                printf("O número do conjunto de treino  é: %d \n", count($trainSamples));
                print_r($trainSamples);
                printf("O número do conjunto de teste  é: %d \n", count($testSamples));
                print_r($testSamples);
                printf("Vejamos os rotulos de treino\n");
                print_r($trainLabels);


                /// fazendo transformações
                $newTrainSamples =[];
                for ($i= 0; $i < count($trainSamples); $i++) { 

                    array_push($newTrainSamples, [
                        floatval($trainSamples[$i][0]),
                        floatval($trainSamples[$i][1]),
                    ]);

                }
                $newTestSamples =[];
                for ($i= 0; $i < count($testSamples); $i++) { 

                    array_push($newTestSamples, [
                        floatval($testSamples[$i][0]),
                        floatval($testSamples[$i][1]),
                    ]);

                }

                $this->output->title('Iniciando o treinamento mlp');
                $tmInicioMlp = microtime( true );
                $estimator->train($newTrainSamples, $trainLabels);
 
                $tmFimMlp = microtime( true ); 


                $this->output->title('deu certo treinar mlp');
                printf("Iniciando a predicao usando o conjunto de teste\n");
                $tmInicioPrev = microtime( true ); 
                $predicted = $estimator->predict($newTrainSamples);
                $tmFimPrev = microtime( true );
                printf("Fim da predicao\n");
                print_r($predicted);

                //Medindo acuracia
                $tmInicioPrev = microtime( true ); 
                
                // $actualLabels = ['a', 'b', 'a', 'b'];
                // $predictedLabels = ['b', 'c', 'b', 'b'];


                $predicted = Accuracy::score($trainLabels, $predicted, true); // ambos os paramentros precisam ter a mesma dimensao
                $tmFimPrev = microtime( true );
                print_r("A Acuracia é: ");
                print_r($predicted*100);
                print_r("%\n");
                //fim de medicao de acuracia

                // Calcula o tempo de execucao do script 
                $tempoTreinamento = $tmFimMlp - $tmInicioMlp;
                // Exibe o tempo de execucao do script em segundos
                printf("Tempo de Treinamento: %f minutos\n", $tempoTreinamento/60);
                // Calcula o tempo de execucao do script 
                $tempoPrevisao = $tmFimPrev - $tmInicioPrev;
                // Exibe o tempo de execucao do script em segundos
                printf("Tempo de Previsao: %f minutos\n", $tempoPrevisao/60);



                $this->output->title('saindo try e finalizando o processamento ');

                
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
