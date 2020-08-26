@extends('adminlte::page')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('users.create') }}" class="btn btn-custom btn-sm" style="margin-bottom: 10px;">NOVO USUÁRIO</a>
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Lista de usuários</h4>
            <div class="pull-right col-md-4" style="padding: 0px;">
                {{ Form::open(['method' => 'GET', 'route' => ['users.index'], 'style' => 'display: inline']) }}
                    <div class="input-group input-group-sm">
                        <input value="{{ $s }}" type="text" class="form-control input-sm" name="s" placeholder="Digite o trecho do nome do usuário p/ pesquisar...">
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
                            <th>Perfil de acesso</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Data de cadastro</th>
                            <th>Último acesso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->getDescriptionProfile() }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created }}</td>
                                <td>{{ $user->last_login_at }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" alt="Editar" title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                    <button alt="Excluir" title="Excluir" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer clearfix">
              {{ ($users != null)? $users->links(): null }}
        </div>
    </div>
@stop
