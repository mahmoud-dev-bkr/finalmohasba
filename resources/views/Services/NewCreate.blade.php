@extends('layouts.vertical', ['title' => 'اضافة خدمه'])
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

    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltip-text {
      visibility: hidden;
      width: 120px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%; /* Position the tooltip above the button */
      left: 50%;
      margin-left: -60px; /* Center the tooltip horizontally */
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltip-text {
      visibility: visible;
      opacity: 1;
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
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('sales_invoices.index') }}"> فواتير مبيعات</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i> إنشاء خدمه
                    </li>
                </ul>
            </div>



        </div>
    </section>


        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('sales_invoices.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء خدمه</h4>
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
                <form id="myForm" class="row  pb-4 brdr" action="{{ route('Services.create.post') }}" method="post">
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
                                    <input name="code"type="text" class="form-control  my-2 tab-input" value="Serv {{$count}}"  id="code">
                                    <input name="done" type="text" class="form-control w-75 my-2 tab-input" value="1" id="done" hidden>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="4" >
                                    <h6 class="  my-2 pe-1 input-w-custom"> الفرع<span class="star">*</span></h6>
                                  </td>
                                  <td class="px-2 td-ftora">
                                    <select class="form-select  form-select-lg my-2" name="site_id" id="site-id" >

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
                            <table class="table table-bordered  table-tafasyel" style="width: 100% !important;">

                              <tbody>
                                <tr>
                                  <td colspan="4">
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
                      </div>

                      <div class="row  pb-4 ">
                        <div class="col-md-12">
                          <div class="w-100 my-5 table-responsive-lg responsive-scroll">


                            <br>
                            <br>
                            <table id="add_table" class="table  text-center table-bordered inventary-table" >
                              <thead class="cf">
                                <tr>
                                  <th>#</th>
                                  <th class="text-center">الخدمه</th>
                                  <th class="text-center">سعر الوحدة </th>
                                  <th class="text-center">شامل؟</th>
                                  <th class="text-center">الاجمالي قبل الضريبة </th>
                                  <th class="text-center">الضريبة %</th>
                                  <th class="text-center">قيمة الضريبة </th>
                                  <th class="text-center">القيمة </th>
                                  <th class="text-center"></th>
                                </tr>
                              </thead>
                              <tbody id="t-body">
                              </tbody>
                            </table>
                            <a class="btn btn-primary " id="add_row">اضافة المزيد</a>
                          </div>
                        </div>
                      </div>


                    <div class="col-md-8 my-3"></div>
                    <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">
                      <div class="text-primary">
                          <h2 style="display:none" id="credit_limit_label"><span>حد الأتمان</span></h2>
                          <h2><span>الاجمالي قبل الضريبة</span></h2>
                          <h2><span>قيمة الضريبة</span></h2>
                          <h2><span>المجموع</span></h2>
                          <h2><span>الخصم المسموح به</span></h2>
                          <h2><span>الإجمالي المستحق</span></h2>

                      </div>
                      <div>
                          <h2 style="display:none"  id="credit_limit_value"><span class="font-size-22 line-height-55">0.00</span></h2>
                          <h2 ><span id="total_before">0.00</span> </h2>
                          <h2><span  id="tax_value">0.00</span> </h2>
                          <h2><span  id="total_after">0.00</span> </h2>
                          <h2><span  id=""><input type="text" id="descount_with_premotion" onfocusout="getSum()" name="descount_with_premotion" style="width:120px" class="form-custom my-2" value="0.00"></span> </h2>
                          <h2><span  id="final_total_h">0.00</span> </h2>

                          <input type="text" name="total_with_tax" id="total_with_tax" hidden>
                          <input type="text" name="total"          id="total" hidden>
                          <input type="text" name="final_total"    id="final_total" hidden>
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
                        <button class="btn btn-dark mx-2"> <a href="{{ route('sales_invoices.index') }}" class="text-light">رجوع</a></button>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

<script>

      var id2 = 0;
      var counter2 = 0;
      $('#add_row2').click(function() {
          // Add row
          var row = '';
          row += `
          <tr>
                <td class="text-center" colspan="1">
                    <select name="test[]" class="form-select my-2 form-select-lg " style="display: initial; width: 90%; height: 40px;">
                        <optgroup>


                        </optgroup>
                    </select>
                </td>
                <td class="text-center"  style="width: 30px;">
                    =
                </td>
                <td class="text-center" style="width: 30px;">
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <select name="" class="form-select my-2 form-select-lg" style="display: initial; width: 90%; height: 40px;">
                        <optgroup>


                        </optgroup>
                    </select>
                </td>
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <input name="test[]"  class="form-check-input mt-3" type="checkbox" >
                </td>
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <input  class="form-check-input mt-3" type="checkbox" >
                </td>

                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;" >
                </td>
                <td class="text-center" colspan="1" >
                    <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
                </td>

          </tr>`;

          $("#t-body2").append(row);


          var valueToSet = $('#set_Unit option:selected').text();
          $('.units').each(function(){
            if ($(this).text() === valueToSet) {
              $(this).prop('selected', true);
            }
          });


        //   Total_value[id] = 0;
        //   Total_before[id] = 0;
        //   Total_Tax[id] = 0;
        //   getSum();
          id2 += 1;

        });

        $("#t-body2").on("click", ".delete_row", function() {
          var deleteId = $(this).data("id");
          $(this).closest('tr').remove();
        });


    function genSerial_number() {

        document.getElementById("serial_number").value = Math.random().toString().slice(2, 14);

    }

    function change_unit() {
        var valueToSet = $('#set_Unit option:selected').text();
          $('.units').each(function(){
            if ($(this).text() === valueToSet) {
              $(this).prop('selected', true);
            }
          });
    }

    function submit_unit() {
        var description = document.getElementById('description').value
        var set_Unit      = $('#set_Unit');
        var set_Unitvalue = $('#set_Unit').val();
        alert(set_Unitvalue)
        var name = document.getElementById('name').value
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('sub.Ajax.unit') }}",
            data: {
                description: description,
                _token: '{{ csrf_token() }}',
                name: name,

            },
            success: function (data) {
                $('#exampleModal').modal('hide');
                set_Unit.empty();
                $.each(data, function(key, value) {
                    set_Unit.append('<option value="' + value.id + '">' + value.name + '</option>');
                });

            set_Unit.val(set_Unitvalue);

            }
        });
    }

    function submit_des() {
        var description = document.getElementById('description_item').value
        var name = document.getElementById('name_item').value
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('sub.Ajax.item') }}",
            data: {
                description: description,
                _token: '{{ csrf_token() }}',
                name: name,

            },
            success: function (data) {
                $('#exampleModal2').modal('hide');
                alert("تم الحفظ");
                description = ""
                name = ""

            }
        });
    }

    function myFunction(id) {
        var x = document.getElementById("product_"+id).value;

    }
    function result(id) {
        var price      = document.getElementById("price_"+id).value;
        var Inputprice = document.getElementById("price_"+id);
        var ids   = document.getElementById("ids_"+id).value;
        var inputIds =  document.getElementById("result_"+id);

        if (Inputprice.value.trim() === '') {
            Inputprice.focus();
        }
        inputIds.value = "";
        inputIds.value = ids  + "-" + price
    }
    // + "-" + unit
    function resultmain(id) {
        var price = document.getElementById("price_main_"+id).value;
        var Inputprice = document.getElementById("price_main_"+id);
        var ids   = document.getElementById("ids_main_"+id).value;
        var unit   = document.getElementById("set_Unit").value;
        var inputIds =  document.getElementById("result_main_"+id);

        if (Inputprice.value.trim() === '') {
            Inputprice.focus();
        }
        inputIds.value = "";
        inputIds.value = ids  + "-" + price
    }

