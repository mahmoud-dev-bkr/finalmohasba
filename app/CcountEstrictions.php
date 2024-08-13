<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CcountEstrictions extends Model
{
    protected $table = "ccount_estrictions";
    protected $fillable = [
        'account_id',
        'type',
        'account_type',
        'ammount_from',
        'ammount_to',
        'from_to',
        'company_id', 
        'date',
        'site_id',
        'supplier_id',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
