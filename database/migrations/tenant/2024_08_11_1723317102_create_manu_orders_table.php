<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('manu_orders', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->date('Date')->nullable();
		$table->integer('id_location')->nullable();
		$table->integer('id_Account')->nullable();
		$table->string('Des')->nullable();
        $table->timestamps();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('manu_orders');
    }
}