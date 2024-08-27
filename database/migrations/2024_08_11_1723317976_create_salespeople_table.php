<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalespeopleTable extends Migration
{
    public function up()
    {
        Schema::create('salespeople', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->text('name_ar')->nullable();
		$table->text('name_en')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('site_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('salespeople');
    }
}