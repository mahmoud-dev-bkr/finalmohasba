@extends('layouts.vertical', ['title' => 'اشعار مدين'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">المبيعات</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="Purchase_orderss.html">اشعار مدين</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </section>
            <section>
               <div class="d-flex justify-content-sm-end mx-5">
                    
                    <button onclick="downloadExcel($('.code').val(), $('.name').val(), $('.status').val(), $('.date').val(), $('.start-date').val(), $('.end-date').val(), $('.site').val())" class="btn btn-primary mx-2" id="exportButton">
                        <!--<a href="{{ route('ExportSalesinvoices') }}" class="text-light"> تصدير </a>-->
                        تصدير
                        <i class="fa-solid fa-plus"></i>
                        @can('create_ReturnsPurchaseInvoices')
                    </button>
                    <button class="btn btn-primary mx-2">
                        <a href="{{ route('ReturnsPurchase_Invoices.create') }}" class="text-light">إشعارات مدينه</a>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    @endcan
                    
                    <!--{{-- <button class="btn btn-primary mx-2">استيراد قائمة اشعار مدين  -->
                    <!--    <i class="fa-solid fa-right-to-bracket mx-1"></i>-->
                    <!--</button> --}}-->
                </div>
               <div class="container my-3 max-con">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">اشعار مدين</h4>
                     </div>
                  </div>
                  @if (count($PurchaseInvoices) > 0)

                    <section class="row  pb-4 brdr">

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-10 ">

                                    <div class="d-flex justify-content-sm-center PurchaseInvoices-form">

                                        <input type="text" class="form-control w-30 mx-2 code" placeholder="المرجع">
                                        <input type="text" class="form-control w-30 mx-2 name" placeholder="اسم المورد">
                                        <!--<input type="text" class="form-control w-30 mx-2 point" placeholder="   مرجع نقاط بيع ">-->
                                        <select class="form-control w-100 select-fillter status" name="" id="">
                                            <optgroup>
                                                <option value="">حالة الفاتورة</option>
                                                <option value="6"> مسودة    </option>
                                                <option value="5"> مستعمل جزئيا    </option>
                                                <option value="3">  بانتظار الموافقه    </option>
                                                <option value="7">    غير مستعمل </option>
                                                <option value="4">  مستعمل </option>


                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-sm-center PurchaseInvoices-form">
                                        <select class="form-control w-100 select-fillter date" name="" id="">
                                            <optgroup>
                                                <option value="">التاريخ</option>
                                                <option value="1">تاريخ الاصدار</option>
                                                <option value="2">  تاريخ الاستحقاق </option>

                                            </optgroup>
                                        </select>
                                                                       
                                        <input type="date" class="form-control w-30 mx-2 select-fillter  start-date" onfocus="(this.type='date')"  placeholder="من">
                                        <input type="date" class="form-control w-30 mx-2 select-fillter end-date" onfocus="(this.type='date')"  placeholder="الي">
                                        <select style="height:40px" class="form-control select-fillter  site" name="" id="">
                                            <optgroup>
                                                <option value="">اختار الموقع</option>
                                                @foreach ($sites as $site )
                                                    <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>

    
                                        <br><br>
                                        
                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 PurchaseInvoices-form">

                                    <button onclick="reloadData($('.code').val(), $('.name').val(), $('.status').val(), $('.date').val(), $('.start-date').val(), $('.end-date').val(), $('.site').val())" class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                    <button onclick="reset()" class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                    </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>


                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <div class="responsive-scroll">
                                    <table id="PurchaseInvoicesTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col"> المرجع </th>
                                            <th scope="col">اسم المورد </th>
                                            <th scope="col">تاريخ الإصدار</th>
                                            <th scope="col">تاريخ الاستحقاق</th>
                                            <th scope="col"> اجمالي الفاتورة </th>
                                            <th scope="col"> الرصيد</th>
                                            <th scope="col"> حالة الفاتورة</th>
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
                        <div class="col-md-12 PurchaseInvoicess ">
                            <div>
                                <img src="{{ URL('images/PurchaseInvoicess-img.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي اشعار مدين</h1>
                                <p class="text-secondary my-5">يوفر قيود صفحة خاصة بالاشعار مدين للمساهمة في تسهيل التعاملات مع العملاء وملخص لبياناتهم.</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ route('ReturnsPurchase_Invoices.create') }}" class="text-light">اضافة اشعار مدين</a>  <i class="fa-solid fa-plus"></i></button> <button class="btn btn-primary">استيراد قائمة الاشعار مدين  <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
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
    <script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json"></script>
      <!-- Plugins js-->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script>
    function reloadData(code,name, status,date,start_date,end_date, site) {
            // end-date start-date date status name code 
            // alert(site)
            var url = "{{ route('getReturnsPurchase_InvoicessData') }}?code=" + code+"&name="+ name +"&status="+ status +"&date="+ date +"&start_date="+ start_date+"&end_date="+ end_date+"&site="+ site;
            PurchaseInvoicesTable.ajax.url(url).load();
        }
        function reset()
        {
            var input1 = document.querySelector('.code');
            var input2 = document.querySelector('.name');
            var input3 = document.querySelector('.date');
            var input4 = document.querySelector('.start-date');
            var input5 = document.querySelector('.end-date');
            var input6 = document.querySelector('.status');
            var input7 = document.querySelector('.site');

            input1.value = ""
            input2.value = ""
            input3.value = ""
            input4.value = ""
            input5.value = ""
            input6.value = ""
            input7.value = ""
            // $('.').val() = ""
            // $('.barcode-product').val() = ""
            // $('.item-product').val() = ""
            var url = "{{ route('getReturnsPurchase_InvoicessData') }}"
            PurchaseInvoicesTable.ajax.url(url).load();
        }
        let PurchaseInvoicesTable = null

        function setPurchaseInvoicesDatatable() {
            var url = "{{ route('getReturnsPurchase_InvoicessData') }}";
            PurchaseInvoicesTable = $("#PurchaseInvoicesTable").DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip',
                lengthMenu: [25, 50, 75, 100, 150, 200, 300, 500],
                pageLength: 25,
                sorting: [0, "DESC"],
                ordering: false,
                ajax: url,
                // buttons : ['excel', 'print', 'reset', 'reload'],
                // language: [
                //           'url' => url('/vendor/datatables/arabic.json')
                // ],
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
                

                // language: {
                paginate: {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
                // },

                columns: [{
                    data: 'code'
                },
                {
                  data: 'id_supplers'  
                },
                {
                    data: 'Date_start'
                },
                {
                    data: 'Date_end'
                },
                {
                    data: 'old_balance'
                },
                {
                    data: 'total',
                    
                },
                {
                    data: 'status'  
                },
                {
                    data: 'action',
                    
                }

                ],
            });
        }
        $(function() {
            setPurchaseInvoicesDatatable();
        });
        
        // function exportTableToExcel(filename) {
        //     var table = document.getElementById("PurchaseInvoicesTable");
        //     var html = table.outerHTML;

        //     var blob = new Blob([html], {
        //         type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=utf-8"
        //     });
        //     var url = URL.createObjectURL(blob);

        //     var a = document.createElement("a");
        //     a.href = url;
        //     a.download = filename;
        //     a.click();
        // }

        // document.getElementById("exportButton").addEventListener("click", function () {
        //     exportTableToExcel("data.xlsx");
        // });
        
        function downloadExcel(code,name, status,date,start_date,end_date, site) {
            
            const url = '{{ route("ExportReturnsPurchase_Invoices") }}?code=' + code+"&name="+ name +"&status="+ status +"&date="+ date +"&start_date="+ start_date+"&end_date="+ end_date+"&site="+ site;
            
            alert("يتم التحميل")
        
            fetch(url, {
                method: 'GET',
            })
            .then(response => response.blob())
            .then(blob => {
                // Create a temporary anchor element
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'ExportReturnsSalesInvoices.xlsx';
                document.body.appendChild(link);
        
                // Trigger the click event to start the download
                link.click();
        
                // Remove the temporary anchor element
                document.body.removeChild(link);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }        
        
        
    </script>

@endsection