@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (Auth::user()->settings(\App\Enums\SettingType::CollapseSidebar) ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle fa5" data-toggle="push-menu" role="button" onclick="changeMenu()">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li>
                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                            @else
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                                <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                    @if(config('adminlte.logout_method'))
                                        {{ method_field(config('adminlte.logout_method')) }}
                                    @endif
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        </li>
                        @if(config('adminlte.right_sidebar') and (config('adminlte.layout') != 'top-nav'))
                        <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar" @if(!config('adminlte.right_sidebar_slide')) data-controlsidebar-slide="false" @endif>
                                    <i class="{{config('adminlte.right_sidebar_icon')}}"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <div class="user-panel">
                    <div class="pull-left image">
                        @if (Auth::user()->getProfilePicture())
                            <img class="img-circle" src="{{ asset('storage/' . Auth::user()->getProfilePicture()) }}" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                        @else
                            <img src="{{ asset('images/user_default.jpg') }}" class="img-circle" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
                        @endif
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="{{ route('settings.index') }}"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

        @hasSection('footer')
        <footer class="main-footer">
            @yield('footer')
            {{-- <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>
                Copyright &copy; 2020-{{ date('Y') }} <a href="#">AdminLTE</a>.
            </strong>
            Developed by <a href="mailto:f.ronaldaraujo@gmail.com">Ronald Araújo</a>. All rights reserved. --}}
        </footer>
        @endif

        @if(config('adminlte.right_sidebar') and (config('adminlte.layout') != 'top-nav'))
            <aside class="control-sidebar control-sidebar-{{config('adminlte.right_sidebar_theme')}}">
                @yield('right-sidebar')
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        @endif

    </div>
    <!-- ./wrapper -->

    {{ Form::open(['method' => 'DELETE']) }}
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-center modal-notification modal-dialog-centered modal-" role="document">
                <div class="modal-content bg-gradient-danger">
                    <div class="modal-body">
                        <div class="py-3 text-center">
                            <i class="fa fa-bell fa-3x"></i>
                            <h4 class="heading mt-4">Deseja excluir este item?</h4>
                            <p>Atenção! Essa ação não poderá ser desfeita.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Sim, quero excluir!</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}

    <div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="modal-alert" aria-hidden="true">
        <div class="modal-dialog modal-center modal-notification modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="fa fa-bell fa-3x"></i>
                        <h4 class="heading mt-4 title"></h4>
                        <p class="message font-18"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-name" data-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
