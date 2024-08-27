<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyAccountingEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_accounting_entries', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->text('Note')->nullable(); // Nullable, no default value needed
            $table->date('date')->nullable(); // Nullable, no default value needed
            $table->bigInteger('site_id')->nullable(); // Nullable, no default value needed
            $table->double('Total')->nullable(); // Nullable, no default value needed
            $table->integer('line')->default(1); // Default value 1, no need to specify length
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
        Schema::dropIfExists('daily_accounting_entries');
    }
}
