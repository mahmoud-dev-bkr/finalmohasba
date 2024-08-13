@extends('layouts.vertical', ['title' => 'تقرير عمليات المستخدمين'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">تقرير عمليات المستخدمين</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> تقرير عمليات
                            المستخدمين</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>

        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> تقرير عمليات المستخدمين</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <div class="col-md-12 ">

                    <div class="container my-5">
                        <div class="row">

                            <div class="col-md-9 ">

                                <div class="d-flex justify-content-sm-center product-form">

                                    <select class="form-control w-25" name="" id="">
                                        <optgroup>
                                            <option value="">الصنف الاساسي</option>
                                            <option value="">....</option>

                                        </optgroup>
                                    </select>
                                    <select class="form-control mx-2 w-25" name="" id="">
                                        <optgroup>
                                            <option value="">الصنف الاساسي</option>
                                            <option value="">....</option>

                                        </optgroup>
                                    </select>

                                    <select class="form-control w-25" name="" id="">
                                        <optgroup>
                                            <option value="">الصنف الاساسي</option>
                                            <option value="">....</option>

                                        </optgroup>
                                    </select>

                                    <input class="form-control w-25  mx-2" type="date" placeholder=" ">

                                </div>

                            </div>

                            <div class="col-md-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="d-flex justify-content-sm-start my-3 mx-2 product-form">




                                    <input class="form-control w-50 mx-5" type="date" placeholder=" ">

                                    <button class="btn btn-primary pc mx-1"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                    <button class="btn btn-dark pc mx-1 b2"><i
                                            class="fa-solid fa-arrow-rotate-left"></i></button>


                                </div>

                                <div class="col-md-7"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class=" d-flex justify-content-lg-start my-2 mx-2 site-form">

                                    <p class="lead mt-1">في الصفحة</p>

                                    <select class="form-control mx-2 w-25" name="" id="">
                                        <optgroup>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>



                                        </optgroup>
                                    </select>


                                </div>

                                <div class="col-md-10"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <table class="table text-center site-table">
                                        <thead class="table-head site-head">
                                            <tr>

                                                <th scope="col"> التاريخ <i class="fa fa-sort mx-1"></i></th>
                                                <th scope="col"> المستخدم <i class="fa fa-sort mx-1"></i></th>
                                                <th scope="col"> المستند <i class="fa fa-sort mx-1"></i> </th>
                                                <th scope="col"> العملية <i class="fa fa-sort mx-1"></i></th>
                                                <th scope="col"> التفاصيل </th>



                                            </tr>
                                        </thead>
                                        <tbody class="w-100">
                                            <tr>

                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>

                                                <td>

                                                    <a href="#" class="text-dark">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </td>



                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
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
