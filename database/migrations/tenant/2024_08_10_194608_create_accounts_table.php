<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('Note')->nullable();
            $table->string('code')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('type')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('count_child')->nullable();
            $table->integer('non_editable')->nullable();
            $table->integer('transactions')->nullable();
            $table->integer('level')->nullable();
            $table->integer('vis_account')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
