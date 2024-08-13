<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tax extends Model
{
    protected $table = 'taxes';
    protected $fillable = [
        'account_id','name_ar','name_en','code','rotio',

    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
