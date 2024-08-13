
@extends('layouts.vertical', ['title' => ' امر الشراء'])
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.default.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css" rel="stylesheet" />
<style>
    .selectize-control.single .selectize-input {
     box-shadow: none; 
     background-color: none; 
     background-image: none; 
     background-repeat: none; 
    }
    .table-tafasyel h6{
      /*margin: 15px auto !important;*/
    }
    #add_table{
      min-width: 100%;
      width: max-content;
    }
    .form-custom2{
      width: 50px !important;
      margin: 0 !important;
    }
    .table-3 tr,.table-3  td{
      height: 70px !important;
    }
</style>
@endsection
@section('content')

<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Purchase_orders.index') }}"> امر الشراء</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i> إنشاء امر الشراء 
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

                    <h4 class="mx-4"> إنشاء امر الشراء</h4>
                </div>

            </div>
            <!--<div class="row bg-light pb-4 brdr">-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                                    <input name="code"type="text" class="form-control  my-2 tab-input" value="ORD {{$count}}"  id="code">
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
                                         <option value="{{ $site->id }}"  >{{  $site->name_ar  }}</option>
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
                                    name="Note" >
                                      <optgroup>
                                        <option value="cash">نقدي</option>
                                        <option value="credit" >كريديت</option>
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
                                    <select class="form-select  form-select-lg my-2" name="id_supplers" id="Client-select">
                                      <option value="">اختار المورد</option>
                                      @foreach ($Clients as $Supplier)
                                        <option value="{{ $Supplier->id }}" {{ old('id_supplers') == $Supplier->id ? 'selected' : '' }}>
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
                                        <option value="0"  {{ old('Payment_Terms') == '0' ? 'selected' : '' }}>نفس يوم الاصدار</option>
                                        <option value="7"  {{ old('Payment_Terms') == '7' ? 'selected' : '' }}>بعد 7 يوم</option>
                                        <option value="10" {{ old('Payment_Terms') == '10' ? 'selected' : '' }}>بعد 10 يوم</option>
                                        <option value="30" {{ old('Payment_Terms') == '30' ? 'selected' : '' }}>بعد 30 يوم</option>
                                        <option value="60" {{ old('Payment_Terms') == '60' ? 'selected' : '' }}>بعد 60 يوم</option>
                                        <option value="90" {{ old('Payment_Terms') == '90' ? 'selected' : '' }}>بعد 90 يوم</option>
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
                                    <h5 id="info-client-name">-</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >                      
                                    <h6 class="my-2 p-1 input-w-custom">الهاتف</h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <h5 id="info-client-phone">-</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >              
                                    <h6 class="my-2 p-1 input-w-custom">العنوان</h6>
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <h5 id="info-client-email">-</h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3" >              
                                    <h6 class="my-2 p-1 input-w-custom">الرقم الضريبي</h6>
                                  </td>
                                  <td class="px-2 td-ftora">        
                                    <h5 id="info-client-tax">-</h5>
                                  </td>
                                </tr>
                           
                              </tbody>
                            </table>
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
                            <!--<input type="text" name="old_balance"    id="old_balance" hidden>-->
                            <input type="text" name="tax_value"      id="total_tax_value" hidden>


                        </div>


                    </div>

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
                        <button class="btn btn-primary submit" id="submitButton">حفظ وموافقة</button>
                         <a href="{{ route('Purchase_orders.index') }}" class="btn btn-dark mx-2 text-light" >رجوع</a>

                    </div>
                </form>
            <!--</div>-->





        </div>
