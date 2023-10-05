<?php

use Nicelizhi\Taobao\Http\Controllers\TaobaoController;

Route::get('taobao', TaobaoController::class.'@index');