@extends('layouts.vertical', ['title' => 'انشاء منصب '])
@section('css')
<style>
    .table tr{
        line-height:3;
    }
    .perm tr th:first-of-type,
    .perm tr td:first-of-type {
       padding-right:20px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <section id="content-wrapper" class="content-header">
        <div class="row">
    
            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
    
                    <li><span class="text-dark ml-3">الصفحة الرئيسية</span></li>
                    <li><span class="text-dark ml-3"><i class="fa fa-angle-double-left mx-2 "></i>الاعدادات</span></li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="">المنصب</a>
                    </li>
                </ul>
            </div>
    
    
        </div>
    </section>
    
    <section>
        <div class="d-flex justify-content-sm-end mx-2">
            <button class="btn btn-primary btn-sm mx-2">
                 رجوع
                <i class="fa fa-arrow-left"></i>
            </button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">
                    <h4 class="mx-4">إضافة صلاحيات</h4>
                </div>
            </div>
            <div class="row bg-light brdr">
                <div class="col-12" style="background:white;min-height:60vh;">
                    <div class="mt-5 d-flex">
                        <label class="d-flex">
                          <span>
                              اسم المنصب
                          </span>
                          <span class="text-danger" style="font-size: 25px;margin-right:5px;">*</span>
                        </label>  
                        <input name="" id="" class="form-control" style="width:300px;margin-right:20px;">
                    </div>
                    <h5 class="mt-3 text-primary text-right">
                        الصلاحيات
                    </h5>
                    <div class="mt-3 row">
                            <div class="col-md-12">
                                <div class="responsive-scroll">
                                    <table id="" class="table text-right perm">
                                        <thead class="table-head">
                                            <tr>
                                                <th class="col">الخدمة</th>
                                                <th class="col">القراءة</th>
                                                <th class="col">الإنشاء</th>
                                                <th class="col">الحذف</th>
                                                <th class="col">الموافقة</th>
                                            </tr>
                                        </thead>
                                        <!--<tbody >-->
                                        <!--    <tr>-->
                                        <!--        <td class="bold">-->
                                        <!--        لوحة المتابعة-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td></td>-->
                                        <!--        <td></td>-->
                                        <!--        <td></td>-->
                                        <!--    </tr>-->
                                        <!--    <tr>-->
                                        <!--        <td class="bold">-->
                                        <!--        المبيعات-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--    </tr>-->
                                        <!--    <tr>-->
                                        <!--        <td>-->
                                        <!--        المنتجات-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--        <td>-->
                                        <!--            <input type="checkbox" name="" class="" value="" id="" />-->
                                        <!--        </td>-->
                                        <!--    </tr>-->
                                        <!--</tbody>-->
                                        <tbody>
                                            <tr class="parent-0 dashboard" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            لوحة المتابعة
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Dashboards_1][]" class="ace read" data-index="0" data-action="read" value="read_" id="Permission0Read" />
                                            <label for="Permission0Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-1 sales" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            المبيعات
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Sales_2][]" class="ace read" data-index="1" data-action="read" value="read_" id="Permission1Read" />
                                            <label for="Permission1Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Sales_2][]" class="ace write" data-index="1" data-action="write" value="write_" id="Permission1Write" />
                                            <label for="Permission1Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Sales_2][]" class="ace remove" data-index="1" data-action="remove" value="remove_" id="Permission1Remove" />
                                            <label for="Permission1Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Sales_2][]" class="ace approve" data-index="1" data-action="approve" value="approve_" id="Permission1Approve" />
                                            <label for="Permission1Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-0 products" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">المنتجات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Products_3][]" class="ace read" data-index="0" data-parent-index="1" data-action="read" value="read_" id="Permission10Read" />
                                            <label for="Permission10Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Products_3][]" class="ace write" data-index="0" data-parent-index="1" data-action="write" value="write_" id="Permission10Write" />
                                            <label for="Permission10Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Products_3][]" class="ace remove" data-index="0" data-parent-index="1" data-action="remove" value="remove_" id="Permission10Remove" />
                                            <label for="Permission10Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Products_3][]" class="ace approve" data-index="0" data-parent-index="1" data-action="approve" value="approve_" id="Permission10Approve" />
                                            <label for="Permission10Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-1 categories" data-linked="[&quot;products&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">أصناف المنتجات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Categories_4][]" class="ace read" data-index="1" data-parent-index="1" data-action="read" value="read_" id="Permission11Read" />
                                            <label for="Permission11Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Categories_4][]" class="ace write" data-index="1" data-parent-index="1" data-action="write" value="write_" id="Permission11Write" />
                                            <label for="Permission11Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Categories_4][]" class="ace remove" data-index="1" data-parent-index="1" data-action="remove" value="remove_" id="Permission11Remove" />
                                            <label for="Permission11Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Categories_4][]" class="ace approve" data-index="1" data-parent-index="1" data-action="approve" value="approve_" id="Permission11Approve" />
                                            <label for="Permission11Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-2 unit_types" data-linked="[&quot;products&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">وحدات القياس</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Unit Types_5][]" class="ace read" data-index="2" data-parent-index="1" data-action="read" value="read_" id="Permission12Read" />
                                            <label for="Permission12Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Unit Types_5][]" class="ace write" data-index="2" data-parent-index="1" data-action="write" value="write_" id="Permission12Write" />
                                            <label for="Permission12Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Unit Types_5][]" class="ace remove" data-index="2" data-parent-index="1" data-action="remove" value="remove_" id="Permission12Remove" />
                                            <label for="Permission12Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Unit Types_5][]" class="ace approve" data-index="2" data-parent-index="1" data-action="approve" value="approve_" id="Permission12Approve" />
                                            <label for="Permission12Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-3 customers" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">العملاء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Customers_6][]" class="ace read" data-index="3" data-parent-index="1" data-action="read" value="read_" id="Permission13Read" />
                                            <label for="Permission13Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Customers_6][]" class="ace write" data-index="3" data-parent-index="1" data-action="write" value="write_" id="Permission13Write" />
                                            <label for="Permission13Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Customers_6][]" class="ace remove" data-index="3" data-parent-index="1" data-action="remove" value="remove_" id="Permission13Remove" />
                                            <label for="Permission13Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Customers_6][]" class="ace approve" data-index="3" data-parent-index="1" data-action="approve" value="approve_" id="Permission13Approve" />
                                            <label for="Permission13Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-4 invoices" data-linked="[&quot;tax_and_price&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">الفواتير</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Invoices_7][]" class="ace read" data-index="4" data-parent-index="1" data-action="read" value="read_" id="Permission14Read" />
                                            <label for="Permission14Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Invoices_7][]" class="ace write" data-index="4" data-parent-index="1" data-action="write" value="write_" id="Permission14Write" />
                                            <label for="Permission14Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Invoices_7][]" class="ace remove" data-index="4" data-parent-index="1" data-action="remove" value="remove_" id="Permission14Remove" />
                                            <label for="Permission14Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Invoices_7][]" class="ace approve" data-index="4" data-parent-index="1" data-action="approve" value="approve_" id="Permission14Approve" />
                                            <label for="Permission14Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-5 quotations" data-linked="[&quot;tax_and_price&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">عرض الأسعار</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Quotations_8][]" class="ace read" data-index="5" data-parent-index="1" data-action="read" value="read_" id="Permission15Read" />
                                            <label for="Permission15Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Quotations_8][]" class="ace write" data-index="5" data-parent-index="1" data-action="write" value="write_" id="Permission15Write" />
                                            <label for="Permission15Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Quotations_8][]" class="ace remove" data-index="5" data-parent-index="1" data-action="remove" value="remove_" id="Permission15Remove" />
                                            <label for="Permission15Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Quotations_8][]" class="ace approve" data-index="5" data-parent-index="1" data-action="approve" value="approve_" id="Permission15Approve" />
                                            <label for="Permission15Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-6 credit_notes" data-linked="[&quot;invoices&quot;,&quot;tax_and_price&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإشعارات الدائنة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Credit Notes_9][]" class="ace read" data-index="6" data-parent-index="1" data-action="read" value="read_" id="Permission16Read" />
                                            <label for="Permission16Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Credit Notes_9][]" class="ace write" data-index="6" data-parent-index="1" data-action="write" value="write_" id="Permission16Write" />
                                            <label for="Permission16Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Credit Notes_9][]" class="ace remove" data-index="6" data-parent-index="1" data-action="remove" value="remove_" id="Permission16Remove" />
                                            <label for="Permission16Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Credit Notes_9][]" class="ace approve" data-index="6" data-parent-index="1" data-action="approve" value="approve_" id="Permission16Approve" />
                                            <label for="Permission16Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-7 inventories" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">المواقع</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Inventories_10][]" class="ace read" data-index="7" data-parent-index="1" data-action="read" value="read_" id="Permission17Read" />
                                            <label for="Permission17Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Inventories_10][]" class="ace write" data-index="7" data-parent-index="1" data-action="write" value="write_" id="Permission17Write" />
                                            <label for="Permission17Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Inventories_10][]" class="ace remove" data-index="7" data-parent-index="1" data-action="remove" value="remove_" id="Permission17Remove" />
                                            <label for="Permission17Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Inventories_10][]" class="ace approve" data-index="7" data-parent-index="1" data-action="approve" value="approve_" id="Permission17Approve" />
                                            <label for="Permission17Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-8 productions" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">أوامر التصنيع</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Productions_11][]" class="ace read" data-index="8" data-parent-index="1" data-action="read" value="read_" id="Permission18Read" />
                                            <label for="Permission18Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Productions_11][]" class="ace write" data-index="8" data-parent-index="1" data-action="write" value="write_" id="Permission18Write" />
                                            <label for="Permission18Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Productions_11][]" class="ace remove" data-index="8" data-parent-index="1" data-action="remove" value="remove_" id="Permission18Remove" />
                                            <label for="Permission18Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Productions_11][]" class="ace approve" data-index="8" data-parent-index="1" data-action="approve" value="approve_" id="Permission18Approve" />
                                            <label for="Permission18Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-9 inventory_transfers" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">نقل المخزون</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Inventory Transfers_12][]" class="ace read" data-index="9" data-parent-index="1" data-action="read" value="read_" id="Permission19Read" />
                                            <label for="Permission19Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Inventory Transfers_12][]" class="ace write" data-index="9" data-parent-index="1" data-action="write" value="write_" id="Permission19Write" />
                                            <label for="Permission19Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Inventory Transfers_12][]" class="ace remove" data-index="9" data-parent-index="1" data-action="remove" value="remove_" id="Permission19Remove" />
                                            <label for="Permission19Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Inventory Transfers_12][]" class="ace approve" data-index="9" data-parent-index="1" data-action="approve" value="approve_" id="Permission19Approve" />
                                            <label for="Permission19Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-10 stock_takes" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">جرد المخزون</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Stock Takes_13][]" class="ace read" data-index="10" data-parent-index="1" data-action="read" value="read_" id="Permission110Read" />
                                            <label for="Permission110Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Stock Takes_13][]" class="ace write" data-index="10" data-parent-index="1" data-action="write" value="write_" id="Permission110Write" />
                                            <label for="Permission110Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Stock Takes_13][]" class="ace remove" data-index="10" data-parent-index="1" data-action="remove" value="remove_" id="Permission110Remove" />
                                            <label for="Permission110Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Stock Takes_13][]" class="ace approve" data-index="10" data-parent-index="1" data-action="approve" value="approve_" id="Permission110Approve" />
                                            <label for="Permission110Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-11 customer_receipts" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">سندات العملاء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Customer Receipts_14][]" class="ace read" data-index="11" data-parent-index="1" data-action="read" value="read_" id="Permission111Read" />
                                            <label for="Permission111Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Customer Receipts_14][]" class="ace write" data-index="11" data-parent-index="1" data-action="write" value="write_" id="Permission111Write" />
                                            <label for="Permission111Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Customer Receipts_14][]" class="ace remove" data-index="11" data-parent-index="1" data-action="remove" value="remove_" id="Permission111Remove" />
                                            <label for="Permission111Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Customer Receipts_14][]" class="ace approve" data-index="11" data-parent-index="1" data-action="approve" value="approve_" id="Permission111Approve" />
                                            <label for="Permission111Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-1-12 tax_and_price" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تعديل الضريبة وسعر الوحدة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Sales Modify Tax and Unit Prices_15][]" class="ace read" data-index="12" data-parent-index="1" data-action="read" value="read_" id="Permission112Read" />
                                            <label for="Permission112Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Sales Modify Tax and Unit Prices_15][]" class="ace write" data-index="12" data-parent-index="1" data-action="write" value="write_" id="Permission112Write" />
                                            <label for="Permission112Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Sales Modify Tax and Unit Prices_15][]" class="ace remove" data-index="12" data-parent-index="1" data-action="remove" value="remove_" id="Permission112Remove" />
                                            <label for="Permission112Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Sales Modify Tax and Unit Prices_15][]" class="ace approve" data-index="12" data-parent-index="1" data-action="approve" value="approve_" id="Permission112Approve" />
                                            <label for="Permission112Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-2 purchases" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            المشتريات
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Purchases_16][]" class="ace read" data-index="2" data-action="read" value="read_" id="Permission2Read" />
                                            <label for="Permission2Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Purchases_16][]" class="ace write" data-index="2" data-action="write" value="write_" id="Permission2Write" />
                                            <label for="Permission2Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Purchases_16][]" class="ace remove" data-index="2" data-action="remove" value="remove_" id="Permission2Remove" />
                                            <label for="Permission2Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Purchases_16][]" class="ace approve" data-index="2" data-action="approve" value="approve_" id="Permission2Approve" />
                                            <label for="Permission2Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-0 vendors" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الموردين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Vendors_17][]" class="ace read" data-index="0" data-parent-index="2" data-action="read" value="read_" id="Permission20Read" />
                                            <label for="Permission20Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Vendors_17][]" class="ace write" data-index="0" data-parent-index="2" data-action="write" value="write_" id="Permission20Write" />
                                            <label for="Permission20Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Vendors_17][]" class="ace remove" data-index="0" data-parent-index="2" data-action="remove" value="remove_" id="Permission20Remove" />
                                            <label for="Permission20Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Vendors_17][]" class="ace approve" data-index="0" data-parent-index="2" data-action="approve" value="approve_" id="Permission20Approve" />
                                            <label for="Permission20Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-1 orders" data-linked="[&quot;tax_and_price_purchases&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">أوامر الشراء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Orders_18][]" class="ace read" data-index="1" data-parent-index="2" data-action="read" value="read_" id="Permission21Read" />
                                            <label for="Permission21Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Orders_18][]" class="ace write" data-index="1" data-parent-index="2" data-action="write" value="write_" id="Permission21Write" />
                                            <label for="Permission21Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Orders_18][]" class="ace remove" data-index="1" data-parent-index="2" data-action="remove" value="remove_" id="Permission21Remove" />
                                            <label for="Permission21Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Orders_18][]" class="ace approve" data-index="1" data-parent-index="2" data-action="approve" value="approve_" id="Permission21Approve" />
                                            <label for="Permission21Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-2 bills" data-linked="[&quot;tax_and_price_purchases&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">الفواتير</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Bills_19][]" class="ace read" data-index="2" data-parent-index="2" data-action="read" value="read_" id="Permission22Read" />
                                            <label for="Permission22Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Bills_19][]" class="ace write" data-index="2" data-parent-index="2" data-action="write" value="write_" id="Permission22Write" />
                                            <label for="Permission22Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Bills_19][]" class="ace remove" data-index="2" data-parent-index="2" data-action="remove" value="remove_" id="Permission22Remove" />
                                            <label for="Permission22Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Bills_19][]" class="ace approve" data-index="2" data-parent-index="2" data-action="approve" value="approve_" id="Permission22Approve" />
                                            <label for="Permission22Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-3 simple_bills" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الفواتير المبسطة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Simple Bills_20][]" class="ace read" data-index="3" data-parent-index="2" data-action="read" value="read_" id="Permission23Read" />
                                            <label for="Permission23Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Simple Bills_20][]" class="ace write" data-index="3" data-parent-index="2" data-action="write" value="write_" id="Permission23Write" />
                                            <label for="Permission23Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Simple Bills_20][]" class="ace remove" data-index="3" data-parent-index="2" data-action="remove" value="remove_" id="Permission23Remove" />
                                            <label for="Permission23Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Simple Bills_20][]" class="ace approve" data-index="3" data-parent-index="2" data-action="approve" value="approve_" id="Permission23Approve" />
                                            <label for="Permission23Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-4 debit_notes" data-linked="[&quot;tax_and_price_purchases&quot;,&quot;bills&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإشعارات المدينة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Debit Notes_21][]" class="ace read" data-index="4" data-parent-index="2" data-action="read" value="read_" id="Permission24Read" />
                                            <label for="Permission24Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Debit Notes_21][]" class="ace write" data-index="4" data-parent-index="2" data-action="write" value="write_" id="Permission24Write" />
                                            <label for="Permission24Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Debit Notes_21][]" class="ace remove" data-index="4" data-parent-index="2" data-action="remove" value="remove_" id="Permission24Remove" />
                                            <label for="Permission24Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Debit Notes_21][]" class="ace approve" data-index="4" data-parent-index="2" data-action="approve" value="approve_" id="Permission24Approve" />
                                            <label for="Permission24Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-5 vendor_receipts" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">سندات الموردين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Vendor Receipts_22][]" class="ace read" data-index="5" data-parent-index="2" data-action="read" value="read_" id="Permission25Read" />
                                            <label for="Permission25Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Vendor Receipts_22][]" class="ace write" data-index="5" data-parent-index="2" data-action="write" value="write_" id="Permission25Write" />
                                            <label for="Permission25Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Vendor Receipts_22][]" class="ace remove" data-index="5" data-parent-index="2" data-action="remove" value="remove_" id="Permission25Remove" />
                                            <label for="Permission25Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Vendor Receipts_22][]" class="ace approve" data-index="5" data-parent-index="2" data-action="approve" value="approve_" id="Permission25Approve" />
                                            <label for="Permission25Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-6 tax_and_price_purchases" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تعديل الضريبة وسعر الوحدة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Purchases Modify Tax and Unit Prices_23][]" class="ace read" data-index="6" data-parent-index="2" data-action="read" value="read_" id="Permission26Read" />
                                            <label for="Permission26Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Purchases Modify Tax and Unit Prices_23][]" class="ace write" data-index="6" data-parent-index="2" data-action="write" value="write_" id="Permission26Write" />
                                            <label for="Permission26Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Purchases Modify Tax and Unit Prices_23][]" class="ace remove" data-index="6" data-parent-index="2" data-action="remove" value="remove_" id="Permission26Remove" />
                                            <label for="Permission26Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Purchases Modify Tax and Unit Prices_23][]" class="ace approve" data-index="6" data-parent-index="2" data-action="approve" value="approve_" id="Permission26Approve" />
                                            <label for="Permission26Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-2-7 purchase_fixed_assets" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">شراء أصل ثابت</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Purchase Fixed Assets_24][]" class="ace read" data-index="7" data-parent-index="2" data-action="read" value="read_" id="Permission27Read" />
                                            <label for="Permission27Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Purchase Fixed Assets_24][]" class="ace write" data-index="7" data-parent-index="2" data-action="write" value="write_" id="Permission27Write" />
                                            <label for="Permission27Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Purchase Fixed Assets_24][]" class="ace remove" data-index="7" data-parent-index="2" data-action="remove" value="remove_" id="Permission27Remove" />
                                            <label for="Permission27Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Purchase Fixed Assets_24][]" class="ace approve" data-index="7" data-parent-index="2" data-action="approve" value="approve_" id="Permission27Approve" />
                                            <label for="Permission27Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-3 human_resources" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            الرواتب
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Payrolls_25][]" class="ace read" data-index="3" data-action="read" value="read_" id="Permission3Read" />
                                            <label for="Permission3Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Payrolls_25][]" class="ace write" data-index="3" data-action="write" value="write_" id="Permission3Write" />
                                            <label for="Permission3Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Payrolls_25][]" class="ace remove" data-index="3" data-action="remove" value="remove_" id="Permission3Remove" />
                                            <label for="Permission3Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Payrolls_25][]" class="ace approve" data-index="3" data-action="approve" value="approve_" id="Permission3Approve" />
                                            <label for="Permission3Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-0 payroll_runs" data-linked="[&quot;payslips&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">مسير الرواتب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Payroll Runs_26][]" class="ace read" data-index="0" data-parent-index="3" data-action="read" value="read_" id="Permission30Read" />
                                            <label for="Permission30Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Payroll Runs_26][]" class="ace write" data-index="0" data-parent-index="3" data-action="write" value="write_" id="Permission30Write" />
                                            <label for="Permission30Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Payroll Runs_26][]" class="ace remove" data-index="0" data-parent-index="3" data-action="remove" value="remove_" id="Permission30Remove" />
                                            <label for="Permission30Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Payroll Runs_26][]" class="ace approve" data-index="0" data-parent-index="3" data-action="approve" value="approve_" id="Permission30Approve" />
                                            <label for="Permission30Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-1 employees" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الموظفين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Employees_27][]" class="ace read" data-index="1" data-parent-index="3" data-action="read" value="read_" id="Permission31Read" />
                                            <label for="Permission31Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Employees_27][]" class="ace write" data-index="1" data-parent-index="3" data-action="write" value="write_" id="Permission31Write" />
                                            <label for="Permission31Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Employees_27][]" class="ace remove" data-index="1" data-parent-index="3" data-action="remove" value="remove_" id="Permission31Remove" />
                                            <label for="Permission31Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Employees_27][]" class="ace approve" data-index="1" data-parent-index="3" data-action="approve" value="approve_" id="Permission31Approve" />
                                            <label for="Permission31Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-2 employee_payments" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">سندات الموظفين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Employee Payments_28][]" class="ace read" data-index="2" data-parent-index="3" data-action="read" value="read_" id="Permission32Read" />
                                            <label for="Permission32Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Employee Payments_28][]" class="ace write" data-index="2" data-parent-index="3" data-action="write" value="write_" id="Permission32Write" />
                                            <label for="Permission32Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Employee Payments_28][]" class="ace remove" data-index="2" data-parent-index="3" data-action="remove" value="remove_" id="Permission32Remove" />
                                            <label for="Permission32Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Employee Payments_28][]" class="ace approve" data-index="2" data-parent-index="3" data-action="approve" value="approve_" id="Permission32Approve" />
                                            <label for="Permission32Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-3 schedules" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">جداول العمل</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Schedules_29][]" class="ace read" data-index="3" data-parent-index="3" data-action="read" value="read_" id="Permission33Read" />
                                            <label for="Permission33Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Schedules_29][]" class="ace write" data-index="3" data-parent-index="3" data-action="write" value="write_" id="Permission33Write" />
                                            <label for="Permission33Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Schedules_29][]" class="ace remove" data-index="3" data-parent-index="3" data-action="remove" value="remove_" id="Permission33Remove" />
                                            <label for="Permission33Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Schedules_29][]" class="ace approve" data-index="3" data-parent-index="3" data-action="approve" value="approve_" id="Permission33Approve" />
                                            <label for="Permission33Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-4 payslips" data-linked="[&quot;payroll_runs&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">إيصالات الرواتب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Payslips_30][]" class="ace read" data-index="4" data-parent-index="3" data-action="read" value="read_" id="Permission34Read" />
                                            <label for="Permission34Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Payslips_30][]" class="ace write" data-index="4" data-parent-index="3" data-action="write" value="write_" id="Permission34Write" />
                                            <label for="Permission34Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Payslips_30][]" class="ace remove" data-index="4" data-parent-index="3" data-action="remove" value="remove_" id="Permission34Remove" />
                                            <label for="Permission34Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Payslips_30][]" class="ace approve" data-index="4" data-parent-index="3" data-action="approve" value="approve_" id="Permission34Approve" />
                                            <label for="Permission34Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-5 loans" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">السلف</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Loans_31][]" class="ace read" data-index="5" data-parent-index="3" data-action="read" value="read_" id="Permission35Read" />
                                            <label for="Permission35Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Loans_31][]" class="ace write" data-index="5" data-parent-index="3" data-action="write" value="write_" id="Permission35Write" />
                                            <label for="Permission35Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Loans_31][]" class="ace remove" data-index="5" data-parent-index="3" data-action="remove" value="remove_" id="Permission35Remove" />
                                            <label for="Permission35Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Loans_31][]" class="ace approve" data-index="5" data-parent-index="3" data-action="approve" value="approve_" id="Permission35Approve" />
                                            <label for="Permission35Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-6 bonuses" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">المكافآت</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Bonuses_32][]" class="ace read" data-index="6" data-parent-index="3" data-action="read" value="read_" id="Permission36Read" />
                                            <label for="Permission36Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Bonuses_32][]" class="ace write" data-index="6" data-parent-index="3" data-action="write" value="write_" id="Permission36Write" />
                                            <label for="Permission36Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Bonuses_32][]" class="ace remove" data-index="6" data-parent-index="3" data-action="remove" value="remove_" id="Permission36Remove" />
                                            <label for="Permission36Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Bonuses_32][]" class="ace approve" data-index="6" data-parent-index="3" data-action="approve" value="approve_" id="Permission36Approve" />
                                            <label for="Permission36Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-3-7 deductions" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الخصومات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Deductions_33][]" class="ace read" data-index="7" data-parent-index="3" data-action="read" value="read_" id="Permission37Read" />
                                            <label for="Permission37Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Deductions_33][]" class="ace write" data-index="7" data-parent-index="3" data-action="write" value="write_" id="Permission37Write" />
                                            <label for="Permission37Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Deductions_33][]" class="ace remove" data-index="7" data-parent-index="3" data-action="remove" value="remove_" id="Permission37Remove" />
                                            <label for="Permission37Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Deductions_33][]" class="ace approve" data-index="7" data-parent-index="3" data-action="approve" value="approve_" id="Permission37Approve" />
                                            <label for="Permission37Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-4 reports" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            تقارير
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Reports_34][]" class="ace read" data-index="4" data-action="read" value="read_" id="Permission4Read" />
                                            <label for="Permission4Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Reports_34][]" class="ace write" data-index="4" data-action="write" value="write_" id="Permission4Write" />
                                            <label for="Permission4Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Reports_34][]" class="ace remove" data-index="4" data-action="remove" value="remove_" id="Permission4Remove" />
                                            <label for="Permission4Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Reports_34][]" class="ace approve" data-index="4" data-action="approve" value="approve_" id="Permission4Approve" />
                                            <label for="Permission4Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-0 ledgers" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">دفتر الأستاذ</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Ledgers_35][]" class="ace read" data-index="0" data-parent-index="4" data-action="read" value="read_" id="Permission40Read" />
                                            <label for="Permission40Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Ledgers_35][]" class="ace write" data-index="0" data-parent-index="4" data-action="write" value="write_" id="Permission40Write" />
                                            <label for="Permission40Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Ledgers_35][]" class="ace remove" data-index="0" data-parent-index="4" data-action="remove" value="remove_" id="Permission40Remove" />
                                            <label for="Permission40Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Ledgers_35][]" class="ace approve" data-index="0" data-parent-index="4" data-action="approve" value="approve_" id="Permission40Approve" />
                                            <label for="Permission40Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-1 income_statement" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">قائمة الدخل</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Income Statements_36][]" class="ace read" data-index="1" data-parent-index="4" data-action="read" value="read_" id="Permission41Read" />
                                            <label for="Permission41Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Income Statements_36][]" class="ace write" data-index="1" data-parent-index="4" data-action="write" value="write_" id="Permission41Write" />
                                            <label for="Permission41Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Income Statements_36][]" class="ace remove" data-index="1" data-parent-index="4" data-action="remove" value="remove_" id="Permission41Remove" />
                                            <label for="Permission41Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Income Statements_36][]" class="ace approve" data-index="1" data-parent-index="4" data-action="approve" value="approve_" id="Permission41Approve" />
                                            <label for="Permission41Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-2 balance_sheet" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الميزانية العمومية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Balance Sheets_37][]" class="ace read" data-index="2" data-parent-index="4" data-action="read" value="read_" id="Permission42Read" />
                                            <label for="Permission42Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Balance Sheets_37][]" class="ace write" data-index="2" data-parent-index="4" data-action="write" value="write_" id="Permission42Write" />
                                            <label for="Permission42Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Balance Sheets_37][]" class="ace remove" data-index="2" data-parent-index="4" data-action="remove" value="remove_" id="Permission42Remove" />
                                            <label for="Permission42Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Balance Sheets_37][]" class="ace approve" data-index="2" data-parent-index="4" data-action="approve" value="approve_" id="Permission42Approve" />
                                            <label for="Permission42Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-3 trial_balance" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ميزان المراجعة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Trial Balances_38][]" class="ace read" data-index="3" data-parent-index="4" data-action="read" value="read_" id="Permission43Read" />
                                            <label for="Permission43Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Trial Balances_38][]" class="ace write" data-index="3" data-parent-index="4" data-action="write" value="write_" id="Permission43Write" />
                                            <label for="Permission43Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Trial Balances_38][]" class="ace remove" data-index="3" data-parent-index="4" data-action="remove" value="remove_" id="Permission43Remove" />
                                            <label for="Permission43Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Trial Balances_38][]" class="ace approve" data-index="3" data-parent-index="4" data-action="approve" value="approve_" id="Permission43Approve" />
                                            <label for="Permission43Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-4 journal_report" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">دفتر القيود</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Journal Reports_39][]" class="ace read" data-index="4" data-parent-index="4" data-action="read" value="read_" id="Permission44Read" />
                                            <label for="Permission44Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Journal Reports_39][]" class="ace write" data-index="4" data-parent-index="4" data-action="write" value="write_" id="Permission44Write" />
                                            <label for="Permission44Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Journal Reports_39][]" class="ace remove" data-index="4" data-parent-index="4" data-action="remove" value="remove_" id="Permission44Remove" />
                                            <label for="Permission44Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Journal Reports_39][]" class="ace approve" data-index="4" data-parent-index="4" data-action="approve" value="approve_" id="Permission44Approve" />
                                            <label for="Permission44Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-5 inventory_items_summary" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ملخص المبيعات والمشتريات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Inventory Reports_40][]" class="ace read" data-index="5" data-parent-index="4" data-action="read" value="read_" id="Permission45Read" />
                                            <label for="Permission45Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Inventory Reports_40][]" class="ace write" data-index="5" data-parent-index="4" data-action="write" value="write_" id="Permission45Write" />
                                            <label for="Permission45Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Inventory Reports_40][]" class="ace remove" data-index="5" data-parent-index="4" data-action="remove" value="remove_" id="Permission45Remove" />
                                            <label for="Permission45Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Inventory Reports_40][]" class="ace approve" data-index="5" data-parent-index="4" data-action="approve" value="approve_" id="Permission45Approve" />
                                            <label for="Permission45Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-6 account_summary" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ملخص الحساب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Account Summaries_41][]" class="ace read" data-index="6" data-parent-index="4" data-action="read" value="read_" id="Permission46Read" />
                                            <label for="Permission46Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Account Summaries_41][]" class="ace write" data-index="6" data-parent-index="4" data-action="write" value="write_" id="Permission46Write" />
                                            <label for="Permission46Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Account Summaries_41][]" class="ace remove" data-index="6" data-parent-index="4" data-action="remove" value="remove_" id="Permission46Remove" />
                                            <label for="Permission46Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Account Summaries_41][]" class="ace approve" data-index="6" data-parent-index="4" data-action="approve" value="approve_" id="Permission46Approve" />
                                            <label for="Permission46Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-7 account_statement" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">كشف الحساب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Account Statements_42][]" class="ace read" data-index="7" data-parent-index="4" data-action="read" value="read_" id="Permission47Read" />
                                            <label for="Permission47Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Account Statements_42][]" class="ace write" data-index="7" data-parent-index="4" data-action="write" value="write_" id="Permission47Write" />
                                            <label for="Permission47Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Account Statements_42][]" class="ace remove" data-index="7" data-parent-index="4" data-action="remove" value="remove_" id="Permission47Remove" />
                                            <label for="Permission47Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Account Statements_42][]" class="ace approve" data-index="7" data-parent-index="4" data-action="approve" value="approve_" id="Permission47Approve" />
                                            <label for="Permission47Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-8 ar_by_customer" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ملخص مستحقات العملاء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[AR BY Customers_43][]" class="ace read" data-index="8" data-parent-index="4" data-action="read" value="read_" id="Permission48Read" />
                                            <label for="Permission48Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[AR BY Customers_43][]" class="ace write" data-index="8" data-parent-index="4" data-action="write" value="write_" id="Permission48Write" />
                                            <label for="Permission48Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[AR BY Customers_43][]" class="ace remove" data-index="8" data-parent-index="4" data-action="remove" value="remove_" id="Permission48Remove" />
                                            <label for="Permission48Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[AR BY Customers_43][]" class="ace approve" data-index="8" data-parent-index="4" data-action="approve" value="approve_" id="Permission48Approve" />
                                            <label for="Permission48Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-9 aged_open_invoices" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">أعمار ديون العملاء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Aged Open Invoices_44][]" class="ace read" data-index="9" data-parent-index="4" data-action="read" value="read_" id="Permission49Read" />
                                            <label for="Permission49Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Aged Open Invoices_44][]" class="ace write" data-index="9" data-parent-index="4" data-action="write" value="write_" id="Permission49Write" />
                                            <label for="Permission49Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Aged Open Invoices_44][]" class="ace remove" data-index="9" data-parent-index="4" data-action="remove" value="remove_" id="Permission49Remove" />
                                            <label for="Permission49Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Aged Open Invoices_44][]" class="ace approve" data-index="9" data-parent-index="4" data-action="approve" value="approve_" id="Permission49Approve" />
                                            <label for="Permission49Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-10 aged_open_quotation" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">أعمار عروض الأسعار المفتوحة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Aged Open Quotations_45][]" class="ace read" data-index="10" data-parent-index="4" data-action="read" value="read_" id="Permission410Read" />
                                            <label for="Permission410Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Aged Open Quotations_45][]" class="ace write" data-index="10" data-parent-index="4" data-action="write" value="write_" id="Permission410Write" />
                                            <label for="Permission410Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Aged Open Quotations_45][]" class="ace remove" data-index="10" data-parent-index="4" data-action="remove" value="remove_" id="Permission410Remove" />
                                            <label for="Permission410Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Aged Open Quotations_45][]" class="ace approve" data-index="10" data-parent-index="4" data-action="approve" value="approve_" id="Permission410Approve" />
                                            <label for="Permission410Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-11 ap_by_vendor" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ملخص مستحقات الموردين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[AP By Vendors_46][]" class="ace read" data-index="11" data-parent-index="4" data-action="read" value="read_" id="Permission411Read" />
                                            <label for="Permission411Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[AP By Vendors_46][]" class="ace write" data-index="11" data-parent-index="4" data-action="write" value="write_" id="Permission411Write" />
                                            <label for="Permission411Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[AP By Vendors_46][]" class="ace remove" data-index="11" data-parent-index="4" data-action="remove" value="remove_" id="Permission411Remove" />
                                            <label for="Permission411Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[AP By Vendors_46][]" class="ace approve" data-index="11" data-parent-index="4" data-action="approve" value="approve_" id="Permission411Approve" />
                                            <label for="Permission411Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-12 aged_open_bills" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">أعمار ديون الموردين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Aged Open Bills_47][]" class="ace read" data-index="12" data-parent-index="4" data-action="read" value="read_" id="Permission412Read" />
                                            <label for="Permission412Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Aged Open Bills_47][]" class="ace write" data-index="12" data-parent-index="4" data-action="write" value="write_" id="Permission412Write" />
                                            <label for="Permission412Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Aged Open Bills_47][]" class="ace remove" data-index="12" data-parent-index="4" data-action="remove" value="remove_" id="Permission412Remove" />
                                            <label for="Permission412Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Aged Open Bills_47][]" class="ace approve" data-index="12" data-parent-index="4" data-action="approve" value="approve_" id="Permission412Approve" />
                                            <label for="Permission412Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-13 aged_open_work_orders" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">أعمار أوامر الشراء</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Aged Open Work Orders_48][]" class="ace read" data-index="13" data-parent-index="4" data-action="read" value="read_" id="Permission413Read" />
                                            <label for="Permission413Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Aged Open Work Orders_48][]" class="ace write" data-index="13" data-parent-index="4" data-action="write" value="write_" id="Permission413Write" />
                                            <label for="Permission413Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Aged Open Work Orders_48][]" class="ace remove" data-index="13" data-parent-index="4" data-action="remove" value="remove_" id="Permission413Remove" />
                                            <label for="Permission413Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Aged Open Work Orders_48][]" class="ace approve" data-index="13" data-parent-index="4" data-action="approve" value="approve_" id="Permission413Approve" />
                                            <label for="Permission413Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-14 products_sales_trend_line" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير مبيعات المنتجات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Products Sales Trend Lines_49][]" class="ace read" data-index="14" data-parent-index="4" data-action="read" value="read_" id="Permission414Read" />
                                            <label for="Permission414Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Products Sales Trend Lines_49][]" class="ace write" data-index="14" data-parent-index="4" data-action="write" value="write_" id="Permission414Write" />
                                            <label for="Permission414Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Products Sales Trend Lines_49][]" class="ace remove" data-index="14" data-parent-index="4" data-action="remove" value="remove_" id="Permission414Remove" />
                                            <label for="Permission414Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Products Sales Trend Lines_49][]" class="ace approve" data-index="14" data-parent-index="4" data-action="approve" value="approve_" id="Permission414Approve" />
                                            <label for="Permission414Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-15 product_sales_pie_chart" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">حصص مبيعات المنتجات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Product Sales Pie Charts_50][]" class="ace read" data-index="15" data-parent-index="4" data-action="read" value="read_" id="Permission415Read" />
                                            <label for="Permission415Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Product Sales Pie Charts_50][]" class="ace write" data-index="15" data-parent-index="4" data-action="write" value="write_" id="Permission415Write" />
                                            <label for="Permission415Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Product Sales Pie Charts_50][]" class="ace remove" data-index="15" data-parent-index="4" data-action="remove" value="remove_" id="Permission415Remove" />
                                            <label for="Permission415Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Product Sales Pie Charts_50][]" class="ace approve" data-index="15" data-parent-index="4" data-action="approve" value="approve_" id="Permission415Approve" />
                                            <label for="Permission415Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-16 new_customers_trend_line" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">العملاء الجدد</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[New Customer Trend Lines_51][]" class="ace read" data-index="16" data-parent-index="4" data-action="read" value="read_" id="Permission416Read" />
                                            <label for="Permission416Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[New Customer Trend Lines_51][]" class="ace write" data-index="16" data-parent-index="4" data-action="write" value="write_" id="Permission416Write" />
                                            <label for="Permission416Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[New Customer Trend Lines_51][]" class="ace remove" data-index="16" data-parent-index="4" data-action="remove" value="remove_" id="Permission416Remove" />
                                            <label for="Permission416Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[New Customer Trend Lines_51][]" class="ace approve" data-index="16" data-parent-index="4" data-action="approve" value="approve_" id="Permission416Approve" />
                                            <label for="Permission416Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-17 number_of_invoices_trend_line" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الفواتير الجديدة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Invoice Trend Lines_52][]" class="ace read" data-index="17" data-parent-index="4" data-action="read" value="read_" id="Permission417Read" />
                                            <label for="Permission417Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Invoice Trend Lines_52][]" class="ace write" data-index="17" data-parent-index="4" data-action="write" value="write_" id="Permission417Write" />
                                            <label for="Permission417Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Invoice Trend Lines_52][]" class="ace remove" data-index="17" data-parent-index="4" data-action="remove" value="remove_" id="Permission417Remove" />
                                            <label for="Permission417Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Invoice Trend Lines_52][]" class="ace approve" data-index="17" data-parent-index="4" data-action="approve" value="approve_" id="Permission417Approve" />
                                            <label for="Permission417Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-18 employee_statement" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير كشف حساب الموظفين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Employee Statements_53][]" class="ace read" data-index="18" data-parent-index="4" data-action="read" value="read_" id="Permission418Read" />
                                            <label for="Permission418Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Employee Statements_53][]" class="ace write" data-index="18" data-parent-index="4" data-action="write" value="write_" id="Permission418Write" />
                                            <label for="Permission418Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Employee Statements_53][]" class="ace remove" data-index="18" data-parent-index="4" data-action="remove" value="remove_" id="Permission418Remove" />
                                            <label for="Permission418Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Employee Statements_53][]" class="ace approve" data-index="18" data-parent-index="4" data-action="approve" value="approve_" id="Permission418Approve" />
                                            <label for="Permission418Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-19 employee_salaries" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير رواتب الموظفين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Employee Salaries_54][]" class="ace read" data-index="19" data-parent-index="4" data-action="read" value="read_" id="Permission419Read" />
                                            <label for="Permission419Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Employee Salaries_54][]" class="ace write" data-index="19" data-parent-index="4" data-action="write" value="write_" id="Permission419Write" />
                                            <label for="Permission419Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Employee Salaries_54][]" class="ace remove" data-index="19" data-parent-index="4" data-action="remove" value="remove_" id="Permission419Remove" />
                                            <label for="Permission419Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Employee Salaries_54][]" class="ace approve" data-index="19" data-parent-index="4" data-action="approve" value="approve_" id="Permission419Approve" />
                                            <label for="Permission419Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-20 activity_reports" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير عمليات المستخدمين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Activity Reports_55][]" class="ace read" data-index="20" data-parent-index="4" data-action="read" value="read_" id="Permission420Read" />
                                            <label for="Permission420Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Activity Reports_55][]" class="ace write" data-index="20" data-parent-index="4" data-action="write" value="write_" id="Permission420Write" />
                                            <label for="Permission420Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Activity Reports_55][]" class="ace remove" data-index="20" data-parent-index="4" data-action="remove" value="remove_" id="Permission420Remove" />
                                            <label for="Permission420Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Activity Reports_55][]" class="ace approve" data-index="20" data-parent-index="4" data-action="approve" value="approve_" id="Permission420Approve" />
                                            <label for="Permission420Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-21 cashflows" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">قائمة التدفقات النقدية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Cashflows_56][]" class="ace read" data-index="21" data-parent-index="4" data-action="read" value="read_" id="Permission421Read" />
                                            <label for="Permission421Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Cashflows_56][]" class="ace write" data-index="21" data-parent-index="4" data-action="write" value="write_" id="Permission421Write" />
                                            <label for="Permission421Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Cashflows_56][]" class="ace remove" data-index="21" data-parent-index="4" data-action="remove" value="remove_" id="Permission421Remove" />
                                            <label for="Permission421Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Cashflows_56][]" class="ace approve" data-index="21" data-parent-index="4" data-action="approve" value="approve_" id="Permission421Approve" />
                                            <label for="Permission421Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-22 credit_note_tax_report" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير الإشعارات الدائنة الضريبية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Credit Note Tax Reports_57][]" class="ace read" data-index="22" data-parent-index="4" data-action="read" value="read_" id="Permission422Read" />
                                            <label for="Permission422Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Credit Note Tax Reports_57][]" class="ace write" data-index="22" data-parent-index="4" data-action="write" value="write_" id="Permission422Write" />
                                            <label for="Permission422Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Credit Note Tax Reports_57][]" class="ace remove" data-index="22" data-parent-index="4" data-action="remove" value="remove_" id="Permission422Remove" />
                                            <label for="Permission422Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Credit Note Tax Reports_57][]" class="ace approve" data-index="22" data-parent-index="4" data-action="approve" value="approve_" id="Permission422Approve" />
                                            <label for="Permission422Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-23 debit_note_tax_report" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير الإشعارات المدينة الضريبية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Debit Note Tax Reports_58][]" class="ace read" data-index="23" data-parent-index="4" data-action="read" value="read_" id="Permission423Read" />
                                            <label for="Permission423Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Debit Note Tax Reports_58][]" class="ace write" data-index="23" data-parent-index="4" data-action="write" value="write_" id="Permission423Write" />
                                            <label for="Permission423Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Debit Note Tax Reports_58][]" class="ace remove" data-index="23" data-parent-index="4" data-action="remove" value="remove_" id="Permission423Remove" />
                                            <label for="Permission423Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Debit Note Tax Reports_58][]" class="ace approve" data-index="23" data-parent-index="4" data-action="approve" value="approve_" id="Permission423Approve" />
                                            <label for="Permission423Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-24 invoice_tax_report" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير فواتير المبيعات الضريبية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Invoice Tax Reports_59][]" class="ace read" data-index="24" data-parent-index="4" data-action="read" value="read_" id="Permission424Read" />
                                            <label for="Permission424Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Invoice Tax Reports_59][]" class="ace write" data-index="24" data-parent-index="4" data-action="write" value="write_" id="Permission424Write" />
                                            <label for="Permission424Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Invoice Tax Reports_59][]" class="ace remove" data-index="24" data-parent-index="4" data-action="remove" value="remove_" id="Permission424Remove" />
                                            <label for="Permission424Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Invoice Tax Reports_59][]" class="ace approve" data-index="24" data-parent-index="4" data-action="approve" value="approve_" id="Permission424Approve" />
                                            <label for="Permission424Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-25 bill_tax_report" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">تقرير فواتير المشتريات الضريبية</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Bill Tax Reports_60][]" class="ace read" data-index="25" data-parent-index="4" data-action="read" value="read_" id="Permission425Read" />
                                            <label for="Permission425Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Bill Tax Reports_60][]" class="ace write" data-index="25" data-parent-index="4" data-action="write" value="write_" id="Permission425Write" />
                                            <label for="Permission425Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Bill Tax Reports_60][]" class="ace remove" data-index="25" data-parent-index="4" data-action="remove" value="remove_" id="Permission425Remove" />
                                            <label for="Permission425Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Bill Tax Reports_60][]" class="ace approve" data-index="25" data-parent-index="4" data-action="approve" value="approve_" id="Permission425Approve" />
                                            <label for="Permission425Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-4-26 tax_return_form" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإقرار الضريبي</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Tax Return Forms_61][]" class="ace read" data-index="26" data-parent-index="4" data-action="read" value="read_" id="Permission426Read" />
                                            <label for="Permission426Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Tax Return Forms_61][]" class="ace write" data-index="26" data-parent-index="4" data-action="write" value="write_" id="Permission426Write" />
                                            <label for="Permission426Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Tax Return Forms_61][]" class="ace remove" data-index="26" data-parent-index="4" data-action="remove" value="remove_" id="Permission426Remove" />
                                            <label for="Permission426Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Tax Return Forms_61][]" class="ace approve" data-index="26" data-parent-index="4" data-action="approve" value="approve_" id="Permission426Approve" />
                                            <label for="Permission426Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-5 assets" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            الأصول الثابتة
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Assets_63][]" class="ace read" data-index="5" data-action="read" value="read_" id="Permission5Read" />
                                            <label for="Permission5Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Assets_63][]" class="ace write" data-index="5" data-action="write" value="write_" id="Permission5Write" />
                                            <label for="Permission5Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Assets_63][]" class="ace remove" data-index="5" data-action="remove" value="remove_" id="Permission5Remove" />
                                            <label for="Permission5Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Assets_63][]" class="ace approve" data-index="5" data-action="approve" value="approve_" id="Permission5Approve" />
                                            <label for="Permission5Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-5-0 fixed_assets" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الأصول الثابتة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Fixed Assets_64][]" class="ace read" data-index="0" data-parent-index="5" data-action="read" value="read_" id="Permission50Read" />
                                            <label for="Permission50Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Fixed Assets_64][]" class="ace write" data-index="0" data-parent-index="5" data-action="write" value="write_" id="Permission50Write" />
                                            <label for="Permission50Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Fixed Assets_64][]" class="ace remove" data-index="0" data-parent-index="5" data-action="remove" value="remove_" id="Permission50Remove" />
                                            <label for="Permission50Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Fixed Assets_64][]" class="ace approve" data-index="0" data-parent-index="5" data-action="approve" value="approve_" id="Permission50Approve" />
                                            <label for="Permission50Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-5-1 asset_classifications" data-linked="[&quot;fixed_assets&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">تصنيفات الأصول</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Asset Classifications_65][]" class="ace read" data-index="1" data-parent-index="5" data-action="read" value="read_" id="Permission51Read" />
                                            <label for="Permission51Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Asset Classifications_65][]" class="ace write" data-index="1" data-parent-index="5" data-action="write" value="write_" id="Permission51Write" />
                                            <label for="Permission51Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Asset Classifications_65][]" class="ace remove" data-index="1" data-parent-index="5" data-action="remove" value="remove_" id="Permission51Remove" />
                                            <label for="Permission51Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Asset Classifications_65][]" class="ace approve" data-index="1" data-parent-index="5" data-action="approve" value="approve_" id="Permission51Approve" />
                                            <label for="Permission51Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-5-2 asset_transfers" data-linked="[&quot;fixed_assets&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">نقل الأصل</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Asset Transfers_66][]" class="ace read" data-index="2" data-parent-index="5" data-action="read" value="read_" id="Permission52Read" />
                                            <label for="Permission52Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Asset Transfers_66][]" class="ace write" data-index="2" data-parent-index="5" data-action="write" value="write_" id="Permission52Write" />
                                            <label for="Permission52Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Asset Transfers_66][]" class="ace remove" data-index="2" data-parent-index="5" data-action="remove" value="remove_" id="Permission52Remove" />
                                            <label for="Permission52Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Asset Transfers_66][]" class="ace approve" data-index="2" data-parent-index="5" data-action="approve" value="approve_" id="Permission52Approve" />
                                            <label for="Permission52Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-5-3 depreciations" data-linked="[&quot;fixed_assets&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإهلاك</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" disabled name="role[Depreciations_67][]" class="ace read" data-index="3" data-parent-index="5" data-action="read" value="read_" id="Permission53Read" />
                                            <label for="Permission53Read" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" disabled name="role[Depreciations_67][]" class="ace write" data-index="3" data-parent-index="5" data-action="write" value="write_" id="Permission53Write" />
                                            <label for="Permission53Write" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" disabled name="role[Depreciations_67][]" class="ace remove" data-index="3" data-parent-index="5" data-action="remove" value="remove_" id="Permission53Remove" />
                                            <label for="Permission53Remove" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" disabled name="role[Depreciations_67][]" class="ace approve" data-index="3" data-parent-index="5" data-action="approve" value="approve_" id="Permission53Approve" />
                                            <label for="Permission53Approve" class="checkbox disabled-area" rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-6 accounting" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            المحاسبة
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Accountings_68][]" class="ace read" data-index="6" data-action="read" value="read_" id="Permission6Read" />
                                            <label for="Permission6Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Accountings_68][]" class="ace write" data-index="6" data-action="write" value="write_" id="Permission6Write" />
                                            <label for="Permission6Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Accountings_68][]" class="ace remove" data-index="6" data-action="remove" value="remove_" id="Permission6Remove" />
                                            <label for="Permission6Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Accountings_68][]" class="ace approve" data-index="6" data-action="approve" value="approve_" id="Permission6Approve" />
                                            <label for="Permission6Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-6-0 journal_entries" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">إدخالات القيود</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Manual Journal Entries_69][]" class="ace read" data-index="0" data-parent-index="6" data-action="read" value="read_" id="Permission60Read" />
                                            <label for="Permission60Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Manual Journal Entries_69][]" class="ace write" data-index="0" data-parent-index="6" data-action="write" value="write_" id="Permission60Write" />
                                            <label for="Permission60Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Manual Journal Entries_69][]" class="ace remove" data-index="0" data-parent-index="6" data-action="remove" value="remove_" id="Permission60Remove" />
                                            <label for="Permission60Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Manual Journal Entries_69][]" class="ace approve" data-index="0" data-parent-index="6" data-action="approve" value="approve_" id="Permission60Approve" />
                                            <label for="Permission60Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-6-1 chart_of_accounts" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">شجرة الحسابات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Chart Of Accounts_70][]" class="ace read" data-index="1" data-parent-index="6" data-action="read" value="read_" id="Permission61Read" />
                                            <label for="Permission61Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Chart Of Accounts_70][]" class="ace write" data-index="1" data-parent-index="6" data-action="write" value="write_" id="Permission61Write" />
                                            <label for="Permission61Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Chart Of Accounts_70][]" class="ace remove" data-index="1" data-parent-index="6" data-action="remove" value="remove_" id="Permission61Remove" />
                                            <label for="Permission61Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Chart Of Accounts_70][]" class="ace approve" data-index="1" data-parent-index="6" data-action="approve" value="approve_" id="Permission61Approve" />
                                            <label for="Permission61Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-6-2 easy_entries" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">القيود السهلة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Easy Entries_71][]" class="ace read" data-index="2" data-parent-index="6" data-action="read" value="read_" id="Permission62Read" />
                                            <label for="Permission62Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Easy Entries_71][]" class="ace write" data-index="2" data-parent-index="6" data-action="write" value="write_" id="Permission62Write" />
                                            <label for="Permission62Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Easy Entries_71][]" class="ace remove" data-index="2" data-parent-index="6" data-action="remove" value="remove_" id="Permission62Remove" />
                                            <label for="Permission62Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Easy Entries_71][]" class="ace approve" data-index="2" data-parent-index="6" data-action="approve" value="approve_" id="Permission62Approve" />
                                            <label for="Permission62Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="parent-8 settings" data-linked="null">
                                            <td data-title="Module Name" class="bold">
                                            إعدادات
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Settings_74][]" class="ace read" data-index="8" data-action="read" value="read_" id="Permission8Read" />
                                            <label for="Permission8Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Settings_74][]" class="ace write" data-index="8" data-action="write" value="write_" id="Permission8Write" />
                                            <label for="Permission8Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Settings_74][]" class="ace remove" data-index="8" data-action="remove" value="remove_" id="Permission8Remove" />
                                            <label for="Permission8Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Settings_74][]" class="ace approve" data-index="8" data-action="approve" value="approve_" id="Permission8Approve" />
                                            <label for="Permission8Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-0 general_settings" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإعدادات العامة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[General Settings_75][]" class="ace read" data-index="0" data-parent-index="8" data-action="read" value="read_" id="Permission80Read" />
                                            <label for="Permission80Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[General Settings_75][]" class="ace write" data-index="0" data-parent-index="8" data-action="write" value="write_" id="Permission80Write" />
                                            <label for="Permission80Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[General Settings_75][]" class="ace remove" data-index="0" data-parent-index="8" data-action="remove" value="remove_" id="Permission80Remove" />
                                            <label for="Permission80Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[General Settings_75][]" class="ace approve" data-index="0" data-parent-index="8" data-action="approve" value="approve_" id="Permission80Approve" />
                                            <label for="Permission80Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-1 roles" data-linked="[&quot;users&quot;]">
                                            <td data-title="Module Name">
                                            <p class="ml10">المناصب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Roles_76][]" class="ace read" data-index="1" data-parent-index="8" data-action="read" value="read_" id="Permission81Read" />
                                            <label for="Permission81Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Roles_76][]" class="ace write" data-index="1" data-parent-index="8" data-action="write" value="write_" id="Permission81Write" />
                                            <label for="Permission81Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Roles_76][]" class="ace remove" data-index="1" data-parent-index="8" data-action="remove" value="remove_" id="Permission81Remove" />
                                            <label for="Permission81Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Roles_76][]" class="ace approve" data-index="1" data-parent-index="8" data-action="approve" value="approve_" id="Permission81Approve" />
                                            <label for="Permission81Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-2 users" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">المستخدمين</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Users_77][]" class="ace read" data-index="2" data-parent-index="8" data-action="read" value="read_" id="Permission82Read" />
                                            <label for="Permission82Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Users_77][]" class="ace write" data-index="2" data-parent-index="8" data-action="write" value="write_" id="Permission82Write" />
                                            <label for="Permission82Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Users_77][]" class="ace remove" data-index="2" data-parent-index="8" data-action="remove" value="remove_" id="Permission82Remove" />
                                            <label for="Permission82Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Users_77][]" class="ace approve" data-index="2" data-parent-index="8" data-action="approve" value="approve_" id="Permission82Approve" />
                                            <label for="Permission82Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-3 payment_terms" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">شروط الدفع</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Payment Terms_78][]" class="ace read" data-index="3" data-parent-index="8" data-action="read" value="read_" id="Permission83Read" />
                                            <label for="Permission83Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Payment Terms_78][]" class="ace write" data-index="3" data-parent-index="8" data-action="write" value="write_" id="Permission83Write" />
                                            <label for="Permission83Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Payment Terms_78][]" class="ace remove" data-index="3" data-parent-index="8" data-action="remove" value="remove_" id="Permission83Remove" />
                                            <label for="Permission83Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Payment Terms_78][]" class="ace approve" data-index="3" data-parent-index="8" data-action="approve" value="approve_" id="Permission83Approve" />
                                            <label for="Permission83Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-4 custom_fields" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الحقول المخصصة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Custom Fields_79][]" class="ace read" data-index="4" data-parent-index="8" data-action="read" value="read_" id="Permission84Read" />
                                            <label for="Permission84Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Custom Fields_79][]" class="ace write" data-index="4" data-parent-index="8" data-action="write" value="write_" id="Permission84Write" />
                                            <label for="Permission84Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Custom Fields_79][]" class="ace remove" data-index="4" data-parent-index="8" data-action="remove" value="remove_" id="Permission84Remove" />
                                            <label for="Permission84Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Custom Fields_79][]" class="ace approve" data-index="4" data-parent-index="8" data-action="approve" value="approve_" id="Permission84Approve" />
                                            <label for="Permission84Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-5 subscriptions" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الإشتراك</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Subscriptions_80][]" class="ace read" data-index="5" data-parent-index="8" data-action="read" value="read_" id="Permission85Read" />
                                            <label for="Permission85Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Subscriptions_80][]" class="ace write" data-index="5" data-parent-index="8" data-action="write" value="write_" id="Permission85Write" />
                                            <label for="Permission85Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Subscriptions_80][]" class="ace remove" data-index="5" data-parent-index="8" data-action="remove" value="remove_" id="Permission85Remove" />
                                            <label for="Permission85Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Subscriptions_80][]" class="ace approve" data-index="5" data-parent-index="8" data-action="approve" value="approve_" id="Permission85Approve" />
                                            <label for="Permission85Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-6 balance" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">ميزان المراجعة</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[_][]" class="ace read" data-index="6" data-parent-index="8" data-action="read" value="read_" id="Permission86Read" />
                                            <label for="Permission86Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[_][]" class="ace write" data-index="6" data-parent-index="8" data-action="write" value="write_" id="Permission86Write" />
                                            <label for="Permission86Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[_][]" class="ace remove" data-index="6" data-parent-index="8" data-action="remove" value="remove_" id="Permission86Remove" />
                                            <label for="Permission86Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[_][]" class="ace approve" data-index="6" data-parent-index="8" data-action="approve" value="approve_" id="Permission86Approve" />
                                            <label for="Permission86Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-7 attachments" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">مرفقات</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Attachments_82][]" class="ace read" data-index="7" data-parent-index="8" data-action="read" value="read_" id="Permission87Read" />
                                            <label for="Permission87Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Attachments_82][]" class="ace write" data-index="7" data-parent-index="8" data-action="write" value="write_" id="Permission87Write" />
                                            <label for="Permission87Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Attachments_82][]" class="ace remove" data-index="7" data-parent-index="8" data-action="remove" value="remove_" id="Permission87Remove" />
                                            <label for="Permission87Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Attachments_82][]" class="ace approve" data-index="7" data-parent-index="8" data-action="approve" value="approve_" id="Permission87Approve" />
                                            <label for="Permission87Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-8 integrations" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">الربط الالكتروني</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Integrations_83][]" class="ace read" data-index="8" data-parent-index="8" data-action="read" value="read_" id="Permission88Read" />
                                            <label for="Permission88Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Integrations_83][]" class="ace write" data-index="8" data-parent-index="8" data-action="write" value="write_" id="Permission88Write" />
                                            <label for="Permission88Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Integrations_83][]" class="ace remove" data-index="8" data-parent-index="8" data-action="remove" value="remove_" id="Permission88Remove" />
                                            <label for="Permission88Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Integrations_83][]" class="ace approve" data-index="8" data-parent-index="8" data-action="approve" value="approve_" id="Permission88Approve" />
                                            <label for="Permission88Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            <tr class="child-8-9 human_resources_settings" data-linked="null">
                                            <td data-title="Module Name">
                                            <p class="ml10">إعدادات الرواتب</p>
                                            </td>
                                            <td data-title="Read">
                                            <input type="checkbox" name="role[Payroll Settings_84][]" class="ace read" data-index="9" data-parent-index="8" data-action="read" value="read_" id="Permission89Read" />
                                            <label for="Permission89Read" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Write">
                                            <input type="checkbox" name="role[Payroll Settings_84][]" class="ace write" data-index="9" data-parent-index="8" data-action="write" value="write_" id="Permission89Write" />
                                            <label for="Permission89Write" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Remove">
                                            <input type="checkbox" name="role[Payroll Settings_84][]" class="ace remove" data-index="9" data-parent-index="8" data-action="remove" value="remove_" id="Permission89Remove" />
                                            <label for="Permission89Remove" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            <td data-title="Approve">
                                            <input type="checkbox" name="role[Payroll Settings_84][]" class="ace approve" data-index="9" data-parent-index="8" data-action="approve" value="approve_" id="Permission89Approve" />
                                            <label for="Permission89Approve" class="checkbox " rel="popover" data-placement="bottom" data-html="true" data-content="<div class='popover-container custom_filter'>
                                              <div>
                                                <img src='/assets/unsupported.svg' class='warning-img' alt='unsupported image'/>
                                              </div>
                                              <div class='popover-body'>
                                                <div class='popover-heading'>
                                                  <span>ميزة غير متوفرة</span>
                                                </div>
                                                <div class='popover-message'>
                                                  <span>قم بترقية اشتراكك للحصول على مميزات أكثر
                                                  </span>
                                                </div>
                                                <a  href='/tenant/subscription/select_plan' class='change-plan-btn fw-500'>
                                                  <img src='/assets/change.svg' class='change-img' alt='change plan image'/>
                                                  <span>قم بترقية باقتك
                                                  </span>
                                                </a>
                                              </div>
                                            </div>"></label>
                                            </td>
                                            </tr>
                                            </tbody>
                                    </table>
                                    <div class="p-3">
                                        <button class="btn btn-primary mx-2">حفظ</button>
                                        <button class="btn btn-dark mx-1">الغاء</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Vendor js -->
<script src="https://mohsba2.taelim.net/assets/js/vendor.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/notyf.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://mohsba2.taelim.net/js/main.js"></script>
  <!-- Plugins js-->
<script src="https://mohsba2.taelim.net/assets/libs/datatables/datatables.min.js"></script>
<script src="https://mohsba2.taelim.net/assets/libs/pdfmake/pdfmake.min.js"></script>
@endsection
