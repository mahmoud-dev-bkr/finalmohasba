@extends('layouts.vertical', ['title' => 'اضافة فاتورة مبيعات'])
@section('content')

<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> فاتورة مبيعات</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> إنشاء فاتورة مبيعات </a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء فاتورة مبيعات</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <form action="{{ route('sales_invoices.create.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input name="code" type="text" class="form-control w-75 my-2" value="INV {{$count}}">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">العميل</label>
                                    <select  class="form-control w-75" name="id_supplers" id="">
                                        <optgroup>
                                            @foreach ($Clients as $Supplier )
                                                <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input id="Date_start_id" name="Date_start" type="date" class="form-control w-75 my-2"  value="{{ old('my-date', date('Y-m-d')) }}">
                                </div>


                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">شروط الدفع</label>
                                <select  class="form-control w-75" name="payment_terms" id="day_date">
                                    <optgroup>
                                        <option value="0">نفس يوم الاصدار</option>
                                        <option value="7">بعد 7 يوم</option>
                                        <option value="10">بعد 10 يوم</option>
                                        <option value="30">بعد 30 يوم</option>
                                        <option value="60">بعد 60 يوم</option>
                                        <option value="90">بعد 90 يوم</option>
                                    </optgroup>
                                </select>
                                </div>





                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الاستحقاق </label><input id="date_end_id" name="Date_end" type="date"
                                    class="form-control w-75 my-2"  value="{{ old('my-date', date('Y-m-d')) }}">
                            </div>



                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ التوريد </label><input type="date" name="Date_Groce_Period"
                                    class="form-control w-75 my-2" value="{{ old('my-date', date('Y-m-d')) }}">
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
                                    <h5>البريد الإلكتروني</h5>
                                    <h5>الرقم الضريبي</h5>
                                </div>

                                <div class="text-secondary">
                                    <h5>احمد</h5>
                                    <h5>01112345125</h5>
                                    <h5> ahmed123@gmail.com</h5>
                                    <h5> 5504</h5>
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
                                    <th scope="col">الوصف </th>
                                    <th scope="col">الكمية </th>
                                    <th scope="col"> الضريبة المضافة علي المنتج % </th>
                                    <th scope="col">سعر الوحدة </th>
                                    <th scope="col">شامل؟</th>
                                    <th scope="col" colspan="2">الخصم</th>
                                    <th scope="col">الاجمالي قبل الضريبة </th>
                                    <th scope="col">الضريبة %</th>
                                    <th scope="col">قيمة الضريبة </th>
                                    <th scope="col">القيمة </th>

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
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate
                                        the <code>.accordion-flush</code> class. This is the first item's accordion body.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        ملاحظات
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate
                                        the <code>.accordion-flush</code> class. This is the second item's accordion body.
                                        Let's imagine
                                        this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        السندات
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class="form my-5">

                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5"> رقم المرجع</label><input type="text"
                                                    class="form-control w-75 my-2">
                                            </div>

                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">الجهة</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value=""> 2</option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">الحساب</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value="">2 </option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">النوع</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value=""> 2</option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5">الوصف</label><input type="text"
                                                    class="form-control w-75 my-2">
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5"> التاريخ</label><input type="date"
                                                    class="form-control w-75 my-2">
                                            </div>



                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5">تخصيص السند تلقائيًا حسب أقدمية
                                                    الفواتير</label><input type="checkbox" class=" m-auto my-2">

                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        المرفقات
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12 add-sub">
                                            <h5 class="text-primary">المرفقات</h5>

                                            <div class="d-flex align-content-center justify-content-center text-center">
                                                <div>
                                                    <button class="btn btn-light">تصفح ملفاتك</button>
                                                    <h5 class="my-3">او</h5>
                                                    <h5>قم بسحب الملفات مباشرة هنا</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        معلومات إضافية
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><label class="mx-4">إضافة إلى</label><input type="radio">
                                        مشروع <input type="radio"> مهمة
                                        <br>
                                        <div class="d-flex align-content-center justify-content-sm-between my-3">
                                            <label class="mt-3 ml-5">إضافة مشروع/ مهمة</label>
                                            <select class="form-control w-75" name="" id="">
                                                <optgroup>
                                                    <option value="">1</option>
                                                    <option value=""> 2</option>

                                                </optgroup>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-holder">
                        <button class="btn btn-primary submit" >حفظ وموافقة</button> <button
                            class="btn btn-dark re-submit">حفظ
                            كمسودة</button>

                    </div>
                </form>
            </div>





        </div>
