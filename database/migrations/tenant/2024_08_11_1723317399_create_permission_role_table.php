<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();
            $table->integer('company_id')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}