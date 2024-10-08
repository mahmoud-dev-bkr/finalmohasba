@extends('layouts.vertical', ['title' => 'تعديل سندات الموردين'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="purchase-orders.html"> سندات الموردين</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-purch-order.html"> تعديل سندات الموردين </a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('sales_invoices.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء سندات الموردين</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <form action="{{ route('Supplierbond.edit', $Supplierbond->id) }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input value="{{ $Supplierbond->code }}" name="code" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الوصف</label><input value="{{ $Supplierbond->Note }}" name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">العميل</label>
                                    <select  class="form-control w-75" name="id_supplers" id="">
                                        <optgroup>
                                            <option value="30">اختار عميل</option>
                                            @foreach ($Suppliers as $Supplier )
                                                <option {{ $Supplierbond->id_supplers == $Supplier->id ? 'selected' : ''}} value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input value="{{ $Supplierbond->Date }}" name="Date" type="date" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">الحساب</label>
                                <select  class="form-control w-75" name="id_Account" id="">
                                    <optgroup>
                                        <option value="30">اختار الحساب</option>
                                        @foreach ($accounts as $account )
                                            <option {{ $Supplierbond->id_Account == $account->id ? 'selected' : '' }} value="{{ $account->id }}">{{ $account->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                </div>
                                
                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">النوع</label>
                                <select  class="form-control w-75" name="type" id="">
                                    <optgroup>
                                        <option {{ $Supplierbond->type == 1 ? 'selected' : '' }} value="1">قبض</option>
                                        <option {{ $Supplierbond->type == 0 ? 'selected' : '' }} value="0">صرف</option>
                                    </optgroup>
                                </select>
                                </div>

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">القيمة</label><input type="text" value="{{ $Supplierbond->Amount }}" name="Amount"
                                    class="form-control w-75 my-2">
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
                            <thead class="table-head">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">المنتج</th>
                                    <th scope="col">الوصف </th>
                                    <th scope="col">الكمية </th>
                                    <th scope="col">سعر الوحدة </th>
                                    <th scope="col">شامل؟</th>
                                    <th scope="col">الخصم</th>
                                    <th scope="col">الاجمالي قبل الضريبة </th>
                                    <th scope="col">الضريبة %</th>
                                    <th scope="col">قيمة الضريبة </th>
                                    <th scope="col">القيمة </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>


                                </tr>

                            </tbody>
                        </table>
                        <button class="btn btn-primary">اضافةالمزيد</button>
                    </div>


                    <div class="col-md-8 my-3"></div>

                    <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">

                        <div class="text-primary">
                            <h2><span>الاجمالي قبل الضريبة</span></h2>
                            <h2><span>قيمة الضريبة</span></h2>
                            <h2><span>المجموع</span></h2>
                        </div>
                        <div>
                            <h2><span>00.00</span> </h2>
                            <h2><span>00.00</span> </h2>
                            <h2><span>00.00</span> </h2>



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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{ URL('js/main.js') }}"></script>
@endsection
