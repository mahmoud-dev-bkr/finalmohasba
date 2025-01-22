@extends('layouts.vertical', ['title' => 'اضافة ' . $title])
@section('css')
<style>
    table{
        min-width:max-content;
    }
    .ct th,.ct td{
        padding-right:5px !important;
        padding-left:5px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="products-and-costs.html"> المنتجات
                            والتكاليف</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">إنشاء {{ $title }}</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>

    <section>
        <div class="d-flex justify-content-sm-end mx-5"> <a
                    href="{{ route('Product.index') }}" class="btn btn-primary mx-2"> رجوع</a>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba mb-5">

                    <h4 class="mx-4">إنشاء {{ $title }}</h4>
                </div>

            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('Product.create.post') }}" method="post">
                @csrf
                <div class="row bg-light pb-4 brdr">


                    <div class="row form mt-5">

                       <input type="number" value="{{ $product_id }}" name="type" id="" hidden>

                       <div class="d-flex justify-content-start">
                            <!--<h4 class="text-primary my-5">-->
                            <!--    ملاحظة: اضغط على "الخطوة الأولى" لاختيار نوع قيد مختلف-->
                            <!--</h4>-->
                        </div>


                       <div class="modal fade" id="exampleModal" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="exampleModalLabel"> وحدة القياس
                                       </h1>
                                       <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">

                                       <div class="modal-form">

                                           <div class="d-flex alig-content-center justify-content-around">
                                               <label class="mt-3 ml-5"> وحدة القياس</label><input
                                                   type="text" name="name" id="name"
                                                   class="form-control w-50 my-2">
                                           </div>

                                           <div class="d-flex align-content-center justify-content-around">
                                               <label class="mt-3 ml-5"> طريقة العرض</label><input
                                                   type="text" id="description" name="description"
                                                   class="form-control w-50 my-2">
                                           </div>
                                       </div>

                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                           data-bs-dismiss="modal">الغاء</button>
                                       <button type="button" onclick="submit_unit()"
                                           class="btn btn-primary"> حفظ</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="exampleModalLabel"> الصنف </h1>
                                       <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">

                                       <div class="modal-form">

                                           <div class="d-flex align-content-center justify-content-around">
                                               <label class="mt-3 "> اسم الصنف</label><input type="text"
                                                   name="name" class="form-control w-50 my-2" id="name_item">
                                           </div>

                                           <div class="d-flex align-content-center justify-content-around">
                                               <label class="mt-3 "> الوصف</label><input type="text"
                                                   name="description" class="form-control w-50 my-2"
                                                   id="description_item">
                                           </div>




                                       </div>

                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                           data-bs-dismiss="modal">الغاء</button>
                                       <button type="button" onclick="submit_des()" class="btn btn-primary">
                                           حفظ</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="responsive-scroll">
                           <table class="table text-center clint_">
                             <tbody>
                               <tr>
                                   <th>
                                       <label for="name_ar">
                                           الاسم العربي
                                       </label>
                                   </th>
                                   <td>
                                       <input class="form-control" name="name_ar" type="text">
                                   </td>
                                   <th>
                                       <label for="name_en">
                                        الاسم الانجليزي
                                       </label>
                                   </th>
                                   <td>
                                       <input class="form-control" name="name_en" type="text">
                                   </td>
                               </tr>

                               <tr>
                                   <th>
                                       <label for="serial_number">
                                           الرقم التسلسلي
                                       </label>
                                   </th>
                                   <td>
                                       <div class="row p-0 m-0 ">
                                           <div class="col-11 p-0 m-0">
                                               <input class="form-control" name="serial_number" type="text" id="serial_number">
                                           </div>
                                           <div class="col-1 p-0 m-0">
                                           <div onclick="genSerial_number()" class="btn btn-primary m-0" style='float:left;'>
                                               <i class="fas fa-sync"></i>
                                           </div>
                                           </div>
                                       </div>
                                   </td>
                                   <th>
                                       <label for="id_des">
                                            الصنف
                                       </label>
                                   </th>
                                   <td>
                                       <div class="row p-0 m-0">
                                           <div class="col-11 p-0 m-0">
                                               <select class="form-control w-100" name="id_des" id="id_des">
                                                   <optgroup>
                                                       <option value="0">الصنف الاساسي</option>
                                                       @foreach ($items as $id => $name )
                                                           <option value="{{ $id }}">{{ $name }}</option>
                                                       @endforeach
                                                   </optgroup>
                                               </select>
                                           </div>
                                           <div class="col-1 p-0 m-0">
                                               <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModal2" style='float:left;'>
                                                   <i class="fa-solid fa-plus"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </td>

                               </tr>

                               <tr>
                                   <th>
                                     <label for="set_Unit"> وحدة القياس </label>
                                   </th>
                                   <td>
                                       <div class="row p-0 m-0">
                                           <div class="col-11 p-0 m-0">
                                               <select name="id_unit" class="form-control" id="set_Unit" onchange="change_unit()">
                                                   <optgroup>
                                                       @foreach ($units as $id => $name )
                                                       <option value="{{ $id }}">{{ $name }}</option>
                                                       @endforeach
                                                   </optgroup>
                                               </select>
                                           </div>
                                           <div class="col-1 p-0 m-0">
                                               <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModal" style='float:left;'>
                                                   <i class="fa-solid fa-plus"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </td>
                                   <th>
                                       <label for="account_buy"> حساب الايرادات</label>
                                   </th>
                                   <td>
                                       <select class="form-control" name="account_buy" id="account_buy">
                                           <optgroup>
                                           @foreach ($account1 as $account )
                                               <option {{ $account->code == '4101' ? 'selected' : ''  }} value="{{ $account->id }}">{{ $account->name }}</option>
                                           @endforeach
                                           </optgroup>
                                       </select>
                                   </td>
                               </tr>

                               <tr>
                                   <th>
                                      <label for="Tex_Number"> لضريبة %</label>
                                   </th>
                                   <td>
                                       <select name="Tex_Number" class="form-control" id="Tex_Number">
                                           <optgroup>
                                               <option value="0">0.0%</option>
                                               <option value="15">15%</option>
                                           </optgroup>
                                       </select>
                                   </td>
                                   <th>
                                       <label for="account_sel"> حساب المصروفات</label>
                                   </th>
                                   <td>
                                       <select class="form-control" name="account_sel" id="account_sel">
                                           <optgroup>
                                               @foreach ($account2 as $account )
                                                   <option {{ $account->code == '5101' ? 'selected' : ''  }} value="{{ $account->id }}">{{ $account->name }}</option>
                                               @endforeach
                                           </optgroup>
                                       </select>
                                   </td>
                               </tr>

                             </tbody>
                           </table>
                       </div>


