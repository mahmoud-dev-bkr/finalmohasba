<!-- bundle -->
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/notyf.min.js') }}"></script>
<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/tinymce/tiny-init.js') }}"></script> --}}

@yield('script')
<!-- App js -->
{{-- <script src="{{ asset('assets/js/app.min.js') }}"></script> --}}

<script>
    const green = document.querySelectorAll('.js-switch')
    green.forEach(element => {
        new Switchery(element, {
            color: '#26B99A',
            size: 'small',
        });
    });

    const red_switches = document.querySelectorAll('.js-switch-red')
    red_switches.forEach(element => {
        new Switchery(element, {
            size: 'small',
            color: '#de142f'
        });
    });

    //delete
    $('.delete').click(function(e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "@lang('تأكيد الحذف')",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("@lang('نعم')", 'btn btn-success mr-2', function() {
                    that.closest('form').submit();
                }),

                Noty.button("@lang('لا')", 'btn btn-primary mr-2', function() {
                    n.close();
                })
            ]
        });

        n.show();

    }); //end of delete

    $('.update').click(function(e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "@lang('تأكيد انهاء الشهر')",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("@lang('نعم')", 'btn btn-success mr-2', function() {
                    that.closest('form').submit();
                }),

                Noty.button("@lang('لا')", 'btn btn-primary mr-2', function() {
                    n.close();
                })
            ]
        });

        n.show();

    }); //end of delete

    var notyf = new Notyf({
        duration: 4000,
    });

</script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Feb 6, 2025:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
  </script>
@yield('script-bottom')
