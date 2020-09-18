{{ Form::open(['route' => ['interventions.store', 'survey' => $survey], 'role' => 'form', 'class' => 'areyousure']) }}
    {{ Form::hidden('type', $type) }}
    {{ Form::hidden('step_id', $stepId) }}
    {{ Form::hidden('survey_id', $survey->id) }}
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-8">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#intervention">
                        INTERVAÇÃO
                    </a>
                </h4>
            </div>
            <div class="col-md-4 text-right">
                {{ Form::submit('SALVAR DADOS DA INTERVENÇÃO', ['class' => 'btn btn-danger btn-sm']) }}
            </div>
        </div>
    </div>
    <div id="intervention" class="panel-collapse collapse in">
        <div class="box-body no-padding">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::textarea('text', $text, array('class' => 'form-control', 'rows' => 14)) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ Form::close() }}

@push('js')
    <script>
        $(function () {
            $('textarea').wysihtml5({
                toolbar: {
                    "link": false,
                    "image": false,
                    "blockquote": false
                }
            });
        })
    </script>
@endpush
