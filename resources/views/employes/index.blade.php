@extends('layouts.vertical', ['title' => 'الموظفين'])
@section('content')
      <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                  <div class="col-lg-12 mt-3">
                  <ul class="d-flex align-content-center">

                  <li><span  class="text-dark ml-3">الرواتب</span></li>
                  <li class="text-primary">
                  <i class="fa fa-angle-double-left mx-2 "></i><a href="employers.html">الموظفين</a>
                  </li>
                  </ul>
                  </div>



            </div>
        </section>
            <section>
                <div class="d-flex justify-content-sm-end mx-5 employers">
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light"> موظف جديد</a> <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light">الموظفين المقالين</a> </button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light"> الارشيف</a> </button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light"> مستندات الموظف</a> </button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light">سندات الموظفين</a> </button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light">جداول اوقات العمل</a> </button>
                    <button class="btn btn-primary mx-2">  <a href="" class="text-light"> التأمينات الاجتماعية</a> </button>

                    </div>
              <div class="container my-3">
                <div class="row">
                  <div class="col-md-12 hi-mohasba">

                      <h4 class="mx-4"> الموظفين</h4>
                    </div>

                </div>
                  @if (count($employe) > 0)

                    <section>

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center Supplier-form">

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="الاسم">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="البريدالالكتروني">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="رقم الأتصال الاساسي">


                                        <select class="form-control w-25" name="" id="">
                                            <optgroup>
                                                <option value="">نشط</option>
                                                <option value=""> غير نشط</option>

                                            </optgroup>
                                        </select>

                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 Supplier-form">

                                            <select class="form-control w-25" name="" id="">
                                                <optgroup>
                                                    <option value="">الحقوق الاضافية</option>


                                                </optgroup>
                                            </select>

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">

                                    <button class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                    <button class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                    </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="responsive-scroll">
                                    <table id="employeTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">الاسم باللغة العربية</th>
                                            <th scope="col">الاسم باللغة الانجليزية</th>
                                            <th scope="col">الهاتف</th>
                                            <th scope="col">العنوان</th>
                                            <th scope="col">الوظيفة</th>
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
                           <img src="{{ URL('images/employers.svg') }}"  alt="">
                           <h1 class="my-2">ليس لديك أي الموظفين</h1>
                           <p class="text-secondary my-3 w-75 mx-auto">يتيح لك محاسبة الاطلاع على الموظفين الحاليين والحصول على معلومات الموظف بشكل مفصّل حسب ما يتم إرفاقه من قبل صاحب المنشأة .</p>
                           <button class="btn btn-primary mx-2 "> <a href="{{ route('employe.create') }}" class="text-light">  موظف جديد</a>  <i class="fa-solid fa-plus"></i></button>
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
        let employeTable = null

        function setemployeDatatable() {
            var url = "{{ route('getemployeData') }}";
            employeTable = $("#employeTable").DataTable({
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
                        data: 'name_ar'
                    },
                    {
                        data: 'name_en'
                    },
                    {
                        data: 'phon'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'Job_Name'
                    },
                    {
                        data: 'action'
                    }

                ],
            });
        }
        $(function() {
            setemployeDatatable();
        });

    </script>

@endsection
