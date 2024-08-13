@extends('layouts.vertical', ['title' => 'دفتر استاذ'])
@section('content')

<section id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3"> تقارير</span></li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="reports1.html">دفتر الأستاذ</a>
              </li>
            </ul>
          </div>

        </div>
      </section>


      <section>
        <div class="container my-3 max-con">
          <div class="row">
            <div class="col-md-12 hi-reports">

              <div class="col-md-9 py-4 main-reports">

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

                  <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                  <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


                </div>

                <div class="d-flex align-items-center justify-content-start">
                  <input type="checkbox" class="mx-2">
                  <p class="mt-3 mx-2">عرض صافي الحركة للسنة المالية بتاريخ الرصيد الختامي</p>
                </div>

              </div>

              <div class="col-md-3"></div>
            </div>

          </div>
          <div class="row    pb-4 brdr">

            <div class="col-md-12">
              <div class="w-100 my-5 table-responsive-lg responsive-scroll">
                <h3 class="text-center">ملخص دفتر الأستاذ</h3>
                <h6 class="text-center my-3">اسم الشركة</h6>
                <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>

                <table class="table  tree-table  table-hover">
                  <thead class="cf site-head ">
                    <tr>
                      <th colspan="3">الحساب</th>
                      <th class="balance-ytd hide">
                        الرصيد الافتتاحي
                      </th>
                      <th>مدين</th>
                      <th>دائن</th>
                      <th>صافي الحركة</th>
                      <th class="balance-ytd hide">
                        الرصيد منذ بداية العام
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-1">
                        <a class="report-table-head">
                          1 - الأصول
                        </a>
                      </td>
                      <td class="hide balance-ytd"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="balance-ytd hide"></td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-2">
                        <a class="report-table-head">
                          11 - أصول متداولة
                        </a>
                      </td>
                      <td class="hide balance-ytd"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="balance-ytd hide"></td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-3">
                        <a class="report-table-head">
                          1106 - المخزون
                        </a>
                      </td>

                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          10,000.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          0.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        10,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr class="dark-row">
                      <td data-title="Account" colspan="3" class="padleftindex-2">
                        <a class="report-table-head">
                          11 - أصول متداولة
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          10,000.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          0.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        10,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr class="dark-row">
                      <td data-title="Account" colspan="3" class="padleftindex-1">
                        <a class="report-table-head">
                          1 - الأصول
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          10,000.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          0.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        10,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-1">
                        <a class="report-table-head">
                          2 - الالتزامات
                        </a>
                      </td>
                      <td class="hide balance-ytd"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="balance-ytd hide"></td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-2">
                        <a class="report-table-head">
                          21 - الالتزامات المتداولة
                        </a>
                      </td>
                      <td class="hide balance-ytd"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="balance-ytd hide"></td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-3">
                        <a class="report-table-head">
                          2101 - الدائنون
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          0.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          11,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        11,500.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr>
                      <td data-title="Account" colspan="3" class="padleftindex-3">
                        <a class="report-table-head">
                          2105 - ضريبة القيمة المضافة المستحقة
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          1,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          0.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        1,500.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr class="dark-row">
                      <td data-title="Account" colspan="3" class="padleftindex-2">
                        <a class="report-table-head">
                          21 - الالتزامات المتداولة
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          1,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          11,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        10,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr class="dark-row">
                      <td data-title="Account" colspan="3" class="padleftindex-1">
                        <a class="report-table-head">
                          2 - الالتزامات
                        </a>
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        <a>
                          1,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Credit">
                        <a>
                          11,500.00 ر.س
                        </a>
                      </td>
                      <td data-title="Net Movement">
                        10,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                    <tr class="reports-total">
                      <td data-title="Account" colspan=" 3" class="main-account-total">
                        المجموع
                      </td>
                      <td data-title="Opening Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                      <td data-title="Debit">
                        11,500.00 ر.س
                      </td>
                      <td data-title="Credit">
                        11,500.00 ر.س
                      </td>
                      <td data-title="Net Movement">
                        20,000.00 ر.س
                      </td>
                      <td data-title="YTD Balance" class="balance-ytd hide">
                        0.00 ر.س
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex align-items-center justify-content-between my-3">
                <button class="btn btn-dark ">تصدير دفتر الأستاذ بالتفصيل إلى Excel</button>
                <button class="btn btn-primary submit ">تصدير</button>

              </div>
            </div>

          </div>
        </div>
      </section>




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
