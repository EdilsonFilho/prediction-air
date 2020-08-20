@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Questionário - {{ $user->name }}
        <br>
        <small>Selecione a seção para inserir novas informações</small>
    </h1>
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
            <div class="small-box bg-sagcic">
                <div class="inner">
                    <h3>Dados Sociodemográficos</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
                @isset($survey->step1)
                    <a href="{{ route('steps1.edit', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @else
                    <a href="{{ route('steps1.create', ['survey' => $survey]) }}" class="small-box-footer">
                        Responder questionário <i class="fa fa-arrow-circle-right"></i>
                    </a>
                @endisset
            </div>
        </div>
    </div>
@stop
