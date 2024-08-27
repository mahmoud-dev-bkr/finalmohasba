<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedAssetsTable extends Migration
{
    public function up()
    {
        Schema::create('fixed_assets', function (Blueprint $table) {
			$table->bigIncrements('id'); // Auto-incrementing primary key
		
			$table->string('code')->nullable(); // Nullable string
			$table->string('name_ar')->nullable(); // Nullable string for Arabic name
			$table->string('name_en')->nullable(); // Nullable string for English name
			$table->unsignedInteger('id_dep_Asset')->nullable(); // Nullable unsigned integer for department ID
			$table->string('Uint')->nullable(); // Nullable string for unit
			$table->string('Tex')->nullable(); // Nullable string for tax
			$table->string('Note')->nullable(); // Nullable string for note
			$table->string('barCode')->nullable(); // Nullable string for barcode
			$table->timestamps(); // Automatically adds created_at and updated_at as timestamps
		});
    }

    public function down()
    {
        Schema::dropIfExists('fixed_assets');
    }
}