<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEasyRestrictionsTable extends Migration
{
    public function up()
    {
        Schema::create('easy_restrictions', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->unsignedInteger('id_account_from')->nullable(); // Nullable unsigned integer
			$table->unsignedInteger('id_account_to')->nullable(); // Nullable unsigned integer
			$table->string('amunt')->nullable(); // Nullable string for amount
			$table->date('date')->nullable(); // Nullable date field
			$table->string('Des')->nullable(); // Nullable string for description
			$table->string('Pdf')->nullable(); // Nullable string for PDF file path or name
			$table->string('type')->nullable(); // Nullable string for type
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
		
			$table->unsignedInteger('company_id')->nullable(); // Nullable unsigned integer
		});
		
    }

    public function down()
    {
        Schema::dropIfExists('easy_restrictions');
    }
}