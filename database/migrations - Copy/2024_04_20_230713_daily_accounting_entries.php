<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DailyAccountingEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_accounting_entries', function (Blueprint $table) {
            $table->id();
            $table->string('Note')->nullable();
            $table->date('date')->nullable();
            $table->string('site_id')->nullable();
            $table->double('Total')->nullable();
            $table->integer('line')->nullable();
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
        Schema::dropIfExists('daily_accounting_entries');
    }
}
