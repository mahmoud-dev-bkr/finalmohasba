<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('service_id')->nullable();
            $table->string('qun')->nullable();
            $table->string('withDescunt')->nullable();
            $table->string('descunt')->nullable();
            $table->string('price_after')->nullable();
            $table->string('price_before')->nullable();
            $table->string('with')->nullable();
            $table->string('tax')->nullable();
            $table->string('type')->nullable();
            $table->string('tax_value')->nullable();
            $table->string('price_unit')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('price_unit_id')->nullable();
            $table->string('qunXunit')->nullable();
            $table->string('comapny_id')->nullable();
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
        Schema::dropIfExists('service_details');
    }
}
