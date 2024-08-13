<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoryDetails', function (Blueprint $table) {
            $table->id();

            // account_id foreign key with accounts table (assuming accounts table exists)
            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('set null');

            // site_from_id foreign key with sites table
            $table->unsignedBigInteger('site_from_id');
            $table->foreign('site_from_id')->references('id')->on('sites')->onDelete('cascade');

            // site_to_id foreign key with sites table
            $table->unsignedBigInteger('site_to_id');
            $table->foreign('site_to_id')->references('id')->on('sites')->onDelete('cascade');

            // product_id foreign key with products table (assuming products table exists)
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            // quantity of the product
            $table->integer('qty');

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
        Schema::dropIfExists('inventory_details');
    }
}
