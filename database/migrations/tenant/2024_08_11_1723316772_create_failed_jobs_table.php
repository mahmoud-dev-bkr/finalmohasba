<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
        
            $table->string('uuid')->nullable(); // Nullable string, no default needed
            $table->text('connection')->nullable(); // Nullable text, no default needed
            $table->text('queue')->nullable(); // Nullable text, no default needed
            $table->longText('payload')->nullable(); // Nullable longText, no default needed
            $table->longText('exception')->nullable(); // Nullable longText, no default needed
            $table->timestamp('failed_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP')); // Default current timestamp
        
            // If you want to add any indexing:
            $table->index('uuid'); // Optional: indexing the uuid for faster queries
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}