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

        <form action="{{ route('payroll.step4') }}" method="post">
            @csrf
            <section class="">
                <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="payroll-manager.html" class="text-light"> رجوع</a>
                    </button>

                </div>
                <div class="container my-3 max-con">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4">
                                مراجعة المصروفات
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
                                    @foreach ($Employeesdata as $employee )

                                        <table class="table  text-center table-hover table-bordered inventary-table">

                                            <thead>
                                                <tr>
                                                    <th style="border-bottom: outset" rowspan="2" colspan="1">تعريف الموظف
                                                    </th>
                                                    <th colspan="4">المستحقات</th>
                                                    <th colspan="4">المخصومات</th>
                                                </tr>
                                                <tr class="s_payroll-table_tr">
                                                    <th>الوصف</th>
                                                    <th>التاريخ</th>
                                                    <th>القيمة</th>
                                                    <th class="s_payroll_sub-table_action">الخيارات</th>
                                                    <th>الوصف</th>
                                                    <th>التاريخ</th>
                                                    <th>القيمة</th>
                                                    <th class="s_payroll_sub-table_action">الخيارات</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="s_payroll-table_tr">
                                                    <td class="s_payroll-table_td" colspan="1">{{ $employee->employee->name_ar }}</td>
                                                    <td>مرتب شهري</td>
                                                    <td>
                                                        {{ date('Y-m-d') }}
                                                    </td>
                                                    <td>
                                                        {{ $employee->total_salary }}
                                                    </td>
                                                    <td> <button class="btn btn-outline-danger delete_row">حذف</button></td>
                                                    <td>مرتب شهري</td>
                                                    <td>
                                                        {{ date('Y-m-d') }}
                                                    </td>
                                                    <td> 5000.0</td>
                                                    <td> <button class="btn btn-outline-danger delete_row">حذف</button> </td>

                                                </tr>
                                            </tbody>


                                        </table>
                                    @endforeach
                                </div>
                            </div>
                        </div>



                        <div class="mt-5"
                            style="
                                  width: 90%;
                                  margin: 0 auto;
                                   ">
                            <button class="btn btn-primary submit" type="button" id="nextBtn">اوافق </button>
                            <button class="btn btn-dark re-submit" id="prevBtn">السابق</button>
                        </div>

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
