@extends('layouts.vertical', ['title' => 'انشاءتسلسل'])
@section('css')
    <style>
        /* select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6"><polygon points="6,6 0,0 12,0" style="fill:%23000"/></svg>') no-repeat;
            padding: 8px 24px 8px 36px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
            background-size: 12px;
            background-position: 8px center;
        } */
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3">الاعدادات</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="employers.html">التسلسل</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>


        <section>
        <form action="{{ route('Saquence.create.post') }}" method="post">
            @csrf
            <div class="container my-3 max-con">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">إنشاء جرد مخزون </h4>
                    </div>
                </div>
                <div class="row  p-3 brdr">
                    <div class="col-md-6 ">
                        <div class="form my-5">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> الموقع <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <select class="form-select w-75 my-2 form-select-lg mb-3" name="site_id" id="site_id">
                                        <option selected>يرجى الاختيار</option>
                                        @foreach ($sites as $site)
                                            <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}

                                </div>

                            </div>
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> الفاتروه<span
                                        class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <select class="form-select w-75 my-2 form-select-lg mb-3" name="type_id">
                                        <option selected>يرجى الاختيار</option>
                                        <option value="1"> فواتير مبيعات</option>
                                        <option value="2">عروض واسعار </option>
                                        <option value="3">سندات العميل </option>
                                        <option value="4">اشعار دائن </option>
                                        <option value="5">فاتورة مشتريات </option>
                                        <option value="6">امر شراء </option>
                                        <option value="7">سندات الموردين </option>
                                        <option value="8">اشعار مدين </option>
                                        <option value="9">انشاء خدم </option>
                                    </select>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> الكود<span
                                        class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">


                                    <input type="texe" class="form-control w-75 my-2" name="code">  </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 pe-5 ">
                        <div class="mb-3">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5 col-lg-2"> رقم <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <input type="texe" class="form-control w-75 my-2" name="num">
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5 col-lg-2"> البدية <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <input type="texe" class="form-control w-75 my-2" name="start">
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5 col-lg-2"> النوع <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <input type="texe" class="form-control w-75 my-2" name="type">
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3 ">

                        </div>
                    </div>
                    <div class="row  pb-4 ">

                    </div>


                    <div class="mt-5"
                        style="
                    width: 90%;
                    margin: 0 auto;
                    ">
                        <button class="btn btn-primary submit" type="submit">حفظ و موافقه</button>

                    </div>
                </div>
            </div>
        </form>
    </section>

           {{-- <form action="{{ route('Saquence.create.post') }}" method="post">
                        @csrf
                        <input type="text">
                    </form> --}}
    </div>

@endsection
@section('script')
<!-- Vendor js -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL('js/main.js') }}"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json"></script>
<!-- Plugins js-->
<script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script>
    let PurchaseInvoicesTable = null

    function setPurchaseInvoicesDatatable() {
        var url = "{{ route('getrolesData') }}";
        // alert(url)
        PurchaseInvoicesTable = $("#PurchaseInvoicesTable").DataTable({
            processing: true,
            serverSide: true,
            dom: 'Blfrtip',
            lengthMenu: [25, 50, 75, 100, 150, 200, 300, 500],
            pageLength: 25,
            sorting: [0, "DESC"],
            ordering: false,
            ajax: url,
            // buttons : ['excel', 'print', 'reset', 'reload'],
            // language: [
            //           'url' => url('/vendor/datatables/arabic.json')
            // ],
            drawCallback: function(settings) {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                //delete
                $('.delete').click(function(e) {

                    var that = $(this)

                    e.preventDefault();

                    var n = new Noty({
                        text: "@lang('تأكيد الحذف')",
                        type: "warning",
                        killer: true,
                        buttons: [
                            Noty.button("@lang('نعم')", 'btn btn-success mr-2',
                                function() {
                                    that.closest('form').submit();
                                }),

                            Noty.button("@lang('لا')", 'btn btn-primary mr-2',
                                function() {
                                    n.close();
                                })
                        ]
                    });

                    n.show();

                }); //end of delete
            },


            // language: {
            paginate: {
                "previous": "<i class='mdi mdi-chevron-left'>",
                "next": "<i class='mdi mdi-chevron-right'>"
            },
            // },

            columns: [{
                    data: 'name'
                },

                {
                    data: 'action',

                }

            ],
        });
    }

    $(function() {
        setPurchaseInvoicesDatatable();
    });
    $(document).ready(function() {
        $('#div-toggle').hide();
        $('#flexCheckDefault1').change(function() {
            if ($(this).is(':checked')) {
                $('#div-toggle').show();
            } else {
                $('#div-toggle').hide();
            }
        });
    });

    function submit_user() {
        var descount_limit = document.getElementById('descount_limit').value;
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var site_id = document.getElementById('site_id').value;
        var account_id = document.getElementById('account_id').value;
        var pos = document.getElementById('flexCheckDefault1').checked ? 1 : 0; // Use 1 or 0 based on your needs
        var role_id = document.getElementById('role_id').value;
        var password = document.getElementById('password').value;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('sub.Ajax.user') }}",
            data: {
                descount_limit: descount_limit,
                _token: '{{ csrf_token() }}',
                name_en: name,
                email: email,
                role_id: role_id,
                pos: pos,
                account_id: account_id,
                site_id: site_id,
                password: password,
            },
            success: function(data) {
                $('#AddUserModal').modal('hide');
                alert("تم الحفظ");

            }
        });
    }
</script>

@endsection
