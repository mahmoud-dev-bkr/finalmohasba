@extends('layouts.vertical', ['title' => 'دفتر الاستاذ'])
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3">التقارير</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="accounts-tree.html">دفتر الاستاذ</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>


        <section>

            <div class="container my-3">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">

                        <h4 class="mx-4">دفتر الاستاذ</h4>
                    </div>

                </div>
                <div class="row bg-light pb-4 brdr">

                    <div>

                        <div class="row my-5">
                            <form action="{{ route('Teacher.report') }}" method="get">
                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center product-form">

                                        <input class="form-control w-25 mx-2" name="Accountname" type="text"
                                            placeholder=" الاسم">
                                        <input class="form-control w-25 mx-2" name="code" type="text" placeholder=" الرمز">

                                        <select class="form-control w-25 h-50" name="level" id="">
                                            <optgroup>
                                                <option value=""> المستوي</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>

                                            </optgroup>
                                        </select>

                                        <select class="form-control h-50 w-25 mx-3" name="type" id="">
                                            <optgroup>
                                                <option value=""> النوع</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                                            </optgroup>
                                        </select>

                                        <div class="employers d-flex align-content-center justify-content-center">
                                            <button class="btn btn-primary  mx-3">بحث<i
                                                    class="fa-solid fa-magnifying-glass mx-2"></i></button>
                                            <a class="btn btn-dark  mx-3" href="{{ route('Teacher.report') }}">اعادة تعيين<i
                                                        class="fa-solid fa-rotate-right mx-2"></i></a>

                                        </div>

                                    </div>

                                </div>
                            </form>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="table-responsive-lg max-con responsive-scroll">
                            <table class="table  tree-table ">
                                <thead class="cf">
                                    <tr>

                                        <th colspan="8"> اسم الحساب </th>
                                        <th> من </th>
                                        <th> الي </th>
                                        <th> صافي الحركه </th>


                                    </tr>
                                </thead>
                                <tbody class="stream-append">
                                    @foreach ($Accounts as $item)
                                        <tr>


                                            <td class="padleftindex-1" colspan="8">
                                                {{ $item->name }}
                                            </td>
                                            <td class="account-kind">
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>

                                            @if (count($item->children) > 0)
                                                @include('Reports.Report1_Tec.sub_account_list', [
                                                    'childs' => $item->children,
                                                    'level' => $item->level + 1,
                                                    'parentAccount' => $item,
                                                    'sumfrom' => $item->total_amount_from,
                                                    'sumto' => $item->total_amount_to,
                                                    'summove' => $item->total_amount_from - $item->total_amount_to,
                                                ])
                                            @endif

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
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
