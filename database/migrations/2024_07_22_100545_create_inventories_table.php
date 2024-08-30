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
            $table->unsignedBigInteger('site_id');
            // $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');

            // site_to_id foreign key with sites table
            $table->unsignedBigInteger('account_id_plus');
            // $table->foreign('account_id_plus')->references('id')->on('accounts')->onDelete('cascade');

            $table->unsignedBigInteger('account_id_minus');
            // $table->foreign('account_id_minus')->references('id')->on('accounts')->onDelete('cascade');


            $table->unsignedBigInteger('created_by');
            // $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('updated_by');
            // $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');

           

            $table->date('date')->nullable();
            $table->string('Note')->nullable();
            $table->string('company_id')->nullable();
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
