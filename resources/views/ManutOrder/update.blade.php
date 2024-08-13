@extends('layouts.vertical', ['title' => 'اضافة أمر تصنيع'])
@section('content')
<div class="container-fluid">





    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="manufacturing-orders.html">اوامر
                            التصنيع</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-manufacturing-order.html">إنشاء أمر
                            تصنيع</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('ManutOrder.inde') }}"
                    class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">إنشاء أمر تصنيع</h4>
                </div>

            </div>
            <form action="{{ route('ManutOrder.edit', $ManutOrder->id) }}" method="post">
                @csrf
                <div class="row bg-light pb-4 brdr">



                    <div class="col-md-8 ">
                        <div class="form my-5 px-5 responsive-scroll">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 w-25">التاريخ</label><input value="{{ $ManutOrder->Date }}" name="Date" type="date"
                                    class="form-control  w-75 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3  w-25">الوصف</label><input value="{{ $ManutOrder->Des }}" name="Des" type="text"
                                    class="form-control w-75 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الموقع</label>
                                <select class="form-control w-75 my-2" name="id_Account" id="">
                                    <optgroup>
                                        @foreach ($Site as $Site )
                                            <option {{ $ManutOrder->id_Account == $Site->id ? 'selected' : ''  }} value="{{ $Site->id }}">{{ $Site->name_en }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>


                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">حساب التصنيع المؤقت</label>
                                <select class="form-control w-75 my-2" name="id_location" id="">
                                    <optgroup>
                                        @foreach ($Inventory as $Inventory )
                                            <option {{ $ManutOrder->id_location == $Inventory->id ? 'selected' : '' }} value="{{ $Inventory->id }}">{{ $Inventory->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>



                            <table class="table  half-table my-5">
                                <thead class="table-head h-50">
                                    <tr>
                                        <th>المنتج</th>
                                        <th>الكمية</th>
                                    </tr>
                                </thead>
                                <tbody id="t-body">
                                    @foreach ($ManuProductOrder as $ManuProductOrder )
                                        <tr>
                                            <td>
                                                <select class="form-control  w-100 mt-1" name="test[]" id="">
                                                    <optgroup>
                                                        @foreach ($products as $product )
                                                            <option {{ $ManuProductOrder->id_product == $product->id ? 'selected' : '' }} value="{{ $product->id }}">{{ $product->name_en }}</option>
                                                        @endforeach

                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <input name="test[]" value="{{ $ManuProductOrder->Qun }}" type="text" class="form-control mt-1 edit-input w-25">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <a class="btn btn-primary" onclick="addCode()">اضافةالمزيد</a>



                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item my-3">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            معلومات إضافية
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"><label class="mx-4">إضافة إلى</label><input
                                                type="radio"> مشروع <input type="radio"> مهمة
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


                    </div>

                    <div class="col-md-4 mt-5 ">




                    </div>

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

                    <div class="btn-holder">
                        <button class="btn btn-primary submit">بدءالعملية</button>
                        <button class="btn btn-primary submit">بدء واستكمال</button>
                        <button class="btn btn-dark re-submit">حفظ كمسودة</button>

                    </div>

                </div>
            </form>




        </div>
    </section>



</div>



@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{ URL('js/main.js') }}"></script>
<script>
    function addCode() {
        var table = document.getElementById("t-body");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);


        cell1.innerHTML = `
        <select class="form-control  w-100 mt-1" name="test[]" id="">
            <optgroup>
                @foreach ($products as $product )
                    <option value="{{ $product->id }}">{{ $product->name_en }}</option>
                @endforeach

            </optgroup>
        </select>`;
        cell2.innerHTML = `<input name="test[]" type="text" class="form-control mt-1 edit-input w-25">`;




    }

</script>
@endsection
