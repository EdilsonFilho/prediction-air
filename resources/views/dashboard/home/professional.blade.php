@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Seja bem-vindo(a) {{ \Auth::user()->name }}
        <br>
        <small>Esse é o seu resumo pessoal</small>
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
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>{{ $amountPatients }}</h3>
                    <p>Qtd. de Pacientes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-custom">
                <div class="inner">
                    <h3>{{ $amountSurveys }}</h3>
                    <p>Qtd. de Questionários Criados</p>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
            </div>
        </div>
    </div>
@stop
