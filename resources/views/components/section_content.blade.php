<section>
   <div class="d-flex justify-content-sm-end mx-5">
        <button class="btn btn-primary mx-2"> <a href="{{ route('Product.create.item') }}" class="text-light"> انشاء صنف</a> <i
            class="fa-solid fa-plus"></i></button>
    </div>
   <div class="d-flex justify-content-sm-end mx-5">
       <div class="container my-3 max-con">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">{{ $title_page="" }}</h4>
                </div>
            </div>
            {{ $slot }}
        </div>
   </div>
</section>