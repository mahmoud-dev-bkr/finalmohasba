<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drop extends Model
{
    protected $fillable = [
        'Ref','Asset_classification','Asset_Name','Dipreciation_Period_Type','on','to','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];


}
