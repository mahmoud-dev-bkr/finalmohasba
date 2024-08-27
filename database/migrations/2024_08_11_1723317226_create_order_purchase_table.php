<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPurchaseTable extends Migration
{
    public function up()
    {
        Schema::create('order_purchase', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('id_invoice')->nullable();
		$table->integer('id_supplerce')->nullable();
		$table->integer('Qun')->nullable();
        $table->timestamps();
		$table->integer('product_id')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('order_purchase');
    }
}