<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('quotation_details', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('product_id')->nullable();
		$table->integer('purchase_invoice_id')->nullable();
		$table->integer('qun')->nullable();
		$table->string('withDescunt')->default('0');
		$table->integer('descunt')->default('0');
		$table->float('price_after')->nullable();
		$table->float('price_before')->nullable();
		$table->integer('with')->nullable();
		$table->integer('tax')->nullable();
		$table->integer('type')->nullable();
		$table->float('tax_value')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('type_descount')->default('0');
		$table->float('price_unit')->default('1');
		$table->integer('unit_id')->nullable();
		$table->string('price_unit_id')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('quotation_details');
    }
}