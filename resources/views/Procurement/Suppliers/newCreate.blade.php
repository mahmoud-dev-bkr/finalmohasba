@extends('layouts.vertical', ['title' => 'اضافة مورد'])
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
<style>
#map { height: 50vh; }
.clint_ {
  width: 100%;
  border-collapse: collapse !important;
}
.clint_ th,.clint_ td {
    width: 25%;
    border: 2px solid #ddd;
    vertical-align: middle;
    padding: 10px 5px !important;
}
.clint_ th{
    text-align: right;
}
.clint2_ th,.clint2_ td {
  width: 33.33%;
}
.container-spans{
  float:left;
  text-align:right;
  overflow-y:scroll;
  max-width:60%;
}
</style>
<div class="container-fluid">

<section id="content-wrapper" class="content-header">
    <div class="row">

        <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

                <li><span class="text-dark ml-3">الرواتب</span></li>
                <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Supplier.index') }}">الموردين</a>
                </li>
                <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a >مورد جديد</a>
                </li>
            </ul>
        </div>



    </div>
</section>

<section>
  <div class="d-flex justify-content-sm-end mx-5">
      <button class="btn btn-primary mx-2"> <a href="{{ route('Supplier.index') }}" class="text-light">رجوع</a> <i
              class="fa-solid fa-plus"></i></button>

  </div>

  <form action="{{ route('Supplier.create.post') }}" method="post">
      @csrf
    <div class="container my-3">
        <div class="row">
            @if(session()->has('message'))
            {{dd('vbnm')}}
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="col-md-12 hi-mohasba">

                <h4 class="mx-4"> موردين</h4>
            </div>

        </div>
        <div class="row bg-light pb-4 brdr">

            <div class="col-md-12 clients d-flex align-content-center justify-content-start ">
              <div class="w-100">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                              data-bs-target="#home" type="button" role="tab" aria-controls="home"
                              aria-selected="true">معلومات المورد</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                              type="button" role="tab" aria-controls="profile" aria-selected="false">
                              المعلومات المالية والمواقع
                              </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                              type="button" role="tab" aria-controls="contact" aria-selected="false">ملفات
                              المورد</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="clint-tab" data-bs-toggle="tab" data-bs-target="#clint_map"
                              type="button" role="tab" aria-controls="clint" aria-selected="false">
                              موقع المورد
                              </button>
                      </li>
                  </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="container">
                              <div class="d-flex justify-content-start">
                                  <h4 class="text-primary my-5">
                                    معلومات المورد
                                  </h4>
                              </div>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_">
                                    <tbody>
                                      <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>
                                          <div class="row p-0 m-0">
                                            <div class="col-10 p-0 m-0">
                                              <input id="input_generate_number" type="text" name="code" value="" class="form-control" placeholder="" required>
                                            </div>
                                            <div class="col-2 p-0 m-0">
                                              <div id="btn_generate_number" class="btn btn-primary m-0">
                                                <i class="fas fa-sync"></i>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <th>اسم المنشاة</th>
                                        <td><input id="" type="" name="Facility" value="" class="form-control" placeholder=""></td>
                                      </tr>
                                      <tr>
                                        <th>الاسم العربي</th>
                                        <td><input id="name_ar" type="text" name="name" value="" class="form-control" placeholder="" required></td>
                                        <th>الاسم الانجليزي</th>
                                        <td><input id="name_en" type="text" name="name_en" value="" class="form-control" placeholder="" required></td>
                                      </tr>
                                      <tr>
                                        <th>رقم الهاتف</th>
                                        <td>
                                          <div class="d-flex justify-content-between">
                                            <input id="" type="number" name="phon" value="" class="form-control" placeholder=""  style="width:80%;">
                                            <select name="code_phon" id="" class="form-control" style="width:20%;">
                                              <option value="">+20</option>
                                              <option value="">+10</option>
                                              <option value="">+70</option>
                                            </select>
                                          </div>
                                        </td>
                                        <th>رقم الجوال</th>
                                        <td>
                                          <div class="d-flex justify-content-between">
                                            <input id="" type="number" name="phon2" value="" class="form-control" placeholder=""  style="width:80%;">
                                            <select name="code_phon" id="" class="form-control" style="width:20%;">
                                              <option value="">+20</option>
                                              <option value="">+10</option>
                                              <option value="">+70</option>
                                            </select>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>البريد الالكتروني</th>
                                        <td><input id="" type="email" name="email" value="" class="form-control" placeholder=""></td>
                                        <th>الموقع الالكتروني</th>
                                        <td><input id="" type="email" name="email2" value="" class="form-control" placeholder=""></td>
                                      </tr>
                                      <tr>
                                        <th>السجل التجاري</th>
                                        <td><input id="" type="number" name="Commercial_Record" value="" class="form-control" placeholder=""></td>
                                        <th>تاريخه</th>
                                        <td><input id="" type="date" name="Commercial_Record_data" value="" class="form-control" placeholder=""></td>
                                      </tr>
                                      <tr>
                                        <th>رقم البلدية</th>
                                        <td><input id="" type="number" name="Municipality_number" value="" class="form-control" placeholder=""></td>
                                        <th>تاريخه</th>
                                        <td><input id="" type="date" name="Municipality_number_data" value="" class="form-control" placeholder=""></td>
                                      </tr>
                                      <tr>
                                        <th>الرقم الضريبي</th>
                                        <td><input id="" type="number" name="Tex_Number" value="" class="form-control" placeholder=""></td>
                                        <th>تاريخه</th>
                                        <td><input id="" type="date" name="Tax_number_data" value="" class="form-control" placeholder=""></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                              <br>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_">
                                    <tbody>
                                      <tr>
                                        <th rowspan="2" style="text-align: center;">
                                          العنوان
                                        </th>
                                        <td><input id="" type="text" name="street_1" value="" class="form-control" placeholder="اسم الشارع"></td>
                                        <td><input id="" type="text" name="city_1" value="" class="form-control" placeholder="المدينة"></td>
                                        <td><input id="" type="text" name="st_1" value="" class="form-control" placeholder="المنطقة"></td>
                                      </tr>
                                      <tr>
                                        <td><input id="" type="number" name="zip_1" value="" class="form-control" placeholder="الرقم البريدي"></td>
                                        <td>
                                          <select id="country" name="cantry_1" class="form-control" required>
                                            <option value="">الدولة</option>
                                            <option value="sud">السعودية</option>
                                            <option value="Egy">مصر</option>
                                            <option value="Plis">فلسطين</option>
                                          </select>
                                        </td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                              <br>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_">
                                    <tbody>
                                      <tr>
                                        <th rowspan="3" style="text-align: center;">
                                          الحساب البنكي
                                        </th>
                                        <td><input id="" type="text" name="name1" value="" class="form-control" placeholder="اسم البنك"></td>
                                        <td><input id="" type="text" name="name_account1" value="" class="form-control" placeholder="اسم صاحب الحساب"></td>
                                        <td><input id="" type="text" name="country1" value="" class="form-control" placeholder="دولة الحساب"></td>
                                      </tr>
                                      <tr>
                                        <td><input id="" type="text"   name="currency1" value="" class="form-control" placeholder="العملة"></td>
                                        <td><input id="" type="number" name="number_statement1" value="" class="form-control" placeholder="الرقم البيان"></td>
                                        <td><input id="" type="number" name="number_account1" value="" class="form-control" placeholder="رقم الحساب"></td>
                                      </tr>
                                      <tr>
                                        <td><input id="" type="text" name="code1" value="" class="form-control" placeholder="سويفت كود"></td>
                                        <td><input id="" type="text" name="address1" value="" class="form-control" placeholder="عنوان البنك"></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_">
                                    <tbody>
                                      <tr>
                                        <th rowspan="3" style="text-align: center;">
                                            الحساب البنكي الاضافي
                                        </th>
                                        <td><input id="" type="text" name="name2" value="" class="form-control" placeholder="اسم البنك"></td>
                                        <td><input id="" type="text" name="name_account2" value="" class="form-control" placeholder="اسم صاحب الحساب"></td>
                                        <td><input id="" type="text" name="country2" value="" class="form-control" placeholder="دولة الحساب"></td>
                                      </tr>
                                      <tr>
                                        <td><input id="" type="text"   name="currency2" value="" class="form-control" placeholder="العملة"></td>
                                        <td><input id="" type="number" name="number_statement2" value="" class="form-control" placeholder="الرقم البيان"></td>
                                        <td><input id="" type="number" name="number_account2" value="" class="form-control" placeholder="رقم الحساب"></td>
                                      </tr>
                                      <tr>
                                        <td><input id="" type="text" name="code2" value="" class="form-control" placeholder="سويفت كود"></td>
                                        <td><input id="" type="text" name="address2" value="" class="form-control" placeholder="عنوان البنك"></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="container">
                              <div class="d-flex justify-content-start">
                                  <h4 class="text-primary my-5">المعلومات المالية والمواقع</h4>
                              </div>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_">
                                    <tbody>
                                      <tr>
                                        <th>عميل نقاط بيع</th>
                                        <td>
                                          <div class="d-flex align-content-center justify-content-center">
                                              <input type="checkbox" id="selling_points" checked />
                                              <input type="hidden" id="selling_points_value" value="true" name="pointsClient"/>
                                          </div>
                                        </td>
                                        <th>حالة العميل</th>
                                        <td>
                                          <div class="d-flex align-content-center justify-content-center">
                                              <input type="checkbox" id="clint_status" checked/>
                                              <input type="hidden"   id="clint_status_value" value="true" name="status"/>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>الموقع</th>
                                        <td>
                                          <select name="site_id" id="" class="form-control">
                                            <option value="0">جميع المواقع</option>
                                            @foreach($sites as $site)
                                                 <option value="{{ $site->id }}">{{ $site->name_ar }}</option>
                                            @endforeach
                                          </select>
                                        </td>
                                        <th>مندوب المبيعات</th>
                                        <td>
                                          <select name="salesperson_id" id="" class="form-control">
                                            <option value="0">جميع المناديب</option>
                                            @foreach($salespersons as $salesperson)
                                                <option value="{{ $salesperson->id }}">{{ $salesperson->name_ar }}</option>
                                            @endforeach
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>مجموعة العميل</th>
                                        <td>
                                          <select name="group_id" id="" class="form-control">
                                            <option value="1">تجاري</option>
                                            <option value="2">عادي</option>

                                          </select>
                                        </td>
                                        <th>تصنيف العميل</th>
                                        <td>
                                          <select name="client_classification_id" id="" class="form-control">
                                            <option value="1">فئه 1</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>نوعه</th>
                                        <td>
                                          <select name="type_mony" id="" class="form-control">
                                            <option value="1">نقدي</option>
                                            <option value="2">كريديت</option>

                                          </select>
                                        </td>
                                        <th>الحد الائتماني</th>
                                        <td>
                                          <input id="" type="text" name="credit_limit" value="0" class="form-control" placeholder="الحد الائتماني">
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>حافز</th>
                                        <td>
                                          <input id="" type="text" name="incentive" value="0" class="form-control" placeholder="حافز">
                                        </td>
                                        <th>العقود والحسومات</th>
                                        <td>
                                          <input id="" type="text" name="contracts_rebates" value="0" class="form-control" placeholder="العقود والحسومات">
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>نقاط المكافأة</th>
                                        <td>
                                          <input id="" type="text" name="reward_points" value="0" class="form-control" placeholder="نقاط المكافاه">
                                        </td>
                                        <th>حوافز اضافية</th>
                                        <td>
                                          <input id="" type="text" name="additional_lncentives" value="0" class="form-control" placeholder="حوافز اضافيه"
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <div class="container">
                              <div class="d-flex justify-content-start">
                                  <h4 class="text-primary my-5">ملفات العميل </h4>
                              </div>
                              <div class="responsive-scroll">
                                  <table class="table text-center clint_ clint2_">
                                    <tbody>
                                      <tr>
                                        <th>السجل التجاري</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file1"></span>
                                            <br/>
                                            <span id="s_file1"></span>
                                          </div>
                                          <label for="file1" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file1" name="file_Commercial_Record" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>رخصة البلدية</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file2"></span>
                                            <br/>
                                            <span id="s_file2"></span>
                                          </div>
                                          <label for="file2" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file2" name="file_Municipality_number" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>الرقم الضريبي</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file3"></span>
                                            <br/>
                                            <span id="s_file3"></span>
                                          </div>
                                          <label for="file3" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file3" name="file_tax_number" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>العنوان الوطني</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file4"></span>
                                            <br/>
                                            <span id="s_file4"></span>
                                          </div>
                                          <label for="file4" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file4" name="file_national_address" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>الحساب البنكي</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file5"></span>
                                            <br/>
                                            <span id="s_file5"></span>
                                          </div>
                                          <label for="file5" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file5" name="file_bank_account" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>الحد الائتماني</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file6"></span>
                                            <br/>
                                            <span id="s_file6"></span>
                                          </div>
                                          <label for="file6" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file6" name="file_credit_limit" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>العقود والحسومات</th>
                                        <td>
                                          <div class="container-spans">
                                            <span id="n_file7"></span>
                                            <br/>
                                            <span id="s_file7"></span>
                                          </div>
                                          <label for="file7" class="mt-3 ml-5 btn btn-primary"><i class="fa fa-upload"></i></label>️
                                          <input id="file7" name="file_contracts_rebates" type="file" class="d-none"/>
                                        </td>
                                        <td>
                                          <label class="mt-3 ml-5 btn btn-success">
                                          <i class="fa fa-download"></i></label>️
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="clint_map" role="tabpanel" aria-labelledby="clint-tab">
                          <div class="container">
                              <div class="d-flex justify-content-start">
                                  <h4 class="text-primary my-5">موقع العميل </h4>
                              </div>
                              <div class="row">
                                <div class="col-2">
                                  <button class="btn btn-info" id="searchButton">بحث</button>
                                </div>
                                <div class="col-10">
                                  <input class="form-control" type="text" id="searchField" placeholder="بحث عن مكان">
                                </div>
                              </div>
                              <div id="map"></div>
                              <input id="lat" type="hiddenn">
                              <input id="lng" type="hiddenn">
                          </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
    <div class="btn-holder">
        <button id="submit" class="btn btn-primary submit">حفظ</button>
    </div>
  </form>
