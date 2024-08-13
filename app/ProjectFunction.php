<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectFunction extends Model
{

    protected $fillable = [
        'name','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
