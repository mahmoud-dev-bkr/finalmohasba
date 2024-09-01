<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    public function up()
    {
        
		Schema::create('discounts', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->string('Reference')->nullable(); // Nullable string
			$table->string('functionary')->nullable();
			$table->decimal('Value', 10, 2)->nullable(); // Assuming Value is a decimal amount
			$table->string('genre')->nullable();
			$table->date('Date')->nullable(); // Using date type for Date
			$table->text('description')->nullable(); // Text is better for potentially long descriptions
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
		
			$table->unsignedInteger('company_id')->nullable(); // Unsigned integer for company_id
		});
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}