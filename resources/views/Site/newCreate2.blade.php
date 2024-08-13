@extends('layouts.vertical', ['title' => 'اضافة موقع'])
@section('content')
<div class="container-fluid">


    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href=""> المواقع</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">إنشاء موقع</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Site.index') }}"
                    class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">إنشاء موقع</h4>
                </div>

            </div>
            
            
            <div class="w-100 mt-3">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="site-tab" data-bs-toggle="tab"
                          data-bs-target="#site" type="button" role="tab" aria-controls="site"
                          aria-selected="true"> الموقع</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="home-tab" data-bs-toggle="tab"
                          data-bs-target="#home" type="button" role="tab" aria-controls="home"
                          aria-selected="true">تعريف الموقع</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                          type="button" role="tab" aria-controls="profile" aria-selected="false">معلومات
                          التوظيف</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                          type="button" role="tab" aria-controls="contact" aria-selected="false">مستندات
                          الموقع</button>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  
                  <div class="row bg-light pb-4 brdr tab-pane fade show active" id="site" role="tabpanel" aria-labelledby="site-tab">
      
                  <form action="{{ route('Site.create.post') }}" method="post">
                      @csrf
      
                      <div class="col-md-12 ">
      
                          <div class="form my-5 px-5">
      
                              <div class="d-flex align-content-center justify-content-sm-between">
      
                                      <label class="mt-3 w-25">الاسم الانجليزي</label><input type="text" name="name_en"
                                          class="form-control  w-75 my-2">
                              </div>
      
                              <div class="d-flex align-content-center justify-content-sm-between">
                                  <label class="mt-3  w-25">الاسم العربي</label><input type="text" name="name_ar"
                                      class="form-control w-75 my-2">
                              </div>
      
                              <div class="d-flex align-content-center justify-content-sm-between">
                                  <label class="mt-3 ml-5">حساب المخزون</label>
                                  <select class="form-control w-75 my-2" name="Inventory_id" id="">
                                      <optgroup>
                                          <option >اضافة حساب جديد</option>
                                          @foreach ( $Inventory as $Inventory)
                                              <option value="{{ $Inventory->id  }}">{{ $Inventory->name  }}</option>
                                          @endforeach
      
      
      
                                      </optgroup>
                                  </select>
                              </div>
      
      
                              <div class="my-3">
                                  <div class="sub-head h-50">
                                      <h6 class="mx-4 py-2"> تفاصيل العنوان</h6>
                                  </div>
      
                                  <div class="fatora">
      
                                      <div class="d-flex ">
                                          <input placeholder="اسم الشارع" type="text" class="form-control inp-width  my-2">
                                          <input placeholder="رقم المبني" type="text" class="form-control inp-width my-2">
                                      </div>
      
                                      <div class="d-flex ">
                                          <input placeholder="مدينة" type="text" class="form-control inp-width  my-2">
                                          <input placeholder="منطقة" type="text" class="form-control inp-width my-2">
                                      </div>
                                      <div class="d-flex ">
                                          <input placeholder="الرمز البريدي" type="text" class="form-control inp-width  my-2">
                                          <select aria-placeholder="hi" class="form-control inp-width handle my-2" name=""
                                              id="">
                                              <optgroup>
                                                      <option value="-1">Select Country</option>
                                                      <option value="Afghanistan">Afghanistan</option>
                                                      <option value="Albania">Albania</option>
                                                      <option value="Algeria">Algeria</option>
                                                      <option value="American Samoa">American Samoa</option>
                                                      <option value="Angola">Angola</option>
                                                      <option value="Anguilla">Anguilla</option>
                                                      <option value="Antartica">Antartica</option>
                                                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                      <option value="Argentina">Argentina</option>
                                                      <option value="Armenia">Armenia</option>
                                                      <option value="Aruba">Aruba</option>
                                                      <option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option>
                                                      <option value="Australia">Australia</option>
                                                      <option value="Austria">Austria</option>
                                                      <option value="Azerbaijan">Azerbaijan</option>
                                                      <option value="Bahamas">Bahamas</option>
                                                      <option value="Bahrain">Bahrain</option>
                                                      <option value="Bangladesh">Bangladesh</option>
                                                      <option value="Barbados">Barbados</option>
                                                      <option value="Belarus">Belarus</option>
                                                      <option value="Belgium">Belgium</option>
                                                      <option value="Belize">Belize</option>
                                                      <option value="Benin">Benin</option>
                                                      <option value="Bermuda">Bermuda</option>
                                                      <option value="Bhutan">Bhutan</option>
                                                      <option value="Bolivia">Bolivia</option>
                                                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                      <option value="Botswana">Botswana</option>
                                                      <option value="Brazil">Brazil</option>
                                                      <option value="British Virgin Islands">British Virgin Islands</option>
                                                      <option value="Brunei">Brunei</option>
                                                      <option value="Bulgaria">Bulgaria</option>
                                                      <option value="Burkina Faso">Burkina Faso</option>
                                                      <option value="Burma">Burma</option>
                                                      <option value="Burundi">Burundi</option>
                                                      <option value="Cambodia">Cambodia</option>
                                                      <option value="Cameroon">Cameroon</option>
                                                      <option value="Canada">Canada</option>
                                                      <option value="Cape Verde">Cape Verde</option>
                                                      <option value="Cayman Islands">Cayman Islands</option>
                                                      <option value="Central African Republic">Central African Republic</option>
                                                      <option value="Chad">Chad</option>
                                                      <option value="Chile">Chile</option>
                                                      <option value="China">China</option>
                                                      <option value="Christmas Island">Christmas Island</option>
                                                      <option value="Clipperton Island">Clipperton Island</option>
                                                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                      <option value="Colombia">Colombia</option>
                                                      <option value="Comoros">Comoros</option>
                                                      <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                                      <option value="Congo, Republic of the">Congo, Republic of the</option>
                                                      <option value="Cook Islands">Cook Islands</option>
                                                      <option value="Costa Rica">Costa Rica</option>
                                                      <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                      <option value="Croatia">Croatia</option>
                                                      <option value="Cuba">Cuba</option>
                                                      <option value="Cyprus">Cyprus</option>
                                                      <option value="Czeck Republic">Czeck Republic</option>
                                                      <option value="Denmark">Denmark</option>
                                                      <option value="Djibouti">Djibouti</option>
                                                      <option value="Dominica">Dominica</option>
                                                      <option value="Dominican Republic">Dominican Republic</option>
                                                      <option value="Ecuador">Ecuador</option>
                                                      <option value="Egypt">Egypt</option>
                                                      <option value="El Salvador">El Salvador</option>
                                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                      <option value="Eritrea">Eritrea</option>
                                                      <option value="Estonia">Estonia</option>
                                                      <option value="Ethiopia">Ethiopia</option>
                                                      <option value="Europa Island">Europa Island</option>
                                                      <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                                      <option value="Faroe Islands">Faroe Islands</option>
                                                      <option value="Fiji">Fiji</option>
                                                      <option value="Finland">Finland</option>
                                                      <option value="France">France</option>
                                                      <option value="French Guiana">French Guiana</option>
                                                      <option value="French Polynesia">French Polynesia</option>
                                                      <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                                      <option value="Gabon">Gabon</option>
                                                      <option value="Gambia, The">Gambia, The</option>
                                                      <option value="Gaza Strip">Gaza Strip</option>
                                                      <option value="Georgia">Georgia</option>
                                                      <option value="Germany">Germany</option>
                                                      <option value="Ghana">Ghana</option>
                                                      <option value="Gibraltar">Gibraltar</option>
                                                      <option value="Glorioso Islands">Glorioso Islands</option>
                                                      <option value="Greece">Greece</option>
                                                      <option value="Greenland">Greenland</option>
                                                      <option value="Grenada">Grenada</option>
                                                      <option value="Guadeloupe">Guadeloupe</option>
                                                      <option value="Guam">Guam</option>
                                                      <option value="Guatemala">Guatemala</option>
                                                      <option value="Guernsey">Guernsey</option>
                                                      <option value="Guinea">Guinea</option>
                                                      <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                      <option value="Guyana">Guyana</option>
                                                      <option value="Haiti">Haiti</option>
                                                      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                      <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                                                      <option value="Honduras">Honduras</option>
                                                      <option value="Hong Kong">Hong Kong</option>
                                                      <option value="Howland Island">Howland Island</option>
                                                      <option value="Hungary">Hungary</option>
                                                      <option value="Iceland">Iceland</option>
                                                      <option value="India">India</option>
                                                      <option value="Indonesia">Indonesia</option>
                                                      <option value="Iran">Iran</option>
                                                      <option value="Iraq">Iraq</option>
                                                      <option value="Ireland">Ireland</option>
                                                      <option value="Ireland, Northern">Ireland, Northern</option>
                                                      <option value="Israel">Israel</option>
                                                      <option value="Italy">Italy</option>
                                                      <option value="Jamaica">Jamaica</option>
                                                      <option value="Jan Mayen">Jan Mayen</option>
                                                      <option value="Japan">Japan</option>
                                                      <option value="Jarvis Island">Jarvis Island</option>
                                                      <option value="Jersey">Jersey</option>
                                                      <option value="Johnston Atoll">Johnston Atoll</option>
                                                      <option value="Jordan">Jordan</option>
                                                      <option value="Juan de Nova Island">Juan de Nova Island</option>
                                                      <option value="Kazakhstan">Kazakhstan</option>
                                                      <option value="Kenya">Kenya</option>
                                                      <option value="Kiribati">Kiribati</option>
                                                      <option value="Korea, North">Korea, North</option>
                                                      <option value="Korea, South">Korea, South</option>
                                                      <option value="Kuwait">Kuwait</option>
                                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                      <option value="Laos">Laos</option>
                                                      <option value="Latvia">Latvia</option>
                                                      <option value="Lebanon">Lebanon</option>
                                                      <option value="Lesotho">Lesotho</option>
                                                      <option value="Liberia">Liberia</option>
                                                      <option value="Libya">Libya</option>
                                                      <option value="Liechtenstein">Liechtenstein</option>
                                                      <option value="Lithuania">Lithuania</option>
                                                      <option value="Luxembourg">Luxembourg</option>
                                                      <option value="Macau">Macau</option>
                                                      <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
                                                      <option value="Madagascar">Madagascar</option>
                                                      <option value="Malawi">Malawi</option>
                                                      <option value="Malaysia">Malaysia</option>
                                                      <option value="Maldives">Maldives</option>
                                                      <option value="Mali">Mali</option>
                                                      <option value="Malta">Malta</option>
                                                      <option value="Man, Isle of">Man, Isle of</option>
                                                      <option value="Marshall Islands">Marshall Islands</option>
                                                      <option value="Martinique">Martinique</option>
                                                      <option value="Mauritania">Mauritania</option>
                                                      <option value="Mauritius">Mauritius</option>
                                                      <option value="Mayotte">Mayotte</option>
                                                      <option value="Mexico">Mexico</option>
                                                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                      <option value="Midway Islands">Midway Islands</option>
                                                      <option value="Moldova">Moldova</option>
                                                      <option value="Monaco">Monaco</option>
                                                      <option value="Mongolia">Mongolia</option>
                                                      <option value="Montserrat">Montserrat</option>
                                                      <option value="Morocco">Morocco</option>
                                                      <option value="Mozambique">Mozambique</option>
                                                      <option value="Namibia">Namibia</option>
                                                      <option value="Nauru">Nauru</option>
                                                      <option value="Nepal">Nepal</option>
                                                      <option value="Netherlands">Netherlands</option>
                                                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                      <option value="New Caledonia">New Caledonia</option>
                                                      <option value="New Zealand">New Zealand</option>
                                                      <option value="Nicaragua">Nicaragua</option>
                                                      <option value="Niger">Niger</option>
                                                      <option value="Nigeria">Nigeria</option>
                                                      <option value="Niue">Niue</option>
                                                      <option value="Norfolk Island">Norfolk Island</option>
                                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                      <option value="Norway">Norway</option>
                                                      <option value="Oman">Oman</option>
                                                      <option value="Pakistan">Pakistan</option>
                                                      <option value="Palau">Palau</option>
                                                      <option value="Panama">Panama</option>
                                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                                      <option value="Paraguay">Paraguay</option>
                                                      <option value="Peru">Peru</option>
                                                      <option value="Philippines">Philippines</option>
                                                      <option value="Pitcaim Islands">Pitcaim Islands</option>
                                                      <option value="Poland">Poland</option>
                                                      <option value="Portugal">Portugal</option>
                                                      <option value="Puerto Rico">Puerto Rico</option>
                                                      <option value="Qatar">Qatar</option>
                                                      <option value="Reunion">Reunion</option>
                                                      <option value="Romainia">Romainia</option>
                                                      <option value="Russia">Russia</option>
                                                      <option value="Rwanda">Rwanda</option>
                                                      <option value="Saint Helena">Saint Helena</option>
                                                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                      <option value="Saint Lucia">Saint Lucia</option>
                                                      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                      <option value="Samoa">Samoa</option>
                                                      <option value="San Marino">San Marino</option>
                                                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                                      <option value="Scotland">Scotland</option>
                                                      <option value="Senegal">Senegal</option>
                                                      <option value="Seychelles">Seychelles</option>
                                                      <option value="Sierra Leone">Sierra Leone</option>
                                                      <option value="Singapore">Singapore</option>
                                                      <option value="Slovakia">Slovakia</option>
                                                      <option value="Slovenia">Slovenia</option>
                                                      <option value="Solomon Islands">Solomon Islands</option>
                                                      <option value="Somalia">Somalia</option>
                                                      <option value="South Africa">South Africa</option>
                                                      <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                                                      <option value="Spain">Spain</option>
                                                      <option value="Spratly Islands">Spratly Islands</option>
                                                      <option value="Sri Lanka">Sri Lanka</option>
                                                      <option value="Sudan">Sudan</option>
                                                      <option value="Suriname">Suriname</option>
                                                      <option value="Svalbard">Svalbard</option>
                                                      <option value="Swaziland">Swaziland</option>
                                                      <option value="Sweden">Sweden</option>
                                                      <option value="Switzerland">Switzerland</option>
                                                      <option value="Syria">Syria</option>
                                                      <option value="Taiwan">Taiwan</option>
                                                      <option value="Tajikistan">Tajikistan</option>
                                                      <option value="Tanzania">Tanzania</option>
                                                      <option value="Thailand">Thailand</option>
                                                      <option value="Tobago">Tobago</option>
                                                      <option value="Toga">Toga</option>
                                                      <option value="Tokelau">Tokelau</option>
                                                      <option value="Tonga">Tonga</option>
                                                      <option value="Trinidad">Trinidad</option>
                                                      <option value="Tunisia">Tunisia</option>
                                                      <option value="Turkey">Turkey</option>
                                                      <option value="Turkmenistan">Turkmenistan</option>
                                                      <option value="Tuvalu">Tuvalu</option>
                                                      <option value="Uganda">Uganda</option>
                                                      <option value="Ukraine">Ukraine</option>
                                                      <option value="United Arab Emirates">United Arab Emirates</option>
                                                      <option value="United Kingdom">United Kingdom</option>
                                                      <option value="Uruguay">Uruguay</option>
                                                      <option value="USA">USA</option>
                                                      <option value="Uzbekistan">Uzbekistan</option>
                                                      <option value="Vanuatu">Vanuatu</option>
                                                      <option value="Venezuela">Venezuela</option>
                                                      <option value="Vietnam">Vietnam</option>
                                                      <option value="Virgin Islands">Virgin Islands</option>
                                                      <option value="Wales">Wales</option>
                                                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                      <option value="West Bank">West Bank</option>
                                                      <option value="Western Sahara">Western Sahara</option>
                                                      <option value="Yemen">Yemen</option>
                                                      <option value="Yugoslavia">Yugoslavia</option>
                                                      <option value="Zambia">Zambia</option>
                                                      <option value="Zimbabwe">Zimbabwe</option>
                                              </optgroup>
                                          </select>
                                      </div>
      
      
      
      
      
      
                                  </div>
                              </div>
      
                              <div class="btn-holder">
                                  <button class="btn btn-primary submit">حفظ</button>
      
                                  <button class="btn btn-dark re-submit">الغاء</button>
      
                              </div>
                              </form>
                          </div>
      
      
                      </div>
   
                  </div>
                  <div class="bg-light pb-4 brdr tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          
                      <div class="container">
          
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-5">تعريف الموقع</h4>
                                  </div>
                                  <form action="{{ route('employe.create.post') }}" method="post">
                                      @csrf
                                      <div class="form ">
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5">الاسم الأول (English) </label><input
                                                  type="text" name="name_en" class="form-control w-50 my-2">
                                          </div>
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5">اسم العائلة (English) </label><input
                                                  type="text" name="family_name_en"
                                                  class="form-control w-50 my-2">
                                          </div>
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5">الاسم الأول (عربي) </label><input
                                                  type="text" name="name_ar" class="form-control w-50 my-2">
                                          </div>
          
          
          
          
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5">اسم العائلة (عربي)</label><input
                                                  type="text" name="family_name_ar"
                                                  class="form-control w-50 my-2">
                                          </div>
          
          
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5 mx-4">الجنس</label>
                                              <select class="form-control w-50 my-3" name="Type" id="">
                                                  <optgroup>
                                                      <option value="1">الجنس</option>
                                                      <option value="2">ذكر </option>
                                                      <option value="3">انثي </option>
          
                                                  </optgroup>
                                              </select>
                                          </div>
          
          
          
          
                                      </div>
                              </div>
          
                              <div class="col-md-6 my-3">
                                  <div class="form my-5 py-5 ">
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">تاريخ الميلاد </label><input type="date"
                                              name="Date_birth" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">الحالة الاجتماعية</label>
                                          <select class="form-control w-50 my-3" name="Marital_status" id="">
                                              <optgroup>
                                                  <option value="1">اعزب</option>
                                                  <option value="2">متزوج</option>
                                                  <option value="3">مطلق</option>
                                                  <option value="4">ارمل </option>
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">الجنسية</label>
                                          <select class="form-control w-50 my-3" name="Nationality" id="">
                                              <optgroup>
                                                  <option value="1">مصر</option>
                                                  <option value="2">سوريا</option>
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">بلد الإقامة</label>
                                          <select class="form-control w-50 my-3" name="country" id="">
                                              <optgroup>
                                                  <option value="1">مصر</option>
                                                  <option value="2">سوريا</option>
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
          
                                  </div>
                              </div>
                          </div>
          
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3"> معلومات الاتصال الشخصية</h4>
                                  </div>
                                  <div class="form ">
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">البريد الإلكتروني</label><input type="text"
                                              name="email" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">رقم هاتف المنزل</label><input type="text"
                                              name="phon" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">رقم هاتف للطوارئ </label><input type="text"
                                              name="phon_emergencie" class="form-control w-50 my-2">
                                      </div>
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 mx-4 ml-5">العنوان</label><input type="text"
                                              name="address" class="form-control w-50 my-2">
                                      </div>
          
          
                                  </div>
                              </div>
          
                              <div class="col-md-6">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3">معلومات الاتصال في عمل</h4>
                                  </div>
                                  <div class="form ">
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5"> بريد العمل الإلكتروني</label><input
                                              type="text" name="email_job" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5 mx-2">رقم هاتف العمل</label><input
                                              type="text" name="phon_job" class="form-control w-50 my-2">
                                      </div>
          
          
          
                                  </div>
                              </div>
                          </div>
          
                          <div class="btn-holder">
                              <button class="btn btn-primary submit">حفظ</button>
          
                          </div>
                      </div>
          
                  </div>
                  <div class="bg-light pb-4 brdr tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          
                      <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-5"> معلومات التوظيف</h4>
                                  </div>
                                  <div class="form ">
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">الرقم الوظيفي</label><input type="text"
                                              name="Job_Number" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">تاريخ الانضمام </label><input type="date"
                                              name="Join_Date" class="form-control w-50 my-2">
                                      </div>
          
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5 mx-4">نوع التكلفة</label>
                                          <select class="form-control w-50 my-3" name="Cost_Type" id="">
                                              <optgroup>
                                                  <option value="1">مباشر</option>
                                                  <option value="2">غير مباشر</option>
          
          
                                              </optgroup>
                                          </select>
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5 mx-4">جدول العمل </label>
                                          <select class="form-control w-50 my-3" name="Work_schedule" id="">
                                              <optgroup>
                                                  <option value="1">1</option>
          
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
          
                                  </div>
                              </div>
          
                              <div class="col-md-6 my-3">
                                  <div class="form my-5 py-5 ">
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5"> المسمى الوظيفي </label><input type="text"
                                              name="Job_Name" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5 mx-3"> القسم </label><input type="text"
                                              name="section" class="form-control w-50 my-2">
                                      </div>
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5 mx-3"> المدير</label>
                                          <select class="form-control w-50 my-3" name="manger" id="">
                                              <optgroup>
                                                  <option value="1">بدون مدير</option>
          
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5">المرحلة التعليمية</label>
                                          <select class="form-control w-50 my-3" name="Educational_Stage"
                                              id="">
                                              <optgroup>
                                                  <option value="1">اقل من الثانوي</option>
                                                  <option value="2">بعض من الثانوي </option>
                                                  <option value="3"> شهادة ثانوي </option>
                                                  <option value="4">درجة المنتسبين</option>
                                                  <option value="5">درجة البكلوريوس</option>
                                                  <option value="6">درجة الماجستير</option>
                                                  <option value="7">درجة الدكتره</option>
          
                                              </optgroup>
                                          </select>
                                      </div>
          
          
          
                                      <div class="d-flex align-content-center justify-content-around">
                                          <label class="mt-3 ml-5"> وصف المرحلة التعليمية </label><input
                                              type="text" name="Educational_stage_description"
                                              class="form-control w-50 my-2">
                                      </div>
          
          
                                  </div>
                              </div>
                          </div>
          
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3"> معلومات التوظيف</h4>
                                  </div>
                                  <div>
                                      <p class="be-small text-secondary">في هذا القسم ، ستحدد مكونات الراتب
                                          للعميل ، بينما يمكنك حفظ الموقع دون ملء هذه الحقول ، لن نتمكن من
                                          إصدار دفعات أو وضع هذا الموقع في كشوف المرتبات.</p>
          
                                  </div>
          
                                  <div class="col-md-6">
                                      <div class="d-flex justify-content-start">
                                          <h4 class="text-primary my-5"> تزامن الراتب</h4>
                                      </div>
                                      <div class="form ">
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5"> تاريخ أول راتب</label><input
                                                  type="date" name="first_salary"
                                                  class="form-control w-50 my-2">
                                          </div>
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5"> تاريخ آخر راتب </label><input
                                                  type="date" name="last_salary"
                                                  class="form-control w-50 my-2">
                                          </div>
          
          
          
          
                                          <div class="d-flex align-content-center justify-content-around">
                                              <label class="mt-3 ml-5 mx-2"> دورة الدفع</label>
                                              <select class="form-control w-50 my-3" name="Payment_Cycle"
                                                  id="">
                                                  <optgroup>
                                                      <option value="1">يدفع شهريا</option>
          
          
                                                  </optgroup>
                                              </select>
                                          </div>
          
          
                                      </div>
                                  </div>
          
                                  <div class="col-md-6 responsive-scroll">
                                      <div class="d-flex justify-content-start">
                                          <h4 class="text-primary my-3">الراتب الأساسي</h4>
                                      </div>
                                      <table class="table half-table w-75">
                                          <thead class="table-head">
                                              <tr>
          
                                                  <th scope="col"> النوع </th>
                                                  <th scope="col">القيمة </th>
          
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
          
                                                  <td>
                                                      <div class="">
          
                                                          <select class="form-control w-100 my-3"
                                                              name="Type_salary" id="">
                                                              <optgroup>
                                                                  <option value="1">اجره سريعه</option>
                                                                  <option value="2">راتب شهري</option>
          
          
                                                              </optgroup>
                                                          </select>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div
                                                          class="d-flex align-content-center justify-content-center">
                                                          <input type="text" name="Salary_Value"
                                                              class="form-control w-50 my-2">
                                                      </div>
                                                  </td>
          
                                              </tr>
          
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
          
                          <div class="row my-4">
                              <div class="col-md-12 responsive-scroll">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3"> البدلات</h4>
                                  </div>
                                  <table class="table  half-table  w-75">
                                      <thead class="table-head h-50">
                                          <tr>
                                              <th>النوع</th>
                                              <th>ملاحظات</th>
                                              <th>تحسب كقيمة</th>
                                              <th>القيمة</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Type_Allowances" id="">
                                                      <optgroup>
                                                          <option value="1">بدل موصلات</option>
                                                          <option value="2">بدل ساكن</option>
                                                          <option value="3">بدل غلاء المعيشة</option>
                                                          <option value="4"> اخري</option>
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
                                              <td>
                                                  <input type="text" name="Reviews_Allowances"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
                                              <td>
          
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Calculated_Value_Allowances" id="">
                                                      <optgroup>
                                                          <option value="1">ثابت القيمة(شهري)</option>
                                                          <option value="2">نسبة مئوية</option>
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
                                              <td>
                                                  <input type="text" name="Value_Allowances"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
          
          
                                  <div class="d-flex align-content-center justify-content-start my-2">
                                      <button class="btn btn-primary">اضافةالمزيد</button>
                                  </div>
          
                              </div>
                          </div>
          
                          <div class="row my-4">
                              <div class="col-md-12 responsive-scroll">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3"> خصومات دورية</h4>
                                  </div>
                                  <table class="table  half-table  w-75">
                                      <thead class="table-head h-50">
                                          <tr>
                                              <th>النوع</th>
                                              <th>ملاحظات</th>
                                              <th>تحسب كقيمة</th>
                                              <th>القيمة</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Type_Periodic_discounts" id="">
                                                      <optgroup>
                                                          <option value="1">اوعيه ادخاريه</option>
                                                          <option value="2">اخري</option>
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
                                              <td>
                                                  <input type="text" name="Reviews_Periodic_discounts"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
                                              <td>
          
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Calculated_Value_Periodic_discounts" id="">
                                                      <optgroup>
                                                          <option value="1">ثابت القيمة(شهري)</option>
                                                          <option value="2">نسبة مئوية</option>
          
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
                                              <td>
                                                  <input type="text" name="Value_Periodic_discounts"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
          
          
                                  <div class="d-flex align-content-center justify-content-start my-2">
                                      <button class="btn btn-primary">اضافةالمزيد</button>
                                  </div>
          
                              </div>
                          </div>
          
                          <div class="row my-4">
                              <div class="col-md-12  responsive-scroll">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-3"> التأمينات الاجتماعية</h4>
                                  </div>
                                  <table class="table  half-table  w-75">
                                      <thead class="table-head h-50">
                                          <tr>
                                              <th>لمرجع</th>
                                              <th>طريقة الحساب</th>
                                              <th> التأمين الاجتماعي</th>
          
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
          
                                              <td>
                                                  <input type="text" name="reference"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
                                              <td>
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Calculation_method" id="">
                                                      <optgroup>
                                                          <option value="1">الراتب الاساسي</option>
                                                          <option value="2">نسبه من بدلات السكن</option>
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
          
                                              <td>
          
          
                                                  <select class="form-control  w-100 mt-1"
                                                      name="Social_Insurance" id="">
                                                      <optgroup>
                                                          <option value="1">اختار</option>
          
                                                      </optgroup>
                                                  </select>
          
          
                                              </td>
          
                                          </tr>
                                      </tbody>
                                  </table>
          
          
                                  <div class="d-flex align-content-center justify-content-start my-2">
                                      <button class="btn btn-primary">اضافةالمزيد</button>
                                  </div>
          
                              </div>
                          </div>
          
                          <div class="btn-holder mt-4">
                              <button class="btn btn-primary submit">حفظ</button>
          
          
                          </div>
                      </div>
          
                  </div>
                  <div class="bg-light pb-4 brdr tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="container">
          
                          <div class="row my-4">
                              <div class="col-md-12 responsive-scroll">
                                  <div class="d-flex justify-content-start">
                                      <h4 class="text-primary my-5"> مستندات الموقع</h4>
                                  </div>
                                  <table class="table  half-table  w-75">
                                      <thead class="table-head h-50">
                                          <tr>
                                              <th>اسم المستند</th>
                                              <th> تاريخ الانتهاء</th>
                                              <th> اختر ملف</th>
          
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
          
                                              <td>
                                                  <input type="text" name="Document_Name"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
          
          
                                              <td>
                                                  <input type="date" name="Expiry_Date"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
          
          
                                              <td>
                                                  <input type="file" name="Choose_File"
                                                      class="form-control mt-1 edit-input w-100">
                                              </td>
          
          
                                          </tr>
                                      </tbody>
                                  </table>
          
          
                                  <div class="d-flex align-content-center justify-content-start my-2">
                                      <button class="btn btn-primary">اضافةالمزيد</button>
                                  </div>
          
                                  <div class="btn-holder mt-4">
                                      <button class="btn btn-primary submit">حفظ</button>
          
          
                                  </div>
                                  </form>
          
                              </div>
                          </div>
                      </div>
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
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('js/main.js') }}"></script>
@endsection
