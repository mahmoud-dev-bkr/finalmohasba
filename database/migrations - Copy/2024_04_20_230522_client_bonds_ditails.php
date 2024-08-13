<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientBondsDitails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_bonds_ditails', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->integer('id_customers')->nullable();
            $table->date('Date')->nullable();
            $table->integer('id_Account')->nullable();
            $table->integer('type')->nullable();
            $table->string('Note')->nullable();
            $table->string('Amount')->nullable();
            $table->integer('PurchaseInvoices_id')->nullable();
            $table->integer('clientbons_id')->nullable();
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
        Schema::dropIfExists('client_bonds_ditails');
    }
}
