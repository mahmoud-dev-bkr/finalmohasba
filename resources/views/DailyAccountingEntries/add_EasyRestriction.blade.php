<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> إنشاء قيد سهل</title>
    <link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
    <link rel="stylesheet" href="{{URL('css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/style.css')  }}">
</head>
<body>


    <div class="container-fluid">




              <div   id="wrapper">

                <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                    <img id="sideImg" src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}images/LOGO ARABIC AND ENGLISH.png" alt="">
                  </div>
                  <ul class="sidebar-nav">
                    <li >
                      <a href="dashboard.html"><i class="fa-solid fa-gauge-high side-icon"></i><span class="">لوحةالمتابعة</span></a>
                    </li>

                    <li>
                      <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-sack-dollar side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المبيعات</a>
                      <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="clients.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-users users-icon side-icon "></i>  العملاء</span>
                                <span><a href="add-client.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
                          <li >
                            <a href="quotations.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-contract side-icon"></i><span class="be-small">عروض الأسعار</span></span>
                              <span><a href="add-quotation.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                        </li>

                          <li >
                              <a href="Sales-invoices.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-invoice-dollar side-icon"></i><span class="be-small">فواتير المبيعات</span></span>
                                <span><a href="add-sales-bill.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
                          <li >
                            <a href="customer-bonds.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات العملاء</span></span>
                              <span><a href="add-bonds.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                        </li>

                      </ul>
                  </li>

                  <li>
                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                      <i class="fa-solid fa-cart-shopping side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المشتريات </a>
                    <ul class="collapse  nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="Suppliers.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-handshake side-icon"></i>  الموردين</span>
                              <span><a href="add-supplier.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                        </li>
                        <li >
                          <a href="purchase-orders.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                            <i class="fa-solid fa-file-circle-check side-icon"></i><span class="be-small">أوامر الشراء</span></span>
                            <span><a href="add-purch-order.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                      </li>

                        <li >
                            <a href="purchase-invoices.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                              <i class="fa-solid fa-money-bill-wheat side-icon"></i><span class="be-smaller">فواتير المشتريات</span></span>
                              <span><a href="add-purchase-invoices.html"><i class="fa-solid fa-plus plus"></i></span></div> </a>
                        </li>
                        <li >
                          <a href="supplier-bonds.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                            <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات الموردين</span></span>
                            <span><a href="add-supplier-bond.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                      </li>

                    </ul>
                </li>

                <li>
                  <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fa-solid fa-table-cells side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المنتجات والتكاليف</a>
                  <ul class="collapse  nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                      <a href="products-and-costs.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-box-open side-icon"></i><span class="be-smaller">المنتجات والتكاليف</span></span>
                        <span><a href="add-product.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>
                      <li>
                        <a href="sites.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                          <i class="fa-solid fa-location-arrow side-icon"></i>المواقع</span>
                          <span><a href="add-site.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                    </li>

                    <li >
                      <a href="manufacturing-orders.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-boxes-stacked side-icon"></i><span class="be-small">أوامر التصنيع</span></span>
                        <span><a href="add-manufacturing-order.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>


                  </ul>
              </li>

              <li>
                <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  <i class="fa-solid fa-building-columns side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الاصول الثابتة</a>
                <ul class="collapse  nav flex-column ms-1" id="submenu6" data-bs-parent="#menu">
                  <li >
                    <a href="fixed-assets.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-building side-icon"></i><span class="be-small">الاصول الثابتة</span></span>
                      <span><a href="add-asset.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                </li>

                <li >
                  <a href="dropping.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-recycle side-icon"></i> الاهلاك</span>
                    <span><a href="add-dropping.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>


                </ul>
            </li>

              <li>
                <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  <i class="fa-solid fa-folder-open side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الرواتب</a>
                <ul class="collapse  nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                  <li >
                    <a href="employers.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-lines side-icon"></i> الموظفين </span>
                      <span><a href="add-employer.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                </li>

                <li >
                  <a href="payroll-manager.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-file-lines side-icon"></i>مسير الرواتب</span>
                    <span><a href="add-payroll-manager.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>

              <li >
                <a href="advance.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                  <i class="fa-solid fa-file-lines side-icon"></i> السلف </span>
                  <span><a href="add-advance.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
            </li>

            <li >
              <a href="rewards.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                <i class="fa-solid fa-file-lines side-icon"></i>  المكافات </span>
                <span><a href="add-rewards.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
          </li>

          <li >
            <a href="discounts.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
              <i class="fa-solid fa-file-lines side-icon"></i> الخصومات</span>
              <span><a href="add-discount.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
        </li>

                </ul>
            </li>

            <li>
              <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-money-bill-wave side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المحاسبة</a>
              <ul class="collapse  nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="easy-restrictions.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-globe side-icon"></i><span>قيود سهلة</span></span>
                    <span><a href="add-easy-restrictions.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>
                  <li>
                    <a href="daily-accounting-entries.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-wallet side-icon"></i><span class="be-smaller">قيود محاسبية يدوية</span></span>
                      <span><a href="add-daily-accounting-entries.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                </li>

                <li >
                  <a href="accounts-tree.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-chart-simple side-icon"></i><span class="be-small">شجرة الحسابات</span></span>
                    <span><a href="add-account.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>


              </ul>
          </li>

          <li>
            <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-diagram-project side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المهام والمشاريع</a>
            <ul class="collapse  nav flex-column ms-1" id="submenu7" data-bs-parent="#menu">
              <li class="w-100">
                <a href="projects.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                  <i class="fa-solid fa-bars-progress side-icon"></i><span> المشاريع</span></span>
                  <span><a href="add-project.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
            </li>
                <li>
                  <a href="missions.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-thumbtack side-icon"></i><span>  المهام</span></span>
                    <span><a href="add-mission.html"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>




            </ul>
        </li>

        <li>
            <a href="reports.html"  class="nav-link px-0 align-middle">
              <i class="fa-solid fa-folder side-icon"></i><span class="ms-1  d-sm-inline toggle-span">التقارير</span></a>

        </li>

        <li>
          <a href="mohasba-service.html"  class="nav-link px-0 align-middle">
            <i class="fa-solid fa-layer-group side-icon"></i><span class="ms-1  d-sm-inline toggle-span">خدمات محاسبة</span></a>

      </li>

      <li>
        <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
          <i class="fa-solid fa-gear side-icon"></i><span class="ms-1  d-sm-inline toggle-span"> الإعدادات</a>
        <ul class="collapse  nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
          <li class="w-100">
            <a href="general-settings.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
              <i class="fa-solid fa-gear side-icon"></i><span>الإعدادات العامة</span></span>
              </div> </a>
        </li>
          <li>
            <a href="subscription-settings.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
              <i class="fa-solid fa-gear side-icon"></i><span> اعدادات الإشتراكات</span></span>
              </div> </a>
        </li>
            <li>
              <a href="electronic-connectivity.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                <i class="fa-solid fa-rocket side-icon"></i><span>  الربط الإلكتروني</span></span>
                </div> </a>
          </li>
          <li>
            <a href="salary-settings.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
              <i class="fa-solid fa-gear side-icon"></i><span>  اعدادات الرواتب</span></span>
              </div> </a>
        </li>
        <li>
          <a href="taxes.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
            <i class="fa-solid fa-gear side-icon"></i><span>   الضرائب</span></span>
            </div> </a>
      </li>
        <li>
          <a href="users.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
            <i class="fa-solid fa-user side-icon"></i><span>  المستخدمين</span></span>
            </div> </a>
      </li>
      <li>
        <a href="payment-terms.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
          <i class="fa-solid fa-file-circle-xmark side-icon"></i><span>  شروط الدفع</span></span>
         </div> </a>
    </li>
    <li>
      <a href="additional-fields.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
        <i class="fa-solid fa-paste side-icon"></i><span>  الحقول الإضافية</span></span>
        </div> </a>
  </li>
  <li>
    <a href="modify-profile.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
      <i class="fa-regular fa-pen-to-square side-icon"></i><span>  تعديل الملف الشخصي</span></span>
      </div> </a>
