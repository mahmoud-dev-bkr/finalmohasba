<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    protected $fillable = [
        'code',
        'Facility',
        'name_ar',
        'name_en',
        'email',
        'email2',
        'main_activity',
        'Activity_description',
        'Registered_capital',
        'Added_capital',
        'Commercial_Record',
      'Commercial_Record_data',
        'Municipality_number',
      'Municipality_number_data',
        'Tex_Number',
      'Tex_Number_data',
        'Human_Resources_License',
      'Human_Resources_License_data',
        'FDA_license',
      'FDA_license_data',
        'Social_Insurance',
      'Social_Insurance_data',
        'Chamber_Commerce',
      'Chamber_Commerce_data',
        'Another',
      'Another_data',
        'street_1',
        'city_1',
        'st_1',
        'zip_1',
        'cantry_1',
        'phon',
        'phon2',
        'code_phon',
        'code_phon2',
        'Inventory',
        'Accounts_tree',
        'Payment_accounts',
        'Accounts_tree2',
        'company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}

