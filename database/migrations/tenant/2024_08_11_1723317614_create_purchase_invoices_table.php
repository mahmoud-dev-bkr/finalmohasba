<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_invoices', function (Blueprint $table) {

		$table->bigIncrements('id');
		$table->string('code')->nullable();
		$table->integer('id_supplers')->nullable();
		$table->string('payment_terms')->nullable();
		$table->date('Date_start')->nullable();
		$table->date('Date_end')->nullable();
		$table->date('Date_Groce_Period')->nullable();
		$table->string('Note')->nullable();
		$table->string('Terms_Condition')->nullable();
		$table->string('Reviews')->nullable();
		$table->string('Attachments')->nullable();
		$table->integer('id_Project')->nullable();
		$table->integer('id_Task')->nullable();
		$table->timestamp('created_at')->nullable();
		$table->timestamp('updated_at')->nullable();
		$table->float('total_with_tax')->nullable();
		$table->string('total')->nullable();
		$table->float('tax_value')->nullable();
		$table->integer('type')->nullable();
		$table->float('discount')->default('0');
		$table->integer('done')->nullable();
		$table->float('old_balance')->nullable();
		$table->integer('site_id')->nullable();
		$table->integer('type_descount')->default('1');
		$table->integer('returns_id')->nullable();
		$table->integer('company_id')->nullable();
		$table->float('descount_with_premotion')->nullable();
		$table->float('total_b')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_invoices');
    }
}