<!--
                      <div class="col-12 col-md-6">
                          <div class="row">

                            <div class="col-4">
                              <label for="name_ar">
                              الاسم العربي
                              </label>
                            </div>
                            <div class="col-8 mb-3">
                              <input class="form-control" name="name_ar" type="text">
                            </div>

                            <div class="col-4">
                              <label for="">
                              الرقم التسلسلي
                              </label>
                            </div>
                            <div class="col-8 mb-3">
                              <input class="form-control" name="serial_number" type="text" id="serial_number">
                            </div>

                            <div class="col-12 mb-3">
                              <div class="pull-right">
                                  <a onclick="genSerial_number()" class="btn btn-primary">توليد رقم تسلسلي</a>
                              </div>
                            </div>

                            <div class="col-4">
                                <label for="set_Unit"> وحدة القياس </label>
                            </div>
                            <div class="col-6">
                                <select name="id_unit" class="form-control" id="set_Unit" onchange="change_unit()">
                                    <optgroup>

                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-2 mb-3" dir="ltr">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>

                           <div class="col-4">
                                <label for="Tex_Number"> لضريبة %</label>
                            </div>
                           <div class="col-8 mb-3">
                                <select name="Tex_Number" class="form-control" id="Tex_Number">
                                    <optgroup>
                                        <option value="0">0.0%</option>
                                        <option value="15">15%</option>
                                    </optgroup>
                                </select>
                            </div>

                          </div>
                      </div>

                      <div class="modal fade" id="exampleModal" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel"> وحدة القياس
                                      </h1>
                                      <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">

                                      <div class="modal-form">

                                          <div class="d-flex alig-content-center justify-content-around">
                                              <label class="mt-3 ml-5"> وحدة القياس</label><input
                                                  type="text" name="name" id="name"
                                                  class="form-control w-50 my-2">
                                          </div>

                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5"> طريقة العرض</label><input
                                                  type="text" id="description" name="description"
                                                  class="form-control w-50 my-2">
                                          </div>
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">الغاء</button>
                                      <button type="button" onclick="submit_unit()"
                                          class="btn btn-primary"> حفظ</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-12 col-md-6">
                        <div class="row">

                          <div class="col-4">
                            <label for="name_en">
                            الاسم الانجليزي
                            </label>
                          </div>
                          <div class="col-8 mb-3">
                            <input class="form-control" name="name_en" type="text">
                          </div>

                          <div class="col-4">
                            <label for="id_des"> الصنف</label>
                          </div>
                          <div class="col-6">
                            <select class="form-control w-100" name="id_des" id="id_des">
                                <optgroup>
                                    <option value="0">الصنف الاساسي</option>

                                </optgroup>
                            </select>
                          </div>
                          <div class="col-2 mb-3" dir="ltr">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                          </div>

                          <div class="col-4">
                              <label for="account_buy"> حساب الايرادات</label>
                          </div>
                          <div class="col-8 mb-3">
                              <select class="form-control" name="account_buy" id="account_buy">
                                  <optgroup>

                                  </optgroup>
                              </select>
                          </div>

                          <div class="col-4">
                              <label for="account_sel"> حساب المصروفات</label>
                          </div>
                          <div class="col-8 mb-3">
                              <select class="form-control" name="account_sel" id="account_sel">
                                  <optgroup>

                                  </optgroup>
                              </select>
                          </div>

                          <div class="modal fade" id="exampleModal2" tabindex="-1"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel"> الصنف </h1>
                                          <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">

                                          <div class="modal-form">

                                              <div class="d-flex align-content-center justify-content-around">
                                                  <label class="mt-3 "> اسم الصنف</label><input type="text"
                                                      name="name" class="form-control w-50 my-2" id="name_item">
                                              </div>

                                              <div class="d-flex align-content-center justify-content-around">
                                                  <label class="mt-3 "> الوصف</label><input type="text"
                                                      name="description" class="form-control w-50 my-2"
                                                      id="description_item">
                                              </div>




                                          </div>

                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                              data-bs-dismiss="modal">الغاء</button>
                                          <button type="button" onclick="submit_des()" class="btn btn-primary">
                                              حفظ</button>
                                      </div>
                                  </div>
                              </div>
                          </div>


                        </div>
                      </div>
