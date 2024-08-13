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
            $table->id();
            $table->string("code")->nullable();
            $table->string("Facility")->nullable();
            $table->string("name")->nullable();
            $table->string("name_en")->nullable();
            $table->string("email")->nullable();
            $table->string("email2")->nullable();
            $table->string("main_activity")->nullable();
            $table->string("Activity_description")->nullable();
            $table->string("Registered_capital")->nullable();
            $table->string("Added_capital")->nullable();
            $table->string("Commercial_Record")->nullable();
            $table->date("Commercial_Record_data")->nullable();
            $table->string("Municipality_number")->nullable();
            $table->date("Municipality_number_data")->nullable();
            $table->string("Tex_Number")->nullable();
            $table->date("Tex_Number_data")->nullable();
            $table->string("Human_Resources_License")->nullable();
            $table->date("Human_Resources_License_data")->nullable();
            $table->string("FDA_license")->nullable();
            $table->date("FDA_license_data")->nullable();
            $table->string("Social_Insurance")->nullable();
            $table->date("Social_Insurance_data")->nullable();
            $table->string("Chamber_Commerce")->nullable();
            $table->date("Chamber_Commerce_data")->nullable();
            $table->string("Another")->nullable();
            $table->date("Another_data")->nullable();
            $table->string("street_1")->nullable();
            $table->string("city_1")->nullable();
            $table->string("st_1")->nullable();
            $table->string("zip_1")->nullable();
            $table->string("cantry_1")->nullable();
            $table->integer("phon")->nullable();
            $table->integer("phon2")->nullable();
            $table->integer("code_phon")->nullable();
            $table->integer("code_phon2")->nullable();
            $table->string("Inventory")->nullable();
            $table->string("Accounts_tree")->nullable();
            $table->string("Payment_accounts")->nullable();
            $table->string("Accounts_tree2")->nullable();
            $table->integer("type")->nullable();
            $table->integer("company_id")->nullable();

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
        Schema::dropIfExists('sites');
    }
}
