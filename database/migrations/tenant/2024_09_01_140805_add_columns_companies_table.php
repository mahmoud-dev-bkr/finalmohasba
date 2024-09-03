<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('database')->nullable();  // Add 'database' column
            $table->string('user')->nullable();      // Add 'user' column
            $table->string('domain')->nullable();    // Add 'domain' column
            $table->string('password')->nullable();  // Add 'password' column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn(['database', 'user', 'domain', 'password']);
        });
    }
}
