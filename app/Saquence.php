<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saquence extends Model
{
        protected $table = 'saquence';

    protected $fillable = [
     'code','num','type','start','site_id','type_id'
    ];
     protected $hidden = [
    'updated_at	','	created_at',
    ];
}
