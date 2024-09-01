<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {

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
		$table->float('discount')->nullable();
		$table->integer('type')->nullable();
		$table->integer('status')->default('1');
		$table->text('site_id')->nullable();
		$table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}