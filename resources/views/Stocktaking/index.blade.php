@extends('layouts.vertical', ['title' => 'خدمات'])
@section('content')
<section id="content-wrapper" class="content-header">
    <div class="row">

          <div class="col-lg-12 mt-3">
          <ul class="d-flex align-content-center">

          <li><span  class="text-dark ml-3">المنتجات والتكاليف</span></li>
          <li class="text-primary">
          <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">جرد المخزون</a>
          </li>
          </ul>
          </div>



    </div>
</section>


<section>
    <div class="d-flex justify-content-sm-end mx-5">
        <button class="btn btn-primary mx-2">
        <a href="{{route('Inventory.create')}}" class="text-light">إنشاء جرد مخزون </a>
         <i class="fa-solid fa-plus"></i>
        </button>
        <button class="btn btn-primary mx-2">
            <a href="store-import.html" class="text-light"> استيراد جرد المخزون
            </a>
             <i class="fa-solid fa-plus"></i>
            </button>
    </div>
  <div class="container my-3 max-con">
    <div class="row">
      <div class="col-md-12 hi-mohasba">

          <h4 class="mx-4">جرد المخزون
        </h4>
        </div>

    </div>
    @if (count($Stocktaking) > 0)





    @else
    <div class="row pb-4 brdr">

     <div class="col-md-12 clients ">

        <div>
            <img src="{{ URL('images/store.svg') }}" style="width:250px; height:250px"  alt="">

            <h1 class="my-3">ليس لديك أي جرد مخزون
            </h1>
            <p class="text-secondary my-5">
                .يتيح لك محاسبه عمليات جرد المخزون التي تمكنك من زيادة كمية المنتجات التي تم الحصول عليها بدون تكلفة إو إنقاص المنتجات التالفة أو المستردة التي لا يمكن إعادة بيعها                            </p>
            <button class="btn btn-primary mx-2 ">
                <a href="{{route('Inventory.create')}}" class="text-light"
                >
                إنشاء جرد مخزون
             </a>
                <i class="fa-solid fa-plus"></i></button>

        </div>

     </div>

    </div>
    @endif
  </div>
</section>



</div>





</div>




@endsection
