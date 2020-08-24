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
            <h4 class="box-title">Lista de questionários do(a) paciente {{ $user->name }}</h4>
        </div>
        <div class="box-body no-padding">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Data de criação</th>
                            <th>Dados Sociodemográficos</th>
                            <th>Adesão à Medicação</th>
                            <th>Escala de Demência</th>
                            <th>Escala de Suporte Social</th>
                            <th>Inventário Breve de Sintomas (BSI)</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($surveys as $survey)
                            <tr>
                                <td>{{ $survey->created }}</td>
                                <td>{!! $survey->getStatuStep1() !!}</td>
                                <td>{!! $survey->getStatuStep2() !!}</td>
                                <td>{!! $survey->getStatuStep3() !!}</td>
                                <td>{!! $survey->getStatuStep4() !!}</td>
                                <td>{!! $survey->getStatuStep5() !!}</td>
                                <td>
                                    <a href="{{ route('surveys.edit', $survey->id) }}" alt="Acessar questionário" title="Acessar questionário" class="btn btn-default btn-sm"><i class="fa fa-copy"></i></a>
                                    <button alt="Excluir questionário" title="Excluir questionário" class="btn btn-danger btn-sm"   onclick="confirmDelete({{ $survey->id }}, '{{ route('surveys.destroy', ['survey' => $survey]) }}')"><i class="fa fa-trash"></i></button>
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
