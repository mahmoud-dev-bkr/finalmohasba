<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepreciablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('depreciables', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('code')->nullable(); // Nullable, no default value needed
            $table->integer('id_dep_Asset')->nullable(); // Nullable, no default value needed
            $table->integer('id_Asset')->nullable(); // Nullable, no default value needed
            $table->string('Depreciables_period_type')->nullable(); // Nullable, no default value needed
            $table->date('Date_from')->nullable(); // Nullable, no default value needed
            $table->date('Date_to')->nullable(); // Nullable, no default value needed
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
        Schema::dropIfExists('depreciables');
    }
}
