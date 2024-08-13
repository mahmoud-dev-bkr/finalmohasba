@extends('layouts.vertical', ['title' => 'اضافة سندات العميل'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Clientbond.index') }}">> سندات العميل</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i>< إنشاء سندات العميل>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Clientbond.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء سندات العميل</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="myForm" class="row bg-light pb-4 brdr" action="{{ route('Clientbond.create.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <!--<div class="form my-5">-->

                        <!--    <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> المرجع</label><input name="code" value="PYT{{ $count  }}"  type="text" class="form-control w-75 my-2">-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                        <!--            <label class="mt-3 ml-5">العميل</label>-->
                        <!--            <select  class="form-control w-75" name="id_customers" id="Client-select1">-->
                        <!--                <optgroup>-->
                        <!--                    <option value="">اختر عميل</option>-->
                        <!--                    @foreach ($Clients as $Client )-->
                        <!--                        <option value="{{ $Client->id }}">{{ $Client->name }}</option>-->
                        <!--                    @endforeach-->
                        <!--                </optgroup>-->
                        <!--            </select>-->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5"> تاريخ الإصدار</label><input name="Date" type="date" class="form-control w-75 my-2" value="{{ old('my-date', date('Y-m-d')) }}"  >  -->
                        <!--        </div>-->

                        <!--        <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                        <!--        <label class="mt-3 ml-5">الحساب</label>-->
                        <!--        <select  class="form-control w-75" name="id_Account" id="">-->
                        <!--            <optgroup>-->
                        <!--                <option value="">اختار الحساب</option>-->
                        <!--                @foreach ($accounts as $account )-->
                        <!--                    <option value="{{ $account->id }}">{{ $account->name }}</option>-->
                        <!--                @endforeach-->
                        <!--            </optgroup>-->
                        <!--        </select>-->
                        <!--        </div>-->
                                
                                <!--<div class="d-flex align-content-center justify-content-sm-between my-3">-->
                                <!--<label class="mt-3 ml-5">النوع</label>-->
                                <!--<select  class="form-control w-75" name="type" id="">-->
                                <!--    <optgroup>-->
                                <!--        <option value="1">قبض</option>-->
                                <!--        <option value="0">صرف</option>-->
                                <!--    </optgroup>-->
                                <!--</select>-->
                                <!--</div>-->

                        <!--    <div class="d-flex align-content-center justify-content-sm-between">-->
                        <!--        <label class="mt-3 ml-5">القيمة</label><input type="text" name="Amount"-->
                        <!--            class="form-control w-75 my-2">-->
                        <!--    </div>-->
                        <!--    <div class="d-flex align-content-center justify-content-sm-between my-3">-->
                        <!--        <label class="mt-3 ml-5">الفاتورة الخاص بهذا العميل</label>-->
                        <!--        <select  class="form-control w-75" name="purchase_invoice_id" id="ReturnsSalesInvoices-select1">-->
                        <!--            <optgroup>-->
                        <!--                <option value="">اختار</option>-->
                        <!--            </optgroup>-->
                        <!--        </select>-->
                        <!--    </div>-->


                        <!--</div>-->
                        <div class="form my-5">
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label>
                                <input name="code" value="{{ old('code', 'PYT'.$count) }}" type="text" class="form-control w-75 my-2" id="code">
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الوصف</label>
                                <select name="Note" type="text" class="form-control w-75 my-2" value="{{ old('Note') }}">
                                    <optgroup>
                                        <option value="سدد">
                                            سدد
                                        </option>
                                        
                                        <option value="دفعة من فاتورة">
                                            دفعت من فاتورة
                                        </option>
                                        
                                        <option value="دفعه مقدمه">
                                            دفعه مقدمه  
                                        </option>
                                        
                                        <option value="1">
                                             اخري  
                                        </option>
                                        
                                    </optgroup>
                                </select>
                                
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">العميل</label>
                                <select class="form-control w-75" name="id_customers" id="Client-select1">
                                    <optgroup>
                                        <option value="">اختر عميل</option>
                                        @foreach ($Clients as $Client)
                                        <option value="{{ $Client->id }}" {{ old('id_customers') == $Client->id ? 'selected' : '' }}>
                                            {{ $Client->name }}
                                        </option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label>
                                <input name="Date" type="date" class="form-control w-75 my-2" value="{{ old('Date', date('Y-m-d')) }}" id="date">
                            </div>
                        
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">الحساب</label>
                                <select class="form-control w-75" name="id_Account" id="account">
                                    <optgroup>
                                        <option value="">اختار الحساب</option>
                                        @foreach ($accounts as $account)
                                            <option value="{{ $account->id }}" {{ old('id_Account') == $account->id ? 'selected' : '' }}>
                                                {{ $account->name }}
                                            </option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                            <label class="mt-3 ml-5">النوع</label>
                            <select  class="form-control w-75" name="type" id="type">
                                <optgroup>
                                    <option value="1">قبض</option>
                                    <option value="0">صرف</option>
                                </optgroup>
                            </select>
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">القيمة</label>
                                <input id="total-after" type="text" name="Amount" class="form-control w-75 my-2" value="{{ old('Amount') }}">
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">تخصيص السند تلقائيًا حسب أقدمية
                                            الفواتير</label>
                                            
                                            <input type="hidden" value="off" name="last_invoice">
                                            <input type="checkbox" class="m-auto my-2" value="on" name="last_invoice" checked>

                            </div>
                            <div class="form my-5" id="append-invoice">
                                
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

                    <div class="btn-holder">
                        <button class="btn btn-primary submit" id="submitButton">حفظ</button>
                        <a href="{{ route('Clientbond.index') }}" class="btn btn-dark submit">
                            اللغاء</a>

                    </div>
                </form>
            </div>





        </div>
</div>
@endsection
@section('script')

<script src="{{ URL('js/main.js') }}"></script>
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
var PurchaseInvoiceDetailsTable = null
    $(document).ready(function() {
    // When the select element changes
        $('#ReturnsSalesInvoices-select1').on('change', function()
        {
            var purchase_invoice_id = $(this).val();
    
                
            $.ajax({
                url: '/dashboard/PurchaseInvoice/get', // Replace with the actual endpoint URL that retrieves employees based on a branch ID
                type: 'GET',
                data: { id: purchase_invoice_id },
                success: function(response) {
                    document.getElementById("total-after").value =  response.total;
                    

                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // When the branch select field changes
        $('#Client-select1').on('change', function() {
            var ClientId = $(this).val();
            var employeeSelect = $('#append-invoice');
            var typeInv           = document.getElementById("type").value;
            // Clear the previous employee options
            employeeSelect.empty();

            // Add the default option
            employeeSelect.append('<option value="all">اختار الفاتورة الخاصه بهذا العميل</option>');

            // If a branch is selected
            if (ClientId) {
                var count = 0;
                // Make an AJAX request to get the employees for the selected branch
                $.ajax({
                    url: '/dashboard/getInvolice/with/Client', // Replace with the actual endpoint URL that retrieves employees based on a branch ID
                    type: 'GET',
                    data: { client_id: ClientId, type: typeInv },
                    success: function(response) {
                        // Add the retrieved employees to the employee select field
                        $.each(response, function(key, value) {
                            // employeeSelect.append('<option value="' + value.id + '">' + value.code + '</option>');
                            employeeSelect.append(`
                            <div class="d-flex align-content-center justify-content-sm-between my-3" id="invoices">
                                
                            
                              <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne_${count}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne_${count}" aria-expanded="false"
                                            aria-controls="flush-collapseOne_${count}">
                                            ${ value.code } لديها ${value.total} باقية لم تحصل
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne_${count}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne_${count}" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <label class="mt-3 ml-5">القيمة</label>
                                            <input id="total-after" type="text" name="Amounts[]" class="form-control w-75 my-2" value="">
                                            <input id="total-after" type="text" name="ids[]"     class="form-control w-75 my-2" value="${ value.id }" hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>`);
                            count += 1;
                            
                        });
                    }
                });
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
  const formElement = document.getElementById('myForm');
  const submitButton = document.getElementById('submitButton');
  
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
    // var total = amount;
    var state       = "yes";
    var Totalamount = document.getElementById('total-after').value;
    var code    = document.getElementById('code');
    var date    = document.getElementById('date');
    var account = document.getElementById('account');
    var client = document.getElementById('Client-select1');
    var amountinput = document.getElementById('total-after');
    
    
    
    var amounts = document.getElementsByName('Amounts[]');
    for (var i = 0; i < amounts.length; i++) {
      var amount = amounts[i].value;
      Totalamount -= amount;
      console.log(amount);
    }

    if (code.value.trim() === '') {
        code.classList.add('error-border');
        state = "no";
    } 
    
    if (date.value.trim() === '') {
        date.classList.add('error-border');
        state = "no";
    } 
    
    if (account.value.trim() === '') {
        account.classList.add('error-border');
        state = "no";
    } 
      
    
    if (client.value.trim() === '') {
        client.classList.add('error-border');
        state = "no";
    } 
      
    
    if (amountinput.value.trim() === '') {
        amountinput.classList.add('error-border');
        state = "no";
    } 
      
    
    if (Totalamount < 0) {
        alert("القيمة اكبر من المطلوب")
        state = "no";
    } 

    if (state == "yes") {
      formElement.submit();
    } else {
      alert("يجب ادخال جميع الحقول")
    }

    
  });
</script>
@endsection
