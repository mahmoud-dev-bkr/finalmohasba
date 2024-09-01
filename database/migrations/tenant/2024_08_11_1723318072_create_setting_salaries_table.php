<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingSalariesTable extends Migration
{
    public function up()
    {
        Schema::create('setting_salaries', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->date('last_date')->nullable();
		$table->integer('day')->default('25');
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('setting_salaries');
    }
}