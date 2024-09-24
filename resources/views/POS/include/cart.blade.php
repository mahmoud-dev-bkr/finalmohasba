<form action="{{ route('checkout.post') }}" method="post">
    @csrf
    <h1 class="text-primary text-center "> Cart</h1>
    @if (count($carts) > 0)
        <div class="p-2 w-100 scroll-y border-text " id="cart_items" style="height: 70vh; background-color: 14293c;">

            @foreach ($carts as $get)
                <div class="col-md-12 border ">
                    <div class=" w3-round  border-silder-outline p-2 w3-round-xlarge p-3">


                        <div class="p-1 pt-3">

                            <div class="d-flex mb-3">
                                <div class=" flex-grow-1">
                                    <h5 style="margin-top: -1px;">
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
                            <div class="d-flex mb-5" id="cart_count">
                                @php
                                    // GEt Unit in the products
                                    $productUnits = $get->product->prices;
                                    // dd($productUnits);
                                    // Get first unit in the product
                                    $first_prices = $productUnits->first();
                                    $count += 1;
                                    // dd($productUnits);
                                @endphp
                                <select name="test[{{ $count }}][uint_id]" class="form-select w-50 "
                                    onchange="resultPrice({{ $get->id }})" id="price_{{ $get->id }}">
                                    @foreach ($productUnits as $productUnit)
                                        <option value="{{ $productUnit->unit_id }}-{{ $productUnit->price }}-{{ $productUnit->site->id }}" {{ $get->uint_id == $productUnit->unit_id.'-'.$productUnit->price.'-'.$productUnit->site->id  ? 'selected' : '' }}>
                                            {{ $productUnit->unit->name }} / {{ $productUnit->price }} /
                                            {{ $productUnit->site->name_ar }}</option>
                                    @endforeach
                                </select>
                                <div class="d-flex ">
                                    <div class="border-count d-flex">
                                        <span class="p-2">
                                            <a class="none-border btn btn-fn btn-minus " data-id="{{ $get->id }}">
                                                -
                                            </a>
                                        </span>
                                        <span class="p-2 text-primary">
                                            <input type="text" class="form-custom-2 text-center"
                                                id="qun_product_{{ $get->id }}" value="1"
                                                onfocusout="result({{ $get->id }})" value="{{ $get->quantity }}" min="1"
                                                name="test[{{ $count }}][quantity]">
                                        </span>
                                        <span class="p-2 ">
                                            <a class="none-border btn btn-fn btn-plus" data-id="{{ $get->id }}">
                                                +
                                            </a>
                                        </span>
                                    </div>


                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-2 price-{{ $get->id }}" style="margin-top: -1px;">
                                    {{ $get->price }}</h5>
                                <span>SAR</span>
                                <input type="text" class="price-input-{{ $get->id }}"
                                    value="{{ $first_prices->price ?? ''}}" hidden name="test[{{ $count }}][price]">
                                <input type="text" value="{{ $get->product_id }}" hidden
                                    name="test[{{ $count }}][product_id]">
                                <input type="text" value="{{ $get->id }}" hidden
                                    name="test[{{ $count }}][id]">
                            </div>




                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="p-2 w-100 scroll-y border-text" id="cart_items" style="height: 70vh; background-color: 14293c;">
            <div class="text-white text-center">Empty Carts</div>
        </div>
    @endif
    <div class="p-2 w-100 scroll-y" id="cart_items" style="height: 20vh; background-color: #14293c;">
        <div class="d-flex justify-content-between">
            <div class="text-white">Total:</div>
            <div class="text-white"><span id="total">{{ $total ?? '0.0' }}</span> <span>SAR</span></div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary w-100">Checkout</button>
        </div>
    </div>
</form>
