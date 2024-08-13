@extends('layouts.vertical', ['title' => 'اضافة ' . $title])
@section('content')
    <div class="container-fluid">
        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3"> محاسبة</span></li>
                        <li class="text-dark">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="products-and-costs.html"> قيود سهلة</a>
                        </li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">إنشاء
                                {{ $title }}</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>


        <section>
            <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                        href="{{ route('EasyRestriction.tenant') }}" class="text-light"> رجوع</a> </button>
            </div>
            <div class="container my-3">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">

                        <h4 class="mx-4">إنشاء {{ $title }}</h4>
                    </div>

                </div>
                <form action="{{ route('EasyRestriction.create.post') }}" method="post">
                    @csrf
                    <div class="row bg-light pb-4 brdr">

                        <div class="col-md-12 clients ">

                            <div class="container-fluid main-bg">


                                <!-- Responsive Arrow Progress Bar -->
                                <div class="arrow-steps clearfix">
                                    <div class="step current bg-primary"> <span> <a
                                                href="{{ route('EasyRestriction.tenant') }}">نوع
                                                المنتج</a></span> </div>
                                    <div class="step bg-success mx-2"> <span><a
                                                href="{{ route('EasyRestriction.create', $EasyRestriction_id) }}"
                                                class="text-white">{{ $title }}</a></span> </div>
                                    <div class="step d-none"> <span><a href="#"></a></span> </div>

                                </div>
                            </div>






                        </div>


                        <div class="row">







                            <div class="col-md-5">
                                <div class="form my-5">

                                    <div class="d-flex align-content-center my-1">
                                        <label class="mt-3 mx-2"> نوع السحب:
                                            <p class="be-smaller">من أي حساب قام المالك بالسحب؟</p>
                                        </label>
                                        <select class="form-control w-75 h-50 mt-3" name="id_account_from" id="">
                                            <optgroup>
                                                @foreach ($accunts as $accunt)
                                                    <option value="{{ $accunt->id }}">{{ $accunt->name }}</option>
                                                @endforeach


                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="d-flex align-content-center my-1">
                                        <label class="mt-3 mx-2"> حساب المالك :
                                            <p class="be-smaller">يفضل أن يكون حساب جاري باسم المالك</p>
                                        </label>
                                        <select class="form-control w-75 h-50 mt-3" name="id_account_to" id="">
                                            <optgroup>

                                                @foreach ($accunts as $accunt)
                                                    <option value="{{ $accunt->id }}">{{ $accunt->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>


                                    <div class="d-flex align-content-center justify-content-sm-between">
                                        <label class="mt-3 ml-5">المبلغ المسحوب:</label><input type="text" name="amunt"
                                            class="form-control w-75 my-2">
                                    </div>

                                    <div class="d-flex align-content-center justify-content-sm-between">
                                        <label class="mt-3 ml-5"> التاريخ: </label><input type="date" name="date"
                                            class="form-control w-75 input-bg my-2">
                                    </div>

                                    <div class="d-flex align-content-center justify-content-sm-between">
                                        <label class="mt-3 ml-5"> الوصف: </label><input type="text" name="Des"
                                            class="form-control w-75 my-2">
                                    </div>

                                    <div class="d-flex align-content-center justify-content-sm-between">
                                        <label class="mt-3 ml-5"> المرفقات: </label><input type="file"
                                            class="form-control w-75 my-2">
                                    </div>

                                    <div class="btn-holder">
                                        <button class="btn btn-primary  ">متابعة</button>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ URL('js/main.js') }}"></script>
@endsection