</script>

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
    var Errors    = [];
    // var Checkqun      = "yes";


    const formElement   = document.getElementById('myForm');
    const submitButton  = document.getElementById('submitButton');
    // const resubmit      = document.getElementById('resubmit');






    document.addEventListener("DOMContentLoaded", function() {

        counter += 1
          var row = '';
          row += `
          <tr>
              <th class="text-center p-2">${counter}</th>

                <td class="text-center p-1">
                  <input id="produc_name_${id}" name="test[]" type="text" class="form-control my-2 tab-input" placeholder="اكتب الخدمه" >
                </td>
                <td class="text-center">
                    <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2 tab-input">
                </td>
                <td class="text-center">
                    <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                    <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="text" value="off" hidden>
                </td>
                <td class="text-center" >
                    <input id="price_before_tax_product_${id}"   name="test[]" type="text" class="form-custom-2 no-cursor my-2 tab-input" readonly>
                </td>
                <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg tab-input" style="display: initial;height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>
                        <option  value="0">0</option>
                        <option  value="15">15</option>
                    </select>
                </td>
                <td class="text-center">
                    <input id="Tax_value_${id}" name="test[]" type="text" class="form-custom-2 no-cursor my-2 tab-input" readonly>
                </td>
                <td class="text-center" >
                    <input type="text" class="form-custom-2 no-cursor my-2 tab-input"  name="test[]" id="Total_${id}" readonly>
                </td>
                <td class="text-center">

                </td>
          </tr>`;



          $("#t-body").append(row);

         $('#product_'+id).selectize({
            create: false, // Prevent the creation of new items
            sortField: 'text', // Sort by the displayed text
            placeholder: 'Search for products',
            // Additional configuration options can be set here
        });


          Total_value[id] = 0;
          Total_before[id] = 0;
          Total_Tax[id] = 0;
          getSum();
          id += 1;


    });


    function processItem(data,id) {
      var errorMessage = document.getElementById("errorMessage_" + id);
      var qunMessage = document.getElementById("qunMessage_" + id);
      var dec_product = document.getElementById("dec_product_" + id).value;
      var site = document.getElementById('site-id');
      var product_id = document.getElementById('product_'+id).value;
      var qunProduct = document.getElementById('qun_product_'+id).value;
      var price = dec_product.split("-");


        var qunWithUnit =  data.qun / price[2];
        // qunMessage.textContent = "Qun = " + qunWithUnit;
        console.log(qunWithUnit)
       if (data.qun == 0 || qunProduct > qunWithUnit) {
          errorMessage.classList.add('show');
          qunMessage.textContent = "Qun = " + qunWithUnit;
          Errors.push(1); // Add 1 to indicate an error
        } else {
          errorMessage.classList.remove('show');
        //   qunMessage.classList.add('show');
          qunMessage.textContent = "Qun = " + qunWithUnit;
          Errors.push(0); // Add 0 to indicate no error
        }

    }


    function updateprocessItem(data,id) {
      var errorMessage = document.getElementById("errorMessage_" + id);
      var qunMessage = document.getElementById("qunMessage_" + id);
      var dec_product = document.getElementById("dec_product_" + id).value;
      var site = document.getElementById('site-id');
      var product_id = document.getElementById('product_'+id).value;
      var qunProduct = document.getElementById('qun_product_'+id).value;
      var price = dec_product.split("-");
        var qunWithUnit =  data.qun / price[2];
        console.log(dec_product);
        qunMessage.textContent = "Qun = " + qunWithUnit;
       if (data.qun == 0 || qunProduct > qunWithUnit) {
          errorMessage.classList.add('show');
          Errors[id] = 1; // Add 1 to indicate an error
        } else {
          errorMessage.classList.remove('show');
          Errors[id] = 0; // Add 0 to indicate no error
        }
    }

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
      }
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
        var price            = 0;
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



                // product_des.value           = ;

                tax_on_product        = data.Tex_Number;
                if (data.Tex_Number == 15) {
                    Tax.selectedIndex           = 2;
                } else {
                    Tax.selectedIndex           = 1;
                }
                // alert("ddaadas")
                // console.log(data.product_units)
                // append the select box with the uint products
                if (site.value == 10) {
                    price = data.sel;
                    employeeSelect.append(`<option value="${data.sel}-${data.unit.id}-1">${data.id_unit}</option>`);
                    // console.log(data.productUnits)
                    //
                    $.each(data.productUnits, function(key, value) {
                        employeeSelect.append(`<option value="${value.price_sell}-${value.id_unit}-${value.counter_of_unit}">${value.unitproduct_unit.name}</option>`);
                    });

                } else {
                    // alert("sub")
                    console.log(data.prices[0])
                    price = data.prices[0].price
                    $.each(data.prices, function(key, value) {

                        employeeSelect.append(`<option value="${value.price}-${value.unit.id}-${value.counter_of_unit}">${value.unit.name}</option>`);
                    });
                }
                updateprocessItem(data,id)
                PriceUnitProduct.value      = price;
                priceBeforeTaxProduct.value = (price).toFixed(2);
                Total.value = (parseFloat(price) + parseFloat(price) * Tax.value / 100).toFixed(2);
                TaxValue.value    = (Math.round((parseFloat(price) * Tax.value / 100) * 100) / 100).toFixed(2);
                Total_value[id] = parseFloat(Total.value);
                Total_Tax[id]   = parseFloat(TaxValue.value);
                Total_before[id] = price;
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
        var descount_with_premotion =  document.getElementById("descount_with_premotion").value;
        var final_total_f           = sumVal.toFixed(2) - descount_with_premotion;
        document.getElementById("total_after").innerHTML =  sumVal.toFixed(2);
        document.getElementById("tax_value").innerHTML =  sumValTax.toFixed(2);
        document.getElementById("total_before").innerHTML =  sumValBefore.toFixed(2);
        document.getElementById("final_total_h").innerHTML =  final_total_f.toFixed(2) ;

        document.getElementById('total_with_tax').value   = sumValBefore.toFixed(2);
        document.getElementById('total').value            = sumVal.toFixed(2);
        document.getElementById('final_total').value    = final_total_f.toFixed(2);
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
        var site                      = document.getElementById('site-id');
        var TotalAfter  = document.getElementById('Total_'+id);
        var TotalIncluded = 0;
        var incinputProduct = document.getElementById("inc_input_product_" + id);

        var Tax              = document.getElementById('product_tax_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        var PriceUnitProductInput = document.getElementById('price_unit_product_'+id);
        var errorMessage = document.getElementById('errorMessage_'+id);

        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var TaxValue         = document.getElementById('Tax_value_'+id);

        var DescProductOp    = 0;
        var ToTax            = 0;
        var qunWithUnit      = 0;


        // });
        TotalBefore.value = parseFloat(parseFloat(1) * PriceUnitProduct).toFixed(2) ;





        if (checkboxIncluded.checked) {

            ToTax = parseFloat(Tax) + 100; // 200
            incinputProduct.value = "on"
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProductOp;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  (TotalIncluded + TotalIncluded * Tax / 100).toFixed(2);
            TotalBefore.value   =  TotalIncluded ;

        } else {
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
           var errorMessage = document.getElementById('errorMessage_'+id);
        var site                      = document.getElementById('site-id');
        var   product_id  = document.getElementById('product_'+id).value;
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


           var ProductURL = "/dashboard/getInfoAndQunProduct?product_id="+product_id+"&site_id="+site.value;
            $.get(ProductURL, function (data) {
                updateprocessItem(data,id)
            })

        TaxValue.value    = Math.round((parseFloat(TotalBefore.value) * Tax / 100) * 100) / 100;

         Total_value[id]  = parseFloat( TotalAfter.value);
         Total_Tax[id]    = parseFloat( TaxValue.value) ;
         Total_before[id] = parseFloat( TotalBefore.value) ;
        getSum();



    }

function checkinStore() {
  var table = document.getElementById("t-body");
  for (var i = 0; i < table.rows.length; i++) {
    var qunInput = table.rows[i].querySelector("input[id^='qun_product_']");

    checked(i);
  }
}

function checked(index) {
  var table = document.getElementById("t-body");
  var site = document.getElementById('site-id');
  var payment_method = document.getElementById('payment_method').value;
  var qunInput = table.rows[index].querySelector("input[id^='qun_product_']");
  var dec_product = table.rows[index].querySelector("select[id^='dec_product_']");
  var productInput = table.rows[index].querySelector("select[id^='product_']") ;

  var iderror      = 0;
  if (index > 0) {
      var dataId        = table.rows[index].querySelector(".delete_row");
      iderror           = dataId.getAttribute('data-id');
  }
  var product_id = productInput.value ;
  var price = dec_product.value.split("-");
  var ProductURL = "/dashboard/getInfoAndQunProduct?product_id=" + product_id   + "&site_id=" + site.value+ "&payment_method="+payment_method;
  var errorMessage = table.rows[index].querySelector("span[id^='errorMessage_']");
  var qunMessage = table.rows[index].querySelector("span[id^='qunMessage_']");

  $.get(ProductURL, function(data) {
    var qunWithUnit = data.qun / price[2];
    QunChek(data, qunInput, qunWithUnit, errorMessage, qunMessage, index, iderror, site)

  });
}

function QunChek(data, qunInput, qunWithUnit, errorMessage, qunMessage, index, iderror, site){
    qunMessage.textContent = "Qun = " + qunWithUnit;
    var employeeSelect = $('#dec_product_'+iderror);
    var client_select = $('#Client-select');
    PriceUnitProduct = document.getElementById('price_unit_product_'+iderror);
    var price            = 0;
    employeeSelect.empty();
    client_select.empty();
    // alert(iderror);
    if(index == 0) {
        if (data.qun == 0 || qunInput.value > qunWithUnit) {
          errorMessage.classList.add('show');
          console.log("error");
          Errors[iderror] = 1
        } else {
          errorMessage.classList.remove('show');
          console.log("not error");
          Errors[iderror] = 0
        }
    } else {
        if (data.qun == 0 || qunInput.value > qunWithUnit) {
          errorMessage.classList.add('show');
          console.log("error");
          Errors[iderror] = 1
        } else {
          errorMessage.classList.remove('show');
          console.log("not error");
          Errors[iderror] = 0
        }
    }
    if (site.value == 10) {
        price = data.sel;
        employeeSelect.append(`<option value="${data.sel}-${data.unit.id}-1">${data.id_unit}</option>`);
        // console.log(data.productUnits)
        //
        $.each(data.productUnits, function(key, value) {
            employeeSelect.append(`<option value="${value.price_sell}-${value.id_unit}-${value.counter_of_unit}">${value.unitproduct_unit.name}</option>`);
        });

    } else {
        // alert("sub")
        console.log(data.prices[0])
        price = data.prices[0].price
        $.each(data.prices, function(key, value) {

            employeeSelect.append(`<option value="${value.price}-${value.unit.id}-${value.counter_of_unit}">${value.unit.name}</option>`);
        });
    }
    client_select.append(`<option value="">اختار المورد</option>`);
    $.each(data.client, function(key, value) {
        client_select.append(`<option value="${value.id}">${value.name}</option>`);
    });
    PriceUnitProduct.value      = price;
    result(iderror)
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
        $(document).ready(function() {
            $('#product_${id}').select2({
                placeholder: 'Search for products',
                width: '100%', // Adjust the width as needed
                // Additional configuration options can be set here
            });
        });
</script>
<script>
    $(document).ready(function() {
        // When the branch select field changes
        $('#Client-select').on('change', function() {
            var ClientId = $(this).val();
            var employeeSelect = $('#ReturnsSalesInvoices-select1');
            // alert("dasdas")
            var creditLimitAmount = document.getElementById("credit_limit_value");
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
                        document.getElementById("info-client-phone").innerHTML =  response.phon ?? "-";
                        document.getElementById("info-client-email").innerHTML =  response.city_1 ?? "-";
                        document.getElementById("info-client-tax").innerHTML =  response.Tex_Number ?? "-";

                        creditLimitAmount.textContent = response.credit_limit ;
                    }
                });
            }
        });
    });

    function showCreditLimit(){
        var payment_method = document.getElementById("payment_method");
      // Get the selected option
      var selectedOption = payment_method.options[payment_method.selectedIndex];
      // Get the elements to show/hide
      var creditLimitLabel = document.getElementById("credit_limit_label");
      var creditLimitAmount = document.getElementById("credit_limit_value");
      if (selectedOption.value === "credit") {
            // If "Credit" is selected, show the elements
            creditLimitLabel.style.display = "block";
            creditLimitAmount.style.display = "block";
      }else{
            creditLimitLabel.style.display = "none";
            creditLimitAmount.style.display = "none";
      }
    }

