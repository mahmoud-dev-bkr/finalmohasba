<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EasyRestrictions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('easy_restrictions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_account_from');
            $table->integer('id_account_to');
            $table->string('amunt');
            $table->date('date');
            $table->string('Des');
            $table->string('Pdf');
            $table->string('type');
            $table->integer('comapny_id');
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
        Schema::dropIfExists('easy_restrictions');
    }
}
