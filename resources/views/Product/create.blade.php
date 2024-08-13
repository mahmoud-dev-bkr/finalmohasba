@extends('layouts.vertical', ['title' => 'اضافة ' . $title])
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
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                    href="products-and-costs.html" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

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

                    <div class="col-md-12 clients ">

                        <div class="container-fluid main-bg">


                            <!-- Responsive Arrow Progress Bar -->
                            <div class="arrow-steps clearfix">
                                <div class="step current bg-primary"> <span> <a href="{{ route('Product.tenant') }}">نوع
                                            المنتج</a></span> </div>
                                <div class="step bg-success mx-2"> <span><a
                                            href="{{ route('Product.create', $product_id) }}"
                                            class="text-white">{{ $title }}</a></span> </div>
                                <div class="step d-none"> <span><a href="#"></a></span> </div>

                            </div>
                        </div>






                    </div>


                    <div class="row">


                        <div class="col-md-7">
                            <input type="number" value="{{ $product_id }}" name="type" id="" hidden>
                            <h6 class="text-primary w-100">ملاحظة: اضغط على "الخطوة الأولى" لاختيار نوع قيد مختلف</h6>

                            <div class="form my-5">

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 mx-4 "> الاسم العربي</label><input name="name_ar" type="text"
                                        class="form-control w-50 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 mx-2 ">الرقم التسلسلي</label><input name="serial_number"
                                        type="text" id="serial_number" class="form-control w-50 my-2">
                                </div>

                                <div class="w-75 mx-auto my-3">
                                    <a onclick="genSerial_number()" class="btn btn-primary">توليد رقم تسلسلي</a>

                                </div>


                                <div class="my-5">

                                    <div class="d-flex align-content-center  my-3">
                                        <label class="mt-3 mx-5"> وحدة القياس </label>
                                        <select name="id_unit" class="form-control w-50 mx-4" id="set_Unit">
                                            <optgroup>

                                                @foreach ($units as $uint )
                                                <option value="{{ $uint->id }}">{{ $uint->name }}</option>
                                                @endforeach

                                            </optgroup>
                                        </select>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>


                                    <div class="d-flex align-content-center my-3">
                                        <label class="mt-3 mx-5 px-2"> لضريبة %</label>
                                        <select name="Tex_Number" class="form-control w-50 mx-4" id="">
                                            <optgroup>
                                                <option value="0">0.0%</option>
                                                <option value="15">15%</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                </div>

                            </div>

                        </div>




                        <div class="col-md-5">
                            <div class="form my-5">

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> الاسم الانجليزي</label><input name="name_en" type="text"
                                        class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5"> الصنف</label>
                                    <select class="form-control w-50" name="id_des" id="">
                                        <optgroup>
                                            <option value="0">الصنف الاساسي</option>
                                            @foreach ($items as $item )
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach


                                        </optgroup>
                                    </select>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>


                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> الوصف </label><input name="Note" type="text"
                                        class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> الباركود </label><input name="barCode" type="text"
                                        class="form-control w-75 my-2">
                                </div>


                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> سعر بيع الوحدة </label><input name="sel" type="text"
                                        class="form-control w-75 my-2">
                                </div>
                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5"> حساب الايرادات</label>
                                    <select class="form-control w-50" name="account_buy" id="">
                                        <optgroup>
                                            @foreach ($account1 as $account )
                                            <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach


                                        </optgroup>
                                    </select>

                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> سعر الشراء </label><input name="buy" type="text"
                                        class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5"> حساب المصروفات</label>
                                    <select class="form-control w-50" name="account_sel" id="">
                                        <optgroup>
                                            @foreach ($account2 as $account )
                                            <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach


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

                        <div class="col-md-12">
                            <div class="responsive-scroll">
                                <h6 class="my-3">تحويل الوحدات</h6>
                                <table class="table text-center">
                                    <thead class="table-head">
                                        <tr>

                                            <th scope="col">وحدة واحدة من </th>
                                            <th scope="col">= </th>
                                            <th scope="col"> عدد </th>
                                            <th scope="col">من الوحدة</th>
                                            <th scope="col">سعر شراء الوحدة</th>
                                            <th scope="col">سعر الشراء يشمل الضريبة؟</th>
                                            <th scope="col">سعر بيع الوحدة</th>
                                            <th scope="col">سعر البيع يشمل الضريبة؟</th>
                                            <!--@if(count($sites) > 0)-->
                                                @foreach($sites as $si)
                                                    @if($si->id != 10)
                                                        <th scope="col" class="addaction">{{ $si->name_ar }} سعر بيع   </th>
                                                    @endif
                                                @endforeach
                                            <!--@endif-->
                                            <th scope="col">الباركود </th>
                                            


                                        </tr>
                                    </thead>
                                    <tbody class="text-center" id="t-body">

                                    </tbody>
                                </table>
                                <a class="btn btn-primary" onclick="addCode()">اضافةالمزيد</a>
                            </div>

                            <div class="my-5">
                                <h6 class="my-2 ">صوره المنتج</h6>
                                <input type="file" class="form-control w-50 my-3">


                                <div class="w-50">
                                    <div class="d-flex align-content-center justify-content-start text-primary"><input
                                            name="is_store" type="checkbox" class=" w-50 my-3"><span class="mt-2">المنتج
                                            مخزون </span></div>
                                    <div class="d-flex align-content-center justify-content-start text-primary"><input
                                            name="is_buy" type="checkbox" class=" w-50 my-3"><span class="mt-2"> يُبَاع
                                        </span></div>
                                    <div class="d-flex align-content-center justify-content-start text-primary"><input
                                            name="is_sell" type="checkbox" class=" w-50 my-3"><span class="mt-2">يُشتَرى
                                        </span></div>

                                </div>

                                <div class="btn-holder">
                                    <button class="btn btn-primary submit">حفظ </button> <button
                                        class="btn btn-dark re-submit">الغاء</button>

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
    let id = 1;
    function addCode() {

        var table = document.getElementById("t-body");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
        var cell9 = row.insertCell(8);

        cell1.innerHTML = `
            <select name="test[]" class="form-control w-50 mx-5 px-2"  id="">
                <optgroup>
                    @foreach ($units as $uint )
                        <option value="{{ $uint->id }}">{{ $uint->name  }}</option>
                    @endforeach

                </optgroup>
            </select>`;
        cell2.innerHTML = `=`;
        cell3.innerHTML = `<input type="text" class="form-control w-50">`;
        cell4.innerHTML = `<select id="product_${id}"  onchange="myFunction(${id})" name="test[]"  class="form-control w-50 mx-5 px-2"  id="">
                    <optgroup>
                        @foreach ($units as $uint )
                            <option  value="{{ $uint->id }}">{{ $uint->name  }}</option>
                        @endforeach

                    </optgroup>
                </select>`;
        cell5.innerHTML = `<input  name="test[]" type="text" class="form-control w-50">`;
        cell6.innerHTML = `<input name="test[]" type="checkbox" class=" w-50">`;
        cell7.innerHTML = `<input name="test[]" type="text" class="form-control w-50">`;
        cell8.innerHTML = `<input name="test[]" type="checkbox" class=" w-50">`;
        cell9.innerHTML = `<input name="test[]" type="text" class="form-control w-50">`;
        id += 1
        

    }
    
    
    function genSerial_number() {

        document.getElementById("serial_number").value = Math.random().toString().slice(2, 14);

    }

    function submit_unit() {
        var description = document.getElementById('description').value
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
                alert("تم الحفظ");

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

</script>
@endsection
