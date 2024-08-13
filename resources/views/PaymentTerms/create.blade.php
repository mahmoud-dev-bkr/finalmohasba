@extends('layouts.vertical', ['title' => ' شروط دفع  جديد'])
@section('content')
        <div class="container-fluid">
                            <section id="content-wrapper" class="content-header">
                                <div class="row">

                                    <div class="col-lg-12 mt-3">
                                        <ul class="d-flex align-content-center">

                                            <li><span  class="text-dark ml-3">الإعدادات العامة</span></li>
                                            <li class="text-primary">
                                            <i class="fa fa-angle-double-left mx-2 "></i><a href="fixed-assets.html"> شروط الدفع </a>
                                            </li>
                                            <li class="text-primary">
                                              <i class="fa fa-angle-double-left mx-2 "></i><a href="">  إنشاء شروط دفع</a>
                                              </li>
                                            </ul>
                                    </div>



                                </div>
                            </section>



                            <section>
                                <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href="{{ route('PaymentTerms.index') }}" class="text-light"> رجوع</a> </button>
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

                                      <h4 class="mx-4">  شروط الدفع</h4>
                                    </div>

                                </div>
                                <div class="row bg-light pb-4 brdr">

                                 <div class="col-md-12 clients ">

                                  <div class="container-fluid main-bg">


                                    <!-- Responsive Arrow Progress Bar -->
                                    {{-- <div class="arrow-steps clearfix">
                                      <div class="step current bg-primary"> <span> <a href="#" > اختر نوع الإهلاك</a></span> </div>
                                      <div class="step bg-success mx-2"> <span><a href="#" class="text-white">اهلاك مسجل</a></span> </div>
                                      <div class="step d-none"> <span><a href="#" ></a></span> </div>

                                    </div> --}}
                                  </div>






                                 </div>


                                 <div class="row">


                                     <div class="col-md-7">


                                        <div class="mx-5 be-small my-3">
                                        <form action="{{ route('PaymentTerms.create.post') }}" method="post">
                                                @csrf





                                                <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ">   شروط الدفع </label><input type="text" name="Payment_terms" class="form-control w-50 my-2">
                                                    </div>

                                                <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ">   عدد الأيام قبل استحقاق الدفع </label><input type="text" name="number_days" class="form-control w-50 my-2">
                                                    </div>

                                                <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ">   الوصف </label><input type="text" name="description" class="form-control w-50 my-2">
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

