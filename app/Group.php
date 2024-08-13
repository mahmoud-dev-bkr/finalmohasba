<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name_ar','name_en','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];

}
