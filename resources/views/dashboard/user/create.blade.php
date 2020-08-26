@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6">
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
            @isset($isPatientRecord)
                {{ Form::open(['route' => 'patients.store', 'role' => 'form', 'class' => 'areyousure']) }}
            @else
                {{ Form::open(['route' => 'users.store', 'role' => 'form', 'class' => 'areyousure']) }}
            @endisset
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-top: 10px;">
                            @isset($title)
                                {{ $title }}
                            @else
                                Informações do usuário
                            @endisset
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h6 class="heading-small text-muted mb-4">
                            Atenção!
                            <br>
                            <br>
                            Os campos Telefone, Senha, Confirmação de senha e Nome são campos obrigatórios.
                        </h6>
                        @include('dashboard.user.partials.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
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
