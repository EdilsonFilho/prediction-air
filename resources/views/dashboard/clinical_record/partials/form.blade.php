<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::textarea('text', null, array('class' => 'form-control', 'rows' => 24)) }}
        </div>
    </div>
</div>
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
