<?php

use Nicelizhi\Taobao\Http\Controllers\TaobaoController;
use Nicelizhi\Taobao\Http\Controllers\TaobaoOrdersController;
use Nicelizhi\Taobao\Http\Controllers\TaobaoProductsController;
use Nicelizhi\Taobao\Http\Controllers\TaobaoRefundsController;

Route::get('taobao', TaobaoController::class.'@index');
Route::resource('taobao/orders', TaobaoOrdersController::class); // 订单
Route::resource('taobao/products', TaobaoProductsController::class); // 商品
Route::resource('taobao/refuunds', TaobaoRefundsController::class); // 商品
