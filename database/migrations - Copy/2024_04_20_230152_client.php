<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phon')->nullable();
            $table->string('phon2')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('webName')->nullable();
            $table->string('Tex_Number')->nullable();
            $table->integer('theCondition')->nullable();
            $table->integer('pointsClient')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('street_1')->nullable();
            $table->string('city_1')->nullable();
            $table->string('st_1')->nullable();
            $table->string('zip_1')->nullable();
            $table->string('cantry_1')->nullable();
            $table->string('bld_1')->nullable();
            $table->string('name_en')->nullable();
            $table->string('Commercial_Record')->nullable();
            $table->date('Commercial_Record_data')->nullable();
            $table->string('Municipality_number')->nullable();
            $table->date('Municipality_number_data')->nullable();
            $table->string('Tax_number')->nullable();
            $table->date('Tax_number_data')->nullable();
            $table->string('code')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('type_mony')->nullable();
            $table->integer('incentive')->nullable();
            $table->integer('reward_points')->nullable();
            $table->integer('salesperson_id')->nullable();
            $table->integer('client_classification_id')->nullable();
            $table->integer('credit_limit')->nullable();
            $table->integer('contracts_rebates')->nullable();
            $table->integer('additional_lncentives')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
