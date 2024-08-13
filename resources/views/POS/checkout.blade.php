@extends('POS.layout.app')
@section('content')
    <section class="body-cart ">

        <div class="row  m-0 bg bg-nav" >

            <div class="col-md-6 p-2  scroll-x  border-text carts" style="margin: auto">
                <h1 class="text-primary text-center "> Check Out</h1>
                <form action="" method="post">

                    <div class="p-2 w-100 scroll-y border-text " id="cart_items"
                        style="height: 70vh; background-color: #14293c;">




                    </div>
                    <div class="p-2 w-100 scroll-y" id="cart_items" style=" background-color: #14293c;">
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-white">Paid:</div>
                            <div class="text-white">
                                <input type="text" class="text-center paid" onchange="totalPaid()" value="0.0">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-white">Total:</div>
                            <div class="text-white"><span id="total">{{ $total ?? '0.0' }}</span>
                                <span>SAR</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-white">Total after:</div>
                            <div class="text-white"><span id="total_after">{{ $total ?? '0.0' }}</span>
                                <span>SAR</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('checkout.view.pos') }}" class="btn btn-primary w-100">Checkout</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        </div>

        @include('pos.layout.menu-footer-bar')


    </section>
@endsection
@section('script')
    <script>
        let id = 0;
        let counter = 0;
        let sumVal = 0;
        var Total_value = [];
        document.addEventListener("DOMContentLoaded", function() {

            @foreach ($carts as $get)
                // new
                counter += 1
                var row = '';
                row += `
                        <div class="col-md-12 border">
                            <div class=" w3-round  border-silder-outline p-2 w3-round-xlarge p-3">


                                <div class="p-1 pt-3">

                                    <div class="d-flex mb-3">
                                        <div class=" flex-grow-1">
                                            <h5>
                                                <b>{{ $get->product->name_ar }}</b>

                                            </h5>

                                        </div>

                                        <div class="flex-shrink-0 remove-product btn" data-id="{{ $get->id }}"
                                            style="">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="20" cy="20" r="20" fill="#1B97DF" />
                                                <path
                                                    d="M15.615 28C15.155 28 14.771 27.846 14.463 27.538C14.1543 27.2293 14 26.845 14 26.385V14H13V13H17V12.23H23V13H27V14H26V26.385C26 26.845 25.846 27.229 25.538 27.537C25.2293 27.8456 24.845 28 24.385 28H15.615ZM17.808 25H18.808V16H17.808V25ZM21.192 25H22.192V16H21.192V25Z"
                                                    fill="white" />
                                            </svg>
                                        </div>

                                    </div>
                                    <div class=" mb-5" style="100%">
                                        @php
                                            // GEt Unit in the products
                                            $productUnits = $get->product->prices;
                                            // Get first unit in the product
                                            $first_prices = $productUnits->first();
                                            // dd($productUnits);
                                            $count += 1;
                                        @endphp
                                        <select name="test[{{ $count }}][uint_id]" class="form-select text-center"
                                            onchange="resultPrice(${id})" id="price_${id}">
                                            @foreach ($productUnits as $productUnit)
                                                <option value="{{ $productUnit->unit_id }}-{{ $productUnit->price }}-{{ $productUnit->site->id }}" {{ $get->uint_id == $productUnit->unit_id.'-'.$productUnit->price.'-'.$productUnit->site->id  ? 'selected' : '' }}>
                                                    {{ $productUnit->unit->name }} /
                                                    {{ $productUnit->price }} /
                                                    {{ $productUnit->site->name_ar }}</option>
                                            @endforeach
                                        </select>
                                        <div class="mt-5">
                                            <div class="border-count">
                                                <div class="d-flex justify-content-between">

                                                    <div class="p-2">
                                                        <a class="none-border btn btn-fn btn-minus "
                                                            data-id="${id}">
                                                            -
                                                            <input id="cart" type="text" value="{{ $get->id }}" style="display: none;">
                                                        </a>
                                                    </div>
                                                    <input type="text" class="form-custom-2 text-center mt-1"
                                                        id="qun_product_${id}" value="{{ $get->quantity }}" min="1"
                                                        onfocusout="result(${id})" 
                                                        min="1"
                                                        style="width: 100%; border-radius: 10px;height: 40px;"
                                                        name="test[{{ $count }}][quantity]">
                                                    <div class="p-2 ">
                                                        <a class="none-border btn btn-fn btn-plus"
                                                            data-id="${id}">
                                                            +
                                                            
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-2 price-${id}" style="margin-top: -1px;">
                                            {{ $get->price }}</h5>
                                        <span>SAR</span>
                                        <input type="text" class="price-input-{${id}}"
                                            value="{{ $get->price }}" hidden name="test[{{ $count }}][price]">
                                        <input type="text" value="{{ $get->product_id }}" hidden
                                            name="test[{{ $count }}][product_id]">
                                        <input type="text" value="{{ $get->id }}" hidden
                                            name="test[{{ $count }}][id]">
                                    </div>
                                </div>
                            </div>
                        </div>`;


                $("#cart_items").append(row);

                Total_value[id] = {{ $get->price }};
                //   result(id);
                //   getSum();
                id += 1;
            @endforeach
            getSum();

        });
        

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
            Total_value[id] = result;
            getSum();
        }

        function result(id) {

            var price = $('#price_' + id).val();
            var price = price.split("-");
            console.log(price[1]);
            var count = $('#qun_product_' + id).val();
            var result = price[1] * count;
            $('.price-' + id).text(result);
            Total_value[id] = result;
            getSum();
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
            Total_value[id] = result;
            getSum();

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
                Total_value[id] = result;
                getSum();
            }
        });
        function getSum() {
        for (let index = 0; index < Total_value.length; index++) {
            sumVal += Total_value[index];
            
            console.log(sumVal);
            console.log('-------------------');
        }
        $('#total').text(sumVal)
        sumVal = 0
    }
    function totalPaid() 
    {
        var paid = $('.paid').val();
        var total = $('#total').text();
        $('#total_after').text(total - paid);
    }
    </script>
@endsection
