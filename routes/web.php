<?php

use Niceliizhi\Taobao\Http\Controllers\TaobaoController;

Route::get('taobao', TaobaoController::class.'@index');