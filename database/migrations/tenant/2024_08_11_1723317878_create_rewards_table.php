<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->string('Reference')->nullable();
		$table->string('functionary')->nullable();
		$table->string('Value')->nullable();
		$table->string('genre')->nullable();
		$table->string('Date')->nullable();
		$table->string('description')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('rewards');
    }
}