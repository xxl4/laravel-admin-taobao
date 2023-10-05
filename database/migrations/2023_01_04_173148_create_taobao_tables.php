<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaobaoTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return config('taobao.database.connection') ?: config('database.default');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('taobao.database.categories_table')); // category
        Schema::dropIfExists(config('taobao.database.prods_table')); // category 属性
        Schema::dropIfExists(config('taobao.database.trades_table')); // 订单
        Schema::dropIfExists(config('taobao.database.refunds_table')); // 售后
        Schema::dropIfExists(config('taobao.database.products_table')); // 商品
        Schema::dropIfExists(config('taobao.database.products_prods_table')); // 商品属性

    }
}
