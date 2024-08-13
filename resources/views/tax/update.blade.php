@extends('layouts.vertical', ['title' => 'تعديل الضريبة'])
@section('content')

<div class="container-fluid">
                    <section id="content-wrapper" class="content-header">
                        <div class="row">

                            <div class="col-lg-12 mt-3">
                                <ul class="d-flex align-content-center">

                                    <li><span  class="text-dark ml-3"> الضريبة </span></li>
                                    <li class="text-dark">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="dropping.html">  الضريبة</a>
                                    </li>
                                    <li class="text-primary">
                                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-dropping.html"> تعديل </a>
                                    </li>
                                    </ul>
                            </div>



                        </div>
                    </section>



                    <section>
                        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href="{{route('tax.index') }}" class="text-light"> رجوع</a> </button>
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

                              <h4 class="mx-4">  تعديلالضريبة </h4>
                            </div>

                        </div>
                        <div class="row bg-light pb-4 brdr">

                         <div class="col-md-12 clients ">








                         </div>


                         <div class="row">


                             <div class="col-md-7">


                                <div class="mx-5 be-small my-3">
                                <form action="{{ route('tax.edit', $tax->id)}}" method="post">
                                        @csrf

                                        <div class="d-flex align-content-center justify-content-around my-3">
                                            <label class="mt-3 mx-4 ">   الحساب                                                </label>
                                            <select class="form-control w-50 mx-4 pr-5" name="account_id" id="">

                                                @foreach($account as $account)
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach

                                            </select>
                                            </div>

                                            <div class="d-flex align-content-center justify-content-around">
                                                <label class="mt-3 ">  الاسم العربي </label><input  value="{{ $tax->name_ar }}" type="text" name="name_ar" class="form-control w-50 my-2">
                                                </div>

                                                <div class="d-flex align-content-center justify-content-around">
                                                    <label class="mt-3 ">  الاسم الانجليزي </label><input  value="{{ $tax->name_en }}" type="text" name="name_en" class="form-control w-50 my-2">
                                                    </div>


                                                    <div class="d-flex align-content-center justify-content-around my-3">
                                                        <label class="mt-3 mx-4 ">   الرمز </label>
                                                        <select class="form-control w-50 mx-4 pr-5" name="code" id="">
                                                            <optgroup>
                                                                <option value="1">s</option>
                                                                <option value="2"> z</option>
                                                                <option value="3"> e</option>
                                                                <option value="4"> o</option>

                                                            </optgroup>
                                                        </select>
                                                        </div>

                                                    <div class="d-flex align-content-center justify-content-around">
                                                        <label class="mt-3 ">  النسبة  </label><input  value="{{ $tax->rotio }}" type="text" name="rotio" class="form-control w-50 my-2">
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

