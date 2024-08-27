<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_addresses', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->string('city')->nullable(); // Nullable string for city
			$table->unsignedInteger('clientsID')->nullable(); // Nullable unsigned integer for client ID
			$table->string('street_name')->nullable(); // Nullable string for street name
			$table->string('Country')->nullable(); // Nullable string for country
			$table->string('Zep_Code')->nullable(); // Nullable string for zip code
			$table->string('buildingNumber')->nullable(); // Nullable string for building number
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
			$table->unsignedInteger('company_id')->nullable(); // Nullable unsigned integer for company ID
		});
		
    }

    public function down()
    {
        Schema::dropIfExists('invoice_addresses');
    }
}