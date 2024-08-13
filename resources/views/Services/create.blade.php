@extends('layouts.vertical', ['title' => 'اضافة فاتورة مبيعات'])
@section('content')

<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('sales_invoices.index') }}"> فاتورة مبيعات</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i> إنشاء فاتورة مبيعات 
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('sales_invoices.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء فاتورة مبيعات</h4>
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
                <form id="myForm" class="row  pb-4 brdr" action="{{ route('sales_invoices.create.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <!--<div class="form my-5">-->

                        <!--    <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> المرجع</label><input name="code""  type="text" class="form-control w-75 my-2" value="INV {{$count}}">-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                        <!--            <label class="mt-3 ml-5">العميل</label>-->
                        <!--            <select  class="form-control w-75" name="id_supplers" id="Client-select1">-->
                        <!--                <optgroup>-->
                        <!--                    @foreach ($Clients as $Supplier )-->
                        <!--                        <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>-->
                        <!--                    @endforeach-->
                        <!--                </optgroup>-->
                        <!--            </select>-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> تاريخ الإصدار</label><input id="Date_start_id" name="Date_start" type="date" class="form-control w-75 my-2"  value="{{ old('my-date', date('Y-m-d')) }}">-->
                        <!--        </div>-->


                        <!--        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                        <!--        <label class="mt-3 ml-5">شروط الدفع</label>-->
                        <!--        <select  class="form-control w-75" name="payment_terms" id="day_date">-->
                        <!--            <optgroup>-->
                        <!--                <option value="0">نفس يوم الاصدار</option>-->
                        <!--                <option value="7">بعد 7 يوم</option>-->
                        <!--                <option value="10">بعد 10 يوم</option>-->
                        <!--                <option value="30">بعد 30 يوم</option>-->
                        <!--                <option value="60">بعد 60 يوم</option>-->
                        <!--                <option value="90">بعد 90 يوم</option>-->
                        <!--            </optgroup>-->
                        <!--        </select>-->
                        <!--        </div>-->





                        <!--    <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> تاريخ الاستحقاق </label><input id="date_end_id" name="Date_end" type="date"-->
                        <!--            class="form-control w-75 my-2"  value="{{ old('my-date', date('Y-m-d')) }}">-->
                        <!--    </div>-->



                        <!--    <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> تاريخ التوريد </label><input type="date" name="Date_Groce_Period"-->
                        <!--            class="form-control w-75 my-2" value="{{ old('my-date', date('Y-m-d')) }}">-->
                        <!--    </div>-->



                        <!--</div>-->
                        <div class="form my-5">
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع*</label>
                                <input name="code" type="text" class="form-control w-75 my-2" value="INV {{$count}}" id="code">
                                <input name="done" type="text" class="form-control w-75 my-2" value="1" id="done" hidden>
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الوصف</label>
                                <select class="form-control w-75" name="Note" id="Client-select1">
                                    <optgroup>
                                        <option value="نقدي">نقدي</option>
                                        <option value="اجله">اجله</option>
                                    </optgroup>
                                </select>
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">العميل*</label>
                                <select class="form-control w-75" name="id_supplers" id="Client-select1">
                                    <optgroup>
                                        <option value="">اختار عميل</option>
                                        @foreach ($Clients as $Supplier)
                                        <option value="{{ $Supplier->id }}" {{ old('id_supplers') == $Supplier->id ? 'selected' : '' }}>
                                            {{ $Supplier->name }}
                                        </option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار*</label>
                                <input id="Date_start_id" name="Date_start" type="date" class="form-control w-75 my-2"
                                    value="{{ old('Date_start', date('Y-m-d')) }}">
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">شروط الدفع</label>
                                <select class="form-control w-75" name="payment_terms" id="day_date">
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
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الاستحقاق* </label>
                                <input id="date_end_id" name="Date_end" type="date" class="form-control w-75 my-2"
                                    value="{{ old('Date_end', date('Y-m-d')) }}">
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ التوريد* </label>
                                <input type="date" name="Date_Groce_Period" class="form-control w-75 my-2"
                                    value="{{ old('Date_Groce_Period', date('Y-m-d')) }}" id="Date_Groce_Period">
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">*الموقع</label>
                                <select  class="form-control w-75" name="site_id" id="site-id">
                                    <optgroup>
                                        
                                        @foreach ($sites as $site )
                                            <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>

                        </div>



                    </div>

                    <div class="col-md-6 mt-5 ">

                        <div class="mb-3">
                            <div class="sub-head">
                                <h5 class="mx-4"> تفاصيل بيانات العميل </h5>
                            </div>

                            <div class="fatora d-flex justify-content-around">

                                <div>
                                    <h5>الاسم</h5>
                                    <h5>الهاتف</h5>
                                    <h5>العنوان</h5>
                                    <h5>الرقم الضريبي</h5>
                                </div>

                                <div class="text-secondary">
                                    <h5 id="info-client-name">-</h5>
                                    <h5 id="info-client-phone">-</h5>
                                    <h5 id="info-client-email">-</h5>
                                    <h5 id="info-client-tax">-</h5>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="responsive-scroll">
                        <table class="table text-center">
                            <thead class="table-head" id="products">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">المنتج</th>
                                    <!--<th scope="col">الوحده </th>-->
                                    <th scope="col" colspan="2">الكمية </th>
                                    <!--<th scope="col"> الضريبة المضافة علي المنتج % </th>-->
                                    <th scope="col">سعر الوحدة </th>
                                    <th scope="col">شامل؟</th>
                                    <th scope="col" colspan="2">الخصم</th>
                                    <th scope="col">الاجمالي قبل الضريبة </th>
                                    <th scope="col">الضريبة %</th>
                                    <th scope="col">قيمة الضريبة </th>
                                    <th scope="col">القيمة </th>
                                    <!--<th scope="col"> </th>-->

                                </tr>
                            </thead>
                            <tbody class="text-center" id="t-body">

                            </tbody>
                        </table>
                        <a class="btn btn-primary" onclick="addCode()">اضافةالمزيد</a>
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
                        <button
                            class="btn btn-dark re-submit">حفظ
                            كمسودة</button>

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
    
    
    const formElement = document.getElementById('myForm');
    const submitButton = document.getElementById('submitButton');
  
  
    
    
    
    
    document.addEventListener("DOMContentLoaded", function() {
        
        addCode();
        
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
        
        cell3.innerHTML  = `<input id="dec_product_${id}"     type="text" class="form-control w-100" >`;
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
        PriceUnitProduct = document.getElementById('price_unit_product_'+id);
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        Tax              = document.getElementById('product_tax_'+id);
        tax_on_product   = 0;
    var errorMessage = document.getElementById('errorMessage_'+id);
        qunProduct       = document.getElementById('qun_product_'+id);
        TaxValue         = document.getElementById('Tax_value_'+id);
        Total                 = document.getElementById('Total_'+id);
        var site                      = document.getElementById('site-id');
          if (site.value.trim() === '') {
            alert("لا يوجد كمية متوفرة لهذا المنتج")
            // errorMessage.classList.add('show');
            // Checkqun = "no";
          }   
          
        $(document).ready(function () {
            // alert('dadas');
            var ProductURL = "/dashboard/getInfoAndQunProduct?product_id="+product_id+"&site_id="+site.value;
            $.get(ProductURL, function (data) {
                if(data.qun == 0 || qunProduct.value > data.qun) {
                    // alert("لا يوجد كمية متوفرة لهذا المنتج")
                    errorMessage.classList.add('show');
                    // Checkqun = "no";
                } else {
                     errorMessage.classList.remove('show');
                    
                }
                product_des.value           = data.id_unit;
                PriceUnitProduct.value      = data.sel;
                priceBeforeTaxProduct.value = data.sel;
                tax_on_product        = data.Tex_Number;
                if (data.Tex_Number == 15) {
                    Tax.selectedIndex           = 2;    
                } else {
                    Tax.selectedIndex           = 1;
                }
                
                Total.value = (parseFloat(data.sel) + parseFloat(data.sel) * Tax.value / 100);
                TaxValue.value    = Math.round((parseFloat(data.sel) * Tax.value / 100) * 100) / 100;
                Total_value[id] = parseFloat(Total.value);
                Total_Tax[id]   = parseFloat(TaxValue.value);
                Total_before[id] = data.sel;
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
        document.getElementById("total_after").innerHTML =  sumVal;
        document.getElementById("tax_value").innerHTML =  sumValTax;
        document.getElementById("total_before").innerHTML =  sumValBefore;

        document.getElementById('total_with_tax').value   = sumValBefore;
        document.getElementById('total').value            = sumVal;
        document.getElementById('total_tax_value').value  = sumValTax;
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
        var TotalBefore = document.getElementById('price_before_tax_product_'+id);
        var TotalAfter  = document.getElementById('Total_'+id);
        var TotalIncluded = 0;
        var qunProduct       = document.getElementById('qun_product_'+id).value;
        var qunProductInput       = document.getElementById('qun_product_'+id);
        // var tax_on_product   = document.getElementById('tax_on_product_'+id).value;
        var Tax              = document.getElementById('product_tax_'+id).value;
        var op               = document.getElementById('desc_product_op_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        // var                = document.getElementById('desc_product_op_'+id).value;
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var TaxValue         = document.getElementById('Tax_value_'+id);
        var DescProduct      = document.getElementById('desc_product_'+id).value;
        var DescProductInput      = document.getElementById('desc_product_'+id);
        var DescProductOp    = 0;
        var ToTax            = 0;
        TotalBefore.value = parseFloat(parseFloat(qunProduct) * PriceUnitProduct).toFixed(2) ;
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
        $('#Client-select1').on('change', function() {
            var ClientId = $(this).val();
            var employeeSelect = $('#ReturnsSalesInvoices-select1');

            // Clear the previous employee options
            employeeSelect.empty();

            // Add the default option
            employeeSelect.append('<option value="all">اختار الفاتورة الخاصه بهذا العميل</option>');

            // If a branch is selected
            if (ClientId) {
                
                $.ajax({
                    url: '/dashboard/client/get/info', // Replace with the actual endpoint URL that retrieves employees based on a branch ID
                    type: 'GET',
                    data: { client_id: ClientId },
                    success: function(response) {
                        // Add the retrieved employees to the employee select field

                        document.getElementById("info-client-name").innerHTML =  response.name ?? "-";
                        document.getElementById("info-client-phone").innerHTML =  response.phon ?? "-";
                        document.getElementById("info-client-email").innerHTML =  response.city_1 ?? "-";
                        document.getElementById("info-client-tax").innerHTML =  response.Tex_Number ?? "-";

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
    
        
      var table = document.getElementById("t-body");
      var rows = table.getElementsByTagName("tr");
    
      for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        console.log(row)
        
        var productIdInput = row.querySelector("select[name='test[]']");
        if (productIdInput.value.trim() === "" || productIdInput.value.trim() === null) {
          productIdInput.classList.add("error-border");
          state = "no"
        } else {
            productIdInput.classList.remove("error-border");
        }
          
      }
    
    
      if (state == "yes" && Checkqun == "yes") {
          formElement.submit();
      } else {
          alert("يجب ادخال جميع الحقول")
      }
        
    // Perform any additional actions or validation if needed
    
    // Submit the form programmatically
    
  });
</script>
@endsection
