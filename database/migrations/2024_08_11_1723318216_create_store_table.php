<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('site_id')->nullable();
		$table->integer('product_id')->nullable();
		$table->float('qun')->default('0');
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('store');
    }
}