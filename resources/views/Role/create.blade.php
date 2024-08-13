@extends('layouts.vertical', ['title' => 'انشاء منصب '])
@section('css')
<style>
    .table tr{
        line-height:3;
    }
    .perm tr th:first-of-type,
    .perm tr td:first-of-type {
       padding-right:20px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">
    
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
    
                    <li><span class="text-dark ml-3">الصفحة الرئيسية</span></li>
                    <li><span class="text-dark ml-3"><i class="fa fa-angle-double-left mx-2 "></i>الاعدادات</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">المنصب</a>
                    </li>
                </ul>
            </div>
    
    
        </div>
    </section>
    
    <section>
        <div class="d-flex justify-content-sm-end mx-2">
            <button class="btn btn-primary btn-sm mx-2">
                 رجوع
                <i class="fa fa-arrow-left"></i>
            </button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">إضافة صلاحيات</h4>
                </div>
            </div>
            <div class="row bg-light brdr">
                <form action="{{ route('roles.create.post') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <div class="col-12" style="background:white;min-height:60vh;">
                        <div class="mt-5 d-flex">
                            <label class="d-flex">
                              <span>
                                  اسم المنصب
                              </span>
                              <span class="text-danger" style="font-size: 25px;margin-right:5px;">*</span>
                            </label>  
                            <input name="name" id="" class="form-control" style="width:300px;margin-right:20px;">
                        </div>
                        <h5 class="mt-3 text-primary text-right">
                            الصلاحيات
                        </h5>
                        <div class="container">
                            <div class="m-3 row">
                                @foreach ($permissions as $c_numer => $collection )
                                    <div class="col-6">
                                        <div class="p-3 m-2 bg-light brdr rounded">
                                            <div class="form-check d-flex">
                                              <input class="form-check-input" type="checkbox" id="select-checkbox-{{$c_numer}}" onchange="handleSelectCollection(event,{{$c_numer}})" style="margin-left:20px;">
                                              <label class="form-check-label" for="select-checkbox-{{$c_numer}}">
                                                <h5>
                                                    تحديد الكل
                                                </h5>
                                              </label>
                                            </div>
                                            
                                            @foreach ($collection as $p)
                                            
                                            <div class="form-check d-flex">
                                              <input class="form-check-input checkbox-c-{{$c_numer}}" type="checkbox" name="permission_id[]" id="p-{{$p->id}}" value="{{ $p->id }}" style="margin-left:20px;">
                                              <label class="form-check-label" for="">
                                                    {{ $p->display_name }}
                                              </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <div class="p-3 m-2">
                                        <button class="btn btn-primary mx-2">حفظ</button>
                                        <button class="btn btn-dark mx-1">الغاء</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<!-- Vendor js -->
<script src="https://mohsba2.taelim.net/assets/js/vendor.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/notyf.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://mohsba2.taelim.net/js/main.js"></script>
  <!-- Plugins js-->
<script src="https://mohsba2.taelim.net/assets/libs/datatables/datatables.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/libs/pdfmake/pdfmake.min.js"></script>
<script>
    function handleSelectCollection(event , collection_num){
        const checked = event.target.checked;
        $(`.checkbox-c-${collection_num}`).prop('checked' , checked)
    }
</script>
@endsection
