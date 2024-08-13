@extends('layouts.vertical', ['title' => 'ملخص الحساب'])
@section('content')

<section id="content-wrapper" class="content-header">
    <div class="row">

      <div class="col-lg-12 mt-3">
        <ul class="d-flex align-content-center">

          <li><span class="text-dark ml-3"> تقارير</span></li>
          <li class="text-primary">
            <i class="fa fa-angle-double-left mx-2 "></i><a href=""> ملخص الحساب</a>
          </li>
        </ul>
      </div>

    </div>
  </section>


  <section>
    <div class="container my-3">
      <div class="row">
        <div class="col-md-12 hi-reports">

          <div class="col-md-9 py-4 main-reports">

            <div class="d-flex justify-content-sm-center product-form">

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

              <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
              <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


            </div>



          </div>

          <div class="col-md-3"></div>
        </div>

      </div>
      <div class="row bg-light pb-4 brdr">

        <div class="col-md-12 clients">

          <div class="chartCard">
            <div class="chartBox">
              <canvas id="myChart"></canvas>
            </div>
          </div>


        </div>
        <div class="w-100 my-5 table-responsive-lg">
          <h3 class="text-center">ملخص الحساب 1 - الأصول
          </h3>
          <h6 class="text-center my-3">اسم الشركة</h6>
          <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>
          <table class="table  table-hover table-bordered">
            <tbody>
              <thead class="cf">

                <tr>
                  <th>شهر</th>
                  <th class="amount">فعلي</th>
                </tr>
              </thead>

            </tbody>
            <tbody>
              <tr>
                <td data-title="Account">January 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-01-01&amp;to=2023-01-31">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">February 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-02-01&amp;to=2023-02-28">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">March 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-03-01&amp;to=2023-03-31">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">April 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-04-01&amp;to=2023-04-30">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">May 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-05-01&amp;to=2023-05-31">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">June 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-06-01&amp;to=2023-06-30">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">July 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-07-01&amp;to=2023-07-31">10,000.00 ر.س</a>
                </td>
              </tr>
              <tr>
                <td data-title="Account">August 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-08-01&amp;to=2023-08-31">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">September 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-09-01&amp;to=2023-09-30">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">October 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-10-01&amp;to=2023-10-31">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">November 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-11-01&amp;to=2023-11-30">0.00 ر.س</a></td>
              </tr>
              <tr>
                <td data-title="Account">December 2023</td>
                <td data-title="Opening Balance"><a
                    href="/tenant/reports/general_ledgers/4?from=2023-12-01&amp;to=2023-12-31">0.00 ر.س</a></td>
              </tr>
            </tbody>
          </table>
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