</div>
@endsection
@section('script')
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <select  id="dec_product_${id}"   onchange="resultUnit(${id})" name="test[]"    class="form-custom my-2" >
                        
                    </select>
                   

                    
                    
                </td>
                <td class="text-center" colspan="1" style="width: 125px;" >
                    <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2" style="width: 120px;">
                </td>
                <td class="text-center" colspan="1" style="width: 30px;">
                    <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                    <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="text" value="off" hidden>
                </td>
                <td class="text-center" colspan="2" style="width: 30px;">
                    <input type="text" class="form-custom my-2" value="0" id="desc_product_${id}" onfocusout="result(${id})"   name="test[]">
                    <select class="form-select form-select-lg" name="test[]" style="display: initial; width: 40%; height: 40px;" id="desc_product_op_${id}" onchange="result(${id})">
                        <option value="0">قيمة</option>
                        <option value="1">%</option>
                    </select>
                </td>
                <td class="text-center" colspan="1" style="width: 125px;" >
                    <input id="price_before_tax_product_${id}"   name="test[]" type="text" class="form-custom-2 no-cursor my-2"  style="width: 120px;" readonly>
                </td>
                <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg" style="display: initial; width: 90%; height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>
                        <option  value="0">0</option>
                        <option  value="15">15</option>
                    </select>
                </td>
                <td class="text-center" colspan="1" style="width: 125px;">
                    <input id="Tax_value_${id}" name="test[]" type="text" class="form-custom-2 no-cursor my-2" style="width: 120px;" readonly>
                </td>
                <td class="text-center" colspan="1" style="width: 125px;">
                    <input type="text" class="form-custom-2 no-cursor my-2"  name="test[]" id="Total_${id}" style="width: 120px;" readonly>
                </td>
                <td class="text-center" colspan="1" style="width: 30px;">
                    
                </td> 
          </tr>`;
          
          
          $("#t-body").append(row);
          Total_value[id] = 0;
          Total_before[id] = 0;
          Total_Tax[id] = 0;
          getSum();
          id += 1;
        
    });
    
    function addCode() {

        var table  = document.getElementById("t-body");
        var row    = table.insertRow(-1);
        var cell1  = row.insertCell(0);
        var cell2  = row.insertCell(1);
        var cell3  = row.insertCell(2);
        var cell4  = row.insertCell(3);
        // var cell5  = row.insertCell(4);
        var cell6  = row.insertCell(4);
        var cell7  = row.insertCell(5);
        var cell8  = row.insertCell(6);
        var cell9  = row.insertCell(7);
        var cell0  = row.insertCell(8);
        var cell11 = row.insertCell(9);
        var cell12 = row.insertCell(10);
        var cell13 = row.insertCell(11);
        // var cell14 = row.insertCell(12);
        // id="product_${id}"
        cell1.innerHTML = `${id + 1}`;
        cell2.innerHTML =
        `<select id="product_${id}"  onclick="selectT(${id})"  onchange="myFunction(${id})" name="test[]"  class="form-control w-100 mx-5 px-2 select2" >
            <optgroup>
                <option  value=""></option>
                @foreach ($products as $product )
                    <option  value="{{ $product->id }}">{{ $product->name_ar  }}/{{ $product->serial_number  }}</option>
                @endforeach
            </optgroup>
        </select>`;
        
        cell3.innerHTML  = `<input id="dec_product_${id}"     type="text" class="form-control no-cursor w-100"  >`;
        cell4.innerHTML  = `<input id="qun_product_${id}" value="1" onfocusout="result(${id})"    name="test[]" type="text" class="form-control w-100" >
        <span id="errorMessage_${id}" class="error-message">الكمية غير متوافرة</span>`;
        // cell5.innerHTML  = `<input style="width:100%" id="tax_on_product_${id}"     type="text" class="form-control w-100" hiddn >`;
        cell6.innerHTML  = `<input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-control w-100">`;
        cell7.innerHTML  = `<input id="inc_desc_product_${id}"  type="checkbox" class=" value="off" w-100" onclick="result(${id})">`;
        cell8.innerHTML  = `<input id="desc_product_${id}"  onfocusout="result(${id})"   name="test[]" type="text" class="form-control w-100" value="0">`;
        cell9.innerHTML  = `<select id="desc_product_op_${id}" onchange="result(${id})"    class="form-control w-100" > 
                            <optgroup>
                                <option value="0">قيمة</option>
                                <option value="1">%</option>
                            </optgroup>
                        </select>`;
        cell0.innerHTML  = `<input id="price_before_tax_product_${id}"     name="test[]" type="text" class="form-control w-100" readonly>`;
        cell11.innerHTML =
        `<select id="product_tax_${id}"   onchange="result(${id})"   name="test[]"  class="form-control w-50 mx-5 px-2" >
            <optgroup>
                <option  value="">-</option>
                <option value="0">0.0%</option>
                <option value="15">15%</option>
            </optgroup>
        </select>`;
        cell12.innerHTML = `<input id="Tax_value_${id}" value="{{ old('test[]') }}"    name="test[]" type="text" class="form-control w-100 " readonly >`;
        cell13.innerHTML = `<input style="width:100%" id="Total_${id}"     name="test[]" type="text" class="form-control w-100" readonly >`;
        // cell14.innerHTML = `<a class="btn btn-primary" id="remove_${id}" onclick="remove(${id}, this, ${counter})">حذف</a>`;

        Total_value[id] = 0;
        Total_before[id] = 0;
        Total_Tax[id] = 0;
        id += 1
        counter+= 1


    }
    
    
        
    
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
                PriceUnitProduct.value      = data.buy;
                priceBeforeTaxProduct.value = (data.buy).toFixed(2);
                tax_on_product        = data.Tex_Number;
                if (data.Tex_Number == 15) {
                    Tax.selectedIndex           = 2;    
                } else {
                    Tax.selectedIndex           = 1;
                }
                // alert("ddaadas")
                // console.log(data.product_units)
                // append the select box with the uint products
                
                 employeeSelect.append(`<option value="${data.buy}-${data.unit.id}-1">${data.id_unit}</option>`);
                
                //  
                $.each(data.productUnits, function(key, value) {
                    employeeSelect.append(`<option value="${value.price_buy}-${value.id_unit}-${value.counter_of_unit}">${value.unitproduct_unit.name}</option>`);
                });
        
                
                Total.value = (parseFloat(data.buy) + parseFloat(data.buy) * Tax.value / 100).toFixed(2);
                TaxValue.value    = (Math.round((parseFloat(data.buy) * Tax.value / 100) * 100) / 100).toFixed(2);
                Total_value[id] = parseFloat(Total.value);
                Total_Tax[id]   = parseFloat(TaxValue.value);
                Total_before[id] = data.buy;
                getSum();
            })
        });
        $('.select2').select2();

    }
    
    function calcTax(id) {
        Tax              = document.getElementById('product_tax_'+id).value;
        PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        qunProduct       = document.getElementById('qun_product_'+id).value;
        TaxValue         = document.getElementById('Tax_value_'+id);
        Total            = document.getElementById('Total_'+id);
        inttaotal        = document.getElementById('Total_'+id).value;
        TaxValue.value   = ( PriceUnitProduct * qunProduct )  * (Tax / 100);
        Totalwithtax     = document.getElementById('Tax_value_'+id).value;

        Total.value      = parseFloat(inttaotal) + parseFloat(Totalwithtax);
        Total_value[id]  = parseFloat(inttaotal) + parseFloat(Totalwithtax);
        Total_Tax[id]    = ( PriceUnitProduct * qunProduct )  * (Tax / 100);
        getSum();


    }
    function qunpriceproduct (id) {
        Tax              = document.getElementById('product_tax_'+id).value;
        PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        qunProduct       = document.getElementById('qun_product_'+id).value;
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        Total                 = document.getElementById('Total_'+id);
        var tax_on_product   = document.getElementById('tax_on_product_'+id).value;
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id)
        var totalwithIncluded = 0;
        if (checkboxIncluded.checked ) {
            totalwithIncluded = PriceUnitProduct * qunProduct;
            priceuints =  ((PriceUnitProduct * qunProduct) * tax_on_product) / 100 ;
            priceBeforeTaxProduct.value = totalwithIncluded - priceuints;
        } else {

            priceBeforeTaxProduct.value = PriceUnitProduct * qunProduct;
        }
        Totalwithtax     = document.getElementById('Tax_value_'+id).value;
        inttaotal        = document.getElementById('Total_'+id).value;
        Total.value = ( parseFloat(inttaotal) * qunProduct ) + parseFloat(Totalwithtax)  ;

        Total_value[id] = ( parseFloat(inttaotal) * qunProduct ) + parseFloat(Totalwithtax);
        Total_before[id] = PriceUnitProduct * qunProduct;
        getSum();
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

        const inputDateStr      = document.getElementById("Date_start_id").value;
        const endDateInput      = document.getElementById("date_end_id");
        const Date_Groce_Period = document.getElementById("Date_Groce_Period");
        const inputDate = new Date(inputDateStr);

        if(daysSelect.value == 0) {
            endDateInput.value      = inputDateStr
            Date_Groce_Period.value = inputDateStr
        } else {
        
            const selectedDays = parseInt(daysSelect.value);
            inputDate.setDate(inputDate.getDate() + selectedDays + 1);
    
            // get the formatted date string
            const futureDateStr = inputDate.toISOString().slice(0, 10); // get the formatted date string
            endDateInput.value = futureDateStr;
            console.log(futureDateStr); // output: the future date string
            Date_Groce_Period.value = inputDateStr
        }
    });

    function include(id) {
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id)
        var tax_on_product   = document.getElementById('tax_on_product_'+id).value;
        var qunProduct       = document.getElementById('qun_product_'+id).value;
        var PriceUint        = document.getElementById('price_unit_product_'+id).value;
        var TotalWithOutTax  = document.getElementById('price_before_tax_product_'+id);
        var total            = 0;
        var priceuints       = 0;
        if (checkboxIncluded.checked) {
            total = PriceUint * qunProduct;
            priceuints =  ((PriceUint * qunProduct) * tax_on_product) / 100 ;
            TotalWithOutTax.value = total - priceuints;
            // TotalWithOutTax.value = ;
            console.log(priceuints);
        } else {
            TotalWithOutTax.value =  PriceUint * qunProduct;;
        }
    }
    
     function result (id) {
        var isok        = "yes";
        var TotalBefore = document.getElementById('price_before_tax_product_'+id);
        var TotalAfter  = document.getElementById('Total_'+id);
        var TotalIncluded = 0;
         var incinputProduct = document.getElementById("inc_input_product_" + id);
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
             incinputProduct.value = "on"
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  (TotalIncluded + TotalIncluded * Tax / 100).toFixed(2);
            TotalBefore.value   =  TotalIncluded ;
            
        } else {
              incinputProduct.value = "off"
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
         var incinputProduct = document.getElementById("inc_input_product_" + id);
        var qunProduct       = document.getElementById('qun_product_'+id).value;
        var qunProductInput       = document.getElementById('qun_product_'+id);
        var dec_product           = document.getElementById('dec_product_'+id).value;
        var Tax              = document.getElementById('product_tax_'+id).value;
        var op               = document.getElementById('desc_product_op_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        var PriceUnitProductInput = document.getElementById('price_unit_product_'+id);
        // alert(dec_product)
        var price   = dec_product.split("-");
        // console.log(price)
        // alert(dec_product)
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
             incinputProduct.value = "on"
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  Math.round(TotalIncluded + TotalIncluded * Tax / 100);
            TotalBefore.value   =  TotalIncluded ;
            
        } else {
              incinputProduct.value = "off"
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
    
function remove(id, button, counter) {
      var table = document.getElementById("t-body");
        var rows = table.rows;
          // Convert the rows collection to an array
        rowsArray = Array.from(rows);
    //   var row = button.parentNode.childNodes[0]; // Get the parent row of the button
      // Perform any necessary actions before removing the row
      alert(rowsArray.length)
      alert(id % rowsArray.length)
      Total_value[id] = 0;
      Total_before[id] = 0;
      Total_Tax[id] = 0;
      getSum();
    
      // Delete the row from the table
      table.deleteRow(id % rowsArray.length );
    
      // Update the table indexes after removing a row
    //   resetTableIndexes();
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
        $('#Client-select').on('change', function() {
            var ClientId = $(this).val();
            var employeeSelect = $('#ReturnsSalesInvoices-select1');
            // alert("dasdas")
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

                        document.getElementById("info-client-name").innerHTML =  response.name ?? "-";
                        document.getElementById("info-client-phone").innerHTML =  response.number1 ?? "-";
                        document.getElementById("info-client-email").innerHTML =  response.city_1 ?? "-";
                        document.getElementById("info-client-tax").innerHTML =  response.Tex_number ?? "-";

                    }
                });
            }
        });
    });
