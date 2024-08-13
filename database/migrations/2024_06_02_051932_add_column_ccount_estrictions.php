<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCcountEstrictions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ccount_estrictions', function (Blueprint $table) {
            // column site_id
            $table->string('site_id')->nullable();
            // column supplier_id
            $table->string('supplier_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ccount_estrictions', function (Blueprint $table) {
            // column site_id
            $table->string('site_id')->nullable();
            // column supplier_id
            $table->string('supplier_id')->nullable();
        });
    }
}
