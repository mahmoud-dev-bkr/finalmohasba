<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('id_supplers');
            $table->string('Date_start');
            $table->string('Date_end');
            $table->string('Date_Groce_Period');
            $table->string('Note');
            $table->string('Reviews');
            $table->string('Attachments');
            $table->string('id_Project');
            $table->string('payment_terms');
            $table->string('site_id');
            $table->string('total');
            $table->string('total_with_tax');
            $table->string('tax_value');
            $table->string('status');
            $table->string('company_id');
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
        Schema::dropIfExists('quotations');
    }
}
