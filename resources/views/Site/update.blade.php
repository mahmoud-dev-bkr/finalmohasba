@extends('layouts.vertical', ['title' => 'تعديل موقع'])
@section('css')
<style>
.clint_ th,.clint_ td {
    width: 25%;
    border: 2px solid #ddd;
    vertical-align: middle;
    padding: 10px 5px !important;
}
.clint_ th{
    text-align: right;
}
.clint2_ th,.clint2_ td {
  width: 33.33%;
}
.container-spans{
  float:left;
  text-align:right;
  overflow-y:scroll;
  max-width:60%;
}
</style>
@endsection
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li>
                      <span class="text-dark ml-3"> 
                        اعدادت المنشأه  
                      </span>
                    </li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> المواقع</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">تعديل موقع</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>

    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('sub_site.index') }}"
                    class="text-light">رجوع</a></button>
        </div>


        <form action="{{ route('Site.edit', $Site->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container my-3 brdr">
                <div class="row">
                    @if(session()->has('message'))
                    {{dd('vbnm')}}
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

          <div class="container my-3 brdr">
              <div class="row">
                 @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="col-md-12 hi-mohasba">

                      <h4 class="mx-4">تعديل موقع</h4>
                  </div>

              </div>

              <div class="row">

                  <div class="col-md-12 clients d-flex align-content-center justify-content-start " style="margin-bottom:0;">
                      <div class="w-100">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">معلومات الفرع</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    المعلومات المالية
                                    </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    اعداد الموقع
                                    </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="clint-tab" data-bs-toggle="tab" data-bs-target="#clint_map"
                                    type="button" role="tab" aria-controls="clint" aria-selected="false">
                                    ملفات الفرع
                                    </button>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container">
                                    <div class="d-flex justify-content-start">
                                        <h4 class="text-primary my-5">
                                          معلومات الفرع
                                        </h4>
                                    </div>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_">
                                          <tbody>
                                            <tr>
                                                <th>الرقم التسلسلي</th>
                                                <td>
                                                  <div class="row p-0 m-0">
                                                    <div class="col-11 p-0 m-0">
                                                      <input id="input_generate_number" type="text" name="code" value="{{ $Site->code }}" class="form-control" placeholder="" required>
                                                    </div>
                                                    <div class="col-1 p-0 m-0">
                                                      <div id="btn_generate_number" class="btn btn-primary m-0" style='float:left;'>
                                                        <i class="fas fa-sync"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </td>
                                              <th>اسم المنشاة</th>
                                              <td><input id="" type="" name="Facility" value="{{ $Site->Facility }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>الاسم العربي</th>
                                              <td><input id="name_ar" type="text" name="name" value="{{ $Site->name }}" class="form-control" placeholder="" required></td>
                                              <th>الاسم الانجليزي</th>
                                              <td><input id="name_en" type="text" name="name_en" value="{{ $Site->name_en }}" class="form-control" placeholder="" required></td>
                                            </tr>
                                            <tr>
                                              <th>رقم الهاتف</th>
                                              <td>
                                                <div class="d-flex justify-content-between">
                                                  <input id="" type="number" name="phon" value="{{ $Site->phon }}" class="form-control" placeholder=""  style="width:80%;">
                                                  <select name="code_phon" id="" class="form-control" style="width:20%;">
                                                    <option {{ $Site->code_phon == '20' ? 'selected' : '' }} value="+20">+20</option>
                                                    <option {{ $Site->code_phon == '10' ? 'selected' : '' }} value="+10">+10</option>
                                                    <option {{ $Site->code_phon == '70' ? 'selected' : '' }} value="+70">+70</option>
                                                  </select>
                                                </div>
                                              </td>
                                              <th>رقم الجوال</th>
                                              <td>
                                                <div class="d-flex justify-content-between">
                                                  <input id="" type="number" name="phon2" value="{{ $Site->phon2 }}" class="form-control" placeholder=""  style="width:80%;">
                                                  <select name="code_phon2" id="" class="form-control" style="width:20%;">
                                                    <option {{ $Site->code_phon2 == '20' ? 'selected' : '' }} value="+20">+20</option>
                                                    <option {{ $Site->code_phon2 == '10' ? 'selected' : '' }} value="+10">+10</option>
                                                    <option {{ $Site->code_phon2 == '70' ? 'selected' : '' }} value="+70">+70</option>
                                                  </select>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>البريد الالكتروني</th>
                                              <td><input id="" type="email" name="email" value="{{ $Site->email }}" class="form-control" placeholder=""></td>
                                              <th>الموقع الالكتروني</th>
                                              <td><input id="" type="email" name="email2" value="{{ $Site->email2 }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>النشاط الرئيسي</th>
                                              <td><input id="" type="text" name="main_activity" value="{{ $Site->main_activity }}" class="form-control" placeholder=""></td>
                                              <th  >   وصف النشاط  </th>
                                              <td><input id="" type="text" name="Activity_description" value="{{ $Site->Activity_description }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>رأس المال المسجل</th>
                                              <td><input id="" type="number" name="Registered_capital" value="{{ $Site->Registered_capital }}" class="form-control" placeholder=""></td>
                                              <th>رأس المال المضاف</th>
                                              <td><input id="" type="number" name="Added_capital" value="{{ $Site->Added_capital }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>السجل التجاري</th>
                                              <td><input id="" type="text" name="Commercial_Record" value="{{ $Site->Commercial_Record }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Commercial_Record_data" value="{{ $Site->Commercial_Record_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>رخصة البلدية</th>
                                              <td><input id="" type="text" name="Municipality_number" value="{{ $Site->Municipality_number }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Municipality_number_data" value="{{ $Site->Municipality_number_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>الرقم الضريبي</th>
                                              <td><input id="" type="number" name="Tex_Number" value="{{ $Site->Tex_Number }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Tax_number_data" value="{{ $Site->Tax_number_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>رخصة الموارد البشرية</th>
                                              <td><input id="" type="text" name="Human_Resources_License" value="{{ $Site->Human_Resources_License }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Human_Resources_License_data" value="{{ $Site->Human_Resources_License_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>رخصة هيئة الغذاء والدواء</th>
                                              <td><input id="" type="text" name="FDA_license" value="{{ $Site->FDA_license }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="FDA_license_data" value="{{ $Site->FDA_license_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>التأمينات الاجتماعية</th>
                                              <td><input id="" type="text" name="Social_Insurance" value="{{ $Site->Social_Insurance }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Social_Insurance_data" value="{{ $Site->Social_Insurance_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>الغرفة التجارية</th>
                                              <td><input id="" type="number" name="Chamber_Commerce" value="{{ $Site->Chamber_Commerce }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Chamber_Commerce_data" value="{{ $Site->Chamber_Commerce_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                              <th>أخري</th>
                                              <td><input id="" type="number" name="Another" value="{{ $Site->Another }}" class="form-control" placeholder=""></td>
                                              <th>تاريخه</th>
                                              <td><input id="" type="date" name="Another_data" value="{{ $Site->Another_data }}" class="form-control" placeholder=""></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_">
                                          <tbody>
                                            <tr>
                                              <th rowspan="2" style="text-align: center;">
                                                العنوان
                                              </th>
                                              <td><input id="" type="text" name="street_1" value="{{ $Site->street_1 }}" class="form-control" placeholder="اسم الشارع"></td>
                                              <td><input id="" type="text" name="city_1"   value="{{ $Site->city_1 }}" class="form-control" placeholder="المدينة"></td>
                                              <td><input id="" type="text" name="st_1"     value="{{ $Site->st_1 }}" class="form-control" placeholder="المنطقة"></td>
                                            </tr>
                                            <tr>
                                              <td><input id="" type="number" name="zip_1" value="{{ $Site->zip_1 }}" class="form-control" placeholder="الرقم البريدي"></td>
                                              <td>
                                                <select id="country" name="cantry_1" class="form-control" required>
                                                  <option value="">الدولة</option>
                                                  <option {{ $Site->cantry_1 == 'sud' ? 'selected' : '' }} value="sud">السعودية</option>
                                                  <option {{ $Site->cantry_1 == 'Egy' ? 'selected' : '' }} value="Egy">مصر</option>
                                                  <option {{ $Site->cantry_1 == 'Plis' ? 'selected' : '' }} value="Plis">فلسطين</option>
                                                </select>
                                              </td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_">
                                          <tbody>
                                            <tr>
                                              <th rowspan="3" style="text-align: center;">
                                                الحساب البنكي
                                              </th>
                                              <td><input id="" type="text" name="name1"         value="{{ $Site->name1 }}" class="form-control" placeholder="اسم البنك"></td>
                                              <td><input id="" type="text" name="name_account1" value="{{ $Site->name_account1 }}" class="form-control" placeholder="اسم صاحب الحساب"></td>
                                              <td><input id="" type="text" name="country1"      value="{{ $Site->country1 }}" class="form-control" placeholder="دولة الحساب"></td>
                                            </tr>
                                            <tr>
                                              <td><input id="" type="text"   name="currency1"           value="{{ $Site->currency1 }}" class="form-control" placeholder="العملة"></td>
                                              <td><input id="" type="number" name="number_statement1"   value="{{ $Site->number_statement1 }}" class="form-control" placeholder="الرقم البيان"></td>
                                              <td><input id="" type="number" name="number_account1"     value="{{ $Site->number_account1 }}" class="form-control" placeholder="رقم الحساب"></td>
                                            </tr>
                                            <tr>
                                              <td><input id="" type="text" name="code1"     value="{{ $Site->code1 }}" class="form-control" placeholder="سويفت كود"></td>
                                              <td><input id="" type="text" name="address1"  value="{{ $Site->address1 }}" class="form-control" placeholder="عنوان البنك"></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_">
                                          <tbody>
                                            <tr>
                                              <th rowspan="3" style="text-align: center;">
                                                  الحساب البنكي
                                              </th>
                                              <td><input id="" type="text" name="name2"         value="{{ $Site->name2 }}" class="form-control" placeholder="اسم البنك"></td>
                                              <td><input id="" type="text" name="name_account2" value="{{ $Site->name_account2 }}" class="form-control" placeholder="اسم صاحب الحساب"></td>
                                              <td><input id="" type="text" name="country2"      value="{{ $Site->country2 }}" class="form-control" placeholder="دولة الحساب"></td>
                                            </tr>
                                            <tr>
                                              <td><input id="" type="text"   name="currency2"           value="{{ $Site->currency2 }}" class="form-control" placeholder="العملة"></td>
                                              <td><input id="" type="number" name="number_statement2"   value="{{ $Site->number_statement2 }}" class="form-control" placeholder="الرقم البيان"></td>
                                              <td><input id="" type="number" name="number_account2"     value="{{ $Site->number_account2 }}" class="form-control" placeholder="رقم الحساب"></td>
                                            </tr>
                                            <tr>
                                              <td><input id="" type="text" name="code2"     value="{{ $Site->code2 }}" class="form-control" placeholder="سويفت كود"></td>
                                              <td><input id="" type="text" name="address2"  value="{{ $Site->address2 }}" class="form-control" placeholder="عنوان البنك"></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="container">
                                    <div class="d-flex justify-content-start">
                                        <h4 class="text-primary my-5">المعلومات المالية </h4>
                                    </div>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_">
                                          <tbody>
                                            <tr>
                                              <th>المخزون</th>
                                              <th>يجب تحديد ( شجرة الحسابات )</th>
                                              <th>حسابات الدفع والاستلام</th>
                                              <th>التحديد ( شجرة الحسابات 1 او اكثر )</th>
                                            </tr>
                                            <tr>
                                              <td>
                                                <select id="country" name="Inventory" class="form-control" >
                                                      @foreach($Inventorys as $Inventory)
                                                        <option value="{{ $Inventory->id }}">{{ $Inventory->name }}</option>
                                                     @endforeach
                                                  </select>
                                              </td>
                                              <td>   <select id="country" name="Accounts_tree" class="form-control" >
                                                  @foreach($Inventorys as $Inventory)
                                                 <option value="{{ $Inventory->id }}">{{ $Inventory->name }}</option>
                                                     @endforeach
                                              </select></td>
                                              <td>   <select id="country" name="Payment_accounts" class="form-control" >
                                                  @foreach($Inventorys as $Inventory)
                                                 <option value="{{ $Inventory->id }}">{{ $Inventory->name }}</option>
                                                     @endforeach
                                              </select></td>
                                              <td>   <select id="country" name="Accounts_tree2" class="form-control" >
                                                  @foreach($Inventorys as $Inventory)
                                                 <option value="{{ $Inventory->id }}">{{ $Inventory->name }}</option>
                                                     @endforeach
                                              </select></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="clint-tab">
                                  <div class="container">
                                      <div class="d-flex justify-content-start">
                                        <h4 class="text-primary my-5"> اعداد الموقع</h4>
                                      </div>
                                      <div class="responsive-scroll">
                                          <table class="table text-center">
                                              <tr>
                                                  <th></th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                              </tr>
                                          </table>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="responsive-scroll">
                                          <table class="table text-center clint_">
                                              <tr>
                                                  <th>اعدادات عرض الاسعار</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                                  <th> اعدادات فواتير المبيعات</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <th>اعدادات اوامر الشراء</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                                  <th>اعدادات فواتير المشتريات</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <th>اعدادات الاشعارات الدائنة</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                                  <th>اعدادات الاشعارات المدينة</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <th>اعدادات السندات</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                                  <th>اعدادات المنتجات</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <th>اعدادات فاتورة نقاط البيع</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                                  <th>اعدادات الطباعت العامة</th>
                                                  <td>
                                                      <select class="form-control">
                                                          <option></option>
                                                      </select>
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="clint_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="container">
                                    <div class="d-flex justify-content-start">
                                        <h4 class="text-primary my-5">ملفات العميل </h4>
                                    </div>
                                    <div class="responsive-scroll">
                                        <table class="table text-center clint_ clint2_">
                                          <tbody>
                                            <tr>
                                              <th>السجل التجاري</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file1"></span>
                                                  <br/>
                                                  <span id="s_file1"></span>
                                                </div>
                                                <label for="file1" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file1" name="file_Commercial_Record" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>رخصة البلدية</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file2"></span>
                                                  <br/>
                                                  <span id="s_file2"></span>
                                                </div>
                                                <label for="file2" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file2" name="file_Municipality_number" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>الرقم الضريبي</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file3"></span>
                                                  <br/>
                                                  <span id="s_file3"></span>
                                                </div>
                                                <label for="file3" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file3" name="file_tax_number" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>العنوان الوطني</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file4"></span>
                                                  <br/>
                                                  <span id="s_file4"></span>
                                                </div>
                                                <label for="file4" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file4" name="file_national_address" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>الحساب البنكي</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file5"></span>
                                                  <br/>
                                                  <span id="s_file5"></span>
                                                </div>
                                                <label for="file5" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file5" name="file_bank_account" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>رخصة الموارد البشرية</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file6"></span>
                                                  <br/>
                                                  <span id="s_file6"></span>
                                                </div>
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>رخصة هيئة الدواء والغذاء</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file6"></span>
                                                  <br/>
                                                  <span id="s_file6"></span>
                                                </div>
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>التأمينات الاجتماعية</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file6"></span>
                                                  <br/>
                                                  <span id="s_file6"></span>
                                                </div>
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>الغرفة التجارية</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file6"></span>
                                                  <br/>
                                                  <span id="s_file6"></span>
                                                </div>
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>أخري</th>
                                              <td>
                                                <div class="container-spans">
                                                  <span id="n_file6"></span>
                                                  <br/>
                                                  <span id="s_file6"></span>
                                                </div>
                                                <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                                <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                              </td>
                                              <td>
                                                <label class="mt-3 ml-5 btn btn-success">
                                                <i class="fa fa-download"></i></label>️
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                          </div>
                    </div>
                  </div>
              </div>
              <div class="btn-holder" style="margin-top:0;">
                  <button id="submit" class="btn btn-primary submit">حفظ</button>
              </div>

          </div>

        </form>


    </section>

</div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection
