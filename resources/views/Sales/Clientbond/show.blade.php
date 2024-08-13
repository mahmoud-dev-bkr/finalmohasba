@extends('layouts.vertical', ['title' => 'تفاصيل بيانات  سند قبض'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3"><a href="{{ route('Clientbond.index') }}"> سندات</a>  </span></li> 
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="">   {{ $Clientbonds->code }}  </a>
              </li>

            </ul>
          </div>



        </div>
      </section>


      <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
              href="{{ route('Clientbond.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3 max-con">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">    {{ $Clientbonds->code }}  </h4>
            </div>

          </div>
          <div class="row bg-light pb-4 brdr" style="overflow-x: auto;">

            <div class="col-md-12 clients ">

              <div class="col-md-6">

                <div class="d-flex align-items-center justify-content-around">
                  <div class="fw-bold">
                    <h6 class="mb-5">الجهة</h6>
                    <h6 class="mb-5">الحساب </h6>
                    <h6 class="mb-5"> رقم المرجع</h6>
                    <h6 class="mb-5">التاريخ </h6>
                    <h6 class="mb-5">المبلغ </h6>
                    <h6 class="mb-5">النوع </h6>
                    <h6 class="mb-5">لمبلغ غير المخصص </h6>

                  </div>

                  <div class="text-secondary fw-bold">
                    <p class="be-small mb-5"> {{ $Client->name }} </p>
                    <p class="be-small mb-5">  {{ $account->name }}  </p>
                    <p class="be-small mb-5">    {{ $Clientbonds->code }}  </p>
                    <p class="be-small mb-5">{{  $Clientbonds->Date ?? ""}}</p>
                    <p class="be-small mb-5">  {{  $Clientbonds->Amount }} ر.س</p>
                    <p class="be-small mb-5"> قبض</p>
                                         
                    @if($Clientbonds->status == 1 || $Clientbonds->status == 2)
                     <p class="be-small mb-5">{{  $Clientbonds->Amount }} ر.س</p>
                  @else 
                    <p class="be-small mb-5">00.00ر.س</p>
                   @endif
               
                    


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
                  <h4 class="mx-4">تخصيصات السند  </h4>
                </div>
                <hr>
                <hr>
                
                <div class="responsive-scroll">
                    <table class="table text-center">
                        <thead>
                          <tr class="ar_content">
                            <th class="item-list-col-hash">#</th>
                            <th>رقم المرجع</th>
                            <th>النوع</th>
                            <th>المبلغ</th>
                            <th>المبلغ المستحق</th>
                            <th>التاريخ</th>
                          </tr>
                        </thead>
                        <tbody class="text-center" id="t-body">
                           @if($Sales_invoices != "")
                              <tr>
                                <td> #</td>
                                <td> {{  $Sales_invoices->code ?? "" }}</td>
                                <td>
                                  <strong class="ar_content"> فاتورة مبيعات </strong>
                                </td>
                                <td>{{  $Sales_invoices->old_balance  ?? ""}} ر.س</td>
                                <td>{{  $Sales_invoices->total ?? "" }}</td>
                                <td>{{  $Sales_invoices->Date_start ?? ""}}</td>
                              </tr>
                              @elseif ($ClientBondsDitails)
                                
                                @foreach ( $ClientBondsDitails as $CD )
                                    @php
                                        $Invoice =  App\Sales_invoices::where("id", $CD->PurchaseInvoices_id)->first();  
                                        
                                    @endphp
                                    <tr>
                                        <td> #</td>
                                        <td> {{  $Invoice->code ?? "" }}</td>
                                        <td>
                                          <strong class="ar_content"> فاتورة مبيعات </strong>
                                        </td>
                                        <td>{{  $CD->Amount  ?? ""}} ر.س</td>
                                        <td>{{  $Invoice->total ?? "" }}</td>
                                        <td>{{  $Invoice->Date_start ?? ""}}</td>
                                  </tr>
                                    
                                    
                                @endforeach
                              
                              @endif
                        </tbody>
                    </table>

                </div>
                
                
         
            
            

          </div>

        </div>
      </section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection