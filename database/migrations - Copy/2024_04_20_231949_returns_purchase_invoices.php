<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReturnsPurchaseInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returns_purchase_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->int('id_supplers')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('Date_start')->nullable();
            $table->string('Date_end')->nullable();
            $table->string('Date_Groce_Period')->nullable();
            $table->string('Note')->nullable();
            $table->string('Terms_Condition')->nullable();
            $table->string('Reviews')->nullable();
            $table->string('Attachments')->nullable();
            $table->string('id_Project')->nullable();
            $table->string('id_Task')->nullable();
            $table->string('total_with_tax')->nullable();
            $table->string('total')->nullable();
            $table->string('tax_value')->nullable();
            $table->string('type')->nullable();
            $table->string('discount')->nullable();
            $table->string('returns')->nullable();
            $table->string('done')->nullable();
            $table->string('old_balance')->nullable();
            $table->string('site_id')->nullable();
            $table->string('type_descount')->nullable();
            $table->string('purchase_invoice_id')->nullable();
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
        Schema::dropIfExists('returns_purchase_invoices');
    }
}