</script>
<script>
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
      var inputElement = document.getElementById('Client-select');
      var code                      = document.getElementById('code');
      var Date_Groce_Period         = document.getElementById('Date_Groce_Period');
      var Date_start_id             = document.getElementById('Date_start_id');
      var date_end_id               = document.getElementById('date_end_id');
      var site                      = document.getElementById('site-id');
      var oldInputs                 = document.querySelectorAll('input[name="old[]"]') ?? "Empty";
      var state      = "yes";
      var Checkqun   = "yes";

      var credit_limit_value = document.getElementById('credit_limit_value').textContent;
      var final_total_h = document.getElementById('final_total_h').textContent;
      var payment_method                      = document.getElementById('payment_method').value;
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


  });


  $('#add_row').click(function() {
          // Add row
          counter += 1
          var row = '';
          row += `
          <tr>
rz 9            <th class="text-center p-2">${counter}</th>
            <td class="text-center p-1">
              <input id="produc_name_${id}" name="test[]" type="text" class="form-control my-2 tab-input" >
            </td>
              <td class="text-center">
                  <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2">
              </td>
              <td class="text-center">
                  <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                  <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="text" value="off" hidden>
              </td>
              <td class="text-center">
                  <input id="price_before_tax_product_${id}"   name="test[]" type="text" class="form-custom-2 no-cursor my-2" readonly>
              </td>
              <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg tab-input" style="display: initial;height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>
                        <option  value="0">0</option>
                        <option  value="15">15</option>
                    </select>
                </td>
              <td class="text-center">
                  <input id="Tax_value_${id}" name="test[]" type="text" class="form-custom-2 no-cursor my-2" readonly>
              </td>
              <td class="text-center">
                  <input type="text" class="form-custom-2 no-cursor my-2"  name="test[]" id="Total_${id}" readonly>
              </td>
              <td class="text-center">
                <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
              </td>
          </tr>`;


          $("#t-body").append(row);
          $('#product_'+id).selectize({
                create: false, // Prevent the creation of new items
                sortField: 'text', // Sort by the displayed text
                // placeholder: 'Search for products',
                items: [1],
                // Additional configuration options can be set here
          });
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
          Errors[deleteId]  = 0;
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


    document.addEventListener('keydown', function(event) {
      // Check if Ctrl and Shift keys are pressed along with the Down arrow key
      if (event.ctrlKey && event.shiftKey && event.key === 'ArrowDown') {


       // Add row
          counter += 1
          var row = '';
          row += `
          <tr>
            <th class="text-center p-2">${counter}</th>
            <td class="text-center p-1">
              <input id="produc_name_${id}" name="test[]" type="text" class="form-control my-2 tab-input" >
            </td>
              <td class="text-center">
                  <input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-custom-2 my-2">
              </td>
              <td class="text-center">
                  <input id="inc_desc_product_${id}" onclick="result(${id})" class="form-check-input mt-3" type="checkbox" value="" >
                  <input id="inc_input_product_${id}"  name="test[]" class="form-check-input mt-3" type="text" value="off" hidden>
              </td>
              <td class="text-center">
                  <input id="price_before_tax_product_${id}"   name="test[]" type="text" class="form-custom-2 no-cursor my-2" readonly>
              </td>
              <td class="text-center" colspan="1" style="width: 90px;">
                    <select class="form-select my-2 form-select-lg tab-input" style="display: initial;height: 40px;"  id="product_tax_${id}" onchange="result(${id})"   name="test[]">
                        <option  value="">-</option>
                        <option  value="0">0</option>
                        <option  value="15">15</option>
                    </select>
                </td>
              <td class="text-center">
                  <input id="Tax_value_${id}" name="test[]" type="text" class="form-custom-2 no-cursor my-2" readonly>
              </td>
              <td class="text-center">
                  <input type="text" class="form-custom-2 no-cursor my-2"  name="test[]" id="Total_${id}" readonly>
              </td>
              <td class="text-center">
                <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
              </td>
          </tr>`;


          $("#t-body").append(row);
          $('#product_'+id).selectize({
                create: false, // Prevent the creation of new items
                sortField: 'text', // Sort by the displayed text
                placeholder: 'Search for products',
                items: [1],
                // Additional configuration options can be set here
          });
          Total_value[id] = 0;
          Total_before[id] = 0;
          Total_Tax[id] = 0;
          getSum();
          id += 1;



      }
    });

   document.addEventListener('keydown', function(event) {
      // Check if Ctrl and Shift keys are pressed along with the Up arrow key
      if (event.ctrlKey && event.shiftKey && event.key === 'ArrowUp') {
        // Your custom action here
        $("tbody tr:last").remove();
        counter -= 1;
        id -= 1; // Assuming you want to decrement the id as well
        Total_value.pop();
        Total_before.pop();
        Errors.pop();
        Total_Tax.pop();
        getSum();
      }
    });




</script>
@endsection