-->
                        <div class="col-md-12">

                            <div class="col-md-12 table-responsive-lg responsive-scroll">
                              <div class="w-100 my-5 ">
                                <table  class="table text-center table-bordered inventary-table ct" style="width:100%;">
                                  <thead class="cf">
                                    <tr>
                                        <!--<th class="text-center" scope="col">  الوحده </th>-->
                                        <th class="text-center" scope="col">سعر شراء الوحدة</th>
                                        <th class="text-center" scope="col">سعر الشراء يشمل الضريبة؟</th>
                                        <th class="text-center" scope="col">سعر بيع الوحدة</th>
                                        <th class="text-center" scope="col">سعر البيع يشمل الضريبة؟</th>
                                            @foreach($sites as $si)
                                                @if($si->id != 1)
                                                    <th scope="col">{{ $si->name_en }} سعر بيع   </th>
                                                @endif
                                            @endforeach
                                        <th class="text-center" scope="col">الباركود </th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <td class="text-center" colspan="1" >
                                        <input type="text" class="form-custom-2 my-2"  name="buy"   style="width: 125px;">
                                    </td>
                                    <td class="text-center" colspan="1">
                                        <input   class="form-check-input mt-3" type="checkbox" >
                                    </td>
                                    <td class="text-center" colspan="1" >
                                        <input type="text" class="form-custom-2 my-2"  name="sel"   style="width: 125px;">
                                    </td>
                                    <td class="text-center" colspan="1">
                                        <input  class="form-check-input mt-3" type="checkbox" >
                                    </td>
                                    @foreach($sites as $sit)
                                        @if($sit->id != 1 )
                                            <td class="text-center" colspan="1" >
                                                <input type="text" class="form-custom-2 my-2"  name="price[]"           style="width: 125px;" id="price_main_{{ $sit->id }}" onfocusout="resultmain({{$sit->id}})" >
                                                <input type="text" class="form-custom-2 my-2"  value="{{ $sit->id }}"   style="width: 125px;"   id="ids_main_{{ $sit->id }}" hidden >
                                                <input type="text" class="form-custom-2 my-2"  name="ids[]"  value="{{ $sit->id }}"   style="width: 125px;"   id="result_main_{{ $sit->id }}" hidden >
                                            </td>
                                         @endif
                                    @endforeach
                                    <td class="text-center" colspan="1" >
                                        <input type="text" class="form-custom-2 my-2"  name="barCode"   style="width: 200px;" >
                                    </td>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <h3 style="color:red;">تحويل الوحدات</h3>
                            <div class="col-md-12">
                              <div class="w-100 my-5 table-responsive-lg responsive-scroll">
                                <table id="add_table" class="table  text-center table-bordered inventary-table ct">
                                  <thead class="cf">
                                    <tr>
                                        <th class="text-center" scope="col">وحدة واحدة من </th>
                                        <th class="text-center" scope="col">= </th>
                                        <th class="text-center" scope="col"> عدد </th>
                                        <th class="text-center" scope="col">من الوحدة</th>
                                        <th class="text-center" scope="col">سعر شراء الوحدة</th>
                                        <th class="text-center" scope="col">سعر الشراء يشمل الضريبة؟</th>
                                        <th class="text-center" scope="col">سعر بيع الوحدة</th>
                                        <th class="text-center" scope="col">سعر البيع يشمل الضريبة؟</th>
                                            @foreach($sites as $si)
                                                @if($si->id != 1)
                                                    <th scope="col">{{ $si->name_en }} سعر بيع   </th>
                                                @endif
                                            @endforeach
                                        <th class="text-center" scope="col">الباركود </th>
                                        <th class="text-center" colspan="1"></th>
                                    </tr>
                                  </thead>
                                  <tbody id="t-body">

                                  </tbody>
                                </table>
                                <a class="btn btn-primary " id="add_row">اضافةالمزيد</a>
                              </div>
                            </div>

                            <div class="my-5">
                                <h6 class="my-2 ">صوره المنتج</h6>
                                <input type="file" class="form-control w-50 my-3">
                                <div class="btn-holder">
                                    <button class="btn btn-primary submit">حفظ </button>
                                    <a href="{{ route('Product.index') }}"
                                       >
                                        <button class="btn btn-dark re-submit">
                                            الغاء
                                        </button>
                                    </a>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ URL('js/main.js') }}"></script>
