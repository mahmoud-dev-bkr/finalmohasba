<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
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

    public function site()
    {
        return $this->belongsTo('App\Site');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
    public function carts()
    {
        return $this->hasMany('App\Cart');
    }
}
