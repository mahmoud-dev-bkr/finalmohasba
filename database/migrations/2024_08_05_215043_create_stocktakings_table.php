<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocktakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocktakings', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('description')->nullable();
            $table->string('cost_calculation')->nullable();
            $table->string('revenue_account')->nullable();
            $table->integer('site_id')->nullable();
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
        Schema::dropIfExists('stocktakings');
    }
}