<script>

      var id = 0;
      var counter = 0;
      $('#add_row').click(function() {
          // Add row
          var row = '';
          row += `
          <tr>
                <td class="text-center" colspan="1">
                    <select class="form-select my-2 form-select-lg " style="display: initial; width: 90%; height: 40px;">
                        <optgroup>
                            @foreach ($units as $id => $name )
                                <option value="{{ $id }}" class="units">{{ $name  }}</option>
                            @endforeach

                        </optgroup>
                    </select>
                </td>
                <td class="text-center"  style="width: 30px;">
                    =
                </td>
                <td class="text-center" style="width: 30px;">
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <select name="test[]"  class="form-select my-2 form-select-lg" style="display: initial; width: 90%; height: 40px;">
                        <optgroup>
                            @foreach ($units as $id => $name )
                                <option value="{{ $id }}" >{{ $name  }}</option>
                            @endforeach

                        </optgroup>
                    </select>
                </td>
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <input name="test[]"  class="form-check-input mt-3" type="checkbox" >
                </td>
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;">
                </td>
                <td class="text-center" colspan="1">
                    <input  class="form-check-input mt-3" type="checkbox" >
                </td>
                @foreach($sites as $sit)
                    ${counter += 1}
                    @if($sit->id != 1)
                        <td class="text-center" colspan="1" >
                            <input type="text" class="form-custom-2 my-2"  name="price[]"           style="width: 125px;" id="price_${counter}" onfocusout="result(${counter})">
                            <input type="text" class="form-custom-2 my-2"  value="{{ $sit->id }}"   style="width: 125px;" id="ids_${counter}" hidden >
                            <input type="text" class="form-custom-2 my-2"  name="ids[]" value="{{ $sit->id }}"   style="width: 125px;"  id="result_${counter}" hidden >
                        </td>
                     @endif
                @endforeach
                <td class="text-center" colspan="1" >
                    <input type="text" class="form-custom-2 my-2"  name="test[]"   style="width: 125px;" >
                </td>
                <td class="text-center" colspan="1" >
                    <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
                </td>

          </tr>`;

          $("#t-body").append(row);


          var valueToSet = $('#set_Unit option:selected').text();
          $('.units').each(function(){
            if ($(this).text() === valueToSet) {
              $(this).prop('selected', true);
            }
          });


        //   Total_value[id] = 0;
        //   Total_before[id] = 0;
        //   Total_Tax[id] = 0;
        //   getSum();
          id += 1;

        });

        $("#t-body").on("click", ".delete_row", function() {
          var deleteId = $(this).data("id");
          $(this).closest('tr').remove();
        });


    function genSerial_number() {

        document.getElementById("serial_number").value = Math.random().toString().slice(2, 14);

    }

    function change_unit() {
        var valueToSet = $('#set_Unit option:selected').text();
          $('.units').each(function(){
            if ($(this).text() === valueToSet) {
              $(this).prop('selected', true);
            }
          });
    }

    function submit_unit() {
        var description = document.getElementById('description').value
        var set_Unit      = $('#set_Unit');
        var set_Unitvalue = $('#set_Unit').val();
        // alert(set_Unitvalue)
        var name = document.getElementById('name').value
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('sub.Ajax.unit') }}",
            data: {
                description: description,
                _token: '{{ csrf_token() }}',
                name: name,

            },
            success: function (data) {
                $('#exampleModal').modal('hide');
                set_Unit.empty();
                $.each(data, function(key, value) {
                    set_Unit.append('<option value="' + value.id + '">' + value.name + '</option>');
                });

            set_Unit.val(set_Unitvalue);

            }
        });
    }

    function submit_des() {
        var description = document.getElementById('description_item').value
        var name = document.getElementById('name_item').value
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('sub.Ajax.item') }}",
            data: {
                description: description,
                _token: '{{ csrf_token() }}',
                name: name,

            },
            success: function (data) {
                $('#exampleModal2').modal('hide');
                alert("تم الحفظ");
                description = ""
                name = ""

            }
        });
    }

    function myFunction(id) {
        var x = document.getElementById("product_"+id).value;

    }
    function result(id) {
        var price      = document.getElementById("price_"+id).value;
        var Inputprice = document.getElementById("price_"+id);
        var ids   = document.getElementById("ids_"+id).value;
        var inputIds =  document.getElementById("result_"+id);

        if (Inputprice.value.trim() === '') {
            Inputprice.focus();
        }
        inputIds.value = "";
        inputIds.value = ids  + "-" + price
    }
    // + "-" + unit
    function resultmain(id) {
        var price = document.getElementById("price_main_"+id).value;
        var Inputprice = document.getElementById("price_main_"+id);
        var ids   = document.getElementById("ids_main_"+id).value;
        var unit   = document.getElementById("set_Unit").value;
        var inputIds =  document.getElementById("result_main_"+id);

        if (Inputprice.value.trim() === '') {
            Inputprice.focus();
        }
        inputIds.value = "";
        inputIds.value = ids  + "-" + price
    }

</script>
@endsection
