<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnsSalesInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('returns_sales_invoices', function (Blueprint $table) {

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
		$table->float('total')->nullable();
		$table->float('tax_value')->nullable();
		$table->integer('type')->nullable();
		$table->float('discount')->nullable();
		$table->integer('returns')->default('0');
		$table->integer('done')->default('0');
		$table->float('old_balance')->nullable();
		$table->integer('site_id')->nullable();
		$table->integer('type_descount')->nullable();
		$table->integer('purchase_invoice_id')->nullable();
		$table->integer('result')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('returns_sales_invoices');
    }
}