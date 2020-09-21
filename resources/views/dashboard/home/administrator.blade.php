@extends('adminlte::page')

@section('content_header')
    <h1>
        Seja bem-vindo(a) {{ \Auth::user()->name }}
        <br>
        <small>Esse é o seu resumo global.</small>
    </h1>
@stop

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('code') }} alert-dismissible">
            <h4>Atenção!</h4>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Total de Usuários</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $totalProfessionals }}</h3>
                    <p>Total de Profissionais</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $totalPatients }}</h3>
                    <p>Total de Pacientes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $totalSurveys }}</h3>
                    <p>Total de Questionários Criados</p>
                </div>
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Total de usuários por grupo</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-responsive">
                                <canvas id="chart-area"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Últimos usuários registrados</h3>
                </div>
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        @foreach ($users as $user)
                            <li>
                                @if ($user->getProfilePicture())
                                    <img class="img-circle" src="{{ asset('storage/' . $user->getProfilePicture()) }}" alt="{{ $user->name }}" title="{{ Auth::user()->name }}">
                                @else
                                    <img src="{{ asset('images/user_default.jpg') }}" alt="{{ $user->name }}" title="{{ $user->name }}">
                                @endif
                                <a class="users-list-name">{{ $user->name }}</a>
                                <span class="users-list-date">{{ $user->created }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-footer text-center">
                    <a href="{{ route('users.index') }}" class="uppercase">Visualizar todos</a>
                </div>
            </div>
        </div>
        </div>
    </div>
@stop
@push('js')
<script>
    $(function () {
        var config = {
            type: "pie",
            data: {
                datasets: [{
                    data: [
                        '{{ $totalPatients }}',
                        '{{ $totalProfessionals }}',
                    ],
                    backgroundColor: [
                        '#f36853',
                        '#f39d2a',
                    ],
                    label: "Total de usuários por grupo",
                }],
                labels: ["Pacientes", "Profissionais"],
            },
            options: {
                responsive: true,
            },
        };

        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
    });
</script>
@endpush
