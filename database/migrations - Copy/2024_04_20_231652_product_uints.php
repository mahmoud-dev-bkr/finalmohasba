<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductUints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_uints', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product')->nullable();
            $table->integer('id_unit')->nullable();
            $table->integer('price_buy')->nullable();
            $table->integer('price_sell')->nullable();
            $table->string('is_buy_tex')->nullable();
            $table->string('is_sell_text')->nullable();
            $table->string('barcode')->nullable();
            $table->string('counter_of_unit')->nullable();
            $table->integer('company_id')->nullable();
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
        Schema::dropIfExists('product_uints');
    }
}
