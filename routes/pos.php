<?php
//commit

use App\Http\Controllers\POS\AjaxController;
use App\Http\Controllers\POS\PosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/get/product', [AjaxController::class, 'getProductWithItems'])->name('get.product.pos');
    // AjaxController add in cart and get cart
    Route::post('/get/cart', [AjaxController::class, 'getCart'])->name('get.cart.pos');
    Route::post('/add/cart', [AjaxController::class, 'addCart'])->name('add.cart.pos');
    Route::post('/update/cart', [AjaxController::class, 'updateCart'])->name('update.cart.pos');
    Route::post('/remove/cart', [AjaxController::class, 'removeCart'])->name('remove.cart.pos');
    Route::get('POS/checkOut', [PosController::class, 'chackoutview'])->name('checkout.view.pos');
    Route::post('POS/checkOut/post', [PosController::class, 'chackout'])->name('checkout.post');
    // Route::post('checkOut',   [PosController::class, 'checkOut'])->name('checkout.pos');
});


Route::group(['prefix' => '/'], function () {
    Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel')->name('third');
    Route::get('{first}/{second}', 'RoutingController@secondLevel')->name('second');
    Route::get('{any}', 'RoutingController@root')->name('any');
});
