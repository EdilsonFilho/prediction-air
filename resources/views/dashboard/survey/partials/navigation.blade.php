{{ Form::select('navigation_to',
[
    '' => 'Navegar para...',
    'root' => 'Raiz do Questionário',
    'step1' => 'Dados Sociodemográficos',
], null, ['class' => 'form-control ays-ignore']) }}

@push('js')
    <script>
        $(function() {
            $('select[name="navigation_to"]').change(function() {

                if ($(this).val() == "") {
                    return;
                }

                window.location.href = $('body').data('base-url') + '/navigations/to/' + '{{ $patient->id }}' + '?step=' + $(this).val();

            });
        });
    </script>
@endpush
