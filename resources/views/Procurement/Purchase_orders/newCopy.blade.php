@extends('layouts.vertical', ['title' => 'انشاء امر شراء'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المشتريات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Purchase_orders.index') }}">امر شراء</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i> امر شراء 
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Purchase_orders.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> انشاء امر شراء</h4>
                </div>

            </div>
            <!--<div class="row bg-light pb-4 brdr">-->

                <form id="myForm" class="row  pb-4 brdr" action="{{ route('Purchase_orders.create.post') }}" method="post">
                    
                @csrf
                    <div class="row table-3 pb-4">
                        <div class="col-md-4 mt-5 ">
                          <div class="mb-3">
                            <div class="sub-head">
                              <h6 class="text-dark m-auto fw-bold">  تفاصيل بيانات الفاتورة
                              </h6>
                            </div>
                            <table class="table table-bordered  table-tafasyel" style="
                            width: 100% !important;
                        ">
                        
                              <tbody>
                                <tr>
                                  <td colspan="4" >              
                                    <h6 class="  my-2 pe-1 input-w-custom">رقم الفاتورة   <span class="star">*</span></h6>
                        
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <input name="code"type="text" class="form-control  my-2 tab-input" value="ORD   {{ $count }}"  id="code">
                                    <input name="done" type="text" class="form-control w-75 my-2 tab-input" value="1" id="done" hidden>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="  my-2 pe-1 input-w-custom"> الفرع<span class="star">*</span></h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <select class="form-select  form-select-lg my-2" name="site_id" id="site-id" onchange="checkinStore()">
                                      
                                      @foreach($sites as $site)
                                         <option  value="{{ $site->id }}"  {{ $PurchaseInvoices->site_id == $site->id ? 'selected' : '' }}   >{{ $site->name_ar }}</option>
                                      @endforeach
                                      
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="  my-2 pe-1 input-w-custom">نوع الدفع</h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <select id="payment_method" class="form-select  form-select-lg my-2 tab-input" 
                                    name="Note" onchange="showCreditLimit()">
                                      <optgroup>
                                            <option {{ $PurchaseInvoices->Note == 'cash'   ? 'selected' : '' }} value="cash">نقدي</option>
                                            <option {{ $PurchaseInvoices->Note == 'credit' ? 'selected' : '' }} value="credit">كريديت</option>
                                       </optgroup>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="  my-2 pe-1 input-w-custom">المورد<span class="star">*</span>
                                    </h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <select class="form-select  form-select-lg my-2" name="id_supplers" id="Client-select1">
                                      <option value="">اختار المورد</option>
                                      @foreach ($Suppliers as $Supplier)
                                        <option value="{{ $Supplier->id }}" {{ $PurchaseInvoices->id_supplers == $Supplier->id ? 'selected' : '' }}>
                                            {{ $Supplier->name }}
                                        </option>
                                      @endforeach
                                    </select>
                                  </td>
                                </tr>
                          
                              </tbody>
                            </table>
                          </div>
                        </div>  
                        
                        <div class="col-md-4 mt-5 ">
                          <div class="mb-3">
                            <div class="sub-head">
                              <h6 class="text-dark m-auto fw-bold">  تفاصيل الاصدار والاستحقاق</h6>
                            </div>
                            <table class="table table-bordered  table-tafasyel" style="
                            width: 100% !important;
                        ">
                        
                              <tbody>
                                <tr>
                                  <td colspan="4" >              
                                    <h6 class="my-2 p-1 input-w-custom">تاريخ الإصدار <span class="star">*</span></h6>
                        
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <input type="date" class="form-control my-2" id="Date_start_id" name="Date_start" value="{{ old('Date_start', date('Y-m-d')) }}">
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="my-2 p-1 input-w-custom">
                                      شروط الدفع
                                    </h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <select class="form-select  form-select-lg my-2" name="payment_terms" id="day_date">
                                      <optgroup>
                                        <option value="">اختار شروط الدفع</option>
                                        <option value="0"  {{ old('payment_terms') == '0' ? 'selected' : '' }}>نفس يوم الاصدار</option>
                                        <option value="7"  {{ old('payment_terms') == '7' ? 'selected' : '' }}>بعد 7 يوم</option>
                                        <option value="10" {{ old('payment_terms') == '10' ? 'selected' : '' }}>بعد 10 يوم</option>
                                        <option value="30" {{ old('payment_terms') == '30' ? 'selected' : '' }}>بعد 30 يوم</option>
                                        <option value="60" {{ old('payment_terms') == '60' ? 'selected' : '' }}>بعد 60 يوم</option>
                                        <option value="90" {{ old('payment_terms') == '90' ? 'selected' : '' }}>بعد 90 يوم</option>
                                      </optgroup>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="  my-2 p-1 input-w-custom">تاريخ الاستحقاق  <span class="star">*</span></h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <input type="date" class="form-control my-2" id="date_end_id" name="Date_end" value="{{ old('Date_end', date('Y-m-d')) }}">
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >                      
                                    <h6 class="  my-2 p-1 input-w-custom">تاريخ التوريد  <span class="star">*</span></h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <input type="date" class="form-control my-2" name="Date_Groce_Period" id="Date_Groce_Period" value="{{ old('Date_end', date('Y-m-d')) }}"> 
                                  </td>
                                </tr>
                          
                              </tbody>
                            </table>
                          </div>
                        </div>  
                        <div class="col-md-4 mt-5 ">

                          <div class="mb-3">

                            <div class="sub-head">
                              <h5 class="text-dark m-auto fw-bold"> تفاصيل بيانات المورد </h5>
                            </div>
                            <table class="table table-bordered table-tafasyel" style="
                            width: 100% !important;width: max-content;
                                       ">
                        
                              <tbody>
                                <tr>
                                  <td colspan="3" >              
                                    <h6 class="my-2 p-1 input-w-custom">الاسم</h6>
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <h5 id="info-client-name">{{ $SR->name ?? "-"}}</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >                      
                                    <h6 class="my-2 p-1 input-w-custom">الهاتف</h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <h5 id="info-client-phone">{{ $SR->phon ?? "-"}}</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >              
                                    <h6 class="my-2 p-1 input-w-custom">العنوان</h6>
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <h5 id="info-client-email">{{ $SR->city_1 ?? "-"}}</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >              
                                    <h6 class="my-2 p-1 input-w-custom">الرقم الضريبي</h6>
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <h5 id="info-client-tax">{{ $SR->Tex_Number ?? "-"}}</h5>
                                  </td>
                                </tr>
                             
                              </tbody>
                            </table>
                          </div>
                        </div>
                       
                      </div>

                    </div>

                    <div class="row  pb-4 ">
                        <div class="col-md-12">
                          <div class="w-100 my-5 table-responsive-lg responsive-scroll">
                            <table id="add_table" class="table  text-center table-bordered inventary-table">
                              <thead class="cf">
                                <tr>
                                  <th scope="col" style="width: 20px;">#</th>
                                  <th class="text-center" colspan="2" style="width: 150px;">المنتج</th>
                                  <th class="text-center" colspan="2">الكمية </th>
                                  <th class="text-center" colspan="1">سعر الوحدة </th>
                                  <th class="text-center" colspan="1">شامل؟</th>
                                  <th class="text-center" colspan="2">الخصم</th>
                                  <th class="text-center" colspan="1">الاجمالي قبل الضريبة </th>
                                  <th class="text-center" colspan="1">الضريبة %</th>
                                  <th class="text-center" colspan="1">قيمة الضريبة </th>
                                  <th class="text-center" colspan="1">القيمة </th>
                                  <th class="text-center" colspan="1"></th>
                                </tr>
                              </thead>
                              <tbody id="t-body">
                                <!-- <tr>
                                  <th class="text-center p-2">1</th>
                                  <td class="text-center p-1" colspan="2" style="
                                        width: 90px;
                                     ">
                                    <select class="form-select py-2 w-80 my-2 form-select-lg ">
                                      <option selected="">يرجى الاختيار</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </td>
                                  <td class="text-center" colspan="2" style="
                                        width: 30px;
                                         ">
                                    <input type="text" class="form-custom  my-2">
                                    <select class="form-select  form-select-lg" style="
                                          display: initial;
                                          width: 40%;
                                          height: 40px;
                                          ">
                                      <option value="1">ج</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </td>
                                  <td class="text-center" colspan="1" style="
                                        width: 125px;
                                        ">
                                    <input type="text" class="form-custom-2  my-2">
                                  </td>
                                  <td class="text-center " colspan="1" style="
                                        width: 30px;
                                         ">
                                    <input class="form-check-input mt-3" type="checkbox" value="" id="flexCheckDefault">
                                  </td>
                                  <td class="text-center" colspan="2" style="
                                          width: 30px;
                                           ">
                                    <input type="text" class="form-custom  my-2">
                                    <select class="form-select  form-select-lg" style="
                                            display: initial;
                                            width: 40%;
                                            height: 40px;
                                            ">
                                      <option value="1">ج</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </td>
                                  <td class="text-center " colspan="1" style="
                                          width: 125px;
                                          ">
                                    <input id="disabledTextInput" type="text" class="form-custom-2 no-cursor  my-2 " disabled>
                                  </td>
                                  <td class="text-center" colspan="1" style="
                                          width: 90px;
                                           ">
                                    <select class="form-select my-2 form-select-lg" style="
                                            display: initial;
                                            width: 90%;
                                            height: 40px;
                                            ">
                                      <option value="1">ج</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </td>
                                  <td class="text-center" colspan="1" style="
                                          width: 125px;
                                          ">
                                    <input type="text" class="form-custom-2  no-cursor  my-2">
                                  </td>
                                  <td class="text-center" colspan="1" style="
                                          width: 125px;
                                          ">
                                    <input type="text" class="form-custom-2  no-cursor my-2">
                                  </td>
                                  <td class="text-center" colspan="1" style="
                                          width: 75px;
                                          ">
                                    <button class="btn btn-outline-danger delete_row">حذف</button>
                                  </td>
                                </tr> -->
                              </tbody>
                            </table>
                            <a class="btn btn-primary " id="add_row">اضافةالمزيد</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-8 my-3"></div>

                    <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">

                        <div class="text-primary">
                            <h2><span>الاجمالي قبل الضريبة</span></h2>
                            <h2><span>قيمة الضريبة</span></h2>
                            <h2><span>المجموع</span></h2>
                        </div>
                        <div>
                            <h2 ><span id="total_before">00.00</span> </h2>
                            <h2><span  id="tax_value">00.00</span> </h2>
                            <h2><span  id="total_after">00.00</span> </h2>
                            <input type="text" name="total_with_tax" id="total_with_tax" hidden>
                            <input type="text" name="total"          id="total" hidden>
                            <input type="text" name="tax_value"      id="total_tax_value" hidden>


                        </div>


                    </div>

                    <!--<div>-->
                    <!--    <div class="accordion accordion-flush" id="accordionFlushExample">-->
                    <!--        <div class="accordion-item">-->
                    <!--            <h2 class="accordion-header" id="flush-headingOne">-->
                    <!--                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
                    <!--                    data-bs-target="#flush-collapseOne" aria-expanded="false"-->
                    <!--                    aria-controls="flush-collapseOne">-->
                    <!--                    الشروط والأحكام-->
                    <!--                </button>-->
                    <!--            </h2>-->
                    <!--            <div id="flush-collapseOne" class="accordion-collapse collapse"-->
                    <!--                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">-->
                    <!--                <div class="accordion-body">Placeholder content for this accordion, which is intended to-->
                    <!--                    demonstrate-->
                    <!--                    the <code>.accordion-flush</code> class. This is the first item's accordion body.-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="accordion-item">-->
                    <!--            <h2 class="accordion-header" id="flush-headingTwo">-->
                    <!--                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
                    <!--                    data-bs-target="#flush-collapseTwo" aria-expanded="false"-->
                    <!--                    aria-controls="flush-collapseTwo">-->
                    <!--                    ملاحظات-->
                    <!--                </button>-->
                    <!--            </h2>-->
                    <!--            <div id="flush-collapseTwo" class="accordion-collapse collapse"-->
                    <!--                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">-->
                    <!--                <div class="accordion-body">Placeholder content for this accordion, which is intended to-->
                    <!--                    demonstrate-->
                    <!--                    the <code>.accordion-flush</code> class. This is the second item's accordion body.-->
                    <!--                    Let's imagine-->
                    <!--                    this being filled with some actual content.</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="accordion-item">-->
                    <!--            <h2 class="accordion-header" id="flush-headingThree">-->
                    <!--                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
                    <!--                    data-bs-target="#flush-collapseThree" aria-expanded="false"-->
                    <!--                    aria-controls="flush-collapseThree">-->
                    <!--                    السندات-->
                    <!--                </button>-->
                    <!--            </h2>-->
                    <!--            <div id="flush-collapseThree" class="accordion-collapse collapse"-->
                    <!--                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">-->
                    <!--                <div class="accordion-body">-->

                    <!--                    <div class="form my-5">-->

                    <!--                        <div class="d-flex align-content-center justify-content-sm-between">-->
                    <!--                            <label class="mt-3 ml-5"> رقم المرجع</label><input type="text"-->
                    <!--                                class="form-control w-75 my-2">-->
                    <!--                        </div>-->

                    <!--                        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                    <!--                            <label class="mt-3 ml-5">الجهة</label>-->
                    <!--                            <select class="form-control w-75" name="" id="">-->
                    <!--                                <optgroup>-->
                    <!--                                    <option value="">1</option>-->
                    <!--                                    <option value=""> 2</option>-->

                    <!--                                </optgroup>-->
                    <!--                            </select>-->
                    <!--                        </div>-->


                    <!--                        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                    <!--                            <label class="mt-3 ml-5">الحساب</label>-->
                    <!--                            <select class="form-control w-75" name="" id="">-->
                    <!--                                <optgroup>-->
                    <!--                                    <option value="">1</option>-->
                    <!--                                    <option value="">2 </option>-->

                    <!--                                </optgroup>-->
                    <!--                            </select>-->
                    <!--                        </div>-->


                    <!--                        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                    <!--                            <label class="mt-3 ml-5">النوع</label>-->
                    <!--                            <select class="form-control w-75" name="" id="">-->
                    <!--                                <optgroup>-->
                    <!--                                    <option value="">1</option>-->
                    <!--                                    <option value=""> 2</option>-->

                    <!--                                </optgroup>-->
                    <!--                            </select>-->
                    <!--                        </div>-->


                    <!--                        <div class="d-flex align-content-center justify-content-sm-between">-->
                    <!--                            <label class="mt-3 ml-5">الوصف</label><input type="text"-->
                    <!--                                class="form-control w-75 my-2">-->
                    <!--                        </div>-->


                    <!--                        <div class="d-flex align-content-center justify-content-sm-between">-->
                    <!--                            <label class="mt-3 ml-5"> التاريخ</label><input type="date"-->
                    <!--                                class="form-control w-75 my-2">-->
                    <!--                        </div>-->



                    <!--                        <div class="d-flex align-content-center justify-content-sm-between">-->
                    <!--                            <label class="mt-3 ml-5">تخصيص السند تلقائيًا حسب أقدمية-->
                    <!--                                الفواتير</label><input type="checkbox" class=" m-auto my-2">-->

                    <!--                        </div>-->



                    <!--                    </div>-->

                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="accordion-item">-->
                    <!--            <h2 class="accordion-header" id="flush-headingFive">-->
                    <!--                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
                    <!--                    data-bs-target="#flush-collapseFive" aria-expanded="false"-->
                    <!--                    aria-controls="flush-collapseThree">-->
                    <!--                    المرفقات-->
                    <!--                </button>-->
                    <!--            </h2>-->
                    <!--            <div id="flush-collapseFive" class="accordion-collapse collapse"-->
                    <!--                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <div class="col-md-12 add-sub">-->
                    <!--                        <h5 class="text-primary">المرفقات</h5>-->

                    <!--                        <div class="d-flex align-content-center justify-content-center text-center">-->
                    <!--                            <div>-->
                    <!--                                <button class="btn btn-light">تصفح ملفاتك</button>-->
                    <!--                                <h5 class="my-3">او</h5>-->
                    <!--                                <h5>قم بسحب الملفات مباشرة هنا</h5>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="accordion-item">-->
                    <!--            <h2 class="accordion-header" id="flush-headingFour">-->
                    <!--                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
                    <!--                    data-bs-target="#flush-collapseFour" aria-expanded="false"-->
                    <!--                    aria-controls="flush-collapseOne">-->
                    <!--                    معلومات إضافية-->
                    <!--                </button>-->
                    <!--            </h2>-->
                    <!--            <div id="flush-collapseFour" class="accordion-collapse collapse"-->
                    <!--                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">-->
                    <!--                <div class="accordion-body"><label class="mx-4">إضافة إلى</label><input type="radio">-->
                    <!--                    مشروع <input type="radio"> مهمة-->
                    <!--                    <br>-->
                    <!--                    <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                    <!--                        <label class="mt-3 ml-5">إضافة مشروع/ مهمة</label>-->
                    <!--                        <select class="form-control w-75" name="" id="">-->
                    <!--                            <optgroup>-->
                    <!--                                <option value="">1</option>-->
                    <!--                                <option value=""> 2</option>-->

                    <!--                            </optgroup>-->
                    <!--                        </select>-->
                    <!--                    </div>-->

                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        الشروط والأحكام
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <textarea style="height: 74px;width: 100%;">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="btn-holder">
                        <button id="submitButton" class="btn btn-primary submit" >حفظ وموافقة</button>
                        <button
                            class="btn btn-dark re-submit" id="resubmit">حفظ
                            كمسودة</button>

                    </div>
                    
                </form>
            <!--</div>-->
                




        </div>
</div>
@endsection
@section('script')
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ URL('js/main.js') }}"></script>
<script>
    let id = 0;
    let counter = 0;
    let Total_array = [];
    let sumVal = 0;
    let sumValBefore = 0;
    let sumValTax = 0;
    var Total_value = [];
    var Total_before = [];
    var Total_Tax = [];
    // var Checkqun      = "yes";
    
    
    const formElement   = document.getElementById('myForm');
    const submitButton  = document.getElementById('submitButton');
    const resubmit      = document.getElementById('resubmit');
  
    document.addEventListener("DOMContentLoaded", function() {
            
       @foreach ($QuotationDetails as $QuotationDetails)
        @php
            $productQ = App\Product::where('id' , $QuotationDetails->product_id)->first();
            // dd($productQ->id);
            $unit     = App\Uint::where('id', $productQ->id_unit)->first();
            $productUnit = App\ProductUint::where('id_product', $productQ->id)->get();
            // dd($productUnit);
        @endphp
            
           // new
        counter += 1
        var row = '';
        row += `
      <tr> 
           <th class="text-center p-2">${counter}</th>
                <td class="text-center p-1" colspan="2" style="width: 90px;">
                    <select id="product_${id}"  onchange="myFunction(${id})" name="test[]"  class="form-control w-70  px-2" style="height: 40px;" >
                        <optgroup>
                            <option  value=""></option>
                            @foreach ($products as $product )
                                <option {{ $QuotationDetails->product_id == $product->id ? 'selected' : '' }}  value="{{ $product->id }}">{{ $product->name_ar  }}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </td>
                <td class="text-center" colspan="2" style="width: 30px;">
                    <input id="qun_product_${id}" onfocusout="result(${id})" value="{{ $QuotationDetails->qun }}"   name="test[]" type="text" class="form-custom my-2" value="1">
                    <select id="dec_product_${id}" name="test[]" onchange="resultUnit(${id})" class="form-custom my-2">
                        <option value="{{ $productQ->sel }}-{{ $unit->id }}-1">{{ $unit->name }}</option>
                        @foreach ($productUnit as $pu)
                            @php
                                $unitPro = App\Uint::where('id', $pu->id_unit)->first();
                            @endphp
                            <option {{ $QuotationDetails->unit_id == $pu->id_unit  ? 'selected' : '' }} value="{{ $pu->price_sell }}-{{ $pu->id_unit }}-{{ $pu->counter_of_unit }}">{{ $unitPro->name }}</option>
                        @endforeach
                    </select
                    
                </td>
                <td class="text-center" colspan="1" style="width: 125px;" >
                    <input id="price_unit_product_${id}" onfocusout="result(${id})" value="{{ $QuotationDetails->price_unit }}"  name="test[]" type="text" class="form-custom-2 my-2" style="width: 120px;">
                </td>
                <td class="text-center" colspan="1" style="width: 30px;">
                    <input id="inc_desc_product_${id}" onclick="result(${id})"  class="form-check-input mt-3" type="checkbox" {{ $QuotationDetails->withDescunt == 'on' ? 'checked' : 'off' }}>
                    
                    <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="hidden" value="{{ $QuotationDetails->withDescunt  }}">
                    
                </td>
                <td class="text-center" colspan="2" style="width: 30px;">
                    <input type="text" class="form-custom my-2"  id="desc_product_${id}" onfocusout="result(${id})"   name="test[]" value="{{ $QuotationDetails->descunt }}">
                    <select class="form-select form-select-lg" name="test[]" style="display: initial; width: 40%; height: 40px;" id="desc_product_op_${id}" onchange="result(${id})">
                        <option  {{ $QuotationDetails->type_descount == 0 ? 'selected' : ''  }} value="0">قيمة</option>
                        <option {{ $QuotationDetails->type_descount == 1 ? 'selected' : ''  }}  value="1">%</option>
                    </select>
                </td>
                <td class="text-center" colspan="1" style="width: 125px;" >
                    <input id="price_before_tax_product_${id}"   value="{{ $QuotationDetails->price_before }}"    name="test[]" type="text" class="form-custom-2 no-cursor my-2"  style="width: 120px;" readonly>
                </td>
                <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg" style="display: initial; width: 90%; height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>
                        <option {{ $QuotationDetails->tax == 0 ? 'selected' : ''  }} value="0">0.0%</option>
                        <option {{ $QuotationDetails->tax == 15 ? 'selected' : ''  }} value="15">15%</option>
                    </select>
                </td>
                <td class="text-center" colspan="1" style="width: 125px;">
                    <input id="Tax_value_${id}" value="{{ $QuotationDetails->tax_value }}" name="test[]" type="text" class="form-custom-2 no-cursor my-2" style="width: 120px;" readonly>
                </td>
            <td class="text-center" colspan="1" style="width: 125px;">
                <input type="text" class="form-custom-2 no-cursor my-2" value="{{ $QuotationDetails->price_after }}" name="test[]" id="Total_${id}" style="width: 120px;" readonly>
            </td>
            <td class="text-center" colspan="1" style="width: 30px;">
            <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i></td> 
        </tr>`;
          
          
          $("#t-body").append(row);
          Total_value[id] = {{   $QuotationDetails->price_after }};
          Total_before[id] = {{ $QuotationDetails->price_before }};
          Total_Tax[id] = {{ $QuotationDetails->tax_value }};
        //   result(id);
        //   getSum();
          id += 1;
            
        @endforeach
        getSum();
            
    });

    
    function myFunction(id) {
        product_id  = document.getElementById('product_'+id).value;
        product_des = document.getElementById('dec_product_'+id);
        Descount = document.getElementById('desc_product_'+id);
        PriceUnitProduct = document.getElementById('price_unit_product_'+id);
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        Tax              = document.getElementById('product_tax_'+id);
        tax_on_product   = 0;
    var errorMessage = document.getElementById('errorMessage_'+id);
        qunProduct       = document.getElementById('qun_product_'+id);
        TaxValue         = document.getElementById('Tax_value_'+id);
        Total                 = document.getElementById('Total_'+id);
        var site                      = document.getElementById('site-id');
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var employeeSelect = $('#dec_product_'+id);
        qunProduct.value   = 1
        Descount.value  = 0
        checkboxIncluded.checked = false
        // Clear the previous employee options
        employeeSelect.empty();

        // Add the default option
        

    
       if (site.value.trim() === '') {
            alert("لا يوجد كمية متوفرة لهذا المنتج")
            // errorMessage.classList.add('show');
            // Checkqun = "no";
          }   
          
        $(document).ready(function () {
            // alert('dadas');
            var ProductURL = "/dashboard/getInfoAndQunProduct?product_id="+product_id+"&site_id="+site.value;
            $.get(ProductURL, function (data) {
                // if(data.qun == 0 || qunProduct.value > data.qun) {
                //     // alert("لا يوجد كمية متوفرة لهذا المنتج")
                //     errorMessage.classList.add('show');
                //     // Checkqun = "no";
                // } else {
                //      errorMessage.classList.remove('show');
                    
                // }
                // product_des.value           = ;
                PriceUnitProduct.value      = data.sel;
                priceBeforeTaxProduct.value = (data.sel).toFixed(2);
                tax_on_product        = data.Tex_Number;
                if (data.Tex_Number == 15) {
                    Tax.selectedIndex           = 2;    
                } else {
                    Tax.selectedIndex           = 1;
                }
                // alert("ddaadas")
                // console.log(data.product_units)
                // append the select box with the uint products
                
                employeeSelect.append(`<option value="${data.sel}-${data.unit.id}">${data.id_unit}</option>`);
                console.log(data.unit)
                //  
                $.each(data.productUnits, function(key, value) {
                    employeeSelect.append(`<option value="${value.price_sell}-${value.id}">${value.unitproduct_unit.name}</option>`);
                });
        
                
                Total.value = (parseFloat(data.sel) + parseFloat(data.sel) * Tax.value / 100).toFixed(2);
                TaxValue.value    = (Math.round((parseFloat(data.sel) * Tax.value / 100) * 100) / 100).toFixed(2);
                Total_value[id] = parseFloat(Total.value);
                Total_Tax[id]   = parseFloat(TaxValue.value);
                Total_before[id] = data.sel;
                getSum();
            })
        });
        $('.select2').select2();

    }


    function getSum() {
        for (let index = 0; index < Total_value.length; index++) {

            sumVal       += Total_value[index];
            sumValTax    += Total_Tax[index];
            sumValBefore += Total_before[index];
            // if (index == 1) {
                console.log(index)
                console.log(Total_value[index])
                console.log(Total_Tax[index])
                console.log(Total_before[index])
                console.log("-------------------------------------")
                
            // }

        }
        // alert(sumVal);
        document.getElementById("total_after").innerHTML =  sumVal.toFixed(2);
        document.getElementById("tax_value").innerHTML =  sumValTax.toFixed(2);
        document.getElementById("total_before").innerHTML =  sumValBefore.toFixed(2);

        document.getElementById('total_with_tax').value   = sumValBefore.toFixed(2);
        document.getElementById('total').value            = sumVal.toFixed(2);
        // document.getElementById('old_balance').value      = sumVal.toFixed(2);
        document.getElementById('total_tax_value').value  = sumValTax.toFixed(2);
        // console.log(sumValTax);
        sumVal = 0;
        sumValTax = 0;
        sumValBefore = 0;

    }

    const daysSelect = document.getElementById("day_date");

    daysSelect.addEventListener("change", () => {
    const inputDateStr = document.getElementById("Date_start_id").value;
    const endDateInput = document.getElementById("date_end_id");
    const inputDate = new Date(inputDateStr);

    const selectedDays = parseInt(daysSelect.value);
    inputDate.setDate(inputDate.getDate() + selectedDays + 1);

    // get the formatted date string
    const futureDateStr = inputDate.toISOString().slice(0, 10); // get the formatted date string
        endDateInput.value = futureDateStr;
        console.log(futureDateStr); // output: the future date string
    });


    
     function result (id) {
        var isok        = "yes";
        var TotalBefore = document.getElementById('price_before_tax_product_'+id);
        var incinputProduct = document.getElementById("inc_input_product_" + id);
        var TotalAfter  = document.getElementById('Total_'+id);
        var TotalIncluded = 0;
        var qunProduct       = document.getElementById('qun_product_'+id).value;
        var qunProductInput       = document.getElementById('qun_product_'+id);
        var dec_product           = document.getElementById('dec_product_'+id).value;
        var Tax              = document.getElementById('product_tax_'+id).value;
        var op               = document.getElementById('desc_product_op_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        var PriceUnitProductInput = document.getElementById('price_unit_product_'+id);
        // alert(dec_product)
        // PriceUnitProductInput.value = dec_product;
        // var                = document.getElementById('desc_product_op_'+id).value;
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var TaxValue         = document.getElementById('Tax_value_'+id);
        var DescProduct      = document.getElementById('desc_product_'+id).value;
        var DescProductInput      = document.getElementById('desc_product_'+id);
        var DescProductOp    = 0;
        var ToTax            = 0;
        TotalBefore.value = parseFloat(parseFloat(qunProduct) * PriceUnitProduct).toFixed(2) ;
        // 500 * 10 / 100 - 500 
        if (qunProduct === "" ||  qunProduct <= 0 || isNaN(qunProduct)) {
            // alert('تم ادخال البيانات بشكل حطأ برجاء المحاوله مره اخري')
            isoK = "no";
            qunProductInput.value = "1"
            qunProduct = 1
            qunProductInput.classList.add('error-border');
        } else {
            qunProductInput.classList.remove('error-border');
            
        }
        
        if (DescProduct === "" || DescProduct < 0 || isNaN(DescProduct)) {
          alert('تم ادخال البيانات بشكل حطأ برجاء المحاوله مره اخري');
          isoK = "no";
          DescProductInput.value = "0";
          DescProductInput.classList.add('error-border');
        } else {
              DescProductInput.classList.remove('error-border');
        }
            
        if (PriceUnitProduct <= 0 || isNaN(PriceUnitProduct)) {
           alert('تم ادخال البيانات بشكل حطأ برجاء المحاوله مره اخري')
          isoK = "no";
          PriceUnitProductInput.value = "1";
          PriceUnitProductInput.classList.add('error-border');
        } else {
          PriceUnitProductInput.classList.remove('error-border');
        }
                
        // if(isoK == "no") {
        //       alert('تم ادخال البيانات بشكل حطأ برجاء المحاوله مره اخري')
        // }
        
        
        if (checkboxIncluded.checked) {
            if (op == 1) {
                if (DescProduct > 100) {
                    alert('0 To 100')
                }
                DescProductOp = parseFloat(TotalBefore.value) * ( DescProduct / 100 );
                
            }  else {
                
                DescProductOp = DescProduct;
            }
            ToTax = parseFloat(Tax) + 100; // 200
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  (TotalIncluded + TotalIncluded * Tax / 100).toFixed(2);
            incinputProduct.value = "on"
            TotalBefore.value   =  TotalIncluded ;
            
        } else {
            if (op == 1) {
                 if (DescProduct > 100) {
                    alert('0 To 100')
                }
                DescProductOp = parseFloat(TotalBefore.value) * ( DescProduct / 100 );
                // alert(DescProductOp)
            }  else {
                DescProductOp = DescProduct;
            }
            incinputProduct.value = "off"
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalAfter.value    =  (parseFloat(TotalBefore.value) + parseFloat(TotalBefore.value) * Tax / 100).toFixed(2)  ;
        }
        
        TaxValue.value    = Math.round((parseFloat(TotalBefore.value) * Tax / 100) * 100) / 100;
        // alert(parseFloat( TaxValue.value) )
        Total_value[id]  = parseFloat( TotalAfter.value);
        Total_Tax[id]    = parseFloat( TaxValue.value) ;
        Total_before[id] = parseFloat( TotalBefore.value) ;
        getSum();
        
        
    }
    
    
     function resultUnit (id) {
        var TotalBefore = document.getElementById('price_before_tax_product_'+id);
        var TotalAfter  = document.getElementById('Total_'+id);
        var TotalIncluded = 0;
        var qunProduct       = document.getElementById('qun_product_'+id).value;
        var qunProductInput       = document.getElementById('qun_product_'+id);
        var dec_product           = document.getElementById('dec_product_'+id).value;
        var Tax              = document.getElementById('product_tax_'+id).value;
        var op               = document.getElementById('desc_product_op_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        var PriceUnitProductInput = document.getElementById('price_unit_product_'+id);
        // alert(dec_product)
        var price   = dec_product.split("-");
        console.log(price)
        PriceUnitProductInput.value = price[0];
        // var                = document.getElementById('desc_product_op_'+id).value;
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var TaxValue         = document.getElementById('Tax_value_'+id);
        var DescProduct      = document.getElementById('desc_product_'+id).value;
        var DescProductInput      = document.getElementById('desc_product_'+id);
        var DescProductOp    = 0;
        var ToTax            = 0;
        TotalBefore.value = parseFloat(parseFloat(qunProduct) * PriceUnitProductInput.value).toFixed(2) ;
        // 500 * 10 / 100 - 500 
        if (qunProduct === "" ||  qunProduct <= 0 ) {
            alert('يجب ادخال هذا الحقل')
            qunProductInput.value = "1"
            qunProduct = 1
            qunProductInput.classList.add('error-border');
        } else {
            qunProductInput.classList.remove('error-border');
            
        }
        
        if (DescProduct === "") {
            alert('يجب ادخال هذا الحقل')
            DescProductInput.value = "0"
            DescProductInput.classList.add('error-border');
            
        } else {
            DescProductInput.classList.remove('error-border');
            
        }
        
        if (checkboxIncluded.checked) {
            if (op == 1) {
                if (DescProduct > 100) {
                    alert('0 To 100')
                }
                DescProductOp = parseFloat(TotalBefore.value) * ( DescProduct / 100 );
                
            }  else {
                
                DescProductOp = DescProduct;
            }
            ToTax = parseFloat(Tax) + 100; // 200
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  Math.round(TotalIncluded + TotalIncluded * Tax / 100);
            TotalBefore.value   =  TotalIncluded ;
            
        } else {
            if (op == 1) {
                 if (DescProduct > 100) {
                    alert('0 To 100')
                }
                DescProductOp = parseFloat(TotalBefore.value) * ( DescProduct / 100 );
                // alert(DescProductOp)
            }  else {
                DescProductOp = DescProduct;
            }
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalAfter.value    =  (parseFloat(TotalBefore.value) + parseFloat(TotalBefore.value) * Tax / 100).toFixed(2)  ;
        }
        
        TaxValue.value    = Math.round((parseFloat(TotalBefore.value) * Tax / 100) * 100) / 100;
        
         Total_value[id]  = parseFloat( TotalAfter.value);
         Total_Tax[id]    = parseFloat( TaxValue.value) ;
         Total_before[id] = parseFloat( TotalBefore.value) ;
        getSum();
        
        
    }
    


</script>
<script>
        function selectT(id) {
            $('#product_'+id).select2();
        }
</script>
<script>
    $(document).ready(function() {
        // When the branch select field changes
        $('#Client-select1').on('change', function() {
            var ClientId = $(this).val();
            var employeeSelect = $('#ReturnsSalesInvoices-select1');

            // Clear the previous employee options
            employeeSelect.empty();

            // Add the default option
            employeeSelect.append('<option value="all">اختار الفاتورة الخاصه بهذا المورد</option>');

            // If a branch is selected
            if (ClientId) {
                
                $.ajax({
                    url: '/dashboard/Supplier/get/info', // Replace with the actual endpoint URL that retrieves employees based on a branch ID
                    type: 'GET',
                    data: { client_id: ClientId },
                    success: function(response) {
                        // Add the retrieved employees to the employee select field

                        document.getElementById("info-client-name").innerHTML =  response.name;
                        document.getElementById("info-client-phone").innerHTML =  response.number1;
                        document.getElementById("info-client-email").innerHTML =  response.city_1;
                        document.getElementById("info-client-tax").innerHTML =  response.Tex_number;

                    }
                });
            }
        });
    });
</script>
<script>
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
      var inputElement = document.getElementById('Client-select1');
      // Date_Groce_Period product_$ site-id date_end_id Date_start_id 
      
      var code                      = document.getElementById('code');
      var Date_Groce_Period         = document.getElementById('Date_Groce_Period');
      var Date_start_id             = document.getElementById('Date_start_id');
      var date_end_id               = document.getElementById('date_end_id');
      var site                      = document.getElementById('site-id');
      var state      = "yes";
      var Checkqun   = "yes";
      if (inputElement.value.trim() === '') {
        inputElement.classList.add('error-border');
        state = "no";
      } else {
           inputElement.classList.remove('error-border');
      }
      
      if (Date_Groce_Period.value.trim() === '') {
        Date_Groce_Period.classList.add('error-border');
        state = "no";
      } else {
           Date_Groce_Period.classList.remove('error-border');
      }
      
    
    
      if (date_end_id.value.trim() === '') {
        date_end_id.classList.add('error-border');
        state = "no";
      } else {
           date_end_id.classList.remove('error-border');
      }
      
      
      if (site.value.trim() === '') {
        site.classList.add('error-border');
        state = "no";
      } else {
          site.classList.remove('error-border');
      }
    
    
      if (Date_start_id.value.trim() === '') {
        Date_start_id.classList.add('error-border');
        state = "no";
      } else {
           Date_start_id.classList.remove('error-border');
      }
    
    
      
    
      if (code.value.trim() === '') {
        code.classList.add('error-border');
        state = "no";
      } else {
          code.classList.remove('error-border');
      }
    
        
    //   var table = document.getElementById("t-body");
    //   var rows = table.getElementsByTagName("tr");
    
    //   for (var i = 0; i < rows.length; i++) {
    //     var row = rows[i];
    //     console.log(row)
        
    //     var productIdInput = row.querySelector("select[name='test[]']");
    //     if (productIdInput != "") {
    //         if (productIdInput.value.trim() === "" || productIdInput.value.trim() === null) {
    //           productIdInput.classList.add("error-border");
    //           state = "no"
    //         } else {
    //             productIdInput.classList.remove("error-border");
    //         }
              
    //     }
    //   }
    //   for (var i = 0; i < rows.length; i++) {
    //     var row = rows[i];
    //     console.log(row)
        
    //     var productIdInput = row.querySelector("select[name='old[]']");
    //     if (productIdInput.value.trim() === "" || productIdInput.value.trim() === null) {
    //       productIdInput.classList.add("error-border");
    //       state = "no"
    //     } else {
    //         productIdInput.classList.remove("error-border");
    //     }
          
    //   }
    
    
      if (state == "yes" && Checkqun == "yes") {
          formElement.submit();
      } else {
          alert("يجب ادخال جميع الحقول")
      }
        
    // Perform any additional actions or validation if needed
    
    // Submit the form programmatically
    
  });
  
  resubmit.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
      var inputElement = document.getElementById('Client-select1');
      var done         = document.getElementById('done');
      // Date_Groce_Period product_$ site-id date_end_id Date_start_id 
      
      var code                      = document.getElementById('code');
      var Date_Groce_Period         = document.getElementById('Date_Groce_Period');
      var Date_start_id             = document.getElementById('Date_start_id');
      var date_end_id               = document.getElementById('date_end_id');
      var site                      = document.getElementById('site-id');
      var state      = "yes";
      var Checkqun   = "yes";
      done.value     = "0";
      if (inputElement.value.trim() === '') {
        inputElement.classList.add('error-border');
        state = "no";
      } else {
           inputElement.classList.remove('error-border');
      }
      
      if (Date_Groce_Period.value.trim() === '') {
        Date_Groce_Period.classList.add('error-border');
        state = "no";
      } else {
           Date_Groce_Period.classList.remove('error-border');
      }
      
    
    
      if (date_end_id.value.trim() === '') {
        date_end_id.classList.add('error-border');
        state = "no";
      } else {
           date_end_id.classList.remove('error-border');
      }
      
      
      if (site.value.trim() === '') {
        site.classList.add('error-border');
        state = "no";
      } else {
          site.classList.remove('error-border');
      }
    
    
      if (Date_start_id.value.trim() === '') {
        Date_start_id.classList.add('error-border');
        state = "no";
      } else {
           Date_start_id.classList.remove('error-border');
      }
    
    
      
    
      if (code.value.trim() === '') {
        code.classList.add('error-border');
        state = "no";
      } else {
          code.classList.remove('error-border');
      }
    
        
      
    
    
      if (state == "yes" && Checkqun == "yes") {
          formElement.submit();
      } else {
          alert("يجب ادخال جميع الحقول")
      }
        
    // Perform any additional actions or validation if needed
    
    // Submit the form programmatically
    
  });
  
  $('#add_row').click(function() {
          // Add row
          counter += 1
          var row = '';
          row += `
          <tr> 
           <th class="text-center p-2">${counter}</th>
                <td class="text-center p-1" colspan="2" style="width: 90px;">
                    <select id="product_${id}"  onchange="myFunction(${id})" name="test[]"  class="form-control w-70  px-2" style="height: 40px;" >
                        <optgroup>
                        <option  value="">اختر المنتج</option>
                            @foreach ($products as $product )
                                <option  value="{{ $product->id }}">{{ $product->name_ar  }}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </td>
                <td class="text-center" colspan="2" style="width: 30px;">
                    <input id="qun_product_${id}" onfocusout="result(${id})"    name="test[]" type="text" class="form-custom my-2" value="1">
                    <select  id="dec_product_${id}"    onchange="resultUnit(${id})" name="test[]"  class="form-custom my-2" >
                        
                    </select>
                    <span id="errorMessage_${id}" class="error-message">الكمية غير متوافرة</span>
                    
                </td>
                <td class="text-center" colspan="1" >
                    <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2" style="width: 120px;">
                </td>
                <td class="text-center" colspan="1" style="width: 30px;">
                    <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                    <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="hidden" value="off">

                </td>
                <td class="text-center" colspan="2" style="width: 30px;">
                    <input type="text" class="form-custom my-2" value="0" id="desc_product_${id}" onfocusout="result(${id})"   name="test[]">
                    <select class="form-select form-select-lg" style="display: initial; width: 40%; height: 40px;" name="test[]" id="desc_product_op_${id}" onchange="result(${id})">
                        
                        <option value="0">قيمة</option>
                        <option value="1">%</option>
                    </select>
                </td>
                <td class="text-center" colspan="1"  >
                    <input id="price_before_tax_product_${id}"   name="test[]" type="text" class="form-custom-2 no-cursor my-2"  readonly style="width: 125px;">
                </td>
                <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg" style="display: initial; width: 90%; height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>    
                        <option  value="0">0</option>
                        <option  value="15">15</option>
                    </select>
                </td>
                <td class="text-center" colspan="1" >
                    <input id="Tax_value_${id}" name="test[]" type="text" class="form-custom-2 no-cursor my-2" readonly style="width: 125px;">
                </td>
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 no-cursor my-2"  name="test[]" id="Total_${id}" readonly style="width: 125px;">
                </td>
                <td class="text-center" colspan="1" >
                    <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
                </td> 
          </tr>`;
          
          
          $("#t-body").append(row);
          Total_value[id] = 0;
          Total_before[id] = 0;
          Total_Tax[id] = 0;
          getSum();
          id += 1;
        });
    
        // Event delegation for the delete button
        $("tbody").on("click", ".delete_row", function() {
          counter -= 1
          var deleteId = $(this).data("id");
        //   alert(0)
          Total_value[deleteId] = 0;
          Total_before[deleteId] = 0;
    
          Total_Tax[deleteId] = 0;
          getSum();
          $(this).closest('tr').remove();
          resetTableIndexes();
        });
    
        // function getSum() {
        //   var sumVal = 0;
        //   var sumValBefore = 0;
        //   var sumValTax = 0;
        //   for (let index = 0; index < Total_value.length; index++) {
        //     sumVal += Total_value[index];
        //     sumValTax += Total_Tax[index];
        //     sumValBefore += Total_before[index];
        //     console.log(index);
        //     console.log("Total Value: ", Total_value[index]);
        //     console.log("Total Tax: ", Total_Tax[index]);
        //     console.log("Total Before: ", Total_before[index]);
        //     console.log("-------------------------------------");
        //   }
        //   document.getElementById("total_after").innerHTML =  sumVal;
        //   document.getElementById("tax_value").innerHTML =  sumValTax;
        //   document.getElementById("total_before").innerHTML =  sumValBefore;
        // }
    function resetTableIndexes() {
      var table = document.getElementById("t-body");
      var rows = table.rows;
      var rowCount = rows.length;
    
      // Reset the index counter
      counter = 0;
     
      // Loop through the rows and update the index value
      for (var i = 0; i < rowCount; i++) {
        var row = rows[i];
        var cells = row.cells;
    
        // Update the index value in the first cell (cell1)
        cells[0].innerHTML = counter + 1;
        counter +=1 
    
        // Update any other relevant cell values or perform additional actions here
    
        // Update the onclick attribute of the "Remove" link
        // var removeLink = cells[12].querySelector("a");
        // removeLink.setAttribute("onclick", "removeRow(" + counter + ")");
    
        // Update any other relevant cell values or perform additional actions here
        // console.log(counter);
      }
    }
</script>

@endsection
