<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EasyRestriction extends Model
{
    protected $table = "easy_restrictions";
    protected $fillable = [
        'id_account_from','id_account_to','amunt','date','Des','Pdf','type','company_id',


    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
