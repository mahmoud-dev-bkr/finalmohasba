@extends('layouts.vertical', ['title' => 'اضافة ggg'])
@section('content')
<div class="container-fluid">

<section id="content-wrapper" class="content-header">
    <div class="row">

        <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

                <li><span class="text-dark ml-3"></span></li>
                <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="employers.html">العملاء</a>
                </li>
                <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-employer.html">عميل جديد</a>
                </li>
            </ul>
        </div>



    </div>
</section>


<section>
    <div class="d-flex justify-content-sm-end mx-5">
        <button class="btn btn-primary mx-2"> <a href="{{ route('employe.index') }}" class="text-light">رجوع</a> <i
                class="fa-solid fa-plus"></i></button>

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

                <h4 class="mx-4"> العملاء</h4>
            </div>

        </div>
        <div class="row bg-light pb-4 brdr">

            <div class="col-md-12 clients d-flex align-content-center justify-content-start ">

                <div class="w-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                              data-bs-target="#home" type="button" role="tab" aria-controls="home"
                              aria-selected="true">معلومات العميل</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                              type="button" role="tab" aria-controls="profile" aria-selected="false">
                            المعلومات المالية والمواقع
                              </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                              type="button" role="tab" aria-controls="contact" aria-selected="false">
                            ملفات
                              العميل</button>
                      </li>
                  </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{ route('employe.create.post') }}" method="post">
                                @csrf
                              <div class="container">
                                  
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="d-flex justify-content-start">
                                              <h4 class="text-primary my-5">المعلومات الأساسية</h4>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الاسم عربي  </label><input
                                                      type="text" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الاسم انجليزي</label>
                                                  <input type="text" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="d-flex justify-content-start">
                                              <h4 class="text-primary my-5"> معلومات الاتصال الشخصية</h4>
                                          </div>
                                          <div class="form container">
  
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">رقم الجوال</label><input type=""
                                                      name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">

                                              <div class="d-flex align-content-center justify-content-between">

                                                  <label class="mt-3 ml-5">رقم الهاتف</label><input
                                                      type="number" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
  
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">البريد الإلكتروني</label><input type="email"
                                                      name="email" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الموقع الالكتروني</label><input
                                                      type="url" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="d-flex justify-content-start">
                                              <h4 class="text-primary my-3">معلومات المنشاءة</h4>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">اسم المنشاءة</label>
                                                  <input type="text" name="" class="form-control w-100 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">السجل التجاري</label>
                                                  <div class="d-flex align-content-center justify-content-between">
                                                    <input type="number" name="" class="form-control w-50 my-2">
                                                    <input type="date" name="" class="form-control w-50 my-2">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">رخصة البلدية</label>
                                                  <div class="d-flex align-content-center justify-content-between">
                                                    <input type="number" name="" class="form-control w-50 my-2">
                                                    <input type="date" name="" class="form-control w-50 my-2">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5"> الرقم الضريبي</label>
                                                  <div class="d-flex align-content-center justify-content-between">
                                                    <input type="number" name="" class="form-control w-50 my-2">
                                                    <input type="date" name="" class="form-control w-50 my-2">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="d-flex justify-content-start">
                                              <h4 class="text-primary">العنوان</h4>
                                          </div>
                                          <div class="form container">
  
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">اسم الشارع</label><input type=""
                                                      name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
  
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">المدينة</label><input type=""
                                                      name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">

                                              <div class="d-flex align-content-center justify-content-between">

                                                  <label class="mt-3 ml-5">المنطقة</label><input
                                                      type="number" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
  
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الرمز البريدي</label><input type="email"
                                                      name="email" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form container">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الدولة</label><input
                                                      type="url" name="" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="d-flex justify-content-start">
                                          <h4 class="text-primary my-3">الحساب البنكي</h4>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">اسم البنك</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">اسم صاحب الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">دولة الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">العملة</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <select name="" class="form-control w-100">
                                              <option value="">one</option>
                                              <option value="">two</option>
                                              <option value="">three</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">رقم البيان</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">رقم الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">سويفت كود</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">عنوان البنك</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="d-flex justify-content-start">
                                          <h4 class="text-primary my-3">  الحساب البنكي الاضافي</h4>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">اسم البنك</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">اسم صاحب الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">دولة الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">العملة</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <select name="" class="form-control w-100">
                                              <option value="">one</option>
                                              <option value="">two</option>
                                              <option value="">three</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">رقم البيان</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">رقم الحساب</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">سويفت كود</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                      <div class="row d-flex align-content-center justify-content-between mb-3">
                                        <div class="col-md-3">
                                          <div class="form container">
                                            <label class="mt-3 ml-5" style="float:right;">عنوان البنك</label>
                                          </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <input type="text" name="" class="form-control w-100">
                                        </div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="btn-holder">
                                      <button class="btn btn-primary submit">حفظ</button>
                                  </div>
                              </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <form action="{{ route('employe.create.post') }}" method="post">
                                @csrf
                              <div class="container">
                                  <div class="row">
                                      <div class="d-flex justify-content-start">
                                          <h4 class="text-primary my-5">المعلومات المالية والمواقع</h4>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form ">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الموقع</label>
                                                  <input type="text" name="" value="جميع المواقع" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form ">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">مجموعة العميل</label>
                                                  <input type="text" name="" value="تجاري" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form ">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">نوعه</label>
                                                  <input type="text" name="" value="نقدي" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form ">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">حافز</label>
                                                  <input type="text" name="" value="0" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form ">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">نقاط المكافأة</label>
                                                  <input type="text" name="" value="0" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">مندوب المبيعات</label>
                                                  <input type="text" name="" value="جميع المناديب" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">تصنيف العميل</label>
                                                  <input type="text" name="" value="فئه 1" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">الحد الائتماني</label>
                                                  <input type="text" name="" value="0" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">العقود و الحسومات</label>
                                                  <input type="text" name="" value="0" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                          <div class="form">
                                              <div class="d-flex align-content-center justify-content-between">
                                                  <label class="mt-3 ml-5">حوافز اضافية</label>
                                                  <input type="text" name="" value="0" class="form-control w-50 my-2">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="btn-holder">
                                      <button class="btn btn-primary submit">حفظ</button>
                                  </div>
                              </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="{{ route('employe.create.post') }}" method="post">
                                @csrf
                              <div class="container">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-5">ملفات العميل </h4>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">السجل التجاري</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file1" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file1" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">رخصة البلدية</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file2" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file2" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">الرقم الضريبي</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file3" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file3" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">العنوان الوطني</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file4" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file4" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">الحساب البنكي</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file5" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file5" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">الحد الائتماني</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form ">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5">العقود والحسومات</label>️
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form row justify-content-between">
                                            <div class="col-md-6">
                                                <label for="file7" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file7" type="file" class="d-none"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mt-3 ml-5 btn btn-success">
                                                  <i class="fa fa-download"></i></label>️
                                            </div>
                                        </div>
                                    </div>
                                
                                  </div>
                                  <div class="btn-holder">
                                      <button class="btn btn-primary submit">حفظ</button>
                                  </div>
                              </div>
                            </form>
                        </div>
                    </div>
                          
                </div>
            </div>
        </div>
    </div>


    

@endsection

@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection
