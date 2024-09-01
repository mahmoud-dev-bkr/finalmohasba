<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('login_histories', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->bigInteger('user_id');
		$table->string('ip');
		$table->timestamp('datetime')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->string('details');
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('login_histories');
    }
}