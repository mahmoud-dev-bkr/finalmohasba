@extends('layouts.vertical', ['title' => 'لوحة التحكم'])
@section('content')
      <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">الصفحة الرئيسية</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="dashboard.html">لوحةالمتابعة</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="container my-3 max-con">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">مرحبا بك في محاسبة</h4>
                    </div>
                </div>
                <div class="row  pb-4 brdr">
                    <div class="col-md-6">
                        <div class="my-3">
                            <h5>خطوات عامة</h5>
                            <p class="text-secondary">(هذه الخطوات هي لمساعدتك لتبدأ باستخدام محاسبة)</p>
                        </div>
                        <div>
                            <ul class="mohasba-list">
                                @if (count($Product) ==1 )
                                
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Product.tenant') }}">        لديك    {{ count($Product) }} منتج .  اضغط هنا للمزيد </a></li>
                                @elseif(count($Product) >  1)
                                    <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Product.tenant') }}">        لديك    {{ count($Product) }} منتجات .  اضغط هنا للمزيد </a></li>
                                @else
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Product.tenant') }}">ليس لديك أي منتجات،  لإضافة منتج</a></li>
                                @endif

                                @if (count($Client) == 1)
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('client.create') }}">         لديك    {{ count($Client) }} عميل اضغط هنا للمزيد</a></li>
                                @elseif (count($Client) > 1)
                                    
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('client.create') }}">         لديك    {{ count($Client) }} عملاء اضغط هنا للمزيد</a></li>
                                @else
                                <li><i class="fa-solid fa-users users-icon "></i> <a href="{{ route('client.create') }}">ليس لديك أي عملاء، اضغط هنا لإضافة عميل</a></li>
                                @endif

                                @if (count($Supplier) == 1)
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Supplier.create') }}">            لديك {{ count($Supplier)}} مورد . اضغط هنا للمزيد</a></li>
                                @elseif (count($Supplier) > 1)
                                    
                                    <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Supplier.create') }}">            لديك {{ count($Supplier)}} موردين . اضغط هنا للمزيد</a></li>
                                @else
                                <li><i class="fa-solid fa-handshake-simple"></i> <a href="{{ route('Supplier.create') }}">ليس لديك أي موردين، اضغط هنا لإضافة مورد</a></li>
                                @endif

                                @if (count($PurchaseInvoices) > 0)
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Purchase_Invoices.create') }}">              لديك {{ count($PurchaseInvoices)}} فاتورة مشتريات اضغط هنا للمزيد</a></li>
                                @else
                                <li><i class="fa-solid fa-file-circle-check"></i> <a href="{{ route('Purchase_Invoices.create') }}">ليس لديك أي فواتير مشتريات، اضغط هنا لإضافة فاتورة مشتريات</a></li>
                                @endif

                                @if (count($sales_invoices) > 0)
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('sales_invoices.create') }}">    لديك {{ count($sales_invoices) }} فاتورة مبيعات </a></li>
                                @else
                                <li><i class="fa-solid fa-file-invoice-dollar"></i> <a href="{{ route('sales_invoices.create') }}">ليس لديك أي فواتير مبيعات، اضغط هنا لإضافة فاتورة  مبيعات اضغط هنا للمزيد</a></li>
                                @endif

                                @if (count($Site) > 0)
                                <li><i class="fa-solid fa-box-open"></i> <a href="{{ route('Site.index') }}">       لديك {{ count($Site) }} موقع اضغط هنا للمزيد</a></li>
                                @else
                                <li><i class="fa-solid fa-location-arrow"></i> <a href="{{ route('Site.create') }}">  مواقع. اضغط هنا لإضافة المزيد</a></li>
                                @endif

                            </ul>
                        </div>
                        
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="content_dash">
          <div class=" chart_content_dashboard mt-3">
            <div class="row">
              <div class="col-md-6 hi-mohasba">
                <h4 class="mx-4">حالة الدفعات </h4>
              </div>
            </div>
            <div class="row pb-4 brdr">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="my-3 d-flex chart_circle responsive-scroll">
                  <span style="width:330;height:330" class="mt-5">
                    <canvas id="chart_one"></canvas>
                  </span>
                  <span style="width:330;height:330" class="mt-5">
                    <canvas id="chart_two"></canvas>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class=" chart_content_dashboard mt-3">
            <div class="row">
              <div class="col-md-6 hi-mohasba">
                <h4 class="mx-4">الإيرادات و المصروفات </h4>
              </div>
            </div>
            <div class="row pb-4 brdr">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="my-3 d-flex chart_circle responsive-scroll">
                  <span class="mt-5" style="height: 320px;width: 590px;">
                    <canvas id="chart_th"></canvas>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content_dash">
          <div class=" chart_content_dashboard mt-3">
            <div class="row">
              <div class="col-md-6 hi-mohasba">
                <h4 class="mx-4">العملاء</h4>
              </div>
            </div>
            <div class="row pb-4 brdr">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="my-3 d-flex chart_circle responsive-scroll">
                  <span class="mt-5" style="height: 320px;width: 590px;">
                    <canvas id="chart_four"></canvas>
                  </span>
                </div>
              </div>
              <div class="view-customer dash-table-view">
                <div id="no-more-tables" class="user-management-table manage-currency-table responsive-scroll">
                  <h5 class="table-head">أعلى 5 عملاء عليهم مستحقات</h5>
                  <table class="table w-100">
                    <thead class="cf">
                      <tr>
                        <th>اسم العميل</th>
                        <th>القيمة</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class=" chart_content_dashboard mt-3">
            <div class="row">
              <div class="col-md-6 hi-mohasba">
                <h4 class="mx-4">الموردين</h4>
              </div>
            </div>
            <div class="row pb-4 brdr">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="my-3 d-flex chart_circle responsive-scroll">
                  <span class="mt-5" style="height: 320px;width: 590px;">
                    <canvas id="chart_five"></canvas>
                  </span>
                </div>
              </div>
              <div class="view-customer dash-table-view">
                <div id="no-more-tables" class="user-management-table manage-currency-table responsive-scroll">
                  <h5 class="table-head">أعلى 5 عملاء عليهم مستحقات</h5>
                  <table class="table w-100 table-hover">
                    <thead class="cf">
                      <tr>
                        <th>اسم العميل</th>
                        <th>القيمة</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a>a 2</a>
                        </td>
                        <td>11,500.00 ر.س</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content_dash">
          <div class="container my-3 max-con">
            <div class="row">
              <div class="col-md-6 hi-mohasba">
                <h4 class="mx-4">سجل النشاطات</h4>
              </div>
            </div>
            <div id="no-more-tables" class="row pb-4 brdr table-responsive">
              <table class="table  table-hover  ">
                <thead class="cf cf-dashboard">
                  <tr>
                    <th>بريد العضو</th>
                    <th>النشاط</th>
                    <th>الوحدة</th>
                    <th class="dash-last">التاريخ والوقت</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="بريد العضو">quwrite1@gmail.com</td>
                    <td data-title="النشاط">Created new Bill</td>
                    <td data-title="الوحدة">Bills</td>
                    <td data-title="التاريخ والوقت" class="font-osans">2023-07-05 08:53 PM</td>
                  </tr>
                  <tr>
                    <td data-title="بريد العضو">quwrite1@gmail.com</td>
                    <td data-title="النشاط">Created New Vendor</td>
                    <td data-title="الوحدة">Vendors</td>
                    <td data-title="التاريخ والوقت" class="font-osans">2023-07-05 07:48 PM</td>
                  </tr>
                  <tr>
                    <td data-title="بريد العضو">quwrite1@gmail.com</td>
                    <td data-title="النشاط">Created New Customer</td>
                    <td data-title="الوحدة">Customers</td>
                    <td data-title="التاريخ والوقت" class="font-osans">2023-07-05 07:14 PM</td>
                  </tr>
                  <tr>
                    <td data-title="بريد العضو">quwrite1@gmail.com</td>
                    <td data-title="النشاط">Created New Product</td>
                    <td data-title="الوحدة">Products</td>
                    <td data-title="التاريخ والوقت" class="font-osans">2023-07-05 07:06 PM</td>
                  </tr>
                </tbody>
              </table>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.umd.min.js"></script>
    <script>
        let ClientsTable = null

        function setClientsDatatable() {
            var route = "{{ URL('getClientsData') }}";
            ClientsTable = $("#ClientsTable").DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip',
                lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
                pageLength: 9,
                sorting: [0, "DESC"],
                ordering: false,
                ajax: route,

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
                        data: 'email'
                    },
                    {
                        data: 'phon'
                    },
                    {
                        data: 'Tex_Number'
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
        $(function() {
            setClientsDatatable();
        });

    </script>
        <script>
      ///////////one
      var ctx = document.getElementById("chart_one").getContext('2d');
      var data = {
        datasets: [{
          data: [ {{  100 - $resultPaymentsDesSales}}, {{ $resultPaymentsDesSales}}],
          backgroundColor: ['#FE9A00', '#14293C', ],
        }],
        labels: ['{{  100 - $resultPaymentsDesSales}} المبالغ المعلقة', '{{ $resultPaymentsDesSales}} المبالغ المتأخرة', ]
      };
      var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
          cutout: 70,
          maintainAspectRatio: false,
          plugins: {
            title: {
              display: true,
              text: 'فواتير المبيعات',
              fullSize: true,
              font: {
                weight: 'bold',
                size: 25
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                // This more specific font property overrides the global property
                font: {
                  size: 18,
                  weight: "20"
                }
              }
            }
          },
        }
      });
      ///////////two
      var ctx_2 = document.getElementById("chart_two").getContext('2d');
      var data_2 = {
        datasets: [{
          data: [{{ 100 - $resultPaymentsDesMosh }} , {{ $resultPaymentsDesMosh }}],
          backgroundColor: ['#FE9A00', '#14293C', ],
        }],
        labels: ['{{ 100 - $resultPaymentsDesMosh }} المبالغ المعلقة', '{{ $resultPaymentsDesMosh }} المبالغ المتأخرة', ]
      };
      var myDoughnutChart_2 = new Chart(ctx_2, {
        type: 'doughnut',
        data: data_2,
        options: {
          cutout: 70,
          maintainAspectRatio: false,
          plugins: {
            title: {
              display: true,
              text: 'فواتير المشتريات',
              fullSize: true,
              font: {
                weight: 'bold',
                size: 25
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                // This more specific font property overrides the global property
                font: {
                  size: 18,
                  weight: "20"
                }
              }
            }
          },
        }
      });
      ///////////third
      var ctx_3 = document.getElementById("chart_th").getContext('2d');
      var myDoughnutChart_3 = new Chart(ctx_3, {
        type: 'line',
        data: {
          labels: ["January","February","March","April","May","June","July","August","September","October","November","December"], // fix
          datasets: [{
            label: "مصروفات",
            data: [186, 205, 1321, 1516, 2107,
              2191, 3133, 3221, 4783, 5478
            ],
            borderColor: "#3cba9f",
            fill: false
          }, {
            label: "إيرادات",
            data: [1282, 1350, 2411, 2502, 2635,
              2809, 3947, 4402, 3700, 5267
            ],
            borderColor: "#e43202",
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Chart JS Multiple Lines Example'
          }
        }
      });
      ///////////four
      var ctx_4 = document.getElementById("chart_four").getContext('2d');
      var myDoughnutChart_4 = new Chart(ctx_4, {
        type: 'line',
        data: {
          labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
          datasets: [{
            label: "فواتير مستحقة",
            data: [186, 205, 1321, 1516, 2107,
              2191, 3133, 3221, 4783, 5478
            ],
            borderColor: "#3cba9f",
            fill: false
          }, {
            label: "فواتير دفعت",
            data: [1282, 1350, 2411, 2502, 2635,
              2809, 3947, 4402, 3700, 5267
            ],
            borderColor: "#e43202",
            fill: false
          }, {
            label: "فواتير انشأت",
            data: [282, 4350, 1411, 502, 5635,
              5809, 3947, 402, 2700, 5267
            ],
            borderColor: "#w45302",
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Chart JS Multiple Lines Example'
          }
        }
      });
      /////five
      var ctx_5 = document.getElementById("chart_five").getContext('2d');
      var myDoughnutChart_5 = new Chart(ctx_5, {
        type: 'line',
        data: {
          labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
          datasets: [{
            label: "فواتير مستحقة",
            data: [186, 205, 5000, 1516, 2107,
              2191, 3133, 3221, 4783, 5478
            ],
            borderColor: "#3cba9f",
            fill: false
          }, {
            label: "فواتير دفعت",
            data: [1282, 1350, 2411, 2502, 2635,
              2809, 3947, 4402, 3700, 5267
            ],
            borderColor: "#e43202",
            fill: false
          }, {
            label: "فواتير انشأت",
            data: [282, 4350, 1411, 502, 5635,
              5809, 3947, 402, 2700, 5267
            ],
            borderColor: "#w45302",
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Chart JS Multiple Lines Example'
          }
        }
      });
    </script>
@endsection
