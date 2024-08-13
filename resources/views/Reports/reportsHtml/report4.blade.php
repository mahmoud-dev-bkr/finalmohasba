@extends('layouts.vertical', ['title' => 'ميزان المراجعة'])
@section('content')

<section id="content-wrapper" class="content-header">
    <div class="row">

        <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

                <li><span class="text-dark ml-3"> تقارير</span></li>
                <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="">ميزان المراجعة </a>
                </li>
            </ul>
        </div>

    </div>
</section>


<section>
    <div class="container my-3" style="
              max-width: 1300px;
          ">
        <div class="row">
            <div class="col-md-12 hi-reports">

                <div class="col-md-12 pt-5 main-reports">

                    <div class="d-flex justify-content-sm-center product-form">

                        <input class="form-control w-25 mx-2" type="date" placeholder=" من">
                        <input class="form-control w-25 mx-2" type="date" placeholder=" الي">
                        <select class="form-control mx-2 w-25" name="" id="">
                            <optgroup>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>



                            </optgroup>
                        </select>
                        <select class="form-control mx-2 w-25" name="" id="">
                            <optgroup>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>



                            </optgroup>
                        </select>
                        <select class="form-control mx-2 w-25" name="" id="">
                            <optgroup>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>



                            </optgroup>
                        </select>
                        <select class="form-control mx-2 w-25" name="" id="">
                            <optgroup>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>



                            </optgroup>
                        </select>

                        <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


                    </div>



                </div>


            </div>

        </div>
        <div class="row  pb-4 brdr">

            <div class="col-md-12">
                <div class="w-100 my-5 table-responsive-lg">
                    <h3 class="text-center">ميزان المراجعة </h3>
                    <h6 class="text-center my-3">اسم الشركة</h6>
                    <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>
                    <table class="table  table-hover">
                        <thead class="cf">
                            <tr>
                                <th rowspan="2" colspan="3" style="text-align: center;">
                                    الحساب
                                </th>
                                <th colspan="2" style="text-align: center;">الرصيد الافتتاحي</th>
                                <th colspan="2" style="text-align: center;">الحركة</th>
                                <th colspan="2" style="text-align: center;">صافي الحركة</th>
                                <th colspan="2" style="text-align: center;">الرصيد الختامي</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">مدين</th>
                                <th style="text-align: center;">دائن</th>
                                <th style="text-align: center;">مدين</th>
                                <th style="text-align: center;">دائن</th>
                                <th style="text-align: center;">مدين</th>
                                <th style="text-align: center;">دائن</th>
                                <th style="text-align: center;">مدين</th>
                                <th style="text-align: center;">دائن</th>
                            </tr>
                        </thead>
                        <tbody class="stream-append">
                            <tr>
                                <td class="padleftindex-1 report-table-head" colspan="3">1 - الأصول</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="padleftindex-2 " colspan="3">11 - أصول متداولة</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="padleftindex-3 " colspan="3">
                                    1106 - المخزون</td>
                                <td><span class="amount-popup underline" data-account-id="10">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="10">0.00 ر.س</span>
                                </td>
                            </tr>

                            <tr class="dark-row ">
                                <td class="padleftindex-2" colspan="3">مجموع 11 - أصول متداولة</td>
                                <td><span class="amount-popup underline" data-account-id="5">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="5">0.00 ر.س</span></td>
                            </tr>

                            <tr class="dark-row report-table-head">
                                <td class="padleftindex-1" colspan="3">مجموع 1 - الأصول</td>
                                <td><span class="amount-popup underline" data-account-id="4">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">10,000.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="4">0.00 ر.س</span></td>
                            </tr>
                            <tr>
                                <td class="padleftindex-1 report-table-head" colspan="3">2 - الالتزامات</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="padleftindex-2 " colspan="3">21 - الالتزامات المتداولة</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="padleftindex-3 " colspan="3">2101 - الدائنون</td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="14">
                                        0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="14">
                                        0.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="14">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="14">
                                        11,500.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="14">0.00 ر.س

                                    </span></td>
                                <td><span class="amount-popup underline" data-account-id="14">
                                        11,500.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="14">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="14">11,500.00 ر.س

                                    </span></td>
                            </tr>
                            <tr>
                                <td class="padleftindex-3 " colspan="3">
                                    2105 - ضريبة القيمة المضافة المستحقة</td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="19">
                                        0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="19">
                                        0.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="19">
                                        1,500.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="19">
                                        0.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="19">
                                        1,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="19">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="19">1,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="19">0.00 ر.س</span></td>
                            </tr>
                            <tr class="dark-row ">
                                <td class="padleftindex-2" colspan="3">مجموع 21 - الالتزامات المتداولة</td>
                                <td><span class="amount-popup underline" data-account-id="25">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="25">0.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="25">1,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="25">11,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="25">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="25">
                                        10,000.00 ر.س</span></td>
                                <td>
                                    <span class="amount-popup underline" data-account-id="25">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="25">10,000.00 ر.س</span></td>
                            </tr>
                            <tr class="dark-row report-table-head">
                                <td class="padleftindex-1" colspan="3">مجموع 2 - الالتزامات</td>
                                <td><span class="amount-popup underline" data-account-id="24">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">1,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">11,500.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">0.00
                                        ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">10,000.00 ر.س</span>
                                </td>
                                <td><span class="amount-popup underline" data-account-id="24">0.00 ر.س</span></td>
                                <td><span class="amount-popup underline" data-account-id="24">10,000.00 ر.س</span></td>
                            </tr>
                            <tr class="reports-total">
                                <td colspan="3" data-title="Account">المجموع</td>
                                <td data-title="Debit">0.00 ر.س</td>
                                <td data-title="Credit">0.00 ر.س</td>
                                <td data-title="Debit">11,500.00 ر.س</td>
                                <td data-title="Credit">11,500.00 ر.س</td>
                                <td data-title="Debit">10,000.00 ر.س</td>
                                <td data-title="Credit">10,000.00 ر.س</td>
                                <td data-title="Debit">10,000.00 ر.س</td>
                                <td data-title="Credit">10,000.00 ر.س</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex align-items-center justify-content-end my-3">

                    <button class="btn btn-primary submit ">تصدير</button>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
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
