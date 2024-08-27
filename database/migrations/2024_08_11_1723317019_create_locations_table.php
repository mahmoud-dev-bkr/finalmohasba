<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->string('name_ar')->nullable();
		$table->string('name_en')->nullable();
		$table->integer('id_many_order')->nullable();
		$table->string('street_name')->nullable();
		$table->string('Country')->nullable();
		$table->string('Zep_Code')->nullable();
		$table->string('city')->nullable();
		$table->timestamps();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}