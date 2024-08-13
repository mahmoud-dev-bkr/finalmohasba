<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'name_en', 'name_ar',
        'family_name_en', 'family_name_ar',
        'Type', 'Date_birth', 'Marital_status',
         'Nationality', 'country', 'email',
         'email_job', 'phon', 'phon_job',
         'phon_emergencie', 'address', 'Job_Number',
         'Job_Name', 'Join_Date', 'section', 'Cost_Type',
         'manger', 'Work_schedule', 'Educational_Stage',
         'Educational_stage_description', 'first_salary', 'last_salary',
         'Payment_Cycle', 'Type_salary', 'Salary_Value', 'Type_Allowances',
          'Reviews_Allowances', 'Calculated_Value_Allowances', 'Value_Allowances',
           'Type_Periodic_discounts', 'Reviews_Periodic_discounts', 'Calculated_Value_Periodic_discounts',
            'Value_Periodic_discounts', 'reference', 'Calculation_method', 'Social_Insurance', 'Document_Name',
            'Expiry_Date', 'Choose_File', 'company_id', 'site_id'
    ];
    protected $hidden = [
        '	updated_at	', '	created_at',
    ];
}
