<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEasyConstraintsTable extends Migration
{
    public function up()
    {
        
		Schema::create('easy_restrictions', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->string('id_account_from')->nullable(); // Nullable unsigned integer
			$table->string('id_account_to')->nullable(); // Nullable unsigned integer
			$table->float('amunt', 10, 2)->nullable(); // Assuming amunt is a decimal value
			$table->date('date')->nullable(); // Nullable date field
			$table->string('Des')->nullable(); // Nullable string
			$table->string('Pdf')->nullable(); // Nullable string
			$table->string('type')->nullable(); // Nullable string
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
		
			$table->string('company_id')->nullable(); // Nullable unsigned integer
		});
		
		
    }

    public function down()
    {
        Schema::dropIfExists('easy_constraints');
    }
}