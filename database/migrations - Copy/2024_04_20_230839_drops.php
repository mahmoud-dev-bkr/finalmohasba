<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drops', function (Blueprint $table) {
            $table->id();
            $table->string('Ref')->nullable();
            $table->string('Asset_classification')->nullable();
            $table->string('Asset_Name')->nullable();
            $table->string('Dipreciation_Period_Type')->nullable();
            $table->string('on')->nullable();
            $table->string('to')->nullable();
            $table->integer('comapny_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drops');
    }
}
