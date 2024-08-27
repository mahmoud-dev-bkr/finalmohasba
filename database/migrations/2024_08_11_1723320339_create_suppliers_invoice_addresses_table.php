<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersInvoiceAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers_invoice_addresses', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->integer('id_supplers')->nullable();
		$table->string('street_name')->nullable();
		$table->string('ciby')->nullable();
		$table->string('Zip_code')->nullable();
		$table->string('country')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers_invoice_addresses');
    }
}