</section>

@endsection

@section('script')
    <script type="module">
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 5,
          center: { lat: 2.8, lng: -187.3 },
          mapTypeId: "terrain",
        });

        const script = document.createElement("script");
        script.src = "https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js";
        document.getElementsByTagName("head")[0].appendChild(script);

        // إضافة سماعة لحدث النقر على الخريطة
        map.addListener("click", function(event) {
          document.getElementById("lat").value = event.latLng.lat();
          document.getElementById("lng").value = event.latLng.lng();
        });
      }

      const eqfeed_callback = function (results) {
        for (let i = 0; i < results.features.length; i++) {
          const coords = results.features[i].geometry.coordinates;
          const latLng = new google.maps.LatLng(coords[1], coords[0]);
          new google.maps.Marker({
            position: latLng,
            map: map,
          });
        }
      };

      window.initMap = initMap;
      window.eqfeed_callback = eqfeed_callback;

      document.addEventListener("DOMContentLoaded", function() {
        const searchButton = document.getElementById("searchButton");
        searchButton.addEventListener("click", searchLocation);
      });

      function searchLocation() {
        const inputText = document.getElementById("searchField").value;
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({ address: inputText }, function (results, status) {
          if (status === "OK") {
            map.setCenter(results[0].geometry.location);
            new google.maps.Marker({
              position: results[0].geometry.location,
              map: map,
            });
          } else {
            alert("Geocode was not successful for the following reason: " + status);
          }
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1WMDxHOR2PA6_Qxn2X-oxv4V3EP9pibo&callback=initMap" defer></script>
    <script>
    $(document).ready(function () {
      $('#submit').on('click', function () {
        // Check if the required field is filled
        if ($('#input_generate_number').val() === '' || $('#name_ar').val() === '' || $('#name_en').val() === '' || $('#country').val() === '' ) {
          // If not, set the first tab as active
          $('#home-tab').tab('show');
          // You can also display a message to the user or perform other actions
        }
      });
    });
  </script>
    <script>
      let statu1 = "false";
      let statu2 = "false";
      document.getElementById("clint_status").
      onchange=(event)=>{
        if(event.target.checked == true){
          statu1 = "true";
        }else{
          statu1 = "false";
        }
        document.getElementById("clint_status_value").value = statu1;
      }
      document.getElementById("selling_points").
      onchange=(event)=>{
        if(event.target.checked == true){
          statu2 = "true";
        }else{
          statu2 = "false";
        }
        document.getElementById("selling_points_value").value = statu2;
      }

      const arabicInput = document.getElementById('name_ar');
      const arabicTextRegex = /[\u0600-\u06FF\s]/;
      arabicInput.addEventListener('input', function() {
        if (!arabicTextRegex.test(arabicInput.value)) {
          alert('الرجاء إدخال حروف عربية فقط.');
          arabicInput.value = "";
        //  arabicInput.value = inputValue.replace(/[^\u0600-\u06FF\s]/g, '');
        }
      });
      const englishInput = document.getElementById('name_en');
      const englishOnlyRegex = /^[A-Za-z]/;
      englishInput.addEventListener('input', function() {
        if (!englishOnlyRegex.test(englishInput.value)) {
            alert("القيمة لا تحتوي على حروف إنجليزية فقط");
            englishInput.value = "";
        }
      });
    </script>
    <script>
      function generateRandomNumber() {
        let randomNumber = '';
        for (let i = 0; i < 9; i++) {
          randomNumber += Math.floor(Math.random() * 10);
        }
        return randomNumber;
      }
      document.getElementById("btn_generate_number").onclick=()=>{
        const randomNumber = generateRandomNumber();
        document.getElementById("input_generate_number").value = "Cli-"+randomNumber;
      }
    </script>
    <script>
      function filesShowData(fileId,span1,span2){
        fileId.addEventListener('change', function() {
          let file = this.files[0];
          span1.textContent = ` ${file.name}`;
          span2.textContent = `[${formatBytes(file.size)}]`;
        });
      }
      filesShowData(file1,n_file1,s_file1);
      filesShowData(file2,n_file2,s_file2);
      filesShowData(file3,n_file3,s_file3);
      filesShowData(file4,n_file4,s_file4);
      filesShowData(file5,n_file5,s_file5);
      filesShowData(file6,n_file6,s_file6);
      filesShowData(file7,n_file7,s_file7);
      function formatBytes(bytes, decimals = 2) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const dm = decimals < 0 ? 0 : decimals;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
      }
    </script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection

