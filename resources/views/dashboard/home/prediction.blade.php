@extends('adminlte::page')

@section('content_header')
    <h1>
        Seja bem-vindo(a) {{ \Auth::user()->name }}
        <small>Acompanhe a qualidade do ar em sua localidade</small>
        <small>Atualizado em: {{ (new DateTime())->format('d/m/Y') }}</small>
    </h1>
@stop

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <h4>Atenção!</h4>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="box">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Minha Localidade.</h3>
                        <h5 class="text-muted">Identificamos que em sua região não existem sensores de nossa rede de monitoramento, Mas
                            com base nos dados coletados por nossa rede e pelos algoritmos de Inteligência Artifical de nossa platadorma
                            a Qualidade do Ar em na localização informada é: 
                        </h5>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3></h3>
            
                        <p>BOA</p>
                    </div>
                    <div class="icon">
                        <i class="
                        glyphicon glyphicon-thumbs-up"></i>
                    </div>
                </div>
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3></h3>
            
                        <p>Grau de confiabilidade: 91%</p>
                    </div>
                    <div class="icon">
                        <i class="
                        glyphicon glyphicon-dashboard"></i>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
@stop



