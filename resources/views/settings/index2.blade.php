@extends('layouts.vertical', ['title' => 'الاعدادات'])

@section('css')
    <link rel="stylesheet" href="{{ asset('Croppie/croppie.css') }}">
    <style>
        .tabs-setting .nav-tabs>li a {
            color: #ffffff !important;
            background-color: #14293C;
        }

        .tabs-setting .nav-tabs>li .active {
            color: #ffffff;
            background-color: #036C9C;
        }

        .tabs-setting .nav-tabs>li a:hover {
            color: #ffffff;
            background-color: #036C9C;
        }

        .croppie-container .cr-boundary {
            /* margin: unset !important; */
            border-radius: 50%;
        }

        .croppie-container .cr-slider-wrap {
            width: 16%;
            margin: unset !important;
            display: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="btn-heaad">
                <button class="btn btn-primary">
                    الإعدادات العامة
                </button>
                <button class="btn btn-dark">
                    إعدادات الطباعة العامة
                </button>
                <button class="btn btn-secondary">
                    <i class="fa fa-lock"></i>
                    إعدادات عروض الأسعار
                </button>
                <button class="btn btn-dark">
                    إعدادات فواتير المبيعات
                </button>
                <button class="btn btn-secondary">
                    <i class="fa fa-lock"></i>
                    إعدادات أوامر الشراء
                </button>
                <button class="btn btn-secondary">
                    <i class="fa fa-lock"></i>
                    إعدادات فواتير المشتريات
                </button>
                <button class="btn btn-dark">
                    إعدادات السندات
                </button>
                <button class="btn btn-dark">
                    إعدادات الإشعارات الدائنة
                </button>
                <button class="btn btn-secondary">
                    <i class="fa fa-lock"></i>
                    إعدادات الإشعارات المدينة
                </button>
                <button class="btn btn-dark">
                    إعدادات المنتجات
                </button>
            </div>
            <div class="container p-5" style="background: white;">
                <h4 class="text-primary">الإعدادات العامة</h4>
                <hr style="color: #b2b2b2;">
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-10">
                        <img src="./images/missing.png" class="missing mt-5" alt="">
                    </div>
                    <div class="col-2 mt-5 d-flex align-items-center">
                        <div class="form_name fw-500">رفع الشعار</div>
                    </div>
                    <div class="col-10 mt-5">
                        <div class="bg-secondary" style="width: 330px; height: 210px;">
                            <img class="cr-image" src="#"
                                style="transform: translate3d(188.725px, 125.816px, 0px) scale(0); transform-origin: -38.7247px -25.8164px;">
                            <div class="cr-viewport cr-vp-square" tabindex="0" style="width: 180px; height: 120px;"></div>
                            <div class="cr-overlay" style="width: 0px; height: 0px; top: 99.9996px; left: 150px;"></div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-10">
                        <input class="custom-width my-3" type="range" step="0.0001" aria-invalid="false">
                        <input type="file" name="" class="d-block border custom-width" id="">
                        <button class="custom-width btn btn-success my-3">
                            رفع الصورة
                        </button>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                اسم المنشأة
                            </label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="custom-width form-control" id="" name="">
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                البريد الالكتروني للمنشأة
                            </label>
                        </div>
                        <div class="col-10">
                            <input type="email" class="custom-width form-control" id="" name="">
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                رقم الهاتف
                            </label>
                        </div>
                        <div class="col-10">
                            <input type="tel" class="custom-width form-control" id="" name="">
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                العنوان
                            </label>
                        </div>
                        <div class="col-10">
                            <div class="row" style="width: 400px;">
                                <div class="col">
                                    <input type="text" class="form-control" id="" name=""
                                        placeholder="اسم الشارع">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="" name=""
                                        placeholder="رقم المبني">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="" name=""
                                        placeholder="المدينة">
                                </div>

                            </div>
                            <div class="row mt-2" style="width: 400px;">
                                <div class="col">
                                    <input type="text" class="form-control" id="" name=""
                                        placeholder="الرمز البريدي">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="" name=""
                                        placeholder="المنطقة">
                                </div>
                                <div class="col">
                                    <select name="" id="" class="form-control">
                                        <option value="">
                                            حدد الدولة
                                        </option>
                                        <option value=""></option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                العملة
                            </label>
                        </div>
                        <div class="col-10">
                            <select name="" id="" class="custom-width form-control">
                                <option value="">
                                    ريال سعودي
                                </option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                تاريخ التوريد المستخدم في الإقرار الضريبي
                            </label>
                        </div>
                        <div class="col-10">
                            <div class="row custom-width">
                                <div class="col">
                                    <input type="radio" id="" name="">
                                    <label for="">تاريخ الإصدار</label>
                                </div>
                                <div class="col">
                                    <input type="radio" id="" name="">
                                    <label for="">تاريخ الاستحقاق</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                الرقم الضريبي
                            </label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="custom-width form-control" id="" name="">
                        </div>
                    </div>
                    <hr class="my-5" style="color: #b2b2b2;">
                    <h4 class="text-primary mb-5">تاريخ إقفال الحسابات</h4>


                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                تاريخ إقفال الحسابات
                            </label>
                        </div>
                        <div class="col-10">
                            <input type="" class="custom-width form-control" id="" name="">
                        </div>
                    </div>
                    <div class="row p-0 m-0 mb-4">
                        <div class="col-2">
                            <label for="">
                                بداية السنة المالية
                                <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-10">
                            <div class="custom-width row m-0 p-0">
                                <div class="col-2 p-0">
                                    <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-9 p-0" style="margin-right: 25px;">
                                    <select name="" id="" class="form-control">
                                        <option value="">يناير</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="p-0">
                                    <button class="btn btn-primary mt-3">
                                        حفظ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json"></script>
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Croppie/croppie.js') }}"></script>
    <script>
        $(document).ready(function() {
            var $uploadCrop = $('#upload-demo-container').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'zoom-square' // Use 'circle' for circular cropping or 'square' for square cropping
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            // Check if an old image exists
            var oldImage = $('#old-image').val();
            if (oldImage) {
                // Bind the old image to the Croppie instance
                $uploadCrop.croppie('bind', {
                    url: oldImage
                }).then(function() {
                    console.log('Old image bound to Croppie');
                });
            }

            // Handle file input change
            $('#upload-demo').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function() {
                        console.log('New image bound to Croppie');
                    });
                };
                reader.readAsDataURL(this.files[0]);
            });

            // Handle form submission

        });
    </script>
@endsection
