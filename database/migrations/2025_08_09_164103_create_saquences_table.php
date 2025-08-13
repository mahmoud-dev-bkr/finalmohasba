<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaquencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saquences', function (Blueprint $table) {
            $table->id();
            $table->text('code')->nullable();
            $table->bigInteger('num')->nullable()->default(12);
            $table->text('type')->nullable();
            $table->text('start')->nullable();
            $table->text('site_id')->nullable();
            $table->text('type_id')->nullable();
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
        Schema::dropIfExists('saquences');
    }
}
