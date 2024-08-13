@extends('layouts.vertical', ['title' => 'الوحدات'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">المبيعات</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="Products.html">الوحدات</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </section>
            <section>
                
              <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="{{ route('Product.create.unit') }}" class="text-light"> انشاء وحدة</a> <i
                        class="fa-solid fa-plus"></i></button>
                </div>
                
               <div class="d-flex justify-content-sm-end mx-5">
                    
                
               <div class="container my-3 max-con">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">الوحدات</h4>
                     </div>
                  </div>
                  @if (count($Product) > 0)

                    <div class="row  pb-4 brdr">

                        <div class="container my-5 ">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center Product-form">

                                    <input id="code" class="form-control w-25 mx-2 code-product" type="text" placeholder="الاسم"   >  


                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-4 Product-form">

                                           

                                        <button onclick="reloadData($('.code-product').val())"
                                        class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                        <button onclick="reset()" class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                    </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="responsive-scroll">
                                    <table id="ProductsTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">الاسم</th>
                                            
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
                                <img src="{{ URL('images/Products.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي الوحدات</h1>
                                <p class="text-secondary my-5">يوفر محاسبة صفحة خاصة بالوحدات للمساهمة في تسهيل التعاملات مع الوحدات وملخص لبياناتهم.</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ route('Product.tenant') }}" class="text-light">اضافة الوحدات</a>  <i class="fa-solid fa-plus"></i></button> <button class="btn btn-primary">استيراد قائمة الوحدات  <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                            </div>
                        </div>
                    </div>
                  @endif

               </div>
            </div>
      </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
      <!-- Plugins js-->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script>
       function reloadData(code) {
            // alert(name)
            var url = "{{ route('getUnitsData') }}?code=" + code ;
            ProductsTable.ajax.url(url).load();
        }
        function reset()
        {
            
            var input2 = document.querySelector('.code-product');
   

            
            
            input3.value = ""
            
            // $('.').val() = ""
            // $('.barcode-product').val() = ""
            // $('.item-product').val() = ""
            var url = "{{ route('getUnitsData') }}"
            ProductsTable.ajax.url(url).load();
        }
        let ProductsTable = null

        function setProductsDatatable() {
            var url = "{{ route('getUnitsData') }}";
            ProductsTable = $("#ProductsTable").DataTable({
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
                    }

                ],
            });
        }
        $(function() {
            setProductsDatatable();
        });
    
    </script>

@endsection
