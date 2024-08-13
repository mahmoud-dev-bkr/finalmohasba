<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('family_name_en')->nullable();
            $table->string('family_name_ar')->nullable();
            $table->string('Type')->nullable();
            $table->string('Date_birth')->nullable();
            $table->string('Marital_status')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('email_job')->nullable();
            $table->string('phon')->nullable();
            $table->string('phon_job')->nullable();
            $table->string('phon_emergencie')->nullable();
            $table->string('address')->nullable();
            $table->string('Job_Number')->nullable();
            $table->string('Job_Name')->nullable();
            $table->string('Join_Date')->nullable();
            $table->string('section')->nullable();
            $table->string('Cost_Type')->nullable();
            $table->string('manger')->nullable();
            $table->string('Work_schedule')->nullable();
            $table->string('Educational_Stage')->nullable();
            $table->string('Educational_stage_description')->nullable();
            $table->string('first_salary')->nullable();
            $table->string('last_salary')->nullable();
            $table->string('Payment_Cycle')->nullable();
            $table->string('Type_salary')->nullable();
            $table->string('Salary_Value')->nullable();
            $table->string('Type_Allowances')->nullable();
            $table->string('Reviews_Allowances')->nullable();
            $table->string('Calculated_Value_Allowances')->nullable();
            $table->string('Value_Allowances')->nullable();
            $table->string('Type_Periodic_discounts')->nullable();
            $table->string('Reviews_Periodic_discounts')->nullable();
            $table->string('Calculated_Value_Periodic_discounts')->nullable();
            $table->string('Value_Periodic_discounts')->nullable();
            $table->string('Calculation_method')->nullable();
            $table->string('Social_Insurance')->nullable();
            $table->string('reference')->nullable();
            $table->string('Document_Name')->nullable();
            $table->string('Expiry_Date')->nullable();
            $table->string('Choose_File')->nullable();
            $table->integer('comapny_id')->nullable();
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
        Schema::dropIfExists('employes');
    }
}
