@extends('layouts.vertical', ['title' => 'جرد المخزون'])
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">
                        <li><span class="text-dark ml-3">المخازن</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="clients.html">جرد المخزون</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="d-flex justify-content-sm-end mx-5">
                
                {{-- @endcan --}}
                <button class="btn btn-primary mx-2">
                    <a href="{{ route('Inventory.index') }}" class="text-light">
                      رجوع  
                    </a>
                    
                </button>

            </div>
            <div class="container my-3 max-con">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">جرد المخزون</h4>
                    </div>
                </div>
                @if (count($InventoryDetails) > 0)
                    <!--<div class="row pb-4 brdr">-->

                    <section class="row pb-4 brdr mt-5">

                            <div class="col-md-12">
                                <div class="responsive-table responsive-scroll">
                                    <table  class="table text-center">
                                        <thead class="table-head">
                                            <tr>

                                                <th scope="col">
                                                    {{ __('inventory.product') }}
                                                </th>
                                                <th scope="col">
                                                    {{ __('inventory.current_qty') }}
                                                </th>
                                                <th scope="col">
                                                    {{ __('inventory.actual_qty') }}
                                                </th>
                                                <th scope="col">
                                                    {{ __('inventory.troupes') }}
                                                </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($InventoryDetails as $InD )
                                                <tr >
                                                  <td class="mt-2">
                                                    {{ $InD->product->name_ar }}  
                                                  </td>
                                                  <td class="mt-2">
                                                    {{ $InD->current_qty }}  
                                                  </td>
                                                  <td class="mt-2">
                                                    {{ $InD->actual_qty }}  
                                                  </td>
                                                  <td class="mt-2">
                                                    {{ $InD->troupes }}  
                                                  </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>


                    </section>
                    <!--</div>-->
                @else
                    <div class="row pb-4 brdr">

                        <div class="col-md-12 clients ">

                            <div>
                                <img src="{{ URL('images/store.svg') }}" alt="">
                                <h1 class="my-3">ليس لديك أي جرد مخزون
                                </h1>
                                <p class="text-secondary my-5">
                                    .يتيح لك محاسبه عمليات جرد المخزون التي تمكنك من زيادة كمية المنتجات التي تم الحصول
                                    عليها بدون تكلفة
                                    إو إنقاص المنتجات التالفة أو المستردة التي لا يمكن إعادة بيعها </p>
                                <button class="btn btn-primary mx-2 ">
                                    <a href="{{ route('Inventory.create') }}" class="text-light">
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
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
@endsection
