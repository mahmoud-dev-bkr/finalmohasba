<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropsTable extends Migration
{
    public function up()
    {
        Schema::create('drops', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->string('Ref')->nullable(); // Nullable string
			$table->string('Asset_classification')->nullable();
			$table->string('Asset_Name')->nullable();
			$table->string('Dipreciation_Period_Type')->nullable();
			$table->date('on')->nullable(); // Assuming these are date fields
			$table->date('to')->nullable(); // Assuming these are date fields
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
		
			$table->unsignedInteger('company_id')->nullable(); // Unsigned integer for company_id
		});
    }

    public function down()
    {
        Schema::dropIfExists('drops');
    }
}