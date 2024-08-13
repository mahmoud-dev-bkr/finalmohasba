<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('id_supplers')->nullable();
            $table->string('Date_start')->nullable();
            $table->string('Date_end')->nullable();
            $table->string('Date_Groce_Period')->nullable();
            $table->string('Note')->nullable();
            $table->string('Reviews')->nullable();
            $table->string('Attachments')->nullable();
            $table->string('id_Project')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('tax_value')->nullable();
            $table->string('total')->nullable();
            $table->string('total_with_tax')->nullable();
            $table->string('type')->nullable();
            $table->string('descount_with_premotion')->nullable();
            $table->string('site_id')->nullable();
            $table->string('done')->nullable();
            $table->string('old_balance')->nullable();
            $table->string('returns_id')->nullable();
            $table->string('total_b')->nullable();
            $table->string('company_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
