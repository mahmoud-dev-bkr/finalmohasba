@extends('layouts.vertical', ['title' => 'الاعدادات'])

@section('css')
    <link rel="stylesheet" href="{{ asset('Croppie/croppie.css') }}">
    <style>
        .tabs-setting .nav-tabs>li a {
            color: #ffffff !important;
            background-color: #14293C;
        }

        .tabs-setting .nav-tabs>li .active {
            color: #ffffff;
            background-color: #036C9C;
        }

        .tabs-setting .nav-tabs>li a:hover {
            color: #ffffff;
            background-color: #036C9C;
        }

        .croppie-container .cr-boundary {
            /* margin: unset !important; */
            border-radius: 50%;
        }

        .croppie-container .cr-slider-wrap {
            width: 16%;
            margin: unset !important;
            display: none !important;
        }
    </style>
@endsection

@section('content')
    <div class=" mt-5 mb-5 tabs-setting">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt-2" role="tablist" style="justify-content: unset">
            <li class="nav-item border" role="presentation">
                <a style="color: #32355D;" class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true"
                    role="tab">{{ __('basic.settings_main') }}</a>
            </li>
            <li class="nav-item border" role="presentation">
                <a style="color: #32355D;" class="nav-link" data-bs-toggle="tab" href="#menu1" aria-selected="false"
                    role="tab" tabindex="-1">{{ __('basic.settings_main') }}</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class=" tab-content mt-5">
            <div id="home" class=" container tab-pane active show" role="tabpanel"><br>
                <h2 style="color:#1B97DF;text-align: center">{{ __('basic.settings_main') }}</h2>
                <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="text-center col-md-12">
                            <label for="upload-demo" class="btn btn-primary mb-2 mt-2">Upload Image</label>
                            <input type="file" id="upload-demo" hidden name="logo">
                            <div id="upload-demo-container"></div>

                            @if ($settings->logo != null)
                                <!-- Hidden input to store the old image URL -->
                                <input type="hidden" id="old-image" value="{{ asset($settings->logo) }}">
                            @endif
                        </div>
                        <br><br>
                        <div class="clear"></div>
                        <br><br>
                        <div class="col-md-4">
                            <label for="company_name" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_name') }}
                            </label>
                            <input type="text" class="form-control" id="company_name" name="company_name"
                                value="{{ $settings->company_name }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_email" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_email') }}
                            </label>
                            <input type="text" class="form-control" id="company_email" name="company_email"
                                value="{{ $settings->company_email }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_phone" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_phone') }}
                            </label>
                            <input type="text" class="form-control" id="company_phone" name="company_phone"
                                value="{{ $settings->company_phone }}">
                        </div>

                        <div class="col-md-4">
                            <label for="company_street" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_street') }}
                            </label>
                            <input type="text" class="form-control" id="company_street" name="company_street"
                                value="{{ $settings->company_street }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_city" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_city') }}
                            </label>
                            <input type="text" class="form-control" id="company_city" name="company_city"
                                value="{{ $settings->company_city }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_state" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_state') }}
                            </label>
                            <input type="text" class="form-control" id="company_state" name="company_state"
                                value="{{ $settings->company_state }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_zip" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_zip') }}
                            </label>
                            <input type="text" class="form-control" id="company_zip" name="company_zip"
                                value="{{ $settings->company_zip }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_country" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_country') }}
                            </label>
                            <input type="text" class="form-control" id="company_country" name="company_country"
                                value="{{ $settings->company_country }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_area" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_area') }}
                            </label>
                            <input type="text" class="form-control" id="company_area" name="company_area"
                                value="{{ $settings->company_area }}">
                        </div>
                        <div class="col-md-4">
                            <label for="company_tax_number" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.company_tax_number') }}
                            </label>
                            <input type="text" class="form-control" id="company_tax_number" name="company_tax_number"
                                value="{{ $settings->company_tax_number }}">
                        </div>
                        <div class="col-md-4">
                            <label for="due_date_tax" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.due_date_tax') }}
                            </label>
                            <input type="number" class="form-control" id="due_date_tax" name="due_date_tax"
                                value="{{ $settings->due_date_tax }}">
                        </div>
                        <div class="col-md-4">
                            <label for="account_closing_date" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.account_closing_date') }}
                            </label>
                            <input type="date" class="form-control" id="account_closing_date"
                                name="account_closing_date" value="{{ $settings->account_closing_date }}">
                        </div>
                        <div class="col-md-6  text-center">
                            <label for="day_fiscal_year_start" class="mb-2 mt-2">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.day_fiscal_year_start') }}
                            </label>
                            <select name="day_fiscal_year_start" id="" class=" form-select  form-select-lg">
                                @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}"
                                        {{ $settings->day_fiscal_year_start == $i ? 'selected' : '' }}>{{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-6 text-center">
                            <label for="month_fiscal_year_start" class="mb-2 mt-2 ">
                                <i class="ri-user-3-line align-middle me-1"></i> {{ __('basic.month_fiscal_year_start') }}
                            </label>
                            <select name="month_fiscal_year_start" id=""
                                class="form-control form-select  form-select-lg">
                                @foreach ($months as $key => $value)
                                    <option value="{{ $loop->index + 1 }}" {{ $settings->month_fiscal_year_start == $loop->index + 1 ? 'selected' : '' }}>
                                        {{ __('basic.' . $value ) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="m-auto text-center col-md-12 mt-5">
                            <button class="btn btn-primary submit">حفظ </button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="menu1" class="container tab-pane fade" role="tabpanel"><br>
                <p class="text-muted">Menu 2</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json"></script>
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Croppie/croppie.js') }}"></script>
    <script>
        $(document).ready(function() {
            var $uploadCrop = $('#upload-demo-container').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'zoom-square' // Use 'circle' for circular cropping or 'square' for square cropping
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });

            // Check if an old image exists
            var oldImage = $('#old-image').val();
            if (oldImage) {
                // Bind the old image to the Croppie instance
                $uploadCrop.croppie('bind', {
                    url: oldImage
                }).then(function() {
                    console.log('Old image bound to Croppie');
                });
            }

            // Handle file input change
            $('#upload-demo').on('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function() {
                        console.log('New image bound to Croppie');
                    });
                };
                reader.readAsDataURL(this.files[0]);
            });

            // Handle form submission

        });
    </script>
@endsection
