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
            <section class="">
                <div class="d-flex justify-content-sm-end mx-5">
                  <button class="btn btn-primary mx-2"> <a href="payroll-manager.html" class="text-light"> رجوع</a> </button>

                </div>
                <div class="container my-3 max-con">
                  <div class="row">
                    <div class="col-md-12 hi-mohasba">

                      <h4 class="mx-4">مراجعة ساعات العمل
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
                                <td>
                                    {{session('step1')['code']}}
                                    <input type="hidden" name="code" value="{{session('step1')['code']}}" >
                                </td>
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
                          <table class="table  text-center table-hover table-bordered inventary-table">
                            <thead class="cf">
                              <tr>
                                <th class="text-center" colspan="1">رقم الموظف</th>
                                <th class="text-center" colspan="1">الاسم </th>
                                <th class="text-center" colspan="1">الموقع </th>
                                <th class="text-center" colspan="1">عدد الساعات </th>
                                <th class="text-center" colspan="1"> ساعات العمل المؤدية </th>
                                <th class="text-center" colspan="1">غياب </th>
                                <th class="text-center" colspan="1">ساعات ضائعة </th>
                                <th class="text-center" colspan="1">ساعات فائضة </th>
                                <th class="text-center" colspan="1">ساعات إضافية </th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach (session('step1')['employees'] as $get)
                                    <input type="hidden" name="employees[{{$get}}][employee_id]" value="{{$get}}">
                                    <tr>
                                        <td class="text-center" colspan="1">EMP-{{$get}} </td>
                                        <td class="text-center" colspan="1">
                                            {{  \App\Employee::find($get)->name_ar }}
                                        </td>
                                        <td class="text-center" colspan="1">
                                            {{  \App\Employee::find($get)->site->name_ar }}
                                        </td>
                                        <td class="text-center" colspan="1">184.0 </td>
                                        <td class="text-center " colspan="1" style="width: 125px;">
                                            <input type="number" class="form-custom-2 my-2 " value="184.0" name="employees[{{$get}}][real_hours]">
                                        </td>
                                        <td class="text-center " colspan="1" style="width: 125px;">
                                            <input type="number" class="form-custom-2 my-2 " value="184.0" name="employees[{{$get}}][absence_hours]">
                                        </td>
                                        <td class="text-center " colspan="1" style="width: 125px;">
                                            <input type="number" class="form-custom-2 my-2 " value="184.0" name="employees[{{$get}}][lost_hours]">
                                        </td>
                                        <td class="text-center " colspan="1" style="width: 125px;">
                                            <input type="number" class="form-custom-2 my-2 " value="184.0" name="employees[{{$get}}][surplus_hours]">
                                        </td>
                                        <td class="text-center " colspan="1" style="width: 125px;">
                                            <input type="number" class="form-custom-2 my-2 " value="184.0" name="employees[{{$get}}][overtime_hours]">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="mt-5 " style="
                                  width: 100%;
                                  text-align: end;
                                   ">
                      <button style="
                              width: 190px;
                          " class="btn btn-primary submit">تحميل - رفع ملف جديد </button>
                    </div>

                    <div class="mt-5" style="
                                  width: 90%;
                                  margin: 0 auto;
                                   ">
                      <button class="btn btn-primary submit"  id="nextBtn">اوافق </button>
                      <a class="btn btn-dark re-submit" href="{{ route('payroll.create') }}">السابق</a>
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
