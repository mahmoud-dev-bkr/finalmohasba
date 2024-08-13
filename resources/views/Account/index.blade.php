@extends('layouts.vertical', ['title' => 'شجرة الحسابات'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">محاسبة</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="accounts-tree.html">شجرة الحسابات</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5 employers">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Account.create') }}" class="text-light"> إضافة
                    حساب</a> <i class="fa-solid fa-plus"></i></button>
            <button class="btn btn-primary mx-2"> <a href="#" class="text-light"> تصدير الحسابات</a> </button>
            <button class="btn btn-primary mx-2"> <a href="#" class="text-light"> استيراد الحسابات</a> </button>
            <button class="btn btn-primary mx-2"> <a href="#" class="text-light"> تحميل PDF</a> </button>
            <button class="btn btn-primary mx-2"> <a href="#" class="text-light"> ارشيف الحسابات</a></button>
            <button class="btn btn-primary mx-2"> <a href="#" class="text-light"> تعديل سريع</a></button>

        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">شجرة الحسابات</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <div>

                    <div class="row my-5">

                        <div class="col-md-9 ">

                            <div class="d-flex justify-content-sm-center product-form">

                                <input class="form-control w-25 mx-2" type="text" placeholder=" الاسم">
                                <input class="form-control w-25 mx-2" type="text" placeholder=" الرمز">

                                <select class="form-control w-25 h-50" name="" id="">
                                    <optgroup>
                                        <option value=""> المستوي</option>
                                        <option value="">....</option>

                                    </optgroup>
                                </select>

                                <select class="form-control h-50 w-25 mx-3" name="" id="">
                                    <optgroup>
                                        <option value=""> النوع</option>
                                        <option value="">....</option>

                                    </optgroup>
                                </select>

                                <div class="employers d-flex align-content-center justify-content-center">
                                    <button class="btn btn-primary  mx-3"><a href="">بحث<i
                                                class="fa-solid fa-magnifying-glass mx-2"></i></a></button>
                                    <button class="btn btn-dark  mx-3"><a href="">اعادة تعيين<i
                                                class="fa-solid fa-rotate-right mx-2"></i></a></button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3"></div>
                    </div>

                    <div class="table-responsive-lg max-con responsive-scroll">
                        <table class="table  tree-table ">
                            <thead class="cf">
                                <tr>

                                    <th colspan="8"> اسم الحساب </th>
                                    <th > النوع </th>
                                    <th > الوصف </th>
                                    <th > يمكن الدفع والتحصيل بهذا الحساب </th>
                                    <th > الخيارات </th>


                                </tr>
                            </thead>
                            <tbody class="stream-append">
                                @foreach ($Accounts as $item)
                                <tr>


                                    <td class="padleftindex-1" colspan="8">
                                         {{ $item->name }}
                                    </td>
                                    <td class="account-kind">
                                        @if ($item->type == 1)
                                        اصول
                                        @elseif ($item->type == 2)
                                        الالتزمات
                                        @elseif ($item->type == 3)
                                        حقوق الملكية
                                        @elseif ($item->type == 4)
                                        الإيرادات
                                        @elseif ($item->type == 5)
                                        المصاريف
                                        @endif
                                    </td>
                                    <td class="w-25 be-small">{{ $item->Note }}</td>
                                    <td><i class="fa fa-times fa-lg"></i></td>

                                    <td>
                                        <div>
                                            <ul class="d-flex align-content-center justify-content-between">
                                                <li><a class="text-dark" href="account-info.html"><i
                                                            class="fa-solid fa-eye mt-2 mx-2"></i></a></li>
                                                <li>
                                                    <a href="edit-account-info.html" class="text-dark">
                                                        <i class="fa-solid fa-pen-to-square mt-2 mx-3"></i>
                                                    </a></li>
                                                <li>
                                                    <button type="button" class="btn btn-transparent"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-transparent"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                        <i class="fa-solid fa-right-left"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-transparent"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"> إنشاء حساب
                                                        الاصول جديد</h1>
                                                    <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="modal-form">

                                                        <div
                                                            class="d-flex align-content-center justify-content-around my-3">
                                                            <label class="mt-3 ml-5"> نوع الحساب </label>
                                                            <select class="form-control w-50" name="" id="">
                                                                <optgroup>
                                                                    <option value="">1</option>
                                                                    <option value=""> 2</option>

                                                                </optgroup>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5"> الاسم الانجليزي </label><input
                                                                type="text" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5"> الاسم العربي</label><input
                                                                type="text" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 mx-3 ml-5"> الرمز</label><input
                                                                type="text" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 mx-3 ml-5"> الوصف</label><input
                                                                type="text" class="form-control w-50 my-2">
                                                        </div>


                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"> متابعة</button>
                                                    <button type="button" class="btn btn-dark"
                                                        data-bs-dismiss="modal">الغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"> نقل النقد
                                                        ومايعادله</h1>
                                                    <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="modal-form">

                                                        <div
                                                            class="d-flex align-content-center justify-content-around my-3">
                                                            <label class="mt-3 ml-5"> فرع رئيسي </label>
                                                            <select class="form-control w-50" name="" id="">
                                                                <optgroup>
                                                                    <option value="">1</option>
                                                                    <option value=""> 2</option>

                                                                </optgroup>
                                                            </select>
                                                        </div>

                                                        <div
                                                            class="d-flex align-content-center justify-content-around my-3">
                                                            <label class="mt-3 ml-5"> نوع الحساب </label>
                                                            <select class="form-control w-50" name="" id="">
                                                                <optgroup>
                                                                    <option value="">1</option>
                                                                    <option value=""> 2</option>

                                                                </optgroup>
                                                            </select>
                                                        </div>




                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"> متابعة</button>
                                                    <button type="button" class="btn btn-dark"
                                                        data-bs-dismiss="modal">الغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="exampleModal3" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"> حذف </h1>
                                                    <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <h6>هل أنت متأكد من رغبتك في الحذف؟</h6>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"> حذف</button>
                                                    <button type="button" class="btn btn-dark"
                                                        data-bs-dismiss="modal">الغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @if(count($item->children) > 0)
                                        @include('Account.sub_account_list', [
                                            'childs' => $item->children,
                                            'level'  => $item->level + 1
                                        ])
                                    @endif

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL('js/main.js') }}"></script>
<!-- Plugins js-->
<script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script>
    let SuppliersTable = null

    function setSuppliersDatatable() {
        var url = "{{ route('getSuppliersData') }}";
        SuppliersTable = $("#SuppliersTable").DataTable({
            processing: true,
            serverSide: true,
            dom: 'Blfrtip',
            lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
            pageLength: 9,
            sorting: [0, "DESC"],
            ordering: false,
            ajax: url,

            drawCallback: function (settings) {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                //delete
                $('.delete').click(function (e) {

                    var that = $(this)

                    e.preventDefault();

                    var n = new Noty({
                        text: "@lang('تأكيد الحذف')",
                        type: "warning",
                        killer: true,
                        buttons: [
                            Noty.button("@lang('نعم')", 'btn btn-success mr-2',
                                function () {
                                    that.closest('form').submit();
                                }),

                            Noty.button("@lang('لا')", 'btn btn-primary mr-2',
                                function () {
                                    n.close();
                                })
                        ]
                    });

                    n.show();

                }); //end of delete
            },

            language: {
                paginate: {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
            },

            columns: [{
                    data: 'name'
                },
                {
                    data: 'email1'
                },
                {
                    data: 'number1'
                },
                {
                    data: 'Tex_number'
                },
                {
                    data: 'status'
                },
                {
                    data: 'action'
                }

            ],
        });
    }
    $(function () {
        setSuppliersDatatable();
    });

</script>

@endsection
