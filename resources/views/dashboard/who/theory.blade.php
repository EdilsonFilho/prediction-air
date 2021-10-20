@extends('adminlte::page')

@section('content_header')

@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Teoria</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
        <strong><i class="fa  fa-heartbeat margin-r-5"></i>Calculo do indice de qualidade do ar.</strong>

        <p class="font-italic">
            <br>O Índice de Qualidade do Ar é baseado na medição das emissões de material particulado (PM2,5 e PM10), Ozônio (O3), Dióxido de Nitrogênio (NO2), Dióxido de Enxofre (SO2) e Monóxido de Carbono (CO). A maioria das estações no mapa está monitorando dados de PM2.5 e PM10, mas há poucas exceções onde apenas PM10 está disponível.
        Todas as medições são baseadas em leituras de hora em hora: Por exemplo, um AQI relatado às 8h significa que a medição foi feita das 7h às 8h.
        </p>

        <br>
        <div>
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
            <img src="{{ asset('images/quadroAqi.png') }}" class="img-fluid" ">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
                <h3>A tabela</h3>
                <p class="font-italic">
                    O Índice de qualidade do ar (IQA) é um indicador padronizado do nível de poluição do ar numa determinada zona, e resulta de uma média aritmética calculada para cada indicador, de acordo com os resultados de várias estações da rede de medição da zona. Mede sobretudo a concentração de ozônio e partículas ao nível do solo, podendo contudo incluir medições de SO2,e NO2.
                    Os parâmetros dos índices variam de acordo com a agência ou entidade que os define, podendo haver várias diferenças. No Brasil, os padrões foram instituídos pelo IBAMA, e aprovados pelo CONAMA, através da resolução CONAMA 03/90.
                </p>
                <p class="font-italic">
                    A conversão de dados analíticos e científicos num índice de fácil compreensão permite que a população em geral tenha um acesso mais fácil e compreensível da informação. Usualmente é disponibilizada em tempo real a evolução do IQA, especialmente no caso de grandes aglomerados urbanos ou industriais
                </p>
                <p class="font-italic">
                    Pela tabela a seguir vamos usar os dados númericos de Aqi para rotular como Good, Moderate, Unhealthy for sensitive groups, unhealthy, very unhealthy e Hazardous.
                </p>
            </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
            <img src="{{ asset('images/formatoDado.png') }}" class="img-fluid" style="width: 580px; height: 420px; margin: 0px;">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
                <h3>Como obtemos os dados </h3>
                <p class="font-italic">
                    Para o propósito deste projeto, usamos os dados disponíveis ao público do projeto waqi.info do Índice Mundial de Qualidade do Ar. Você pode encontrar a API REST e mais informações em:  <a href="https://waqi.info/" title="More Details">waqi.info<i class="bx bx-link"></i></a> . 
                </p>
                <p class="font-italic">
                    Por exemplo, você pode obter dados fazendo uma solicitação GET em: http://api.waqi.info/map/bounds/?token=your-token&latlng=44.74673324024681,4.921875000000001,56.389583525613055,25.664062500000004
                </p>
            </div>
            </div>
        </div>
        </div>

        <hr>
        <strong><i class="fa  fa-upload margin-r-5"></i>Sensoriamento</strong>
        <br>
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
            <img src="{{ asset('images/sensor.png') }}" class="img-fluid" style="width: 420px; height: 420px; margin: 0px;">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
                <h3>Sensor Gaia A12 </h3>
                <p class="font-italic">
                    O Gaia A12 vem com 2 sensores de PM redundantes (portanto, 3 no total). Esta configuração é obrigatória para leituras “oficiais” de AQI (por exemplo, dados transmitidos para um público amplo), como uma forma de garantir a confiabilidade dos dados dos sensores de PM
                </p>
                <p class="font-italic">
                    O sensor meteorológico é um sensor de alta precisão para detecção de umidade relativa, temperatura e pressão. Em resumo:
                </p>
                <ul>
                    <li><i class="icofont-check-circled"></i> Sensor de particulas 3X PMS 5003;</li>
                    <li><i class="icofont-check-circled"></i> Sensor metereológico BME 280.</li>
                    <li><i class="icofont-check-circled"></i> Fonte de alimentação 5V (compatível com USB)</li>
                    <li><i class="icofont-check-circled"></i> Conectividade WIFI</li>
                    <li><i class="icofont-check-circled"></i> Peso: 380g</li>
                  </ul>
            </div>
            </div>
        </div>
        <hr>
        <strong><i class="fa fa-cogs margin-r-5"></i>Inteligência Artificial e PHP.</strong>

        <p class="font-italic">
            <br>Para completar nosso projeto decidimos ousar e implementar uma das técnicas de Inteligência Ariticial, a saber, Redes Neurais, com PHP. Diversos motivos nos levarão a esta decisão. 
        </p>
        <p class="font-italic">
            1- O desafio de usar técnicas de I.A em uma das stacks mais usadas na web, o PHP; <br>
            2- Usar o Multilayer Perceptron Classifier <br>
            3- Estudar os prós e contras de usar esta linguagem de programação para um projeto de I.A
        </p>
        <p class="font-italic">
            A lib MLP-ML PHP é uma proposta ousada da comunidade PHP para aplicações WEB. Possui Diversos recursos como SVC, K-NN, Naive Bayes, Regressão, K-Means a MLP e ainda técnicas como 
            Acurácia, Matriz Confusão, Cross Validation, Variância Threshold etc. Você pode encontrar mais sobre esta lib <a href="https://php-ml.readthedocs.io/en/0.6.0/machine-learning/neural-network/multilayer-perceptron-classifier/" title="More Details">Aqui<i class="bx bx-link"></i></a> . 
        </p>
        
    </div>
    <!-- /.box-body -->
</div>
@stop