@extends('layouts.vertical', ['title' => ' امر شراء '])
@section('content')

    <section id="content-wrapper" class="content-header">
      <div class="row">
        <div class="col-lg-12 mt-3">
          <ul class="d-flex align-content-center">
            <li>
              <span class="text-dark ml-3">المشتريات</span>
            </li>
            <li class="text-dark">
              <i class="fa fa-angle-double-left mx-2 "></i>
              <a href="Sales-invoices.html"> امر شراء  </a>
            </li>
            <li class="text-primary">
              <i class="fa fa-angle-double-left mx-2 "></i>
              <a href="add-sales-bill.html"> {{ $Sales_invoices->code }}  </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div class="d-flex justify-content-sm-end mx-5">
        <button class="btn btn-primary mx-2">
          <a   href="{{ route('Purchase_orders.index') }}"   class="text-light">رجوع</a>
        </button>
      </div>
      <div class="container my-3 max-con">
        <div class="row">
          <div class="col-md-12 hi-mohasba">
            <h4 class="mx-4"> تفاصيل الفاتورة
            </h4>
          </div>
        </div>
        <div class="row pb-4 brdr">
           <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mt-5 me-auto" id="cd_side_info">
                <div class="quote-list clearfix">
                  <div class="form-group d-flex gap-1  justify-content-between ">
                    <h6 class=" col-xs-6 col-sm-6"> الحالة </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0"> موافق عليه </h6>
                  </div>
                  <div class="form-group d-flex gap-1  justify-content-between">
                    <h6 class=" col-xs-6 col-sm-6"> رقم المرجع </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0"> {{ $Sales_invoices->code }} </h6>
                  </div>
                  <div class="form-group d-flex gap-1  justify-content-between">
                    <h6 class="col-xs-6 col-sm-6"> تاريخ الإصدار </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0">{{ $Sales_invoices->Date_start }}</h6>
                  </div>
                  <div class="form-group d-flex gap-1  justify-content-between">
                    <h6 class="col-xs-6 col-sm-6"> تاريخ الانتهاء </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0"> {{ $Sales_invoices->Date_end }}  </h6>
                  </div>
                  <div class="form-group d-flex gap-1  justify-content-between">
                    <h6 class="col-xs-6 col-sm-6"> تاريخ التوريد </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0">{{ $Sales_invoices->Date_Groce_Period }} </h6>
                  </div>
                  <div class="form-group d-flex gap-1  justify-content-between">
                    <h6 class="col-xs-6 col-sm-6"> من الموقع </h6>
                    <h6 class="col-xs-6 col-sm-6 pl0 pr0">  {{$site->name_ar}} </h6>
                  </div>
                  <div></div>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between mt-5">
                <div >
                  <h5 class="text-primary">العميل:</h5>
                  <address>
                    <span>
                      <b>
                        <a class="text-primary"> {{ $Client->name }}</a>
                      </b>
                    </span>
                    <br> {{ $Client->phon }}, {{ $Client->street_1 }}, {{ $Client->city_1 }}, {{ $Client->cantry_1 }}
                  </address>
                </div>
                <div >
                  <h5 class="text-primary">من قِبل:</h5>
                  <address>
                    <span>
                      <b> test mohsa </b>
                    </span>
                    <br>
                    <span></span>
                    <br>
                  </address>
                </div>
                <div class="clearfix"></div>
              </div>
          <div class="row  pb-4 ">
            <div class="col-md-12">
              <div class="w-100 my-5 table-responsive-lg">
                <table class="table  ">
                    <thead class="cf">
                    <tr><th class="row-number" style="width: 5%">#</th>
                    
                    
                    <th class="col1">
                    المنتج
                    </th>
                    
                    
                    <th class="text-center-important">
                    الكمية
                    </th>
                    <th class="text-center-important unit_price">
                    سعر الوحدة
                    </th>
                    <th class="text-center-important discount">
                    شامل؟	
                    </th>
                    <th class="text-center-important discount">
                    الخصم
                    </th>
                    <th class="text-center-important discount">
                    الاجمالي قبل الضريبة
                    </th>
                    <th class="text-center-important vat_percentage">
                    الضريبة %
                    </th>
                    <th class="text-center-important discount">
                    قيمة الضريبة
                    </th>
                    <th class="amount_view" style="width: 12%">
                    الاجمالي
                    </th>
                    </tr></thead>
                    <tbody>
                        
                  @foreach ($PurchaseInvoiceDetails as $PurchaseInvoiceDetails)
                    @php
                        $productQ = App\Product::where('id' , $PurchaseInvoiceDetails->product_id)->first();
                        $unitQ = App\Uint::where('id' , $PurchaseInvoiceDetails->unit_id)->first();
                    @endphp
                    <tr id="10">
                    <td data-title="المنتج #" class="line-number">
                    1
                    </td>
                    <td data-title="المنتج">
                    <a href="https://www.qoyod.com/tenant/products/1">
                    {{ $productQ->name_en  }}
                    </a>
                    <br>
                    <p style="color: darkgrey;" class="line-prod-desc description-pre-line">
                 
                    </p>
                    </td>
                    <td class="text-center-important" style="width: 15%" data-title="الكمية">
                    {{ $PurchaseInvoiceDetails->qun }} 
                    {{  $unitQ->name }}
                    </td>
                    <td class="text-center-important" style="width: 10%" data-title="سعر الوحدة">
                   {{ $PurchaseInvoiceDetails->price_unit }} 
                    ر.س
                    </td>
                    <td class="text-center-important" data-title="شامل؟">
                    @if($PurchaseInvoiceDetails->withDescunt == 1)
                     <i class="fa fa-check-circle text-success"></i>
                    @else 
                     <i class="fa fa-times-circle text-danger"></i>
                    @endif
                    </td>
                    <td class="text-center-important" data-title="الخصم">
                  {{ $PurchaseInvoiceDetails->descunt }}
                    </td>
                    <td class="text-center-important" data-title="الاجمالي قبل الضريبة">
                   {{ $PurchaseInvoiceDetails->price_before }} ر.س
                    </td>
                    <td class="text-center-important" data-title="الضريبة %">
                   {{ $PurchaseInvoiceDetails->tax }}%
                    </td>
                    <td class="text-center-important" data-title="قيمة الضريبة">
                 {{ $PurchaseInvoiceDetails->tax_value }} ر.س
                    </td>
                    <td class="text-center-important" data-title="الاجمالي">
                  {{ $PurchaseInvoiceDetails->price_after }} ر.س
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
              </div>
            </div>
          </div>
          <div class="col-md-8 my-3"></div>
          <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">
            <div class="text-primary">
              <h2>
                <span>الاجمالي قبل الضريبة</span>
              </h2>
              <h2>
                <span>قيمة الضريبة</span>
              </h2>
              <h2>
                <span>المجموع</span>
              </h2>
            </div>
            <div>
              <h2>
                <span>{{ $Sales_invoices->total_with_tax }}</span>
              </h2>
              <h2>
                <span> {{ $Sales_invoices->tax_value }}</span>
              </h2>
              <h2>
                <span>{{ $Sales_invoices->total }}</span>
              </h2>
            </div>
          </div>
          <!--<div class="accordion mb-5" id="accordionExample">-->
          <!--  <div class="accordion-item ">-->
          <!--    <h2 class="accordion-header" id="headingTwo">-->
          <!--      <button class="accordion-button collapsed accordionDefault" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> معلومات إضافية </button>-->
          <!--    </h2>-->
          <!--    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
          <!--      <div class="accordion-body">-->
          <!--        <div class="col-md-6  ">-->
          <!--          <div class="form my-5 p0-5">-->
          <!--            <div class="d-flex align-content-center justify-content-between">-->
          <!--              <label class="mt-3 ml-5 col-lg-4"> إضافة مهمة </label>-->
          <!--              <div class="form-check">-->
          <!--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">-->
          <!--                <label class="form-check-label" for="flexRadioDefault1"> مشروع </label>-->
          <!--              </div>-->
          <!--              <div class="form-check">-->
          <!--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>-->
          <!--                <label class="form-check-label" for="flexRadioDefault2"> مهمة </label>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--            <div class="d-flex align-content-center justify-content-between">-->
          <!--              <label class="mt-3 ml-5 col-lg-4"> إضافة لمشروع </label>-->
          <!--              <select class="form-select w-75 my-2 form-select-lg mb-3">-->
          <!--                <option selected>يرجى الاختيار</option>-->
          <!--                <option value="1">One</option>-->
          <!--                <option value="2">Two</option>-->
          <!--                <option value="3">Three</option>-->
          <!--              </select>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="d-flex w-100 flex-wrap">-->
          <!--  <button class="btn btn-primary submit mt-3">تخصيص سند </button>-->
          <!--  <button class="btn btn-primary submit mt-3">طباعه </button>-->
          <!--  <button class="btn btn-primary submit mt-3">طباعه سند التسليم </button>-->
          <!--  <button class="btn btn-primary submit mt-3">تحميل pdf </button>-->
          <!--  <button class="btn btn-primary submit mt-3">البريد الالكتروني </button>-->
          <!--  <button class="btn btn-primary submit mt-3">ارجاع الفتوره </button>-->

          <!--</div>-->
          <!--</div>-->

        </div>
      </div>
    </section>
    
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection