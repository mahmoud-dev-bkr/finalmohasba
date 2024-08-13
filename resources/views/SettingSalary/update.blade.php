@extends('layouts.vertical', ['title' => 'تعديل مكافئة'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">الرواتب</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="SettingSalarys.html">المكافآت</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-SettingSalarys.html">تعديل مكافئة </a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                    href="{{route('SettingSalary.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3">
            <div class="row">
                @if(session()->has('message'))
                {{dd('vbnm')}}
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">خصم جديد</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <div class="col-md-12 clients ">

                    <div class="col-md-6">
                        <form action="{{ route('SettingSalary.edit', $SettingSalary->id ) }}" method="post">
                            @csrf
                            <div class="form ">



                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5"> يوم القبض </label><input type="text"
                                        value="{{ $SettingSalary->day }}" name="day" class="form-control w-50 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ">التاريخ </label><input type="last_date" value="{{ $SettingSalary->last_date }}"
                                        name="Date" class="form-control w-50 my-2">
                                </div>

                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form ">

                        </div>
                    </div>
                </div>

                <div class="btn-holder">
                    <button class="btn btn-primary submit">حفظ</button>

                </div>
                </form>

            </div>
        </div>
    </section>>
</div>
@endsection
