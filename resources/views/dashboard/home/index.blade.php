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
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Distribuição sensores no mundo</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
                            </div>

                        </div>
                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

@stop


@push('js')
    <!-- jvectormap  -->
    <script src="{{ asset('frontEnd')}}/plugins/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('frontEnd')}}/plugins/jquery-jvectormap-world-mill-en.js"></script>

    <script>
        /* jVector Maps
        * ------------
        * Create a world map with markers
        */
        $('#world-map-markers').vectorMap({
            map              : 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity     : 0.7,
            hoverColor       : false,
            backgroundColor  : 'transparent',
            regionStyle      : {
            initial      : {
                fill            : 'rgba(210, 214, 222, 1)',
                'fill-opacity'  : 1,
                stroke          : 'none',
                'stroke-width'  : 0,
                'stroke-opacity': 1
            },
            hover        : {
                'fill-opacity': 0.7,
                cursor        : 'pointer'
            },
            selected     : {
                fill: 'yellow'
            },
            selectedHover: {}
            },
            markerStyle      : {
            initial: {
                fill  : '#00a65a',
                stroke: '#111'
            }
            },
            markers          : [  //Cidades 
            { latLng: [51.403007, 7.208546]                },
                { latLng: [52.2688736, 10.5267696]             },
                { latLng: [52.235083, 5.181552]                },
                { latLng: [47.5292, 9.9267]                    },
                { latLng: [47.9704873, 17.7852936 ]            },
                { latLng: [51.4625, 13.526666666667 ]          },
                { latLng: [48.7344444, 19.1128073 ]            },
                { latLng: [46.815277777778, 9.8558333333333 ]  },
                { latLng: [51.1506269, 14.968707 ]             },
                { latLng: [47.041668, 15.433056 ]              },
                { latLng: [50.303207830366, 6.0017362891249 ]  },
                { latLng: [47.178333333333, 14.676666666667 ]  },
                { latLng: [47.102253726073, 9.3375502158063 ]  },
                { latLng: [47.5818083, 12.1724111 ]            },
                { latLng: [47.146155, 5.551039 ]               },
                { latLng: [51.64265556, 15.12780833 ]          },
                { latLng: [54.353333333333, 18.635277777778 ]  },
                { latLng: [52.234504, 6.919494 ]               },
                { latLng: [52.234504, 6.919494 ]               },
                { latLng: [50.467528, 13.412696 ]              },
                { latLng: [51.233652208391, 5.1639788468472]   },
                { latLng: [52.14325, 19.233225 ]               },
                { latLng: [45.14254358, 10.04384767 ]          },
                { latLng: [49.228472, 17.675083 ]              },
                { latLng: [50.80425833, 8.76932778 ]           },
                { latLng: [48.396866667006, 9.9789750003815 ]  },
                { latLng: [53.4708393, 7.4848308 ]             },
                { latLng: [47.871158, 17.273464 ]              },
                { latLng: [48.33472, 16.729445 ]               },
                { latLng: [47.409443, 15.253333 ]              },
                { latLng: [52.334444444444, 14.525833333333 ]  },
                { latLng: [48.302777777778, 14.282777777778 ]  },
                { latLng: [48.984388, 14.465684 ]              },
                { latLng: [45.91279097, 9.49754261 ]           },
                { latLng: [48.4353741, 17.0176474 ]            },
                { latLng: [52.0387126, 23.1445026 ]            },
                { latLng: [ 45.252054653932, 6.397010936049]   },
                { latLng: [51.307778, 13.0025 ]                },

            ]
        });
    </script>


@endpush
