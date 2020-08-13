<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="profile">Perfil de acesso</label>
            {{ Form::select('profile', 
                \App\Models\User::getProfiles(), null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            <label for="department_id">Setor (Lotação do funcionário)</label>
            {{ Form::select('department_id', $departments, null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>