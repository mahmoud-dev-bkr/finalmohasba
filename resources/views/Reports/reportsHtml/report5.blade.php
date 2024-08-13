@extends('layouts.vertical', ['title' => 'دفتر القيود'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3"> تقارير</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> دفتر القيود </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>


    <section>
        <div class="container my-3">
            {{-- <div class="row">
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



                            <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


                        </div>



                    </div>


                </div>

            </div> --}}
            <div class="row pb-4 brdr">


                <div class="col-md-12">
                    <div class="w-100 my-5 table-responsive-lg">
                        <h3 class="text-center">دفتر القيود
                        </h3>
                        <h6 class="text-center my-3">اسم الشركة</h6>
                        <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>


                        <table class="table  table-hover">
                            <thead class="cf">
                                <tr>
                                    <th colspan="3"><u><a target="_blank" href="/tenant/bills/1">فاتورة مشتريات
                                                BIL1</a></u></th>
                                    <th><a target="_blank" href="/tenant/bills/1">رقم القيد 1</a></th>
                                    <th>2023-07-05</th>
                                    <th><a href="/tenant/reports/journal_reports/print_entry?entry_id=1" target="_blank"><i
                                                class="fa fa-print fa-lg" data-toggle="tooltip" data-placement="bottom"
                                                title="" data-original-title="طباعة"></i></a></th>
                                </tr>
                                <tr>
                                    <th class="journal-report-align-cols">الحساب</th>
                                    <th class="journal-report-align-cols">التفصيل</th>
                                    <th class="journal-report-align-cols">مدين</th>
                                    <th class="journal-report-align-cols">دائن</th>
                                    <th class="journal-report-align-cols" colspan="2">التعليقات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="" href="/tenant/reports/general_ledgers/10?filter_view=false">1106 -
                                            المخزون <span>
                                                (1106)</span></a></td>
                                    <td></td>
                                    <td><a href="/tenant/reports/general_ledgers/10?filter_view=false">10,000.00 ر.س</a>
                                    </td>
                                    <td></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><a class="" href="/tenant/reports/general_ledgers/19?filter_view=false">2105 -
                                            ضريبة القيمة
                                            المضافة المستحقة <span> (2105)</span></a></td>
                                    <td>ضريبة القيمة المضافة</td>
                                    <td><a href="/tenant/reports/general_ledgers/19?filter_view=false">1,500.00 ر.س</a></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td><a class="" href="/tenant/reports/general_ledgers/14?filter_view=false">2101 -
                                            الدائنون <span>
                                                (2101)</span></a></td>
                                    <td>a 2</td>
                                    <td></td>
                                    <td><a href="/tenant/reports/general_ledgers/14?filter_view=false">11,500.00 ر.س</a>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr class="reports-total dark_row_top">
                                    <td data-title="Account">أنشئ بواسطة Mostafa abosallam</td>
                                    <td data-title="Contact"></td>
                                    <td data-title="Debit">11,500.00 ر.س</td>
                                    <td data-title="Credit">11,500.00 ر.س</td>
                                    <td data-title="comment" colspan="2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between my-3">
                        <button class="btn btn-dark">
                            تصدير دفتر القيود بشكل منفصل الى PDF</button>
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
        $(function() {
            setSuppliersDatatable();
        });
    </script>
@endsection
