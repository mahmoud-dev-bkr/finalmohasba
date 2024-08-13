<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            // site_from_id foreign key with sites table
            $table->unsignedBigInteger('site_from_id');
            $table->foreign('site_from_id')->references('id')->on('sites')->onDelete('cascade');

            // site_to_id foreign key with sites table
            $table->unsignedBigInteger('site_to_id');
            $table->foreign('site_to_id')->references('id')->on('sites')->onDelete('cascade');

            $table->date('date')->nullable();
            $table->string('Note')->nullable();
            $table->string('account_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
