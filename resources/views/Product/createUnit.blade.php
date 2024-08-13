@extends('layouts.vertical', ['title' => 'انشاء وحده'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المبيعات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">انشاء وحده</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <a href ="{{ route('unit.index') }}" class="text-light btn btn-primary mx-2">رجوع</a>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">انشاء وحده</h4>
                </div>

            </div>
            <form action="" method="post">
                @csrf
                <div class="row bg-light pb-4 brdr">



                    <div class="col-md-8 ">
                        <div class="form my-5 px-5 responsive-scroll">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3  w-25">
                                    وحدت القياس
                                </label>
                                <input name="" type="text"
                                    class="form-control w-75 my-2">
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3  w-25">
                                  طريقة العرض
                                </label>
                                <input name="" type="text"
                                    class="form-control w-75 my-2">
                            </div>
                            
                        </div>


                    </div>

                </div>
            </form>




        </div>
    </section>



</div>



@endsection
