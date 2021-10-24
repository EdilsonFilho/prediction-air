@extends('adminlte::page')

@section('content_header')
    <h1>
        Seja bem-vindo(a) {{ \Auth::user()->name }}
        <small>Acompanhe a qualidade do ar em sua localidade</small>
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
        <div class="col-md-10">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Distribuição sensores no mundo</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <div class="pad">
                                <!-- Map will be created here -->
                                <div id="world-map-markers" style="height: 670px;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-2 col-sm-2">
                            <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                <div class="description-block margin-bottom">
                                    <div class="sparkbar pad" data-color="#fff"></div>
                                    <h5 class="description-header">{{ (new DateTime())->format('d/m/Y') }}</h5>
                                    <span class="description-text">Última Atualização</span>
                                </div>
                                <div class="description-block margin-bottom">
                                    <div class="sparkbar pad" data-color="#fff"></div>
                                    <h5 class="description-header">712</h5>
                                    <span class="description-text">Número de sensores</span>
                                </div>
                                <div class="description-block margin-bottom">
                                    <div class="sparkbar pad" data-color="#fff"></div>
                                    <h5 class="description-header">80</h5>
                                    <span class="description-text">Paises</span>
                                </div>
                            </div>

                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Minha Localidade.</h3>
                    <h5 class="text-muted">Coloque as informações solicitadas</h5>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('home.prediction') }}" method="GET">
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('lat', 'Latitude') }}
                            {{ Form::text('lat', null, ['class' => 'form-control', 'placeholder' => 'Exemplo: 52.2688736']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('lon', 'Longitude') }}
                            {{ Form::text('lon', null, ['class' => 'form-control', 'placeholder' => 'Exemplo: 7.208546']) }}
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success fileinput-button" style="margin-bottom: 20px;">
                                <i class="glyphicon glyphicon-search"></i>
                                <span>Pesquisar</span>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>

@stop
@push('js')
    <script>
        $("#world-map-markers").vectorMap({
            map: "world_mill_en",
            normalizeFunction: "polynomial",
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: "transparent",
            regionStyle: {
                initial: {
                    fill: "rgba(210, 214, 222, 1)",
                    "fill-opacity": 1,
                    stroke: "none",
                    "stroke-width": 0,
                    "stroke-opacity": 1,
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: "pointer",
                },
                selected: {
                    fill: "yellow",
                },
                selectedHover: {},
            },
            markerStyle: {
                initial: {
                    fill: "#00a65a",
                    stroke: "#111",
                },
            },
            markers: getMarkers(),
        });

        function getMarkers() {
            var markers = [];

            @foreach($sensors as $sensor)
                markers.push({
                    latLng: [{{ $sensor->lat }}, {{ $sensor->lon }}],
                    name: "{{ $sensor->station_name }}",
                    style: {
                        fill: "{{ \App\Models\Sensor::getColor($sensor->lat, $sensor->lon) }}",
                        stroke: "#111",
                    },
                });
            @endforeach

            return markers;
        }

        function getLocation() {
            if (navigator.geolocation) {
                let coords = navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Não foi possível obter sua lat e lng.");
            }
        }

        function showPosition(position) {
            $("#lat").val(position.coords.latitude);
            $("#lon").val(position.coords.longitude);
        }

        $(document).ready(function() {
            getLocation();
        });
    </script>
@endpush
