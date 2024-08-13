@extends('layouts.vertical', ['title' => 'اضافة خصم'])
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3">الرواتب</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="discounts.html">الخصومات</a>
                        </li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="add-discount.html">خصم جديد</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>

        <form action="{{ route('payroll.step2') }}" method="post">
            @csrf
            <section class="">
                <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="payroll-manager.html" class="text-light"> رجوع</a> </button>

                </div>
                <div class="container my-3 max-con">
                    <div class="row">
                        <div class="col-md-12 hi-mohasba">

                            <h4 class="mx-4"> مسير رواتب جديد</h4>
                        </div>
                    </div>
                    <div class="row  p-3 brdr">
                        <div class="col-md-6 ">
                            <div class="form my-5">
                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4"> المرجع
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <input type="text" name="code" value="{{ old('code',session('data')['code']??'') }}" class="form-control w-75 my-2">

                                    </div>

                                </div>

                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4"> الموقع
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <select name="site_id" class="form-select w-75 my-2 form-select-lg mb-3" id="site_id" onchange="getEmployesWithSiteId()">
                                            <option selected>يرجى الاختيار</option>
                                            @foreach ($sites as $site )
                                                <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>
                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4">الفترة
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <select name="period_id" class="form-select w-75 my-2 form-select-lg mb-3">
                                            <option selected>يرجى الاختيار</option>
                                            <option value="1">شهري</option>
                                            <option value="2">يومي</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4"> ملاحظات
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <textarea name="notes" class="form-control w-75 my-2" id="exampleFormControlTextarea1" rows="2"></textarea>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 pe-5 ">
                            <div class="mb-3">
                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4"> السنة
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <select name="year" class="form-select w-75 my-2 form-select-lg mb-3">
                                            <option selected>يرجى الاختيار</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 ">
                                <div class="d-flex flex-lg-row flex-column align-content-center justify-content-between">
                                    <label class="mt-3 ml-5 col-lg-4"> الشهر
                                    </label>
                                    <div class="d-flex  flex-column w-75  my-2  mb-3">

                                        <select name="month" class="form-select w-75 my-2 form-select-lg mb-3">
                                            <option selected>يرجى الاختيار</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion mb-5" id="accordionExample">
                            @include('payrolls.employees')

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
                            <button class="btn btn-primary submit"  id="nextBtn">التالي</button>
                        </div>
                    </div>

                </div>
            </section>
        </form>

    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ URL('js/main.js') }}"></script>
    <script>
           function getEmployesWithSiteId()
           {
               var site_id = $('#site_id').val();
               $.ajax({
                   url: "{{ route('getEmployesWithSiteId') }}",
                   type: "get",
                    data: {
                        site_id: site_id
                    },
                   success: function(response) {
                       console.log(response.employees);
                       $('#employee_id').html(response.employees);
                    }
                });
           }
    </script>
@endsection
