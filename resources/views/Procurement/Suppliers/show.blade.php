@extends('layouts.vertical', ['title' => 'تفاصيل بيانات المورد'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3">المورد</span></li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="">تفاصيل بيانات المورد</a>
              </li>

            </ul>
          </div>



        </div>
      </section>


      <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
              href="{{ route('Supplier.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3 max-con">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">تفاصيل بيانات المورد</h4>
            </div>

          </div>
          <div class="row bg-light pb-4 brdr" style="overflow-x: auto;">

            <div class="col-md-12 clients ">

              <div class="col-md-6">

                <div class="d-flex align-items-center justify-content-around">
                  <div class="fw-bold">
                    <h6 class="mb-5">الاسم</h6>
                    <h6 class="mb-5">رقم الاتصال الأساسي</h6>
                    <h6 class="mb-5">رقم الاتصال الثانوي</h6>
                    <h6 class="mb-5">البريد الإلكتروني الأساسي</h6>
                    <h6 class="mb-5">البريد الإلكتروني الثانوي</h6>

                  </div>

                  <div class="text-secondary fw-bold">
                    <p class="be-small mb-5">{{ $Client->name }} </p>
                    <p class="be-small mb-5">{{ $Client->number1 }}  </p>
                    <p class="be-small mb-5">{{ $Client->number2 }}  </p>
                    <p class="be-small mb-5">{{ $Client->email1 }}  </p>
                    <p class="be-small mb-5">{{ $Client->email2 }}  </p>
                    


                  </div>
                </div>

              </div>

              <div class="col-md-6">

                <div class="d-flex align-items-center justify-content-around">
                  <div class="fw-bold">
                    <h6 class="mb-5"> الرصيد الختامي</h6>
                    <h6 class="mb-5"> إجمالي المستحق</h6>
                    <h6 class="mb-5">متأخرة</h6>
                    <h6 class="mb-5">عدد جميع الفواتير</h6>

                  </div>

                  <div class="text-secondary fw-bold">
                    <p class="be-small mb-5">0.00 </p>
                    <p class="be-small mb-5">{{ $TotalBounds }} </p>
                    <p class="be-small mb-5">{{ $TotalInvoice }} </p>
                    <p class="be-small mb-5">{{ $countInvoice }} </p>
                    



                  </div>
                </div>

              </div>


            </div>
            
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                  <h4 class="mx-4">فواتير المورد</h4>
                </div>
                <hr>
                <hr>
                <div class="col-md-12">
                    <div class="responsive-scroll">
                        <table id="PurchaseInvoicesTable" class="table text-center">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">الكود</th>
                                <th scope="col"> اجمالي الفاتورة </th>
                                <th scope="col">تاريخ الإصدار</th>
                                <th scope="col">شروط الدفع</th>
                                <th scope="col">تاريخ الاستحقاق</th>
                                <th scope="col">تاريخ التوريد</th>


                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($Sales_invoices as $Sales_invoice)
                            <tr>
                                <td>{{ $Sales_invoice->code }}</td>
                                <td>{{ $Sales_invoice->total }}</td>
                                <td>{{ $Sales_invoice->Date_start }}</td>
                                <td>{{ $Sales_invoice->payment_terms }}</td>
                                <td>{{ $Sales_invoice->Date_end }}</td>
                                <td>{{ $Sales_invoice->Date_Groce_Period }}</td>
                                
                            </tr>    
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                  <h4 class="mx-4"> سندات المورد</h4>
                </div>
                <hr>
                <hr>
                <div class="col-md-12">
                    <div >
                        <table id="PurchaseInvoicesTable" class="table text-center">
                            <thead class="table-head">
                            <tr>
                                <th scope="col">كود</th>
                                <th scope="col">تاريخ الإصدار</th>
                                
                                <th scope="col">القيمة</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($Clientbonds as $Clientbond)
                            <tr>
                                <td>{{ $Clientbond->code }}</td>
                                <td>{{ $Clientbond->Date }}</td>
                                
                                <td>{{ $Clientbond->Amount }}</td>
                            </tr>    
                            @endforeach

                            </tbody>
                        </table>

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

