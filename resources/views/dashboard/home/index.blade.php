@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Seja bem-vindo(a) {{ \Auth::user()->name }}
        <br>
        <small>Esse é o seu resumo global</small>
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

        @if (\Auth::user()->profile == config('profile.administrator'))
            <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
                <div class="small-box bg-custom">
                    <div class="inner">
                        <h3>{{ $amountUsers }}</h3>
                        <p>Qtd. de Usuários</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
                <div class="small-box bg-custom">
                    <div class="inner">
                        <h3>{{ $amountProfessionals }}</h3>
                        <p>Qtd. de Profissionais</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        @endif

        @if (
            \Auth::user()->profile == config('profile.administrator') ||
            \Auth::user()->profile == config('profile.professional')
        )
            <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
                <div class="small-box bg-custom">
                    <div class="inner">
                        <h3>{{ $amountPatients }}</h3>
                        <p>Qtd. de Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-3 col-md-12">
                <div class="small-box bg-custom">
                    <div class="inner">
                        <h3>{{ $amountSurveys }}</h3>
                        <p>Qtd. de Questionários Criados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-copy"></i>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @if (\Auth::user()->profile == config('profile.administrator'))
        <div class="row">
            <div class="col-md-6">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Grupo de usuários</h3>
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
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        @push('js')
            <script>
                $(function () {
                    var config = {
                        type: "pie",
                        data: {
                            datasets: [{
                                data: [
                                    '{{ $amountPatients }}',
                                    '{{ $amountProfessionals }}',
                                ],
                                backgroundColor: [
                                    '#f36853',
                                    '#f39d2a',
                                ],
                                label: "Porcentagem de usuários",
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
    @endif
@stop
