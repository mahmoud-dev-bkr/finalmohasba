@extends('layouts.vertical', ['title' => 'اضافة موردء'])
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">محاسبة</span></li>

                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-rewards.html">إنشاء حساب جديد</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                    href="{{ route('Account.index') }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء حساب جديد</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <div class="col-md-12 clients ">

                    <div class="col-md-7">
                        <div class="form ">

                            <form action="{{ route('Account.create.post') }}" method="post">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @csrf
                                <div class="d-flex align-content-center justify-content-around my-3">
                                    <label class="mt-3 ml-5">حساب رئيسي</label>
                                    <select class="form-control w-50" name="parent_id" id="parent_id" onchange="myFunction()">
                                        <optgroup>
                                            <option value="">يرجي الاختيار</option>
                                            <option value="0">حساب رائيسي</option>
                                            @foreach ( $Accounts as $Account )
                                                <option  value="{{ $Account->id }}">{{ $Account->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>


                                <div class="d-flex align-content-center justify-content-around my-3">
                                    <label class="mt-3 ml-5">نوع الحساب</label>
                                    <select class="form-control w-50" name="type" id="">
                                        <optgroup>
                                            <option value="1">الاصول</option>
                                            <option value="2">الالتزمات</option>
                                            <option value="3">حقوق ملكية</option>
                                            <option value="4">الايرادات</option>
                                            <option value="5">المصاريف</option>
                                        </optgroup>
                                    </select>
                                </div>


                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5">الاسم العربي </label><input type="text"
                                        class="form-control w-50 my-2" name="name">
                                </div>

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5 mx-3">الرمز </label><input type="text"
                                        class="form-control w-50 my-2" name="code">
                                </div>

                                <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5 mx-3">الوصف </label><input type="text"
                                        class="form-control w-50 my-2" name="Note">
                                </div>

                                <input type="text" class="form-control w-50 my-2" name="level" id="level" value="2" hidden>


                                <div class="d-flex align-content-center justify-content-around my-3">
                                    <label class="mt-3 ml-5 be-smaller">يمكن الدفع والتحصيل بهذا الحساب </label><input
                                        type="checkbox" class="mx-5 px-2 my-3" name="transactions" value="1">
                                </div>


                                <div class="btn-holder employers">
                                    <button class="btn btn-primary submit">حفظ</button>
                                    <button class="btn btn-dark re-submit"><a href="">اعادة تعيين</a> </button>

                                </div>




                            </form>
                        </div>
                    </div>

                    <div class="col-md-5">

                    </div>


                </div>



            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL('js/main.js') }}"></script>
<script>
    function myFunction() {
        parent_id  = document.getElementById('parent_id').value;
        // alert(parent_id)
        level      = document.getElementById('level');
        // alert(parent_id)
        if (parent_id != 0) {
            $(document).ready(function () {
                // alert('dadas');
                var AccountURL = "/dashboard/Account/getAjax/"+parent_id;
                $.get(AccountURL, function (data) {
                    // alert(data.level)
                    level.value  = data.level + 1
                })
            });
        }



    }

</script>
@endsection
