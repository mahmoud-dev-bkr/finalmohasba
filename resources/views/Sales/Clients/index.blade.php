@extends('layouts.vertical', ['title' => 'العملاء'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">المبيعات</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">العملاء</a>
                        </li>
                     </ul>
                    
                  </div>
               </div>
            </section>
            <section>
               <div class="d-flex justify-content-sm-end mx-5">
                   @can('create_client')
                    <button class="btn btn-primary mx-2">
                        
                        <a href="{{ route('client.create') }}" class="text-light">اضافة عميل</a>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    @endcan
                    <button class="btn btn-primary mx-2">
                        <a href="{{ route('ExportClient') }}" class="text-light">تحميل ملف اكسل</a>
                        <i class="fa-solid fa-plus"></i>
                    </button>

                    <!--<button class="btn btn-primary mx-2">استيراد قائمة العملاء-->
                    <!--    <i class="fa-solid fa-right-to-bracket mx-1"></i>-->
                    <!--</button>-->
                </div>
               <div class="container my-3">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">العملاء</h4>
                     </div>
                  </div>
                  @if (count($Client) > 0)

                    <section>

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center client-form">

                                    <input class="form-control w-25 mx-2 company-client" type="text" placeholder="اسم المنشأة">
                                    <input class="form-control w-25 mx-2 name-client" type="text" placeholder="الاسم">
                                    <input class="form-control w-25 mx-2 email-client" type="text" placeholder="البريدالالكتروني">
                                    <input class="form-control w-25 mx-2 phone-clinet" type="text" placeholder="رقم الأتصال الاساسي">


                                        <select class="form-control w-25 status-client" name="" id="">
                                            <optgroup>
                                                <option value="">اختار</option>
                                                <option value="1">نشط</option>
                                                <option value="2"> غير نشط</option>

                                            </optgroup>
                                        </select>

                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 client-form">

                                           

                                            <button onclick="reloadData($('.company-client').val(), $('.name-client').val(), $('.email-client').val(), $('.phone-clinet').val(), $('.status-client').val())" class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                            <button onclick="reset()" class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>
    

                                        </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="responsive-table responsive-scroll">
                                    <table id="ClientsTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">اسم </th>
                                            <th scope="col">البريد الإلكتروني </th>
                                            <th scope="col">الرصيد  </th>
                                            <th scope="col">	متأخرة </th>
                                            <th scope="col">	الحالة</th>
                                            <th scope="col">   الخيارات</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </section>
                @else
                    <div class="row bg-light pb-4 brdr">
                        <div class="col-md-12 clients ">
                            <div>
                                <img src="{{ URL('images/clients-img.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي عملاء</h1>
                                <p class="text-secondary my-5">يوفر محاسبة صفحة خاصة بالعملاء للمساهمة في تسهيل التعاملات مع العملاء وملخص لبياناتهم.</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ URL('dashboard/client/create') }}" class="text-light">اضافة عميل</a>  <i class="fa-solid fa-plus"></i></button> <button class="btn btn-primary">استيراد قائمة العملاء  <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                            </div>
                        </div>
                    </div>
                  @endif

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
    <script>
        function reloadData(company,name, email,phone,status) {
            // alert(status)
        // status-client  phone-clinet email-client  name-client company-client
            var url = "{{ route('getClientsData') }}?company=" + company+"&name="+ name +"&email="+ email +"&phone="+ phone +"&status="+ status;
            ClientsTable.ajax.url(url).load();
        }
        
        function reset()
        {
            var input1 = document.querySelector('.company-client');
            var input2 = document.querySelector('.name-client');
            var input3 = document.querySelector('.email-client');
            var input4 = document.querySelector('.phone-clinet');
            var input5 = document.querySelector('.status-client');

            input1.value = ""
            input2.value = ""
            input3.value = ""
            input4.value = ""
            input5.value = ""
            // $('.').val() = ""
            // $('.barcode-product').val() = ""
            // $('.item-product').val() = ""
            var url = "{{ route('getClientsData') }}"
            ClientsTable.ajax.url(url).load();
        }
        let ClientsTable = null

        function setClientsDatatable() {
            var url = "{{ route('getClientsData') }}";
            ClientsTable = $("#ClientsTable").DataTable({
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
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                    //delete
                    $('.notdone').click(function(e) {

                        var that = $(this)

                        e.preventDefault();

                        var n = new Noty({
                            text: "@lang(' تأكيد لالغاء')",
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
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'bonds'
                    },
                    {
                        data: 'Salesinvoices'
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

@endsection
