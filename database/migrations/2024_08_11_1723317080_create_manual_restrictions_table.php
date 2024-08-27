<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualRestrictionsTable extends Migration
{
    public function up()
    {
        Schema::create('manual_restrictions', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('note')->nullable();
            $table->date('date')->nullable();
            $table->integer('site_id')->nullable();
            $table->timestamps();
            $table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('manual_restrictions');
    }
}