@extends('layouts.vertical', ['title' => 'ادارة المستخدمين'])
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
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="employers.html">المستخدمين</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>

        <section>
            <div class="d-flex justify-content-sm-end mx-2">
                <button class="btn btn-secondary btn-sm">
                    إضافة مستخدم
                    <i class="fa fa-lock"></i>
                </button>
                <a class="btn btn-primary btn-sm mx-2" href="{{ route('roles.index') }}">
                     المنصب
                </a>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddUserModal"> إضافة مستخدم
                    الدعم</button>
            </div>
            <div class="container my-3">
                <div class="row">
                    @if (session()->has('message'))
                        {{ dd('vbnm') }}
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="col-md-12 hi-mohasba">

                        <h4 class="mx-4"> المستخدمين</h4>
                    </div>

                </div>
                <div class="row bg-light pb-4 brdr">

                    <div class="col-md-12 d-flex align-content-center justify-content-start ">

                        <div class="w-100">

                    


                            <div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog"
                                aria-labelledby="AddUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body modal-body-container support-user-container p-5 rounded"
                                            style="background:white;">
                                            <h3 class="modal_header">إنشاء مستخدم الدعم</h3>
                                            <form class="pt-5" id="" action="#" accept-charset="UTF-8"
                                                method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>الاسم</label>
                                                    </div>
                                                    <div class="col">
                                                        <input value="" autofocus="autofocus" type="text"
                                                            name="name" id="name" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>رقم الهاتف</label>
                                                    </div>
                                                    <div class="col">
                                                        <input value="" autofocus="autofocus" type="text"
                                                            name="phone" id="phone" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>البريد الإلكتروني</label>
                                                    </div>
                                                    <div class="col">
                                                        <input value="" autofocus="autofocus" type="text"
                                                            name="email" id="email" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>كلمة السر</label>
                                                    </div>
                                                    <div class="col">
                                                        <input value="" autofocus="autofocus" type="password"
                                                            name="password" id="password" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>المنصب</label>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <select name="role_id" id="role_id"
                                                                    class="form-control" required="required">

                                                                    @foreach ($roles as $role)
                                                                        <option value="{{ $role->id }}">
                                                                            {{ $role->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>المواقع</label>
                                                    </div>
                                                    <div class="col">
                                                        <select name="site_id" id="site_id" class="form-control"
                                                            required="required" onchange="changeSite(this.value);">
                                                            <option value="0">
                                                                كل المواقع
                                                            </option>
                                                            <option value="1">
                                                                تحديد المواقع المسموح بها
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 " id="sites" style="display: none;">
                                                    <div class="col-6">
                                                        <label>المواقع المسموح بها</label>
                                                    </div>
                                                    <div class="col-6 row">
                                                        @foreach ($sites as $site)
                                                            <div class="col-12 d-flex gap-3">

                                                                <input type="checkbox" name="sites[]"
                                                                    value="{{ $site->id }}">{{ $site->name_ar }}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>الحسابات المسموح الدفع والاستلام بها</label>
                                                    </div>
                                                    <div class="col">
                                                        <select name="account_id" id="account_id" class="form-control"
                                                            data-live-search="true" placeholder="يرجى اختيار الحسابات">
                                                            <option value="0">كل الحسابات مسموح بها</option>
                                                            @foreach ($accounts as $account)
                                                                <option value="{{ $account->id }}">{{ $account->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>الحد الأعلى لنسبة الخصم</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="descount_limit" id="descount_limit"
                                                            value="" placeholder="%" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form_row default_location d-none">
                                                    <div class="form_name fw-500" data-toggle="tooltip"
                                                        title="الموقع الافتراضي للفواتير" data-placement="bottom">
                                                        الموقع الافتراضي للفواتير
                                                    </div>
                                                    <div class="form_field pro-select select-unit">
                                                        <select name="" id="inv_default_location"
                                                            class="form-control" title="اختر موقع"
                                                            data-live-search="true">
                                                            <option value>اختر موقع</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>مستخدم تطبيق نقاط البيع</label>
                                                    </div>
                                                    <div class="col" dir="rtl">
                                                        <input class="form-check-input form-check-input-lg" value="on"
                                                            type="checkbox" name="pos" id="flexCheckDefault1">
                                                    </div>
                                                </div>
                                                <div class=" p-5 rounded pb-4 brdr mt-3" style="background:white;"
                                                    id="div-toggle">
                                                    <div class="fw-500">
                                                        <h5 class="text-primary border-bottom pb-2">
                                                            القيم للحقول الإضافية في فواتير نقاط البيع للمستخدم
                                                        </h5>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div class="col">
                                                            <label id="">يمكنه استخدام خاصية الدفع لاحقًا</label>
                                                        </div>
                                                        <div class="col" dir="rtl">
                                                            <input class="form-check-input form-check-input-lg"
                                                                type="checkbox" value="" id="flexCheckDefault1">
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div class="col">
                                                            <label>موقع نقاط البيع</label>
                                                        </div>
                                                        <div class="col">
                                                            <select name="" id="" class="form-control">
                                                                <option>اختر الموقع</option>
                                                                <option value="1">المركز الرئيسي</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer pt-3 row">
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <button type="button" onclick="submit_user()"
                                                            class="btn btn-primary"> حفظ</button>
                                                        <label class="btn btn-dark mx-1" style="width:45%;"
                                                            data-dismiss="modal">إلغاء</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
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
            var url = "{{ route('getusersData') }}";
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
                        data: 'name_en'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'Tel_1'
                    },
                    {
                        data: 'role_id'
                    },
                    {
                        data: 'pos'
                    },
                    {
                        data: 'isActive'
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

        // function submit_user() {
        //     var descount_limit = document.getElementById('descount_limit').value;
        //     var name = document.getElementById('name').value;
        //     var email = document.getElementById('email').value;
        //     var site_id = document.getElementById('site_id').value;
        //     var account_id = document.getElementById('account_id').value;
        //     var pos = document.getElementById('flexCheckDefault1').checked ? 1 : 0; // Use 1 or 0 based on your needs
        //     var role_id = document.getElementById('role_id').value;
        //     var password = document.getElementById('password').value;


        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         type: 'POST',
        //         url: "{{ route('sub.Ajax.user') }}",
        //         data: {
        //             descount_limit: descount_limit,
        //             _token: '{{ csrf_token() }}',
        //             name_en: name,
        //             email: email,
        //             role_id: role_id,
        //             pos: pos,
        //             account_id: account_id,
        //             site_id: site_id,
        //             password: password,
        //         },
        //         success: function(data) {
        //             $('#AddUserModal').modal('hide');
        //             alert("تم الحفظ");

        //         }
        //     });
        // }
        function submit_user() {
            var descount_limit = document.getElementById('descount_limit').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var site_id = document.getElementById('site_id').value;
            var account_id = document.getElementById('account_id').value;
            var pos = document.getElementById('flexCheckDefault1').checked ? 1 : 0; // Use 1 or 0 based on your needs
            var role_id = document.getElementById('role_id').value;
            var password = document.getElementById('password').value;

            // Collect selected sites
            var sites = [];
            $('input[name="sites[]"]:checked').each(function() {
                sites.push($(this).val());
            });

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
                    sites: sites // Add the sites array to the data payload
                },
                success: function(data) {
                    $('#AddUserModal').modal('hide');
                    // alert("تم الحفظ");
                    // Optionally, refresh the DataTable to reflect the new user
                    PurchaseInvoicesTable.ajax.reload();
                },
                error: function(xhr, status, error) {
                    // console.error('Error:', xhr.responseText);
                    alert('حدث خطأ أثناء الحفظ. يرجى المحاولة مرة أخرى.');
                }
            });
        }

        function changeSite(id) {
           var site = document.getElementById('sites')
            if (id == 0) {
               $('#sites').hide();

            } else {
                $('#sites').show();
            }
        }
    </script>
@endsection
