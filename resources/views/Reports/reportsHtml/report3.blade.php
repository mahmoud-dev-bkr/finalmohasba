@extends('layouts.vertical', ['title' => 'الميزانية العمومية'])
@section('content')

<section id="content-wrapper" class="content-header">
    <div class="row">

      <div class="col-lg-12 mt-3">
        <ul class="d-flex align-content-center">

          <li><span class="text-dark ml-3"> تقارير</span></li>
          <li class="text-primary">
            <i class="fa fa-angle-double-left mx-2 "></i><a href="">قائمة التدفقات النقدية</a>
          </li>
        </ul>
      </div>

    </div>
</section>


<section>
<div class="container my-3">
    <div class="row">
    <div class="col-md-12 hi-reports1">

        <div class="col-md-8 py-4 main-reports">

        <div class="d-flex justify-content-start product-form">

            <select class="form-control mx-2 w-25" name="" id="">
            <optgroup>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>



            </optgroup>
            </select>

            <input class="form-control w-25 mx-2" type="date" placeholder=" من">
            <input class="form-control w-25 mx-2" type="date" placeholder=" الي">






        </div>

        <div class="d-flex align-items-center justify-content-start mt-4 col-md-6">
            <select class="form-control edit-input mx-2 w-50" name="" id="">
            <optgroup>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>



            </optgroup>
            </select>

            <select class="form-control edit-input mx-2 w-50" name="" id="">
            <optgroup>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>



            </optgroup>
            </select>

        </div>

        <div class="col-md-6 py-3 d-flex align-items-center justify-content-start ">

            <select class="form-control edit-input mx-2 w-50" name="" id="">
            <optgroup>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>

            </optgroup>
            </select>

            <input class="form-control be-small edit-input w-50 mx-2" type="text" placeholder=" الحد الادني">

            <input class="form-control be-small edit-input w-50 mx-2" type="text" placeholder=" الحد الاعلي">


        </div>

        <div class="col-md-6">
            <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
            <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>

        </div>

        </div>

        <div class="col-md-4 py-4">

        <div class="form-check form-switch form-switch-lg d-flex align-items-center justify-content-start">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label mx-5 fw-bold mt-1" for="flexSwitchCheckChecked">تحليل متقدم</label>
        </div>

        <div class="form-check form-switch form-switch-lg d-flex align-items-center justify-content-start">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label mx-5 fw-bold mt-1" for="flexSwitchCheckChecked">فحص</label>
        </div>

        </div>

    </div>

    </div>
    <div class="row  pb-4 brdr">

    <div class="col-md-12">
        <div class="w-100 my-5 table-responsive-lg">
        <h3 class="text-center">الميزانية العمومية </h3>
        <h6 class="text-center my-3">اسم الشركة</h6>
        <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>


        <table class="table  table-hover">
            <thead class="cf">
            <tr>
                <th colspan="3">&nbsp;</th>
                <th>
                2023-07-31
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="3" class="report-table-head">1 - الأصول</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" class="padleftindex-2">
                <a
                    href="/tenant/reports/general_ledgers/5/account_summary?account_name=5&amp;from=2023-07-05&amp;to=2023-07-31">
                    11 - أصول متداولة
                </a>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" class="padleftindex-3">
                <a
                    href="/tenant/reports/general_ledgers/10/account_summary?account_name=10&amp;from=2023-07-05&amp;to=2023-07-31">
                    1106 - المخزون
                </a>
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="10"
                    data-query="{&quot;account_id&quot;:10,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    10,000.00 ر.س
                </span> </td>
            </tr>
            <tr class="dark-row">
                <td colspan="3" class="padleftindex-2">
                مجموع 11 - أصول متداولة
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="5"
                    data-query="{&quot;account_id&quot;:5,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    10,000.00 ر.س
                </span> </td>
            </tr>
            <tr>
                <td colspan="3" class="main-account-total">
                مجموع 1 - الأصول
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="4"
                    data-query="{&quot;account_id&quot;:4,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    10,000.00 ر.س
                </span> </td>
            </tr>
            <tr>
                <td colspan="3" class="report-table-head">2 - الالتزامات</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" class="padleftindex-2">
                <a
                    href="/tenant/reports/general_ledgers/25/account_summary?account_name=25&amp;from=2023-07-05&amp;to=2023-07-31">
                    21 - الالتزامات المتداولة
                </a>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" class="padleftindex-3">
                <a
                    href="/tenant/reports/general_ledgers/14/account_summary?account_name=14&amp;from=2023-07-05&amp;to=2023-07-31">
                    2101 - الدائنون
                </a>
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="14"
                    data-query="{&quot;account_id&quot;:14,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    11,500.00 ر.س
                </span> </td>
            </tr>
            <tr>
                <td colspan="3" class="padleftindex-3">
                <a
                    href="/tenant/reports/general_ledgers/19/account_summary?account_name=19&amp;from=2023-07-05&amp;to=2023-07-31">
                    2105 - ضريبة القيمة المضافة المستحقة
                </a>
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="19"
                    data-query="{&quot;account_id&quot;:19,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    (1,500.00 ر.س)
                </span> </td>
            </tr>
            <tr class="dark-row">
                <td colspan="3" class="padleftindex-2">
                مجموع 21 - الالتزامات المتداولة
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="25"
                    data-query="{&quot;account_id&quot;:25,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    10,000.00 ر.س
                </span> </td>
            </tr>
            <tr>
                <td colspan="3" class="main-account-total">
                مجموع 2 - الالتزامات
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="24"
                    data-query="{&quot;account_id&quot;:24,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    10,000.00 ر.س
                </span> </td>
            </tr>
            <tr>
                <td colspan="3" class="report-table-head">3 - حقوق الملكية</td>
                <td></td>
            </tr>
            <tr class=" dark_row_top">
                <td colspan="3" class="main-account-total">
                مجموع 3 - حقوق الملكية
                </td>
                <td>
                <span class="amount-popup underline" data-account-id="39"
                    data-query="{&quot;account_id&quot;:39,&quot;to&quot;:&quot;2023-07-31&quot;,&quot;from&quot;:&quot;2023-07-05&quot;,&quot;amount_type&quot;:null,&quot;filter&quot;:{&quot;type&quot;:null,&quot;kind&quot;:null},&quot;dimension&quot;:{&quot;type&quot;:null,&quot;query&quot;:[&quot;2023-07-31&quot;],&quot;kind&quot;:null}}">
                    0.00 ر.س
                </span> </td>
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
