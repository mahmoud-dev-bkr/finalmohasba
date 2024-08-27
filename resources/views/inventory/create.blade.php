@extends('layouts.vertical', ['title' => 'اضافة جرد مخزون'])
@section('content')
    <section id="content-wrapper" class="content-header">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
                    <li>
                        <span class="text-dark ml-3">المنتجات والتكاليف</span>
                    </li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i>
                        <a href="clients.html">جرد المخزون </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <form action="{{ route('Inventory.create.post') }}" method="post">
            @csrf
            <div class="container my-3 max-con">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">إنشاء جرد مخزون </h4>
                    </div>
                </div>
                <div class="row  p-3 brdr">
                    <div class="col-md-6 ">
                        <div class="form my-5">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> الموقع <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <select class="form-select w-75 my-2 form-select-lg mb-3" name="site_id" id="site_id">
                                        <option selected>يرجى الاختيار</option>
                                        @foreach ($sites as $site)
                                            <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}

                                </div>

                            </div>
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> حساب الإيراد للكميات الزائدة <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <select class="form-select w-75 my-2 form-select-lg mb-3" name="account_id_plus">
                                        <option selected>يرجى الاختيار</option>
                                        @foreach ($accounts_plus as $account_plus)
                                            <option value="{{ $account_plus->id }}">{{ $account_plus->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                <label class="mt-3 ml-5 col-lg-4"> حساب التكلفة للكميات الناقصة <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <select class="form-select w-75 my-2 form-select-lg mb-3" name="account_id_minus">
                                        <option selected>يرجى الاختيار</option>
                                        @foreach ($accounts_minus as $account_minus)
                                            <option value="{{ $account_minus->id }}">{{ $account_minus->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 pe-5 ">
                        <div class="mb-3">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5 col-lg-2"> التاريخ <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <input type="date" class="form-control w-75 my-2" name="date">
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3 ">
                            <div class="d-flex flex-lg-row flex-column align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5 col-lg-2"> الوصف <span class="star">*</span>
                                </label>
                                <div class="d-flex  flex-column w-75  my-2  mb-3">

                                    <textarea class="form-control w-75 my-2" id="exampleFormControlTextarea1" rows="3" name="note"></textarea>
                                    {{-- <label class="error">يجب تعبئة هذا الحقل</label> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row  pb-4 ">
                        <div class="col-md-12">
                            <div class="w-100 my-5 table-responsive-lg">
                                <table class="table  text-center table-hover table-bordered inventary-table">
                                    <thead class="cf">
                                        <tr>
                                            <th class="text-center" colspan="1">المنتجات</th>
                                            <th class="text-center" colspan="1">الكمية الحالية</th>
                                            <th class="text-center" colspan="1">الكمية الفعلية </th>
                                            <th class="text-center" colspan="1">الفرق</th>
                                            <th class="text-center" colspan="1"> القيمة المتوسطة
                                                <div style="color: #777;">
                                                    اترك الحقل فارغًا لاستخدام القيمة المتوسطة الحالية للمنتج
                                                </div>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" colspan="1" width="450px">
                                                <select class="form-select py-2 w-80 my-2 form-select-lg" id="product_id_0" name="inventorydetails[0][product_id]" onchange="getProductDetails(0)">
                                                    <option selected="">يرجى الاختيار</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name_ar }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="text-center" colspan="1" width="350px">
                                                <input type="text" class="form-control w-100 my-2" id="current_qty_0" name="inventorydetails[0][current_qty]">
                                            </td>
                                            <td class="text-center" colspan="1" width="350px">
                                                <input type="text" class="form-control w-100 my-2" id="actual_qty_0" name="inventorydetails[0][actual_qty]">
                                            </td>
                                            <td class="text-center" colspan="1" width="350px">
                                                <input type="text" class="form-control w-100 my-2" id="troupes_0" name="inventorydetails[0][troupes]">
                                            </td>
                                            <td class="text-center" colspan="1" width="350px">
                                                <input type="text" class="form-control w-100 my-2" id="median_value_0" name="inventorydetails[0][median_value]">
                                            </td>
                                            <td class="text-center">
                                                <i class="mt-3 fas fa-times text-danger delete_row" data-id="0"
                                                    style="width:30px"></i>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary " type="button" id="add_row">اضافةالمزيد</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed accordionDefault" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"> معلومات إضافية
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="col-md-6  ">
                                        <div class="form my-5 p0-5">
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5 col-lg-4"> إضافة مهمة </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" 
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1"> مشروع </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" 
                                                        id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2"> مهمة </label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-content-center justify-content-between">
                                                <label class="mt-3 ml-5 col-lg-4"> إضافة لمشروع </label>
                                                <select class="form-select w-75 my-2 form-select-lg mb-3">
                                                    <option selected>يرجى الاختيار</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 add-sub">
                        <h5 class="text-primary">المرفقات</h5>
                        <div class="d-flex align-content-center justify-content-center text-center">
                            <div>
                                <label for="fileUpload" class="file-upload btn btn-light "> تصفح ملفاتك <input
                                        id="fileUpload" type="file">
                                </label>
                                <h5 class="my-3">او</h5>
                                <h5>قم بسحب الملفات مباشرة هنا</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5"
                        style="
                    width: 90%;
                    margin: 0 auto;
                    ">
                        <button class="btn btn-primary submit">حفظ و موافقه</button>
                        <button class="btn btn-dark re-submit">حفظ كمسودة</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('script')
    <script src="{{ URL('js/main.js') }}"></script>
    <script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        var id = 0;
        $(document).ready(function() {

            $('#add_row').click(function() {
                //Add row
                id += 1;
                row = '';
                row +=
                    `
                    <tr>
                        <td class="text-center" colspan="1">
                            <select class="form-select py-2 w-80 my-2 form-select-lg " id="product_id_${id}" name="inventorydetails[${id}][product_id]">
                                <option selected="">يرجى الاختيار</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name_ar }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="text-center" colspan="1" width="350px">
                            <input type="text" class="form-control w-100 my-2" id="current_qty_${id}" name="inventorydetails[${id}][current_qty]">
                        </td>
                        <td class="text-center" colspan="1" width="350px">
                            <input type="text" class="form-control w-100 my-2" id="actual_qty_${id}" name="inventorydetails[${id}][actual_qty]">
                        </td>
                        <td class="text-center" colspan="1" width="350px">
                            <input type="text" class="form-control w-100 my-2" id="troupes_${id}" name="inventorydetails[${id}][troupes]">
                        </td>
                        <td class="text-center" colspan="1" width="350px">
                            <input type="text" class="form-control w-100 my-2" id="median_value_${id}" name="inventorydetails[${id}][median_value]">
                        </td>
                        <td class="text-center">
                            <i class="mt-3 fas fa-times text-danger delete_row" data-id="${id}" style="width:30px"></i>
                        </td>

                    </tr>
                    `;
                $("tbody").append(row);

            })

            $("#add_table").on('click', '.delete_row', function() {
                $(this).closest('tr').remove();
            });

        });

        function getProductDetails(id)
        {
            var product_id  = document.getElementById('product_id_'+id).value;
            var site_id     = document.getElementById('site_id').value; 
            var ProductURL  = "/dashboard/Inventory/getProductDetails?product_id="+product_id +"&site_id="+site_id
            var current_qty = document.getElementById('current_qty')
            $.get(ProductURL, function (data) {
                
                

            })
        }

    </script>

@endsection
