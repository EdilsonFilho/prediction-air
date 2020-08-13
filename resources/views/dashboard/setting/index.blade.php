@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-12 col-lg-4">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box box-solid box-body box-profile">
                    @if (Auth::user()->getProfilePicture())
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/' . Auth::user()->getProfilePicture()) }}" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('images/user_default.jpg') }}" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                    @endif
                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                    {{-- <p class="text-muted text-center">DEPARTAMENTO</p> --}}
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>E-mail</b> <a class="pull-right">{{ Auth::user()->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Telefone(s)</b> <a class="pull-right">{{ Auth::user()->phone }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Endereço</b> <a class="pull-right">{{ Auth::user()->adress }}</a>
                        </li>
                    </ul>
                    <div class="row">
                        {{ Form::model(Auth::user(), ['route' => ['image.upload', Auth::user()->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'id' => 'frmUploadImage']) }}
                            {{ Form::hidden('model', 'User') }}
                            {{ Form::hidden('userId', Auth::user()->id) }}
                            {{ Form::hidden('highlight', 1) }}
                            <div class="custom-file">
                                <input type="file" style="display: none" class="custom-file-input" onchange="uploadImage('#frmUploadImage')" name="file" id="fileUser" accept="image/x-png,image/jpeg">
                                <div class="col-md-9">
                                    <label class="btn btn-primary btn-block" for="fileUser" data-toggle="tooltip" data-placement="left" title="Resolução ideal: 800x800">Escolher imagem do perfil</label>
                                </div>
                                <div class="col-md-3">
                                    @if (Auth::user()->getIdFromProfilePicture())
                                        <label class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="right" title="Excluir imagem" onclick="confirmDelete({{ Auth::user()->id }}, '{{ route('image.destroy', ['id' => Auth::user()->getIdFromProfilePicture()]) }}', 'User')"><i class="fa fa-trash"></i></label>
                                    @endif
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-8 col-sm-12 col-lg-8">
            @if (session('message'))
                <div class="alert alert-{{ session('code') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(array('route' => 'settings.choose_cities', 'role' => 'form', 'class' => 'areyousure')) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-top: 10px;">Informações do perfil</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h6 class="heading-small text-muted mb-4">Lista dos Municípios</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="city_id[]">Escolha o(s) município(s) <i class="fa fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Ao selecionar o(s) município(s) as notificações do sistema serão filtradas."></i></label>
                                    {{ Form::select('city_id[]', [], null, ['class' => 'form-control', 'multiple' => 'multiple']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{ Form::submit('Salvar dados', ['class' => 'btn btn-danger']) }}
                    </div>
                </div>
            {{ Form::close() }}

            {{ Form::model(Auth::user(), ['route' => ['settings.update', Auth::user()->id], 'method' => 'PUT', 'class' => 'areyousure']) }}
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-top: 10px;">Informações do perfil</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h6 class="heading-small text-muted mb-4">Informações de acesso ao sistema</h6>
                        <div class="form-group">
                            {{ Form::label('', 'Perfil de acesso: ') }}
                            <strong>{{ Auth::user()->getDescriptionProfile() }}</strong>
                            
                            <br>
                            
                            {{ Form::label('', 'Setor: ') }}
                            <strong>{{ isset(Auth::user()->department) ? Auth::user()->department->name : null }}</strong>
                        </div>
                        @include('dashboard.user.partials.form', [
                            'showPasswordTip' => true
                        ])
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        {{ Form::submit('Salvar dados', ['class' => 'btn btn-danger']) }}
                    </div>
                </div>
                <!-- /.box -->
            {{ Form::close() }}
        </div>
        <!-- /.col-md-8 -->
    </div>
    <!-- /.row -->

    @php
        
        // dd(unserialize(\Auth::user()->settings(\App\Enums\SettingType::CitiesList)));
    @endphp
@stop
@section('js')
    <script>
        $(function() {
            runSelect2($('select[name="city_id[]"]'), '{{ route("cities.find") }}', 'cities');

            @if (\Auth::user()->settings(\App\Enums\SettingType::CitiesList))
            
                @foreach(explode(',', \Auth::user()->settings(\App\Enums\SettingType::CitiesList)) as $city)
                    
                    var newOption = new Option('{{ explode(':', $city)[0] }}', {{ explode(':', $city)[1] }}, true, true);
                    
                    $('select[name="city_id[]"]').append(newOption).trigger('change');
            
                @endforeach
            
            @endif
        });
    </script>
@endsection