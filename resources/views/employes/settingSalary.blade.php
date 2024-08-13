@extends('layouts.vertical', ['title' => 'اضافة مكافئة'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">الرواتب</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="rewards.html">المكافآت</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-rewards.html">مكافئة جديدة</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                    href="{{route('reward.index') }}" class="text-light"> رجوع</a> </button>
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
                        <form action="{{ route('reward.create.post') }}" method="post">
                            @csrf
                            <div class="form ">

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5">المرجع </label><input type="text" name="Reference"
                                        class="form-control w-50 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5">الموظف</label>
                                    <select class="form-control w-50" name="functionary" id="">
                                        <optgroup>
                                            @foreach ($employe as $employe )
                                            <option value="{{ $employe->id }}">{{ $employe->name }}</option>
                                            @endforeach

                                        </optgroup>
                                    </select>
                                </div>



                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5"> القيمة</label><input type="text" name="Value"
                                        class="form-control w-50 my-2">
                                </div>



                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5">النوع</label>
                                    <select class="form-control w-50" name="genre" id="">
                                        <optgroup>
                                            <option value="">مخالفة انظمة</option>
                                            <option value="">سداد سلفه </option>

                                            <option value=""> مدفوعات اخري </option>
                                            <option value=""> اخري </option>


                                        </optgroup>
                                    </select>
                                </div>




                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form ">

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 ">التاريخ </label><input type="date" name="Date"
                                    class="form-control w-50 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 ">الوصف </label><input type="text" name="description"
                                    class="form-control w-50 my-2">
                            </div>



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
