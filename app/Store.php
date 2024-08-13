<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = "store";
    protected $fillable = [
        'site_id', 'product_id','qun','company_id',
     ];
     protected $hidden = [
     'updated_at	','	created_at',
     ];
}
