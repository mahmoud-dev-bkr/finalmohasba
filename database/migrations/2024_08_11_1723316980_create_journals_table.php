<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->integer('journal_id')->nullable();
		$table->integer('type')->nullable();
		$table->integer('acount_from')->nullable();
		$table->integer('acount_to')->nullable();
		$table->timestamps();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('journals');
    }
}