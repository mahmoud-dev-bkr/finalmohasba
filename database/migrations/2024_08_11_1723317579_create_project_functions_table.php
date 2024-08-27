<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectFunctionsTable extends Migration
{
    public function up()
    {
        Schema::create('project_functions', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('name')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('project_functions');
    }
}