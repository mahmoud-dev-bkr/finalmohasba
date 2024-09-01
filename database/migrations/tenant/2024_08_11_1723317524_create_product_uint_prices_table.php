<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUintPricesTable extends Migration
{
    public function up()
    {
        Schema::create('product_uint_prices', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('unit_id')->nullable();
		$table->integer('product_id')->nullable();
		$table->integer('site_id')->nullable();
		$table->integer('price')->nullable();
		$table->timestamps();
		$table->integer('company_id')->nullable();
		$table->integer('counter_of_unit')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('product_uint_prices');
    }
}