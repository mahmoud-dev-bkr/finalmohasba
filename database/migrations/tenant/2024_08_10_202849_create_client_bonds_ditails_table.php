<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientBondsDitailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_bonds_details', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('code')->nullable(); // Nullable, no default value needed
            $table->integer('id_customers')->nullable(); // Nullable, no default value needed
            $table->date('Date')->nullable(); // Nullable, no default value needed
            $table->integer('id_Account')->nullable(); // Nullable, no default value needed
            $table->integer('type')->nullable(); // Nullable, no default value needed
            $table->string('Note')->nullable(); // Nullable, no default value needed
            $table->string('Amount')->nullable(); // Nullable, no default value needed
            $table->integer('PurchaseInvoices_id')->nullable(); // Nullable, no default value needed
            $table->timestamps(); // Adds created_at and updated_at columns
            
            $table->integer('clientbons_id')->nullable(); // Nullable, no default value needed
            $table->integer('type_returns')->nullable(); // Nullable, no default value needed
            $table->integer('company_id')->nullable(); // Nullable, no default value needed
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_bonds_ditails');
    }
}
