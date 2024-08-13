@extends('layouts.vertical', ['title' => 'خدمات'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">خدمات و تكاليف</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="">خدمات</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </section>
            <section>
               <div class="d-flex justify-content-sm-end mx-5">
                   @can('create_salesinvoices')
                    <button class="btn btn-primary mx-2">
                        <a href="{{ route('Services.create') }}"  class="text-light">إنشاء فاتورة</a>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    @endcan

                    <!--<button  class="btn btn-primary mx-2" >-->
                        <!--<a href="{{ route('ExportSalesinvoices') }}" class="text-light"> تصدير </a>-->
                    <!--    استيراد-->
                    <!--    <i class="fa-solid fa-plus"></i>-->
                    <!--</button>-->
                     @can('create_ReturnsSalesInvoices')
                        <button class="btn btn-primary mx-2">
                            <a href="{{ route('ReturnsSalesInvoices.create') }}" class="text-light">إشعارات دائنه</a>
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    @endcan
                    @can('create_Clientbond')
                        <button class="btn btn-primary mx-2">
                            <a href="{{ route('Clientbond.create') }}" class="text-light"> انشاء سند عميل </a>
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    @endcan
                    <!--{{-- <button class="btn btn-primary mx-2">استيراد قائمة فاتورة مبيعات  -->
                    <!--    <i class="fa-solid fa-right-to-bracket mx-1"></i>-->
                    <!--</button> --}}-->
                </div>
               <div class="container my-3 max-con">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">خدمات</h4>
                     </div>
                  </div>
                  @if (count($PurchaseInvoices) > 0)

                    <section class="row  pb-4 brdr">

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-10 ">

                                    <div class="d-flex justify-content-sm-center PurchaseInvoices-form">

                                        <input type="text" class="form-control w-30 mx-2 code" placeholder="المرجع">
                                        <select name="" id="" class="form-control w-30 mx-2 name">
                                            @foreach ($Clients as $Client)
                                                <option value="{{ $Client->name }}"> {{ $Client->name }} </option>
                                            @endforeach
                                        </select>

                                    </div>


                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 PurchaseInvoices-form">

                                    <button onclick="reloadData($('.code').val(), $('.name').val())" class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
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
                                            <th scope="col">اسم المورد</th>
                                            <th scope="col"> المجموع</th>
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
                        <div class="col-md-12 PurchaseInvoicess text-center mt-5" style="margin:aout">
                            <div >
                                <img src="{{ URL('images/sales.svg') }}" style="width:250px; height:250px"  alt="">
                                <h1 class="my-3">ليس لديك أي خدمات</h1>
                                <p class="text-secondary my-5">
                                    يتيح لك محاسبة خاصية إنشاء فواتير خدمات و تكاليف وهي وثائق تجارية صادرة من البائع للمشتري، تبين المنتجات أو الخدمات المقدمة, وكمياتها, وأسعارها.
                                </p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ route('sales_invoices.create') }}" class="text-light">إنشاء فاتورة</a>  <i class="fa-solid fa-plus"></i></button>


                            </div>
                        </div>
                    </div>
              @endif
               </div>
            </section>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">انشاء سند مورد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <!--action="{{ route('sales_invoices.payment.post') }}" method="post"-->
                <form id="myForm" class="mx-auto row  pb-4 brdr" action="{{ route('sales_invoices.payment.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input id="code"   name="code" type="text" class="form-control w-75 my-2">

                            </div>
                                <input name="PurchaseInvoices_id" id="invId" type="text" class="form-control w-75 my-2" hidden>
                                <input name="type" value="1" type="text" class="form-control w-75 my-2" hidden>
                                <input name="status"       value="3" type="text" class="form-control w-75 my-2" hidden>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">العميل</label>
                                    <select  class="form-control w-75" name="id_customers" id="id_customers">
                                        <optgroup>

                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input name="Date" type="date" id="date" value="{{ old('Date', date('Y-m-d')) }}"   class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">الحساب</label>
                                    <select  class="form-control w-75" name="id_Account" id="account">
                                        <optgroup>
                                            <option value="">اختار الحساب</option>

                                        </optgroup>
                                    </select>
                                </div>
                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">النوع</label>
                                    <select  class="form-control w-75" name="type" id="">
                                        <optgroup>
                                            <option value="1">قبض</option>
                                        </optgroup>
                                    </select>
                                </div>


                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">القيمة</label>
                                <input type="text" name="Amount" id="Amount"
                                    class="form-control w-75 my-2" onfocusout="calculator()">

                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">المتبقي</label><input type="text" readonly id="total" value="0"
                                    class="form-control w-75 my-2"   name="total">
                            </div>



                        </div>




                    </div>



                    <div class="btn-holder mt-3">


                    </div>
                </form>
              </div>
              <div class="modal-footer">
                   <button class="btn btn-primary submit" id="submitButton">حفظ وموافقة</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
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
    function reloadData(code,name) {
            // end-date start-date date status name code
            // alert(site)
            var url = "{{ route('getServicessData') }}?code=" + code+"&name="+ name ;
            PurchaseInvoicesTable.ajax.url(url).load();
        }
        function reset()
        {
            var input1 = document.querySelector('.code');
            var input2 = document.querySelector('.name');


            input1.value = ""
            input2.value = ""

            input7.value = ""
            // $('.').val() = ""
            // $('.barcode-product').val() = ""
            // $('.item-product').val() = ""
            var url = "{{ route('getServicessData') }}"
            PurchaseInvoicesTable.ajax.url(url).load();
        }
        let PurchaseInvoicesTable = null

        function setPurchaseInvoicesDatatable() {
            var url = "{{ route('getServicessData') }}";
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
                    data: 'total',

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

            const url = '{{ route("ExportSalesinvoices") }}?code=' + code+"&name="+ name +"&status="+ status +"&date="+ date +"&start_date="+ start_date+"&end_date="+ end_date+"&site="+ site;

            alert("يتم التحميل")

            fetch(url, {
                method: 'GET',
            })
            .then(response => response.blob())
            .then(blob => {
                // Create a temporary anchor element
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'filename.xlsx';
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

         const formElement = document.getElementById('myForm');
      const submitButton = document.getElementById('submitButton');

      submitButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
          var inputElement = document.getElementById('id_customers');
          var state        = "yes"
          var account       = document.getElementById('account');
          // Date_Groce_Period product_$ site-id date_end_id Date_start_id

          var code                      = document.getElementById('code');
          var date                      = document.getElementById('date');
          var Amount                    = document.getElementById('Amount');

          if (inputElement.value.trim() === '') {
            inputElement.classList.add('error-border');
            state = "no";
          }
          if (account.value.trim() === '') {
            account.classList.add('error-border');
            state = "no";
          }

          if (code.value.trim() === '') {
            code.classList.add('error-border');
            state = "no";
          }
          if (date.value.trim() === '') {
            date.classList.add('error-border');
            state = "no";
          }
          if (Amount.value.trim() === '') {
            Amount.classList.add('error-border');
            state = "no";
          }



          if (state == "yes") {
              formElement.submit();
          } else {
              alert("يجب ادخال جميع الحقول")
          }

        // Perform any additional actions or validation if needed

        // Submit the form programmatically

      });
    </script>

@endsection
