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
                        <h1 class="login-title">{{ trans('adminlte::adminlte.password_reset_message') }}</h1>
                        <form action="{{ url(config('adminlte.password_email_url', 'password/email')) }}" method="post">
                            {!! csrf_field() !!}

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

                            <input class="btn btn-block login-btn" type="submit"
                                value="{{ trans('adminlte::adminlte.send_password_reset_link') }}">
                        </form>

                        <a href="{{ route('login') }}"
                            class="forgot-password-link">Voltar para tela de login</a>
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
