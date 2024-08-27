<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->string('name')->nullable();
		$table->string('display_name')->nullable();
		$table->string('notes')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('company_id')->nullable();
		$table->integer('function_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}