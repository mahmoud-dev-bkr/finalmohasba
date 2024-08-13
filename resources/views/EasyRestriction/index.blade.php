@extends('layouts.vertical', ['title' => ' قيود سهلة'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">محاسبة</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">قيود سهلة</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </section>
            <section>
               <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2">
                        <a href="{{ route('EasyRestriction.tenant') }}" class="text-light">اضافة قيود سهلة</a>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
               <div class="container my-3">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">قيود سهلة</h4>
                     </div>
                  </div>
                  @if (count($EasyRestriction ) > 0)
                    <section>

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center Product-form">

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
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 Product-form">

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
                                    <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">من</th>
                                            <th scope="col">الى</th>
                                            <th scope="col">الوصف</th>
                                            <th scope="col">التاريخ  </th>
                                            <th scope="col">	مجموع الـ دائن/مدين</th>
                                            <th scope="col">الخيارات</th>


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
                                <img src="{{ URL('images/easy-res.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي قيود سهلة</h1>
                                <p class="text-secondary my-5">يتيح لك قيود خاصية القيود السهلة للمستخدمين الذين ليس لديهم خبرة محاسبية عبر عرض العملية وتفاصيل الحسابات بطريقة مبسطة سهلة..</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ route('EasyRestriction.tenant') }}" class="text-light">اضافة قيود سهلة</a>  <i class="fa-solid fa-plus"></i>
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
        let EasyRestrictionTable = null

        function setEasyRestrictionDatatable() {
            var url = "{{ route('getEasyRestrictionData') }}";
            EasyRestrictionTable = $("#EasyRestrictionTable").DataTable({
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
                        data: 'id_account_from'
                    },
                    {
                        data: 'id_account_to'
                    },
                    {
                        data: 'Des'
                    },
                    {
                        data: 'date'
                    },
                    {
                        data: 'amunt'
                    },

                    {
                        data: 'action'
                    }

                ],
            });
        }
        $(function() {
            setEasyRestrictionDatatable();
        });

    </script>

@endsection
