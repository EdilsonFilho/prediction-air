<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="profile">Perfil de acesso</label>
            {{ Form::select('profile',
                \App\Models\User::getProfiles(), null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
