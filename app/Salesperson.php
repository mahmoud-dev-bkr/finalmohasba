<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesperson extends Model
{
    protected $fillable = [
        'name_ar','name_en','phone','email','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];

}
