<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id'); // Use bigIncrements for auto-incrementing primary key
			$table->string('name_en')->nullable();
			$table->string('email')->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps(); // Adds created_at and updated_at columns
		
			$table->string('name_ar')->nullable();
			$table->string('Tel_1')->nullable();
			$table->string('Tel_2')->nullable();
			$table->string('Tel_3')->nullable();
			$table->string('address')->nullable();
			$table->integer('isActive')->default(1);
			$table->text('note')->nullable();
			
			$table->integer('clinic_id')->nullable(); // No auto-increment
			$table->integer('company_id')->nullable(); // No auto-increment
			$table->integer('role_id')->nullable(); // No auto-increment
			$table->integer('site_id')->nullable(); // No auto-increment
			$table->double('descount_limit', 8, 2)->default(0);
			$table->string('pos')->default('0');
			$table->integer('account_id')->nullable(); // No auto-increment
		});
		
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}