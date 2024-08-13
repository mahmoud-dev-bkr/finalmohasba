@extends('POS.layout.app')
@section('content')
    <section class="body-cart">
        <div class="row">
            <div class="col-md-12 p-3  bg-nav">
                <div class="row m-0">
                    <div class="col-md-2 p-2 border-text">
                        <h1 class="text-white ms-5"> <span class="text-primary ">Category</span></h1>
                    </div>
                    <div class="col-md-10 p-2 d-flex scroll-x" style="background-color: white;">
                        
                        @foreach ($categories as $get)
                            <div class="btn btn-primary ms-5 rounded p-3 ms-2 none-border text-white get-product"
                                data-id="{{ $get->id }}">
                                {{ $get->name }}</div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="col-md-12 p-3 mb-5 bg-nav">
                <div class="row  m-0" style="height: 100vh;">
                    <div class="col-md-8 p-2 border-text scroll-y" style="height: 100vh;">
                        <h1 class="text-white ms-5"> <span class="text-primary">Product</span></h1>
                        <div class="row m-0 porducts">


                            @include('POS.include.products', ['products' => $products])


                        </div>
                    </div>
                    <div class="col-md-4 p-2  scroll-x  border-text carts">
                        @include('POS.include.cart', ['carts' => $carts, 'count' => 0])
                    </div>
                </div>
            </div>
        </div>
        </div>
        @include('pos.layout.menu-footer-bar')


    </section>
@endsection

@section('script')
    <script>
        $(document).on('click', '.get-product', function(e) {
            e.preventDefault();
            var This = $(this);
            var products = $('.porducts');
            products.empty();
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('get.product.pos') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function(data) {
                    // console.log(data);
                    products.append(data.products);
                }
            });
        });
        $(document).on('click', '.add-product', function(e) {
            e.preventDefault();
            var This = $(this);
            var carts = $('.carts');
            var total = $('#total');
            // alert(total.)
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('add.cart.pos') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    product_id: id
                },
                success: function(data) {
                    // console.log(data);
                    
                    carts.html(data.carts);
                    
                }
            });
        });
        // removecar

        $(document).on('click', '.remove-product', function(e) {
            e.preventDefault();
            var This = $(this);
            var carts = $('.carts');
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('remove.cart.pos') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function(data) {
                    carts.html(data.carts);
                }
            });
        });

        function resultPrice(id) {

            var price = $('#price_' + id).val();
            var price = price.split("-");
            var count = $('#qun_product_' + id).val();

            var result = price[1] * count;
            $('.price-' + id).text(result);
            $('.price-input-' + id).val(result);
        }

        function result(id) {

            var price = $('#price_' + id).val();
            var price = price.split("-");
            console.log(price[1]);
            var count = $('#qun_product_' + id).val();
            var result = price[1] * count;
            $('.price-' + id).text(result);
            $('.price-input-' + id).val(result);
        }
        $(document).on('click', '.btn-plus', function(e) {
            e.preventDefault();
            var This = $(this);
            var id = $(this).data('id');
            var price = $('#price_' + id).val();
            var price = price.split("-");
            var count = $('#qun_product_' + id).val();
            count++;
            $('#qun_product_' + id).val(count);
            var result = price[1] * count;
            $('.price-' + id).text(result);
            $('.price-input-' + id).val(result);

        });

        $(document).on('click', '.btn-minus', function(e) {
            e.preventDefault();
            var This = $(this);
            var id = $(this).data('id');
            var price = $('#price_' + id).val();
            var price = price.split("-");
            var count = $('#qun_product_' + id).val();
            if (count > 1) {
                count--;
                $('#qun_product_' + id).val(count);
                var result = price[1] * count;
                $('.price-' + id).text(result);
                $('.price-input-' + id).val(result);
            }
        });
    </script>
@endsection
