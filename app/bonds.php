<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bonds extends Model
{
    protected $fillable = [
        'reference_number','entity','account','Type','description','date','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}

