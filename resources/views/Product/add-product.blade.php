<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> إنشاء قيد سهل</title>
    <link rel="stylesheet" href="{{ URL('css/normalize.css') }}">
    <link rel="stylesheet" href="{{URL('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('css/style.css')  }}">
</head>

<body>


  <div class="container-fluid">




    <div id="wrapper">

          <aside id="sidebar-wrapper">
                      <div class="sidebar-brand">
                        <img id="sideImg"  src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}" alt="">
                      </div>
                      <ul class="sidebar-nav accordion accordion-flush"  id="accordionFlushExample">
                        <li >
                          <a href="{{ URL('dashboard') }}"><i class="fa-solid fa-gauge-high side-icon"></i><span class="">لوحةالمتابعة</span></a>
                        </li>
                        <li>
                          <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                            <i class="fa-solid fa-table-cells side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المنتجات والتكاليف</a> 
                          <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                              <a href="{{ route('Product.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-box-open side-icon"></i><span class="be-smaller">المنتجات والتكاليف</span></span> 
                                <span><a href="{{ route('Product.tenant') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
                              <li>
                                <a href="{{ route('Site.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                  <i class="fa-solid fa-location-arrow side-icon"></i>المواقع</span> 
                                  <span><a href="{{ route('Site.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                            </li>
        
                            <li >
                              <a href="{{ route('ManutOrder.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i><span class="be-small">أوامر التصنيع</span></span> 
                                <span><a href="{{ route('ManutOrder.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
                              
                              
                          </ul>
                      </li>
                        <li>
                          <a href="#submenu1"  data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                            <i class="fa-solid fa-sack-dollar side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المبيعات</a> 
                          <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu1" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="{{ route('client.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                    <i class="fa-solid fa-users users-icon side-icon "></i>  العملاء</span> 
                                    <span><a href="{{ route('client.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                              </li>
                              <li >
                                <a href="{{ route('Quotation.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                  <i class="fa-solid fa-file-contract side-icon"></i><span class="be-small">عروض الأسعار</span></span> 
                                  <span><a href="{{ route('Quotation.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                            </li>
    
                              <li >
                                  <a href="{{ route('sales_invoices.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                    <i class="fa-solid fa-file-invoice-dollar side-icon"></i><span class="be-small">فواتير المبيعات</span></span> 
                                    <span><a href="{{ route('sales_invoices.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                              </li>
                              <li >
                                <a href="{{ route('Clientbond.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                  <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات العملاء</span></span> 
                                  <span><a href="{{ route('Clientbond.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                            </li>
                              
                          </ul>
                      </li>
    
                      <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                          <i class="fa-solid fa-cart-shopping side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المشتريات </a> 
                        <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('Supplier.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                  <i class="fa-solid fa-handshake side-icon"></i>  الموردين</span> 
                                  <span><a href="{{ route('Supplier.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                            </li>
                            <li >
                              <a href="{{ route('Purchase_orders.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-circle-check side-icon"></i><span class="be-small">أوامر الشراء</span></span> 
                                <span><a href="{{ route('Purchase_orders.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
    
                            <li >
                                <a href="{{ route('Purchase_Invoices.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                  <i class="fa-solid fa-money-bill-wheat side-icon"></i><span class="be-smaller">فواتير المشتريات</span></span> 
                                  <span><a href="{{ route('Purchase_Invoices.create') }}"><i class="fa-solid fa-plus plus"></i></span></div> </a>
                            </li>
                            <li >
                              <a href="{{ route('Supplierbond.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i><span class="be-small">سندات الموردين</span></span> 
                                <span><a href="{{ route('Supplierbond.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                          </li>
                            
                        </ul>
                    </li>
    
                    
    
                  <li>
                    <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                      <i class="fa-solid fa-building-columns side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الاصول الثابتة</a> 
                    <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu6" data-bs-parent="#menu">
                      <li >
                        <a href="" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                          <i class="fa-solid fa-building side-icon"></i><span class="be-small">الاصول الثابتة</span></span> 
                          <span><a href=""><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                    </li>
    
                    <li >
                      <a href="{{ route('drop.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-recycle side-icon"></i> الاهلاك</span> 
                        <span><a href="{{ route('drop.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>
    
               
                    </ul>
                </li>
    
                  <li>
                    <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                      <i class="fa-solid fa-folder-open side-icon"></i><span class="ms-1  d-sm-inline toggle-span">الرواتب</a> 
                    <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu4" data-bs-parent="#menu">
                      <li >
                        <a href="{{ route('employe.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                          <i class="fa-solid fa-file-lines side-icon"></i> الموظفين </span> 
                          <span><a href="{{ route('employe.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                    </li>
    
                    <li>
                      <a href="{{ route('SettingSalary.index') }}" class="nav-link px-0">
                        <div class="space"><span class=" d-sm-inline text">
                            <i class="fa-solid fa-file-lines side-icon"></i>اعدادات الرواتب</span>
                        </div>
                      </a>
                    </li>
                    <li >
                      <a href="" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-file-lines side-icon"></i>مسير الرواتب</span> 
                        <span><a href=""><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>
    
                  <li >
                    <a href="{{ route('advance.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                      <i class="fa-solid fa-file-lines side-icon"></i> السلف </span> 
                      <span><a href="{{ route('advance.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                </li>
    
                <li >
                  <a href="{{ route('reward.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                    <i class="fa-solid fa-file-lines side-icon"></i>  المكافات </span> 
                    <span><a href="{{ route('reward.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
              </li>
    
              <li >
                <a href="{{ route('discount.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                  <i class="fa-solid fa-file-lines side-icon"></i> الخصومات</span> 
                  <span><a href="{{ route('discount.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
            </li>
                      
                    </ul>
                </li>
    
                <li>
                  <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                    <i class="fa-solid fa-money-bill-wave side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المحاسبة</a> 
                  <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu5" data-bs-parent="#menu">
                    <li class="w-100">
                      <a href="{{ route('EasyRestriction.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-globe side-icon"></i><span>قيود سهلة</span></span> 
                        <span><a href="{{ route('EasyRestriction.tenant') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>
                      <li>
                        <a href="{{ route('DailyAccountingEntries.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                          <i class="fa-solid fa-wallet side-icon"></i><span class="be-smaller">قيود محاسبية يدوية</span></span> 
                          <span><a href="{{ route('DailyAccountingEntries.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                    </li>
    
                    <li >
                      <a href="{{ route('Account.index') }}" class="nav-link px-0">  <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-chart-simple side-icon"></i><span class="be-small">شجرة الحسابات</span></span> 
                        <span><a href="{{ route('Account.create') }}"><i class="fa-solid fa-plus plus"></i></a></span></div> </a>
                  </li>
                      
                      
                  </ul>
              </li>
    
              <li>
                <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                  <i class="fa-solid fa-diagram-project side-icon"></i><span class="ms-1  d-sm-inline toggle-span">المهام والمشاريع</a> 
                <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu7" data-bs-parent="#menu">
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
                <a href="{{ route('report.index') }}"  class="nav-link px-0 align-middle">
                  <i class="fa-solid fa-folder side-icon"></i><span class="ms-1  d-sm-inline toggle-span">التقارير</span></a> 
                
            </li>
    
            
      
            <li>
              <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-gear side-icon"></i><span class="ms-1  d-sm-inline toggle-span"> الإعدادات</a>
              <ul class="collapse  nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="general-settings.html" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-gear side-icon"></i><span>الإعدادات العامة</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-gear side-icon"></i><span> اعدادات الإشتراكات</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-rocket side-icon"></i><span> الربط الإلكتروني</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-gear side-icon"></i><span> اعدادات الرواتب</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="\" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-gear side-icon"></i><span> الضرائب</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-user side-icon"></i><span> المستخدمين</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-file-circle-xmark side-icon"></i><span> شروط الدفع</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-paste side-icon"></i><span> الحقول الإضافية</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-regular fa-pen-to-square side-icon"></i><span> تعديل الملف الشخصي</span></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link px-0">
                    <div class="space"><span class=" d-sm-inline text">
                        <i class="fa-solid fa-paperclip side-icon"></i><span> المرفقات</span></span>
                    </div>
                  </a>
                </li>
      
      
      
      
              </ul>
            </li>
      
            <li>
              <a href="" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-circle-question side-icon"></i><span class="ms-1  d-sm-inline toggle-span">مركز
                  المساعدة</span></a>
      
            </li>
    
                      
    
      </ul>
</aside>

      <div id="navbar-wrapper">

        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
          <div class="container-fluid nav-content">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> <a class="navbar-brand"
              href="#"> مرحبا بك <span class="heading">اسم المستخدم</span> في <span class="heading">اسم
                الشركة</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-list-ul"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-regular fa-comment-dots"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-circle-dot"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-house-chimney"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>

              </ul>

            </div>
          </div>
        </nav>

      </div>

      <sectio0n id="content-wrapper" class="content-header">
        <div class="row">

          <div class="col-lg-12 mt-3">
            <ul class="d-flex align-content-center">

              <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
              <li class="text-dark">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="{{ route('Product.create', 1) }}"> المنتجات والتكاليف</a>
              </li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">إنشاء منتج</a>
              </li>
            </ul>
          </div>



        </div>
      </sectio0n>


      <section>
        <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
              href="{{ route('Product.create', 1) }}" class="text-light"> رجوع</a> </button>
        </div>
        <div class="container my-3">
          <div class="row">
            <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">إنشاء منتج</h4>
            </div>

          </div>
          <div class="row bg-light pb-4 brdr">

            <div class="col-md-12 clients ">

              <div class="container-fluid main-bg">


                <!-- Responsive Arrow Progress Bar -->
                <div class="arrow-steps clearfix">
                  <div class="step current"> <span> <a href="#">نوع المنتج</a></span> </div>
                  <div class="step"> <span><a href="#">املا التفاصيل</a></span> </div>
                  <div class="step d-none"> <span><a href="#"></a></span> </div>

                </div>
              </div>




            </div>

            <h3 class="text-center">نوع المنتج</h3>

            <div class="row my-5 text-center px-5">

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك محاسبة اضافة منتج يباع ويشتري بنفس حالته الاصلية او كجزء من منتج مجمع يباع بسعر واحد">
                  <a href="{{ route('Product.create', 1) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_product.svg') }}" alt="">

                      </div>
                      <div>
                        <p>منتج</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك محاسبة إنشاء منتج مجمع يصنع من عدة منتجات أو مواد أولية. المنتج مجمع يباع كمنتج واحد و يقوم بتعديل المخزون لكل واحد من المنتجات المستخدمة في تجميعه. تفاصيل التجميع تكون ظاهرة للمنشأة فقط ولا تظهر للعميل">
                  <a href="{{ route('Product.create', 2) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_recipe.svg') }}" alt="">
                      </div>
                      <div>
                        <p>منتج مجمع</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="bottom"
                  data-bs-title="مادة أولية يتم الإستعانة بها لتصنيع منتج آخر، ولا يتم بيع المادة الأولية إنما يتم استخدامها للتصنيع فقط. مثل: الخشب لصناعة الطاولات. وتساهم هذه المواد في عملية إنتاج المنتج المجمع.">
                  <a href="{{ route('Product.create', 3) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_rawMaterial.svg') }}" alt="">

                      </div>
                      <div>
                        <p>مادة اولية</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4 mt-5">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك قيود إضافة خدمات تقدم للعملاء تكون مشابهة للمنتجات ولكن لا تخزن.">
                  <a href="{{ route('Product.create', 4) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_service.svg') }}" alt="">

                      </div>
                      <div>
                        <p>خدمة</p>
                      </div>
                    </div>
                  </a>
                </button>

              </div>

              <div class="col-md-4 mt-5">


                <button type="button" class="btn btn-transparent" data-bs-toggle="tooltip" data-bs-placement="left"
                  data-bs-title="يتيح لك قيود إضافة مصاريف منوعة مثل فواتير الكهرباء.">
                  <a href="{{ route('Product.create', 5) }}" class="text-dark">
                    <div class="product-item">
                      <div>
                        <img src="{{ URL('images/product_expense.svg') }}" alt="">

                      </div>
                      <div>
                        <p>مصروف</p>
                      </div>
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





<script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>    
<script src="{{ URL('js/main.js') }}"></script>
</body>

</html>
