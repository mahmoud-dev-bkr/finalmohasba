<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('Inventory_id')->nullable();
            $table->timestamps();
            $table->integer('type')->default(0);
            $table->integer('company_id')->nullable()->unsigned();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('main_activity')->nullable();
            $table->string('Activity_description')->nullable();
            $table->string('Registered_capital')->nullable();
            $table->string('Added_capital')->nullable();
            $table->string('Commercial_Record')->nullable();
            $table->date('Commercial_Record_data')->nullable();
            $table->string('Municipality_number')->nullable();
            $table->date('Municipality_number_data')->nullable();
            $table->string('Tex_Number')->nullable();
            $table->date('Tex_Number_data')->nullable();
            $table->string('Human_Resources_License')->nullable();
            $table->date('Human_Resources_License_data')->nullable();
            $table->string('FDA_license')->nullable();
            $table->date('FDA_license_data')->nullable();
            $table->string('Social_Insurance')->nullable();
            $table->date('Social_Insurance_data')->nullable();
            $table->string('Chamber_Commerce')->nullable();
            $table->date('Chamber_Commerce_data')->nullable();
            $table->string('Another')->nullable();
            $table->date('Another_data')->nullable();
            $table->string('street_1')->nullable();
            $table->string('city_1')->nullable();
            $table->string('st_1')->nullable();
            $table->string('zip_1')->nullable();
            $table->string('cantry_1')->nullable();
            $table->string('phon')->nullable();
            $table->string('phon2')->nullable();
            $table->string('code_phon')->nullable();
            $table->string('code_phon2')->nullable();
            $table->string('Inventory')->nullable();
            $table->string('Accounts_tree')->nullable();
            $table->string('Payment_accounts')->nullable();
            $table->string('Accounts_tree2')->nullable();
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
            $table->string('name')->nullable();

            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
