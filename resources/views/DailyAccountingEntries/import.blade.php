@extends('layouts.vertical', ['title' => ' قيود سهلة'])
@section('content')
      <div class="container-fluid">

      <section id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3">محاسبة</span></li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="daily-accounting-entries.html">قيود محاسبية
                  يدوية</a>
              </li>
            </ul>
          </div>



        </div>
      </section>


      <section>
        <div class="d-flex justify-content-sm-end mx-5 employers">
          <button class="btn btn-primary mx-2 "> <a href="imports.html" class="text-light"> استيراد </a> <i
              class="fa-solid fa-plus"></i></button>
          <button class="btn btn-primary mx-2 "> <a href="opening-credits.html" class="text-light"> ارصدة افتتاحية </a>
            <i class="fa-solid fa-plus"></i></button>
          <button class="btn btn-primary mx-2 "> <a href="add-daily-accounting-entries.html" class="text-light"> انشاء
              قيد يدوي </a> <i class="fa-solid fa-plus"></i></button>

        </div>
        <div class="container my-3">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">قيود محاسبية يدوية</h4>
            </div>

          </div>

                    <section>

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center Product-form">

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="الاسم">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="البريدالالكتروني">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="رقم الأتصال الاساسي">


                                        <select class="form-control w-25" name="" id="">
                                            <optgroup>
                                                <option value="">نشط</option>
                                                <option value=""> غير نشط</option>

                                            </optgroup>
                                        </select>

                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 Product-form">

                                            <select class="form-control w-25" name="" id="">
                                                <optgroup>
                                                    <option value="">الحقوق الاضافية</option>


                                                </optgroup>
                                            </select>

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">

                                    <button class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                    <button class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                    </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="responsive-scroll">
                                    <table id="DailyAccountingEntriesTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">من</th>
                                            <th scope="col">الى</th>
                                            <th scope="col">الوصف</th>
                                            <th scope="col">التاريخ  </th>
                                            <th scope="col">	مجموع الـ دائن/مدين</th>
                                            <th scope="col">الخيارات</th>


                                        </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </section>

          <div class="row bg-light pb-4 brdr">

            <div class="col-md-12 clients ">

              <div>
                <img src="images/manual-accounting.svg" alt="">
                <h1 class="my-3">ليس لديك أي قيود محاسبية يدوية</h1>
                <p class="text-secondary mt-4 w-50 m-auto ">يوفر محاسبة خاصية القيود اليدوية التي تتيح إدخال قيود غير
                  محدودة حسب حاجة صاحب المنشأة.</p>
              </div>
            </div>
            <div class="text-center ">
              <button class="btn btn-primary mx-2 "> <a href="imports.html" class="text-light"> استيراد </a> <i
                  class="fa-solid fa-plus"></i></button>
              <button class="btn btn-primary mx-2 "> <a href="opening-credits.html" class="text-light"> ارصدة افتتاحية
                </a> <i class="fa-solid fa-plus"></i></button>
              <button class="btn btn-primary mx-2 "> <a href="add-daily-accounting-entries.html" class="text-light">
                  انشاء قيد يدوي </a> <i class="fa-solid fa-plus"></i></button>

            </div>

          </div>
        </div>
      </section>


      </div>
@endsection
