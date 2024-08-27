<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxesTable extends Migration
{
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('account_id')->nullable();
		$table->string('name_ar')->nullable();
		$table->string('name_en')->nullable();
		$table->string('code')->nullable();
		$table->integer('rotio')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('taxes');
    }
}