<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcountEstrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccount_estrictions', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->nullable();
            $table->string('type')->nullable();
            $table->integer('account_type')->nullable();
            $table->string('ammount_from')->nullable();
            $table->string('ammount_to')->nullable();
            $table->string('from_to')->nullable();
            $table->integer('company_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('ccount_estrictions');
    }
}
