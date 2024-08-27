<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomorShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customor_shipping_addresses', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('city')->nullable();
            $table->integer('clientsID')->nullable(); // No need to specify length
            $table->string('street')->nullable();
            $table->string('Country')->nullable();
            $table->string('Zep_Code')->nullable();
            $table->string('buildingNumber')->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->integer('company_id')->nullable(); // No need to specify length
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customor_shipping_addresses');
    }
}
