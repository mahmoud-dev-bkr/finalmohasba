@extends('layouts.vertical', ['title' => 'الموقع الرئيسى'])
@section('content')
      <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                  <div class="col-lg-12 mt-3">
                  <ul class="d-flex align-content-center">

                  <li><span  class="text-dark ml-3">المنتجات والتكاليف</span></li>
                  <li class="text-primary">
                  <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Site.index') }}"> الموقع الرئيسى</a>
                  </li>
                  </ul>
                  </div>



            </div>
        </section>
            <section>
                <div class="d-flex justify-content-sm-end mx-5">

                    </div>

                  @if (count($Site) > 0)

                    <section>
                        <div class="d-flex justify-content-sm-end mx-5">
                           <!--<button class="btn btn-primary mx-2">  <a href="{{ route('Site.create') }}" class="text-light">انشاء موقع </a> <i class="fa-solid fa-plus"></i></button>-->
                            </div>
                      <div class="container my-3">
                        <div class="row">
                          <div class="col-md-12 hi-mohasba">

                              <h4 class="mx-4"> الموقع الرئيسى</h4>
                            </div>

                        </div>
                        <div class="row bg-light pb-4 brdr">

                         <div class="col-md-12 my-3 ">



                            <div class="container">


                                    <div class="row">
                                        <div class="col-md-5">
                                            <div  class="d-flex justify-content-sm-start my-3 mx-2 site-form">



                                        <input class="form-control w-25 mx-2 name-site" type="text" placeholder=" الاسم">

                                        <button onclick="reloadData($('.name-site').val())" class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                        <button onclick="reset()" class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                        </div>

                                        <div class="col-md-7"></div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div  class=" d-flex justify-content-lg-start my-2 mx-2 site-form">

                                            <p class="lead  mt-1">في الصفحة</p>

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
                                    <div class="responsive-scroll">
                                        <table class="table text-center site-table" id="SiteTable">
                                            <thead class="table-head site-head">
                                              <tr>

                                                <th scope="col"> الاسم الانجليزي</th>
                                                <th scope="col">	 الاسم العربي </th>
                                                <th scope="col">	  الحساب </th>
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
                        <div class="col-md-12 Suppliers ">
                            <div>
                                <img src="{{ URL('images/Suppliers-img.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي موقع</h1>
                                <p class="text-secondary my-5">يوفر قيود صفحة خاصة بالعملاء للمساهمة في تسهيل التعاملات مع العملاء وملخص لبياناتهم.</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ URL('dashboard/Site/create') }}" class="text-light">اضافة موق</a>  <i class="fa-solid fa-plus"></i></button> <button class="btn btn-primary">استيراد قائمة الموقع الرئيسى  <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
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
        let SiteTable = null
        function reloadData(name) {
            
            var url = "{{ route('getSiteData') }}?name=" + name;
            SiteTable.ajax.url(url).load();
        }
        function reset()
        {
            var input1 = document.querySelector('.name-site');


            input1.value = ""

            var url = "{{ route('getSiteData') }}"
            SiteTable.ajax.url(url).load();
        }
        function setSiteDatatable() {
            var url = "{{ route('getSiteData') }}";
            SiteTable = $("#SiteTable").DataTable({
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
                        data: 'Inventory_id'
                    },
                    {
                        data: 'action'
                    }


                ],
            });
        }
        $(function() {
            setSiteDatatable();
        });

    </script>

@endsection