</li>
<li>
  <a href="attachments.html" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
    <i class="fa-solid fa-paperclip side-icon"></i><span>  المرفقات</span></span>
    </div> </a>
</li>




        </ul>
    </li>

    <li>
      <a href="help-center.html"  class="nav-link px-0 align-middle">
        <i class="fa-solid fa-circle-question side-icon"></i><span class="ms-1  d-sm-inline toggle-span">مركز المساعدة</span></a>

  </li>



                  </ul>
                </aside>

                <div id="navbar-wrapper">

                  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid nav-content">
                          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> <a class="navbar-brand" href="#">  مرحبا بك  <span class="heading">اسم المستخدم</span>  في <span class="heading">اسم الشركة</span></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                              <li class="nav-item">

                                  <div class="icon-nav dropdown">
                                   <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-list-ul"></i>
                                         </a>

                                  <div class="dropdown-menu">
                                        <h6 class="text-center mt-1 be-small text-secondary fw-bold">آخر خمس مهام لك</h6>
                                        <hr>
                                        <div>

                                          <div class="opacity-0 missions">

                                          </div>


                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-around align-items-center text-secondary  main-drob ">

                                            <div class="be-small d-flex justify-content-center">
                                              <i class="fa-solid fa-eye fs-6 text-secondary"></i>
                                              <span>مشاهدة الكل</span>
                                            </div>

                                            <div class="be-small d-flex justify-content-center">
                                              <i class="fa-solid fa-list fs-6 text-secondary"></i>
                                              <span> إنشاء مهمة</span>
                                            </div>
                                        </div>


                                  </div>
                                    </div>

                              </li>

                              <li class="nav-item">

                                <div class="icon-nav dropdown">
                                  <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa-regular fa-comment-dots"></i>
                                        </a>

                                 <div class="dropdown-menu">
                                       <h6 class="text-center mt-1 be-small text-secondary fw-bold">آحدث خمس تعليقات تم ذكرك بها </h6>
                                       <hr>
                                       <div>

                                         <div class="opacity-0 missions">

                                         </div>


                                       </div>
                                       <hr>
                                       <div class="d-flex justify-content-around align-items-center text-secondary  main-drob ">

                                           <div class="be-small d-flex justify-content-center">
                                             <i class="fa-solid fa-eye fs-6 text-secondary"></i>
                                             <span>مشاهدة الكل</span>
                                           </div>


                                       </div>


                                 </div>
                                   </div>

                              </li>
                              <li class="nav-item">

                                <div class="icon-nav dropdown">
                                  <a class=" dropdown-toggle" href="#" role="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="fa-solid fa-circle-dot"></i>
                                        </a>

                                 <ul class="dropdown-menu">

                                  <li><a class="dropdown-item" href="#">تحديثات قيود</a></li>
                                  <li><a class="dropdown-item" href="#"> مقاطع فيديو تعليمية </a></li>
                                  <li><a class="dropdown-item" href="#"> مركز المساعدة </a></li>
                                  <li><a class="dropdown-item" href="#">تعرف علي هذة الصفحة</a></li>
                                  <li><a class="dropdown-item" href="#">تابع التهيئة</a></li>

                                 </ul>
                                   </div>

                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/wallpaperflare.com_wallpaper.jpg" class="img-nav" alt="">
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">تعديل الملف الشخصي</a></li>
                                  <li><a class="dropdown-item" href="#">تغيير الشركة </a></li>
                                  <li><a class="dropdown-item" href="#"> خروج </a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">English</a></li>

                                </ul>
                              </li>

                            </ul>

                          </div>
                        </div>
                      </nav>



                </div>

                <section id="content-wrapper" class="content-header">
                    <div class="row">

                          <div class="col-lg-12 mt-3">
                            <ul class="d-flex align-content-center">

                                <li><span  class="text-dark ml-3"> المحاسبة</span></li>
                                <li class="text-dark">
                                <i class="fa fa-angle-double-left mx-2 "></i><a href="easy-restrictions.html">  قيود سهلة</a>
                                </li>
                                <li class="text-primary">
                                  <i class="fa fa-angle-double-left mx-2 "></i><a href="add-easy-restrictions.html"> إنشاء قيد سهل</a>
                                  </li>
                                </ul>
                          </div>



                    </div>
                </section>


                <section>
                    <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2">  <a href="easy-restrictions.html" class="text-light"> رجوع</a> </button>
                        </div>
                  <div class="container my-3">
                    <div class="row">
                      <div class="col-md-12 hi-mohasba">

                          <h4 class="mx-4">إنشاء قيد سهل</h4>
                        </div>

                    </div>
                    <div class="row bg-light pb-4 brdr">

                     <div class="col-md-12 clients ">

                      <div class="container-fluid main-bg">


                        <!-- Responsive Arrow Progress Bar -->
                        <div class="arrow-steps clearfix">
                          <div class="step current"> <span> <a href="#" > اختر نوع القيد</a></span> </div>
                          <div class="step"> <span><a href="#" >املا البيانات</a></span> </div>
                          <div class="step d-none"> <span><a href="#" ></a></span> </div>

                        </div>
                      </div>




                     </div>

                     <h3 class="text-center">اختر نوع القيد</h3>

                     <div class="row my-5 text-center px-5">

                       <div class="col-md-4">


                         <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="">
                          <a href="{{ route('EasyRestriction.create',1) }}" class="text-dark">
                         <div class="product-item">
                          <div>
                            <img src="{{ URL('images/transferMoney.png') }}" alt="">

                          </div>
                          <div><p>تحركات اموال</p></div>
                        </div>
                          </a>
                      </button>

                      </div>

                      <div class="col-md-4">


                        <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="">
                          <a href="{{ route('EasyRestriction.create',2) }}" class="text-dark">
                        <div class="product-item">
                         <div>
                           <img src="{{ URL('images/addCapital.png') }}" alt="">
                         </div>
                         <div><p> اضافة راس مال</p></div>
                       </div>
                      </a>
                     </button>

                     </div>

                     <div class="col-md-4">


                      <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="">
                       <a href="{{ route('EasyRestriction.create',3) }}" class="text-dark">
                      <div class="product-item">
                       <div>
                         <img src="{{ URL('images/addDepreciation.png') }}" alt="">

                       </div>
                       <div><p> اهلاك اصل ثابت</p></div>
                     </div>
                       </a>
                   </button>

                   </div>

                   <div class="col-md-4 mt-5">


                    <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="">
                     <a href="{{ route('EasyRestriction.create',4) }}" class="text-dark">
                    <div class="product-item">
                     <div>
                       <img src="{{ URL('images/money-icon.png') }}" alt="">

                     </div>
                     <div><p>سحب المالك</p></div>
                   </div>
                     </a>
                 </button>

                 </div>

                 <div class="col-md-4 mt-5">


                  <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="">
                   <a href="{{ route('EasyRestriction.create',5) }}" class="text-dark">
                  <div class="product-item">
                   <div>
                     <img src="{{ URL('images/cashDividends.png') }}" alt="">

                   </div>
                   <div><p>توزيع ارباح</p></div>
                 </div>
                   </a>
               </button>

               </div>

               <div class="col-md-4 mt-5">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="">
                 <a href="{{ route('EasyRestriction.create',6) }}" class="text-dark">
                <div class="product-item">
                 <div>
                   <img src="{{ URL('images/salaries.png') }}" alt="">

                 </div>
                 <div><p>محاسبة الرواتب</p></div>
               </div>
                 </a>
             </button>

             </div>


                     </div>

                    </div>
                  </div>
                </section>



            </div>





    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ URL('js/main.js') }}js/main.js"></script>
</body>
</html>
