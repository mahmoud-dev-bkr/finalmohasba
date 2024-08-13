@extends('layouts.vertical', ['title' => 'الميزانية العمومية'])
@section('bootstrap')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Multiselect CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/css/bootstrap-multiselect.css">
    <style>
        .multiselect-native-select {
            width: 50% !important;
        }

        .multiselect-search {
            width: 90% !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">

                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">

                        <li><span class="text-dark ml-3">التقارير</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="accounts-tree.html">الميزانية العمومية</a>
                        </li>
                    </ul>
                </div>



            </div>
        </section>


        <section>
            <div class="container my-3">
                <form action="{{ route('reports.report3') }}" method="get">
                    <div class="row">
                        <div class="col-md-12 hi-reports1">

                            <div class="col-md-8 py-4 main-reports">

                                <div class="d-flex justify-content-start product-form">

                                    <select class="form-control mx-2 w-25" name="date" id="">
                                        <optgroup>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>



                                        </optgroup>
                                    </select>

                                    <input class="form-control w-25 mx-2" type="date" name="start_date" placeholder=" من">
                                    <input class="form-control w-25 mx-2" type="date" name="end_date" placeholder=" الي">






                                </div>

                                <div class="d-flex align-items-center justify-content-start mt-4 col-md-6">
                                    <select class="form-control edit-input mx-2 w-50" multiple name="sites[]"
                                        id="sites_ids">
                                        <optgroup>
                                            @foreach ($sites as $site)
                                                <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>

                                    <select class="form-control edit-input mx-2 w-50" name="quarterNumber" id="">
                                        <optgroup>
                                            <option value="">مقارنة بالفترات</option>
                                            <option value="1">الربع الاول</option>
                                            <option value="2">الربع الثاني</option>
                                            <option value="3">الربع الثالث</option>
                                            <option value="4">الربع الرابع</option>                         
                                        </optgroup>
                                    </select>

                                </div>

                                <div class="col-md-6 py-3 d-flex align-items-center justify-content-start ">

                                    <select class="form-control edit-input mx-2 w-50" name="" id="">
                                        <optgroup>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>

                                        </optgroup>
                                    </select>

                                    <input class="form-control be-small edit-input w-50 mx-2" type="text"
                                        placeholder=" الحد الادني">

                                    <input class="form-control be-small edit-input w-50 mx-2" type="text"
                                        placeholder=" الحد الاعلي">


                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-primary pc mx-1" type="submit"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                    <a href="{{ route('reports.report3') }}" class="btn btn-dark pc mx-1 b2"><i
                                            class="fa-solid fa-arrow-rotate-left"></i></a>

                                </div>

                            </div>

                            <div class="col-md-4 py-4">

                                <div
                                    class="form-check form-switch form-switch-lg d-flex align-items-center justify-content-start">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label mx-5 fw-bold mt-1" for="flexSwitchCheckChecked">تحليل
                                        متقدم</label>
                                </div>

                                <div
                                    class="form-check form-switch form-switch-lg d-flex align-items-center justify-content-start">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label mx-5 fw-bold mt-1"
                                        for="flexSwitchCheckChecked">فحص</label>
                                </div>

                            </div>

                        </div>

                    </div>
                </form>
                <div class="row  pb-4 brdr">

                    <div class="col-md-12">
                        <div class="w-100 my-5 table-responsive-lg responsive-scroll">
                            <h3 class="text-center">الميزانية العمومية </h3>
                            <h6 class="text-center my-3">اسم الشركة</h6>
                            <p class="text-center">من 2023-01-01 إلى 2023-03-31</p>


                            <table class="table  table-hover">
                                <thead class="cf">
                                    <tr>
                                        <th colspan="8">&nbsp;</th>
                                        @if (count($sitesfilter) > 0)
                                            @foreach ($sitesfilter as $sfilter)
                                                <th>
                                                    {{ $sfilter->name_ar }}
                                                </th>
                                            @endforeach
                                        @else
                                            <th>
                                                2023-07-31
                                            </th>
                                        @endif

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Accounts as $item)
                                        
                                            <tr>
                                                <td class="padleftindex-1" colspan="8">
                                                    {{ $item->name }}
                                                </td>
                                                
                                                @if (count($sitesfilter) > 0)
                                                        @foreach ($sitesfilter as $sfilter)
                                                        <td class="account-kind">
                                                            
                                                        </td>
                                                        @endforeach
                                                    @else
                                                    <td class="account-kind">
                                                        
                                                    </td>
                                                    @endif
                                                @if (count($item->children) > 0)
                                                    @include('Reports.Report3.sub_account_list', [
                                                        'childs' => $item->children,
                                                        'level' => $item->level + 1,
                                                        'parentAccount' => $item,
                                                        'sitesfilter' => $sitesfilter,
                                                        'sumAmontMove' => 0,
                                                        'startquartertDate'  => $startquartertDate,
                                                        'endquarterDate'  => $endquarterDate,
                                                    ])
                                                @endif
                                            </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                        <div class="d-flex align-items-center justify-content-end my-3">

                            <button class="btn btn-primary submit ">تصدير</button>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ URL('js/main.js') }}"></script>
    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Multiselect JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/js/bootstrap-multiselect.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#sites_ids').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true,
                buttonWidth: '100%'
            });
        });
    </script>
@endsection
