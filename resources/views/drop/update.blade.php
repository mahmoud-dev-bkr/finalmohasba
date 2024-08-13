@extends('layouts.vertical', ['title' => 'تعديل اهلاك'])
@section('content')
ion('content')
<div class="container-fluid">
                    <section id="content-wrapper" class="content-header">
                        <div class="row">

                            <div class="col-lg-12 mt-3">
                                <ul class="d-flex align-content-center">

                                    <li><span  class="text-dark ml-3"> الاصول الثابتة</span></li>
                                    <li class="text-dark">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="dropping.html">  الإهلاك</a>
                                    </li>
                                    <li class="text-primary">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-dropping.html"> اهلاك جديد</a>
                                    </li>
                                    </ul>
                            </div>



                        </div>
                    </section>



                    <section>
                        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href="add-dropping.html" class="text-light"> رجوع</a> </button>
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

                              <h4 class="mx-4"> اهلاك جديد</h4>
                            </div>

                        </div>
                        <div class="row bg-light pb-4 brdr">

                         <div class="col-md-12 clients ">

                          <div class="container-fluid main-bg">


                            <!-- Responsive Arrow Progress Bar -->
                            <div class="arrow-steps clearfix">
                              <div class="step current bg-primary"> <span> <a href="#" > اختر نوع الإهلاك</a></span> </div>
                              <div class="step bg-success mx-2"> <span><a href="#" class="text-white">اهلاك مسجل</a></span> </div>
                              <div class="step d-none"> <span><a href="#" ></a></span> </div>

                            </div>
                          </div>






                         </div>


                         <div class="row">


                             <div class="col-md-7">
                                <h6 class="text-primary w-100">ملاحظة: اضغط على "الخطوة الأولى" لاختيار نوع قيد مختلف</h6>

                                <div class="mx-5 be-small my-3">
                                <form action="{{ route('drop.edit', $drop->id)}}" method="post">
                                        @csrf

                                    <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 "> الرقم المرجعي </label><input type="text" value="{{ $drop->Ref }}" name="Ref" class="form-control w-50 my-2">
                                    </div>

                                    <div class="d-flex align-content-center justify-content-around my-3">
                                        <label class="mt-3 mx-4 ">  تصنيف الأصل </label>
                                        <select class="form-control w-50 mx-4 pr-5" name="Asset_classification" id="">
                                            <optgroup>
                                                <option value="1">1</option>
                                                <option value="2"> 2</option>

                                            </optgroup>
                                        </select>
                                        </div>

                                        <div class="d-flex align-content-center justify-content-around my-3">
                                            <label class="mt-3 mx-4">  اسم الأصل </label>
                                            <select class="form-control w-50 mx-4 pr-5" name="Asset_Name" id="">
                                                <optgroup>
                                                    <option value="1">جميع الاصول</option>


                                                </optgroup>
                                            </select>
                                            </div>

                                            <div class="d-flex align-content-center justify-content-around my-3">
                                                <label class="mt-3 ">  نوع فترة الإهلاك </label>
                                                <select class="form-control w-50 mx-4 pr-5" name="Dipreciation_Period_Type" id="">
                                                    <optgroup>
                                                        <option value="1">يومي</option>
                                                        <option value="2">اسبوعي</option>
                                                        <option value="3">شهري</option>
                                                        <option value="4">سنوي</option>


                                                    </optgroup>
                                                </select>
                                                </div>


                                           <h6 class="mt-5 mx-3 text-primary">الفتره</h6>

                                           <div class="d-flex align-content-center justify-content-around">
                                            <label class="mt-3 ">   من</label><input type="date" value="{{ $drop->on }}" name="on" class="form-control w-50 my-2">
                                            </div>

                                            <div class="d-flex align-content-center justify-content-around">
                                                <label class="mt-3 ">   الي</label><input type="date" value="{{ $drop->to }}" name="to" class="form-control w-50 my-2">
                                                </div>




                                </div>


                            </div>




                            <div class="col-md-5">




                            </div>

                            <div class="btn-holder">
                                <button class="btn btn-primary submit">حفظ </button>

                                </div>
                          </div>
                        </form>

                        </div>




                      </div>
                    </section>
</div>
@endsection

