<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('company_street');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_zip')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_area')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_tax_number')->nullable();
            $table->string('currency');
            $table->date('due_date_tax')->nullable();
            $table->date('account_closing_date')->nullable();
            $table->integer('day_fiscal_year_start')->nullable();
            $table->string('month_fiscal_year_start')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
