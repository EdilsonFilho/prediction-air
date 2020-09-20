<table class="table">
    <thead class="thead-light">
        <tr>
            <th width="100%">REGISTRO CLÍNICO</th>
        </tr>
    </thead>
</table>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th width="100%">Informações / Atualizado em: {{ $clinicalRecord->updated }}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! $clinicalRecord->text !!}</td>
        </tr>
    </tbody>
</table>
