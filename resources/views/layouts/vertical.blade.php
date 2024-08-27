<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >

<head>
    @include('layouts.shared.title-meta', ['title' => $title])
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('layouts.shared.head-css')
    {{-- @include('layouts.shared/head-css', ["demo" => "modern"]) --}}
    <style>

        body{
            /* direction: rtl; */
            font-family:cairo,sans-serif;
        }
        .responsive-scroll{
          overflow-x: scroll;
        }
        /*.client-form input,select,button*/
        /*{*/
        /*    height: 30px;*/
        /*}*/

        /*.client-form button*/
        /*{*/
        /*    font-size: 14px !important;*/
        /* } */

        .b2
        {
            background-color: #14293C;
        }

        select
        {
            font-size: 12px !important;
            color: gray !important;
        }

        .client-form input::placeholder
        {
            font-size: small;
            color: gray;

        }

        .table-head
        {
        width: 100%;
        height: 55px;
        background-color: #E8F0F2;
        color: #1B97DF;
        border-radius: 5px 5px 0 0;

        }

        .text-center ul
        {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-center li
        {
            margin: 0 10px;
            color: gray;
        }
        
        .dt-buttons {
            display: none;
        }
        /*.dataTables_length {*/
        /*    display: none;*/
        /*}*/
        #ClientsTable_filter {
            display: none;
        }
        .dataTables_filter {
         
          display: inline-flex !important;
          margin-top: -21px !important;
          padding-bottom: -8px !important;
          padding-right: 7px !important;
          
        }
        
        .dataTables_length {
          display: inline-flex !important;
          margin-top: -21px !important;
          padding-bottom: -8px !important;
          padding-right: 7px !important;
        }   
        select {
          appearance: none;
          -webkit-appearance: none;
          -moz-appearance: none;
          background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6"><polygon points="6,6 0,0 12,0" style="fill:%23000"/></svg>') no-repeat;
          padding: 8px 24px 8px 36px;
          border: 1px solid #ccc;
          border-radius: 4px;
          width: 200px;
          background-size: 12px;
          background-position: 8px center;
        }
        table {
            width: 100%!important
        }
    </style>
</head>

<body lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- Begin page -->
    <div id="wrapper" >
        @include('layouts.shared.left-sidebar')
        @include('layouts.shared/topbar')



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->


            <div class="content max-con"  lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                @yield('content')
            </div>
            <!-- content -->

            @include('layouts.shared/_session')


            @include('layouts.shared/footer')
    </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    <!-- END wrapper -->

    @include('layouts.shared.right-sidebar')



    @include('layouts.shared.footer-script')


    <script>
        $(document).ready(function() {
            $('.loader').fadeOut(500, function() {
                $('.overlay-loader').fadeOut(function() {
                    $(this).remove();
                });
            });
        });

    </script>
</body>

</html>
