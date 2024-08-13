<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = [
        'name',
        'pointsClient',
        'theCondition',
        'Tex_Number',
        'webName',
        'Facility',
        'email2',
        'email',
        'phon2',
        'phon',
        'street_1',
        'city_1',
        'st_1',
        'zip_1',
        'cantry_1',
        'bld_1',
        'status',
        'name_en',
        'Commercial_Record',
        'Commercial_Record_data',
        'Municipality_number',
        'Municipality_number_data',
        'Tax_number',
        'Tax_number_data',
        'code',
        'site_id',
        'group_id',
        'type_mony',
        'incentive',
        'reward_points',
        'salesperson_id',
        'client_classification_id',
        'credit_limit',
        'additional_lncentives',
        'contracts_rebates',
        'company_id',
        ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
