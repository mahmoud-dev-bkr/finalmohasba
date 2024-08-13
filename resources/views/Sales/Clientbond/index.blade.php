@extends('layouts.vertical', ['title' => 'سندات العميل'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">سندات العميل</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            @can('create_Clientbond')
            <button class="btn btn-primary mx-2">
                <a href="{{ route('Clientbond.create') }}" class="text-light">اضافة سندات العميل</a>
                <i class="fa-solid fa-plus"></i>
            </button>
            @endcan
            <button class="btn btn-primary mx-2">
                <a href="{{ route('ExportClientbond') }}" class="text-light">تصدير </a>
                <i class="fa-solid fa-plus"></i>
            </button>
            <!--<button class="btn btn-primary mx-2">-->
            <!--    <a href="{{ route('ExportClientbond') }}" class="text-light">استيراد قائمة سندات العميل</a>-->
            <!--    <i class="fa-solid fa-right-to-bracket mx-1"></i>-->
            <!--</button>-->

        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">سندات العميل</h4>
                </div>
            </div>
            @if (count($Clientbond) > 0)
            <!--<div class="row pb-4 brdr">-->
                
                <section class="row pb-4 brdr">
                
                <div class="container my-5">
                    <div class="row">

                        <div class="col-md-10 ">

                            <div class="d-flex justify-content-sm-center PurchaseInvoices-form">

                                <input type="text" class="form-control w-30 mx-2 code" placeholder="المرجع">
                                <input type="text" class="form-control w-30 mx-2 name" placeholder="اسم العميل">
                                <select class="form-control select-fillter w-100 status" name="" id="">
                                    <optgroup>
                                        <option value="">حالة الفاتورة</option>
                                        <option value="3">مستعمل</option>
                                        <option value="2"> مستعمل جزئي </option>
                                        <option value="1"> غير مستعمل </option>

                                    </optgroup>
                                </select>
                            </div>
                            <div class="mt-3 d-flex justify-content-sm-center PurchaseInvoices-form">
                                <select class="form-control w-100 select-fillter date" name="" id="">
                                    <optgroup>
                                        <option value="">التاريخ</option>
                                        <option value="1">تاريخ الاصدار</option>
                                        <option value="2"> تاريخ الاستحقاق </option>

                                    </optgroup>
                                </select>
                                <input type="date" class="select-fillter form-control w-30 mx-2 start-date"
                                    onfocus="(this.type='date')" placeholder="من">
                                <input type="date" class="select-fillter form-control w-30 mx-2 end-date"
                                    onfocus="(this.type='date')" placeholder="الي">






                            </div>

                        </div>

                        <div class="col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="d-flex justify-content-sm-start my-3 mx-2 PurchaseInvoices-form">

                                <button
                                    onclick="reloadData($('.code').val(), $('.name').val(), $('.status').val(), $('.date').val(), $('.start-date').val(), $('.end-date').val())"
                                    class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i>
                                    بحث</button>
                                <button onclick="reset()" class="btn btn-dark mx-1 b2"><i
                                        class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                            </div>

                            <div class="col-md-7"></div>
                        </div>

                    </div>



                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive-table responsive-scroll">
                            <table id="ClientbondsTable" class="table text-center">
                                <thead class="table-head">
                                    <tr>

                                        <th scope="col">كود</th>
                                        <th scope="col">اسم العميل</th>
                                        <th scope="col">تاريخ الإصدار</th>
                                        <th scope="col">الحساب</th>
                                        <!--<th scope="col">النوع</th>-->
                                        <th scope="col">الحالة</th>
                                        <th scope="col">القيمة</th>
                                        <th scope="col">الخيارات</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </section>
            <!--</div>-->
            @else
            <div class="row  pb-4 brdr">
                <div class="col-md-12 clients ">
                    <div>
                        <img src="{{ URL('images/clients-img.svg') }}" alt="">
                        <h1 class="my-3">ليس لديك أي سندات العميل</h1>
                        <p class="text-secondary my-5">يوفر محاسبة صفحة خاصة بسندات العميل للمساهمة في تسهيل التعاملات مع
                            سندات العميل وملخص لبياناتهم.</p>
                        <button class="btn btn-primary mx-2 "> <a href="{{ route('Clientbond.create') }}"
                                class="text-light">اضافة سندات العميل</a> <i class="fa-solid fa-plus"></i></button>
                        <button class="btn btn-primary">استيراد قائمة سندات العميل <i
                                class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    </div>
                </div>
            </div>
            @endif

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
    function reloadData(code, name, status, date, start_date, end_date) {
        // end-date start-date date status name code 
        var url = "{{ route('getClientbondsData') }}?code=" + code + "&name=" + name + "&status=" + status + "&date=" +
            date + "&start_date=" + start_date + "&end_date=" + end_date;
        ClientbondsTable.ajax.url(url).load();
    }

    function reset() {
        var input1 = document.querySelector('.code');
        var input2 = document.querySelector('.name');
        var input3 = document.querySelector('.date');
        var input4 = document.querySelector('.start-date');
        var input5 = document.querySelector('.end-date');
        var input6 = document.querySelector('.status');

        input1.value = ""
        input2.value = ""
        input3.value = ""
        input4.value = ""
        input5.value = ""
        input6.value = ""
        // $('.').val() = ""
        // $('.barcode-product').val() = ""
        // $('.item-product').val() = ""
        var url = "{{ route('getClientbondsData') }}"
        ClientbondsTable.ajax.url(url).load();
    }
    let ClientbondsTable = null

    function setClientbondsDatatable() {
        var url = "{{ route('getClientbondsData') }}";
        ClientbondsTable = $("#ClientbondsTable").DataTable({
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

            // language: {
                paginate: {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
            // },

            columns: [{
                    data: 'code'
                },
                {
                    data: 'id_customers'
                },
                {
                    data: 'Date'
                },
                {
                    data: 'id_Account'
                },
                {
                    data: 'status'
                },
                {
                    data: 'Amount'
                },
                {
                    data: 'action'
                }

            ],
        });
    }
    $(function () {
        setClientbondsDatatable();
    });
</script>

@endsection