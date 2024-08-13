<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> التقارير </title>
    <link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
</head>

<body>


    <div class="container-fluid">




        <div id="wrapper">

          @include('layouts.shared.left-sidebar')
        


          @include('layouts.shared/topbar')



            <section>
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4">التقارير</h4>
                        </div>

                    </div>
                    <div class="row bg-light py-5 pb-4 brdr">



                        <div class="col-md-4 text-center">
                            <a href="{{ route('Teacher.report') }}">

                                <img src="{{ URL('images/1.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> دفتر الأستاذ</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center">
                            <a href="{{ route('reports.report2') }}">

                                <img src="{{ URL('images/2.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> قائمة الدخل</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center">
                            <a href="{{ route('reports.report3') }}">

                                <img src="{{ URL('images/3.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold"> الميزانية العمومية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report4') }}">

                                <img src="{{ URL('images/4.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ميزان المراجعة</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report5') }}">

                                <img src="{{ URL('images/5.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> دفتر القيود</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report6') }}">

                                <img src="{{ URL('images/6.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> قائمة التدفقات النقدية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report7') }}">

                                <img src="{{ URL('images/7.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ملخص المبيعات والمشتريات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report8') }}">

                                <img src="{{ URL('images/8.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مواقع المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report9') }}">

                                <img src="{{ URL('images/9.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> ملخص الحساب</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report10') }}">

                                <img src="{{ URL('images/10.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> كشف الحساب</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report11') }}">

                                <img src="{{ URL('images/11.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حسابات العملاء المدينون</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report12') }}">

                                <img src="{{ URL('images/12.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار ديون العملاء</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report13') }}">

                                <img src="{{ URL('images/13.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار عروض الأسعار</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report14') }}">

                                <img src="{{ URL('images/14.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حسابات الموردين الدائنين </h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report15') }}">

                                <img src="{{ URL('images/15.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار ديون الموردين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report16') }}">

                                <img src="{{ URL('images/16.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> أعمار أوامر الشراء</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report17') }}">

                                <img src="{{ URL('images/17.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مبيعات المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report18') }}">

                                <img src="{{ URL('images/18.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير مشتريات المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report19') }}">

                                <img src="{{ URL('images/19.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> نموذج الإقرار الضريبي</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report20') }}">

                                <img src="{{ URL('images/20.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> حصص مبيعات المنتجات</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report21') }}">

                                <img src="{{ URL('images/21.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> العملاء الجدد</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report22') }}">

                                <img src="{{ URL('images/22.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> الفواتير الجديدة</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report23') }}">

                                <img src="{{ URL('images/23.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير فواتير المبيعات الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report24') }}">

                                <img src="{{ URL('images/24.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير فواتير المشتريات الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report25') }}">

                                <img src="{{ URL('images/25.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير عمليات المستخدمين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report26') }}">

                                <img src="{{ URL('images/26.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير رواتب الموظفين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report27') }}">

                                <img src="{{ URL('images/27.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير كشف حساب الموظفين</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report28') }}">

                                <img src="{{ URL('images/28.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير الإشعارات الدائنة الضريبية</h6>
                            </a>
                        </div>

                        <div class="col-md-4 text-center mt-4">
                            <a href="{{ route('reports.report29') }}">

                                <img src="{{ URL('images/29.png') }}" alt="">

                                <h6 class="mt-2 text-primary fw-bold "> تقرير الإشعارات الدائنة الضريبية </h6>
                            </a>
                        </div>


                    </div>


                </div>
            </section>



        </div>





    </div>





    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
</body>

</html>
