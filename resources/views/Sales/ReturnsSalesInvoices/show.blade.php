@extends('layouts.vertical', ['title' => 'تفاصيل بيانات اشعار دائن'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3"><a href="{{ route('sales_invoices.index') }}">اشعارات الدائنه</a>  </span></li> 
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="">تفاصيل بيانات اشعار دائن</a>
              </li>

            </ul>
          </div>



        </div>
      </section>


      <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
              href="{{ route('sales_invoices.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3 max-con">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">تفاصيل بيانات اشعار دائن</h4>
            </div>

          </div>
          <div class="row  pb-4 brdr" style="overflow-x: auto;">

            <div class="col-md-12 clients ">

              <div class="col-md-6">

                <div class="d-flex align-items-center justify-content-around">
                  <div class="fw-bold">
                    <h6 class="mb-5">الحالة</h6>
                    <h6 class="mb-5">رقم المرجع</h6>
                    <h6 class="mb-5">تاريخ الإصدار</h6>
                    <h6 class="mb-5">تاريخ الانتهاء</h6>
                    <h6 class="mb-5">تاريخ التوريد</h6>
                    <h6 class="mb-5">من الموقع</h6>

                  </div>

                  <div class="text-secondary fw-bold">
                    <p class="be-small mb-5">{{ $status }} </p>
                    <p class="be-small mb-5">{{ $Sales_invoices->code }} </p>
                    <p class="be-small mb-5">{{ $Sales_invoices->Date_start }} </p>
                    <p class="be-small mb-5">{{ $Sales_invoices->Date_end }} </p>
                    <p class="be-small mb-5">{{ $Sales_invoices->Date_Groce_Period }} </p>
                    <p class="be-small mb-5"> {{ $site->name_ar }} </p>
                    


                  </div>
                </div>

              </div>

              <div class="col-md-6">

                <div class="d-flex align-items-center justify-content-around">
                  <div class="fw-bold">
                    <h6 class="mb-5"> الاسم</h6>
                    <h6 class="mb-5">الهاتف</h6>

                  </div>

                  <div class="text-secondary fw-bold">
                    <p class="be-small mb-5">{{ $Client->name }} </p>
                    <p class="be-small mb-5">{{ $Client->phon }} </p>
                  </div>
                  
                </div>

              </div>


            </div>
            
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                  <h4 class="mx-4">فواتير اشعار دائن</h4>
                </div>
                <hr>
                <hr>
                
                <div class="responsive-scroll">
                    <table class="table text-center">
                        <thead class="table-head" id="products">
                            <tr>
                                <th scope="col">المنتج</th>
                                <th scope="col">الوصف </th>
                                <th scope="col">الكمية </th>
                                <th scope="col"> الضريبة المضافة علي المنتج % </th>
                                <th scope="col">سعر الوحدة </th>
                                <th scope="col">شامل؟</th>
                                <th scope="col" >الخصم</th>
                                <th scope="col">الاجمالي قبل الضريبة </th>
                                <th scope="col">الضريبة %</th>
                                <th scope="col">قيمة الضريبة </th>
                                <th scope="col">القيمة </th>

                            </tr>
                        </thead>
                        <tbody class="text-center" id="t-body">
                            @foreach ($PurchaseInvoiceDetails as $PurchaseInvoiceDetails)
                                @php
                                    $productQ = App\Product::where('id' , $PurchaseInvoiceDetails->product_id)->first();
                                @endphp
                                <tr>
                                    
                                    <td>
                                         {{ $productQ->name_en  }}
                                    </td>
                                    <td>
                                        {{ $productQ->Note }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->qun }} 
                                    </td>
                                    <td>
                                        {{ $productQ->Tex_Number }}
                                    </td>
                                    <td>
                                        {{ $productQ->buy }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->withDescunt }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->descunt }}
                                    </td>
                                    <td>
                                       {{ $PurchaseInvoiceDetails->price_before }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->tax }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->tax_value }}
                                    </td>
                                    <td>
                                        {{ $PurchaseInvoiceDetails->price_after }}
                                    </td>
                                    
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>

                </div>
                
                
                <div class="col-md-8 my-3"></div>
                
                <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">

                    <div class="text-primary">
                        <h2><span>الاجمالي قبل الضريبة</span></h2>
                        <h2><span>قيمة الضريبة</span></h2>
                        <h2><span>المجموع</span></h2>
                        
                        
                        @foreach ($Clientbond as $Clientbonds)
                        @php
                            $account = App\Account::where("id", $Clientbonds->id_Account)->first();
                        @endphp
                            <hr>
                            <h2><span>دفعت بواسطة سند قبض</span></h2>
                            <h2><span>{{ $Clientbonds->code }}</span></h2>
                            <h2><span>{{ $Clientbonds->Date }}</span></h2>
                            <h2><span>{{ $account->name }}</span></h2>
                            
                        @endforeach
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2><span>المبلغ المستحق</span></h2>
                    </div>
                    <div>
                        
                        <h2><span id="total_before">{{ $Sales_invoices->total_with_tax }}</span> </h2>
                        <h2><span  id="tax_value">   {{ $Sales_invoices->tax_value }}</span> </h2>
                        <h2><span  id="total_after"> {{ $Sales_invoices->old_balance }}</span> </h2>
                        @foreach ($Clientbond as $C)
                            <hr>
                            <h2><span>.</span></h2>
                            <h2><span>.</span></h2>
                            <h2><span>.</span></h2>
                            <h2><span>{{ $C->Amount }}</span></h2>
                           
                        @endforeach
                        <br>
                        <hr>
                        <h2><span  id="total_after"> {{ $Sales_invoices->total }}</span> </h2>
                        <input type="text" name="total_with_tax" id="total_with_tax" hidden>
                        <input type="text" name="total"          id="total" hidden>
                        <input type="text" name="tax_value"      id="total_tax_value" hidden>


                    </div>


                </div>
            </div>
            
            

          </div>

        </div>
      </section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection

