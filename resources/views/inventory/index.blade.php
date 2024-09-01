@extends('layouts.vertical', ['title' => 'جرد المخزون'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
                    <li><span class="text-dark ml-3">المخازن</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">جرد المخزون</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            {{-- @can('create_Clientbond') --}}
            <button class="btn btn-primary mx-2">
                <a href="{{ route('Inventory.create') }}" class="text-light">اضافة جرد مخزون </a>
                <i class="fa-solid fa-plus"></i>
            </button>
            {{-- @endcan --}}
            <button class="btn btn-primary mx-2">
                <a href="{{ route('ExportClientbond') }}" class="text-light">تصدير </a>
                <i class="fa-solid fa-plus"></i>
            </button>

        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">جرد المخزون</h4>
                </div>
            </div>
            @if (count($Inventory) > 0)
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

                                        <th scope="col">
                                            {{ __('inventory.site') }}
                                        </th>
                                        <th scope="col">
                                            {{ __('inventory.account_id_plus') }}
                                        </th>
                                        <th scope="col">
                                            {{ __('inventory.account_id_minus') }}
                                        </th>            
                                        <th scope="col">
                                            {{ __('inventory.date') }}
                                        </th>
                                        <th scope="col">
                                            {{ __('inventory.info_products') }}
                                        </th>

                                        <th scope="col">
                                            {{ __('basic.options') }}
                                        </th>
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
            <div class="row pb-4 brdr">

                <div class="col-md-12 clients ">

                  <div>
                    <img src="{{ URL('images/store.svg') }}" alt="">
                    <h1 class="my-3">ليس لديك أي جرد مخزون
                    </h1>
                    <p class="text-secondary my-5">
                      .يتيح لك محاسبه عمليات جرد المخزون التي تمكنك من زيادة كمية المنتجات التي تم الحصول عليها بدون تكلفة
                      إو إنقاص المنتجات التالفة أو المستردة التي لا يمكن إعادة بيعها </p>
                    <button class="btn btn-primary mx-2 ">
                      <a href="{{ route('Inventory.create') }}" class="text-light">
                        إنشاء جرد مخزون
                      </a>
                      <i class="fa-solid fa-plus"></i></button>

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
        var url = "{{ route('getInventorysData') }}?code=" + code + "&name=" + name + "&status=" + status + "&date=" +
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
        var url = "{{ route('getInventorysData') }}"
        ClientbondsTable.ajax.url(url).load();
    }
    let ClientbondsTable = null

    function setClientbondsDatatable() {
        var url = "{{ route('getInventorysData') }}";
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
                    data: 'site_id'
                },
                {
                    data: 'account_id_plus'
                },
                {
                    data: 'account_id_minus'
                },
                {
                    data: 'date'
                },
                {
                    data: 'info_products'
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
