@extends('layouts.vertical', ['title' => 'كشوف الحسابات'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">التقارير</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="accounts-tree.html">كشوف الحسابات</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>

        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">كشوف الحسابات</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <div>

                    <div class="row my-5">

                        <div class="col-md-9 ">

                            <div class="d-flex justify-content-sm-center product-form">

                                <input class="form-control w-25 mx-2" type="text" placeholder=" الاسم">
                                <input class="form-control w-25 mx-2" type="text" placeholder=" الرمز">

                                <select class="form-control w-25 h-50" name="" id="">
                                    <optgroup>
                                        <option value=""> المستوي</option>
                                        <option value="">....</option>

                                    </optgroup>
                                </select>

                                <select class="form-control h-50 w-25 mx-3" name="" id="">
                                    <optgroup>
                                        <option value=""> النوع</option>
                                        <option value="">....</option>

                                    </optgroup>
                                </select>

                                <div class="employers d-flex align-content-center justify-content-center">
                                    <button class="btn btn-primary  mx-3"><a href="">بحث<i
                                                class="fa-solid fa-magnifying-glass mx-2"></i></a></button>
                                    <button class="btn btn-dark  mx-3"><a href="">اعادة تعيين<i
                                                class="fa-solid fa-rotate-right mx-2"></i></a></button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3"></div>
                    </div>
                    @foreach ($Accounts as $item)
                        <div class="row responsive-scroll">
                            <table class="table text-center site-table">
                                <thead class="table-head site-head">
                                    <tr>
    
                                        <th scope="col"> اسم الحساب </th>
                                        <th scope="col"> من </th>
                                        <th scope="col"> الي </th>
                                        <th scope="col">صافي الحركة </th>
    
                                    </tr>
                                </thead>
    
                                <tbody class="w-100">
    
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
    
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        <br>
                        @if(count($item->children) > 0)
                            @include('Reports.Statement.sub_account_list', [
                                'childs' => $item->children
                            ])
                        @endif
                    @endforeach

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
