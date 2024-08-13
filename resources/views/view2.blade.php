<!doctype html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test View</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/intlTelInput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
      .iti{
        width: 100% !important; 
      }
      .sign-up form{
        padding: 70px;
      }
      .banner1,.banner2{
        color: #fff;
        background: #224189;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .banner1 div,.banner2 div{
        width: 100%;
      }
      @media (min-width: 992px){
        .banner1{
          display: none;
        }
        .sign-up-container{
          display: flex;
        }
        .banner2{
          height: auto;
          width: 40%;
        }
      }
      @media (max-width: 991px){
        .banner2{
          display: none;
        }
        .banner1{
          display: block;
          display: flex;
        }
      }
      body{
          direction: rtl;
      }
      .responsive-scroll{
        overflow-x: scroll;
      }
      .iti__flag {
        background-image: url("{{ asset('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/img/flags@2x.png') }}");
      }
      </style>  
</head>
<body style="background:#e6ecee;">
    <div class="container-fluid">
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <section>

            <div class=" pt-5">

              <div class="sign-up">
                <div class="bg-light sign-up-container p-0">
                  <div class="banner1 m-0">
                    <div class="container">
                      <h2> ابدأ تجربتك المجانية لمدة 14 يوم</h2>
                      <p> انضم إلى آلاف المنشآت التي تثق بمحاسبة</p>
                    </div>
                  </div>
                  <div class="banner2 m-0">
                    <div class="container">
                      <h4> ابدأ تجربتك المجانية لمدة 14 يوم</h4>
                      <p> انضم إلى آلاف المنشآت التي تثق بمحاسبة</p>
                    </div>
                  </div>
                  <div class="container">
                    <form method="post">
                      <h4 >أنشئ حساب جديد</h4>
                      <div class="fields-wrap">
                        <input class="form-control mx-1 my-4" placeholder="الاسم الأول" type="text" name="user[first_name]" id="user_first_name" />
                      </div>
                      <div class="fields-wrap">
                        <input class="form-control mx-1 my-4" placeholder="اسم العائلة" type="text" name="user[last_name]" id="user_last_name" />
                      </div>
                      <div class="fields-wrap" dir="rtl">
                        <input class="form-control mx-1 my-4" type="tel" id="phone" />
                      </div>
                      <div class="fields-wrap">
                        <input class="form-control mx-1 my-4" placeholder="البريد الإلكتروني" type="email" value name="user[email]" id="user_email" />
                      </div>
                      <div class="fields-wrap">
                        <input class="form-control mx-1 my-4" type="text" name="organization_name" id="organization_name" value placeholder="اسم المنشأة" />
                      </div>
                      <div class="fields-wrap">
                        <select class="form-control mx-1 my-4" name="organization_creator" id="orgnization_roll" style="margin:0px" class="select"><option disabled="disabled" selected="selected" hidden="hidden" value>دورك في المنشأة</option>
                          <option value="owner">صاحب العمل</option>
                          <option value="bookkeeper">مسؤول الحسابات</option>
                          <option value="accountant">محاسب</option>
                          <option value="sales">ممثل مبيعات</option>
                          <option value="employee">موظف</option>
                          <option value="other">أخرى</option>
                        </select>
                      </div>
                      <div class="fields-wrap">
                        <select class="form-control mx-1 my-4" name="organization_industry" id="organization_industry" style="margin:0px" class="select"><option value>قطاع المنشأة</option>
                          <option value="construction_building">البناء والتشييد (مقاولات)</option>
                          <option value="retail_trade_&amp;_e_commerce_non_food">قطاع التجزئة والتجارة الإلكترونية (غير الغذائية)</option>
                          <option value="whole_Trade">قطاع الجملة</option>
                          <option value="food_and_beverage">الأغذية والمشروبات</option>
                          <option value="rental_&amp;_Hiring_services_no_real_estate">خدمات الإيجار (غير العقارات)</option>
                          <option value="administrative_and_support_services">الخدمات الإدارية والدعم</option>
                          <option value="manufacturing">التصنيع</option>
                          <option value="agriculture_forestry_and_fishing">القطاع الزراعي وتربية المواشي</option>
                          <option value="logistics_transportation_and_storage">الخدمات اللوجستية والنقل والتخزين</option>
                          <option value="professional_services">الخدمات المهنية</option>
                          <option value="repair_and_maintenance_automotive_&amp;_property">إصلاح وصيانة (السيارات والعقارات)</option>
                          <option value="education_and_training">التعليم والتدريب</option>
                          <option value="property_operation_and_real_estate_services">الخدمات العقارية</option>
                          <option value="technology_telecommunications_service">تكنولوجيا / خدمات الاتصالات</option>
                          <option value="accommodation_and_food_service">خدمات الإعاشة والإقامة</option>
                          <option value="arts_entertainment_and_recreation_service">الضيافة والترفية</option>
                          <option value="financial_service_&amp;_insurance">الخدمات المالية والتأمين</option>
                          <option value="media_and_publishing_and_distribution">الإعلام والنشر والتوزيع</option>
                          <option value="other">أخرى</option>
                      </select>
                      </div>
                      <div class="fields-wrap">
                        <select class="form-control mx-1 my-4" name="organization_size" id="organizations_size" style="margin:0px" class="select"><option value>حجم المنشأة</option>
                          <option value="(1-5) employees">(5-1) موظفين</option>
                          <option value="(6-50) employees">(50-6) موظف</option>
                          <option value="(51-250) employees">(250-51) موظف</option>
                          <option value="(251-500) employees">(500-251) موظف</option>
                          <option value="more than 500 employees">أكثر من 500 موظفًا</option>
                        </select>
                      </div>
                      <div class="tcpp-wrap">
                        <input type="checkbox" id="tc-pp" class="free-trial-checkbox" name="status" /><label class="bla"><span class="ft-checkbox"></span></label>
                        <span class="tc agreement-statement ">
                        <span class="read-and-agree">لقد قرأت ووافقت على</span>
                        <span><a href="#" target="_blank"> أحكام وشروط الاستخدام</a></span>
                        و
                        <span class="site_primary_color"><a href="#" target="_blank" rel="noopener"> سياسة الخصوصية</a></span>
                        </span>
                      </div>
                      <div class="free-trial-submit-btn">
                        <input  class="my-4 btn btn-primary text-white w-100" style="background: #224189 !important;" type="submit" value="ابدأ اﻵن" />
                      </div>
                    </form> 
                  </div>
                </div>
              </div>
            </div>
            
                       
          </section>
    
    <br>
      <br>
      <br>
      <br>
      <br>
    
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/intlTelInput.js') }}" ></script>
    <script>
     var input = document.querySelector("#phone");
        window.intlTelInput(input, {
          initialCountry: "sa",
          // allowDropdown: false,
          // autoInsertDialCode: true,
          // autoPlaceholder: "off",
          // dropdownContainer: document.body,
          // excludeCountries: ["us"],
          // formatOnDisplay: false,
          // geoIpLookup: function(callback) {
          //   fetch("https://ipapi.co/json")
          //     .then(function(res) { return res.json(); })
          //     .then(function(data) { callback(data.country_code); })
          //     .catch(function() { callback("us"); });
          // },
          // hiddenInput: "full_number",
          // initialCountry: "auto",
          // localizedCountries: { 'de': 'Deutschland' },
          // nationalMode: false,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          // placeholderNumberType: "MOBILE",
          // preferredCountries: ['cn', 'jp'],
          // separateDialCode: true,
          // showFlags: false,
          utilsScript: "{{ asset('js/utils.js') }}"
        });
      
    </script>
</body>
</html>
