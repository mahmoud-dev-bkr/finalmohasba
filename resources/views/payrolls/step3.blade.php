@extends('layouts.vertical', ['title' => 'اضافة خصم'])
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3">الرواتب</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="discounts.html">الخصومات</a>
                        </li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="add-discount.html">خصم جديد</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>

        <form action="{{ route('payroll.step3') }}" method="post">
            @csrf
            <section class="sec_control">
                <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="payroll-manager.html" class="text-light"> رجوع</a>
                    </button>

                </div>
                <div class="container my-3 max-con">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4">
                                مراجعة صرف الرواتب
                            </h4>
                        </div>

                    </div>
                    <div class="row  p-3 brdr">

                        <div class="row  pb-4 ">
                            <div class="col-md-12">
                                <div class="w-100 my-5 table-responsive-lg">
                                    <table class="payroll-header-table">
                                        <thead>
                                            <tr class="s_hr_payroll-time_table-header">
                                                <th>المرجع</th>
                                                <th>الحالة</th>
                                                <th>من</th>
                                                <th>إلى</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PYR3</td>
                                                <td>مراجعة المصروفات</td>
                                                <td>2023-10-01</td>
                                                <td>2023-10-31</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <table class="table  text-center table-hover table-bordered inventary-table ">
                                        <thead class="py-5">
                                            <tr class="">
                                                <th class="">رقم الموظف</th>
                                                <th class="">الاسم</th>
                                                <th class="">أساسي الراتب</th>
                                                <th class="">بدلات الراتب</th>
                                                <th class="">خصومات دورية</th>
                                                <th class="">ساعات إضافية</th>
                                                <th class="">المكافآت</th>
                                                <th class="">الخصومات</th>
                                                <th class="">صافي القبض</th>
                                                <th class="th-total-shifted ">المبلغ المستحق</th>
                                                <th class="th-total-shifted ">الخيارات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="custom-td">EMP2</td>
                                                <td class="custom-td">mahmoud 1</td>
                                                <td class="custom-td">5,000.00 ر.س</td>
                                                <td class="custom-td">0.00 ر.س</td>
                                                <td class="custom-td">0.00 ر.س</td>
                                                <td class="custom-td">0.00 ر.س</td>
                                                <td class="custom-td">0.00 ر.س</td>
                                                <td class="custom-td">0.00 ر.س</td>
                                                <td class="custom-td">5,000.00 ر.س</td>
                                                <td class="custom-td">5,000.00 ر.س</td>
                                                <td class="custom-td">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="glyphicon glyphicon-credit-card">
                                                            <i class="fa-solid fa-credit-card"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="8" style="border-bottom: none"></td>
                                                <th>المبلغ المستحق</th>
                                                <td>5000.0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="border-top: none"></td>
                                                <th>المبلغ المدفوع</th>
                                                <td>0.0</td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- //modal -->


                        <div class="mt-5"
                            style="
                                  width: 100%;
                                  margin: 0 auto;
                                   ">
                            <button class="btn btn-primary submit" ty style="width: 15%;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                دفع جميع الرواتب </button>
                            <button class="btn btn-dark re-submit" id="prevBtn">السابق</button>

                        </div>
                        <button class="btn btn-primary submit mt-4 mx-2"> تحميل </button>


                    </div>

                </div>
            </section>
        </form>

    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection
