<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_products', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('name')->nullable(); // Nullable, no default value needed
            $table->string('Des')->nullable(); // Nullable, no default value needed
            $table->timestamps(); // Adds created_at and updated_at columns
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
        Schema::dropIfExists('dep_products');
    }
}
