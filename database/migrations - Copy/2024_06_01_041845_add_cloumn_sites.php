<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCloumnSites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->string('Facility')->nullable();
            $table->string('name1')->nullable();
            $table->string('name_account1')->nullable();
            $table->string('country1')->nullable();
            $table->string('currency1')->nullable();
            $table->string('number_statement1')->nullable();
            $table->string('number_account1')->nullable();
            $table->string('code1')->nullable();
            $table->string('address1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name_account2')->nullable();
            $table->string('country2')->nullable();
            $table->string('currency2')->nullable();
            $table->string('number_statement2')->nullable();
            $table->string('number_account2')->nullable();
            $table->string('code2')->nullable();
            $table->string('address2')->nullable();
            $table->string('file_Commercial_Record')->nullable();
            $table->string('file_Municipality_number')->nullable();
            $table->string('file_tax_number')->nullable();
            $table->string('file_national_address')->nullable();
            $table->string('file_bank_account')->nullable();
            $table->string('file_credit_limit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->string('Facility')->nullable();
            $table->string('name1')->nullable();
            $table->string('name_account1')->nullable();
            $table->string('country1')->nullable();
            $table->string('currency1')->nullable();
            $table->string('number_statement1')->nullable();
            $table->string('number_account1')->nullable();
            $table->string('code1')->nullable();
            $table->string('address1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name_account2')->nullable();
            $table->string('country2')->nullable();
            $table->string('currency2')->nullable();
            $table->string('number_statement2')->nullable();
            $table->string('number_account2')->nullable();
            $table->string('code2')->nullable();
            $table->string('address2')->nullable();
            $table->string('file_Commercial_Record')->nullable();
            $table->string('file_Municipality_number')->nullable();
            $table->string('file_tax_number')->nullable();
            $table->string('file_national_address')->nullable();
            $table->string('file_bank_account')->nullable();
            $table->string('file_credit_limit')->nullable();
        });
    }
}
