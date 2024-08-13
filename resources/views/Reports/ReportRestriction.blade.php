@extends('layouts.vertical', ['title' => ' قيود سهلة'])
@section('content')
      <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

              <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                  <li><span class="text-dark ml-3"> تقارير</span></li>
                  <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="reports5.html"> دفتر القيود </a>
                  </li>
                </ul>
              </div>

            </div>
          </section>


          <section>
            <div class="container my-3">
              <div class="row">
                <div class="col-md-12 hi-reports">

                  <div class="col-md-12 pt-5 main-reports">

                    <div class="d-flex justify-content-sm-center product-form">

                      <input class="form-control w-25 mx-2" type="date" placeholder=" من">
                      <input class="form-control w-25 mx-2" type="date" placeholder=" الي">
                      <select class="form-control mx-2 w-25" name="" id="">
                        <optgroup>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>



                        </optgroup>
                      </select>
                      <select class="form-control mx-2 w-25" name="" id="">
                        <optgroup>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>



                        </optgroup>
                      </select>



                      <button class="btn btn-primary pc mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                      <button class="btn btn-dark pc mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i></button>


                    </div>



                  </div>


                </div>

              </div>
              <div class="row bg-light pb-4 brdr">
                <section>

                    <br>
                    <br>
                    <br>

                    <h1 style="text-align: center;">دفتر القيود</h1><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="responsive-scroll">
                                @foreach ( $Journals as $Journal   )
                                  @if ($Journal->type == 1)

                                    @php
                                      $invoice = DB::table('purchase_invoices')->where('id', $Journal->journal_id)->first();
                                      $invoiceDetails = DB::table('purchase_invoice_details')->where('purchase_invoice_id', $Journal->journal_id)->get();
                                    @endphp

                                      <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        <h6>فاتورة مشتريات {{ $invoice->code }}</h6>
                                        <tr>

                                          <th rowspan="2" scope="col">الحساب</th>
                                          <th scope="col">التفاصيل</th>
                                          <th scope="col">مدين</th>
                                          <th scope="col">دائن  </th>
                                          <th scope="col">التعليقات  </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($invoiceDetails as $invoiceDetail)
                                              <tr>
                                                <td>1106 - المخزون (1106)</td>
                                                <td></td>
                                                <td>{{ $invoiceDetail->price_before }}</td>
                                                <td></td>
                                                <td></td>

                                              </tr>
                                              <tr>
                                                <td>2105 - ضريبة القيمة المضافة المستحقة (2105)</td>
                                                <td></td>
                                                <td>{{ $invoiceDetail->tax_value }}</td>
                                                <td></td>
                                                <td></td>

                                              </tr>
                                          @endforeach
                                              <tr>
                                                <td>2101 - الدائنون (2101)</td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $invoice->total }}</td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                        </tbody>

                                      </table>
                                      <hr>
                                      <br><br>
                                  @endif
                                  @if ($Journal->type == 2)

                                    @php
                                      $invoice = DB::table('purchase_invoices')->where('id', $Journal->journal_id)->first();
                                      $invoiceDetails = DB::table('purchase_invoice_details')->where('purchase_invoice_id', $Journal->journal_id)->get();
                                    @endphp

                                      <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        <h6>فاتورة مبيعات {{ $invoice->code }}</h6>
                                        <tr>

                                          <th rowspan="2" scope="col">الحساب</th>
                                          <th scope="col">التفاصيل</th>
                                          <th scope="col">مدين</th>
                                          <th scope="col">دائن  </th>
                                          <th scope="col">التعليقات  </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($invoiceDetails as $invoiceDetail)
                                              <tr>
                                                <td>1106 - المخزون (1106)</td>
                                                <td></td>
                                                <td>{{ $invoiceDetail->price_before }}</td>
                                                <td></td>
                                                <td></td>

                                              </tr>
                                              <tr>
                                                <td>2105 - ضريبة القيمة المضافة المستحقة (2105)</td>
                                                <td></td>
                                                <td>{{ $invoiceDetail->tax_value }}</td>
                                                <td></td>
                                                <td></td>

                                              </tr>
                                          @endforeach
                                              <tr>
                                                <td>2101 - الدائنون (2101)</td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $invoice->total }}</td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                        </tbody>

                                      </table>
                                      <hr>
                                      <br><br>
                                  @endif
                                  @if ($Journal->type == 3)

                                    @php
                                      $suppliersBonds = DB::table('suppliers_bonds')->where('id', $Journal->journal_id)->first();
                                      $account        = DB::table('accounts')->where('id', $Journal->acount_to)->first();
                                    @endphp

                                      <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        @if ($suppliersBonds->type == 1)
                                            <h6>سند قبض موردين</h6>
                                        @else
                                            <h6>سند صرف موردين</h6>
                                        @endif
                                        <tr>

                                          <th rowspan="2" scope="col">الحساب</th>
                                          <th scope="col">التفاصيل</th>
                                          <th scope="col">مدين</th>
                                          <th scope="col">دائن  </th>
                                          <th scope="col">التعليقات  </th>



                                        </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>2101 - الدائنون (2101)</td>
                                            <td></td>
                                            <td> {{ $suppliersBonds->Amount }} </td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>{{ $account->name }}</td>
                                            <td></td>
                                            <td></td>
                                            <td> {{ $suppliersBonds->Amount }} </td>
                                            <td></td>
                                          </tr>
                                        </tbody>

                                      </table>
                                      <hr>
                                      <br><br>
                                  @endif
                                  @if ($Journal->type == 4)

                                    @php
                                      $clientBonds = DB::table('client_bonds')->where('id', $Journal->journal_id)->first();
                                      $account     = DB::table('accounts')->where('id', $Journal->acount_from)->first();
                                    @endphp

                                      <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        <h6>سند صرف عملاء</h6>
                                        <tr>

                                          <th rowspan="2" scope="col">الحساب</th>
                                          <th scope="col">التفاصيل</th>
                                          <th scope="col">مدين</th>
                                          <th scope="col">دائن  </th>
                                          <th scope="col">التعليقات  </th>



                                        </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>{{ $account->name }}</td>
                                            <td></td>
                                            <td> {{ $clientBonds->Amount }} </td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>1103 - المدينون (1103)</td>
                                            <td></td>
                                            <td></td>
                                            <td> {{ $clientBonds->Amount }} </td>
                                            <td></td>
                                          </tr>
                                        </tbody>

                                      </table>
                                      <hr>
                                      <br><br>
                                  @endif
                                  @if ($Journal->type == 5)

                                    @php
                                      $easy_restrictions = DB::table('easy_restrictions')->where('id', $Journal->journal_id)->first();
                                      $account_from      = DB::table('accounts')->where('id', $Journal->acount_from)->first();
                                      $account_to      = DB::table('accounts')->where('id', $Journal->acount_to)->first();
                                    @endphp

                                      <table id="EasyRestrictionTable" class="table text-center">
                                        <thead class="table-head">
                                        <h6>قيود سهله</h6>
                                        <tr>

                                          <th rowspan="2" scope="col">الحساب</th>
                                          <th scope="col">التفاصيل</th>
                                          <th scope="col">مدين</th>
                                          <th scope="col">دائن  </th>
                                          <th scope="col">التعليقات  </th>



                                        </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>{{ $account_from->name }}</td>
                                            <td></td>
                                            <td> {{ $easy_restrictions->amunt }} </td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>{{ $account_to->name }}</td>
                                            <td></td>
                                            <td></td>
                                            <td> {{ $easy_restrictions->amunt }} </td>
                                            <td></td>
                                          </tr>
                                        </tbody>

                                      </table>
                                      <hr>
                                      <br><br>
                                  @endif
                                @endforeach

                            </div>

                        </div>
                    </div>


                </section>


              </div>
            </div>
          </section>
      </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
      <!-- Plugins js-->
@endsection
