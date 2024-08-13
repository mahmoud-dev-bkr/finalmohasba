@extends('layouts.vertical', ['title' => 'تعديل ' . $title])
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
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">تعديل {{ $title }}</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                    href="{{ route('EasyRestriction.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">تعديل {{ $title }}</h4>
                </div>

            </div>
            <form action="{{ route('EasyRestriction.edit',$EasyRestriction_id) }}" method="post">
                @csrf
                <div class="row bg-light pb-4 brdr">

                    <div class="col-md-12 clients ">








                    </div>


                    <div class="row">







                        <div class="col-md-5">
                            <div class="form my-5">

                                <div class="d-flex align-content-center my-1">
                                    <label class="mt-3 mx-2"> نوع السحب:
                                        <p class="be-smaller">من أي حساب قام المالك بالسحب؟</p></label>
                                    <select class="form-control w-75 h-50 mt-3" name="id_account_from" id="">
                                        <optgroup>
                                            @foreach ($accunts as $accunt )
                                            <option {{ $accunt->id == $EasyRestriction->id_account_from ? 'selected' : ''  }} value="{{ $accunt->id }}">{{ $accunt->name }}</option>
                                            @endforeach


                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center my-1">
                                    <label class="mt-3 mx-2"> حساب المالك :
                                        <p class="be-smaller">يفضل أن يكون حساب جاري باسم المالك</p></label>
                                    <select class="form-control w-75 h-50 mt-3" name="id_account_to" id="">
                                        <optgroup>

                                            @foreach ($accunts as $accunt )
                                            <option {{ $accunt->id == $EasyRestriction->id_account_to ? 'selected' : ''  }} value="{{ $accunt->id }}">{{ $accunt->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>


                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5">المبلغ المسحوب:</label><input type="text"
                                        value="{{ $EasyRestriction->amunt }}" name="amunt"
                                        class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> التاريخ: </label><input type="date"
                                        value="{{ $EasyRestriction->date }}" name="date"
                                        class="form-control w-75 input-bg my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> الوصف: </label><input type="text"
                                        value="{{ $EasyRestriction->Des }}" name="Des" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5"> المرفقات: </label><input type="file"
                                        class="form-control w-75 my-2">
                                </div>

                                <div class="btn-holder">
                                    <button class="btn btn-primary  ">تعديل</button>

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
