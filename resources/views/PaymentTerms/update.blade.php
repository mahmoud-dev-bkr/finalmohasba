@extends('layouts.vertical', ['title' => ' تعديل شروط دفع '])
@section('content')
ion('content')
<div class="container-fluid">
                    <section id="content-wrapper" class="content-header">
                        <div class="row">

                            <div class="col-lg-12 mt-3">
                                <ul class="d-flex align-content-center">

                                    <li><span  class="text-dark ml-3">  إعدادات</span></li>
                                    <li class="text-dark">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="dropping.html">  شروط الدفع</a>
                                    </li>
                                    <li class="text-primary">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-dropping.html">  تعديل شروط دفع </a>
                                    </li>
                                    </ul>
                            </div>



                        </div>
                    </section>



                    <section>
                        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href=" {{ route('PaymentTerms.index') }}" class="text-light"> رجوع</a> </button>
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

                              <h4 class="mx-4">  تعديل شروط دفع</h4>
                            </div>

                        </div>
                        <div class="row bg-light pb-4 brdr">

                         <div class="col-md-12 clients ">

                          <div class="container-fluid main-bg">


                            <!-- Responsive Arrow Progress Bar -->

                          </div>






                         </div>


                         <div class="row">


                             <div class="col-md-7">
                               

                                <div class="mx-5 be-small my-3">
                                <form action="{{ route('PaymentTerms.edit', $PaymentTerms->id)}}" method="post">
                                        @csrf


                                        <div class="d-flex align-content-center justify-content-around">
                                            <label class="mt-3 ">   شروط الدفع </label><input value="{{$PaymentTerms->Payment_terms }}" type="text" name="Payment_terms" class="form-control w-50 my-2">
                                            </div>

                                        <div class="d-flex align-content-center justify-content-around">
                                            <label class="mt-3 ">   عدد الأيام قبل استحقاق الدفع </label><input value="{{ $PaymentTerms->number_days }}" type="text" name="number_days" class="form-control w-50 my-2">
                                            </div>

                                        <div class="d-flex align-content-center justify-content-around">
                                            <label class="mt-3 ">   الوصف </label><input value="{{ $PaymentTerms->description }}" type="text" name="description" class="form-control w-50 my-2">
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

