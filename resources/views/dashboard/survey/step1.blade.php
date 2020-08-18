@extends('adminlte::page')

@section('content_header')
    @include('dashboard.survey.partials.information', ['user' => $user])
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if (session('message'))
                <div class="alert alert-{{ session('code') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Atenção!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(['route' => ['surveys.store_step1', 'user' => $user->id], 'role' => 'form', 'class' => 'areyousure']) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="box-title">Dados Sociodemográficos</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-group" id="accordion">
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#step1">
                                                QUESTIONÁRIO
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        @include('dashboard.survey.partials.navigation', ['user' => $user])
                                    </div>
                                </div>
                            </div>
                            <div id="step1" class="panel-collapse collapse in">
                                {{-- @include('dashboard.accompaniment.partials.form') --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            {{ Form::close() }}
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
@stop
