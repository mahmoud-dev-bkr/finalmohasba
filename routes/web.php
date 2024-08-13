<?php
//commit
use App\DataTables\SalaryDataTable;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\bondsController;
use App\Http\Controllers\ClientbondController;
use App\Http\Controllers\SupplierbondController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\taxController;
use App\Http\Controllers\PaymentTermsController;

use App\Http\Controllers\DailyAccountingEntriesController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DropController;
use App\Http\Controllers\EasyRestrictionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ManutOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\purchase_ordersController;
use App\Http\Controllers\PurchaseInvoiceController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PayRollController;
use App\Http\Controllers\sales_invoicesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingSalaryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ReturnsSalesInvoicesController;
use App\Http\Controllers\ReturnsPurchaseInvoicesController;
use App\Http\Controllers\Stocktakingcontroller;
use App\Http\Controllers\UserController;
use App\SettingSalary;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::get('/view', function () {
    return view('view');
});

Auth::routes();
// 'middleware' => 'auth',
// Route::get('/test', [SalaryDataTable::class, 'query']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth',  'namespace' => 'Dashboard'], function () {
    // Localization Route
    Route::get('/lang/{lang}', [LocalizationController::class, 'lang'])->name('change.lang');

    Route::get('/client',               [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create',        [ClientController::class, 'create'])->name('client.create');
    Route::get('/client/show/{id}',          [ClientController::class, 'show'])->name('client.show');
    Route::get('/client/update/{id}',        [ClientController::class, 'edit'])->name('client.update');
    Route::post('/client/edit/{id}',        [ClientController::class, 'update'])->name('client.edit');
    Route::post('/client/create/post',  [ClientController::class, 'store'])->name('client.create.post');
    Route::get('/client/data',          [ClientController::class, 'getClients'])->name('getClientsData');
    Route::post('/client/destroy/{id}',   [ClientController::class, 'destroy'])->name('client.destroy');
    Route::post('/client/status/{id}',   [ClientController::class, 'status'])->name('client.status');

    Route::get('/client/get/info',      [ClientController::class, 'getInfoClient'])->name('getInfoClientsData');

    Route::get('/user',               [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create',        [UserController::class, 'create'])->name('user.create');
    Route::get('/user/show/{id}',          [UserController::class, 'show'])->name('user.show');
    Route::get('/user/update/{id}',        [UserController::class, 'edit'])->name('user.update');
    Route::post('/user/edit/{id}',        [UserController::class, 'update'])->name('user.edit');
    Route::post('/user/create/post',  [UserController::class, 'store'])->name('user.create.post');
    Route::get('/user/data',          [UserController::class, 'getusers'])->name('getusersData');
    Route::post('/user/destroy/{id}',   [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('/user/status/{id}',   [UserController::class, 'status'])->name('user.status');

    Route::get('/user/get/info',      [UserController::class, 'getInfouser'])->name('getInfousersData');

    Route::post('/User/admin/ajax',       [UserController::class, 'subAjaxUser'])->name('sub.Ajax.user');

    Route::get('/Quotation',               [QuotationController::class, 'index'])->name('Quotation.index');
    Route::get('/Quotation/done/{id}',          [QuotationController::class, 'done'])->name('Quotation.done');
    Route::post('/Quotation/done/{id}/post',     [QuotationController::class, 'donePost'])->name('Quotation.done.post');
    Route::get('/Quotation/show/{id}',          [QuotationController::class, 'show'])->name('Quotation.show');
    Route::get('/Quotation/create',        [QuotationController::class, 'create'])->name('Quotation.create');
    Route::get('/Quotation/update/{id}',        [QuotationController::class, 'edit'])->name('Quotation.update');
    Route::post('/Quotation/edit/{id}',        [QuotationController::class, 'update'])->name('Quotation.edit');
    Route::post('/Quotation/create/post',  [QuotationController::class, 'store'])->name('Quotation.create.post');
    Route::get('/Quotation/data',          [QuotationController::class, 'getQuotations'])->name('getQuotationsData');
    Route::post('/Quotation/destroy/{id}',   [QuotationController::class, 'destroy'])->name('Quotation.destroy');
    Route::post('/Quotation/status/{id}',   [QuotationController::class, 'status'])->name('Quotation.status');

    Route::get('/Quotation/copy/{id}', [QuotationController::class, 'copy'])->name('Quotation.copy');
    Route::get('/Quotation/print/{id}', [QuotationController::class, 'print'])->name('Quotation.print');
    Route::post('/Quotation/copy/post',        [QuotationController::class, 'copystore'])->name('Quotation.copystore.post');


    // ------------------------------------------------< Start Supplier >-----------------
    Route::get('/Supplier',              [SupplierController::class, 'index'])->name('Supplier.index');
    Route::get('/Supplier/show/{id}',          [SupplierController::class, 'show'])->name('Supplier.show');
    Route::get('/Supplier/create',        [SupplierController::class, 'create'])->name('Supplier.create');
    Route::get('/Supplier/update/{id}',        [SupplierController::class, 'edit'])->name('Supplier.update');
    Route::post('/Supplier/edit/{id}',        [SupplierController::class, 'update'])->name('Supplier.edit');
    Route::post('/Supplier/create/post',  [SupplierController::class, 'store'])->name('Supplier.create.post');
    Route::get('/Supplier/data',          [SupplierController::class, 'getSuppliers'])->name('getSuppliersData');
    Route::post('/Supplier/destroy/{id}',   [SupplierController::class, 'destroy'])->name('Supplier.destroy');
    Route::get('/Supplier/get/info',      [SupplierController::class, 'getInfoSupplier'])->name('getInfoSupplierData');
    // -------------------------------------------------< End Supplier >--------------------------------

   //----------------------------------------------------<start Services>----------------------------

   Route::get('/services',              [ServicesController::class, 'index'])->name('Services.index');
   Route::get('/services/show/{id}',          [ServicesController::class, 'show'])->name('Services.show');
   Route::get('/services/create',        [ServicesController::class, 'create'])->name('Services.create');
   Route::get('/services/update/{id}',        [ServicesController::class, 'edit'])->name('Services.update');
   Route::post('/services/edit/{id}',        [ServicesController::class, 'update'])->name('Services.edit');
   Route::post('/services/create/post',  [ServicesController::class, 'store'])->name('Services.create.post');
   Route::get('/services/data',          [ServicesController::class, 'getServicess'])->name('getServicessData');
   Route::post('/services/destroy/{id}',   [ServicesController::class, 'destroy'])->name('Services.destroy');
   Route::get('/services/get/info',      [ServicesController::class, 'getInfoServices'])->name('getInfoServicesData');

   //----------------------------------------------------<End Services>------------------------------



   //----------------------------------------------------<start PaymentTerms>----------------------------

   Route::get('/PaymentTerms',              [PaymentTermsController::class, 'index'])->name('PaymentTerms.index');
   Route::get('/PaymentTerms/show/{id}',          [PaymentTermsController::class, 'show'])->name('PaymentTerms.show');
   Route::get('/PaymentTerms/create',        [PaymentTermsController::class, 'create'])->name('PaymentTerms.create');
   Route::get('/PaymentTerms/update/{id}',        [PaymentTermsController::class, 'edit'])->name('PaymentTerms.update');
   Route::post('/PaymentTerms/edit/{id}',        [PaymentTermsController::class, 'update'])->name('PaymentTerms.edit');
   Route::post('/PaymentTerms/create/post',  [PaymentTermsController::class, 'store'])->name('PaymentTerms.create.post');
   Route::get('/PaymentTerms/data',          [PaymentTermsController::class, 'getPaymentTermss'])->name('getPaymentTermssData');
   Route::post('/PaymentTerms/destroy/{id}',   [PaymentTermsController::class, 'destroy'])->name('PaymentTerms.destroy');
   Route::get('/PaymentTerms/get/info',      [PaymentTermsController::class, 'getInfoPaymentTerms'])->name('getInfoPaymentTermsData');

   //----------------------------------------------------<End PaymentTerms>------------------------------




   //----------------------------------------------------<start tax>----------------------------

   Route::get('/tax',              [taxController::class, 'index'])->name('tax.index');
   Route::get('/tax/show/{id}',          [taxController::class, 'show'])->name('tax.show');
   Route::get('/tax/create',        [taxController::class, 'create'])->name('tax.create');
   Route::get('/tax/update/{id}',        [taxController::class, 'edit'])->name('tax.update');
   Route::post('/tax/edit/{id}',        [taxController::class, 'update'])->name('tax.edit');
   Route::post('/tax/create/post',  [taxController::class, 'store'])->name('tax.create.post');
   Route::get('/tax/data',          [taxController::class, 'gettaxs'])->name('gettaxsData');
   Route::post('/tax/destroy/{id}',   [taxController::class, 'destroy'])->name('tax.destroy');
   Route::get('/tax/get/info',      [taxController::class, 'getInfotax'])->name('getInfotaxData');

   //----------------------------------------------------<End tax>------------------------------





    // ----------------------------------------------< Start Purchase orders >--------------------------
    Route::get('/Purchase_orders',              [purchase_ordersController::class, 'index'])->name('Purchase_orders.index');
    Route::get('/Purchase_orders/show/{id}',    [Purchase_ordersController::class, 'show'])->name('Purchase_orders.show');
    Route::get('/Purchase_orders/done/{id}',          [Purchase_ordersController::class, 'done'])->name('Purchase_orders.done');
    Route::post('/Purchase_orders/done/{id}/post',     [Purchase_ordersController::class, 'donePost'])->name('Purchase_orders.done.post');
    Route::get('/Purchase_orders/create',        [Purchase_ordersController::class, 'create'])->name('Purchase_orders.create');
    Route::get('/Purchase_orders/update/{id}',        [Purchase_ordersController::class, 'edit'])->name('Purchase_orders.update');
    Route::post('/Purchase_orders/edit/{id}',        [Purchase_ordersController::class, 'update'])->name('Purchase_orders.edit');
    Route::post('/Purchase_orders/create/post',  [Purchase_ordersController::class, 'store'])->name('Purchase_orders.create.post');
    Route::get('/Purchase_orders/data',          [Purchase_ordersController::class, 'getPurchase_orderss'])->name('getPurchase_orderssData');
    Route::post('/Purchase_orders/destroy/{id}',   [Purchase_ordersController::class, 'destroy'])->name('Purchase_orders.destroy');
    Route::get('/Purchase_orders/copy/{id}', [Purchase_ordersController::class, 'copy'])->name('Purchase_orders.copy');
    Route::post('/Purchase_orders/status/{id}',   [Purchase_ordersController::class, 'status'])->name('Purchase_orders.status');
    Route::post('/Purchase_orders/copy/post',        [Purchase_ordersController::class, 'copystore'])->name('Purchase_orders.copystore.post');

    // ---------------------------------------------< End Purchase orders >----------------------------------------
    // ----------------------------------------------< Start Purchase orders >--------------------------
    Route::get('/Purchase_Invoices',              [PurchaseInvoiceController::class, 'index'])->name('Purchase_Invoices.index');
    Route::get('/Purchase_Invoices/show/{id}',    [PurchaseInvoiceController::class, 'show'])->name('Purchase_Invoices.show');
    Route::get('/Purchase_Invoices/print/{id}',   [PurchaseInvoiceController::class, 'print'])->name('Purchase_Invoices.print');
    Route::get('/Purchase_Invoices/pdf/{id}',     [PurchaseInvoiceController::class, 'pdf'])->name('Purchase_Invoices.pdf');
    Route::get('/Purchase_Invoices/create',        [PurchaseInvoiceController::class, 'create'])->name('Purchase_Invoices.create');
    Route::get('/Purchase_Invoices/update/{id}',        [PurchaseInvoiceController::class, 'edit'])->name('Purchase_Invoices.update');
    Route::get('/Purchase_Invoices/payment/{id}',        [PurchaseInvoiceController::class, 'payment'])->name('Purchase_Invoices.payment');
    Route::post('/Purchase_Invoices/paymentpost',    [PurchaseInvoiceController::class, 'paymentPost'])->name('Purchase_Invoices.payment.post');
    Route::post('/Purchase_Invoices/edit/{id}',          [PurchaseInvoiceController::class, 'update'])->name('Purchase_Invoices.edit');
    Route::post('/Purchase_Invoices/create/post',        [PurchaseInvoiceController::class, 'store'])->name('Purchase_Invoices.create.post');
    Route::get('/Purchase_Invoices/data',          [PurchaseInvoiceController::class, 'getPurchase_Invoices'])->name('getPurchase_InvoicessData');
    Route::post('/Purchase_Invoices/destroy/{id}',   [PurchaseInvoiceController::class, 'destroy'])->name('Purchase_Invoices.destroy');
    Route::get('/Purchase_Invoices/copy/{id}', [PurchaseInvoiceController::class, 'copy'])->name('Purchase_Invoices.copy');
    Route::post('/Purchase_Invoices/copy/post',        [PurchaseInvoiceController::class, 'copystore'])->name('Purchase_Invoices.copystore.post');
    // ---------------------------------------------< End Purchase orders >----------------------------------------

    Route::get('/sales_invoices',              [sales_invoicesController::class, 'index'])->name('sales_invoices.index');
    Route::get('/sales_invoices/show/{id}',    [sales_invoicesController::class, 'show'])->name('sales_invoices.show');
    Route::get('/sales_invoices/print/{id}',   [sales_invoicesController::class, 'print'])->name('sales_invoices.print');
    Route::get('/sales_invoices/pdf/{id}',   [sales_invoicesController::class, 'pdf'])->name('sales_invoices.pdf');
    Route::get('/sales_invoices/returns',      [sales_invoicesController::class, 'returns'])->name('sales_invoices.returns');
    Route::get('/sales_invoices/create',        [sales_invoicesController::class, 'create'])->name('sales_invoices.create');
    Route::get('/sales_invoices/update/{id}',        [sales_invoicesController::class, 'edit'])->name('sales_invoices.update');
    Route::post('/sales_invoices/edit/{id}',        [sales_invoicesController::class, 'update'])->name('sales_invoices.edit');
    Route::post('/sales_invoices/create/post',  [sales_invoicesController::class, 'store'])->name('sales_invoices.create.post');
    Route::get('/sales_invoices/data',          [sales_invoicesController::class, 'getsales_invoices'])->name('getsales_invoicessData');
    Route::post('/sales_invoices/destroy/{id}',   [sales_invoicesController::class, 'destroy'])->name('sales_invoices.destroy');
    Route::post('/sales_invoices/paymentpost',    [sales_invoicesController::class, 'paymentPost'])->name('sales_invoices.payment.post');
    Route::post('/sales_invoices/paymentpost',    [sales_invoicesController::class, 'paymentPost'])->name('sales_invoices.payment.post');

    Route::get('/sales_invoices/copy/{id}',         [sales_invoicesController::class, 'copy'])->name('sales_invoices.copy');
    Route::get('/sales_invoices/back/{id}',         [sales_invoicesController::class, 'back'])->name('sales_invoices.back');
    Route::post('/sales_invoices/copy/post',        [sales_invoicesController::class, 'copystore'])->name('sales_invoices.copystore.post');



    // -----------------------------------< returns >-----------------------------------------------------------
    Route::get('/ReturnsSalesInvoices',              [ReturnsSalesInvoicesController::class, 'index'])->name('ReturnsSalesInvoices.index');
    Route::get('/getInvolice/with/Client',              [ReturnsSalesInvoicesController::class, 'getInvolice'])->name('ReturnsSalesInvoices.getInvolice');
    Route::get('/getAllInvolice/with/Client',              [ReturnsSalesInvoicesController::class, 'getAllInvolice'])->name('ReturnsSalesInvoices.getAllInvolice');
    Route::get('/getAllInvolice/with/id',                  [ReturnsSalesInvoicesController::class, 'getAllInvoliceId'])->name('ReturnsSalesInvoices.getAllInvoliceId');
    Route::get('/getDetilaSales_invoices/with/Client',     [ReturnsSalesInvoicesController::class, 'getDetilaSales_invoices'])->name('ReturnsSalesInvoices.getDetilaSales_invoices');
    Route::get('/ReturnsSalesInvoices/create',        [ReturnsSalesInvoicesController::class, 'create'])->name('ReturnsSalesInvoices.create');
    Route::get('/ReturnsSalesInvoices/update/{id}',        [ReturnsSalesInvoicesController::class, 'edit'])->name('ReturnsSalesInvoices.update');
    Route::get('/ReturnsSalesInvoices/print/{id}',        [ReturnsSalesInvoicesController::class, 'print'])->name('ReturnsSalesInvoices.print');
    Route::get('/ReturnsSalesInvoices/show/{id}',        [ReturnsSalesInvoicesController::class, 'show'])->name('ReturnsSalesInvoices.show');
    Route::post('/ReturnsSalesInvoices/edit/{id}',        [ReturnsSalesInvoicesController::class, 'update'])->name('ReturnsSalesInvoices.edit');
    Route::post('/ReturnsSalesInvoices/create/post',  [ReturnsSalesInvoicesController::class, 'store'])->name('ReturnsSalesInvoices.create.post');
    Route::get('/ReturnsSalesInvoices/data',          [ReturnsSalesInvoicesController::class, 'getReturnsSalesInvoices'])->name('getReturnsSalesInvoicessData');
    Route::post('/ReturnsSalesInvoices/destroy/{id}',   [ReturnsSalesInvoicesController::class, 'destroy'])->name('ReturnsSalesInvoices.destroy');
    Route::get('/ReturnsSalesInvoices/payment/{id}',        [ReturnsSalesInvoicesController::class, 'payment'])->name('ReturnsSalesInvoices.payment');
    Route::post('/ReturnsSalesInvoices/paymentpost',    [ReturnsSalesInvoicesController::class, 'paymentPost'])->name('ReturnsSalesInvoices.payment.post');

    // --------------------------------------------------------------------------< returns purchase? -----------------------------------------------------------
    Route::get('/getInvolice/with/Supplier',              [ReturnsPurchaseInvoicesController::class, 'getInvolice'])->name('ReturnsSalesInvoices.getInvoliceP');
    Route::get('/ReturnsPurchase_Invoices',              [ReturnsPurchaseInvoicesController::class, 'index'])->name('ReturnsPurchase_Invoices.index');

    Route::get('/getAllInvolice/with/Supplier',         [ReturnsPurchaseInvoicesController::class, 'getAllInvolice'])->name('ReturnsPurchase_Invoices.getAllInvolice');
    Route::get('/getDetilaPurchaseInvoice/with/Client',     [ReturnsPurchaseInvoicesController::class, 'getDetilaSales_invoices'])->name('ReturnsPurchase_Invoices.getDetilaPurchase_Invoices');
    // Route::get('/getInvolice/with/Supplier',              [ ReturnsPurchaseInvoicesController::class, 'getInvoliceP'])->name('ReturnsPurchase_Invoices.getInvoliceP');
    Route::get('/ReturnsPurchase_Invoices/create',        [ReturnsPurchaseInvoicesController::class, 'create'])->name('ReturnsPurchase_Invoices.create');
    Route::get('/ReturnsPurchase_Invoices/update/{id}',        [ReturnsPurchaseInvoicesController::class, 'edit'])->name('ReturnsPurchase_Invoices.update');
    Route::post('/ReturnsPurchase_Invoices/edit/{id}',        [ReturnsPurchaseInvoicesController::class, 'update'])->name('ReturnsPurchase_Invoices.edit');
    Route::post('/ReturnsPurchase_Invoices/create/post',  [ReturnsPurchaseInvoicesController::class, 'store'])->name('ReturnsPurchase_Invoices.create.post');
    Route::get('/ReturnsPurchase_Invoices/data',          [ReturnsPurchaseInvoicesController::class, 'getReturnsPurchaseInvoices'])->name('getReturnsPurchase_InvoicessData');
    Route::post('/ReturnsPurchase_Invoices/destroy/{id}',   [ReturnsPurchaseInvoicesController::class, 'destroy'])->name('ReturnsPurchase_Invoices.destroy');
    Route::get('/ReturnsPurchase_Invoices/payment/{id}',        [ReturnsPurchaseInvoicesController::class, 'payment'])->name('ReturnsPurchase_Invoices.payment');
    Route::post('/ReturnsPurchase_Invoices/paymentpost',    [ReturnsPurchaseInvoicesController::class, 'paymentPost'])->name('ReturnsPurchase_Invoices.payment.post');
    Route::get('/ReturnsPurchase_Invoices/print/{id}',        [ReturnsPurchaseInvoicesController::class, 'print'])->name('ReturnsPurchase_Invoices.print');
    Route::get('/ReturnsPurchase_Invoices/show/{id}',        [ReturnsPurchaseInvoicesController::class, 'show'])->name('ReturnsPurchase_Invoices.show');


    Route::get('/roles/create',        [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/update/{id}',   [RoleController::class, 'update'])->name('roles.update');
    Route::post('roles/store',         [RoleController::class, 'store'])->name('roles.create.post');






    Route::get('/PurchaseInvoiceDetails/get',            [ReturnsSalesInvoicesController::class, 'PurchaseInvoiceDetails'])->name('PurchaseInvoiceDetails.get');
    Route::get('/PurchaseInvoice/get',                   [ReturnsSalesInvoicesController::class, 'getSalesInvoices'])->name('PurchaseInvoice.get');
    // ------------------------------------------------------------------------------------------------
    Route::get('/Clientbond',              [ClientbondController::class, 'index'])->name('Clientbond.index');
    Route::get('/Clientbond/print/{id}',   [ClientbondController::class, 'print'])->name('Clientbond.print');
    Route::get('/Clientbond/show/{id}',   [ClientbondController::class, 'show'])->name('Clientbond.show');
    Route::get('/Clientbond/create',        [ClientbondController::class, 'create'])->name('Clientbond.create');
    Route::get('/Clientbond/update/{id}',        [ClientbondController::class, 'edit'])->name('Clientbond.update');
    Route::post('/Clientbond/edit/{id}',        [ClientbondController::class, 'update'])->name('Clientbond.edit');
    Route::post('/Clientbond/create/post',  [ClientbondController::class, 'store'])->name('Clientbond.create.post');
    Route::get('/Clientbond/data',          [ClientbondController::class, 'getClientbond'])->name('getClientbondsData');
    Route::post('/Clientbond/destroy/{id}',   [ClientbondController::class, 'destroy'])->name('Clientbond.destroy');

    // -------------------------------------------------------------------------------------< inventory >-----------------------------------------------------------

    Route::get('/Inventory',              [Stocktakingcontroller::class, 'index'])->name('Inventory.index');
    Route::get('/Inventory/print/{id}',   [Stocktakingcontroller::class, 'print'])->name('Inventory.print');
    Route::get('/Inventory/show/{id}',   [Stocktakingcontroller::class, 'show'])->name('Inventory.show');
    Route::get('/Inventory/create',        [Stocktakingcontroller::class, 'create'])->name('Inventory.create');
    Route::get('/Inventory/update/{id}',        [Stocktakingcontroller::class, 'edit'])->name('Inventory.update');
    Route::post('/Inventory/edit/{id}',        [Stocktakingcontroller::class, 'update'])->name('Inventory.edit');
    Route::post('/Inventory/create/post',  [Stocktakingcontroller::class, 'store'])->name('Inventory.create.post');
    Route::get('/Inventory/data',          [Stocktakingcontroller::class, 'getInventory'])->name('getInventorysData');
    Route::post('/Inventory/destroy/{id}',   [Stocktakingcontroller::class, 'destroy'])->name('Inventory.destroy');

    // -------------------------------------------------------------------------------------< pallrole >-----------------------------------------------------------
    Route::get('/payroll/create',[PayRollController::class, 'create'])->name('payroll.create');
    Route::post('/payroll/create/step2',[PayRollController::class, 'createStep2'])->name('payroll.step2');
    Route::post('/payroll/create/step3',[PayRollController::class, 'createStep3'])->name('payroll.step3');
    Route::get('/get/employes/with/site',[PayRollController::class, 'getEmployesWithSiteId'])->name('getEmployesWithSiteId');
    // -------------------------------------------------------------------------------------< End inventory >-----------------------------------------------------------

    Route::get('/Supplierbond',              [SupplierbondController::class, 'index'])->name('Supplierbond.index');
    Route::get('/Supplierbond/create',        [SupplierbondController::class, 'create'])->name('Supplierbond.create');
    Route::get('/Supplierbond/show/{id}',        [SupplierbondController::class, 'show'])->name('Supplierbond.show');
    Route::get('/Supplierbond/print/{id}',        [SupplierbondController::class, 'print'])->name('Supplierbond.print');
    Route::get('/Supplierbond/update/{id}',        [SupplierbondController::class, 'edit'])->name('Supplierbond.update');
    Route::post('/Supplierbond/edit/{id}',        [SupplierbondController::class, 'update'])->name('Supplierbond.edit');
    Route::post('/Supplierbond/create/post',  [SupplierbondController::class, 'store'])->name('Supplierbond.create.post');
    Route::get('/Supplierbond/data',          [SupplierbondController::class, 'getSupplierbond'])->name('getSupplierbondsData');
    Route::post('/Supplierbond/destroy/{id}',   [SupplierbondController::class, 'destroy'])->name('Supplierbond.destroy');
    Route::get('/Supplierbond/print/{id}',   [SupplierbondController::class, 'print'])->name('Supplierbond.print');


    Route::get('/Product',                  [ProductController::class, 'index'])->name('Product.index');
    Route::get('/Product/Item/home',        [ProductController::class, 'itemIndex'])->name('item.index');
    Route::get('/Product/Unit/home',        [ProductController::class, 'unitIndex'])->name('unit.index');
    Route::get('/Product/create/{type}',    [ProductController::class, 'create'])->name('Product.create');
    Route::get('/unit/create',              [ProductController::class, 'createUnit'])->name('Product.create.unit');
    Route::get('/item/create',              [ProductController::class, 'createItem'])->name('Product.create.item');
    Route::get('/tenant/products',          [ProductController::class, 'tenant'])->name('Product.tenant');
    Route::get('/Product/update/{id}',      [ProductController::class, 'edit'])->name('Product.update');
    Route::post('/Product/edit/{id}',       [ProductController::class, 'update'])->name('Product.edit');
    Route::post('/Product/create/post',     [ProductController::class, 'store'])->name('Product.create.post');
    Route::get('/Product/data',             [ProductController::class, 'getProduct'])->name('getProductsData');
    Route::get('/Product/data/item',        [ProductController::class, 'getItemDataTable'])->name('getItemsData');
    Route::get('/Product/data/unit',        [ProductController::class, 'getUnitDataTable'])->name('getUnitsData');
    Route::post('/Product/destroy/{id}',    [ProductController::class, 'destroy'])->name('Product.destroy');
    Route::post('/Product/unit/ajax',       [ProductController::class, 'subAjaxUnit'])->name('sub.Ajax.unit');
    Route::post('/Product/item/ajax',       [ProductController::class, 'subAjaxItem'])->name('sub.Ajax.item');
    Route::post('/Product/unit/ajax/get',   [ProductController::class, 'getUnit'])->name('getUnit');
    Route::get('/Product/{id}',             [ProductController::class, 'show'])->name('Product.show');
    Route::get('/Product/copy/{id}',        [ProductController::class, 'copy'])->name('Product.copy');

    Route::get('/bonds',              [bondsController::class, 'index'])->name('bonds.index');
    Route::get('/bonds/create',        [bondsController::class, 'create'])->name('bonds.create');
    Route::get('/bonds/update/{id}',        [bondsController::class, 'edit'])->name('bonds.update');
    Route::post('/bonds/edit/{id}',        [bondsController::class, 'update'])->name('bonds.edit');
    Route::post('/bonds/create/post',  [bondsController::class, 'store'])->name('bonds.create.post');
    Route::get('/bonds/data',          [bondsController::class, 'getbonds'])->name('getbondsData');
    Route::post('/bonds/destroy/{id}',   [bondsController::class, 'destroy'])->name('bonds.destroy');

    Route::get('/employe',              [EmployeController::class, 'index'])->name('employe.index');
    Route::get('/employe/create',        [EmployeController::class, 'create'])->name('employe.create');
    Route::get('/employe/update/{id}',        [EmployeController::class, 'edit'])->name('employe.update');
    Route::post('/employe/edit/{id}',        [EmployeController::class, 'update'])->name('employe.edit');
    Route::post('/employe/create/post',  [EmployeController::class, 'store'])->name('employe.create.post');
    Route::get('/employe/data',          [EmployeController::class, 'getemployes'])->name('getemployeData');
    Route::post('/employe/destroy/{id}',   [EmployeController::class, 'destroy'])->name('employe.destroy');
    Route::get('/export-Employes',         [EmployeController::class, 'exportEmployees'])->name('export-Employes');


    Route::get('/SettingSalary',              [SettingSalaryController::class, 'index'])->name('SettingSalary.index');
    Route::get('/SettingSalary/update/{id}',        [SettingSalaryController::class, 'edit'])->name('SettingSalary.update');
    Route::post('/SettingSalary/edit/{id}',        [SettingSalaryController::class, 'update'])->name('SettingSalary.edit');
    Route::get('/SettingSalary/data',          [SettingSalaryController::class, 'getSettingSalary'])->name('getSettingSalaryData');
    Route::post('/SettingSalary/destroy/{id}',   [SettingSalaryController::class, 'destroy'])->name('SettingSalary.destroy');




    Route::get('/Site',              [SiteController::class, 'index'])->name('Site.index');
    Route::get('/sub_site',              [SiteController::class, 'index2'])->name('sub_site.index');
    Route::get('/Site/create',        [SiteController::class, 'create'])->name('Site.create');
    Route::get('/Site/update/{id}',        [SiteController::class, 'edit'])->name('Site.update');
    Route::post('/Site/edit/{id}',        [SiteController::class, 'update'])->name('Site.edit');
    Route::post('/Site/create/post',  [SiteController::class, 'store'])->name('Site.create.post');

    Route::get('/Site/data',          [SiteController::class, 'getSite'])->name('getSiteData');

    Route::get('/iSte/sub/data',          [SiteController::class, 'getSubSite'])->name('getSubSiteData');

    Route::post('/Site/destroy/{id}',   [SiteController::class, 'destroy'])->name('Site.destroy');

    Route::get('/ManutOrder',              [ManutOrderController::class, 'index'])->name('ManutOrder.index');
    Route::get('/ManutOrder/create',        [ManutOrderController::class, 'create'])->name('ManutOrder.create');
    Route::get('/ManutOrder/update/{id}',        [ManutOrderController::class, 'edit'])->name('ManutOrder.update');
    Route::post('/ManutOrder/edit/{id}',        [ManutOrderController::class, 'update'])->name('ManutOrder.edit');
    Route::post('/ManutOrder/create/post',  [ManutOrderController::class, 'store'])->name('ManutOrder.create.post');
    Route::get('/ManutOrder/data',          [ManutOrderController::class, 'getManutOrder'])->name('getManutOrderData');
    Route::post('/ManutOrder/destroy/{id}',   [ManutOrderController::class, 'destroy'])->name('ManutOrder.destroy');

    Route::get('/drop',              [DropController::class, 'index'])->name('drop.index');
    Route::get('/drop/create',        [DropController::class, 'create'])->name('drop.create');
    Route::get('/drop/update/{id}',        [DropController::class, 'edit'])->name('drop.update');
    Route::post('/drop/edit/{id}',        [DropController::class, 'update'])->name('drop.edit');
    Route::post('/drop/create/post',  [DropController::class, 'store'])->name('drop.create.post');
    Route::get('/drop/data',          [DropController::class, 'getdrop'])->name('getdropData');
    Route::post('/drop/destroy/{id}',   [DropController::class, 'destroy'])->name('drop.destroy');
    Route::get('/drop/select',   [DropController::class, 'select'])->name('drop.select');

    Route::get('/advance',              [AdvanceController::class, 'index'])->name('advance.index');
    Route::get('/advance/create',        [AdvanceController::class, 'create'])->name('advance.create');
    Route::get('/advance/update/{id}',        [AdvanceController::class, 'edit'])->name('advance.update');
    Route::post('/advance/edit/{id}',        [AdvanceController::class, 'update'])->name('advance.edit');
    Route::post('/advance/create/post',  [AdvanceController::class, 'store'])->name('advance.create.post');
    Route::get('/advance/data',          [AdvanceController::class, 'getadvance'])->name('getadvanceData');
    Route::post('/advance/destroy/{id}',   [AdvanceController::class, 'destroy'])->name('advance.destroy');

    Route::get('/discount',              [DiscountController::class, 'index'])->name('discount.index');
    Route::get('/discount/create',        [DiscountController::class, 'create'])->name('discount.create');
    Route::get('/discount/update/{id}',        [DiscountController::class, 'edit'])->name('discount.update');
    Route::post('/discount/edit/{id}',        [DiscountController::class, 'update'])->name('discount.edit');
    Route::post('/discount/create/post',  [DiscountController::class, 'store'])->name('discount.create.post');
    Route::get('/discount/data',          [DiscountController::class, 'getdiscount'])->name('getdiscountData');
    Route::post('/discount/destroy/{id}',   [DiscountController::class, 'destroy'])->name('discount.destroy');

    Route::get('/reward',              [RewardController::class, 'index'])->name('reward.index');
    Route::get('/reward/create',        [RewardController::class, 'create'])->name('reward.create');
    Route::get('/reward/update/{id}',        [RewardController::class, 'edit'])->name('reward.update');
    Route::post('/reward/edit/{id}',        [RewardController::class, 'update'])->name('reward.edit');
    Route::post('/reward/create/post',  [RewardController::class, 'store'])->name('reward.create.post');
    Route::get('/reward/data',          [RewardController::class, 'getreward'])->name('getrewardData');
    Route::post('/reward/destroy/{id}',   [RewardController::class, 'destroy'])->name('reward.destroy');

    Route::get('/reward',              [RewardController::class, 'index'])->name('reward.index');
    Route::get('/reward/create',        [RewardController::class, 'create'])->name('reward.create');
    Route::get('/reward/update/{id}',        [RewardController::class, 'edit'])->name('reward.update');
    Route::post('/reward/edit/{id}',        [RewardController::class, 'update'])->name('reward.edit');
    Route::post('/reward/create/post',  [RewardController::class, 'store'])->name('reward.create.post');
    Route::get('/reward/data',          [RewardController::class, 'getreward'])->name('getrewardData');
    Route::post('/reward/destroy/{id}',   [RewardController::class, 'destroy'])->name('reward.destroy');


    Route::get('/Account',              [AccountController::class, 'index'])->name('Account.index');
    Route::get('/Account/getAjax/{id}', [AccountController::class, 'getAccountajax'])->name('Account.get.ajax');
    Route::get('/Account/create',       [AccountController::class, 'create'])->name('Account.create');
    Route::get('/Account/new/balance',  [AccountController::class, 'create'])->name('Account.newBalance');
    Route::get('/Account/update/{id}',  [AccountController::class, 'edit'])->name('Account.update');
    Route::post('/Account/edit/{id}',   [AccountController::class, 'update'])->name('Account.edit');
    Route::post('/Account/create/post', [AccountController::class, 'store'])->name('Account.create.post');
    Route::get('/Account/data',         [AccountController::class, 'getAccount'])->name('getAccountData');
    Route::post('/Account/destroy/{id}', [AccountController::class, 'destroy'])->name('Account.destroy');


    Route::get('/EasyRestriction',                [EasyRestrictionController::class, 'index'])->name('EasyRestriction.index');
    Route::get('/EasyRestriction/create/{type}',  [EasyRestrictionController::class, 'create'])->name('EasyRestriction.create');
    Route::get('/tenant/EasyRestriction',         [EasyRestrictionController::class, 'tenant'])->name('EasyRestriction.tenant');
    Route::get('/EasyRestriction/update/{id}',    [EasyRestrictionController::class, 'edit'])->name('EasyRestriction.update');
    Route::get('/EasyRestriction/data',           [EasyRestrictionController::class, 'getEasyRestriction'])->name('getEasyRestrictionData');
    Route::post('/EasyRestriction/create/post',   [EasyRestrictionController::class, 'store'])->name('EasyRestriction.create.post');
    Route::post('/EasyRestriction/edit/{id}',     [EasyRestrictionController::class, 'update'])->name('EasyRestriction.edit');
    Route::post('/EasyRestriction/destroy/{id}',  [EasyRestrictionController::class, 'destroy'])->name('EasyRestriction.destroy');

    Route::get('/DailyAccountingEntries',              [DailyAccountingEntriesController::class, 'index'])->name('DailyAccountingEntries.index');
    Route::get('/DailyAccountingEntries/create',        [DailyAccountingEntriesController::class, 'create'])->name('DailyAccountingEntries.create');
    Route::get('/DailyAccountingEntries/update/{id}',        [DailyAccountingEntriesController::class, 'edit'])->name('DailyAccountingEntries.update');
    Route::post('/DailyAccountingEntries/edit/{id}',        [DailyAccountingEntriesController::class, 'update'])->name('DailyAccountingEntries.edit');
    Route::post('/DailyAccountingEntries/create/post',  [DailyAccountingEntriesController::class, 'store'])->name('DailyAccountingEntries.create.post');
    Route::get('/DailyAccountingEntries/data',          [DailyAccountingEntriesController::class, 'getDailyAccountingEntries'])->name('getDailyAccountingEntriesData');
    Route::post('/DailyAccountingEntries/destroy/{id}',   [DailyAccountingEntriesController::class, 'destroy'])->name('DailyAccountingEntries.destroy');


    Route::get('/getInfoAndQunProduct',   [AjaxController::class, 'QunItemsInStore'])->name('AjaxController.QunItemsInStore');

    // -----------------------------------------------< Ajax >-------------------------

    Route::get('/sales_invoices/payment/{id}',        [AjaxController::class, 'paymentInvoices'])->name('sales_invoices.payment');


    // -----------------------------------------------< Reports >-----------------

    Route::group(['prefix' => 'Reports'], function () {
        Route::get('/', [ReportController::class, 'index'])->name('report.index');
        Route::get('/Restriction', [ReportController::class, 'ReportRestriction'])->name('EasyRestriction.report');
        Route::get('/Teacher', [ReportController::class, 'ReportTeacher'])->name('Teacher.report');
        Route::get('/Report3', [ReportController::class, 'Report3'])->name('reports.report3');
        Route::get('/Statement', [ReportController::class, 'Statement'])->name('reports.Statement');
        Route::get('/report1',   [ReportController::class, 'Report1'])->name('reports.report1');
        Route::get('/report2',   [ReportController::class, 'Report2'])->name('reports.report2');
        Route::get('/report33',  [ReportController::class, 'Report33'])->name('reports.report33');
        Route::get('/report4',  [ReportController::class, 'Report4'])->name('reports.report4');
        Route::get('/report5',  [ReportController::class, 'Report5'])->name('reports.report5');
        Route::get('/report6',  [ReportController::class, 'Report6'])->name('reports.report6');
        Route::get('/report7',  [ReportController::class, 'Report7'])->name('reports.report7');
        Route::get('/report8',  [ReportController::class, 'Report8'])->name('reports.report8');
        Route::get('/report9',  [ReportController::class, 'Report9'])->name('reports.report9');
        Route::get('/report10',  [ReportController::class, 'Report10'])->name('reports.report10');
        Route::get('/report11',  [ReportController::class, 'Report11'])->name('reports.report11');
        Route::get('/report12',  [ReportController::class, 'Report12'])->name('reports.report12');
        Route::get('/report13',  [ReportController::class, 'Report13'])->name('reports.report13');
        Route::get('/report14',  [ReportController::class, 'Report14'])->name('reports.report14');
        Route::get('/report15',  [ReportController::class, 'Report15'])->name('reports.report15');
        Route::get('/report16',  [ReportController::class, 'Report16'])->name('reports.report16');
        Route::get('/report17',  [ReportController::class, 'Report17'])->name('reports.report17');
        Route::get('/report18',  [ReportController::class, 'Report18'])->name('reports.report18');
        Route::get('/report19',  [ReportController::class, 'Report19'])->name('reports.report19');
        Route::get('/report20',  [ReportController::class, 'Report20'])->name('reports.report20');
        Route::get('/report21',  [ReportController::class, 'Report21'])->name('reports.report21');
        Route::get('/report22',  [ReportController::class, 'Report22'])->name('reports.report22');
        Route::get('/report23',  [ReportController::class, 'Report23'])->name('reports.report23');
        Route::get('/report24',  [ReportController::class, 'Report24'])->name('reports.report24');
        Route::get('/report25',  [ReportController::class, 'Report25'])->name('reports.report25');
        Route::get('/report26',  [ReportController::class, 'Report26'])->name('reports.report26');
        Route::get('/report27',  [ReportController::class, 'Report27'])->name('reports.report27');
        Route::get('/report28',  [ReportController::class, 'Report28'])->name('reports.report28');
        Route::get('/report29',  [ReportController::class, 'Report29'])->name('reports.report29');
    });



    Route::group(['prefix' => 'Export'], function () {
        Route::get('/ExportClient',   [ExportController::class, 'ExportClients'])->name('ExportClient');
        Route::get('/ExportClientbond', [ExportController::class, 'ExportClientbonds'])->name('ExportClientbond');
        Route::get('/quotations/export', [ExportController::class, 'downloadQuotationExcel'])->name('ExportQuotation');
        Route::get('/Supplier/export', [ExportController::class, 'downloadSupplierExcel'])->name('ExportSupplier');
        Route::get('/ExportPurchase_Invoices',  [ExportController::class, 'ExportPurchase_Invoices'])->name('ExportPurchase_Invoices');
        Route::get('/ExportSupplierbonds',  [ExportController::class, 'ExportSupplierbonds'])->name('ExportSupplierbonds');
        Route::get('/ExportPurchase_orders',  [ExportController::class, 'ExportPurchase_orders'])->name('ExportPurchase_orders');
        Route::get('/ExportSalesinvoices',  [ExportController::class, 'ExportSalesinvoices'])->name('ExportSalesinvoices');
        Route::get('/ExportEasyRestriction',  [ExportController::class, 'ExportEasyRestriction'])->name('ExportEasyRestriction');
        Route::get('/ExportReturnsSalesInvoices',  [ExportController::class, 'ExportReturnsSalesInvoices'])->name('ExportReturnsSalesInvoices');
        Route::get('/ExportReturnsPurchase_Invoices',  [ExportController::class, 'ExportReturnsPurchase_Invoices'])->name('ExportReturnsPurchase_Invoices');
    });
});





// landing
Route::get('', 'RoutingController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
