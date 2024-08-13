@extends('layouts.vertical', ['title' => 'ادارة المستخدمين'])
@section('css')
<style>
    
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
                <div class="col-12 d-flex align-items-center justify-content-center" style="background:white;height:100vh;">
                    <div class="text-center">
                        <img src="{{ URL('images/lock-key.svg') }}" style="height:210px;">
                        <h1 class="text-center mt-3">
                            ليس لديك أي مناصب
                        </h1>
                        <div class="text-center" style="width:60%;margin:auto;">
                            <p class="mt-3">
                                يتيح لك محاسبه إدارة المناصب وتحديد الصلاحيات (القراءة، الإنشاء، الحذف، الموافقة) لكل مستخدم باختلاف منصبه؛ لتحقيق الرقابة الداخلية على منشأتك.
                            </p>
                            <a class="btn btn-primary mt-3" href="#">
                                إنشاء منصب
                                <i class="fa fa-plus"></i>
                            </a>
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
