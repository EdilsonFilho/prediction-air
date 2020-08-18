<h1>
    Questionário - {{ $user->name }}

    @if (isset($isRoot) && $isRoot)
        <br>
        <small>Selecione a seção para inserir novas informações</small>
    @endif
</h1>
