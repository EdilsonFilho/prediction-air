<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>
    </div>
</div>

@if (isset($showPasswordTip) && $showPasswordTip)
    <h6 class="heading-small text-muted mb-4">Deseja mudar a senha? Preencha os campos Senha e Confirmação de senha logo abaixo. Não esqueça de clicar em Salvar.</h6>
@endif

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('password', 'Senha') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('password', 'Confirmação de senha') }}
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
        </div>
    </div>
</div>

<h6 class="heading-small text-muted mb-4">Informações básicas</h6>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('date_birth', 'Data de nascimento') }}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {{ Form::text('date_birth', null, array('class' => 'form-control pull-right datepicker')) }}
            </div>
        </div>
    </div>
</div>

<h6 class="heading-small text-muted mb-4">Informações complementares</h6>

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('phone', 'Telefone(s)') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('address', 'Endereço') }}
            {{ Form::text('address', null, array('class' => 'form-control')) }}
        </div>
    </div>
</div>
