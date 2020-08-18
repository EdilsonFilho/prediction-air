@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @include('dashboard.survey.partials.information', ['user' => $user, 'isRoot' => true])
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
                <a href="{{ route('surveys.step1', ['user' => $user->id]) }}" class="small-box-footer">
                    Responder questionário <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop