@extends('layouts.vertical', ['title' => 'الاعدادات'])

@section('css')
    <style>
        .tox-tinymce {
            min-height: 1000px !important;
            max-height: 900px !important;
        }
    </style>
@endsection
@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label for="observations">
                    {{ __('basic.observations') }}
                </label>
                <textarea rows="7" class="form-control tinymce" name="description" id="teplate-view"></textarea>
            </div>
        </div>
        <div class="col-4">
            <div class="header"> {{ __('basic.actions') }} </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Templates</label>
                <select name="" id="templates" class="form-control" onchange="changeTemplate(this.value)">
                    <option value="">{{ __('basic.select') }}</option>
                    <option value="1">
                        template 1
                    </option>
                    <option value="2">
                        template 2
                    </option>
                </select>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json"></script>
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Croppie/croppie.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#teplate-view',
            height: 500,
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
        });

        function changeTemplate(id) {
            $.ajax({
                url: "{{ route('settings.templates.sales') }}",
                type: 'GET',
                data: {
                    template: id
                },
                success: function(result) {
                    if (result.success) {
                        tinymce.get('teplate-view').setContent(result.content);
                    } else {
                        console.error(result.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching template:', error);
                }
            });
        }
    </script>
@endsection
