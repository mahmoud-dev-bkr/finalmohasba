<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quotations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations1', function (Blueprint $table) {
            $table->id();
            $table->string('Ref')->nullable();
            $table->string('client_id')->nullable();
            $table->string('Release_Date')->nullable();
            $table->string('Payment_Terms')->nullable();
            $table->string('description')->nullable();
            $table->string('due_date')->nullable();
            $table->string('Supply_date')->nullable();
            $table->string('code')->nullable();
            $table->string('total_with_tax')->nullable();
            $table->string('total')->nullable();
            $table->string('tax_value')->nullable();
            $table->string('discount')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('site_id')->nullable();
            $table->string('returns_id	')->nullable();
            $table->string('done')->nullable();
            $table->string('old_balance')->nullable();
            $table->string('type_descount')->nullable();
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
        Schema::dropIfExists('quotations1');
    }
}
