@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Questionário - {{ $user->name }}
        <br>
        <small>Selecione a seção para inserir novas informações</small>
    </h1>
    <br>
    <a href="{{ \Auth::user()->profile == config('profile.patient') ? route('my_surveys.index') : route('surveys.index', ['user' => $user]) }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px;">
        Voltar p/ lista de questionários
    </a>
@stop

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>Dados Sociodemográficos</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
                @isset($survey->step1)
                    <a href="{{ route('step1s.show', ['survey' => $survey, 'step1' => $survey->step1]) }}" class="small-box-footer">
                        Analisar respostas <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @else
                    <a href="{{ route('step1s.create', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>Adesão à Medicação</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
                @isset($survey->step2)
                    <a href="{{ route('step2s.show', ['survey' => $survey, 'step2' => $survey->step2]) }}" class="small-box-footer">
                        Analisar respostas <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @else
                    <a href="{{ route('step2s.create', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @endisset
            </div>
        </div>

        @if (\Auth::user()->profile != config('profile.patient'))
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
                <div class="small-box bg-custom">
                    <div class="inner">
                        <h3>Escala de Demência</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-copy"></i>
                    </div>
                    @isset($survey->step3)
                        <a href="{{ route('step3s.show', ['survey' => $survey, 'step3' => $survey->step3]) }}" class="small-box-footer">
                            Analisar respostas <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    @else
                        <a href="{{ route('step3s.create', ['survey' => $survey]) }}" class="small-box-footer">
                            Responder questionário <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    @endisset
                </div>
            </div>
        @endif
        <div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>Escala de Suporte Social</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
                @isset($survey->step4)
                    <a href="{{ route('step4s.show', ['survey' => $survey, 'step4' => $survey->step4]) }}" class="small-box-footer">
                        Analisar respostas <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @else
                    <a href="{{ route('step4s.create', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @endisset
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-4 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>Inventário Breve de Sintomas (BSI)</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
                @isset($survey->step5)
                    <a href="{{ route('step5s.show', ['survey' => $survey, 'step5' => $survey->step5]) }}" class="small-box-footer">
                        Analisar respostas <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @else
                    <a href="{{ route('step5s.create', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @endisset
            </div>
        </div>
    </div>
@stop
