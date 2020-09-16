@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-12 col-lg-8">
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
            {{ Form::model($clinicalRecord, ['route' => ['clinical-records.update', $clinicalRecord->id], 'method' => 'PUT', 'class' => 'areyousure']) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-top: 10px;">
                            Informações clínicas do usuário <strong>{{ $user->name }}</strong>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('dashboard.clinical_record.partials.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('surveys.index', $user->id) }}" alt="Voltar ao questionário" title="Voltar ao questionário" class="btn btn-default">
                            Voltar ao questionário
                        </a>
                        {{ Form::submit('Salvar dados', ['class' => 'btn btn-custom']) }}
                    </div>
                </div>
                <!-- /.box -->
            {{ Form::close() }}
        </div>
        <!-- /.col-md-8 -->
    </div>
    <!-- /.row -->
@stop
