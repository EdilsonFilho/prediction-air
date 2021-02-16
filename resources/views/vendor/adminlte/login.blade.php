<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{ Html::style('css/login.css?v=iaecf6dc-ba7d-1269-ab07-d9fda4a111bz') }}
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Log in</h1>
                        <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                            {!! csrf_field() !!}

                            @if (config('seed.username') == 'email')
                                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email">{{ trans('adminlte::adminlte.email') }}</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        placeholder="seu@email.com">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            @else
                                <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <label for="phone">{{ trans('adminlte::adminlte.phone') }}</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                                        placeholder="(**) *****-****">
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            @endif

                            <div class="form-group mb-4 has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password">{{ trans('adminlte::adminlte.password') }}</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="********">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <input name="login" class="btn btn-block login-btn" type="submit" value="Acessar">
                        </form>

                        <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                            class="forgot-password-link">{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>

                        @if (config('adminlte.register_url', 'register'))
                            <p class="login-wrapper-footer-text">
                                <a href="{{ url(config('adminlte.register_url', 'register')) }}" class="text-reset">
                                    {{ trans('adminlte::adminlte.register_a_new_membership') }}
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('images/login.jpg') }}" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
