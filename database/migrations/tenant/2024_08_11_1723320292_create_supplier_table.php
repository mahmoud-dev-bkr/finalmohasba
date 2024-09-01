<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->string('name')->nullable();
		$table->string('phon')->nullable();
		$table->string('phon2')->nullable();
		$table->string('email')->nullable();
		$table->string('email2')->nullable();
		$table->string('Facility')->nullable();
		$table->string('webName')->nullable();
		$table->string('Tex_Number')->nullable();
		$table->integer('theCondition')->nullable();
		$table->integer('pointsClient')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('status')->default('0');
		$table->text('street_1')->nullable();
		$table->text('city_1')->nullable();
		$table->text('st_1')->nullable();
		$table->text('zip_1')->nullable();
		$table->text('cantry_1')->nullable();
		$table->text('bld_1')->nullable();
		$table->integer('company_id')->nullable();
		$table->string('name_en')->nullable();
		$table->string('Commercial_Record')->nullable();
		$table->date('Commercial_Record_data')->nullable();
		$table->string('Municipality_number')->nullable();
		$table->date('Municipality_number_data')->nullable();
		$table->string('Tax_number')->nullable();
		$table->date('Tax_number_data')->nullable();
		$table->text('code')->nullable();
		$table->integer('site_id')->nullable();
		$table->integer('group_id')->nullable();
		$table->integer('type_mony')->nullable();
		$table->float('incentive')->nullable();
		$table->float('reward_points')->nullable();
		$table->integer('salesperson_id')->nullable();
		$table->integer('client_classification_id')->nullable();
		$table->float('credit_limit')->nullable();
		$table->integer('additional_lncentives')->nullable();
		$table->float('contracts_rebates')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}