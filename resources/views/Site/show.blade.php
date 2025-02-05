@extends('layouts.vertical', ['title' => '  الموقع '])
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3"> اعدادت المنشاء</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('sub_site.index') }}">المواقع</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>
        <section>
            <div class="d-flex justify-content-sm-end mx-5">

            </div>

            <section>
                <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="{{ route('Site.create') }}" class="text-light">انشاء
                            موقع </a> <i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4"> الموقع </h4>
                        </div>

                    </div>


                    <div class="row bg-light pb-4 brdr">

                        <div class="bg-light col-md-12 p-3">

                            <div class="my-3 d-flex chart_circle container " id="chart_th_data"
                                data-monthlysales="{{ json_encode($monthlySales) }}">
                                <span class="mt-5" style="width:100%;height:100vh;text-align:center;">
                                    <canvas id="chart_th" style="width:100%;"></canvas>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            </section>


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
        let SiteTable = null

        function reloadData(name) {

            var url = "{{ route('getSubSiteData') }}?name=" + name;
            SiteTable.ajax.url(url).load();
        }

        function reset() {
            var input1 = document.querySelector('.name-site');


            input1.value = ""

            var url = "{{ route('getSubSiteData') }}"
            SiteTable.ajax.url(url).load();
        }

        function setSiteDatatable() {
            var url = "{{ route('getSubSiteData') }}";
            SiteTable = $("#SiteTable").DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip',
                lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
                pageLength: 9,
                sorting: [0, "DESC"],
                ordering: false,
                ajax: url,

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


                paginate: {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },


                columns: [{
                        data: 'name_ar'
                    },
                    {
                        data: 'name_en'
                    },
                    {
                        data: 'Inventory_id'
                    },
                    {
                        data: 'municipal_license'
                    },
                    {
                        data: 'commercial_registration'
                    },
                    {
                        data: 'Human_Resources_License'
                    },
                    {
                        data: 'FDA_license'
                    },
                    {
                        data: 'Social_Insurance'
                    },
                    {
                        data: 'Chamber_Commerce'
                    },
                    {
                        data: 'action'
                    }


                ],
            });
        }
        $(function() {
            setSiteDatatable();
        });

        var monthlySales = {!! json_encode($monthlySales) !!};
        var monthlyPurchases = {!! json_encode($monthlyPurchases) !!};

        // Create arrays to hold the sales and purchases data for each month
        var salesData = new Array(12).fill(0); // Initialize with 0 for each month
        var purchasesData = new Array(12).fill(0); // Initialize with 0 for each month

        // Populate the salesData array with the total_sales values
        monthlySales.forEach(function(sale) {
            // Subtract 1 from the month because JavaScript arrays are zero-indexed
            salesData[sale.month - 1] = sale.total_sales;
        });

        // Populate the purchasesData array with the total_purchases values
        monthlyPurchases.forEach(function(purchase) {
            // Subtract 1 from the month because JavaScript arrays are zero-indexed
            purchasesData[purchase.month - 1] = purchase.total_purchases;
        });

        var ctx_3 = document.getElementById("chart_th").getContext('2d');
        var myDoughnutChart_3 = new Chart(ctx_3, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ],
                datasets: [{
                        label: "مصروفات", // Expenses
                        data: purchasesData, // Use the dynamically populated purchasesData array
                        borderColor: "#e43202",
                        fill: false
                    },
                    {
                        label: "إيرادات", // Revenue
                        data: salesData, // Use the dynamically populated salesData array
                        borderColor: "#3cba9f",
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Monthly Sales and Purchases'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        // var monthlySales = {!! json_encode($monthlySales) !!};

        // // Create an array to hold the sales data for each month
        // var salesData = new Array(12).fill(0); // Initialize with 0 for each month

        // // Populate the salesData array with the total_sales values
        // monthlySales.forEach(function(sale) {
        //     // Subtract 1 from the month because JavaScript arrays are zero-indexed
        //     salesData[sale.month - 1] = sale.total_sales;
        // });

        // var ctx_3 = document.getElementById("chart_th").getContext('2d');
        // var myDoughnutChart_3 = new Chart(ctx_3, {
        //     type: 'line',
        //     data: {
        //         labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        //             "October", "November", "December"
        //         ],
        //         datasets: [{
        //             label: "مصروفات",
        //             data: [186, 205, 1321, 1516, 2107, 2191, 3133, 3221, 4783, 10000],
        //             borderColor: "#3cba9f",
        //             fill: false
        //         }, {
        //             label: "إيرادات",
        //             data: salesData, // Use the dynamically populated salesData array
        //             borderColor: "#e43202", 
        //             fill: false
        //         }]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: 'Chart JS Multiple Lines Example'
        //         }
        //     }
        // });
        // var data = {{ json_encode($monthlySales) }}
        // var ctx_3 = document.getElementById("chart_th").getContext('2d');
        // var myDoughnutChart_3 = new Chart(ctx_3, {
        //     type: 'line',
        //     data: {
        //         labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        //             "October", "November", "December"
        //         ], // fix
        //         datasets: [{
        //             label: "مصروفات",
        //             data: [ 186, 205, 1321, 1516, 2107,
        //                 2191, 3133, 3221, 4783, 5478],
        //             borderColor: "#3cba9f",
        //             fill: false
        //         }, {
        //             label: "إيرادات",
        //             data: [1282, 1350, 2411, 2502, 2635,
        //                 2809, 3947, 4402, 3700, 5267
        //             ],
        //             borderColor: "#e43202",
        //             fill: false
        //         }]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: 'Chart JS Multiple Lines Example'
        //         }
        //     }
        // });
    </script>
@endsection
