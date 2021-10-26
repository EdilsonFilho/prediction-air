<?php

namespace App\Console\Commands;

use App\Models\Information;
use App\Models\Sensor;
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;
use Phpml\Metric\Accuracy;
use Phpml\CrossValidation\RandomSplit;
use Illuminate\Console\Command;
use Exception;
use Phpml\ModelManager;
use Phpml\Dataset\ArrayDataset;

class ImportPredictions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'import:predictions';

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
        try {
            $this->output->title('Iniciando pre processamento da MLP');

            $data = Sensor::get(['lat', 'lon', 'aqi']);

            $samples = $this->getSamples($data);

            $targets = $this->getTargets($data);

            $datasets = new ArrayDataset($samples, $targets);

            $estimator = new MLPClassifier(
                2,
                [
                    [20, 15]
                ],
                [
                    'good', 'moderate',
                    'unhealthy for sensitive',
                    'unhealthy', 'very unhealthy',
                    'hazardous'
                ],
                5000,
                new Sigmoid()
            );

            $estimator->setLearningRate(0.001);

            //Usado cross validation
            $dataset = new RandomSplit($datasets, 0.2);

            // train group
            $trainSamples = $dataset->getTrainSamples();
            $trainLabels = $dataset->getTrainLabels();

            // dd($trainSamples, $trainLabels);

            // test group
            $testSamples = $dataset->getTestSamples();
            $testLabes = $dataset->getTestLabels();
            //fim de validacao cruzada

            /// fazendo transformações
            $newTrainSamples = [];

            for ($i = 0; $i < count($trainSamples); $i++) {

                array_push($newTrainSamples, [
                    floatval($trainSamples[$i][0]),
                    floatval($trainSamples[$i][1]),
                ]);
            }

            $newTestSamples = [];

            for ($i = 0; $i < count($testSamples); $i++) {

                array_push($newTestSamples, [
                    floatval($testSamples[$i][0]),
                    floatval($testSamples[$i][1]),
                ]);
            }

            $this->output->title('Iniciando o treinamento mlp');

            $tmInicioMlp = microtime(true);

            $estimator->train($newTrainSamples, $trainLabels);

            $tmFimMlp = microtime(true);

            $this->output->title('deu certo treinar mlp');

            printf("Iniciando a predicao usando o conjunto de teste\n");

            $tmInicioPrev = microtime(true);

            $predicted = $estimator->predict($newTrainSamples);

            $tmFimPrev = microtime(true);

            printf("Fim da predicao\n");

            print_r($predicted);

            $predicted = Accuracy::score($trainLabels, $predicted, true); // ambos os paramentros precisam ter a mesma dimensao

            print_r("A Acuracia é: ");

            print_r($predicted * 100);

            Information::create([
                'name' => 'accuracy',
                'value' => $predicted * 100
            ]);

            print_r("%\n");
            //fim de medicao de acuracia

            // Calcula o tempo de execucao do script
            $tempoTreinamento = $tmFimMlp - $tmInicioMlp;
            // Exibe o tempo de execucao do script em segundos
            printf("Tempo de Treinamento: %f minutos\n", $tempoTreinamento / 60);
            // Calcula o tempo de execucao do script
            $tempoPrevisao = $tmFimPrev - $tmInicioPrev;
            // Exibe o tempo de execucao do script em segundos
            printf("Tempo de Previsao: %f minutos\n", $tempoPrevisao / 60);

            $this->output->title('saindo try e finalizando o processamento ');

            $filepath = public_path('pml');
            $modelManager = new ModelManager();
            $modelManager->saveToFile($estimator, $filepath);
        } catch (Exception $e) {
            dd($e);

            $this->output->title('Nao deu certo mlp');
        }
    }

    private function getSamples($datasets)
    {
        $samples = [];

        foreach ($datasets as $dataset) {
            array_push($samples, [floatval($dataset->lat), floatval($dataset->lon)]);
        }

        return $samples;
    }

    private function getTargets($datasets)
    {
        $targets = [];

        foreach ($datasets as $dataset) {
            array_push($targets, $dataset->aqi);
        }

        return $targets;
    }
}
