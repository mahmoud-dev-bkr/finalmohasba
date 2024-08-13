<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reward extends Model
{
    protected $fillable = [
        'Reference','functionary','Value','genre','Date','description','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
