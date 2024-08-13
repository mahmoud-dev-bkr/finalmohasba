<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuotationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id	')->nullable();
            $table->integer('purchase_invoice_id')->nullable();
            $table->integer('qun')->nullable();
            $table->string('withDescunt')->nullable();
            $table->integer('descunt	')->nullable();
            $table->double('price_after')->nullable();
            $table->double('price_before')->nullable();
            $table->integer('with')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('type')->nullable();
            $table->integer('tax_value')->nullable();
            $table->integer('type_descount')->nullable();
            $table->double('price_unit')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('price_unit_id')->nullable();
            $table->integer('comapny_id')->nullable();
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
        Schema::dropIfExists('quotation_details');
    }
}
