<aside id="sidebar-wrapper" >
    <div class="sidebar-brand">
        <img id="sideImg" src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}" alt="">
    </div>
    <ul class="sidebar-nav accordion accordion-flush" id="accordionFlushExample" >
        <li>
            <a href="{{ URL('dashboard') }}">
                <i class="fa-solid fa-gauge-high side-icon"></i>
                <span class="">
                    {{ __('basic.dashboard') }}
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('pos.index') }}" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-table-cells side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">
                    {{ __('basic.pos') }}
                </span>
            </a>
        </li>
        <li>
            <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-gear side-icon"></i>
                <span class="ms-4  d-sm-inline toggle-span">
                    {{ __('basic.facility_settings') }}
                </span>
                    <i class="fa fa-angle-down pull_right_3"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu7" data-bs-parent="#menu">
                <li>
                    <a href="{{ route('Site.index') }}" class="nav-link px-0 mt-3">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-location-arrow side-icon"></i>
                                {{ __('basic.master_site') }}
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sub_site.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-location-arrow side-icon"></i>
                                {{  __('basic.facility_sites') }}
                            </span>
                            <span>
                                <a href="{{ route('Site.create') }}" class="add-feature-btn"><i
                                        class="fa fa-plus"></i></a>
                            </span>
                        </div>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a href="" class="nav-link px-0">-->
                <!--        <div class="space">-->
                <!--            <span class=" d-sm-inline text">-->
                <!--                <i class="fa-solid fa-thumbtack side-icon"></i>-->
                <!--                <span> المهام</span>-->
                <!--            </span>-->
                <!--            <span>-->
                <!--                <a href="" class="add-feature-btn">-->
                <!--                    <i class="fa-solid fa-plus"></i>-->
                <!--                </a>-->
                <!--            </span>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
            </ul>
        </li>
        <li style="display:none;">
            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-table-cells side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">المنتجات
                    <i class="fa fa-angle-down pull_right_1"></i>
            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu3" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="{{ route('Product.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-box-open side-icon"></i>
                                <span>المنتجات والتكاليف</span>
                            </span>
                            <span>
                                <a href="{{ route('Product.create',1) }}" class="add-feature-btn"><i
                                        class="fa fa-plus"></i></a>

                            </span>
                        </div>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a href="{{ route('Site.index') }}" class="nav-link px-0">-->
                <!--        <div class="space">-->
                <!--            <span class=" d-sm-inline text">-->
                <!--                <i class="fa-solid fa-location-arrow side-icon"></i>المواقع </span>-->
                <!--            <span>-->
                <!--                <a href="{{ route('Site.create') }}" class="add-feature-btn"><i-->
                <!--                        class="fa fa-plus"></i></a>-->
                <!--            </span>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="{{ route('ManutOrder.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i>
                                <span>أوامر التصنيع</span>
                            </span>
                            <span>
                                <a href="{{ route('ManutOrder.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#submenu33" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-table-cells side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">المنتجات
                    <i class="fa fa-angle-down pull_right_1"></i>
            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu33" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="{{ route('Product.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-box-open side-icon"></i>
                                <span>المنتج</span>
                            </span>
                            <span>
                                <a href="{{ route('Product.create',1) }}" class="add-feature-btn"><i
                                        class="fa fa-plus"></i></a>

                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('item.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i>
                                <span>الاصناف</span>
                            </span>
                            <!--<span>-->
                            <!--    <a href="{{ route('ManutOrder.create') }}" class="add-feature-btn">-->
                            <!--        <i class="fa-solid fa-plus"></i>-->
                            <!--    </a>-->
                            <!--</span>-->
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('unit.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i>
                                <span>وحدات القياس</span>
                            </span>
                            <!--<span>-->
                            <!--    <a href="{{ route('ManutOrder.create') }}" class="add-feature-btn">-->
                            <!--        <i class="fa-solid fa-plus"></i>-->
                            <!--    </a>-->
                            <!--</span>-->
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Product.create', 3) }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i>
                                <span>المواد الأوليه</span>
                            </span>
                            <!--<span>-->
                            <!--    <a href="{{ route('ManutOrder.create') }}" class="add-feature-btn">-->
                            <!--        <i class="fa-solid fa-plus"></i>-->
                            <!--    </a>-->
                            <!--</span>-->
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ManutOrder.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-boxes-stacked side-icon"></i>
                                <span>أوامر التصنيع</span>
                            </span>
                            <span>
                                <a href="{{ route('ManutOrder.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#submenu44" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-table-cells side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">الخدمات والتكاليف
                    <i class="fa fa-angle-down pull_right_3"></i>
            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu44" data-bs-parent="#menu">
                <li class="w-100">
                    <a href=" {{ route('Services.index') }} " class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-box-open side-icon"></i>
                                <span>الخدمات</span>
                            </span>
                            <!--<span>-->
                            <!--    <a href="{{ route('Product.tenant') }}" class="add-feature-btn"><i-->
                            <!--            class="fa fa-plus"></i></a>-->

                            <!--</span>-->
                        </div>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#submenu44" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-table-cells side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">
                    جرد و نقل المخزون
                    <i class="fa fa-angle-down pull_right_3"></i>
            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu44" data-bs-parent="#menu">
                <li class="w-100">
                    <a href=" {{ route('Inventory.index') }} " class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-box-open side-icon"></i>
                                <span>جرد المخزن</span>
                            </span>
                            <!--<span>-->
                            <!--    <a href="{{ route('Product.tenant') }}" class="add-feature-btn"><i-->
                            <!--            class="fa fa-plus"></i></a>-->

                            <!--</span>-->
                        </div>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-sack-dollar side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">المبيعات
                    <i class="fa fa-angle-down pull_right_1"></i>
            </a>

            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="{{ route('client.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-users users-icon side-icon "></i> العملاء </span>
                            <span>
                                <a href="{{ route('client.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="w-100">
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-users users-icon side-icon "></i> مجموعات العملاء </span>
                            <span>
                                <a  class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Quotation.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-contract side-icon"></i>
                                <span>عروض الأسعار</span>
                            </span>
                            <span>
                                <a href="{{ route('Quotation.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sales_invoices.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-invoice-dollar side-icon"></i>
                                <span>فواتير المبيعات</span>
                            </span>
                            <span>
                                <a href="{{ route('sales_invoices.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Clientbond.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i>
                                <span>سندات العملاء</span>
                            </span>
                            <span>
                                <a href="{{ route('Clientbond.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ReturnsSalesInvoices.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-invoice-dollar side-icon"></i>
                                <span>اشعارات دائنه</span>
                            </span>
                            <span>
                                <a href="{{ route('ReturnsSalesInvoices.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-cart-shopping side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">المشتريات
                    <i class="fa fa-angle-down pull_right_2"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="{{ route('Supplier.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-users users-icon side-icon "></i> الموردين </span>
                            <span>
                                <a href="{{ route('Supplier.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="w-100">
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-users users-icon side-icon "></i> مجموعات الموردين </span>
                            <span>
                                <a  class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Purchase_orders.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-contract side-icon"></i>
                                <span> أوامر الشراء</span>
                            </span>
                            <span>
                                <a href="{{ route('Purchase_orders.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Purchase_Invoices.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-invoice-dollar side-icon"></i>
                                <span>فواتير المشتريات </span>
                            </span>
                            <span>
                                <a href="{{ route('Purchase_Invoices.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Supplierbond.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i>
                                <span>سندات الموردين </span>
                            </span>
                            <span>
                                <a href="{{ route('Supplierbond.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ReturnsPurchase_Invoices.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-invoice-dollar side-icon"></i>
                                <span>اشعارات مدينة</span>
                            </span>
                            <span>
                                <a href="{{ route('ReturnsPurchase_Invoices.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-building-columns side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">الاصول الثابتة
                    <i class="fa fa-angle-down pull_right_4"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu6" data-bs-parent="#menu">
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-building side-icon"></i>
                                <span>الاصول الثابتة</span>
                            </span>
                            <span>
                                <a href="" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('drop.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-recycle side-icon"></i> الاهلاك </span>
                            <span>
                                <a href="{{ route('drop.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-folder-open side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">الرواتب
                    <i class="fa fa-angle-down pull_right_5"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu4" data-bs-parent="#menu">
                <li>
                    <a href="{{ route('employe.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i> الموظفين </span>
                            <span>
                                <a href="{{ route('employe.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i>مسير الرواتب </span>
                            <span>
                                <a href="{{route('payroll.create')}}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('advance.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i> السلف </span>
                            <span>
                                <a href="{{ route('advance.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('reward.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i> المكافات </span>
                            <span>
                                <a href="{{ route('reward.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('discount.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-lines side-icon"></i> الخصومات </span>
                            <span>
                                <a href="{{ route('discount.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-money-bill-wave side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">المحاسبة
                    <i class="fa fa-angle-down pull_right_6"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu5" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="{{ route('EasyRestriction.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-globe side-icon"></i>
                                <span>قيود سهلة</span>
                            </span>
                            <span>
                                <a href="{{ route('EasyRestriction.tenant') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('DailyAccountingEntries.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-wallet side-icon"></i>
                                <span>قيود محاسبية يدوية</span>
                            </span>
                            <span>
                                <a href="{{ route('DailyAccountingEntries.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Account.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-chart-simple side-icon"></i>
                                <span>شجرة الحسابات</span>
                            </span>
                            <span>
                                <a href="{{ route('Account.create') }}" class="add-feature-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('report.index') }}" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-folder side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">التقارير</span>
            </a>
        </li>
        <li>
            <a href="mohasba-service.html" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-layer-group side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">خدمات محاسبة</span>
            </a>
        </li>
        <li>
            <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle clicked-item">
                <i class="fa-solid fa-gear side-icon"></i>
                <span class="ms-4  d-sm-inline toggle-span"> الإعدادات العامه</span>
                    <i class="fa fa-angle-down pull_right_9"></i>

            </a>
            <ul class="collapse  nav flex-column ms-1 content_nav" id="submenu8" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class="ml-4 d-sm-inline text">
                                <i class="fa-solid fa-gear side-icon"></i>
                                <span>الإعدادات العامة</span>
                            </span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-gear side-icon"></i>
                                <span> اعدادات الإشتراكات</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-rocket side-icon"></i>
                                <span> الربط الإلكتروني</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-gear side-icon"></i>
                                <span> اعدادات الرواتب</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=" {{ route('tax.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-gear side-icon"></i>
                                <span> الضرائب</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-user side-icon"></i>
                                <span> المستخدمين</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('PaymentTerms.index') }}" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-file-circle-xmark side-icon"></i>
                                <span> شروط الدفع</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-paste side-icon"></i>
                                <span> الحقول الإضافية</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-regular fa-pen-to-square side-icon"></i>
                                <span> تعديل الملف الشخصي</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link px-0">
                        <div class="space">
                            <span class=" d-sm-inline text">
                                <i class="fa-solid fa-paperclip side-icon"></i>
                                <span> المرفقات</span>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-circle-question side-icon"></i>
                <span class="ms-1  d-sm-inline toggle-span">مركز المساعدة</span>
            </a>
        </li>
    </ul>
</aside>
