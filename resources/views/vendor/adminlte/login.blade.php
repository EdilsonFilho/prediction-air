@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="container-login-box">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">{{ trans('adminlte::adminlte.login_message') }}</p>
                <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <input type="text" name="phone" class="form-control phone" value="{{ old('phone') }}"
                            placeholder="Telefone">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input type="password" name="password" class="form-control"
                            placeholder="{{ trans('adminlte::adminlte.password') }}">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="icheck-material-green">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">{{ trans('adminlte::adminlte.remember_me') }}</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit"
                                    class="btn btn-danger btn-block">{{ trans('adminlte::adminlte.sign_in') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="auth-links">
                    <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                    class="text-center"
                    >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                    <br>
                    @if (config('adminlte.register_url', 'register'))
                        <a href="{{ url(config('adminlte.register_url', 'register')) }}"
                        class="text-center"
                        >{{ trans('adminlte::adminlte.register_a_new_membership') }}</a>
                    @endif
                </div>
            </div>
            <!-- /.login-box-body -->
        </div><!-- /.login-box -->
    </div>
@stop

@section('adminlte_js')
    @yield('js')
@stop
