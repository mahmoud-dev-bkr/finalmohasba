<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->string('user_type')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}