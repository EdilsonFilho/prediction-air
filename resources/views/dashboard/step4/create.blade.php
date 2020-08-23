@extends('adminlte::page')

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
            {{ Form::open(['route' => ['step4s.store', 'survey' => $survey], 'role' => 'form', 'class' => 'areyousure']) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="box-title">Paciente: {{ $survey->patient->name }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-group" id="accordion">
                        @include('dashboard.step4.partials.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        {{ Form::submit('Enviar respostas', ['class' => 'btn btn-custom']) }}
                    </div>
                </div>
                <!-- /.box -->
            {{ Form::close() }}
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
@stop
