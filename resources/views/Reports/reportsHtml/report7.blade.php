@extends('layouts.vertical', ['title' => 'ملخص المبيعات والمشتريات'])
@section('content')

<section id="content-wrapper" class="content-header">
    <div class="row">

      <div class="col-lg-12 mt-3">
        <ul class="d-flex align-content-center">

          <li><span class="text-dark ml-3"> تقارير</span></li>
          <li class="text-primary">
            <i class="fa fa-angle-double-left mx-2 "></i><a href=""> ملخص المبيعات والمشتريات</a>
          </li>
        </ul>
      </div>

    </div>
</section>


<section>
    <div class="container my-3">
      <div class="row">
        <div class="col-md-12 hi-reports">

          <div class="col-md-12 py-4 main-reports">

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

              <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
              <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


            </div>

            <div class="d-flex align-items-center justify-content-start">
              <input type="checkbox" class="mx-2">
              <p class="mt-3 mx-2">إظهار المنتجات الغير مخزونة</p>
            </div>

          </div>


        </div>

      </div>
      <div class="row  pb-4 brdr">

        <div class="col-md-12">
          <div class="w-100 my-5 table-responsive-lg">
            <h3 class="text-center">ملخص المبيعات والمشتريات </h3>
            <h6 class="text-center my-3">اسم الشركة</h6>
            <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>

            <table class="table  text-center table-hover table-bordered inventary-table">
              <thead class="cf">
                <tr>
                  <th class="text-center" colspan="1">تفاصيل المنتج</th>
                  <th class="text-center" colspan="5">المشتريات</th>
                  <th class="text-center" colspan="5">المبيعات</th>
                </tr>
                <tr>
                  <th>اسم المنتج</th>
                  <th>متوسط سعر الشراء</th>
                  <th>الكمية</th>
                  <th>متوسط قيمة المرتجعات</th>
                  <th>الكمية</th>
                  <th>المجموع</th>
                  <th>متوسط سعر البيع</th>
                  <th>الكمية</th>
                  <th>متوسط قيمة المرتجعات</th>
                  <th>الكمية</th>
                  <th>المجموع</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product )  
                  <tr>
                    <td data-title="اسم المنتج"> 
                      {{$product->name_ar }}
                    </td>
                    <td data-title="متوسط سعر الشراء"> {{ $product->midBuy() }} ر.س</td>
                    <td data-title="الكمية"> 
                      {{ $product->purchaseInvoiceQtn() }}
                    </td>
                    <td data-title="متوسط قيمة المرتجعات"> 
                      {{ $product->midReturnsPurchaseInvoice() }} ر.س</td>
                    <td data-title="الكمية"> 
                      {{ $product->ReturnsPurchaseInvoiceQtn() }}
                    </td>
                    <td data-title="المجموع"> 
                      {{ $product->getTotalPurchaseInvoice() }} ر.س</td>
                    <td data-title="متوسط سعر البيع"> 0.00 ر.س</td>
                    <td data-title="الكمية"> 0</td>
                    <td data-title="متوسط قيمة المرتجعات"> 0.00 ر.س</td>
                    <td data-title="الكمية"> 0</td>
                    <td data-title="المجموع"> 0.00 ر.س</td>
                  </tr>
                @endforeach
                <tr>
                  <td>المجموع</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>10,000.00 ر.س</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>0.00 ر.س</td>

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
