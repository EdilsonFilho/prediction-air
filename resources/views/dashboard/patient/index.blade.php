@extends('adminlte::page')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('patients.create') }}" class="btn btn-custom btn-sm" style="margin-bottom: 10px;">NOVO PACIENTE</a>
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Lista de pacientes</h4>
            <div class="pull-right col-md-4" style="padding: 0px;">
                {{ Form::open(['method' => 'GET', 'route' => ['patients.index'], 'style' => 'display: inline']) }}
                    <div class="input-group input-group-sm">
                        <input value="{{ $s }}" type="text" class="form-control input-sm" name="s" placeholder="Digite o trecho do nome do paciente p/ pesquisar...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-custom btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="box-body no-padding">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Data de cadastro</th>
                            <th>Último acesso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($patients as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->created }}</td>
                                <td>{{ $patient->last_login_at }}</td>
                                <td>
                                    <a href="{{ route('patients.edit', $patient->id) }}" alt="Editar" title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                    <button alt="Excluir" title="Excluir" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $patient->id }})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer clearfix">
              {{ ($patients != null)? $patients->links(): null }}
        </div>
    </div>
@stop
