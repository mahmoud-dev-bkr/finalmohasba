@extends('layouts.vertical', ['title' => 'ادارة المستخدمين'])
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">
    
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
    
                    <li><span class="text-dark ml-3">الاعدادات</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="employers.html">المستخدمين</a>
                    </li>
                </ul>
            </div>
    
    
    
        </div>
    </section>
    
    <section>
        <div class="d-flex justify-content-sm-end mx-2">
            <button class="btn btn-secondary btn-sm">
                إضافة مستخدم
                <i class="fa fa-lock"></i>
            </button>
            <button class="btn btn-primary btn-sm mx-2">إدارة المناصب</button>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddUserModal"> إضافة مستخدم الدعم</button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
    
                    <h4 class="mx-4"> المستخدمين</h4>
                </div>
    
            </div>
            <div class="row bg-light pb-4 brdr">
    
                <div class="col-md-12 d-flex align-content-center justify-content-start ">
    
                    <div class="w-100">
                        
                        <div class="container">
                            <div class="row">
    
                                <div class="col-md-9">
    
                                    <div class="d-flex pt-5 justify-content-sm-center">
        
                                        <input class="form-control mx-2" style="width:15%;" type="text" placeholder="الاسم الاول">
                                        <input class="form-control form-control-sm mx-2" style="width:15%;" type="text" placeholder="اسم العائلة">
                                        <input class="form-control form-control-sm mx-2" style="width:15%;" type="text" placeholder="البريدالالكتروني">
    
                                        <select class="form-control form-control-sm" style="width:15%;" name="" id="">
                                            <optgroup>
                                                <option value="">المنصب</option>
    
                                            </optgroup>
                                        </select>
                                        
                                        <button class="btn btn-primary mx-2" style="width:15%;"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                        <button class="btn btn-dark mx-1" style="width:15%;"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>
    
    
                                    </div>
    
                                    </div>
    
                                    <div class="col-md-3"></div>
                                </div>
    
    
                        </div>
    
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <div class="p-3">
                                    <lable>
                                        في الصفحة
                                    </lable>
                                    <select>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="responsive-scroll">
                                    <table id="SuppliersTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>
                                           <th scope="col">الاسم الأول</th>
                                           <th scope="col">اسم العائلة</th>
                                           <th scope="col">البريد الإلكتروني</th>
                                           <th scope="col">	اتصال</th>
                                           <th scope="col">المنصب</th>
                                           <th scope="col">مستخدم تطبيق نقاط البيع</th>
                                           <th scope="col">آخر تسجيل دخول</th>
                                           <th scope="col">2FA</th>
                                           <th scope="col">الحالة</th>
                                           <th scope="col">الخيارات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-title="الاسم الأول" class="font-osans">
                                                <a href="#">mahmoud</a>
                                                </td>
                                                <td><a href="/tenant/users/1">ashraf</td>
                                                <td>hatem.boom1666@gmail.com</td>
                                                <td>+9661152255555</a></td>
                                                <td class="text-danger">Super Admin</td>
                                                <td>
                                                <i class="fa fa-times fa-lg"></i>
                                                </td>
                                                <td><a href="/tenant/users/1">2024-01-04</a></td>
                                                <td>
                                                <i class="fa fa-times fa-lg"></i>
                                                </td>
                                                <td><a class="text-success" href="#">نشط</a></td>
                                                <td>
                                                <a href="#"><i class="fa fa-eye"></i></a>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
    
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="AddUserModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body modal-body-container support-user-container p-5 rounded" style="background:white;">
                                        <h3 class="modal_header">إنشاء مستخدم الدعم</h3>
                                        <form class="pt-5" id="" action="#" accept-charset="UTF-8" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <label>الاسم الأول</label>
                                                </div>
                                                <div class="col">
                                                    <input value="" autofocus="autofocus" readonly="readonly" type="text" name="" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                   <label>اسم العائلة</label>
                                                </div>
                                                <div class="col">
                                                    <input value="" autofocus="autofocus" readonly="readonly" type="text" name="" id="" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>رقم الهاتف</label>
                                                </div>
                                                <div class="col">
                                                   <input value="" autofocus="autofocus" readonly="readonly" type="text" name="" id="" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                  <label>البريد الإلكتروني</label>
                                                </div>
                                                <div class="col">
                                                    <input value="" autofocus="autofocus" readonly="readonly" type="text" name="" id="" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>المنصب</label>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <select name="" id="" class="form-control" required="required">
                                                                <option value>يجب تحديد المنصب</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3">
                                                            <span class="btn" style="background:#f0f0f0;float:left;">
                                                                <i class="fa fa-edit"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>المواقع</label>
                                                </div>
                                                <div class="col">
                                                    <select name="" id="" class="form-control" required="required">
                                                        <option>المواقع</option>
                                                        <!--<option>-->
                                                        <!--    <input type="text" class="form-control">-->
                                                        <!--</option>-->
                                                        <option>المركز الرئيسي</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>الحسابات المسموح الدفع والاستلام بها</label>
                                                </div>
                                                <div class="col">
                                                    <select name="" id="" class="form-control" data-live-search="true" placeholder="يرجى اختيار الحسابات">
                                                        <option value></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>الحد الأعلى لنسبة الخصم</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" id="" value="100" placeholder="%" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form_row default_location d-none">
                                            <div class="form_name fw-500" data-toggle="tooltip" title="الموقع الافتراضي للفواتير" data-placement="bottom">
                                            الموقع الافتراضي للفواتير
                                            </div>
                                            <div class="form_field pro-select select-unit">
                                            <select name="" id="inv_default_location" class="form-control" title="اختر موقع" data-live-search="true"><option value>اختر موقع</option></select>
                                            </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col">
                                                    <label>مستخدم تطبيق نقاط البيع</label>
                                                </div>
                                                <div class="col" dir="rtl">
                                                  <input class="form-check-input form-check-input-lg" type="checkbox" id="flexCheckDefault1">
                                                </div>
                                            </div>
                                            <div class=" p-5 rounded pb-4 brdr mt-3" style="background:white;" id="div-toggle">
                                                <div class="fw-500">
                                                    <h5 class="text-primary border-bottom pb-2">
                                                    القيم للحقول الإضافية في فواتير نقاط البيع للمستخدم
                                                    </h5>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label id="">يمكنه استخدام خاصية الدفع لاحقًا</label>
                                                    </div>
                                                    <div class="col" dir="rtl">
                                                      <input class="form-check-input form-check-input-lg" type="checkbox" value="" id="flexCheckDefault1">
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col">
                                                        <label>موقع نقاط البيع</label>
                                                    </div>
                                                    <div class="col">
                                                        <select name="" id="" class="form-control">
                                                            <option>اختر الموقع</option>
                                                            <option value="1">المركز الرئيسي</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer pt-3 row">
                                                <div class="col"></div>
                                                <div class="col">
                                                    <input type="submit" class="btn btn-primary mx-2" style="width:45%;" value="حفظ">
                                                    <label class="btn btn-dark mx-1" style="width:45%;" data-dismiss="modal">إلغاء</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
<script>
    $(document).ready(function(){
      $('#div-toggle').hide();
      $('#flexCheckDefault1').change(function(){
        if($(this).is(':checked')){
          $('#div-toggle').show();
        } else {
          $('#div-toggle').hide();
        }
      });
    });
</script>
@endsection