</div>
@endsection
@section('script')
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ URL('js/main.js') }}"></script>
<script>
    let id = 0;
    let Total_array = [];
    let sumVal = 0;
    let sumValBefore = 0;
    let sumValTax = 0;
    var Total_value = [];
    var Total_before = [];
    var Total_Tax = [];
    function addCode() {

        var table  = document.getElementById("t-body");
        var row    = table.insertRow(-1);
        var cell1  = row.insertCell(0);
        var cell2  = row.insertCell(1);
        var cell3  = row.insertCell(2);
        var cell4  = row.insertCell(3);
        var cell5  = row.insertCell(4);
        var cell6  = row.insertCell(5);
        var cell7  = row.insertCell(6);
        var cell8  = row.insertCell(7);
        var cell9  = row.insertCell(8);
        var cell0  = row.insertCell(9);
        var cell11 = row.insertCell(10);
        var cell12 = row.insertCell(11);
        var cell13 = row.insertCell(12);
        // id="product_${id}"
        cell1.innerHTML = `${id}`;
        cell2.innerHTML =
        `<select id="product_${id}"  onclick="selectT(${id})" onchange="myFunction(${id})" name="test[]"  class="form-control w-100 mx-5 px-2 select2" >
            <optgroup>
                <option  value=""></option>
                @foreach ($products as $product )
                    <option  value="{{ $product->id }}">{{ $product->name_en  }}</option>
                @endforeach
            </optgroup>
        </select>`;
        
        cell3.innerHTML  = `<input id="dec_product_${id}"      type="text" class="form-control w-100">`;
        cell4.innerHTML  = `<input id="qun_product_${id}" value="1" onfocusout="result(${id})"    name="test[]" type="text" class="form-control w-100">`;
        cell5.innerHTML  = `<input style="width:100%" id="tax_on_product_${id}"     type="text" class="form-control w-100" disabled >`;
        cell6.innerHTML  = `<input id="price_unit_product_${id}" onfocusout="result(${id})"   name="test[]" type="text" class="form-control w-100">`;
        cell7.innerHTML  = `<input id="inc_desc_product_${id}"  type="checkbox" class=" value="off" w-100" onclick="result(${id})">`;
        cell8.innerHTML  = `<input id="desc_product_${id}"  onfocusout="result(${id})"   name="test[]" type="text" class="form-control w-100" value="0">`;
        cell9.innerHTML  = `<select desc_product_op_${id} onchange="result(${id})"    class="form-control w-100"> >
                            <optgroup>
                                <option value="0">قيمة</option>
                                <option value="1">%</option>
                            </optgroup>
                        </select>`;
        cell0.innerHTML  = `<input id="price_before_tax_product_${id}"     name="test[]" type="text" class="form-control w-100" >`;
        cell11.innerHTML =
        `<select id="product_tax_${id}" onchange="result(${id})"   name="test[]"  class="form-control w-50 mx-5 px-2" >
            <optgroup>
                <option  value="">-</option>
                <option value="0">0.0%</option>
                <option value="15">15%</option>
            </optgroup>
        </select>`;
        cell12.innerHTML = `<input id="Tax_value_${id}"  value="0"   name="test[]" type="text" class="form-control w-100" readonly >`;
        cell13.innerHTML = `<input style="width:100%" id="Total_${id}"     name="test[]" type="text" class="form-control w-100" readonly >`;

        Total_value[id] = 0;
        Total_before[id] = 0;
        Total_Tax[id] = 0;
        id += 1


    }
    function myFunction(id) {
        product_id  = document.getElementById('product_'+id).value;
        product_des = document.getElementById('dec_product_'+id);
        PriceUnitProduct = document.getElementById('price_unit_product_'+id);
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        tax_on_product = document.getElementById('tax_on_product_'+id);
        Total                 = document.getElementById('Total_'+id);
        $(document).ready(function () {
            // alert('dadas');
            var ProductURL = "/dashboard/Product/"+product_id;
            $.get(ProductURL, function (data) {

                product_des.value           = data.Note;
                PriceUnitProduct.value      = data.sel;
                priceBeforeTaxProduct.value = data.sel;
                tax_on_product.value        = data.Tex_Number;
                Total.value = data.sel;
                Total_value[id] = data.sel;
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

        }
        document.getElementById("total_after").innerHTML =  sumVal;
        document.getElementById("tax_value").innerHTML =  sumValTax;
        document.getElementById("total_before").innerHTML =  sumValBefore;

        document.getElementById('total_with_tax').value   = sumValBefore;
        document.getElementById('total').value            = sumVal;
        document.getElementById('total_tax_value').value  = sumValTax;
        console.log(sumValTax);
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
        var tax_on_product   = document.getElementById('tax_on_product_'+id).value;
        var Tax              = document.getElementById('product_tax_'+id).value;
        var PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        var checkboxIncluded = document.getElementById('inc_desc_product_'+id);
        var TaxValue         = document.getElementById('Tax_value_'+id);
        var DescProduct      = document.getElementById('desc_product_'+id).value;
        var ToTax            = 0;
        TotalBefore.value = (qunProduct * PriceUnitProduct) ;
        if (checkboxIncluded.checked) {
            ToTax = parseFloat(tax_on_product) + 100;
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProduct;
            TotalIncluded       =  Math.round(((parseFloat(TotalBefore.value) / ToTax) * 100) * 100) / 100 ;
            TotalAfter.value    =  Math.round(TotalIncluded + TotalIncluded * Tax / 100) ;
            TotalBefore.value   =  TotalIncluded ;
            
        } else {
            TotalBefore.value   =  parseFloat(TotalBefore.value) - DescProduct;
            TotalAfter.value    =  (parseFloat(TotalBefore.value) + parseFloat(TotalBefore.value) * Tax / 100)  ;
        }
        
        TaxValue.value =     Math.round((parseFloat(TotalBefore.value) * Tax / 100) * 100) / 100;
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
@endsection
