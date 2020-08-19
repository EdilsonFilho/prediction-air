@extends('adminlte::page')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif
    {{ Form::open(['route' => ['surveys.store', 'user' => $user], 'role' => 'form', 'style' => 'margin-bottom: 10px']) }}
        {{ Form::submit('INICIAR NOVO QUESTIONÁRIO', ['class' => 'btn btn-custom']) }}
    {{ Form::close() }}
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Lista de questionários p/ o paciente {{ $user->name }}</h4>
        </div>
        <div class="box-body no-padding">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Número</th>
                            <th>Data de criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($surveys as $survey)
                            <tr>
                                <td>{{ $survey->id }}</td>
                                <td>{{ $survey->created }}</td>
                                <td>
                                    <a href="{{ route('surveys.edit', $survey->id) }}" alt="Acessar pesquisa" title="Acessar pesquisa" class="btn btn-default btn-sm"><i class="fa fa-copy"></i></a>
                                    <button alt="Excluir pesquisa" title="Excluir pesquisa" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $survey->id }})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer clearfix">
              {{ ($surveys != null)? $surveys->links(): null }}
        </div>
    </div>
@stop
