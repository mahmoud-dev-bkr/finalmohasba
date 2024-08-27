<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
        
            $table->string('name')->nullable(); // Nullable string for name
            $table->string('cods')->nullable(); // Nullable string for codes
            $table->text('Note')->nullable(); // Nullable text for notes
            $table->string('acount')->nullable(); // Nullable string for account
            $table->timestamps(); // Automatically adds created_at and updated_at as timestamps
            $table->unsignedInteger('company_id')->nullable(); // Nullable unsigned integer for company ID
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}