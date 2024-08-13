@extends('layouts.vertical', ['title' => 'اهلاك جديد'])
@section('content')
<div class="container-fluid">
<section id="content-wrapper" class="content-header">
    <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

                <li><span  class="text-dark ml-3"> الأصول الثابتة</span></li>
                <li class="text-dark">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="dropping.html">  الاهلاك</a>
                </li>
                <li class="text-primary">
                  <i class="fa fa-angle-double-left mx-2 "></i><a href="add-dropping.html"> إهلاك جديد</a>
                  </li>
                </ul>
          </div>



    </div>
</section>


<section>
    <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href="{{ route('drop.index') }}" class="text-light"> رجوع</a> </button>
        </div>
  <div class="container my-3">
    <div class="row">
      <div class="col-md-12 hi-mohasba">

          <h4 class="mx-4"> إهلاك جديد</h4>
        </div>

    </div>
    <div class="row bg-light pb-4 brdr">

     <div class="col-md-12 clients ">

      <div class="container-fluid main-bg">


        <!-- Responsive Arrow Progress Bar -->
        <div class="arrow-steps clearfix">
          <div class="step current"> <span> <a href="#" > اختر نوع الإهلاك</a></span> </div>
          <div class="step"> <span><a href="#" >املا التفاصيل</a></span> </div>
          <div class="step d-none"> <span><a href="#" ></a></span> </div>

        </div>
      </div>




     </div>

     <h3 class="text-center"> اختر نوع الإهلاك</h3>

     <div class="row my-5 text-center px-5 ">

       <div class="col-md-12">


         <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="يسمح لك الإهلاك المرحل باختيار تصنيف الأصل والأصل ليتم تسجيل الإهلاك وحسابه بشكل تلقائي">
          <a href="{{ route('drop.create') }}" class="text-dark">
         <div class="product-item">
          <div>
            <img src=" {{ URL('images/product_product.svg') }}" alt="">

          </div>
          <div><p>إهلاك مسجل</p></div>
        </div>
          </a>
      </button>

      </div>










     </div>

    </div>
  </div>
</section>



</div>





</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

@endsection