</script>
<script>
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
      var inputElement = document.getElementById('Client-select');
      // Date_Groce_Period product_$ site-id date_end_id Date_start_id 
      
      var code                      = document.getElementById('code');
      var Date_Groce_Period         = document.getElementById('Date_Groce_Period');
      var Date_start_id             = document.getElementById('Date_start_id');
      var date_end_id               = document.getElementById('date_end_id');
      var site                      = document.getElementById('site-id');
      var oldInputs                 = document.querySelectorAll('input[name="old[]"]') ?? "Empty";
      var state      = "yes";
      var Checkqun   = "yes";
      console.log(oldInputs);
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
          alert("هناك مشكله في الادخال اما الكمية او ان هناك حقل يجب ادخاله")
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
                    <input id="qun_product_${id}" onfocusout="result(${id})"    name="test[]" type="text" class="form-custom my-2" value="1" >
                    <select  id="dec_product_${id}"    onchange="resultUnit(${id})" name="test[]"  class="form-custom my-2" >
                        
                    </select>
                    <span id="errorMessage_${id}" class="error-message">الكمية غير متوافرة</span>
                    <span  id="qunMessage_${id}"   class="qun-message"></span>
                </td>
                <td class="text-center" colspan="1" >
                    <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2" style="width: 120px;">
                </td>
                <td class="text-center" colspan="1" style="width: 30px;">
                    <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                    <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="text" value="off" hidden>
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

