<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
			$table->string('name_ar')->nullable();
			$table->string('name_en')->nullable();
			$table->text('serial_number')->nullable();
			$table->integer('id_unit')->nullable(); // No auto-increment
			$table->integer('id_des')->nullable(); // No auto-increment
			$table->string('barCode')->nullable();
			$table->string('Tex_Number')->nullable();
			$table->integer('price_of_sell')->nullable(); // No auto-increment
			$table->integer('type')->nullable(); // No auto-increment
			$table->char('is_sell', 25)->nullable();
			$table->char('is_buy', 25)->nullable();
			$table->char('is_store', 25)->nullable();
			$table->text('Note')->nullable();
			$table->timestamps(); // Adds created_at and updated_at
		
			$table->integer('buy')->nullable(); // No auto-increment
			$table->integer('sel')->nullable(); // No auto-increment
			$table->string('account_buy', 500)->nullable();
			$table->string('account_sel', 500)->nullable();
			$table->integer('qun')->default(0); // No auto-increment
			$table->integer('archive')->default(0); // No auto-increment
			$table->text('get_product_units')->nullable();
			$table->integer('company_id')->nullable(); // No auto-increment
		});
		
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}