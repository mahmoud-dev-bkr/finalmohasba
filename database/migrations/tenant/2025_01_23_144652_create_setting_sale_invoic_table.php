<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingSaleInvoicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_sale_invoic', function (Blueprint $table) {
            $table->id();
            $table->integer('numbering_sales_invoices')->default('1');
            $table->string('code')->default('INV');
            $table->integer('starting_sequence_number')->default('1');
            $table->longText('description')->nullable();
            $table->longText('terms_conditions')->nullable();
            $table->integer('day_pay_before_due_date')->default('0');
            $table->integer('automatic_email')->default('0');
            $table->integer('services_and_non_stocked')->default('0');
            $table->integer('good_execution_guarantee')->default('0');
            // print_settings
            $table->integer('print_settings')->default('0');
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
        Schema::dropIfExists('setting_sale_invoic');
    }
}
