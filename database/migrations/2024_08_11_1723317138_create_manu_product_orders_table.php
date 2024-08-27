<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuProductOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('manu_product_orders', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('id_product')->nullable();
            $table->integer('id_Manu_order')->nullable();
            $table->string('Qun')->nullable();
            $table->timestamps();
            $table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('manu_product_orders');
    }
}