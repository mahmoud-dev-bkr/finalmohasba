<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersBondsTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers_bonds', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->string('code')->nullable();
		$table->integer('id_supplers')->nullable();
		$table->date('Date')->nullable();
		$table->integer('id_Account')->nullable();
		$table->integer('type')->nullable();
		$table->string('Amount')->nullable();
		$table->string('Note')->nullable();
		$table->integer('PurchaseInvoices_id')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->integer('status')->nullable();
		$table->integer('multi')->default('0');
		$table->integer('is_deleted')->nullable();
		$table->integer('type_returns')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers_bonds');
    }
}