@extends('layouts.vertical', ['title' => 'تعديل موظف '])
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
                  <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-employer.html">موظف جديد</a>
                    </li>
                  </ul>
                  </div>



            </div>
        </section>


                <section>
                    <div class="d-flex justify-content-sm-end mx-5">
                        <button class="btn btn-primary mx-2">  <a href="employers.html" class="text-light">رجوع</a> <i class="fa-solid fa-plus"></i></button>

                        </div>
                  <div class="container my-3">
                    <div class="row">
                        @if(session()->has('message'))
                        {{dd('vbnm')}}
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                      <div class="col-md-12 hi-mohasba">

                          <h4 class="mx-4"> الموظفين</h4>
                        </div>

                    </div>
                    <div class="row bg-light pb-4 brdr">

                     <div class="col-md-12 clients d-flex align-content-center justify-content-start ">

                        <div class="w-100">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">تعريف الموظف</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">معلومات التوظيف</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">مستندات الموظف</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-5">تعريف الموظف</h4>
                                                </div>
                                                <form action="{{ route('employe.edit', $employe->id)}}" method="post">
                                                    @csrf
                                                <div class="form ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ml-5">الاسم الأول (English) </label><input type="text" value="{{$employe->name_en }}" name="name_en" class="form-control w-50 my-2">
                                                    </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5">اسم العائلة (English) </label><input type="text" value="{{ $employe->family_name_en }}" name="family_name_en" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5">الاسم الأول (عربي) </label><input type="text" value="{{ $employe->name_ar }}" name="name_ar" class="form-control w-50 my-2">
                                                            </div>





                                                                        <div class="d-flex align-content-center justify-content-around">
                                                                            <label class="mt-3 ml-5">اسم العائلة (عربي)</label><input type="text" value="{{ $employe->family_name_ar }}" name="family_name_ar" class="form-control w-50 my-2">
                                                                            </div>



                                                                                <div class="d-flex align-content-center justify-content-around">
                                                                                    <label class="mt-3 ml-5 mx-4">الجنس</label>
                                                                                    <select class="form-control w-50 my-3" name="Type" id="">
                                                                                        <optgroup>
                                                                                            <option value="1">الجنس</option>
                                                                                            <option value="2">ذكر </option>
                                                                                            <option value="3">انثي </option>

                                                                                        </optgroup>
                                                                                    </select>
                                                                                    </div>




                                                </div>
                                            </div>

                                            <div class="col-md-6 my-3">
                                                <div class="form my-5 py-5 ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ml-5">تاريخ الميلاد </label><input type="date" value="{{ $employe->Date_birth }}"  name="Date_birth" class="form-control w-50 my-2">
                                                    </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5">الحالة الاجتماعية</label>
                                                        <select class="form-control w-50 my-3" name="Marital_status" id="">
                                                            <optgroup>
                                                                <option value="1">اعزب</option>
                                                                <option value="2">متزوج</option>
                                                                <option value="3">مطلق</option>
                                                                <option value="4">ارمل </option>

                                                            </optgroup>
                                                        </select>
                                                        </div>



                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5">الجنسية</label>
                                                            <select class="form-control w-50 my-3" name="Nationality" id="">
                                                                <optgroup>
                                                                    <option value="1">مصر</option>
                                                                    <option value="2">سوريا</option>

                                                                </optgroup>
                                                            </select>
                                                            </div>



                                                                                <div class="d-flex align-content-center justify-content-around">
                                                                                    <label class="mt-3 ml-5">بلد الإقامة</label>
                                                                                    <select class="form-control w-50 my-3" name="country" id="">
                                                                                        <optgroup>
                                                                                            <option value="1">مصر</option>
                                                                                            <option value="2">سوريا</option>

                                                                                        </optgroup>
                                                                                    </select>
                                                                                    </div>




                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3"> معلومات الاتصال الشخصية</h4>
                                                </div>
                                                <div class="form ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5">البريد الإلكتروني</label><input type="text" value="{{ $employe->email}}"  name="email" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5">رقم هاتف المنزل</label><input type="text" value="{{ $employe->phon}}" name="phon" class="form-control w-50 my-2">
                                                            </div>

                                                            <div class="d-flex align-content-center justify-content-around">
                                                                <label class="mt-3 ml-5">رقم هاتف للطوارئ </label><input type="text" value="{{ $employe->phon_emergencie}}" name="phon_emergencie" class="form-control w-50 my-2">
                                                                </div>



                                                                <div class="d-flex align-content-center justify-content-around">
                                                                    <label class="mt-3 mx-4 ml-5">العنوان</label><input type="text" value="{{ $employe->address}}" name="address" class="form-control w-50 my-2">
                                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3">معلومات الاتصال في عمل</h4>
                                                </div>
                                                <div class="form ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ml-5"> بريد العمل الإلكتروني</label><input type="text" value="{{ $employe->email_job}}" name="email_job" class="form-control w-50 my-2">
                                                    </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5 mx-2">رقم هاتف العمل</label><input type="text" value="{{ $employe->phon_job}}" name="phon_job" class="form-control w-50 my-2">
                                                        </div>



                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-holder">
                                            <button class="btn btn-primary submit">حفظ</button>

                                            </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-5"> معلومات التوظيف</h4>
                                                </div>
                                                <div class="form ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ml-5">الرقم الوظيفي</label><input type="text" value="{{ $employe->Job_Number}}" name="Job_Number" class="form-control w-50 my-2">
                                                    </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5">تاريخ الانضمام </label><input type="date" value="{{ $employe->Join_Date}}"  name="Join_Date" class="form-control w-50 my-2">
                                                        </div>




                                                                                <div class="d-flex align-content-center justify-content-around">
                                                                                    <label class="mt-3 ml-5 mx-4">نوع التكلفة</label>
                                                                                    <select class="form-control w-50 my-3" name="Cost_Type" id="">
                                                                                        <optgroup>
                                                                                            <option value="1">مباشر</option>
                                                                                            <option value="2">غير مباشر</option>


                                                                                        </optgroup>
                                                                                    </select>
                                                                                    </div>

                                                                                    <div class="d-flex align-content-center justify-content-around">
                                                                                        <label class="mt-3 ml-5 mx-4">جدول العمل </label>
                                                                                        <select class="form-control w-50 my-3" name="Work_schedule" id="">
                                                                                            <optgroup>
                                                                                                <option value="1">1</option>


                                                                                            </optgroup>
                                                                                        </select>
                                                                                        </div>




                                                </div>
                                            </div>

                                            <div class="col-md-6 my-3">
                                                <div class="form my-5 py-5 ">

                                                    <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ml-5"> المسمى الوظيفي </label><input type="text"value="{{ $employe->Job_Name}}" name="Job_Name" class="form-control w-50 my-2">
                                                    </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5 mx-3"> القسم </label><input type="text"value="{{ $employe->section}}" name="section" class="form-control w-50 my-2">
                                                        </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5 mx-3"> المدير</label>
                                                        <select class="form-control w-50 my-3" name="manger" id="">
                                                            <optgroup>
                                                                <option value="1">بدون مدير</option>


                                                            </optgroup>
                                                        </select>
                                                        </div>



                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5">المرحلة التعليمية</label>
                                                            <select class="form-control w-50 my-3" name="Educational_Stage" id="">
                                                                <optgroup>
                                                                    <option value="1">اقل من الثانوي</option>
                                                                    <option value="2">بعض من الثانوي </option>
                                                                    <option value="3"> شهادة ثانوي </option>
                                                                    <option value="4">درجة المنتسبين</option>
                                                                    <option value="5">درجة البكلوريوس</option>
                                                                    <option value="6">درجة الماجستير</option>
                                                                    <option value="7">درجة الدكتره</option>

                                                                </optgroup>
                                                            </select>
                                                            </div>



                                                            <div class="d-flex align-content-center justify-content-around">
                                                                <label class="mt-3 ml-5"> وصف المرحلة التعليمية </label><input type="text"value="{{ $employe->Educational_stage_description}}" name="Educational_stage_description" class="form-control w-50 my-2">
                                                                </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3"> معلومات التوظيف</h4>
                                                </div>
                                                <div>
                                                    <p class="be-small text-secondary">في هذا القسم ، ستحدد مكونات الراتب للموظف ، بينما يمكنك حفظ الموظف دون ملء هذه الحقول ، لن نتمكن من إصدار دفعات أو وضع هذا الموظف في كشوف المرتبات.</p>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-start">
                                                        <h4 class="text-primary my-5">  تزامن الراتب</h4>
                                                    </div>
                                                    <div class="form ">

                                                        <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ml-5"> تاريخ أول راتب</label><input type="date" value="{{ $employe->first_salary}}" name="first_salary" class="form-control w-50 my-2">
                                                        </div>

                                                        <div class="d-flex align-content-center justify-content-around">
                                                            <label class="mt-3 ml-5"> تاريخ آخر راتب </label><input type="date" value="{{ $employe->last_salary}}" name="last_salary" class="form-control w-50 my-2">
                                                            </div>




                                                                                    <div class="d-flex align-content-center justify-content-around">
                                                                                        <label class="mt-3 ml-5 mx-2"> دورة الدفع</label>
                                                                                        <select class="form-control w-50 my-3" name="Payment_Cycle" id="">
                                                                                            <optgroup>
                                                                                                <option value="1">يدفع شهريا</option>


                                                                                            </optgroup>
                                                                                        </select>
                                                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-md-6 responsive-scroll">
                                                    <div class="d-flex justify-content-start">
                                                        <h4 class="text-primary my-3">الراتب الأساسي</h4>
                                                    </div>
                                                    <table class="table text-center">
                                                        <thead class="table-head">
                                                          <tr>

                                                            <th scope="col"> النوع </th>
                                                            <th scope="col">القيمة </th>

                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>

                                                            <td>
                                                                <div class="">

                                                                    <select class="form-control w-100 my-3" name="Type_salary" id="">
                                                                        <optgroup>
                                                                            <option value="1">اجره سريعه</option>
                                                                            <option value="2">راتب شهري</option>


                                                                        </optgroup>
                                                                    </select>
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-content-center justify-content-center">
                                                                    <input type="text" value="{{ $employe->Salary_Value}}" name="Salary_Value" class="form-control w-50 my-2">
                                                                    </div>
                                                            </td>

                                                          </tr>

                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-4">
                                            <div class="col-md-12 responsive-scroll">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3">  البدلات</h4>
                                                </div>
                                                <table class="table  half-table  w-75">
                                                    <thead class="table-head h-50">
                                                        <tr>
                                                            <th>النوع</th>
                                                            <th>ملاحظات</th>
                                                            <th>تحسب كقيمة</th>
                                                            <th>القيمة</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr >
                                                            <td>

                                                                    <select class="form-control  w-100 mt-1" name="Type_Allowances" id="">
                                                                        <optgroup>
                                                                            <option value="1">بدل موصلات</option>
                                                                            <option value="2">بدل ساكن</option>
                                                                            <option value="3">بدل غلاء المعيشة</option>
                                                                            <option value="4"> اخري</option>

                                                                        </optgroup>
                                                                    </select>


                                                            </td>
                                                            <td>
                                                                <input type="text"  value="{{ $employe->Reviews_Allowances}}"name="Reviews_Allowances" class="form-control mt-1 edit-input w-100">
                                                            </td>

                                                            <td>


                                                                <select class="form-control  w-100 mt-1" name="Calculated_Value_Allowances" id="">
                                                                    <optgroup>
                                                                        <option value="1">ثابت القيمة(شهري)</option>
                                                                        <option value="2">نسبة مئوية</option>

                                                                    </optgroup>
                                                                </select>


                                                        </td>
                                                        <td>
                                                            <input type="text" value="{{ $employe->Value_Allowances}}" name="Value_Allowances" class="form-control mt-1 edit-input w-100">
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                 </table>


                                                 <div class="d-flex align-content-center justify-content-start my-2">
                                                    <button class="btn btn-primary">اضافةالمزيد</button>
                                                 </div>

                                            </div>
                                        </div>

                                        <div class="row my-4">
                                            <div class="col-md-12 responsive-scroll">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3">  خصومات دورية</h4>
                                                </div>
                                                <table class="table  half-table  w-75">
                                                    <thead class="table-head h-50">
                                                        <tr>
                                                            <th>النوع</th>
                                                            <th>ملاحظات</th>
                                                            <th>تحسب كقيمة</th>
                                                            <th>القيمة</th>
                                                        </tr>
                                                    </thead>
                                                    ody>
                                                        <tr >
                                                            <td>

                                                                    <select class="form-control  w-100 mt-1" name="Type_Periodic_discounts" id="">
                                                                        <optgroup>
                                                                            <option value="1">اوعيه ادخاريه</option>
                                                                            <option value="2">اخري</option>

                                                                        </optgroup>
                                                                    </select>


                                                            </td>
                                                            <td>
                                                                <input type="text" value="{{ $employe->Reviews_Periodic_discounts}}" name="Reviews_Periodic_discounts" class="form-control mt-1 edit-input w-100">
                                                            </td>

                                                            <td>


                                                                <select class="form-control  w-100 mt-1" name="Calculated_Value_Periodic_discounts" id="">
                                                                    <optgroup>
                                                                        <option value="1">ثابت القيمة(شهري)</option>
                                                                        <option value="2">نسبة مئوية</option>


                                                                    </optgroup>
                                                                </select>


                                                        </td>
                                                        <td>
                                                            <input type="text" value="{{ $employe->Value_Periodic_discounts}}" name="Value_Periodic_discounts" class="form-control mt-1 edit-input w-100">
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                 </table>


                                                 <div class="d-flex align-content-center justify-content-start my-2">
                                                    <button class="btn btn-primary">اضافةالمزيد</button>
                                                 </div>

                                            </div>
                                        </div>

                                        <div class="row my-4">
                                            <div class="col-md-12 responsive-scroll">
                                                <div class="d-flex justify-content-start">
                                                    <h4 class="text-primary my-3"> التأمينات الاجتماعية</h4>
                                                </div>
                                                <table class="table  half-table  w-75">
                                                    <thead class="table-head h-50">
                                                        <tr>
                                                            <th>لمرجع</th>
                                                            <th>طريقة الحساب</th>
                                                            <th> التأمين الاجتماعي</th>

                                                        </tr>
                                                    </thead>
                                                    ody>
                                                        <tr >

                                                            <td>
                                                                <input type="text" value="{{ $employe->reference}}" name="reference" class="form-control mt-1 edit-input w-100">
                                                            </td>

                                                            <td>

                                                                    <select class="form-control  w-100 mt-1" name="Calculation_method" id="">
                                                                        <optgroup>
                                                                            <option value="1">الراتب الاساسي</option>
                                                                            <option value="2">نسبه من بدلات السكن</option>

                                                                        </optgroup>
                                                                    </select>


                                                            </td>

                                                            <td>


                                                                <select class="form-control  w-100 mt-1" name="Social_Insurance" id="">
                                                                    <optgroup>
                                                                        <option value="1">اختار</option>

                                                                    </optgroup>
                                                                </select>


                                                        </td>

                                                        </tr>
                                                    </tbody>
                                                 </table>


                                                 <div class="d-flex align-content-center justify-content-start my-2">
                                                    <button class="btn btn-primary">اضافةالمزيد</button>
                                                 </div>

                                            </div>
                                        </div>

                                        <div class="btn-holder mt-4">
                                            <button class="btn btn-primary submit">حفظ</button>


                                            </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row my-4">
                                                    <div class="col-md-12 responsive-scroll">
                                                        <div class="d-flex justify-content-start">
                                                            <h4 class="text-primary my-5">  مستندات الموظف</h4>
                                                        </div>
                                                        <table class="table  half-table  w-75">
                                                            <thead class="table-head h-50">
                                                                <tr>
                                                                    <th>اسم المستند</th>
                                                                    <th> تاريخ الانتهاء</th>
                                                                    <th>  اختر ملف</th>

                                                                </tr>
                                                            </thead>
                                                            ody>
                                                                <tr >

                                                                    <td>
                                                                        <input type="text" value="{{ $employe->Document_Name}}" name="Document_Name" class="form-control mt-1 edit-input w-100">
                                                                    </td>



                                                                        <td>
                                                                            <input type="date" value="{{ $employe->Expiry_Date}}" name="Expiry_Date" class="form-control mt-1 edit-input w-100">
                                                                        </td>



                                                                        <td>
                                                                            <input type="file" value="{{ $employe->Choose_File}}"   name="Choose_File" class="form-control mt-1 edit-input w-100">
                                                                        </td>


                                                                </tr>
                                                            </tbody>
                                                         </table>


                                                         <div class="d-flex align-content-center justify-content-start my-2">
                                                            <button class="btn btn-primary">اضافةالمزيد</button>
                                                         </div>

                                                         <div class="btn-holder mt-4">
                                                            <button class="btn btn-primary submit">حفظ</button>


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

                     </div>

                    </div>
                  </div>
                </section>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <script src="{{ URL(' js/main.js') }}"></script>

@endsection


