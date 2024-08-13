@extends('layouts.vertical', ['title' => 'انشاء سند عميل'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i> انشاء سند عميل
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

                    <h4 class="mx-4">انشاء سند عميل</h4>

                </div>

            </div>
            <div class="row  pb-4 brdr">

                <form id="myForm" action="{{ route('sales_invoices.payment.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input id="code"   name="code" type="text" class="form-control w-75 my-2"    value="PYT {{ $count}}">

                            </div>
                                <input name="PurchaseInvoices_id" value="{{ $PurchaseInvoices->id }}" type="text" class="form-control w-75 my-2" hidden>
                                <input name="type" value="1" type="text" class="form-control w-75 my-2" hidden>
                                <input name="status"       value="3" type="text" class="form-control w-75 my-2" hidden>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">العميل</label>
                                    <select  class="form-control w-75" name="id_customers" id="Client-select1">
                                        <optgroup>
                                            @foreach ($Clients as $Client )
                                                <option value="{{ $Client->id }}">{{ $Client->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input name="Date" type="date" id="date" value="{{ old('Date', date('Y-m-d')) }}"   class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">الحساب</label>
                                    <select  class="form-control w-75" name="id_Account" id="account">
                                        <optgroup>
                                            <option value="">اختار الحساب</option>
                                            @foreach ($accounts as $account )
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">النوع</label>
                                    <select  class="form-control w-75" name="type" id="">
                                        <optgroup>
                                            <option value="1">قبض</option>
                                        </optgroup>
                                    </select>
                                </div>


                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">القيمة</label><input type="text" name="Amount" id="Amount" value="{{ $PurchaseInvoices->total }}"
                                    class="form-control w-75 my-2" onfocusout="calculator()">
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">المتبقي</label><input type="text" readonly id="total" value="0"
                                    class="form-control w-75 my-2"   name="total"> 
                            </div>



                        </div>




                    </div>



                    <div class="btn-holder">
                        <button class="btn btn-primary submit" id="submitButton">حفظ وموافقة</button> <button
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
<script src="{{ URL('js/main.js') }}"></script>
<script>

    function calculator() {
      var Amount = document.getElementById('Amount').value;
      var finaltotal = document.getElementById('total');
      var InputAmount = document.getElementById('Amount');
    
      if (InputAmount.value.trim() === '') {
        alert("هذه الحقل مطلوب");
        InputAmount.classList.add('error-border');
        InputAmount.value = {{ $PurchaseInvoices->total }};
      } else {
        InputAmount.classList.remove('error-border'); // Fix the typo here
    
        if ({{ $PurchaseInvoices->total }} - Amount >= 0) {
          finaltotal.value = {{ $PurchaseInvoices->total }} - Amount;
        } else {
          alert("range bigger than the total");
        }
      }
    }


    // function calculator ()
    // {
    //     var Amount   = document.getElementById('Amount').value;
    //     var finaltotal = document.getElementById('total');
    //     var InputAmount = document.getElementById('Amount');
    //     if (InputAmount.value.trim() === '' )
    //     {
    //         alert("هذه الحقل مطلوب")
    //         InputAmount.classList.add('error-border');
    //         InputAmount.value = {{ $PurchaseInvoices->total }}
            
            
    //     } else {
            
    //         InputAmount.classList.reomve('error-border');
    //         if ({{ $PurchaseInvoices->total }} - Amount >= 0) {
                
    //             finaltotal.value = {{ $PurchaseInvoices->total }} - Amount;
    //         } else {
    //             alert("range biger then the total")
    //         }
            
    //     }
        
        
    // }
</script>
<script>
  const formElement = document.getElementById('myForm');
  const submitButton = document.getElementById('submitButton');
  
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission
      var inputElement = document.getElementById('Client-select1');
      var state        = "yes"
      var account       = document.getElementById('account');
      // Date_Groce_Period product_$ site-id date_end_id Date_start_id 
     
      var code                      = document.getElementById('code');
      var date                      = document.getElementById('date');
      var Amount                    = document.getElementById('Amount');

      if (inputElement.value.trim() === '') {
        inputElement.classList.add('error-border');
        state = "no";
      } 
      if (account.value.trim() === '') {
        account.classList.add('error-border');
        state = "no";
      } 
      
      if (code.value.trim() === '') {
        code.classList.add('error-border');
        state = "no";
      } 
      if (date.value.trim() === '') {
        date.classList.add('error-border');
        state = "no";
      } 
      if (Amount.value.trim() === '') {
        Amount.classList.add('error-border');
        state = "no";
      } 
      
    
    
      if (state == "yes") {
          formElement.submit();
      } else {
          alert("يجب ادخال جميع الحقول")
      }
        
    // Perform any additional actions or validation if needed
    
    // Submit the form programmatically
    
  });
</script>
@endsection
