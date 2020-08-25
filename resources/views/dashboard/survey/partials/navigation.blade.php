{{ Form::select('navigation_to',
[
    '' => 'Navegar para...',
    'root' => 'Raiz do Questionário',
    'step1' => 'Dados Sociodemográficos',
    'step2' => 'Adesão à Medicação',
    'step3' => 'Escala de Demência',
    'step4' => 'Escala de Suporte Social',
    'step5' => 'Inventário Breve de Sintomas (BSI)',
], null, ['class' => 'form-control ays-ignore']) }}

@push('js')
<script>
    $(function () {
        $('select[name="navigation_to"]').change(function () {

            if ($(this).val() == "") {
                return;
            }

            window.location.href = $('body').data('base-url') + '/navigations/to/' +
                '{{ $survey->id }}' + '?step=' + $(this).val();

        });
    });

</script>
@endpush
