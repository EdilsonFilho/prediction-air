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
                {{ Form::model($user, ['route' => ['patients.update', $user->id], 'method' => 'PUT', 'class' => 'areyousure']) }}
            @else
                {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'class' => 'areyousure']) }}
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
                        <h6 class="heading-small text-muted mb-4">Informações de acesso ao sistema</h6>
                        @if (!isset($isPatientRecord))
                            <div class="form-group">
                                {{ Form::label('', 'Perfil de acesso: ') }}
                                <strong>{{ Auth::user()->getDescriptionProfile() }}</strong>
                            </div>
                        @endif
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
