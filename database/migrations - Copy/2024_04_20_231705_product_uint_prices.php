<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductUintPrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_uint_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('comapny_id')->nullable();
            $table->integer('counter_of_unit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_uint_prices');
    }
}
