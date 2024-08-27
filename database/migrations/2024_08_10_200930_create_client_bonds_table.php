<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_bonds', function (Blueprint $table) {
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
        
            $table->integer('multi')->default(0); // Default value 0, no auto-increment
            $table->integer('status')->nullable(); // Nullable, no default value needed
            $table->integer('is_deleted')->default(0); // Default value 0, no auto-increment
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
        Schema::dropIfExists('client_bonds');
    }
}
