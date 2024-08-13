@extends('layouts.vertical', ['title' => 'ادارة المستخدمين'])
@section('css')
<style>
    .table tr{
        line-height:3;
    }
    
</style>
@endsection
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">
    
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
    
                    <li><span class="text-dark ml-3">الصفحة الرئيسية</span></li>
                    <li><span class="text-dark ml-3"><i class="fa fa-angle-double-left mx-2 "></i>الاعدادات</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">المنصب</a>
                    </li>
                </ul>
            </div>
    
    
    
        </div>
    </section>
    
    <section>
        <div class="d-flex justify-content-sm-end mx-2">
            <button class="btn btn-primary btn-sm mx-2">
                إنشاء منصب
                <i class="fa fa-plus"></i>
            </button>
            <button class="btn btn-primary btn-sm mx-2">
                 رجوع
                <i class="fa fa-arrow-left"></i>
            </button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">المناصب</h4>
                </div>
    
            </div>
            <div class="row bg-light brdr">
                <div class="col-12" style="background:white;min-height:60vh;">
                    <div class="mt-5 d-flex">
                        <label>
                          في الصفحة
                        </label>  
                        <select name="" id="" class="form-control" style="width:80px;margin-right:20px;">
                          <option value="15">15</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="mt-5 row">
                            <div class="col-md-12">
                                <div class="responsive-scroll">
                                    <table id="" class="table text-center">
                                        <thead class="table-head">
                                            <tr>
                                                <th scope="col">اسم المنصب</th>
                                                <th scope="col">عدد المستخدمين</th>
                                                <th scope="col">الخيارات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    محاسب
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <a href="#" class="btn p-1" data-toggle="tooltip" data-placement="top" title="
                                                    عرض
                                                    ">
                                                        <i class="fa fa-eye fa-lg"></i>
                                                    </a>
                                                    <a href="#" class="btn p-1" style="margin:0 10px;" data-toggle="tooltip" data-placement="top" title="
                                                    نعديل
                                                    ">
                                                        <i class="fa fa-edit fa-lg fa-lg"></i>
                                                    </a>
                                                    <a href="#" class="btn p-1" data-toggle="tooltip" data-placement="top" title="
                                                    حذف
                                                    ">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <span class="text-primary mt-5">
                                    يتم عرض منصب
                                </span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Vendor js -->
<script src="https://mohsba2.taelim.net/assets/js/vendor.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/notyf.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://mohsba2.taelim.net/js/main.js"></script>
  <!-- Plugins js-->
<script src="https://mohsba2.taelim.net/assets/libs/datatables/datatables.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/libs/pdfmake/pdfmake.min.js"></script>
@endsection
